<?php
session_start();
$data = $_POST;
if($data != null & isset($data)){

	$type = $data['type'];

	$types = ["message","login"];

	if(in_array($type, $types)){

		$Fullname = $data['fullname'];
		$email = $data['email'];
		$message = $data['message'];
		$subject =  $data['subject'];

		$receiver = "1999roniengwe@gmail.com";


		$message = "Test Email Delivered:\nSender :".$Fullname." @ ".$email."\nMessage\n".$message;

		if (!mail($receiver, $subject, $message)) {
			$_SESSION['msg'] = 
'<div class="message active">
	<div class="message_inner">
		<div class="inside bg-danger">
			<div>
				"Message Not sent.Please try again."
				<button class="btn-danger btn btn-md" id="closeMessage">
					<i class="fa fa-thumbs-up fa-lg" ></i>
				</button>
			</div>
		</div>
	</div>
</div>';
		}else{

			$_SESSION['msg'] = 
'<div class="message active">
	<div class="message_inner">
		<div class="inside bg-success">
			<div>
				Thank you '.$Fullname.'.We will get back to you soon."
				<button class="btn-primary btn btn-md" id="closeMessage">
					<i class="fa fa-thumbs-up fa-lg" ></i>
				</button>
			</div>
		</div>
	</div>
</div>';
			#$_SESSOIN['msg'] = "Thank you ".$Fullname.".<br>We will get back to you soon ";
		}



	}else{

	}

}else{

}

?>