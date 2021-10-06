<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
	// Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array(
			"branch_name"   => "Region-1",
			"cash_deposite" => 10001500,
			"withdrawal"    => 15001500,
			"fundtransfer"  => 5001500,
			"remitance"     => 10001500
		),
		array(
			"branch_name"   => "Region-3",
			"cash_deposite" => 5001500,
			"withdrawal"    => 8001500,
			"fundtransfer"  => 9001500,
			"remitance"     => 7001500
		),
		array(
			"branch_name"   => "Region-2",
			"cash_deposite" => 4001500,
			"withdrawal"    => 8002200,
			"fundtransfer"  => 6001500,
			"remitance"     => 7001110
		),
		array(
			"branch_name"   => "Region-4",
			"cash_deposite" => 9876543,
			"withdrawal"    => 6548234,
			"fundtransfer"  => 1245623,
			"remitance"     => 4334000
		),
		array(
			"branch_name"   => "Region-5",
			"cash_deposite" => 1176543,
			"withdrawal"    => 6548234,
			"fundtransfer"  => 5445623,
			"remitance"     => 4334000
		),
	);
	echo json_encode($data);
 ?>