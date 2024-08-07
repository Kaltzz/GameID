<?php

$curl = curl_init();

$id_usr = $_GET['id_usr'];
$id_svr = $_GET['id_svr'];

//echo $id_usr;
//echo $id_svr;

curl_setopt_array($curl, [
	CURLOPT_URL => "https://id-game-checker.p.rapidapi.com/mobile-legends/".$id_usr."/".$id_svr,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: id-game-checker.p.rapidapi.com",
		"X-RapidAPI-Key: b29aa894bemsh4998f826881004cp140bafjsnf5af43323069
        "
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    //echo $response;
    $data = json_decode($response, false);
   // echo "<pre>"; print_r($data); echo "</pre>";
      echo 'User ID     : '.$data->data->userId;
      echo '<br/>';
      echo 'Username  : '.$data->data->username;
      echo '<br/>';
  }
?>