<?php



$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://api.msg91.com/api/v5/email/send",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n  \"to\": [\n    {\n      \"name\": \"Abbas\",\n      \"email\": \"abbas.uddin@ensomerge.com\"\n    }\n  ],\n  \"from\": {\n    \"name\": \"Joe\",\n    \"email\": \"support@bookmysales.com\"\n  },\n  \"cc\": [\n    {\n      \"email\": \"mukund.mukesh@ensomerge.com\"\n    },\n    {\n      \"email\": \"abbas.uddin@ensomerge.com\"\n    }\n  ],\n  \"domain\": \"bookmysales.com\",\n  \"mail_type_id\": \"1\",\n  \"template_id\": \"4361\",\n  \"variables\": {\n    
    \"VAR1\": \"emp_name\",\n    
    \"VAR2\": \"apply date $ time\",\n    
    \"VAR3\":\"fromdate\",\n   
    \"VAR4\":\"todate\",\n  
    \"VAR5\":\"hr remarks\",\n  
    \"VAR6\":\"applystatus\"\n 
    }\n}",
  CURLOPT_HTTPHEADER => [
    "Accept: application/json",
    "Content-Type: application/JSON",
    "authkey: 372323AjwXe2wBhWIR61efa85aP1"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
}

