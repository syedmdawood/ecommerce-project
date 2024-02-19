<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
        a{
            text-decoration:none;
            color: white;
        }
        .action-buttons {
            display: flex;
        }

        .action-buttons button {
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <?php include "navbar.php" ;  ?>
    <center><h1>Admin Page </h1></center>
    <br>
    <center><h3>All Login Info</h3></center>
    


    <?php
    
    $servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "nike";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$tableName = "logindata";

$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);


// if ($result->num_rows > 0) {

//     while ($row = $result->fetch_assoc()) {
//         echo "ID   : "  .  $row["Cus_id"] . "<br>";
//         echo "Email   : " . $row["email"] . "<br>";
//         echo "Pssword  : " . $row["password"] . "<br>";
//         echo "Created at  : " . $row["created_at"] . "<br>";
//     }
// } else {
//     echo "No data found in the table.";
// }
$data = array();
if ($result-> num_rows  > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();

    ?>
  
  <table>
    <tr>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Created At</th>
        <th>Actions</th> 
    </tr>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td class="action-buttons">
                <!-- Delete Button -->
                <form action="logindelete.php" method="get">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <form action="loginupdate.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button  type="submit" class="btn btn-success">Update</button>
                </form>
                <!-- <a href='loginupdate.php?id=$row[id]' class="btn btn-success">Update</a> -->
            </td>
        </tr>
        <?php endforeach; ?>
  </table>

  <br><br>

  <center><h3>All Sign Up Info</h3></center>


<?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "nike";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $tableName = "signupdata";

$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);

$data = array();
if ($result-> num_rows  > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();



?>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Created At</th>
        <th>Actions</th> 
    </tr>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td class="action-buttons">
                <!-- Delete Button -->
                <form action="signupdelete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <form action="signupdate.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button  type="submit" class="btn btn-success">Update</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
  </table>



<br><br>
  <center><h3>All Buy Info</h3></center>


<?php
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "nike";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $tableName = "buydata";

$sql = "SELECT * FROM $tableName";
$result = $conn->query($sql);

$data = array();
if ($result-> num_rows  > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();



?>

<table>
    <tr>
        <th>Id</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Card Name</th>
        <th>Card No</th>
        <th>Created At</th>
        <th>Actions</th> 
    </tr>

    <?php foreach ($data as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['fname']; ?></td>
            <td><?php echo $row['lname']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['cardname']; ?></td>
            <td><?php echo $row['cardno']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td class="action-buttons">
                <!-- Delete Button -->
                <form action="buydelete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <form action="buyupdate.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <button  type="submit" class="btn btn-success">Update</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
  </table>



<br><br>
<?php   include "footer.php" ; ?>
</body>
</html>