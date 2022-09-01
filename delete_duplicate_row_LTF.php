<?php
include ('config.php');

$sql = "DELETE n1 FROM LTF n1, LTF n2 WHERE n1.id > n2.id AND n1.StateName = n2.StateName AND n1.District=n2.District AND n1.Max_Temp=n2.Max_Temp AND n1.Min_Temp=n2.Min_Temp  AND n1.MeanRh=n2.MeanRh AND n1.DateC=n2.DateC AND n1.DateD=n2.DateD AND n1.RainFall=n2.RainFall AND n1.MeanTemp=n2.MeanTemp AND n1.Month_C=n2.Month_C AND n1.p=n2.p";

if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>