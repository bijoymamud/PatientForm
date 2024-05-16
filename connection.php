<?php

$username="root";
$password= "";
$server = 'localhost';
$db = 'patientinfofile';

$con = mysqli_connect($server, $username, $password, $db);

if ($con) {

    ?>
      <script>
        alert('Successfully Connected to Database')
      </script>
          <?php

      } else {

        ?>
        <script>
          alert('Error ...! Please cheack again')
        </script>
            <?php
      }