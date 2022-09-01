<?php
include ('config.php');

$sql = "DELETE n1 FROM crop_yield_master n1, crop_yield_master n2 WHERE n1.id > n2.id AND n1.State = n2.State AND n1.District=n2.District AND n1.Crop=n2.Crop AND n1.Year=n2.Year  AND n1.Season=n2.Season AND n1.Area_Hectare=n2.Area_Hectare AND n1.Production_Tonnes=n2.Production_Tonnes AND n1.Yield_Tonnes=n2.Yield_Tonnes AND n1.Yield_qa=n2.Yield_qa AND n1.Yield_kg=n2.Yield_kg";

if (mysqli_query($conn, $sql)) {
   // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>