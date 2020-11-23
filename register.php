<?php
include('includes/_config.php');
$page_title = "Register";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('includes/particals/head.php'); ?>
</head>

<body>
  <div class="wrapper">
    <header>
      <?php include('includes/particals/header.php'); ?>
    </header>

    <main>  
      <div class="containter">
        <form action="/users" method="post">
          <fieldset>
            <legend>Login in</legend>
            <div class="form-wrapper">
              <div class="text-fields">
                <p>
                  <label for="username">Username:<abbr title="required" aria-label="required">*</abbr></label> 
                  <input type="email" id="username" name="Username" required>
                </p>
          
                <p>
                  <label for="password">Password:<abbr title="required" aria-label="required">*</abbr></label> 
                  <input type="password" id="password" name="Password" minlength="10" required>
                </p>
              </div>          
      
              <div class="formfooter">
                <button type="login in">Login in</button>
              </div>
            </div>
          </fieldset>
        </form>
      </div>
    </main>

    <footer>
      <?php include('includes/particals/footer.php'); ?>
    </footer>
  </div>
</body>
</html>