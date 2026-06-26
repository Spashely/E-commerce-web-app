<html>
  <?php
session_start();
if (!isset($_SESSION["admin"])) {
    header("Location: ../primary_pages/index.php");
    exit;
}
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
    <a href="#" class="button-icon"><span class="material-symbols-outlined">shopping_cart</span><span class="d-inline d-lg-none">Account</span></a>
    </div>
  </div>
</nav> <!-- End of navbar -->

<!-- Products panel -->
<?php include("../primary_pages/connection/connection.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

$added = false;
if(isset($_POST['update'])) /* Update function */
{
    $UpdateQuery = "UPDATE MG_Goods SET Name='$_POST[Name]', Availability='$_POST[Availability]', Description='$_POST[Description]', Price='$_POST[Price]', Category='$_POST[Category]', Brand='$_POST[Brand]' WHERE id='$_POST[hidden]'";
    mysqli_query($connection, $UpdateQuery);
}

if(isset($_POST['delete'])) /* Delete function */
{
    $DeleteQuery = "DELETE FROM MG_Goods WHERE ID='$_POST[hidden]'";
    mysqli_query($connection, $DeleteQuery);
}

if(isset($_POST['add'])) /* Add function */
{
    $name = $_POST['AddName'];
    $price = $_POST['AddPrice'];
    $desc = $_POST['AddDescription'];
    $availability = $_POST['AddAvailability'];
    $category = $_POST['AddCategory'];
    $brand = $_POST['AddBrand'];

    $extensions = ["jpeg","jpg","png","avif", "jfif", "webp"];
    $uploaded_files = [];

    /*File upload */
    foreach($_FILES["files"]["tmp_name"] as $key => $tmp_name)
    {
        $file_name = $_FILES["files"]["name"][$key];
        $file_tmp = $_FILES["files"]["tmp_name"][$key];
        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

if(in_array($ext, $extensions))
{
    if(move_uploaded_file($file_tmp, "../media/goods/" . $file_name))
    {
        $uploaded_files[] = $file_name;
    }
}
    }


    if(count($uploaded_files) == 0)
    {
        echo "No images uploaded";
        exit;
    }
    /* Main image upload */
    $main_image = $uploaded_files[0];
    $AddQuery = "
    INSERT INTO MG_Goods (Name, Price, Description, Availability, Category, Brand, Image)
    VALUES ('$name', '$price', '$desc', '$availability', '$category', '$brand', '$main_image')
    ";

    mysqli_query($connection, $AddQuery) or die(mysqli_error($connection));

    
    $product_id = mysqli_insert_id($connection);

    /* Additional images upload */
    $img1 = $uploaded_files[0] ?? '';
    $img2 = $uploaded_files[1] ?? '';
    $img3 = $uploaded_files[2] ?? '';
    $img4 = $uploaded_files[3] ?? '';

    $AddImages = "
    INSERT INTO MG_Goods_Images (id, Image_1, Image_2, Image_3, Image_4)
    VALUES ('$product_id', '$img1', '$img2', '$img3', '$img4')
    ";

    mysqli_query($connection, $AddImages);
}

if(isset($_POST['add_admin'])) /* Add admin function */
{
    $first = $_POST['AddFirstName'];
    $last = $_POST['AddLastName'];
    $email = $_POST['AddEmail'];
    $password = $_POST['AddPassword'];

    $AddQuery = "
    INSERT INTO Admin (First_Name, Last_Name, Email, Password)
    VALUES ('$first', '$last', '$email', '$password')
    ";

    mysqli_query($connection, $AddQuery) or die(mysqli_error($connection));
    $added = true;
}


$result = mysqli_query($connection, "SELECT * FROM MG_Goods");

/* Dynamic table from DB */

echo "
<div class='flex'>
<div class='distance'>
<h1>Goods</h1>
</br>
<table border=1 class='admin-table'> 
<tr>
<th>Name</th>
<th>Price</th>
<th>Description</th>
<th>Availability</th>
<th>Category</th>
<th>Brand</th>
</tr>";

while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr>";
    echo "<form action='admin.php' method='post'>";
    echo "<td><input type='text' name='Name' value='" . $row['Name'] . "'></td>";
    echo "<td><input type='text' name='Price' value ='" . $row['Price'] . "'></td>";
    echo "<td><textarea name='Description' class='admin-table-textarea' rows='3'>" . htmlspecialchars($row['Description']) . "</textarea></td>";
    echo "<td><input type='text' name='Availability' value ='" . $row['Availability'] . "'></td>";
    echo "<td><input type='text' name='Category' value ='" . $row['Category'] . "'></td>";
    echo "<td><input type='text' name='Brand' value ='" . $row['Brand'] . "'></td>";
    echo "<input type='hidden' name='hidden' value ='" . $row['id'] . "'>";
    echo "<td><input type='submit' name='update' value='update' class='button-attention'></td>"; /* Update execution */
    echo "<td>";
echo "<button type='button' class='button-optional' data-bs-toggle='modal' data-bs-target='#deleteModal-".$row['id']."'>Delete</button>"; /* Delete execution */    
echo "</td>";
echo "</form>";
    echo "</tr>";

        /* Pop up message confirmation */
    echo "
    <div class='modal fade' id='deleteModal-".$row['id']."' tabindex='-1' aria-labelledby='deleteModalLabel-".$row['Name']."' aria-hidden='true'>
      <div class='modal-dialog'>
        <div class='modal-content'>
          <div class='modal-header'>
            <h5 class='modal-title' id='deleteModalLabel-".$row['id']."'>Confirm</h5>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
          </div>
          <div class='modal-body'>
            Are you sure you want to delete <strong>".$row['Name']."</strong>?
          </div>
          <div class='modal-footer'>
            <button type='button' class='button-attention' data-bs-dismiss='modal'>Cancel</button>
            <form action='admin.php' method='post'>
              <input type='hidden' name='hidden' value='".$row['id']."'>
              <button type='submit' name='delete' class='button-optional'>Delete</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    ";
}

