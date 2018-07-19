<?php
session_start();
include ('dbconn.php');
/* * USER VALIDATION FUNCTIONS* */
function validate_user($userid, $password, $conn) {
	try{
		if(substr($userid, 0, 1) === 'A'){
			//check the admin table for the username and password
			$sql = 'SELECT * FROM admin WHERE admin_id  = :admin_id';
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':admin_id', $userid);
			$stmt->execute();
			$userdata = $stmt->fetch();
				if($userid == $userdata['admin_id'] && $password == $userdata['password']){
					$_SESSION['admin_user'] = array('name' => $userdata['admin_fname'], 'id' => $userdata['admin_id']);
					header("Location: ./admin.php");
					exit;
				}else{
					header("Location: ./login.php");
					exit;
				}
			
		}else{
			//check the members table for the memberid and password
			$sql = 'SELECT * FROM member WHERE member_id = :memberid';
			$stmt = $conn->prepare($sql);
			$stmt->bindValue(':memberid', $userid);
			$stmt->execute();		
			$userdata = $stmt->fetch();
			
			if ($userid == $userdata['member_id'] && $password == $userdata['password']){
				if ($userdata['member_status'] == 1){
					$_SESSION['std_user'] = array('name' => $userdata['member_fname'], 'id' => $userdata['member_id']);
					header("Location: ./account.php");
					exit;
				}else if($userdata['member_status'] == 0){
					$_SESSION['std_user'] = array('name' => $userdata['member_fname'], 'id' => $userdata['member_id' ],
					'status' => $userdata['member_status']);
					header("Location: ./expired.php");
					exit;
					}else {
						header('Location: ./login.php');
						exit;
					}
			} else {	
				header("Location: ./register.php");
				print_r("User not found");
				exit;
			}
		}
		} catch (PDOException $e) {
			echo $e->getmessage;
		}
}

/** DATABASE FUNCTIONS **/
function addVolunteer($lname, $fname, $addr1, $addr2, $city, $postcode, $phone, $mobile,
		$email, $password, $conn) {
	try {
		$sql = 'INSERT INTO volunteer (volunteer_id, lname, fname, addr1, addr2, city, postcode, phone, mobile, email) VALUES 		(DEFAULT, :lname, :fname, :addr1, :addr2, :city, :postcode, :phone, :mobile, :email)';
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':lname', $lname);
		$stmt->bindValue(':fname', $fname);
		$stmt->bindValue(':addr1', $addr1);
		$stmt->bindValue(':addr2', $addr2);
		$stmt->bindValue(':city', $city);
		$stmt->bindValue(':postcode', $postcode);
		$stmt->bindValue(':phone', $phone);
		$stmt->bindValue(':mobile', $mobile);
		$stmt->bindValue(':email', $email);
		$stmt->execute();
		
		/** update the users table**/
		$sql = 'INSERT INTO users (user_id, email, password, usercode, usertype) VALUES (DEFAULT, :email, :password, :usercode, :usertype)';
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':email', $email);
		$stmt->bindValue(':password', $password);
		$stmt->bindValue(':usercode', 2);
		$stmt->bindValue(':usertype', 'Volunteer');
		$stmt->execute();
		//Javascript alert when registration is successful
		echo '<script language="javascript">';
        echo 'alert("Successfully Registered, you may login"); location.href="./login.php"';
        echo '</script>';
			
	} catch (PDOException $e) {
		echo $e->getmessage;
	}

function updateVolunteer(){
	
}

function updateUser(){
	
}
	
function deleteVoluteer($id){
	try{
		$sql = 'DELETE FROM volunteer WHERE volunteer_id = :id';
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':id', $id);
		$stmt->execute();
		
		//Javascript alert when registration is successful
		echo '<script language="javascript">';
        echo 'alert("Volunteer deleted"); location.href="./admin.php"';
        echo '</script>';
		
	}catch(PDOException $e){
		echo $e->getmessage;
	}
}

function deleteUser($email){
	try{
		$sql = 'DELETE FROM users WHERE email = :email';
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':email', $email);
		$stmt->execute();
		
	}catch(PDOException $e){
		echo $e->getmessage;
	}
}

}
?>