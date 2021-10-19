<?php

#----------------- [BOT Tele] --------------------------#

#------------------[ Version 1.0 ] ------------------------#

$botToken = "1925075909:AAEtJqyjnr4QLpK_z09r3pSeWLvZ47rfcbI"; # ENTER HERE BOT TOKEN
$website = "https://api.telegram.org/bot".$botToken;
error_reporting(0);
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

#------------------[Start]-------------#
if ((strpos($message, "!start") === 0)||(strpos($message, "/start") === 0)){
sendMessage($chatId, "<i>Hello $firstname now you can use /cmd%0A%0ACreated By Jnckteam </i>");
}
#----------- [ COMMANDS ] --------#
elseif ((strpos($message, "!cmd") === 0)||(strpos($message, "/cmd") === 0)){
sendMessage($chatId, "<i>BIN: /mail Generate Random Mail%0AINFO: /info Know Yourself%0ABase64 Encode: /encode64 YourTextHere%0ABase64 Decode: /decode64 YourTextHere%0AHEX2bin: /hexbin YourHexHere%0ABIN2hex: /binhex YourBinHere%0A%0ACreated By Jnckteam </i>");
}
#------------[User Info]---------#
elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<i>YOUR ID: <code>$userId</code>%0AFirst Name: $firstname%0AUsername: @$username%0A%0ACreated By Jnckteam </i>");
}
#---------------[MAIL RND]------------------#
elseif ((strpos($message, "!mail") === 0)||(strpos($message, "/mail") === 0)){
//$count= 1;//jumlah
//Generate Looping Data
for ($i=0; $i < 1; $i++){ 
	$name=substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'),0,6);
	$shuffle=substr(str_shuffle('1234567890'),0,3);
	$mail=array("@websock.eu","@mylicense.ga","@morex.ga","@hotmail.red","@accpremium.ga");
	$result=$name.$shuffle.$mail[array_rand($mail)]; //For CLi
	//echo $result;
	sendMessage($chatId, "<i>https://generator.email/$result</i>");
}
}
#---------------[BASE64]------------------#
elseif ((strpos($message, "!encode64") === 0)||(strpos($message, "/encode64") === 0)){
$encode64 = substr($message, 10);
$enc=base64_encode($encode64);
sendMessage($chatId, "<i>$enc</i>");
}
elseif ((strpos($message, "!decode64") === 0)||(strpos($message, "/decode64") === 0)){
$decode64 = substr($message, 10);
$dec=base64_decode($decode64);
sendMessage($chatId, "<i>$dec</i>");
}

#---------------[HEX]------------------#
elseif ((strpos($message, "!hexbin") === 0)||(strpos($message, "/hexbin") === 0)){
$hexbin = substr($message, 8);
$bin2=hex2bin($hexbin);
sendMessage($chatId, "<i>$bin2</i>");
}
elseif ((strpos($message, "!binhex") === 0)||(strpos($message, "/binhex") === 0)){
$binhex = substr($message, 8);
$hex2=bin2hex($binhex);
sendMessage($chatId, "<i>$hex2</i>");
}
#---------------------------------------------[ RESPONSES ]------------------------------------#


#----------------------------------------------#
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

#------- VERSION 1.0

?>
