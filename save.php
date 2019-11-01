<?php
	include 'require/dbconnect.php';
	session_start();
	// require 'rand.php'

	// vars
	$date = date("d/m/Y H:i");

	

	// Generate account number
	function generate_accountnumber(){
		// Generate random number (try and keep it 11 digits)
		$x = rand(10000000000, 99999999999);
		return $x;
	}

	if($_POST['type']==1){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$ssn=$_POST['ssn'];
		$password=$_POST['password'];

		// Encrypt password with sha-256 encryption
		$encr_password = hash('sha256', $password);

		$duplicate=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
		if (mysqli_num_rows($duplicate)>0)
		{
			echo json_encode(array("statusCode"=>201));
		}
		else{
			$sql = "INSERT INTO `users`(`name`, `email`, `ssn`, `password`, `datecreated`) 
			VALUES ('$name','$email','$ssn', '$encr_password', '$date')";

			if (mysqli_query($conn, $sql)) {
				echo json_encode(array("statusCode"=>200));
			} 
			else {
				echo json_encode(array("statusCode"=>201));
			}
		}

		mysqli_close($conn);
	}
	if($_POST['type']==2){
		$email=$_POST['email'];
		$password=$_POST['password'];
		$ssn=$_POST['ssn'];

		$encr_pass = hash('sha256', $password);

		// $check=mysqli_query($conn,"SELECT * FROM users WHERE email='$email' AND password='$encr_pass' AND ssn='$ssn'");

		// get ID and use to set session to ID instead of email
		$res=mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND ssn='$ssn' AND password='$encr_pass'");
        $row=mysqli_fetch_array($res);
		$count = mysqli_num_rows($res);

		if($count == 1){
            $_SESSION['id'] = $row['id'];
			echo json_encode(array("statusCode"=>200));
        }
        else {
            echo json_encode(array("statusCode"=>201));
        }

        if (!$res){
	    	printf("Error: %s\n", mysqli_error($conn));
	    exit();
}

		/*if (mysqli_num_rows($check)>0)
		{
			$_SESSION['email'] = $email;
			echo json_encode(array("statusCode"=>200));
		}
		else{
			echo json_encode(array("statusCode"=>201));
		}*/

		mysqli_close($conn);
	}

	//Function to generate unique alpha numeric code
	function generateRandomNumer($conn){
		// Gets today's date and time
		$creation_date = date("d/m/Y H:i");

		// Get user ID
		$y_id = $_SESSION['id'];
	    $randomString = rand(10000000000, 99999999999);

	    // Get values from textboxes
	    $accountname=$_POST['accountname'];
		$accounttype=$_POST['accounttype'];
		$balance=100.35;

	    //Check newly generated Code exist in DB table or not.
	    $query = "SELECT * FROM accounts WHERE accountnumber='" . $randomString . "'";
	    $result=mysqli_query($conn,$query);
	    $resultCount=mysqli_num_rows($result);

	    if($resultCount>0){
	        //IF code is already exist then function will call it self until unique code has been generated and inserted in Db.
	        generateRandomNumer($conn);
	    }
	    else{
	        //Unique generated code will be inserted in DB.
	        $sql = mysqli_query($conn,"INSERT INTO `accounts`(`accountname`, `accounttype`, `accountnumber`, `accountcreation`, `accountbalance`, `belongstoid`) VALUES('$accountname','$accounttype','$randomString','$creation_date','$balance', '$y_id')");
	    }
	}

	if($_POST['type']==3){
		//Loop to insert number of unique code in DB.
		//NUM_OF_RECORD_YOU_WANT_TO_INSERT define constant which contain number of unique codes you wants to insert in DB. 
		for($i = 0; $i < 1 ; $i++){
		    generateRandomNumer($conn);
		}

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));


		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}
	}

	if($_POST['type']==4){
		$accountfrom = $_POST['accountfrom'];
		$accountto = $_POST['accountto'];
		$message = $_POST['message'];
		$quantity = $_POST['quantity'];
		$userid = $_SESSION['id'];

		$sql = "INSERT INTO `transactions`(`fromaccount`, `toaccount`, `message`, `amount`, `date`, `belongstoid`) 
			VALUES ('$accountfrom','$accountto','$message', '$quantity', '$date', '$userid')";

		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));

			$x=mysqli_query($conn, "SELECT * FROM accounts WHERE belongstoid='" . $_SESSION['id'] . "' AND accountname='$accountfrom'");
			$fromsrc=mysqli_fetch_array($x);

			$y=mysqli_query($conn, "SELECT * FROM accounts WHERE belongstoid='" . $_SESSION['id'] . "' AND accountname='$accountto'");
			$tosrc=mysqli_fetch_array($y);
			//
			$fromacc = $fromsrc['accountbalance'];
			$toacc = $tosrc['accountbalance'];
			//
			$finalfromacc = $fromacc - $quantity;
			$finaltoacc = $toacc + $quantity;

			mysqli_query($conn, "UPDATE accounts SET accountbalance = '$finalfromacc' WHERE belongstoid='" . $_SESSION['id'] . "' AND accountname='$accountfrom'");
			mysqli_query($conn, "UPDATE accounts SET accountbalance = '$finaltoacc' WHERE belongstoid='" . $_SESSION['id'] . "' AND accountname='$accountto'");
		} 
		else {
			echo json_encode(array("statusCode"=>201));
		}

		mysqli_close($conn);
	}


?>