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

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">    <!-- Carousel -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../media/promotions/ad_1.png" class="d-block w-100" alt="image1">
    </div>
    <div class="carousel-item">
      <img src="../media/promotions/ad_2.png" class="d-block w-100" alt="image2">
    </div>
    <div class="carousel-item">
      <img src="../media/promotions/ad_3.png" class="d-block w-100" alt="image3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

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
            <div class="checkbox-row"><input type="checkbox" id="terms" required><label for="terms">By registering, I agree to <a href="privacy.php" target="_blank">Terms and conditions</a></label></div>
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

<!-- Main page -->
<div class="distance">
<h1>Top</h1> <!-- Top carousel -->
<div class="flex">
<div class="container swiper">
          <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
  <?php include("../primary_pages/connection/connection.php");
$query = "SELECT * FROM MG_Goods ORDER BY RAND() LIMIT 8";
$result = mysqli_query($connection, $query)
or die ("couldn't run query");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
echo'
                <li class="card-item swiper-slide">
                    <a href="booking/booking.php?ID=' . $row["id"] . '" class="card-link">
                        <img src="../media/goods/' . $row["Image"] . '" class="card-image">
                        <p class="badge">';
                        echo $row['Brand'];
                        echo '</p>
                        <h2 class="card-title">';
                        echo $row['Name'];
                        echo '</h2>
                        <div class="price">£';
                        echo $row['Price'];
                        echo '</div>
                    </a>
                </li>';
        }
?>
</ul>
            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>
</div>
<h1>Deals</h1> <!-- Deals carousel -->
<div class="flex">
<div class="container swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
  <?php include("../primary_pages/connection/connection.php");
$query = "SELECT * FROM MG_Goods ORDER BY RAND() LIMIT 8";
$result = mysqli_query($connection, $query)
or die ("couldn't run query");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
echo'
                <li class="card-item swiper-slide">
                    <a href="booking/booking.php?ID=' . $row["id"] . '" class="card-link">
                        <img src="../media/goods/' . $row["Image"] . '" class="card-image">
                        <p class="badge">';
                        echo $row['Brand'];
                        echo '</p>
                        <h2 class="card-title">';
                        echo $row['Name'];
                        echo '</h2>
                        <div class="price">£';
                        echo $row['Price'];
                        echo '</div>
                    </a>
                </li>';
        }
?>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>
</div>
<h1>Popular<h1> <!-- Popular carousel -->
  <div class="flex">
<div class="container swiper">
        <div class="card-wrapper">
            <ul class="card-list swiper-wrapper">
  <?php include("../primary_pages/connection/connection.php");
$query = "SELECT * FROM MG_Goods ORDER BY RAND() LIMIT 8";
$result = mysqli_query($connection, $query)
or die ("couldn't run query");
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
        {
echo'
                <li class="card-item swiper-slide">
                    <a href="booking/booking.php?ID=' . $row["id"] . '" class="card-link">
                        <img src="../media/goods/' . $row["Image"] . '" class="card-image">
                        <p class="badge">';
                        echo $row['Brand'];
                        echo '</p>
                        <h2 class="card-title">';
                        echo $row['Name'];
                        echo '</h2>
                        <div class="price">£';
                        echo $row['Price'];
                        echo '</div>
                    </a>
                </li>';
        }
?>
            </ul>
            <div class="swiper-pagination"></div>
            <div class="swiper-slide-button swiper-button-prev"></div>
            <div class="swiper-slide-button swiper-button-next"></div>
        </div>
    </div>
</div>
</div>

<!-- Login/registration suggestion -->
 <div class="form-content">
<h2 style="text-align:center";>Want personalized recommendations?</h2>

<button class="button-optional" href="#" data-bs-toggle="modal" data-bs-target="#modal">Sign in</button>

<p>Or <a href="#" data-bs-toggle="modal" data-bs-target="#modal" onclick="showRegister(); return false;" style="color:black;">join</a> for free.</p>
</div>

<!-- Back to the top button -->
<button type="button" class="btn btn-floating btn-lg" id="btn-back-to-top">
<span class="material-symbols-outlined">arrow_upward</span>
</button>

<!-- Modal script -->
        <script> 
function showRegister() {
  document.getElementById("loginForm").style.display = "none";
  document.getElementById("registerForm").style.display = "block";
}

function showLogin() {
  document.getElementById("registerForm").style.display = "none";
  document.getElementById("loginForm").style.display = "block";
}
          </script>

            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>  
<!-- Carousel script -->
          <script>
            new Swiper('.card-wrapper', {  
  loop: true,  
  speed: 700,  
  spaceBetween: 30,  

  // If we need pagination  
  pagination: {  
    el: '.swiper-pagination',  
    clickable: true,  
    dynamicBullets: true,  
  },  

  // Navigation arrows  
  navigation: {  
    nextEl: '.swiper-button-next',  
    prevEl: '.swiper-button-prev',  
  },  
  
  breakpoints: { 
    0: {  
      slidesPerView: 1  
    },  
    768: {  
      slidesPerView: 2  
    },  
    1024: {  
      slidesPerView: 3  
    },  
    1400: { slidesPerView: 4 }
  }  
});  
            </script>     
            
            <!-- Back to top button script -->
            <script>
              //Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
              </script>
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
</html>