

<?php 
  include 'db/database_connection.php';
  session_start();
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }

  include 'partial/_header.php';
 ?>


    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-pie-chart"></i>Region-1 Branch Target Achievement Chart</h1>
          
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">charts</a></li>
        </ul>
      </div>

      <div class="row">

        <div class="col-md-6 branch-1">
          <div class="tile">
            <h3 class="tile-title">Banani Branch </h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="region-1"></canvas>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Gulshan Branch </h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="region-2"></canvas>
            </div>
          </div>
        </div>


         <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Bashundhara Branch </h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="region-3"></canvas>
            </div>
          </div>
        </div>


        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Cumilla  Branch</h3>
            <div class="embed-responsive embed-responsive-16by9">
              <canvas class="embed-responsive-item" id="region-4"></canvas>
            </div>
          </div>
        </div>


		
      </div>


    </main>


 <?php include 'partial/_footer.php'; ?>
    <!-- Essential javascripts for application to work-->
    <script src="bar/js/jquery-3.3.1.min.js"></script>
   

    
    <script type="text/javascript" src="bar/js/plugins/chart.js"></script>
    <script type="text/javascript">

      //region 1


      $(".branch-1").click(function(){
         
         location.href="this-branch-user.php";


      });

      var data1 = {
      	labels: ["Loan", "Deposit", "CASA", "Remittance"],

      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [20000000, 30000000, 10000000, 5000000]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "#80d4ff",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [17000000, 30000000, 3500000, 5000000]
      		}
      	]
      };

      
      var ctxb = $("#region-1").get(0).getContext("2d");
      var barChart = new Chart(ctxb).Bar(data1);


       //region 2

       var data2 = {
        labels: ["CASA", "Deposit", "Remittance", "Loan"],

        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [400000, 200000, 300000, 300000]
          },
          {
            label: "My Second dataset",
            fillColor: "#80d4ff",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [40000, 160000, 200000, 250000]
          }
        ]
      };


        var ctxb2 = $("#region-2").get(0).getContext("2d");
      var barChart = new Chart(ctxb2).Bar(data2);



      //region 3

      var data3 = {
        labels: ["CASA", "Deposit", "Remittance", "Loan"],

        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [350000, 200000, 350000, 400000]
          },
          {
            label: "My Second dataset",
           fillColor: "#80d4ff",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [340000, 150000, 330000, 300000]
          }
        ]
      };


      var ctxb3 = $("#region-3").get(0).getContext("2d");
      var barChart = new Chart(ctxb3).Bar(data3);
     


      //region 4


       var data4 = {
        labels: ["CASA", "Deposit", "Remittance", "Loan"],

        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [4303000, 3250000, 3050000, 2000000]
          },
          {
            label: "My Second dataset",
           fillColor: "#80d4ff",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [3230000, 3100000, 3030000, 2000000]
          }
        ]
      };


      var ctxb4 = $("#region-4").get(0).getContext("2d");
      var barChart = new Chart(ctxb4).Bar(data4);



       //region 5


       var data5 = {
        labels: ["CASA", "Deposit", "Remittance", "Loan"],

        datasets: [
          {
            label: "My First dataset",
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "rgba(220,220,220,1)",
            pointColor: "rgba(220,220,220,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(220,220,220,1)",
            data: [400000, 450000, 100000, 300000]
          },
          {
            label: "My Second dataset",
           fillColor: "#80d4ff",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: [200000, 420000, 100000, 200000]
          }
        ]
      };


      var ctxb5 = $("#region-5").get(0).getContext("2d");
      var barChart = new Chart(ctxb5).Bar(data5);

    </script>
   
  
  