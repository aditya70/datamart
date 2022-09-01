<?php
/*echo $_POST["Crop"]."</br>";
echo $_POST["Development"]."</br>";
echo $_POST["DAP"]."</br>";
echo $_POST["Growth"]."</br>";
echo $_POST["Suggestion"]."</br>";
*/
include('config.php');

$sql = "INSERT INTO DCC_Crop(name,Development,DAP,Growth,Suggestion)
VALUES ('".$_POST["Crop"]."','".$_POST["Development"]."','".$_POST["DAP"]."','".$_POST["Growth"]."','".$_POST["Suggestion"]."')";
if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>