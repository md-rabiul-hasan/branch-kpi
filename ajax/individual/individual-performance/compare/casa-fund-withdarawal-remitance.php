<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../../login.php');
    exit;
  }
 ?>
<?php 
	// Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array("employee_name"=>"YO50","cash_deposite"=>2043,"withdrawal"=>2074,"fundtransfer"=>969,"remitance"=>879),
		array("employee_name"=>"M019","cash_deposite"=>1120,"withdrawal"=>2215,"fundtransfer"=>793,"remitance"=>283),
		array("employee_name"=>"H01E","cash_deposite"=>3215,"withdrawal"=>4799,"fundtransfer"=>902,"remitance"=>188),
	);
	echo json_encode($data);
 ?>