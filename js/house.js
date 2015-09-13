
$(document).ready(function(){
  var lat;
  var lon;
  // $(".location").click(function(){
    navigator.geolocation.getCurrentPosition(showPosition);
  // });
  function showPosition(position) {
      lat = position.coords.latitude;
      lon = position.coords.longitude;
  }

  function initMap() {
    var myLatLng = {lat: lat, lng: lon};

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 4,
      center: myLatLng
    });

    var marker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      draggable: true,
      title: 'Your location'
    });
    google.maps.event.addListener(marker, 'dragend', function(event){
    $latitude=event.latLng.lat().toFixed(3);
    $longitude=event.latLng.lng().toFixed(3);
    console.log($latitude);
    console.log($longitude);
      //document.getElementById('current').innerHTML = '<p>Marker dropped: Current Lat: ' + event.latLng.lat().toFixed(3) + ' Current Lng: ' + event.latLng.lng().toFixed(3) + '</p>';
  });
  }

  $.ajax({
    method: "POST",
    url: "categoryHouse.php",
    data: { lat: lat, lon: lon},
    // dataType: "application/json",
    success: function(data) {
      var obj = JSON.parse(data);
      var docs = obj["AdsByLocationResponse"]["AdsByLocationData"]["docs"];
      console.log(docs);

      var myExp = new RegExp(dInput,"i");
      $("#Grid").empty();
      var avg = 0;
      var no = 0;
      $.each(docs, function(key, val) {
        no++;
        avg = ((avg*no) + val.attribute_Price)/no;
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
    console.log(avg);
    $(".average").html(avg);
    },
    error: function(xhr,abc,thrownError) {
    }
  });
});
