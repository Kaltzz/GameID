<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://id-game-checker.p.rapidapi.com/mobile-legends/108067165/2545",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: id-game-checker.p.rapidapi.com",
		"X-RapidAPI-Key: 54d8a56159msha17e74a8d8e6492p138a14jsnd4c14d7bb0b5"
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

function cari_id_user(user_id) {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("usr_id").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "http://localhost/gameid/ml_page.php?user_id=" + user_id, true);
    xmlhttp.send();
  }

  function carikotatujuan(server_id) {
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("server_id").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "http://localhost/apirajaongkir/reqcarikota.php?id_provinsi=" + id_provinsi, true);
    xmlhttp.send();
  }
?>