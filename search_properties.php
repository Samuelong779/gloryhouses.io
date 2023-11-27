<?php
include 'connect.php'; 

$searchErr = '';

if (isset($_POST['search'])) {
    if (!empty($_POST['searchText'])) {
        $location = mysqli_real_escape_string($conn, $_POST["searchText"]);
        $query = "SELECT * FROM properties WHERE city LIKE '%$location%'";

        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='property'>";
                echo "<h2>" . $row["property_name"] . "</h2>";
                echo "</div>";
            }
        } else {
            echo "No properties found.";
        }
        $conn->close();
    } else {
        $searchErr = "Please enter the information";
    }
}
?>
