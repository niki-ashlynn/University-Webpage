<?php
include "connect.php"; // reuse connection

$sql = "SELECT id, name, email FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<h2>User List</h2><ul>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<li>" . $row["id"]. " - " . $row["name"]. " (" . $row["email"]. ")</li>";
    }
    echo "</ul>";
} else {
    echo "No users found.";
}

mysqli_close($conn);
?>
