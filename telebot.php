<?php


#------------------[ Version 1.0 ] ------------------------#

$botToken = "5306229018:AAHLxlv53noo7tr7B3PhaaHlWy5ujLrSdOg"; # ENTER HERE BOT TOKEN
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
sendMessage($chatId, "<i>FakeMail: /mail Generate Random Mail%0AInfo: /info Know Yourself%0ABase64 Encode: /encode64 YourTextHere%0ABase64 Decode: /decode64 YourTextHere%0AHEX2bin: /hexbin YourHexHere%0ABIN2hex: /binhex YourBinHere%0A%0ACreated By Jnckteam </i>");
}
#------------[User Info]---------#
elseif ((strpos($message, "!info") === 0)||(strpos($message, "/info") === 0)){
sendMessage($chatId, "<i>YOUR ID: <code>$userId</code>%0AFirst Name: $firstname%0AUsername: @$username%0A%0ACreated By Jnckteam </i>");
}
#---------------[MAIL RND]------------------#
elseif ((strpos($message, "!mail") === 0)||(strpos($message, "/mail") === 0)){
	for ($i=0; $i < 1; $i++){ 
	$name=substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'),0,6);
	$mail=array("@emvil.com","@eluvit.com","@lohpcn.com","@readof.site","@ffo.kr","@txtee.site","@lovebite.net","@4su.one");
	$result=$name.$mail[array_rand($mail)]; //For CLi
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
$dec = base64_decode($decode64);
sendMessage($chatId, "<i>$dec</i>");
}

#---------------[Key-GEN]--------------#
elseif ((strpos($message, "!ccleaner") === 0)||(strpos($message, "/ccleaner") === 0)){
	for ($i=0; $i < 1; $i++) {
$id1=substr(str_shuffle('ABC123GHIJKLMNOPQRSTUVWXYZDEF456789'), 0,4);
$id2=substr(str_shuffle('123456GHIJKLMNOPQRSTUVWXYZABCDEF789'), 0,4);
$id3=substr(str_shuffle('ABCDEFGHI34567OPQRSTUVWXYZ12JKLMN89'), 0,4);
$id4=substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ123456789'), 0,1);
   $pattern="C2YW-$id1-$id2-$id3-$id4"."ZPC";
	sendMessage($chatId, "<i>$pattern</i>");
}
}

#---------------[HEX]------------------#
elseif ((strpos($message, "!hexbin") === 0)||(strpos($message, "/hexbin") === 0)){
$hexbin = substr($message, 8);
$bin2 = hex2bin($hexbin);
sendMessage($chatId, "<i>$bin2</i>");
}
elseif ((strpos($message, "!binhex") === 0)||(strpos($message, "/binhex") === 0)){
$binhex = substr($message, 8);
$hex2 = bin2hex($binhex);
sendMessage($chatId, "<i>$hex2</i>");
}
}
#---------------------------------------------[ RESPONSES ]------------------------------------#


#----------------------------------------------#
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}


?>
