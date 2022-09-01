<?php
include ('config.php');

$sql = "DELETE n1 FROM crop_calculation n1, crop_calculation n2 WHERE n1.id > n2.id AND n1.Crop_name = n2.Crop_name AND n1.Variety=n2.Variety AND n1.Growth_Stages=n2.Growth_Stages AND n1.GDD_Req=n2.GDD_Req  AND n1.AGDD=n2.AGDD AND n1.Stage_Completion=n2.Stage_Completion AND n1.Kc=n2.Kc AND n1.Base_Temp=n2.Base_Temp AND n1.Duration_in_Days_1=n2.Duration_in_Days_1 AND n1.Cpe_ratio=n2.Cpe_ratio AND n1.ideal_meanrh=n2.ideal_meanrh AND n1.Duration_in_Days=n2.Duration_in_Days AND n1.Cumulative_days=n2.Cumulative_days AND n1.ideal_min=n2.ideal_min AND n1.ideal_max=n2.ideal_max";

if (mysqli_query($conn, $sql)) {
   // echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>