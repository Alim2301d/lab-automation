<?php

$query = "select * from product";
$result = mysqli_query($db,$query);



?>

<br><br>
<a href="?page=add_product.php" class="btn btn-primary rounded-pill m-2 " >ADD PRODUCT</a>
<div class="col-sm-12 col-xl-11"style="margin-left: 20px; margin-top: 30px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">PRODUCT DETAILS</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">PRODUCT NAME</th>
                                        <th scope="col">DESCRIPTION</th>
                                        <th scope="col">Action</th>

                                        
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                                <?php
                                
                                while($row=mysqli_fetch_array($result)){
                                  ?>
                                  <tr>

                                    <th scope="row"><?php echo $row["p_id"]?></th>
                                     <td><?php echo $row["name"]?></td>
                                     <td><?php echo $row["description"]?></td>
                                     <td><a href="?page=form.php&id=<?php echo $row["p_id"] ?>"><button class="btn btn-info">Manufacture</button></a>
                                  </tr>
                                    <?php
                                }
                                
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


