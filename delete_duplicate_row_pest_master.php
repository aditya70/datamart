<?php
include ('config.php');

$sql = "DELETE n1 FROM Pest_Master n1, Pest_Master n2 WHERE n1.id > n2.id AND n1.State = n2.State AND n1.Crop=n2.Crop AND n1.Growth_Stage=n2.Growth_Stage AND n1.Pest_types=n2.Pest_types  AND n1.Pest_C_Name=n2.Pest_C_Name AND n1.Scientific_name=n2.Scientific_name AND n1.Tmin=n2.Tmin AND n1.Tmax=n2.Tmax AND n1.RHmin=n2.RHmin AND n1.RHmax=n2.RHmax";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>