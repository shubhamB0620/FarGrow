<?php 
session_start();

	// variable declaration
	$Fname="";
	$Lname="";
	$MobNo = "";
	$email = "";
	$Addr1="";
	$Addr2="";
	$zone_id="";
	$postcode="";
	$country_id="";
	$zone_id_2=""; 
	$errors = array(); 
	//$_SESSION['success'] = "";
	

	// connect to database
    $db = mysqli_connect("sql311.epizy.com", "epiz_25837779", "Shubham0706", "epiz_25837779_registration");

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$Fname = mysqli_real_escape_string($db, $_POST['Fname']);
		$Lname = mysqli_real_escape_string($db, $_POST['Lname']);
		$MobNo = mysqli_real_escape_string($db, $_POST['MobNo']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$Addr1 = mysqli_real_escape_string($db, $_POST['Addr1']);
		$Addr2 = mysqli_real_escape_string($db, $_POST['Addr2']);
		$zone_id = mysqli_real_escape_string($db, $_POST['zone_id']);
		$postcode = mysqli_real_escape_string($db, $_POST['postcode']);
		$country_id = mysqli_real_escape_string($db, $_POST['country_id']);
		$zone_id_2 = mysqli_real_escape_string($db, $_POST['zone_id_2']);
		$Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
		$Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($Fname)) { array_push($errors, "Firstname is required"); }
		if (empty($Lname)) { array_push($errors, "Lastname is required"); }
		if (empty($MobNo)) { array_push($errors, "MobNo is required"); }
		if (empty($Addr1)) { array_push($errors, "Address is required"); }	
		if (empty($Password_1)) { array_push($errors, "Password is required"); }
		//if (empty($Password_2)) { array_push($errors, "Password is required"); }
		
		if ($Password_1 != $Password_2) {
			array_push($errors, "The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($Password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO farmers(Fname,Lname,MobNo,email,Addr1,Addr2,zone_id,postcode,country_id,zone_id_2,password) 
					  VALUES('$Fname','$Lname','$MobNo','$email','$Addr1','$Addr2','$zone_id','$postcode','$country_id','$zone_id_2','$password')";
			$result = mysqli_query($db, $query);
            $user = mysqli_fetch_assoc($result);
			$_SESSION['MobNo'] = $MobNo;
            $_SESSION['Fname'] = $Fname;
            $_SESSION['Lname'] = $Lname;
            $_SESSION['email'] = $email;
            $_SESSION['Addr1'] = $Addr1;
            $_SESSION['Addr2'] = $Addr2;
            $_SESSION['zone_id'] = $zone_id;
            $_SESSION['postcode'] = $postcode;
            $_SESSION['country_id'] = $country_id;
            $_SESSION['zone_id_2'] = $zone_id_2;
            $_SESSION['password'] = $password;
			$_SESSION['success'] = "You are now logged in";
            $_SESSION['buy_flag']=0;
			
		}
        /*if(mysqli_query($db, $query))  
        {  
           echo '<script>alert("You are now logged in succesfully")</script>'; 
            
        }*/
        header('location: index.php');

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$MobNo = mysqli_real_escape_string($db, $_POST['MobNo']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($MobNo)) {
			array_push($errors, "MobNo is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM farmers WHERE MobNo='$MobNo' AND password='$password'";
			$results = mysqli_query($db, $query);

              
             
            while($row = mysqli_fetch_array($results)){
                $_SESSION['MobNo'] = $row['MobNo'];
                $_SESSION['Fname'] = $row['Fname'];
                $_SESSION['Lname'] = $row['Lname'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['Addr1'] = $row['Addr1'];
                $_SESSION['Addr2'] = $row['Addr2'];
                $_SESSION['zone_id'] = $row['zone_id'];
                $_SESSION['postcode'] = $row['postcode'];
                $_SESSION['country_id'] = $row['country_id'];
                $_SESSION['zone_id_2'] = $row['zone_id_2'];
                
            }
			if (mysqli_num_rows($results) == 1) {
                echo '<script>alert("welcome")</script>';
				$_SESSION['MobNo'] = $MobNo;
				$_SESSION['success'] = "You are now logged in";

				//header('location: index.php');
			}
            else {
                echo '<script>alert("Error login")</script>';
				array_push($errors, "Wrong MobNo/password combination");
			}
            
               
		}
        
       
	}



//Update User Details
    if (isset($_POST['update'])) {
            // receive all input values from the form
            $Fname = mysqli_real_escape_string($db, $_POST['Fname']);
            $Lname = mysqli_real_escape_string($db, $_POST['Lname']);
            $MobNo = $_SESSION['MobNo'];
            $email = mysqli_real_escape_string($db, $_POST['email']);
            $Addr1 = mysqli_real_escape_string($db, $_POST['Addr1']);
            $Addr2 = mysqli_real_escape_string($db, $_POST['Addr2']);
            $zone_id = mysqli_real_escape_string($db, $_POST['zone_id']);
            $postcode = mysqli_real_escape_string($db, $_POST['postcode']);
            $country_id = mysqli_real_escape_string($db, $_POST['country_id']);
            $zone_id_2 = mysqli_real_escape_string($db, $_POST['zone_id_2']);
            //$Password_1 = mysqli_real_escape_string($db, $_POST['Password_1']);
            //$Password_2 = mysqli_real_escape_string($db, $_POST['Password_2']);

            // form validation: ensure that the form is correctly filled
            if (empty($Fname)) { array_push($errors, "Firstname is required"); }
            if (empty($Lname)) { array_push($errors, "Lastname is required"); }
            //if (empty($MobNo)) { array_push($errors, "MobNo is required"); }
            if (empty($Addr1)) { array_push($errors, "Address is required"); }
            if (empty($Addr2)) { array_push($errors, "Address is required"); }
            if (empty($zone_id)) { array_push($errors, "City is required"); }
            if (empty($zone_id_2)) { array_push($errors, "State is required"); }
          	
            //if (empty($Password_1)) { array_push($errors, "Password is required"); }
            //if (empty($Password_2)) { array_push($errors, "Password is required"); }
            
            /*if ($Password_1 != $Password_2) {
                array_push($errors, "The two passwords do not match");
            }*/

            // register user if there are no errors in the form
            if (count($errors) == 0) {
                //$password = md5($Password_1);//encrypt the password before saving in the database

                
                $up_query = "UPDATE farmers SET Fname='$Fname', Lname='$Lname', email='$email', Addr1='$Addr1', Addr2='$Addr2',zone_id='$zone_id', postcode='$postcode', country_id='$country_id', zone_id_2='$zone_id_2' WHERE MobNo = '$MobNo'";
                $up_result = mysqli_query($db, $up_query);  
                
                
                $_SESSION['Fname'] = $Fname;
                $_SESSION['Lname'] = $Lname;
                $_SESSION['email'] = $email;
                $_SESSION['Addr1'] = $Addr1;
                $_SESSION['Addr2'] = $Addr2;
                $_SESSION['zone_id'] = $zone_id;
                $_SESSION['postcode'] = $postcode;
                $_SESSION['country_id'] = $country_id;
                $_SESSION['zone_id_2'] = $zone_id_2;

           
                echo '<script>alert("Your Data Updated Succesfully")</script>';

			
            }
    }




?>
