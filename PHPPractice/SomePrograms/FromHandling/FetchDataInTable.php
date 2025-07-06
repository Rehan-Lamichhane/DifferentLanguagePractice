<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">User Registration Table</h2>
    <table>
        <tr>
            <th>UID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php

            include("db_connect.php"); 
            $sql = "SELECT * FROM user_registration";
            $result = mysqli_query($connect, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['uid'] . "</td>";
                    echo "<td>" . $row['Name'] . "</td>";
                    echo "<td>" . $row['Address'] . "</td>";
                    echo "<td>" . $row['EMail'] . "</td>";
                    echo "<td>" . $row['Password'] . "</td>";
                    echo "</tr>";
                }
        } else {
            echo "<tr><td colspan='5'>No records found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>

