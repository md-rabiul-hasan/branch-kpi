  <?php 
    include 'db/database_connection.php';
    session_start();
    
    if(!isset($_SESSION['id'])) {
      header("location:login.php");
      exit;
    }

    include 'partial/_header.php';
   ?>

  <?php include 'partial/_header.php'; ?>
  <link rel="stylesheet" href="assets/css/spin_loader.css">
    
    <main class="app-content">
   <div class="app-title">
      <div>
         <h1><i class="fa fa-table"></i> Service Count and CBS Execution Time</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-table fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
   </div>
   <!-- Select For Search Section Start -->
   <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="tile">
            <form action="branch-command-execution-time-search.php" method="get">
               <div class="row">
                  <div class="col-md-4">
                     <div class="from-group">
                        <label class="control-label font-weight-bold">Select Date</label>
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
   <!-- Select For Search Section End -->


    <!-- Select For Search Section Start -->
   
         <div class="tile">
               
               <?php 
                  if ($_GET['select_month']) {

                     $select_month = $_GET['select_month'];
                  }else{
                     $select_month="";
                  }

               ?>
                 <h4 class="text-center"><?php echo date('F, Y',strtotime($select_month)); ?></h4>
              
         </div>
     
   <!-- Select For Search Section End -->
   <!-- Show Current Month Top Three Branch Command Execution time section start -->
   <div class="row" id="command-execution-data">
      <div class="col-md-12">
         <div class="tile">
            <!-- Spin Loader Section Start -->
            <div id="date-fecht-before-loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <!-- Spin Loader Section End -->
            <div id="command-execution-data-show">
            </div>
            <div id="command-execution-data-not-found">
            </div>
         </div>
      </div>
   </div>
   <!-- Show Current Month Top Three Branch Command Execution time section end -->
   <!-- Compare Result Section Start -->
   <div class="row" id="compare-data">
      <div class="col-md-12">
         <div class="tile">
            <!-- Spin Loader Section Start -->
            <div id="compare-date-fecht-before-loader">
               <div class="spinner">
                  <div class="rect1"></div>
                  <div class="rect2"></div>
                  <div class="rect3"></div>
                  <div class="rect4"></div>
                  <div class="rect5"></div>
               </div>
            </div>
            <!-- Spin Loader Section End -->
            <!-- Result Found Section Start  -->
            <div id="compare-result-show">
            </div>
            <!-- Result Found Section End -->
            <div id="compare-command-execution-data-not-found">
            </div>
         </div>
      </div>
   </div>
   <!-- Compare Result Section End -->
   </div>
</main>
    
    <?php include 'partial/_footer.php'; ?>

    <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
    <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/branch/command-execution-search.js"></script>
     <script>
     $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
    </script>
  </body>
</html>