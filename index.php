<?php

$curl = curl_init();

curl_setopt_array($curl, [
  CURLOPT_URL => "https://mshabani.ir/",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_POSTFIELDS => "",
  CURLOPT_COOKIE => "PHPSESSID=fe2b3e7087daa78a3e9cae94d939f86c; _csrf=035b1aabf69a3d6b79318f0ed9a8321d456af4cc694391d89b756e992ab8ea9ca%253A2%253A%257Bi%253A0%253Bs%253A5%253A%2522_csrf%2522%253Bi%253A1%253Bs%253A32%253A%2522fiVvAPCqkerW-U9Mgz39yaAITDgMFpUo%2522%253B%257D",
  CURLOPT_HTTPHEADER => [
    "content-type: text/plain"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
