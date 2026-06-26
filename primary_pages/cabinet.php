<html>
  <?php
session_start();
?>
<head> <!-- Head -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/stylesheet.css?v=<?= time() ?>">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="description" content="Look out for new deals ...">
        <meta name="author" content="Ivan Kompaniiets">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="../media/logo/mythos_games_logo.svg">
</head>
<body> <!-- Body -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
          <nav class="navbar navbar-expand-lg bg-body-tertiary"> <!-- Navbar -->
  <div class="container-fluid">
    <a href="../primary_pages/index.php"><img src="../media/logo/mythos_games_logo.svg" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-mobile" id="navbarSupportedContent">
        <div class="search">
      <form class="d-flex" role="search" action="booking/search.php" method="post"> <!-- Search bar -->
        <input class="search-bar" name="keyword" type="search" placeholder="Anything you want" aria-label="Search" required/>
        <button class="search-button" type="submit"><span class="material-symbols-outlined">search</span></button>
      </form>
    </div>
    <div class="nav-right ms-auto"> <!-- Navbar -->
    <a href="location.php" class="button-icon"><span class="material-symbols-outlined">location_on</span><span class="d-inline d-lg-none">Location</span></a>
    <a href="contact.php" class="button-icon"><span class="material-symbols-outlined">call</span><span class="d-inline d-lg-none">Contact</span></a>
    <!-- Login based on user -->    
     <?php if (isset($_SESSION['admin'])) {
          echo '<div class="nav-item dropdown">
          <button class="button-icon dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="material-symbols-outlined">person</span><span class="d-inline d-lg-none">Account</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../primary_pages/cabinet.php">Personal Cabinet</a></li>
            <li><a class="dropdown-item" href="../admin/admin.php">Admin Panel</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../primary_pages/logout.php">Logout</a></li>
          </ul>
          </div>';
          }
    elseif (isset($_SESSION['login'])) {
      echo '<div class="nav-item dropdown">
      <button class="button-icon dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="material-symbols-outlined">person</span><span class="d-inline d-lg-none">Account</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="cabinet.php">Personal Cabinet</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
          </ul> 
          </div>';
          } 
    else {
      echo '<button class="button-icon" data-bs-toggle="modal" data-bs-target="#modal">
  <span class="material-symbols-outlined">person</span><span class="d-inline d-lg-none">Account</span>
</button>';
    }
      ?>
    <a href="booking/cart.php" class="button-icon"><span class="material-symbols-outlined">shopping_cart</span><span class="d-inline d-lg-none">Cart</span></a>
    </div>
  </div>
</nav> <!-- End of navbar -->


<?php include("../primary_pages/connection/connection.php");

$updated = false;

if (isset($_SESSION['admin'])) {
  $email = $_SESSION['admin'];
  $query = "SELECT * FROM Admin WHERE Email='$email'";
  $result = mysqli_query($connection, $query);
  $user = mysqli_fetch_assoc($result);
  echo "<h1>Hi, " . $user['First_Name'] . "!</h1>";
  echo "<h2 style='text-align:center;'>Update form</h2>";
echo "<div class='contact-form-wrapper'>";
echo "<form class='contact-form' action='cabinet.php' method='post'>";
echo "<label for='First_Name'>First Name</label><div class='form-group'><input type='text' name='First_Name' value='" . $user['First_Name'] . "'></div>";
echo "<label for='Last_Name'>Last Name</label><div class='form-group'><input type='text' name='Last_Name' value='" . $user['Last_Name'] . "'></div>";
echo "<label for='Email'>Email</label><div class='form-group'><input type='text' name='Email' value='" . $user['Email'] . "'></div>";
echo "<label for='Password'>Password</label><div class='form-group'><input type='text' name='Password' value='" . $user['Password'] . "'></div>";
echo "<input type='submit' name='update' value='Update' class='submit-btn'>"; /* Update execution */
echo "</form>";
echo "</div>";
}
else {
  $email = $_SESSION['login'];
  $query = "SELECT * FROM MG_User WHERE Email='$email'";
  $result = mysqli_query($connection, $query);
  $user = mysqli_fetch_assoc($result);
  echo "<h1>Hi, " . $user['First_Name'] . "!</h1>";

echo "<h2 style='text-align:center;'>Update form</h2>";
echo "<div class='contact-form-wrapper'>";
echo "<form class='contact-form' action='cabinet.php' method='post'>";
echo "<label for='First_Name'>First Name</label><div class='form-group'><input type='text' name='First_Name' value='" . $user['First_Name'] . "'></div>";
echo "<label for='Last_Name'>Last Name</label><div class='form-group'><input type='text' name='Last_Name' value='" . $user['Last_Name'] . "'></div>";
echo "<label for='Email'>Email</label><div class='form-group'><input type='text' name='Email' value='" . $user['Email'] . "'></div>";
echo "<label for='Password'>Password</label><div class='form-group'><input type='text' name='Password' value='" . $user['Password'] . "'></div>";
echo "<input type='submit' name='update' value='Update' class='submit-btn'>"; /* Update execution */
echo "</form>";
echo "</div>";
}

