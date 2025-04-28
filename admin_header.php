<?php
// session_start(); // Make sure to start the session at the beginning of the file

if (isset($message)) {
    foreach ($message as $message) {
        echo '
        <div class="message">
            <span>' . $message . '</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Panel</title>

   <!-- Link to your CSS file -->
   <link rel="stylesheet" href="css/admin_style.css">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="admin_page.php">Home</a>
         <a href="admin_products.php">Products</a>
         <a href="admin_orders.php">Orders</a>
         <a href="admin_users.php">Users</a>
         <a href="admin_contacts.php">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
    <p>Username : <span><?php echo isset($_SESSION['admin_name']) ? $_SESSION['admin_name'] : ''; ?></span></p>
    <p>Email : <span><?php echo isset($_SESSION['admin_email']) ? $_SESSION['admin_email'] : ''; ?></span></p>
    <a href="logout.php" class="delete-btn">Logout</a>
    <div>New <a href="login.php">Login</a> | <a href="register.php">Register</a></div>
</div>


   </div>

</header>
</body>
</html>