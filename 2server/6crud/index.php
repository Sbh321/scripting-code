<?php
include 'dbconnect.php';
$sql = "SELECT * FROM user";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <style>
        .button-link {
            display: inline-block;
            padding: 5px 10px;
            margin: 2px;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
        }
        .add {
            display: inline-block;
            padding: 5px 10px;
            margin: 2px;
            text-decoration: none;
            color: white;
            background-color: #007BFF;
            border: none;
            border-radius: 3px;
            text-align: center;
            cursor: pointer;
        }
        .button-link.delete {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <h2>User List</h2>
    <button class="add"><a href="./new.php">Add User</a></button>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['password'] . "</td>";
                    echo "<td>";
                    echo "<a href='update.php?id=" . $row['id'] . "' class='button-link'>Update</a>";
                  echo "<a href='delete.php?id=" . $row['id'] . "' class='button-link delete'>Delete</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No users found</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
<?php
$conn->close();
?>
