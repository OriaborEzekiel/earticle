<?php
	class EmailsController extends AppController{

			public function send_mail($reciever = "oriaborezekiel4success@gmail.com", $name = "Ezekiel", $pass = "psc1104269"){

				$message = "Hi, " . $name . " click the link to confirm your registration " . " ";
				App::uses("CakeEmail", "Network/Email");
				$email = new CakeEmail("smtp");
				$email->from(array("oriaborezekiel4success@gmail.com"));
				$email->to($reciever);
				$email->subject("Mail Confirmation");
				$email->send($message);

			}


	}



?>