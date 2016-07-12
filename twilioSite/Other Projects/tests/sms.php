<?php

    require "twilio-php/Services/Twilio.php";

    $AccountSid = "ACad54e47a3073924abe7acda70b081b1d";
    $AuthToken = "654a8e0c843f782240736f4965d22cf8";
    $TwilioNumber= "412-960-4877";
    
    $client = new Services_Twilio($AccountSid, $AuthToken);
 
    $people = array(
        "+14126138065" => "Adam Musciano",       
    );
 
    
    foreach ($people as $number => $name) {
 
        $sms = $client->account->messages->sendMessage($TwilioNumber, $number,
            "Hey $name, the date is: ". date('m-d-Y'));
    }

	?>
	<body>
		<form action="index.php">
			<input type="submit" value= "go back!">
		</form>
	</body>