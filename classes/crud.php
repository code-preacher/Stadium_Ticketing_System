<?php
include_once "config.php";

class Crud extends Config
{

	function __construct()
	{
		parent::__construct();
	}


//Display All
	public function displayAll($table)
	{
		$query = "SELECT * FROM {$table}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}




	//Display with Order


	public function displayAllWithOrder($table,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllWithOrder2($table,$user,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE user_id='$user' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}



		public function displayAllWithOrder3($table,$user,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE user_id='$user' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	public function displayAllSpecificWithOrder($table,$item,$value,$orderValue,$orderType)
	{
		$query = "SELECT * FROM {$table} WHERE $item='$value' ORDER BY {$orderValue} {$orderType}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}

	public function displayAllSpecific($table,$item,$value)
	{
		$query = "SELECT * FROM {$table} WHERE $item='$value'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}


	public function displayAllSpecificTwo($table,$item,$value,$item2,$value2)
	{
		$query = "SELECT * FROM {$table} WHERE $item='$value' AND $item2='$value2'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return false;
		}
	}



	public function displayUser2($v1,$v2)
	{
		
		$query = "SELECT * FROM user where id='$v1' or id='$v2' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}

		public function displayOneR($table,$item,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where $item='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayTwoR($table,$item,$value,$item2,$value2)
	{
		$query = "SELECT * FROM {$table} where $item='$value' AND $item2='$value2' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}





	//Display with Limit
	public function displayWithLimit($table,$limit)
	{
		$query = "SELECT * FROM {table} limit {$limit}";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$data = array();
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}else{
			return 0;
		}
	}


	//Display Specific
	public function displayOne($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM $table where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayUser($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM user where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}


	public function displayUser3($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM user where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}




	public function displayLoginUser($value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM login where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return 0;
		}
	}



	public function displayNameById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['name'];
		}else{
			return 0;
		}
	}

	public function displaySeatById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['seat_no'];
		}else{
			return 0;
		}
	}



		public function displayIdEmail($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where email='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['id'];
		}else{
			return 0;
		}
	}



	
//Counting All
	public function countAll($table)
	{
		$q=$this->con->query("SELECT id FROM $table");
		return $q->num_rows;
	}

	public function countAllWithOne($table,$item,$value)
	{
		$q=$this->con->query("SELECT id FROM $table where $item='$value'");
		return $q->num_rows;
	}

	public function countAllWithTwo($table,$item,$value,$item2,$value2)
	{
		$q=$this->con->query("SELECT id FROM $table where $item='$value' AND $item2='$value2'");
		return $q->num_rows;
	}




//Counting Specific
	


	public function insertNewUser($post)
	{
		$name=$this->cleanse($post['name']);
		$address=$this->cleanse($post['address']);
		$gender=$this->cleanse($post['gender']);
		$phone=$this->cleanse($post['phone']);
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$date=date("d-m-y @ g:i A");
		$query="insert into user(fullname,address,gender,phone,email,password,date_created) values('$name','$address','$gender','$phone','$email','$password','$date')";
		$query2="insert into login(name,email,password,role) values('$name','$email','$password',3)";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:login.php?msg=User account was created successfully, Please login...&type=success");
			$this->con->query($query2);
		}else{
			header("Location:login.php?msg=Error adding data try again!&type=error");
		}
	}



	public function insertMatchInfo($post)
	{
		$name=$this->cleanse($post['name']);
		$seat_no=$this->cleanse($post['seat_no']);
		$charge=$this->cleanse($post['charge']);
		$status=0;
		$query="insert into match_info(name,seat_no,charge,status) values('$name','$seat_no','$charge','$status')";
		$sql = $this->con->query($query);
		if ($sql==true) {
			header("Location:view-match.php?msg=Match Info was created successfully&type=success");
		}else{
			header("Location:view-match.php?msg=Error adding data try again!&type=error");
		}
	}


	public function insertMatchBooking($post,$id,$ref)
	{
		$user=$this->displayUser($this->cleanse($id));
		$uid=$user['id'];
		$match_id=$this->cleanse($post['match_id']);
		$seat_no=$this->cleanse($post['seat_no']);
		$charge=$this->displayCharge($seat_no,$match_id);
		$pref=$this->cleanse($ref);
		$pstatus='0';

		$q=$this->displayAllSpecific('match_booking_info','match_info_id',$match_id);
		$u=$this->displayOneR('match_info','id',$match_id);
		$c=0;
		foreach($q as $v){
        $c=$c + $v['seat_no'];
        }
        $aseat=$c;
        $tseat=$u['seat_no'];
        $rseat=$tseat - $aseat;
        $kseat=$rseat - $aseat;
        
		if ($seat_no < $rseat) {
		$query="INSERT into match_booking_info(match_info_id,user_id,seat_no,charge,pref,pstatus) values('$match_id','$uid','$seat_no','$charge','$pref','$pstatus')";
		$sql = $this->con->query($query);
		
		if ($sql==true) {
			header("Location:view-booking.php?msg=Booking was sent successfully&type=success");
		}else{
			header("Location:add-booking.php?msg=Error sending request try again!&type=error");
		}
		} else {
			header("Location:add-booking.php?msg=Specified seat exceed available seat of $rseat!&type=error&id=$match_id");
		}
		

		
	}


