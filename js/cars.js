
$(document).ready(function(){
  var lat;
  var lon;
  $(".location").click(function(){
    navigator.geolocation.getCurrentPosition(showPosition);
  });
  function showPosition(position) {
      lat = position.coords.latitude;
      lon = position.coords.longitude;
  }

  $('#cars-search-box').keyup(function() {
      var dInput = this.value;
      var city = $("#city").val();
      // alert(city + dInput);
      if($(".show-all").hasClass("active")) {
        $.ajax({
        method: "POST",
        url: "categoryTaxi.php",
        data: { input: dInput, city: city},
        // dataType: "application/json",
        success: function(data) {
          var obj = JSON.parse(data);
          var docs = obj["AdsByCategoryResponse"]["AdsByCategoryData"]["docs"];
          console.log(docs);

          var myExp = new RegExp(dInput,"i");
          $("#Grid").empty();
          $.each(docs, function(key, val) {
            // alert(val);
            if ((val.content.search(myExp) != -1) || (val.categoryName.search(myExp)!=-1)) {
                // alert(v.age);
                if(val.image_count=="0") {
                  $("#Grid").append('<li class="mix web_design mix_all" style="display: inline-block;  opacity: 1;"><a class="image-popup-no-margins" href="http://www.ashokenterprises.co.in/upload/img/sorry.jpg"><img src="http://www.ashokenterprises.co.in/upload/img/sorry.jpg"><span><h4 class="underline heading-description">' + val.title + '</h4><p class="center description">' + val.content + '</p></span></a></li>')
                } else {
                  $("#Grid").append('<li class="mix web_design mix_all" style="display: inline-block;  opacity: 1;"><a class="image-popup-no-margins" href="' + val.images[0] + '"><img src="' + val.images[0] + '"><span><h4 class="underline heading-description">' + val.title + '</h4><p class="center description">' + val.content + '</p></span></a></li>')
                }
                return;
            }
          });
        },
        error: function(xhr,abc,thrownError) {
        }
      });
      } else if($(".location").hasClass("active")) {

          $.ajax({
          method: "POST",
          url: "locationTaxi.php",
          data: { lat: lat, lon: lon},
          // dataType: "application/json",
          success: function(data) {
            var obj = JSON.parse(data);
            var docs = obj["AdsByLocationResponse"]["AdsByLocationData"]["docs"];
            console.log(docs);

            var myExp = new RegExp(dInput,"i");
            $("#Grid").empty();
            $.each(docs, function(key, val) {
              // alert(val);
              if ((val.content.search(myExp) != -1) || (val.categoryName.search(myExp)!=-1)) {
                  // alert(v.age);
                  if(val.image_count=="0") {
                    $("#Grid").append('<li class="mix web_design mix_all" style="display: inline-block;  opacity: 1;"><a class="image-popup-no-margins" href="http://www.ashokenterprises.co.in/upload/img/sorry.jpg"><img src="http://www.ashokenterprises.co.in/upload/img/sorry.jpg"><span><h4 class="underline heading-description">' + val.title + '</h4><p class="center description">' + val.content + '</p></span></a></li>')
                  } else {
                    $("#Grid").append('<li class="mix web_design mix_all" style="display: inline-block;  opacity: 1;"><a class="image-popup-no-margins" href="' + val.images[0] + '"><img src="' + val.images[0] + '"><span><h4 class="underline heading-description">' + val.title + '</h4><p class="center description">' + val.content + '</p></span></a></li>')
                  }
                  return;
              }
            });
          },
          error: function(xhr,abc,thrownError) {
          }
        });
      }
  });
});
