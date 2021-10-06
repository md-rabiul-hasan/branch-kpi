<?php 
   include 'db/database_connection.php';
   session_start();
   
   if(!isset($_SESSION['id'])) {
     header("location:login.php");
     exit;
   }
   
   include 'partial/_header.php';
   ?>
<style>
   .embed-responsive {
   position: relative;
   height: 10000px!important;
   display: block;
   width: 100%;
   padding: 0;
   overflow: hidden;
   }
</style>
<link rel="stylesheet" href="assets/css/spin_loader.css">
<main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-bar-chart"></i> Region Activity</h1>
         <p>Showing Top 5 DBL Region Activity</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i>
         </li>
         <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
         </li>
      </ul>
   </div>
  

   <!-- Select  Search Section Start -->
   <div class="row">
      <div class="offset-md-1 col-lg-10 col-md-12 col-sm-12">
         <div class="tile">
            <form action="search-region-activity.php" method="get">
               <div class="row">
                  <div class="col-md-4">
                     <div class="from-group">
                        <label class="control-label font-weight-bold">Select Month</label>
                        <input type="text" class="form-control datepicker" autocomplete="off" required="required" name="select_month" placeholder="Select Month" id="select_month" value="<?php echo $_GET['select_month']; ?>">
                     </div>
                  </div>

                 
                  <div class="col-md-2 mt-1">
                     <div class="form-group">
                        <p></p>
                        <input type="submit" name="search" id="search" class="btn btn-primary btn-block mt-4" value="Search">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>


    <!-- Show Month Name and Year -->
   <div class="row">
      <div class="offset-md-1 col-lg-10 col-md-12 col-sm-12">
         <div class="tile">
                  <?php 

                  if ($_GET['select_month']) {
                     $select_month = $_GET['select_month'];
                  }
                    

                  ?>
                  <h4 class="text-center" style="text-transform: uppercase;"><?php echo date('F, Y',strtotime($select_month));  ?>  Region Performance</h4>
         </div>
      </div>
   </div>

         
            <form action="" id="searchActivatyform">
               <div class="row">
                  

                        <div class="col-md-5 offset-md-1">
                           <div id="chartContainer1" style="height: 300px;width: 400px;"></div>
                        </div>



                        <div class="col-md-6">
                           <div id="chartContainer2" style="height: 300px;width: 400px;"></div>
                        </div>

                 
               </div>


               <br>
               <br>
                <div class="row">
                  

                        <div class="col-md-5 offset-md-1">
                           <div id="chartContainer3" style="height: 300px;width: 400px;"></div>
                        </div>



                        <div class="col-md-6">
                           <div id="chartContainer4" style="height: 300px;width: 400px;"></div>
                        </div>

                 
               </div>


               <br>
               <br>
                <div class="row">
                  

                        <div class="col-md-5 offset-md-1">
                           <div id="chartContainer5" style="height: 300px;width: 400px;"></div>
                        </div>

                 
               </div>

            </form>
   
      
   <!-- Search Select Section End -->
  
   
</main>
<?php include 'partial/_footer.php'; ?>
<script type="text/javascript" src="assets/js/plugins/chart.js"></script>
<script src="assets/js/canvas.js"></script>
<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>

<script>
   $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
</script>



<script>
window.onload = function() {

    CanvasJS.addColorSet("greenShades",
                [//colorSet Array

                "#005c99",
                "#008ae6",
                "#1aa3ff",
                "#66c2ff",
                       
                ]);




var chart = new CanvasJS.Chart("chartContainer1", {
   
   animationEnabled: true,
   colorSet: "greenShades",
   title: {
      text: "Region-1 "
   },
   data: [{
      type: "pie",
      startAngle: 240,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 20001200, label: "CASA"},
         {y: 45004500, label: "Deposit"},
         {y: 7001700, label: "Remmittance"},
         {y: 30001300, label: "Loan"},
        
      ]
   }]
});
chart.render();

var region2 = new CanvasJS.Chart("chartContainer2", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Region-2 "
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 2001520, label: "CASA"},
         {y: 8602260, label: "Deposit"},
         {y: 6101510, label: "Remmittance"},
         {y: 7201120, label: "Loan"},
      
      ]
   }]
});
region2.render();


var region3 = new CanvasJS.Chart("chartContainer3", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Region-3 "
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 5301530, label: "CASA"},
         {y: 8401540, label: "Deposit"},
         {y: 9501550, label: "Remmittance"},
         {y: 7061506, label: "Loan"},
      
      ]
   }]
});
region3.render();


var region4 = new CanvasJS.Chart("chartContainer4", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Region-4 "
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 9836543, label: "CASA"},
         {y: 6538234, label: "Deposit"},
         {y: 6031500, label: "Remmittance"},
         {y: 7031500, label: "Loan"},
      
      ]
   }]
});
region4.render();


var region5 = new CanvasJS.Chart("chartContainer5", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Region-5 "
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 117654, label: "CASA"},
         {y: 654823, label: "Deposit"},
         {y: 54, label: "Remmittance"},
         {y: 20000, label: "Loan"},
      
      ]
   }]
});
region5.render();


}
</script>


</body>
</html>