<?php
$mobile - argv[1];
$name = argv[2];
$count = argv[3];

$i=0;
while($i <= $count)
{
  $curl = 'https://services.dealshare.in/userservice/api/v1/send-otp';
  $ch = curl_init($url);
  
$payload =json_encode(array("phoneNumber" => $mobile,
                            "name" =>$name,
                            "hashCode" => "",
                            "resendOtp" =>0));
  curl_setopt($ch, CURL_POSTFIELDS, $payload);
  curl_setopt($ch, CURL_HTTPHEADER, array('Content-Type:application/json'));
  curl_setopt($ch, CURL_RETURNTRANSFER, true);
  curl_close($ch);
  echo $result."\n";
   $i++;
}
?>
