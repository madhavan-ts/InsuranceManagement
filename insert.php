<?php
session_start();




		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		// $conn = mysqli_connect("localhost", "root", "", "staff");
$conn=mysqli_connect('localhost','root','','insurance_management');
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$cus_no=$_POST['customer_no'];
        $cus_name=$_POST['customer_name'];
        $cus_address=$_POST['customer_address'];
        $lic_no=$_POST['license_number'];
        // $cus_name=$_POST['customer-name'];
        // $dob=$_POST['dob'];
        $phno=$_POST['phone_number'];
        $v_id=$_POST['vehicle_id'];
        // $dop=$_POST['dop'];
        $cov=$_POST['cov'];
        $brand=$_POST['brand'];
        $model=$_POST['model'];
        $e_no=$_POST['engine_number'];
        $chs_no=$_POST['chasis_number'];
        $i_no=$_POST['insurance_no'];
        $i_amt=$_POST['insurance_amt'];
        $i_agncy=$_POST['insurance_agncy'];
		
		// Performing insert query execution
		// here our table name is college
		$q1="INSERT INTO customer_table(cus_no, cus_name, cus_address, licence_no, phno) VALUES('$cus_no','$cus_name','$cus_address','$lic_no','$phno');";

$q2="INSERT INTO vehicle_table(cus_no,v_id, cov, brand, model, engine_no, chasis_no) VALUES('$cus_no','$v_id','$cov','$brand','$model','$e_no','$chs_no');";

$q3="INSERT INTO insurance_details(i_no, v_id, i_amt, i_agncy) VALUES('$i_no','$v_id','$i_amt','$i_agncy');";

		if(mysqli_query($conn, $q1)){
			echo "data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data";

			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $q1. "
				. mysqli_error($conn);
		}
		
		if(mysqli_query($conn, $q2)){
			echo "data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data";

			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $q2. "
				. mysqli_error($conn);
		}if(mysqli_query($conn, $q3)){
			echo "data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data";

			// echo nl2br("\n$first_name\n $last_name\n "
			// 	. "$gender\n $address\n $email");
		} else{
			echo "ERROR: Hush! Sorry $q3. "
				. mysqli_error($conn);
		}
		



// mysqli_query($conn, $q1);
// mysqli_query($conn, $q2);
// mysqli_query($conn, $q3);
header('location:user_page.php');
// Close connection

?>