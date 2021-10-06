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
         <h1><i class="fa fa-bar-chart"></i> User Activity</h1>
         <p>Showing  Branch User Activity</p>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-bar-chart fa-lg"></i>
         </li>
         <li class="breadcrumb-item"><a href="index.php">Dashboard</a>
         </li>
      </ul>
   </div>


   

         
            <form action="" id="searchActivatyform">
               <div class="row">
                  

                        
                          <div class="col-md-5 offset-md-1 banani">
                            
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


               

            </form>
   
      
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

<script type="text/javascript">
   $(".banani").on('click', function(){
      window.location.href = "branch-to-user.php";
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
      text: "Rabiul Hasan"
   },
   data: [{
      type: "pie",
      startAngle: 240,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 102150, label: "CASA"},
         {y: 120150, label: "Deposit"},
         {y: 52150, label: "Remmittance"},
         {y: 120150, label: "Loan"},
        
      ]
   }]
});
chart.render();

var region2 = new CanvasJS.Chart("chartContainer2", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Abdul Halim "
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 400500, label: "CASA"},
         {y: 800200, label: "Deposit"},
         {y: 600100, label: "Remmittance"},
         {y: 700110, label: "Loan"},
      
      ]
   }]
});
region2.render();


var region3 = new CanvasJS.Chart("chartContainer3", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Hasnain Rahman "
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 50050, label: "CASA"},
         {y: 80050, label: "Deposit"},
         {y: 90050, label: "Remmittance"},
         {y: 70050, label: "Loan"},
      
      ]
   }]
});
region3.render();


var region4 = new CanvasJS.Chart("chartContainer4", {
   animationEnabled: true,
    colorSet: "greenShades",
   

   title: {
       text: "Nazrul Islam"
   },
   data: [{
      type: "pie",
      startAngle: 200,
      yValueFormatString: "##0.00\"TK\"",
      indexLabel: "{label} {y}",
      dataPoints: [
         {y: 987654, label: "CASA"},
         {y: 654823, label: "Deposit"},
         {y: 600150, label: "Remmittance"},
         {y: 700150, label: "Loan"},
      
      ]
   }]
});
region4.render();





}
</script>


</body>
</html>