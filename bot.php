<?php

// PERUBAH WARNA TEXT

/* START COLOR */
$res="\033[0m";
$hitam="\033[0;30m";
$abu2="\033[1;30m";
$putih="\033[0;37m";
$putih2="\033[1;37m";
$merah="\033[0;31m";
$merah2="\033[1;31m";
$hijau="\033[0;32m";
$hijau2="\033[1;32m";
$kuning="\033[0;33m";
$kuning2="\033[1;33m";
$biru="\033[0;34m";
$biru2="\033[1;34m";
$purple="\033[0;35m";
$purple2="\033[1;35m";
$lblue="\033[0;36m";
$lblue2="\033[1;36m";
/* END COLOR */

//  KARAKTER KOTAK
$seru=$putih2." [".$kuning2."?".$putih2."] ";
$plus=$putih2." [".$kuning2."+".$putih2."] ";
$cek=$putih2." [".$kuning2."✓".$putih2."] ";
$lis=$putih2."======================================================";
$lis1=$putih2. "\n ================================================ \n";
//      BANNER      \\
$baner=$kuning2."
 _               _           ____          _
| |   _   _  ___| | ___   _ / ___|__ _ ___| |__
| |  | | | |/ __| |/ / | | | |   / _` / __| '_ \
| |__| |_| | (__|   <| |_| | |__| (_| \__ \ | | |
|_____\__,_|\___|_|\_\\__,  |\____\__,_|___/_| |_|
                      |___/
".$putih2;

$input=$kuning2."

".$putih2;
$input=$input.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$seru."GAME 0/1/2 \n".$lis."\n";
$baner=$baner.$cek." CREATED BY : ".$hijau2."IAM TUBASYA ".$seru."AUTO CLAIM !!! \n".$lis."\n";
// FUNCTION CURL POST
function post($url, $header, $data){
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");

        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }


/*
system("clear"); sleep(1);
echo $baner; sleep(1);
echo $plus."MASUKAN DATA TOKEN : ".$kuning2;
*/

$header=array(
"Accept: application/json",
"x-access-token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZGZhIjoiMzRkMzkwOTktNjc1Yy00MmE0LTkyMWUtMjZlNzdhYTQ2ZTBmIiwicmFuZG9tU2VlZCI6MC42MzE2NTQ4Mzc5OTAwMTgyLCJpYXQiOjE2MDkyMzM0MzgsImV4cCI6MTYxMTgyNTQzOH0.fQthXlAATdvcGGyVn-cB8I6aIkEEuPL615qzQAUO9Lc",
"Content-type: application/json",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 9; Mi A1 MIUI/V10.0.24.0.PDHMIXM)",
"Host: appli.picturehit.cool",
"Connection: Keep-Alive",
);


system("clear");
echo $baner; echo $plus."MASUKAN DATA ANDA : ".$kuning2;
$data=trim(fgets(STDIN));
system("clear");
echo $baner;
while(true):
echo $plus."MASUKAN DATA REFERER : ".$kuning2;
$reff=trim(fgets(STDIN));
	$url="https://appli.picturehit.cool/money/money_auth/getUser/";
$get=post($url,$header,$data);
$get=json_decode($get);
$tk=$get->token; $pk=$get->user->push_token;
$id=$get->user->_id; $idfa=$get->user->idfa;
$mail=$get->user->email; $point=$get->user->credits;
$mail=$cek."Mail Address : ".$biru2.$mail;
$point=$plus."Total points : ".$kuning2.$point;
echo $res." ~~~~~~~~~~~~  CRACK BY I'M TUBASYA  ~~~~~~~~~~~~".$lis1.$mail."\n".$point.$lis1;
$ua=array(
"Accept: application/json",
"x-access-token: ".$tk,
"Content-type: application/json",
"User-Agent: Dalvik/2.1.0 (Linux; U; Android 9; Mi A1 MIUI/V10.0.24.0.PDHMIXM)",
"Host: appli.picturehit.cool",
"Connection: Keep-Alive",
);
  $data='{"code_invite":"'.$reff.'","idfa":"'.$idfa.'"}';
	$url="https://appli.picturehit.cool/money/money_users/addParrain/";
$url=post($url,$ua,$data);
$claim=json_decode($url);
$claim=$claim->result; $claim=$seru."Claim Response : ".$hijau2.$claim;
echo $claim.$lis1; sleep(1);
  $data='{"userId":"'.$id.'","push_token":"'.$pk.'"}';
	$url="https://appli.picturehit.cool/money/money_users/updatePushToken/";
$push=post($url,$ua,$data);

endwhile;
/*
$p="250000";
$k="10";
$pp=$p*$k;
	$data='{"bet":-'.$p.',"userId":"'.$id.'"}';
  $url="https://appli.picturehit.cool/money/money_users/launchWheel/";
$out=post($url,$ua,$data);
	$data='{"bet":'.$pp.',"userId":"'.$id.'"}';
	$claim=post($url,$ua,$data);
$claim=json_decode($claim);
$claim=$claim->result; $claim=$seru."Claim Response : ".$hijau2.$claim;
echo $claim.$lis1; sleep(1);
endwhile;
/*
  $data='{"source":"Video watched","userId":"'.$id.'","value":1}';
	$url="https://appli.picturehit.cool/money/money_users/receiveDeltaCredits/";
$claim=post($url,$ua,$data);
$claim=json_decode($claim);
$claim=$claim->result; $claim=$seru."Claim Response : ".$hijau2.$claim;
echo $claim.$lis1; sleep(1);
endwhile;
  $data='{"cplRiche":false,"idfaa":"'.$idfa.'","device":"android"}';
	$cpl=post("https://appli.picturehit.cool/money/money_cpls/getCPL/",$ua,$data);
*/

