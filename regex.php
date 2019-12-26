<?php

function getLink($url){
  $curl_handle=curl_init();
  curl_setopt($curl_handle,CURLOPT_URL,$url);
  curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,0);
  curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl_handle);
  curl_close($curl_handle);
 
  return $result;
}
$file_contents = getLink("http://portal.petrokimia-gresik.com/");

$data = array();
preg_match_all('/<p class=\"mb-5\">(.*?)<\/p>/s',$file_contents,$data);
foreach($data[0] as $index=>$value)
echo $value ,  "<br>";

?>