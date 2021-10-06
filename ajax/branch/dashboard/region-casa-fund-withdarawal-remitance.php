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
			"branch_name"   => "Naya Paltan Branch",
			"cash_deposite" => 8001501,
			"withdrawal"    => 7500155,
			"fundtransfer"  => 5001502,
			"remitance"     => 6000151
		),
		array(
			"branch_name"   => "Alankar More Branch",
			"cash_deposite" => 5001534,
			"withdrawal"    => 6001523,
			"fundtransfer"  => 7001523,
			"remitance"     => 7001534,
		),
		array(
			"branch_name"   => "Dhamrai SME Krishi Branch",
			"cash_deposite" => 4001500,
			"withdrawal"    => 8002200,
			"fundtransfer"  => 6001500,
			"remitance"     => 5001110
		),
		array(
			"branch_name"   => "Shibu Market Branch",
			"cash_deposite" => 9876543,
			"withdrawal"    => 6548234,
			"fundtransfer"  => 1245623,
			"remitance"     => 4334000
		),
		array(
			"branch_name"   => "Rangamati Branch",
			"cash_deposite" => 1176543,
			"withdrawal"    => 6548234,
			"fundtransfer"  => 5445623,
			"remitance"     => 4334000
		),
	);
	echo json_encode($data);
 ?>