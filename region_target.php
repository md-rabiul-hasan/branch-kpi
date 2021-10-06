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


   <!-- Search Select Section Start -->

   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="search-region-activity.php" method="get">
               <div class="row">
                  <div class="col-md-4">
                     <div class="from-group">
                        <label class="control-label font-weight-bold">Select Month</label>
                        <input type="text" class="form-control datepicker" autocomplete="off" required="required" name="select_month" placeholder="Select Month" id="select_month" >
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

   <form action="" id="searchActivatyform">
      <div class="row">        
         <div class="col-md-4">
            <div id="chartContainer1" style="height: 300px;width: 400px;"></div>
         </div>
      </div>
   </form>
  
   <input type="hidden" id="chartContainer1YValue" value="100" />
   <input type="hidden" id="chartContainer1YLabel" value="Rabiul" />
      
   <!-- Search Select Section End -->
  
   
</main>
<?php include 'partial/_footer.php'; ?>
<script type="text/javascript" src="assets/js/plugins/chart.js"></script>
<script src="assets/js/canvas.js"></script>
<script type="text/javascript" src="assets/js/plugins/validation.js"></script>
<script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
<!-- Branch Activaty Js -->

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

                "#ff8080",
                "#00e6ac"                       
         ]);



      var chartContainer1Value = [
         {y: 1000000, label: "Remittance Remaining"},
         {y: 4000000, label: "Remittance Achive"},        
      ];

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
      dataPoints: chartContainer1Value
   }]
});
chart.render();

}
</script>


</body>
</html>