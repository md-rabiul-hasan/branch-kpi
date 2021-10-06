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
         <h1><i class="fa fa-table"></i> Branch</h1>
      </div>
      <ul class="app-breadcrumb breadcrumb">
         <li class="breadcrumb-item"><i class="fa fa-table fa-lg"></i></li>
         <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
      </ul>
   </div>


 

   <table class="table table-sm table-striped table-bordered">
    <thead class="bg-primary text-center text-white">
        <tr>
          <th scope="col">Branch</th>
          <th scope="col" colspan="2">CASA</th>
          <th scope="col" colspan="2">Deposit</th>
          <th scope="col" colspan="2">Remittance</th>
          <th scope="col" colspan="2">Loan</th>
          
          <th>Action</th>
          
         
        </tr>

        <tr class="text-center" style="text-transform:capitalize;">
          <td class="text-left">--</td>

         
          <td>Count</td>
          <td>Amount (TK)</td>
          
          <td>Count</td>
           <td>Amount (TK)</td>
          
          <td>Count</td>
           <td>Amount (TK)</td>

           
          <td>Count</td>
             <td>Amount (TK)</td>  

           <td>--</td>
        </tr>

    </thead>
    <tbody>

        <?php 

            $sql="SELECT br.id, br.branch_code, br.branch_name FROM `branches` br left join regions reg on br.region_id=reg.id";

            $query = mysqli_query($conn, $sql);

            

            while($fetch=mysqli_fetch_array($query)){

          ?>

        <tr class="text-center">
          <td class="text-left"><?php echo $fetch['branch_name']; ?></td>
          
          <td><?php echo(rand(10,500)); ?></td>
          <td><?php echo number_format(rand(111111,999999), 2); ?></td>

         <td><?php echo(rand(100,1000)); ?></td>
          <td><?php echo number_format(rand(111111,9599999), 2); ?></td>

          <td><?php echo(rand(100,1000)); ?></td>
          <td><?php echo number_format(rand(1111111,9999999), 2); ?></td>

          <td><?php echo(rand(10,100)); ?></td>
          <td><?php echo number_format(rand(111111,999999), 2); ?></td>

           <td><a href="<?php echo "branch-emp-data.php"; ?>" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>
        </tr>

        <?php 

          }

        ?>

  
      
      </tbody>
  </table>


   
</main>
    
    <?php include 'partial/_footer.php'; ?>

    <script type="text/javascript" src="assets/js/plugins/validation.js"></script>
    <script type="text/javascript" src="assets/js/plugins/bootstrap-datepicker.min.js"></script>
    <script type="text/javascript" src="assets/js/branch/command-execution.js"></script>
     <script>
     $('.datepicker').datepicker({
      format: "yyyy-mm",
      viewMode: "months", 
      minViewMode: "months"
   });
    </script>
  </body>
</html>