<?php

include("config.php");
$query = "SELECT * FROM `testing`"; 
$result = mysqli_query($db,$query); 

?>
<div class="col-sm-12 col-xl-11" style="margin-left: 20px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">ADD APROVED  QTY</h3>
                            <form method="POST" enctype="multipart/form-data">
                        
                                <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">QUANTITY</label>
                                    <div class="col-sm-10">
                                        
                                      <input type="number" name="qty" class="form-control" id="" max="<?php  $qty = $_GET["qty"]; echo $qty;?>" minlength="10" > 
                                    </div>
                                    <br><br>                                  <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label"></label>
                                    <div class="col-sm-10">

                                    <button type="submit" name="btn" class="btn btn-dark">APPROVE QUANTITY</button>
                                    </div>  
                            </form>
                        </div>
                    </div>


                    <?php

                            

                            if(isset($_POST["btn"])){  

                          
                           $quantity=$_POST['qty']; //aprove wali
                           $testing= $_GET["testing_id"];
                           $qty = $_GET["qty"]; // total qty
                           $manu = $_GET["man_id"]; // total qty
                           $diss = $qty - $quantity; 
                    
                           $q1 ="insert into inventory values('','$manu','$testing',current_timestamp(),'$qty','$quantity','$diss')"; 

                           if(mysqli_query($db,$q1)){

                                 echo "<script>alert('data uploaded succesfully')
                                 window.location.replace('status/clear.php?id=$testing');
                                 </script>" ;
                       
                                   
                               }else{
                                 echo "<script>alert('something went wrong')</script>" ;
                       
                               }
                           }
                        
                        ?>
                                               