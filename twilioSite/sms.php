<?php

require "twilio-php/Services/Twilio.php";

sendMessage("4126138065", "Hello! This is a test");

function sendMessage($number, $message){
	
	$AccountSid = "ACad54e47a3073924abe7acda70b081b1d";
    $AuthToken = "654a8e0c843f782240736f4965d22cf8";
    $TwilioNumber= "412-960-4877";
    
    $client = new Services_Twilio($AccountSid, $AuthToken);    
  
    $sms = $client->account->messages->sendMessage($TwilioNumber, $number, $message);
    }
}
    
?>