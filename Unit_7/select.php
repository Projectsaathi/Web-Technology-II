<?php

require_once "connection.php";

$sql = "SELECT *FROM Students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    ?>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Gender</th>
            <th>Email</th>
        </tr>
            <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["firstname"]; ?></td>
                            <td><?php echo $row["lastname"]; ?></td>
                            <td><?php echo $row["gender"]; ?></td>
                            <td><?php echo $row["email"]; ?></td>
                        </tr>
                    <?php
                }
                ?>
    </table>
    <?php

} else {
    echo "0 results";
}
$conn->close();
?>