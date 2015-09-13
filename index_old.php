<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.quikr.com/public/adsByCategory?categoryId=71&rent=false",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "x-quikr-app-id: 510",
    "x-quikr-signature: 629604e8414e5241e6cf1df649a76757a034a6f5",
    "x-quikr-token-id: 3067847"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $result = json_decode($response,true);
  var_dump($result);
  echo $result["AdsByLocationResponse"]["AdsByLocationData"]["docs"][0]["attribute_Ad_Type"];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quikr TEST</title>
	<script type="text/javascript" src="jquery.js"></script>
</head>

<script>
	$(document).ready(function(){

		$.ajax({
		    type: "GET",
		    url: "https://api.quikr.com/public/adsByLocation?lat=28.64649963&lon=77.22570038",
		    data: '{"X-Quikr-App-Id": "510","X-Quikr-Token-Id":"2983029","X-Quikr-Signature": "13898027bbe8afb1442956c4a4b280ef8dea3db4"}',
		    // dataType: 'jsonp',
		    contentType: "application/json",
		    success: function(data) {
		        console.log(data);
		    },
		    error: function(xhr, ajaxOptions, thrownError) {
		        console.log(thrownError);
		    }
		});
	});
</script>
<body>
	Quikr TEST
</body>
</html>