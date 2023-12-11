<?php

$query = "select * from test";
$result = mysqli_query($db,$query);

?>
<br><br>
<a href="?page=add_test.php" class="btn btn-primary rounded-pill m-2 " >ADD TEST</a>
<div class="col-sm-12 col-xl-7" style="margin-left: 70px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">TEST DETAILS</h3>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">TEST_ID</th>
                                        <th scope="col">NAME</th>
                                        <th scope="col">DESCRIPTION</th>
                                       

                                        
                                    </tr>
                                </thead>
                                <tbody  id="myTable">
                                <?php
                                
                                while($row=mysqli_fetch_array($result)){
                                  ?>
                                  <tr>

                                    <th scope="row"><?php echo $row["Test_id"]?></th>
                                     <td><?php echo $row["name"]?></td>
                                     <td><?php echo $row["description"]?></td>
                                     <!-- <td><a href="?page=.php"><button class="btn btn-info">UPDATE</button></a> -->
                                    
                                  </tr>
                                    <?php
                                }
                                
                                ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>