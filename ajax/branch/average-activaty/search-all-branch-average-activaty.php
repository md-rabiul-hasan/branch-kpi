<?php 
	session_start();
	// Authentication Check
	if(!isset($_SESSION['id'])){
		header('location:../../../login.php');
		exit;
	}

 ?>

<?php 
	header('Content-Type: application/json');
	$data = array(
		array("avarage"=>553,"branch_name"=>"Aganagar Branch"),
		array("avarage"=>515,"branch_name"=>"Akhaura Branch"),
		array("avarage"=>869,"branch_name"=>"Alankar More Branch"),
		array("avarage"=>924,"branch_name"=>"Anwara Branch, Chittagong."),
		array("avarage"=>546,"branch_name"=>"Arshinagar Branch, Dhaka."),
		array("avarage"=>693,"branch_name"=>"Ashuganj Branch"),
		array("avarage"=>557,"branch_name"=>"Ashulia Branch"),
		array("avarage"=>859,"branch_name"=>"Bagerhat Branch"),
		array("avarage"=>956,"branch_name"=>"Banani Branch"),
		array("avarage"=>758,"branch_name"=>"Bandar Branch, Narayanganj"),
		array("avarage"=>589,"branch_name"=>"Barisal Branch"),
		array("avarage"=>550,"branch_name"=>"Bashundhara Branch"),
		array("avarage"=>697,"branch_name"=>"Bhawal Mirzapur Branch, Gazipur"),
		array("avarage"=>529,"branch_name"=>"Brahmanbaria Branch"),
		array("avarage"=>839,"branch_name"=>"Beani Bazar Branch"),
		array("avarage"=>866,"branch_name"=>"Belkuchi Branch"),
		array("avarage"=>889,"branch_name"=>"Benapole Branch"),
		array("avarage"=>845,"branch_name"=>"Bhuigar Branch, Narayanganj"),
		array("avarage"=>900,"branch_name"=>"Bhola Branch"),
		array("avarage"=>745,"branch_name"=>"Bajitpur Branch"),
		array("avarage"=>695,"branch_name"=>"Bandartila Branch"),
		array("avarage"=>616,"branch_name"=>"Banasree Branch, Dhaka."),
		array("avarage"=>809,"branch_name"=>"Baneshwar Branch"),
		array("avarage"=>658,"branch_name"=>"Board Bazar Branch"),
		array("avarage"=>994,"branch_name"=>"Boro Bazar Branch"),
		array("avarage"=>909,"branch_name"=>"Birol Bazar Branch"),
		array("avarage"=>748,"branch_name"=>"Chawk Bazar Branch"),
		array("avarage"=>901,"branch_name"=>"CCIS BRANCH"),
		array("avarage"=>698,"branch_name"=>"CDA Avenue Branch"),
		array("avarage"=>675,"branch_name"=>"Chandina Branch"),
		array("avarage"=>952,"branch_name"=>"Chapai Nawabganj Branch"),
		array("avarage"=>901,"branch_name"=>"Choumuhani Branch"),
		array("avarage"=>623,"branch_name"=>"Cherag Ali Branch, Gazipur"),
		array("avarage"=>608,"branch_name"=>"Chandra SME Krishi Branch"),
		array("avarage"=>702,"branch_name"=>"Chandraganj Branch"),
		array("avarage"=>761,"branch_name"=>"Comilla Branch"),
		array("avarage"=>567,"branch_name"=>"Coxs Bazar Branch"),
		array("avarage"=>824,"branch_name"=>"Companyganj Branch"),
		array("avarage"=>514,"branch_name"=>"Dania Branch"),
		array("avarage"=>765,"branch_name"=>"Dhamrai SME Krishi Branch"),
		array("avarage"=>869,"branch_name"=>"Dholaikhal Branch"),
		array("avarage"=>554,"branch_name"=>"Dinajpur Branch"),
		array("avarage"=>753,"branch_name"=>"Darus Salam Road Branch, Dhaka"),
		array("avarage"=>620,"branch_name"=>"Fatikchari Branch"),
		array("avarage"=>614,"branch_name"=>"Faridpur Branch"),
		array("avarage"=>769,"branch_name"=>"Feni Branch"),
		array("avarage"=>841,"branch_name"=>"Garibe Newaz Avenue Branch"),
		array("avarage"=>764,"branch_name"=>"Gabtoli Bagbari Branch"),
		array("avarage"=>832,"branch_name"=>"Ghorasal Branch"),
		array("avarage"=>775,"branch_name"=>"Goala Bazar Branch"),
		array("avarage"=>610,"branch_name"=>"Goalanda Branch"),
		array("avarage"=>967,"branch_name"=>"Gouripur Bazar Branch"),
		array("avarage"=>688,"branch_name"=>"Gulshan-Tejgaon Link Road Branch"),
		array("avarage"=>986,"branch_name"=>"Gazipur Chowrasta Branch"),
		array("avarage"=>614,"branch_name"=>"Habiganj Branch"),
		array("avarage"=>959,"branch_name"=>"Hasnabad Branch"),
		array("avarage"=>670,"branch_name"=>"Hathazari Branch"),
		array("avarage"=>615,"branch_name"=>"Isapura Bazar Branch"),
		array("avarage"=>670,"branch_name"=>"Jhalakathi Branch, Jhalakathi"),
		array("avarage"=>980,"branch_name"=>"Jamalpur Branch, Jamalpur"),
		array("avarage"=>740,"branch_name"=>"Joypurhat Branch"),
		array("avarage"=>669,"branch_name"=>"Juri Branch"),
		array("avarage"=>896,"branch_name"=>"Kachua Branch, Chandpur"),
		array("avarage"=>705,"branch_name"=>"Kaliganj SME Krishi Branch"),
		array("avarage"=>535,"branch_name"=>"Kashinathpur SME Krishi Branch"),
		array("avarage"=>944,"branch_name"=>"Keraniganj Branch"),
		array("avarage"=>933,"branch_name"=>"Khilgaon Branch"),
		array("avarage"=>711,"branch_name"=>"Konapara Branch"),
		array("avarage"=>574,"branch_name"=>"Konabari Branch"),
		array("avarage"=>574,"branch_name"=>"Kapasia Branch, Gazipur"),
		array("avarage"=>890,"branch_name"=>"Karatia Branch"),
		array("avarage"=>829,"branch_name"=>"Kushtia Branch"),
		array("avarage"=>680,"branch_name"=>"Lalmatia Branch"),
		array("avarage"=>900,"branch_name"=>"Local Office"),
		array("avarage"=>540,"branch_name"=>"Madhabdi Branch"),
		array("avarage"=>655,"branch_name"=>"Madhabpur Branch, Habiganj."),
		array("avarage"=>621,"branch_name"=>"Malibagh Branch"),
		array("avarage"=>951,"branch_name"=>"Manikgonj Branch"),
		array("avarage"=>902,"branch_name"=>"Moulvi Bazar Branch"),
		array("avarage"=>800,"branch_name"=>"Madam Bibir Hat Branch"),
		array("avarage"=>746,"branch_name"=>"Meghola Bazar Branch"),
		array("avarage"=>658,"branch_name"=>"Miah Bazar Branch"),
		array("avarage"=>793,"branch_name"=>"Mirpur Branch"),
		array("avarage"=>882,"branch_name"=>"Muktarpur Branch"),
		array("avarage"=>712,"branch_name"=>"Mohakhali Branch"),
		array("avarage"=>921,"branch_name"=>"Mohammadpur Branch"),
		array("avarage"=>831,"branch_name"=>"Mymensingh Branch"),
		array("avarage"=>787,"branch_name"=>"Mawna Branch,Gazipur"),
		array("avarage"=>632,"branch_name"=>"Moynamoti Branch, Comilla"),
		array("avarage"=>591,"branch_name"=>"Naogaon Branch"),
		array("avarage"=>531,"branch_name"=>"Narsingdi Branch"),
		array("avarage"=>764,"branch_name"=>"Nawabganj SME Krishi Branch"),
		array("avarage"=>553,"branch_name"=>"Naya Paltan Branch"),
		array("avarage"=>865,"branch_name"=>"North Brooke Hall Road Branch"),
		array("avarage"=>782,"branch_name"=>"Noju Miah Hat Branch"),
		array("avarage"=>840,"branch_name"=>"Netaiganj Branch"),
		array("avarage"=>840,"branch_name"=>"Panchaboti Branch"),
		array("avarage"=>743,"branch_name"=>"Pabna Branch"),

	);
	echo json_encode($data);

 ?>