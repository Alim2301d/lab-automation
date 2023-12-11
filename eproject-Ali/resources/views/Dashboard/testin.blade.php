<?php

include("config.php");
$query = "SELECT * FROM `test`";
$result = mysqli_query($db,$query);

?>

    <form method="post">

          <div class="mb-3">
          <label  class="form-label">Select Test</label>
          <select name="test" class="form-control bg-dark">
  <?php

       while($row = mysqli_fetch_array($result))
      {
       echo "<option value='$row[Test_id]'>$row[name]</option>";
        
      }
    ?>


          </select>

          <br><br>

          <button type="submit" name="btn" class="btn btn-primary">Submit</button>

          </div>

    </form>


                    <?php

                    if(isset($_POST["btn"])){
                        $test_id = $_POST["test"];  
                        $manid= $_GET["manid"];
                        $qty = $_GET["qty"];

                        

                        $q1 = "INSERT INTO `testing`(`testing_id`, `manufact_id`, `test_id`, `date`, `quantity`, `status`) VALUES
                         ('','$manid','$test_id',current_timestamp(),'$qty','pending')";
                        if(mysqli_query($db,$q1)){
                                          
                                                  
                                          
                            echo "<script>alert('data uploaded succesfully')</script>" ;

                              
                          }else{
                            echo "<script>alert('something went wrong')</script>" ;

                          }
                      }
                        


                    ?>