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
          <h1><i class="fa fa-th-list"></i> Region-Branch</h1>
          <p>This table showing all region branch list</p>
        </div>
        <ul class="app-breadcrumb breadcrumb side">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Region-Branch</li>
          <li class="breadcrumb-item active"><a href="#">Region Branch List</a></li>
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
                      <th>Region Name</th>
                      <th>Branch Name</th>
                      <th>Branch Code</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php 
                        $sql   = "SELECT
                        br.branch_name,
                        br.branch_code,
                        re.name as region_name,
                        br.region_id 
                     FROM
                        `branches` br 
                        left join
                           regions re 
                           on br.region_id = re.id 
                     ORDER BY
                        `br`.`region_id` ASC";
                        $query = mysqli_query($conn, $sql);
                        $sl    = 1;

                        while($data = mysqli_fetch_assoc($query)){
                            ?>
                                <tr>
                                    <td><?php echo $sl++; ?></td>
                                    <td><?php echo $data['region_name']; ?></td>
                                    <td><?php echo $data['branch_name']; ?></td>
                                    <td><?php echo $data['branch_code']; ?></td>
                                </tr>
                            <?php
                        }
                      ?>
                    
                  </tbody>
                </table>
              </div>

                
                <div id="html" class="demo">

                  <?php 
                        $sql_reqgions   = "SELECT id, name as region_name FROM regions";
                        $query_reqgions = mysqli_query($conn, $sql_reqgions);
                        $sl    = 1;

                        while($data_reqgions = mysqli_fetch_assoc($query_reqgions)){

                          $regions_id = $data_reqgions['id'];
                            ?>
                                <ul>
                                  <li data-jstree='{ "opened" : true }'><?php echo $data_reqgions['region_name']; ?>


                                  <?php 
                                    $sql_branches   = "SELECT br.branch_code, br.branch_name FROM `branches` br left join regions reg on br.region_id=reg.id  where reg.id='$regions_id'";

                                    $query_branches = mysqli_query($conn, $sql_branches);
                                    $sl    = 1;


                                     while($data_branches = mysqli_fetch_assoc($query_branches)){
                                  ?>
                                    <ul>
                                      
                                        <li data-jstree=''><?php echo $data_branches['branch_name']; ?></li>  
                                      
                                       

                                    </ul>

                                    <?php 

                                      }
                                    ?>
                                  </li>
                                </ul>
                            <?php
                        }
                      ?>

                </div>

            </div>
          </div>
        </div>
      </div>
    </main>

      <?php include '../partial/_footer.php'; ?> 

      <script>
  // html demo
  $('#html').jstree();

  // inline data demo
  $('#data').jstree({
    'core' : {
      'data' : [
        { "text" : "Root node", "children" : [
            { "text" : "Child node 1" },
            { "text" : "Child node 2" }
        ]}
      ]
    }
  });

  // data format demo
  $('#frmt').jstree({
    'core' : {
      'data' : [
        {
          "text" : "Root node",
          "state" : { "opened" : true },
          "children" : [
            {
              "text" : "Child node 1",
              "state" : { "selected" : true },
              "icon" : "jstree-file"
            },
            { "text" : "Child node 2", "state" : { "disabled" : true } }
          ]
        }
      ]
    }
  });

  
  </script>

          <!-- Data table plugin-->
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo prefix_dot() ?>assets/js/plugins/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>      
    </body>
</html>