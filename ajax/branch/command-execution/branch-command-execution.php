<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 

    $file="region-branch-command-execution-time-search.php";
    
    $result = '<table class="table table-sm table-striped table-bordered">
    <thead class="bg-primary text-center text-white">
        <tr>
          <th scope="col">Regions</th>
          <th scope="col" colspan="2">CASA</th>
          <th scope="col" colspan="2">Deposit</th>
          <th scope="col" colspan="2">Remittance</th>
          <th scope="col" colspan="2">Loan</th>
          <th scope="col" colspan="2">Action</th>
         
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
        <tr class="text-center">
          <td class="text-left">Region-1</td>
          <td>435</td>
          <td>5454532300
          </td>
          <td>4552
          </td>
          <td>656323323
          </td>
          <td>654</td>
          <td>32554543
          </td>

          <td>2,322</td>
          <td>35454454553
          </td>

           <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>
        </tr>


        <tr class="text-center">
          <td class="text-left">Region-2</td>
          <td>2,461
          </td>
          <td>4345453233
          </td>
          <td>402</td>
          <td>5453200032
          </td>
          <td>2,669
          </td>
          <td>87788000
          </td>

          <td>2569
          </td>
          <td>30998885
          </td>

          <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>
        
        </tr>
        <tr class="text-center">
          <td class="text-left">Region-3</td>
          <td>330
          </td>
          <td>656545656
          </td>
          <td>335
          </td>
          <td>8990099434
          </td>
          <td>623
          </td>
          <td>2365660043
          </td>

          <td>2,669
          </td>
          <td>204345450009400
          </td>

          <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

        </tr>
        <tr class="text-center">
          <td class="text-left">Region-4</td>
          <td>1805
          </td>
          <td>105545545
          </td>
          <td>1433
          </td>
          <td>1232350989
          </td>
          <td>223
          </td>
          <td>643460000
          </td>

           <td>2,669
          </td>
          <td>98900999400
          </td>

         <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

        </tr>
        <tr class="text-center">
          <td class="text-left">Region-5</td>
          <td>90
          </td>
          <td>5767887000
          </td>
          <td>967
          </td>
          <td>7086776767
          </td>
          <td>170
          </td>
          <td>38787867
          </td>

           <td>2,669
          </td>
          <td>126567878
          </td>

         <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

        </tr>

      
      </tbody>
  </table>';

  echo $result;
?>