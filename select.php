<?php  
    if(isset($_POST["product_id"])){
        $output = '';
      $db_connect = mysqli_connect('localhost', 'root', '', 'rahtech_digital_solutions') or die("Could not connect to database");
      $sql = "SELECT * FROM products WHERE id = '".$_POST["product_id"]."' ";
      $stmt = $db_connect->prepare($sql);
      $stmt->execute();
      $result = $stmt->get_result();
      

      $output .='
      <div class="table-responsive">
      <table class="table table-bordered">';

      while($row = $result->fetch_assoc()){
          $output .='
          <tr>
             <td width="30%"><label>Product name</label></td>
             <td width="70%">'.$row['product_name'].'</td>

          </tr>

          <tr>
          <td width="30%"><label>Price</label></td>
          <td width="70%">Ksh. '.$row['our_price'].'</td>

       </tr>

       <tr>
       <td width="30%"><label>Description</label></td>
       <td width="70%">'.$row['product_description'].'</td>

    </tr>

    <img src=" '.$row['product_image'].' " style="width: 200px; height: 200px; ">
          ';
      }
      $output .="</table></div>";
      echo $output;
    }
    
 ?>