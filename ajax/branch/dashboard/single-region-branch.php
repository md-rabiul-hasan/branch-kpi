<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
  include '../../../db/database_connection.php';
	// Dummy Data
	// Dummy Data
	header('Content-Type: application/json');

    $data = [];

    $sql = "SELECT branch_name FROM `branches` where region_id = 1";
    $query = mysqli_query($conn, $sql);
    while($result = mysqli_fetch_array($query)){
        $response = [
            "branch_name"   => $result['branch_name'],
            "cash_deposite" => rand(1000000,9999999),
            "withdrawal"    => rand(1000000,9999999),
            "fundtransfer"  => rand(1000000,9999999),
            "remitance"     => rand(1000000,9999999),
        ];
        array_push($data, $response);
    }

    
	echo json_encode($data);
 ?>