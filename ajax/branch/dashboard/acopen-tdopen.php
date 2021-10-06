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
	// Dummy Data
	header('Content-Type: application/json');
	$data = array(
		array(
			"branch_name"   => "Gulshan",
			"cash_deposite" => 800150,
			"withdrawal"    => 500150,
			"fundtransfer"  => 701500,
			"remitance"     => 500150
		),
		array(
			"branch_name"   => "Banani",
			"cash_deposite" => 567323,
			"withdrawal"    => 623444,
			"fundtransfer"  => 442000,
			"remitance"     => 823300
		),
		array(
			"branch_name"   => "Bashundhara",
			"cash_deposite" => 600150,
			"withdrawal"    => 700220,
			"fundtransfer"  => 600150,
			"remitance"     => 400111
		),
		array(
			"branch_name"   => "Ashulia",
			"cash_deposite" => 300150,
			"withdrawal"    => 500220,
			"fundtransfer"  => 600150,
			"remitance"     => 500111
		),
		array(
			"branch_name"   => "Cumilla",
			"cash_deposite" => 117654,
			"withdrawal"    => 654823,
			"fundtransfer"  => 544562,
			"remitance"     => 433400
		),
	);
	echo json_encode($data);
 ?>