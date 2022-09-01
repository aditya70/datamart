<?php
echo $_POST["country"]."</br>";
echo $_POST["Crop"]."</br>";
echo $_POST["Growth_Stage"]."</br>";
echo $_POST["Pest_types"]."</br>";
echo $_POST["Pest_C_Name"]."</br>";
echo $_POST["Scientific_name"]."</br>";
echo $_POST["Tmin"]."</br>";
echo $_POST["Tmax"]."</br>";
echo $_POST["RHmin"]."</br>";
echo $_POST["RHmax"]."</br>";
include('config.php');

$sql = "INSERT INTO Pest_Master(State,Crop,Growth_Stage,Pest_types,Pest_C_Name,Scientific_name,Tmin,Tmax,RHmin,RHmax)
VALUES ('".$_POST["country"]."','".$_POST["Crop"]."','".$_POST["Growth_Stage"]."','".$_POST["Pest_types"]."','".$_POST["Pest_C_Name"]."','".$_POST["Scientific_name"]."','".$_POST["Tmin"]."','".$_POST["Tmax"]."','".$_POST["RHmin"]."','".$_POST["RHmax"]."')";
if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>