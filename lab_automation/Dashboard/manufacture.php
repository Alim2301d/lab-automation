<?php

$query = "select * from manufacture";
$result = mysqli_query($db,$query);

 

?>               
     
<div class="col-sm-12 col-xl-10" style="margin-left: 70px; margin-top: 50px">
     <div class="bg-light rounded h-100 p-4">
            <h3 class="mb-4">MANUFACTURE DETAILS</h3>
                <table class="table table-hover">
                     <thead>
                        <tr>
                          <th scope="col">MANUFACTURE_ID</th>
                          <th scope="col">PRODUCT_ID</th>
                          <th scope="col">DATE</th>
                          <th scope="col">QUANTITY</th>
                          <th scope="col">ACTION</th>


                                        
                     </tr>
                </thead>
                        <tbody  id="myTable">
                        <?php
                                
                                while($row=mysqli_fetch_array($result)){
                                  ?>
                          <tr>
                          <th scope="row"><?php echo $row['m_id']?></th>
                          <td><?php echo $row['product_id']?></td>
                          <td><?php echo $row['date']?></td>
                          <td><?php echo $row['quantity']?></td>
                            
                            <td><a href="?page=testin.php&manid=<?php echo $row["m_id"] ?>&qty=<?php echo $row["quantity"] ?>" class="btn btn-success rounded-pill m-2">TEST</a></td>
                          </tr>
                          <?php
                                }
                                
                                ?>
                              
                     </tbody>        
            </table>
        </div>
 </div>
         

