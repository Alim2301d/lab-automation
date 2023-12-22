<?php
include("config.php");
$query="select* from product";
$result=mysqli_query($db ,$query);
$id = $_GET["id"];

?>

<div class="col-sm-12 col-xl-11" style="margin-left: 20px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">ADD PRODUCT QUANTITY</h3>
                            <form method="POST" enctype="multipart/form-data">
                            
                           
                                <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        
                                        <input type="text" name="qty" class="form-control" id="text">
                                    </div>
                                </div>
                                <button type="submit" name="btn" class="btn btn-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>


                    <?php

                            if(isset($_POST["btn"])){  

                          
                           $quantity=$_POST['qty'];
                
                           $q1 = "INSERT INTO `manufacture` (`m_id`, `product_id`, `date`, `quantity`) VALUES ('', '$id', current_timestamp(), '$quantity');" ;

                           if(mysqli_query($db,$q1)){
                       
                         
                                 echo "<script>alert('data uploaded succesfully')</script>" ;
                       
                                   
                               }else{
                                 echo "<script>alert('something went wrong')</script>" ;
                       
                               }
                           }
 
                        ?>
                                               