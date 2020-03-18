<?php
 
$ua = array("Accept-Charset: UTF-8",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
"Content-Type: text/html; charset=UTF-8",
"referer: https://goldenltc.com/dashboard.php",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,jv;q=0.6,su;q=0.5",
"cookie: __cfduid=d4f3d9ef68cb2070016421eaa2f67aaa3158423884",
"cookie: _ga=GA1.2.1152507360.1584238842",
"cookie: _gid=GA1.2.867459676.1584433186",
"cookie: PHPSESSID=1e074db840df579e05faec6468890621",
"accept-language: id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7,jv;q=0.6,su;q=0.5",
"Host: goldenltc.com",
"User-Agent: Mozilla/5.0 (Linux; Android 10; SM-M205G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Mobile Safari/537.36");
$url = "https://goldenltc.com/fauset.php";
 
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, );
curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
curl_close($ch);
$js = json_decode($result, true);
echo "Login Success\n";
echo "Welcome To CoinPade Bot ".$js["user"]["name"]."\n";
echo "Your Ballance : ".$js["user"]["user_balance"]."\n";
 
echo "\n\n\nStart Claiming.....!\n";
while(True){
   $urlclaim = "https://goldenltc.com/free_doge.php";
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $urlclaim);
   curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_POST, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, );
   curl_setopt($ch, CURLOPT_HTTPHEADER, $ua);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
   $result = curl_exec($ch);
   curl_close($ch);
   $jsn = json_decode($result, true);
   echo "You Get ".$jsn["claimed_pades"]." | Ballance : ".$jsn["user"]["user_balance"]."\n";
// current time
echo date('h:i:s') . "\n";

// sleep for 1jam seconds
sleep(3600);

// wake up !
echo date('h:i:s') . "\n";
}
?>
