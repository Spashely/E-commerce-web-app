<html>
  <?php
session_start();
?>
<head> <!-- Head -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="../../css/stylesheet.css?v=<?= time() ?>">
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:FILL@0..1" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="description" content="Look out for new deals ...">
        <meta name="author" content="Ivan Kompaniiets">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body> <!-- Body -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
          <nav class="navbar navbar-expand-lg bg-body-tertiary"> <!-- Navbar -->
  <div class="container-fluid">
    <a href="../../primary_pages/index.php"><img src="../../media/logo/mythos_games_logo.svg" alt="logo" class="logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="search">
      <form class="d-flex" role="search" action="search.php" method="GET"> <!-- Search bar -->
        <input class="search-bar" name="keyword" type="search" placeholder="Anything you want" aria-label="Search" required/>
        <button class="search-button" type="submit"><span class="material-symbols-outlined">search</span></button>
      </form>
    </div>
</ul>
    <div class="nav-right"> <!-- Navbar -->
    <a href="../../primary_pages/location.php" class="button-icon"><span class="material-symbols-outlined">location_on</span></a>
    <a href="../../primary_pages/contact.php" class="button-icon"><span class="material-symbols-outlined">call</span></a>
    <!-- Login based on user -->    
     <?php if (isset($_SESSION['admin'])) {
          echo '<div class="nav-item dropdown">
          <button class="button-icon dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="material-symbols-outlined">person</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../../primary_pages/cabinet.php">Personal Cabinet</a></li>
            <li><a class="dropdown-item" href="../../admin/admin.php">Admin Panel</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../../primary_pages/logout.php">Logout</a></li>
          </ul>
          </div>';
          }
    elseif (isset($_SESSION['login'])) {
      echo '<div class="nav-item dropdown">
      <button class="button-icon dropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="material-symbols-outlined">person</span>
          </button>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../cabinet.php">Personal Cabinet</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="../logout.php">Logout</a></li>
          </ul> 
          </div>';
          } 
    else {
      echo '<button class="button-icon" data-bs-toggle="modal" data-bs-target="#modal">
  <span class="material-symbols-outlined">person</span>
</button>';
    }
      ?>
    <a href="#" class="button-icon"><span class="material-symbols-outlined">shopping_cart</span></a>
    </div>
  </div>
</nav> <!-- End of navbar -->

<!-- Modal Start -->
        <div class='modal fade' id='modal' tabindex='-1' aria-hidden='true'> 
          <div class='modal-dialog modal-dialog-centered'>
            <div class='modal-content'>
            
<!-- Login Form -->

              <div id="loginForm">
      <div class="modal-header">
        <h2 class="modal-title">Login</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
<div class='modal-footer'></div>
  <div class="form-content">
    <form method="POST" action="../login/login_form.php">
      <input type="text" class="form-field" name="Email" placeholder="Email" required><br/>
      <input type="password" class="form-field" name="Password" placeholder="Password" required><br/>
      <div class="checkbox-row">
        <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe">Remember me</label>
      </div>
      <button type="submit" onclick="lsRememberMe()" class="button-attention">Login</button>
    </form>
    <h4>Don't have account?</h4>
          <button class="button-optional" href="#" onclick="showRegister(); return false;">Register</button>
</div>
</div>

        <!-- Registration Form -->

      <div id="registerForm" style="display:none;">
      <div class="modal-header">
        <h2 class="modal-title">Register</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
<div class='modal-footer'></div>
  <div class="form-content">
    <form method="POST" action="../register/register_form.php">
            <input type="text" name="First_Name" class="form-field" placeholder="First Name" required>
            <input type="text" name="Last_Name" class="form-field" placeholder="Last Name" required>
            <input type="text" name="Email" class="form-field" placeholder="Email" required>
            <input type="password" name="Password" class="form-field" placeholder="Password" required>
            <input type="password" name="Confirm_password" class="form-field" placeholder="Confirm password" required>
            <div class="checkbox-row"><input type="checkbox" id="terms" required><label for="terms">By registering, I agree to <a href="../privacy.php" target="_blank">Terms and conditions</a></label></div>
            <button type="submit" class="button-attention">Register</button>
    </form>
    <h4>Have account?</h4>
          <button class="button-optional" href="#" onclick="showLogin(); return false;">Log in</button>
</div>
</div>
            </div>
          </div>
        </div>

<!-- Modal End -->
        <div class="card-wrapper"> <!-- Search results -->
            <ul class="card-list swiper-wrapper search-mode">
<?php include("../connection/connection.php");
//post search criteria from form and store in a variable
$search = $_POST['keyword'];
if(isset($_POST['keyword']))
{
    $search = $_POST['keyword'];

    $query = "SELECT * FROM MG_Goods WHERE Name LIKE '%$search%'";
    $row = mysqli_query($connection, $query);
    while($result = mysqli_fetch_assoc($row))
    {
        echo '
        <li class="card-item">
            <a href="booking.php?ID=' . $result["id"] . '" class="card-link">
                <img src="../../media/goods/' . $result["Image"] . '" class="card-image">
                <p class="badge">'.$result["Brand"].'</p>
                <h2 class="card-title">'.$result["Name"].'</h2>
                <div class="price">£'.$result["Price"].'</div>
            </a>
        </li>';
        }
	}
else {
  echo "No results found";
}

?>
</ul>
        </div>