	public function displayCharge($seat_no,$id)
	{
		$query = "SELECT * FROM match_info where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			$val= $seat_no * $row['charge'];
			return $val;
		}else{
			return 0;
		}
	}


		public function displayChargeById($table,$value)
	{
		$id = $this->cleanse($value);
		$query = "SELECT * FROM {$table} where id='$id' ";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row['charge'];
		}else{
			return 0;
		}
	}



//Delete Items
	public function delete($id, $table,$url) 
	{ 
		$id = $this->cleanse($id);
		$query = "DELETE FROM $table WHERE id = $id";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}


	public function deleteAll($id, $table,$url) 
	{ 
		$email= $this->cleanse($id);
		$query = "DELETE FROM $table WHERE email = '$email' ";
		$query2 = "DELETE FROM login WHERE email = '$email' ";

		$result = $this->con->query($query);

		if ($result == true) {
			$this->con->query($query2);
			header("Location:$url?msg=Data was successfully deleted&type=success");
		} else {
			header("Location:$url?msg=Error deleting data&type=error");
		}
	}





	//Delete Items
	public function deleteTwoTable($email,$table,$table2,$url) 
	{ 
		$email = $this->cleanse($email);
		$query = "DELETE FROM {$table} WHERE email= '$email'";
		$query2 = "DELETE FROM {$table2} WHERE email= '$email'";

		$result = $this->con->query($query);

		if ($result == true) {
			header("Location:$url?msg=Data was successfully deleted&type=success");
			$this->con->query($query2);
		} else {
			header("Location:$url?msg=Error deleting Data&type=error");
		}
	}


	public function updateAdmin($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}


	public function updateUser($post)
	{
		
		$email=$this->cleanse($post['email']);
		$password=$this->cleanse($post['password']);
		$query="UPDATE login SET password='$password' WHERE email='$email' ";
		$query2="UPDATE user SET password='$password' WHERE email='$email' ";
		$sql=$this->con->query($query);
		if ($sql==true) {
			$this->con->query($query2);
			header("Location:profile.php?msg=Account was updated successfully&type=success");
		}else{
			header("Location:profile.php?msg=Error updating account try again!&type=error");
		}
	}



	public function updateMatchInfoPay($id,$url)
	{
		$check=$this->displayOne('match_booking_info',$id);
		$pay=$check['pstatus'];
		if ($pay === '0') {
			$query="UPDATE match_booking_info SET pstatus='1' WHERE id='$id' ";
		} else {
			$query="UPDATE match_booking_info SET pstatus='0' WHERE id='$id' ";
		}

		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:$url?msg=Payment was updated successfully&type=success");
		}else{
			header("Location:$url?msg=Error updating account try again!&type=error");
		}
	}



	public function updateMatchInfoStatus($value,$url)
	{
		$check=$this->displayOne('match_info',$value);
		$status=$check['status'];
		if ($status === '0') {
			$query="UPDATE match_info SET status='1' WHERE id='$value' ";
		} else {
			$query="UPDATE match_info SET status='0' WHERE id='$value' ";
		}

		$sql=$this->con->query($query);
		if ($sql==true) {
			header("Location:$url?msg=Status was updated successfully&type=success");
		}else{
			header("Location:$url?msg=Error updating status try again!&type=error");
		}
	}
	
	

	//Search
	public function displaySearch($value)
	{
	//Search box value assigning to $Name variable.
		$Name = $this->cleanse($value);
		$query = "SELECT * FROM product WHERE pid LIKE '%$Name%'";
		$result = $this->con->query($query);
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			return $row;
		}else{
			return false;
		}
	}


//Mailing Function
	public function mailing($post)
	{
		$name=$this->cleanse($post['name']);
		$email=$this->cleanse($post['email']);
		$phone=$this->cleanse($post['phone']);
		$subject=$this->cleanse($post['subject']);
		$text=$this->cleanse($post['message']);

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= "From: " . $email . "\r\n"; // Sender's E-mail  ---charset=iso-8859-1
		$headers .= 'Content-type: text/html; charset=utf8_encode' . "\r\n";

		$message ='<table style="width:100%">
		<tr>
		<td>'.$name.'  '.$subject.'</td>
		</tr>
		<tr><td>Email: '.$email.'</td></tr>
		<tr><td>phone: '.$subject.'</td></tr>
		<tr><td>Text: '.$text.'</td></tr>

		</table>';
		$to='support@dilproperty.com';

		if (@mail($to, $subject, $message, $headers))
		{
			header("Location:contact.php?msg=Your message has been sent, we will contact you in a moment&type=success");
		}else{
			header("Location:contact.php?msg=message failed sending, please try again later!&type=error");
		}

	}



	public function cleanse($str)
	{
   #$Data = preg_replace('/[^A-Za-z0-9_-]/', '', $Data); /** Allow Letters/Numbers and _ and - Only */
		$str = htmlentities($str, ENT_QUOTES, 'UTF-8'); /** Add Html Protection */
		$str = stripslashes($str); /** Add Strip Slashes Protection */
		if($str!=''){
			$str=trim($str);
			return mysqli_real_escape_string($this->con,$str);
		}
	}


}

?>

