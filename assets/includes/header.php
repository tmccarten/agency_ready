<div class="main-header-container">
  <header class="main-header">
   <h1 class="logo">
     <a href="../index.php"><img src="assets/img/logo.svg" width="250" height="64"></a></h1>
  <nav>
     <ul>
       <li><a href="../index.php" <?php if ($activePage == "Home") {?> class="current" <?php } ?>> Home</a></li>
       <li><a href="../blog.php" <?php if ($activePage == "Blog") {?> class="current" <?php } ?>>Blog</a></li>
       <li><a href="../about.php" <?php if ($activePage == "About") {?> class="current" <?php } ?>>About</a></li>
       <li><a href="../contact.php" <?php if ($activePage == "Contact") {?> class="current" <?php } ?>>Contact</a></li>
     </ul>
  </nav>
 </header>
</div>
