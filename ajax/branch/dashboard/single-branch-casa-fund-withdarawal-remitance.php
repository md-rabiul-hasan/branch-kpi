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
			"branch_name"   => "Rabiul Hasan",
			"cash_deposite" => 800150,
			"withdrawal"    => 750015,
			"fundtransfer"  => 500150,
			"remitance"     => 600015
		),
		array(
			"branch_name"   => "Abdul Halim",
			"cash_deposite" => 500153,
			"withdrawal"    => 600152,
			"fundtransfer"  => 700152,
			"remitance"     => 700153,
		),
		array(
			"branch_name"   => "Hasnain Rahman",
			"cash_deposite" => 400150,
			"withdrawal"    => 800220,
			"fundtransfer"  => 600150,
			"remitance"     => 500111
		),
		array(
			"branch_name"   => "Nazrul Islam",
			"cash_deposite" => 987654,
			"withdrawal"    => 654823,
			"fundtransfer"  => 124562,
			"remitance"     => 433400
		),
		array(
			"branch_name"   => "Nizam Uddin",
			"cash_deposite" => 117654,
			"withdrawal"    => 654823,
			"fundtransfer"  => 544562,
			"remitance"     => 433400
		),
	);
	echo json_encode($data);
 ?>