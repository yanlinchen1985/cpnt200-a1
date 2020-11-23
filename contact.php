<?php
include('includes/_config.php');
$page_title = "Contact";
$current = "Woodbox-Contant";
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
      <section class="container">
        <figure class="card">
          <img src="assets/image/team/lynn.png" alt="lynn">
          <figcaption>
            <h2>Lynn, Designer</h2>
            <p>Our design concept comes from the heart that loves nature</p>
          </figcaption>
        </figure>

        <figure class="card">
          <img src="assets/image/team/ruby.png" alt="ruby">
          <figcaption>
            <h2>Ruby, Finance</h2>
            <p>Ruby is the beacon of our team, and point out the right direction. </p>
          </figcaption>
        </figure>
            
        <figure class="card">
          <img src="assets/image/team/uki.png" alt="uki">
          <figcaption>
            <h2>Uki, Sales</h2>
            <p>uki is the driving force to push the wooden box forward</p>
          </figcaption>
        </figure>
      </section>

      <form action="/users" method="post">
        <label for="email">Your Email</label>
        <input name="Email" id="email" type="email">
        <button type="submit">Submit</button>
      </form>
    </main>

    <footer>
      <?php include('includes/particals/footer.php'); ?>
    </footer>
  </div>
</body>
</html>