/* UPDATE */
if(isset($_POST['update']))
{
    $first = $_POST['First_Name'];
    $last = $_POST['Last_Name'];
    $new_email = $_POST['Email'];
    $password = $_POST['Password'];

    if(isset($_SESSION['admin']))
    {
        $query = "UPDATE Admin SET 
                    First_Name='$first',
                    Last_Name='$last',
                    Email='$new_email',
                    Password='$password'
                  WHERE Email='$email'";

        mysqli_query($connection, $query);

        $_SESSION['admin'] = $new_email;
    }
    else
    {
        $query = "UPDATE MG_User SET 
                    First_Name='$first',
                    Last_Name='$last',
                    Email='$new_email',
                    Password='$password'
                  WHERE Email='$email'";

        mysqli_query($connection, $query);

        $_SESSION['login'] = $new_email;
    }

    $updated = true;
}
?>

<!-- Modal confirmation -->
<div class="modal fade" id="successModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Information was updated successfully.
<a href="#" type="button" class="submit-btn" style="margin:auto;width:40%;" data-bs-dismiss="modal">Ok</a>
      </div>
    </div>
  </div>
</div>

<?php if($updated): ?>
<script> <!-- Modal script -->
    document.addEventListener("DOMContentLoaded", function() {
        new bootstrap.Modal(document.getElementById('successModal')).show();
    });
</script>
<?php endif; ?>

</body>

<footer class="bg-dark text-light pt-5"> <!-- Footer -->
    <div class="container px-5">
        <div class="row">
            <div class="col-6 col-lg-4">
                <h3 class="fw-bold">Mythos Games</h3>
                <p class="pt-2">123 Lorem Ipsum.</p>
                <p class="mb-2">0987654321</p>
                <p>1234567890</p>
            </div>
            <div class="col">
                <h4>Menu</h4>
                <ul class="list-unstyled pt-2">
                    <a href="index.php" class="text-light text-decoration-none"><li class="py-1">Home</li></a>
                    <a href="about.php" class="text-light text-decoration-none"><li class="py-1">About</li></a>
                    <a href="contact.php" class="text-light text-decoration-none"><li class="py-1">Contact</li></a>
                </ul>
            </div>
            <div class="col">
                <h4>More</h4>
                <ul class="list-unstyled pt-2">
                    <li class="py-1">FAQs</li>
                </ul>
            </div>
            <div class="col-6 col-lg-3 text-lg-end">
                <h4>Social Media Links</h4>
                <div class="social-media pt-2">
                    <a href="facebook.com" class="text-light fs-2 me-3"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-light fs-2 me-3"><i class="bi bi-pinterest"></i></a>
                    <a href="#" class="text-light fs-2 me-3"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="text-light fs-2"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-sm-flex justify-content-between py-1">
            <p>Mythos Games © 2026 123. All Rights Reserved. </p>
            <p>
                <a href="#" class="text-light text-decoration-none pe-4">Terms of use</a>
                <a href="privacy.php" class="text-light text-decoration-none"> Privacy policy</a>
            </p>
        </div>
    </div>
</footer>