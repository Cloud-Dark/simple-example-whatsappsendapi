<?php
//biarkan default
function http_request($data, $obj){
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => "$obj->url/api/send-message.php?api_key=$obj->api_key",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => json_encode($data),
  CURLOPT_HTTPHEADER => array(
    'Content-Type: text/plain',
    'Cookie: PHPSESSID=4479d23a756cea2016071774bbf3b865'
  ),
));

$response = curl_exec($curl);
curl_close($curl);
return $response;
}