echo "<tr>";
echo "<form action='admin.php' method='post' enctype='multipart/form-data'>"; /*Add execution */
echo "<td><input type='text' name='AddName' required></td>";
echo "<td><input type='text' name='AddPrice' required></td>";
echo "<td><textarea name='AddDescription' required rows='3' class='admin-table-textarea'></textarea></td>";
echo "<td><input type='text' name='AddAvailability' required></td>";
echo "<td><input type='text' name='AddCategory' required></td>";
echo "<td><input type='text' name='AddBrand' required></td>";

/* File upload */
echo "<td>
  <div style='display:flex; flex-direction:column; align-items:flex-start;'>
    <input type='file' name='files[]' style='width:150px;' onchange='document.getElementById(\"file-name\").textContent=this.files[0]?.name || \"No file chosen\"' multiple/>
    <div id='file-name' style='margin-top:5px; font-size:14px; color:#333;'></div>
  </div>
</td>";
echo "<td><input type='submit' name='add' value='add' class='button-attention'></td>";
echo "</form>";
echo "</tr>";

echo "</table>";

echo "<h1>Add admin</h1>
</br>";
echo "<div class='contact-form-wrapper'>";
echo "<form class='contact-form' action='admin.php' method='post'>";
echo "<label for='First_Name'>First Name</label><div class='form-group'><input type='text' name='AddFirstName'></div>";
echo "<label for='Last_Name'>Last Name</label><div class='form-group'><input type='text' name='AddLastName'></div>";
echo "<label for='Email'>Email</label><div class='form-group'><input type='text' name='AddEmail' required></div>";
echo "<label for='Password'>Password</label><div class='form-group'><input type='text' name='AddPassword' required></div>";
echo "<input type='submit' name='add_admin' value='add' class='submit-btn'>"; /* Update execution */
echo "</form>";
echo "</div>";
echo "</div>";
echo "</div>";

mysqli_close($connection);

?>

<div class="modal fade" id="successModal" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Success</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        Admin was added successfully.
<a href="#" type="button" class="submit-btn" style="margin:auto;width:40%;" data-bs-dismiss="modal">Ok</a>
      </div>
    </div>
  </div>
</div>

<?php if($added): ?>
<script> <!-- Modal script -->
    document.addEventListener("DOMContentLoaded", function() {
        new bootstrap.Modal(document.getElementById('successModal')).show();
    });
</script>
<?php endif; ?>



</body>