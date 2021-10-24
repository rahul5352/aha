<?php

//© Avishkar Patil

// Put Your Email and Password Below

$email = "mail@example.com"; // Put Your Email
$password = "Qwerty@123"; // Put Your Password

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://prod-api.viewlift.com/identity/signin?site=aha-tv&deviceId=browser-6c83ee48-b374-5a1e-c1fe-8fbd579f1b7b",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS =>"{\"email\":\"$email\",\"password\":\"$password\"}",
  CURLOPT_HTTPHEADER => array(
        "authority: prod-api.viewlift.com",
        "accept: application/json, text/plain, */*",
        "sec-ch-ua-mobile: ?0",
        "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36",
        "x-api-key: dtGKRIAd7y3mwmuXGk63u3MI3Azl1iYX8w9kaeg3",
        "content-type: application/json;charset=UTF-8",
        "origin: https://www.aha.video",
        "sec-fetch-site: cross-site",
        "sec-fetch-mode: cors",
        "sec-fetch-dest: empty",
        "referer: https://www.aha.video/",
        "accept-language: en-US,en-IN;q=0.9,en;q=0.8"
  ),
));

$result = curl_exec($curl);
curl_close($curl);

$hcauth =json_decode($result, true);
$auth = $hcauth['authorizationToken'];

echo $auth;

?>
