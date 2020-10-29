<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/myStyle.css" >
 
 </head>

<body>

<div class="container1 jumbotron text-center">
    <h1>You can make your own gallery</h1>
      <div class="row">
        <nav class="col-md-12 col-md-offset-3">
        <?php session_start();
              include_once('pages/menu.php');
              include_once('pages/functions.php');
        ?>
        </nav>
      </div>
     
        <div class="row">
       
          <section class="col-md-12 col-md-offset-3">
            <?php            

              if (isset($_GET['page'])) {
                  $page = $_GET['page'];
                  if ($page == 1) {
                      include_once('pages/home.php');
                  }
                  if ($page == 2) {
                      include_once('pages/upload.php');
                  }
                  if ($page == 3) {
                      include_once('pages/gallery.php');
                  }
                  if ($page == 4) {
                      include_once('pages/registration.php');
                  }
                  
                  if ($page == 5) {
                    include_once('pages/login.php');
                  }
                  if ($page == 6) {
                  include_once('pages/logout.php');
                  }
              }
            ?>
          </section>
       
        </div> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>