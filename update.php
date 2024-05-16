<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
    <div class="background"></div>
    
    
    <div class="container">



    <div class="left-content">
            <div class="movable-img">
                <img class="movable" src="../Docdata/images/doctor.png" alt="Movable Image">
                <p class="textp">From routine check-ups to specialized treatments, we offer a wide range of medical services tailored to meet your needs. </p>
                <!-- <button>Check Serial</button> -->
                <a  href="displayInfo.php ">Check Serial</a>
            </div>
        </div>




        <form action="#" method="POST" class="application-form">
            <h2>Application Form</h2>


            <?php


include("connection.php");

$ids = $_GET['id'];
$showquery = "select * from  patientinformation where id={$ids}";
$showdata = mysqli_query($con, $showquery);
$arrdata = mysqli_fetch_array($showdata);


if (isset($_POST["submit"])) {
  
  $idupdate = $_GET['id'];
  
  $name = $_POST["name"];
  $address = $_POST["address"];
  $phone = $_POST["number"];
  $disease = $_POST["disease"];
  $docname = $_POST["docname"];
  // $visitingtime = $_POST["time"];


// $inserquery = "INSERT INTO `patientinformation`(`name`, `address`, `mobile`, `disease`, `docname`, `visitingtime`) VALUES ('$name','$address','$phone','$disease','$docname','$visitingtime')";

$dataquery= "UPDATE patientinformation SET `name`='$name',`address`='$address',`mobile`='$phone',`disease`='$disease',`docname`='$docname' WHERE id=$idupdate";



$res = mysqli_query($con, $dataquery);

if ($res) {
            ?>
             <script>
                alert('Data successfully inserted')
             </script>
            <?php
           
            }else{
              ?>
              <script>
                 alert('Error ...! Insert data again')
              </script>
             <?php
            }


          
          }
?>


            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" value="<?php echo $arrdata['name'] ?>" id="name" name="name" required>
            </div>


            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" value="<?php echo $arrdata['address'] ?>" id="address" name="address" required>
            </div>


            <div class="form-group">
                <label for="number">Number:</label>
                <input type="number" value="<?php echo $arrdata['mobile'] ?>" id="number" name="number" required>
            </div>


          

            <div class="form-group">
                <label for="disease">Disease</label>
                <input type="text" value="<?php echo $arrdata['disease'] ?>" id="disease" name="disease">
            </div>


            <div class="form-group">
                <label for="docname">Doctor Name</label>
                <input type="text" value="<?php echo $arrdata['docname'] ?>" id="docname" name="docname" required>
            </div>

          

            <!-- <input type="submit" class="register-button">Register</input> -->
            <input class="register-button" type="submit" name="submit" id="" value="Update">


        </form>
    </div>
</body>
</html>






//gettng the data from the input field using php


