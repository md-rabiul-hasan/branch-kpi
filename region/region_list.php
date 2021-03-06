<?php 
  include '../db/database_connection.php';
  session_start();
  
  if(!isset($_SESSION['id'])) {
    header("location:login.php");
    exit;
  }

  include '../partial/_header.php';
 ?>
        <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> Region</h1>
          <p>This table showing all region list</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Region</li>
          <li class="breadcrumb-item active"><a href="#">Region List</a></li>
        </ul>
      </div>

        <div class="row">
            <div class="col-md-12 mb-3" >
                <a href="create.php" style="float: right;" class="btn btn-primary"><i class="fa fa-plus"></i> Add New</a>
            </div>
        </div>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <div class="table-responsive">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Name</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                        $sql   = "SELECT * FROM regions";
                        $query = mysqli_query($conn, $sql);
                        $sl    = 1;

                        while($data = mysqli_fetch_assoc($query)){
                            ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $data['name']; ?></td>
                                </tr>
                            <?php
                        }
                      ?>
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
      <?php include '../partial/_footer.php'; ?>     
          <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>      
    </body>
</html>