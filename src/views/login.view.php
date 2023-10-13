<?php include '/var/www/html/src/views/partials/header.php'; ?>
<?php include '/var/www/html/src/views/partials/nav.php'; ?>

<form method="post" action="login.php">
  <label for="username">Username:</label>
  <input type="text" id="username" name="username" required>

  <label for="password">Password:</label>
  <input type="password" id="password" name="password" required>

  <button type="submit">Login</button>
</form>

<?php include '/var/www/html/src/views/partials/footer.php'; ?>