<?php


#------------------[ Version 1.0 ] ------------------------#

$botToken = "1925075909:AAHJTTWLcflCBJ2nG3-jLQzKf8GErLqvSgY"; # ENTER HERE BOT TOKEN
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
	$mail=array("@websock.eu","@mylicense.ga","@morex.ga","@hotmail.red","@accpremium.ga");
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
}
	sendMessage($chatId, "<i>$pattern</i>");
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

#---------------[FakeAddress]------------------#
elseif ((strpos($message, "!28556") === 0)||(strpos($message, "/28556") === 0)){
	for ($i=0; $i < 1; $i++){ 
$jln=substr(str_shuffle('abcdefghijklmnopqrstuvwxyz1234567890'),0,4);
$desa=array("afd 2","afd 3","rimbajaya","rimbaajaya","rlmbajaya","rimbaajayaa","rlmbaajaya","rimba4 jaya","rimbaaa Jaya","r1mba jay4a","RM jaya","intan jaya","lntanjaya","lntaanjaya","inta4n jaya","lntaan jaya","bukit lntan makmur","buk1t intann makmurr","bukitt intan maakmur","rimbaa makmurr","rlmbamakmur","rimba4 maakmur","rimba makmuur","rimbo makmurr","rimb0 makmurr","rimboo makmuur","rimbo0 maakmur","rimbaa maakmur","tanah datar","tanaah datar","tanahh datarr","tanahh daatar","sungal kuti","sungaii kutii","sungai kuuti","sungai kuti1","Muara iintan","muara lntan","muaraa intaan","muaraa lntann","muuara intann","muaraa dilaam","muuara dilam","muara dlLam","pagarantapahh","pagaraantapah","pagarantaapahh","paagarantapahh","pagaranntapah","lntan jaya","intaan jaya","intann jaya","intann jayaa","lntann jayaa","lntan jaya4","lntaan jaaya","inttan jayaa","afd II sei intan","afd II seii intan","afd 2 sei intaan","afd 3 sei intan","afd 3 seii intaan","afd 3 sei intaaan");
$dess=$desa[array_rand($desa)];
//RT
$rt=1;
$rtt=17;
$rtx=rand($rt,$rtt);
//RW
$rw=1;
$rww=14;
$rwx=rand($rw,$rww);

$kecamatan=array("kotalama","kotaalama","kota4lama","kotaaLaama","k0talama","kotaa Lamaa","kotaa Lamaaa","koota Lamaa","K0ta La4ma","pagarantapah","pagraantapah","pagranntapah","pagarantapahh","pagaran tapah darusallam","pagaran tapahh darussalam","pagran tapah darusssalam","pagarran tapah darusssallam","pagran taapah darussallamm","kunto darussalam","kunto0 darussalam","kunto0 darussallam","kuntoO darusalllam","kunt0 darusallIam","kuntoO darus5alam");
$kec=$kecamatan[array_rand($kecamatan)];

$kodepos=array("28556","28456");
$pos=$kodepos[array_rand($kodepos)];
//$result=$name.$desa[array_rand($desa)];
sendMessage($chatId, "<i>Jalan : $jln,$dess%0ART: $rtx%0ARW: $rwx%0AKecamatan: $kec%0AKodePos: $pos%0A%0ACreated By Jnckteam </i>");
}
}
#---------------------------------------------[ RESPONSES ]------------------------------------#


#----------------------------------------------#
function sendMessage ($chatId, $message){
$url = $GLOBALS[website]."/sendMessage?chat_id=".$chatId."&text=".$message."&reply_to_message_id=".$message_id."&parse_mode=HTML";
file_get_contents($url);      
}


?>
