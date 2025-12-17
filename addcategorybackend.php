<?php
                                        $db_host = 'localhost';
                                        $db_user = 'root';
                                        $db_pass = '';
                                        $db_name = 'nurturecare';
                                       
                                        $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
                                       
                                        if ($conn->connect_error) {
                                            die("Connection failed: " . $conn->connect_error);
                                        }
// Query to retrieve options from the database
$sql = "SELECT id, categoryname FROM category"; // Replace 'categories' with your table name

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    echo '<select name="specification" style="width: 342px; height: 54px;border: 1.5px solid #13C5DD;border-radius: 6px; color:grey;">';
    echo '<option>Select Department...</option>';
    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . $row["categoryname"] . '">' . $row["categoryname"] . '</option>';
    }
    echo '</select>';
} else {
    echo "0 results";
}

$conn->close();
?>