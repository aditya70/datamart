<?php
echo $_POST["country"]."</br>";
echo $_POST["state"]."</br>";
echo $_POST["Max_Temp"]."</br>";
echo $_POST["Min_Temp"]."</br>";
echo $_POST["MeanRh"]."</br>";
echo $_POST["DateC"]."</br>";
echo $_POST["DateD"]."</br>";
echo $_POST["RainFall"]."</br>";
//echo $_POST["month"]."</br>";
echo $_POST["MeanTemp"]."</br>";
echo $_POST["Month_C"]."</br>";
echo $_POST["p"]."</br>";
include('config.php');

$sql = "INSERT INTO LTF(StateName,District,Max_Temp,Min_Temp,MeanRh,DateC,DateD,RainFall,MeanTemp,Month_C,p)
VALUES ('".$_POST["country"]."','".$_POST["state"]."','".$_POST["Max_Temp"]."','".$_POST["Min_Temp"]."','".$_POST["MeanRh"]."','".$_POST["DateC"]."','".$_POST["DateD"]."','".$_POST["RainFall"]."','".$_POST["MeanTemp"]."','".$_POST["Month_C"]."','".$_POST["p"]."')";
//echo "<br>"$sql"<br>";
if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>