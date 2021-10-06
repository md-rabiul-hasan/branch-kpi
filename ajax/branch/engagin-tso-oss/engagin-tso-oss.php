<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 
    $file="branch-list-tso-oss.php";
    $result = '<table class="table table-sm table-striped table-bordered">
              <thead class="bg-primary text-center text-white">
                <tr>

                  <th scope="col">Region</th>
                  <th scope="col">CASA</th>
                  <th scope="col" >Deposit</th>
                  <th scope="col">Remittance</th>
                  <th scope="col">Loan</th>
                  <th scope="col">Action</th>

                </tr>
              </thead>
              <tbody>

                <tr class="text-center">

                  <td class="text-left">Region-1</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>1</strong> out of 7</td>
                  <td><strong>7</strong> out of 7</td>
                  <td><strong>7</strong> out of 7</td>
              
                   <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

                </tr>


                


                <tr class="text-center">

                  <td class="text-left">Region-2</td>
                  <td><strong>7</strong> out of 15</td>
                  <td><strong>1</strong> out of 9</td>
                  <td><strong>6</strong> out of 8</td>
                  <td><strong>7</strong> out of 7</td>
              
                   <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

                </tr>

                <tr class="text-center">

                  <td class="text-left">Region-3</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>1</strong> out of 7</td>
                  <td><strong>7</strong> out of 7</td>
                  <td><strong>7</strong> out of 7</td>
              
                   <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

                </tr>

                <tr class="text-center">

                  <td class="text-left">Region-4</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>2</strong> out of 10</td>
                  <td><strong>1</strong> out of 7</td>
                  <td><strong>2</strong> out of 7</td>
              
                   <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

                </tr>

                <tr class="text-center">

                  <td class="text-left">Region-5</td>
                  <td><strong>6</strong> out of 10</td>
                  <td><strong>4</strong> out of 10</td>
                  <td><strong>7</strong> out of 10</td>
                  <td><strong>7</strong> out of 10</td>
              
                   <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

                </tr>


                        
              </tbody>
            </table>';

  echo $result;
?>