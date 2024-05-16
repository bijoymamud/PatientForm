
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="displayInfo.css">
</head>
<body>
    <h2>Patient Information</h2>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Address</th>
                <th>Mobile</th>
                <th>Disease</th>
                <th>Doctor Name</th>
                <th>Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("connection.php");
                $queryselect = "select * from patientinformation";
                $query = mysqli_query($con,$queryselect);
                while ($result = mysqli_fetch_array($query)) {
            ?>
            <tr>
                <td><?php echo $result['id'] ?></td>
                <td><?php echo $result['name'] ?></td>
                <td><?php echo $result['address'] ?></td>
                <td><?php echo $result['mobile'] ?></td>
                <td><?php echo $result['disease'] ?></td>
                <td><?php echo $result['docname'] ?></td>

                <td class="lastTable">
                  
                    <a href="update.php?id=<?php echo $result['id'] ?>" class="operation-icon"><i class="fas fa-edit"></i></a>


                   
                    <a class="operation-icon" href="delete.php?id=<?php echo $result['id'] ?>" ><i class="fas fa-trash-alt"></i></a>

                </td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>
