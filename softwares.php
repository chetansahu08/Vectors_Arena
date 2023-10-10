<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vector's Arena</title>
  <link rel="icon" href="images/revv-10-removebg.png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Cinzel:wght@400;500;600;700;800;900&family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Quicksand:wght@300;400;500;600;700&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">

  <script src="https://kit.fontawesome.com/9282b81956.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- HEADER -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark h-75 sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand ms-5" href="#">
        <img src="images/revv-10-removebg.png" width="23" height="23">
        Vector's Arena
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-4 ">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="features.html">Features</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              Products
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="drone.php">Drones</a></li>
              <li><a class="dropdown-item" href="camera.php">Cameras</a></li>
              <li><a class="dropdown-item" href="lens&acc.php">Camera Lenses & Accesories</a></li>
              <li><a class="dropdown-item active" href="softwares.php">Software & Editing</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
              </li> -->
          <li class="nav-item">
            <a class="nav-link" href="support.html">Support</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact-us.html">Contact Us</a>
          </li>
        </ul>
        <!-- <form class="d-flex ms-auto">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-dark" type="button">Search</button>
            </form> -->
        <div class="dropdown ms-auto">
          <button class="btn btn-outline-dark bg-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
            aria-expanded="false" style="margin:auto;">
            Account
          </button>
          <?php
              $count=0;
                if(isset($_SESSION['cart']))
                {
                  $count=count($_SESSION['cart']);
                }
              ?>
          <a href="mycart.php" class="btn btn-outline-success">My Cart (
            <?php echo $count; ?>)
          </a>
          <ul class="dropdown-menu ">
            <li><a class="dropdown-item" href="a.php">login</a></li>
            <li><a class="dropdown-item" href="b.php">register</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="drones">
    <div class="container">
      <div class="row">
        <div class="col-3">
          <form action="manage_cart3.php" method="post">

            <div class="card" style="width: 18rem;">
              <img src="images/softwares/filmora.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Wondershare Filmora</h5>
                <p class="card-text">Filmora is a video making application having an intuitive user interface and tons of
                  video effects. This tool has advanced editing modes and much greater control, including keyframing, over
                  your video.</p>
                <h5 class="pricing">100000</h5>
                <a href="" class="btn btn-warning">Buy now</a>
                      <button name="add_to_cart" class="btn btn-warning mt-2" type="submit" href="" >Add to Cart</button>
                      <input type="hidden" name="Item_name" value="Wondershare Filmora"> <!--edit --> 
                      <input type="hidden" name="Price" value="100000">       <!--edit -->
  
              </div>
            </div>
          </form>
        </div>

        <div class="col-3">
          <form action="manage_cart3.php" method="post">

            <div class="card" style="width: 18rem;">
              <img src="images/softwares/premiere-pro.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Adobe Premiere Pro</h5>
                <p class="card-text">Adobe Premiere is a video editing software which helps you to make changes in your
                  video with ease. It allows you to export video in formats like AVI (Audio-Video Interleaved), MXF
                  Material Exchange Format, and more.</p>
                <h5 class="pricing">80000</h5>
                <a href="" class="btn btn-warning">Buy now</a>
                      <button name="add_to_cart" class="btn btn-warning mt-2" type="submit" href="" >Add to Cart</button>
                      <input type="hidden" name="Item_name" value="Adobe Premiere Pro"> <!--edit --> 
                      <input type="hidden" name="Price" value="80000">       <!--edit -->
              </div>
            </div>
          </form>
        </div>

        <div class="col-3">
          <form action="manage_cart3.php" method="post">

            <div class="card" style="width: 18rem;">
              <img src="images/softwares/final-cut-pro.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Final Cut Pro</h5>
                <p class="card-text">Final Cut Pro x helps you to accelerate graphics tasks like rendering, real-time
                  effects dramatically and exporting. It is one of the best video editing software for MAC that allows you
                  to use gift cards for Apples digital content and subscriptions.</p>
                <h5 class="pricing">90000</h5>
                <a href="" class="btn btn-warning">Buy now</a>
                      <button name="add_to_cart" class="btn btn-warning mt-2" type="submit" href="" >Add to Cart</button>
                      <input type="hidden" name="Item_name" value="Final Cut Pro"> <!--edit --> 
                      <input type="hidden" name="Price" value="90000">       <!--edit -->
              </div>
            </div>
          </form>
        </div>

        <div class="col-3">
          <form action="manage_cart3.php" method="post">

            <div class="card" style="width: 18rem;">
              <img src="images/softwares/DaVinci-Resolve-Studio-Cover.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Davinci Resolve Studio</h5>
                <p class="card-text">DaVinci Resolve is an easy video editing software for macOS, Linux, and Windows. You
                  can use this tool to apply transformations, blend modes, color grades, and more in the video.</p>
                <h5 class="pricing">70000</h5>
                <a href="" class="btn btn-warning">Buy now</a>
                      <button name="add_to_cart" class="btn btn-warning mt-2" type="submit" href="" >Add to Cart</button>
                      <input type="hidden" name="Item_name" value="Davinci Resolve Studio"> <!--edit --> 
                      <input type="hidden" name="Price" value="70000">       <!--edit -->
              </div>
            </div>
          </form>
        </div>
      </div>

      
    </div>
  </div>



  <footer class="footer">

    <span class="footer-icons"><i class="fa-brands fa-facebook fa-2xl fa-shake"></i></span>
    <span class="footer-icons"><i class="fa-brands fa-twitter fa-2xl fa-shake"></i></span>
    <span class="footer-icons"><i class="fa-brands fa-youtube fa-2xl fa-shake"></i></span>
    <span class="footer-icons"><i class="fa-brands fa-instagram fa-2xl fa-shake"></i></span>
    <span class="footer-icons"><i class="fa-brands fa-linkedin-in fa-2xl fa-shake"></i></span>
    <p class="social">Social</p>
  </footer>
  <!-- <div class="footer-bottom">
          <div class="col-1">
            <h5 class="footer-h5">Vector's Arena</h5>
            <p><a href="#" class="footer-links">News</a></p>
            <p><a href="#" class="footer-links">Partners</a></p>
            <p><a href="#" class="footer-links">Contact Us</a></p>
            <p><a href="#" class="footer-links">Terms of Use</a></p>
            <p><a href="#" class="footer-links">About Us</a></p>
          </div>
          <div class="col-2">
          <div class="col-3"></div>
        </div> -->
  <div class="footer-bottom">
    <div class="row">
      <div class="col col-1">
        <h5 class="footer-h5">Vector's Arena</h5>
        <p><a href="#" class="footer-links">News</a></p>
        <p><a href="#" class="footer-links">Partners</a></p>
        <p><a href="#" class="footer-links">Contact Us</a></p>
        <p><a href="#" class="footer-links">Terms of Use</a></p>
        <p><a href="#" class="footer-links">About Us</a></p>
      </div>
      <div class="col col-1">
        <h5 class="footer-h6">Social</h5>
        <p><a href="" class="footer-links">Facebook</a></p>
        <p><a href="" class="footer-links">Instagram</a></p>
        <p><a href="" class="footer-links">Twitter</a></p>
      </div>
      <div class="col col-1">
        <h5 class="footer-h6">Service</h5>
        <p><a href="" class="footer-links">Compare</a></p>
        <p><a href="" class="footer-links">Feedback</a></p>
        <p><a href="" class="footer-links">Bug Report</a></p>
      </div>
      <div class="col col-1">
        <h5 class="footer-h6">Activity</h5>
        <p><a href="" class="footer-links">Influencers</a></p>
        <p><a href="" class="footer-links">Affiliate</a></p>
        <p><a href="" class="footer-links">Co-branding</a></p>
        <p><a href="" class="footer-links">Honor</a></p>
        <p><a href="" class="footer-links">Giveaway</a></p>
      </div>
      <div class="col col-2">
        <h5 class="footer-h6">Newsletter Subscription</h5>
        <form action="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Your Email" aria-label="Recipient's username"
              aria-describedby="button-addon2">
            <button class="btn btn-dark" type="button" id="button-addon2">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-5 credits">
      <p>Copyright<i class="fa fa-copyright" aria-hidden="true"></i> 2022 VECTOR'S ARENA.All rights reserved.</p>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
    crossorigin="anonymous"></script>

</body>

</html>