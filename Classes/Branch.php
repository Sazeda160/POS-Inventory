<?php 
include 'connection.php';
class Branch {
	
		private $con = "";
		function __construct()
		{
			$obj = new Connection;
			$this->con = $obj->connect();
		}

		function addBranch($allData){
			$bName = $allData["bName"];
			$mName = $allData["mName"];
			$email = $allData["email"];
			$phone = $allData["phone"];
			$password = $allData["password"];
			$rpassword = $allData["rpassword"];


		   if($bName==""){

			echo '<div class="alert alert-danger"> <strong> Error:</strong> Branch Name Field is Not Empty </div>';

		}


		   else if($mName==""){

			echo '<div class="alert alert-danger"> <strong> Error:</strong> Manger Name Field is Not Empty </div>';

		}
		else if($email==""){

			echo '<div class="alert alert-danger"> <strong> Error:</strong> Email Field is Not Empty </div>';

		}
		else if($phone==""){

			echo '<div class="alert alert-danger"> <strong> Error:</strong> Phone Number Field is Not Empty </div>';

		}
		else if($password==""){

			echo '<div class="alert alert-danger"> <strong> Error:</strong> Password Field is Not Empty </div>';

		}


		else if($password !=$rpassword){
				return '<div class="alert alert-danger"><strong>Error: </strong>Password Not Match</div>';
			}
// 			else{

// 				// $emailChecker = checkEmail($email);


// 			 // if ($emailChecker == true){
//     //   echo '<div class="alert alert-warning"> <strong> Warning:</strong>you are already registered.</div>';

// }
    else{
				$password =md5($password);
				$sql = $this->con->query("INSERT INTO tbl_branch(bName,mName,email,phone,password)VALUES('$bName','$mName','$email','$phone','$password')");
				if ($sql) {
					return '<div class="alert alert-success"><strong>Success: </strong>Registration Completed</div>';
				}
			}
		}

	



// function checkEmail($email){


 

// $sql = $this->con->query("SELECT email FROM tbl_branch WHERE email = '$email'");



// if ($sql->num_rows > 0){

// 	return true;
// }
//  else{

//  	return false;
//  }



// }
		function login($allData){
			$userName = $allData["userName"];
			$password = $allData["password"];
			if($userName == ""){
				return '<div class="alert alert-danger"><strong>Error: </strong>User Name is Empty</div>';
			}
			elseif($password == ""){
				return '<div class="alert alert-danger"><strong>Error: </strong>Password is Empty</div>';
			}
			else{
				$password = md5($password);
				$sql = $this->con->query("SELECT * FROM tbl_branch WHERE (mName='$userName' OR email = '$userName' OR phone = '$userName') AND password = '$password' AND status = '1' ");
				if ($sql->num_rows > 0) {
					$sql = $sql->fetch_assoc();
					session_start();
					$_SESSION['id'] = $sql["id"];
					$_SESSION['bName'] = $sql["bName"];
					$_SESSION['mName'] = $sql["mName"];
					// header("location: dashboard.php");
					echo "<script>window.location.replace('dashboard.php')</script>";
				}
				else{
					return '<div class="alert alert-danger"><strong>Error: </strong>User Name or Password not Found</div>';
				}
			}
		}
		function allBrnches(){
			$sql = $this->con->query("SELECT * FROM tbl_branch");
			return $sql;
		}

		function active($id){
			$sql = $this->con->query("UPDATE tbl_branch SET status='0' WHERE id='$id'");
			echo "<script>window.location.replace('usercontrol.php')</script>";
		}
		function inactive($id){
			$sql = $this->con->query("UPDATE tbl_branch SET status='1' WHERE id='$id'");
			echo "<script>window.location.replace('usercontrol.php')</script>";

		}
		function delete($id){
			$sql = $this->con->query("DELETE FROM tbl_branch WHERE id='$id'");
			echo "<script>window.location.replace('usercontrol.php')</script>";

		}
		function findBranch($id){
			$sql = $this->con->query("SELECT * FROM tbl_branch WHERE id='$id'");
			return $sql;

		}
		function update($alldata, $id){
			$bName = $alldata['bName'];
			$mName = $alldata['mName'];
			$phone = $alldata['phone'];
			$email = $alldata['email'];
			$sql = $this->con->query("UPDATE tbl_branch SET bName='$bName', mName='$mName', phone='$phone', email='$email' WHERE id='$id'");
			echo "<script>window.location.replace('usercontrol.php')</script>";

		}
	}