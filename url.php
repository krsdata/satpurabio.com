
<?php
//$url = "http://api.openweathermap.org/data/2.5/forecast/city?zip=110001&APPID=2855cb6388c2f5f17ba91253358263b0";
$url = "http://api.openweathermap.org/data/2.5/forecast?q=452001,in&APPID=2855cb6388c2f5f17ba91253358263b0";
$ch = curl_init();
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
$contents = curl_exec($ch);
if (curl_errno($ch)) {
  echo curl_error($ch);
  echo "\n<br />";
  $contents = '';
} else {
  curl_close($ch);
}

if (!is_string($contents) || !strlen($contents)) {
echo "Failed to get contents.";
$contents = '';
}

//echo $contents;


//$json = file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=a2f2062d64fd705bbb32ce4c44e8ebb508d080990528d7cb4f1a0c5e7ddf5c1e&ip=".$ip."&format=json"); 
//$json = json_decode($json,true); 
//$city = $json['cityName'];


$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=a2f2062d64fd705bbb32ce4c44e8ebb508d080990528d7cb4f1a0c5e7ddf5c1e&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 
//print the array to see the fields if you wish.
//print_r($url);
 
echo "<table border='1' width='50%' align='center'><tr><td>COUNTRY:</td><td>";
echo $url->countryName;
echo "</td></tr><tr><td>CITY:</td><td>";
echo $url->cityName;
echo "</td></tr><tr><td>STATE OR REGION:</td><td>";
echo $url->regionName;
echo "</td></tr><tr><td>IP ADDRESS:</td><td>";
echo $url->ipAddress;
echo "</td></tr><tr><td>COUNTRY CODE:</td><td>";
echo $url->countryCode;
echo "</td></tr><tr><td>LATITUTE:</td><td>";
echo $url->latitude;
echo "</td></tr><tr><td>LONGITUDE:</td><td>";
echo $url->longitude;
echo "</td></tr><tr><td>TIMEZONE:</td><td>";
echo $url->timeZone;
echo "</td></tr><tr></table>";
?> 
