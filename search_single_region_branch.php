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
  #compareBranchJobVolume .tile-title,
  #topThreeBranchJobVolume .tile-title {
    font-size: 16px;
    font-weight: bold;
   }
   .embed-responsive {
      position: relative;
      height: 100%;
      display: block;
      width: 100%;
      padding: 0;
      overflow: hidden;
      height: 10000px!important;
   }
 </style>
  <link rel="stylesheet" href="assets/css/spin_loader.css">
    <main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-area-chart"></i> Dashboard</h1>
         <p>KPI Dashboard</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-area-chart fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
   </div>
   <!-- Select And Search Section Start -->
   <div class="row">
      <div class="col-lg-6 offset-md-3 col-md-12 col-sm-12">
         <div class="tile">
            <form action="search_single_region_branch.php" method="GET" id="system-utilization">
               <div class="row">
                  <div class="col-md-4">
                     <div class="from-group">
                        <?php 
                           if(isset($_REQUEST['select_month'])){
                              $select_month = $_REQUEST['select_month'];
                           }else{
                              $select_month = '';
                           }
                        ?>
                        <label class="control-label font-weight-bold">Select Month</label>
                        <input type="text" class="form-control datepicker" autocomplete="off" required="required" name="select_month" value="<?php echo $select_month; ?>" placeholder="Select Month" id="select_month">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="from-group">                        
                        <label class="control-label font-weight-bold">Select Month</label>
                        <select name="sorting" id="" class="form-control" >
                           <option value="">Select Option</option>
                           <option value="maxtomin">Maximum-Minimum</option>
                           <option value="mintomax" <?php if(isset($_GET['sorting']) && $_GET['sorting'] == "mintomax"){ echo "selected"; } ?>>Minimum-Maximum</option>
                        </select>
                       
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <p></p>
                        <input type="submit" name="compare" id="compare" class="btn btn-primary btn-block mt-4" value="compare">
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Select And Search Section End -->
   <!-- Top three branch job volume section start -->
   <div class="row" id="topThreeBranchJobVolume">
     
      <!-- CASA Open/Term Deposit Open section start -->
      <div class="col-lg-6 offset-md-3 col-md-6">
         <div class="tile">
            <h5 class="tile-title">CASA / Deposit / Remittance / Loan ( Branch )</h5>
            <hr>
            <div id="casaOpenTermDepositOpenLoader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <div class="embed-responsive embed-responsive-16by9" id="casaOpenTermDepositOpenData">
               <canvas class="embed-responsive-item" id="casaOpenTermDepositOpen" style="height: 800px; display: block; width: 529px;"></canvas>
            </div>
            <div class=" text-uppercase" id="casaOpenTermDepositOpenDataNotFound"></div>
         </div>
      </div>
      <!-- CASA Open/Term Deposit Open section end -->
     
   </div>
</main>
    
      <?php include 'partial/_footer.php'; ?>

      <script type="text/javascript" src="assets/js/plugins/chart.js"></script>
      <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
      <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
      <script type="text/javascript" src="assets/js/plugins/Chart.min.js"></script>
      <script type="text/javascript" src="assets/js/branch/mintomax-single-region-job-volume.js"></script>
      <script>
        $('.datepicker').datepicker({
         format: "yyyy-mm",
         viewMode: "months", 
         minViewMode: "months"
      });
      </script>
      
    </body>
</html>