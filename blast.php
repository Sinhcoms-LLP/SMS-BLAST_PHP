
<?php

$mobiles = $argv[1];
$name = $argv[2];
$count = $argv[3];

$i=0;
while($i <= $count)
{
  $url = 'https://services.dealshare.in/userservice/api/v1/send-otp';
  $ch = curl_init($url);

 $payload = json_encode(array("phoneNumber" => $mobiles,
                            "name" =>$name,
                            "hashCode" => "",
                            "resendOtp" =>0));
  curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($ch);
  curl_close($ch);
  echo $result."\n";
   $i++;
}

