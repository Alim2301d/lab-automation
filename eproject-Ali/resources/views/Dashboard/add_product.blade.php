<?php
include("config.php");

?>

<div class="col-sm-12 col-xl-11" style="margin-left: 20px; margin-top: 20px">
                        <div class="bg-light rounded h-100 p-4">
                            <h3 class="mb-4">ADD PRODUCT</h3>
                            <form method="POST" enctype="multipart/form-data">
                            
                                <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="name" class="form-control" id="text">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="text" class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="desc" class="form-control" id="text">
                                    </div>
                                </div>
                                <button type="submit" name="btn" class="btn btn-primary">SUBMIT</button>
                            </form>
                        </div>
                    </div>

                    <?php

                            if(isset($_POST["btn"])){  

                            $name= $_POST["name"];
                            $desc = $_POST["desc"];


                            $query = "Insert into product values('','$name','$desc')";
                            if( mysqli_query($db,$query)){

                            echo "<script>
                            alert('New product Added!!');
                            </script>";

                            }

                            }

                    ?>