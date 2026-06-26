<?php include("../primary_pages/connection/connection.php");

/* Data collection */
$email = $_POST["Email"];
$password = $_POST["Password"];
$confirm_password = $_POST["Confirm_password"];
$first_name = $_POST["First_Name"];
$last_name = $_POST["Last_Name"];

$checkem = mysqli_query($connection, "SELECT * FROM MG_User WHERE Email='$email'");

if (mysqli_num_rows($checkem) > 0) {
    echo "<script>
        alert('Email already exists');
        window.history.back();
    </script>";
    exit;
}

if ($password == $confirm_password) {
    mysqli_query($connection, "INSERT INTO MG_User (Email, Password, First_Name, Last_Name)
    VALUES ('$email', '$password', '$first_name', '$last_name')");

    header("Location:../primary_pages/index.php");
    exit;
} else {
    echo "<script>
        alert('Passwords do not match');
        window.history.back();
    </script>";
}