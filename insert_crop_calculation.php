<?php
echo $_POST["Crop_name"]."</br>";
echo $_POST["Variety"]."</br>";
echo $_POST["Growth_Stages"]."</br>";
echo $_POST["GDD_Req"]."</br>";
echo $_POST["AGDD"]."</br>";
echo $_POST["Stage_Completion"]."</br>";
echo $_POST["Kc"]."</br>";
echo $_POST["Base_Temp"]."</br>";
//echo $_POST["month"]."</br>";
echo $_POST["Duration_in_Days_1"]."</br>";
echo $_POST["Cpe_ratio"]."</br>";
echo $_POST["Duration_in_Days"]."</br>";
echo $_POST["Cumulative_days"]."</br>";
echo $_POST["ideal_min"]."</br>";
echo $_POST["ideal_max"]."</br>";
echo $_POST["ideal_meanrh"]."</br>";

include('config.php');

$sql = "INSERT INTO crop_calculation(Crop_name,Variety,Growth_Stages,GDD_Req,AGDD,Stage_Completion,Kc,Base_Temp,Duration_in_Days_1,Cpe_ratio,Duration_in_Days,Cumulative_days,ideal_min,ideal_max,ideal_meanrh)
VALUES ('".$_POST["Crop_name"]."','".$_POST["Variety"]."','".$_POST["Growth_Stages"]."','".$_POST["GDD_Req"]."','".$_POST["AGDD"]."','".$_POST["Stage_Completion"]."','".$_POST["Kc"]."','".$_POST["Base_Temp"]."','".$_POST["Duration_in_Days_1"]."','".$_POST["Cpe_ratio"]."','".$_POST["Duration_in_Days"]."','".$_POST["Cumulative_days"]."','".$_POST["ideal_min"]."','".$_POST["ideal_max"]."','".$_POST["ideal_meanrh"]."')";
//echo "<br>"$sql"<br>";
if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>