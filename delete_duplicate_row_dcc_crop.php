<?php
include ('config.php');

$sql = "DELETE n1 FROM DCC_Crop n1, DCC_Crop n2 WHERE n1.id > n2.id AND n1.name = n2.name AND n1.Development=n2.Development AND n1.DAP=n2.DAP AND n1.Growth=n2.Growth  AND n1.Suggestion=n2.Suggestion";

if (mysqli_query($conn, $sql)) {
   // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>