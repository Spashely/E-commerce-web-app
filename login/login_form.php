<?php include("../primary_pages/connection/connection.php");

$email = $_POST["Email"];
$password = $_POST["Password"];
$error = "Wrong credentials, please try again.";
/* Functionality */
$checklog = mysqli_query($connection, "SELECT * FROM MG_User WHERE Email='$email' && Password = '$password'");
$checkadmin = mysqli_query($connection, "SELECT * FROM Admin WHERE Email='$email' && Password = '$password'");

if (mysqli_num_rows($checkadmin) ==1){ /* If user is admin */
    session_start();
    $_SESSION["admin"]=$email;
    header("Location:../admin/admin.php");
    exit;
}

if(mysqli_num_rows($checklog) == 1){ /* If details are correct */
    session_start();
	$_SESSION["login"]=$email;
    $check=mysqli_query($connection, "SELECT * FROM MG_User WHERE Email = '$email'");
	header("Location:../primary_pages/index.php");
    exit;
}
else { /* If details are incorrect */
    echo "<script>
        alert('Wrong credentials, please try again.');
        window.history.back();
    </script>";
}
?>

<script>

const rmCheck = document.getElementById("rememberMe"),
    emailInput = document.getElementById("email");

if (localStorage.checkbox && localStorage.checkbox !== "") {
  rmCheck.setAttribute("checked", "checked");
  emailInput.value = localStorage.username;
} else {
  rmCheck.removeAttribute("checked");
  emailInput.value = "";
}

function lsRememberMe() {
  if (rmCheck.checked && emailInput.value !== "") {
    localStorage.username = emailInput.value;
    localStorage.checkbox = rmCheck.value;
  } else {
    localStorage.username = "";
    localStorage.checkbox = "";
  }
}

</script>