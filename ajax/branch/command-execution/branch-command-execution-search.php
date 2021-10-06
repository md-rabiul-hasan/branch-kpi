<?php 
  session_start();
  // Authentication Check
  if(!isset($_SESSION['id'])){
    header('location:../../../login.php');
    exit;
  }
 ?>
<?php 

    $file="region-branch-command-execution-time-search-date.php";
    $result = '<table class="table table-sm table-striped table-bordered">
    <thead class="bg-primary text-center text-white">
        <tr>
          <th scope="col">Regions</th>
          <th scope="col" colspan="2">CASA</th>
          <th scope="col" colspan="2">Deposit</th>
          <th scope="col" colspan="2">Remittance</th>
          <th scope="col" colspan="2">Loan</th>
          <th scope="col" >Action</th>
         
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
          <td>234</td>
          <td>30505945
          </td>
          <td>54552
          </td>
          <td>5456323323
          </td>
          <td>654</td>
          <td>542554543
          </td>

          <td>2,322</td>
          <td>545454454553
          </td>

           <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>

        </tr>


        <tr class="text-center">
          <td class="text-left">Region-2</td>
          <td>2,067
          </td>
          <td>4340453237
          </td>
          <td>407</td>
          <td>5450200037
          </td>
          <td>2,667
          </td>
          <td>87708007
          </td>

          <td>2067
          </td>
          <td>30098887
          </td>

           <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>  

        </tr>

        <tr class="text-center">
          <td class="text-left">Region-3</td>
          <td>33
          </td>
          <td>65654565
          </td>
          <td>33
          </td>
          <td>899009943
          </td>
          <td>623
          </td>
          <td>236566004
          </td>

          <td>2,669
          </td>
          <td>20434545000940
          </td>

          <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>     

        </tr>
        <tr class="text-center">
          <td class="text-left">Region-4</td>
          <td>180105
          </td>
          <td>10554551045
          </td>
          <td>14335
          </td>
          <td>123235010989
          </td>
          <td>2234
          </td>
          <td>64346001000
          </td>

           <td>2,66109
          </td>
          <td>9890099109400
          </td>

         <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>       

        </tr>
        <tr class="text-center">
          <td class="text-left">Region-5</td>
          <td>40
          </td>
          <td>576788700
          </td>
          <td>467
          </td>
          <td>708677667
          </td>
          <td>17
          </td>
          <td>3878786
          </td>

           <td>266
          </td>
          <td>12656787
          </td>

         <td><a href="'.$file.'" class="btn btn-info btn-sm" target="_blank"> <i class="fa fa-info-circle"></i></a></td>      

        </tr>

      
      </tbody>
  </table>';

  echo $result;
?>