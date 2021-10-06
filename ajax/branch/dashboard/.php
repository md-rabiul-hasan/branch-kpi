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

  function sortByOrder($a, $b) {
      return $b['total'] - $a['total'];
  }

    $data = [];

    $sql = "SELECT branch_name FROM `branches` where region_id = 1";
    $query = mysqli_query($conn, $sql);
    while($result = mysqli_fetch_array($query)){
        $casa       = rand(1000000,9999999);
        $deposit    = rand(1000000,9999999);
        $loan       = rand(1000000,9999999);
        $remittance = rand(1000000,9999999);
        $response   = [
            "branch_name"   => $result['branch_name'],
            "cash_deposite" => $casa,
            "withdrawal"    => $deposit,
            "fundtransfer"  => $loan,
            "remitance"     => $remittance,
            "total"         => $casa + $deposit + $loan + $remittance
        ];
        array_push($data, $response);
    }

    usort($data, 'sortByOrder');
    
	  echo json_encode($data);
 ?>