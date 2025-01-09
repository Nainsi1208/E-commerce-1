<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  session_start();
  include('connections.php');

  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    body {
      background: #000;
      color: #000;
    }

    .swiper {
      width: 100%;
      height: 300px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {
      background-size: cover;
      background-position: center;
    }

    .mySwiper2 {
      height: 80%;
      width: 100%;
    }

    .mySwiper {
      height: 20%;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .mySwiper .swiper-slide {
      width: 25%;
      height: 100%;
      opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
      opacity: 1;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="css/tiny-slider.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</head>

<body>
  <nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

    <div class="container">
      <a class="navbar-brand" href="index.php">LUXE<span>.</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li><a class="nav-link" href="shop.php">Shop</a></li>
          <li><a class="nav-link" href="about.php">About us</a></li>
          <li><a class="nav-link" href="services.php">Services</a></li>
          <li><a class="nav-link" href="blog.php">Blog</a></li>
          <li><a class="nav-link" href="contact.php">Contact us</a></li>
        </ul>

        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <li><a class="nav-link d-flex align-items-center gap-2.
						" href="#"><img src="images/user.svg"><?php echo $_SESSION['name']; ?></a></li>
          <li><a class="nav-link" href="cart.php"><img src="images/cart.svg"></a></li>
        </ul>
      </div>
    </div>

  </nav>

  <!-- content -->
  <?php
  if (isset($_GET['product_id']) && isset($_GET['product_name'])) {
    $product_id = $_GET['product_id'];
    $product_name = $_GET['product_name'];
    // SELECT * FROM products_items WHERE id = $product_id;
    $sql = "SELECT * FROM product_items WHERE id = $product_id";
    $result = mysqli_query($prdt, $sql);
    if($row = mysqli_fetch_assoc($result)){  
  ?>
    <section class="py-5">
      <div class="container">
        <div class="row gx-5">
          <aside class="col-lg-6">
            <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/<?php echo $row['product_img']?>" />
                </div>
                <div class="swiper-slide">
                <img src="images/<?php echo $row['pr_img1']?>" />  
                </div>
                <div class="swiper-slide">
                <img src="images/<?php echo $row['pr_img2']?>" />                
                </div>
                <div class="swiper-slide">
                <img src="images/<?php echo $row['pr_img3']?>" />
                </div>
              </div>
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <div thumbsSlider="" class="swiper mySwiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/<?php echo $row['product_img']?>" />
                </div>
                <div class="swiper-slide">
                <img src="images/<?php echo $row['pr_img1']?>" />
                </div>
                <div class="swiper-slide">
                <img src="images/<?php echo $row['pr_img2']?>" />
                </div>
                <div class="swiper-slide">
                <img src="images/<?php echo $row['pr_img3']?>" />
                </div>
              </div>
            </div>
          </aside>
          <main class="col-lg-6">
            <div class="ps-lg-3">
              <h4 class="title text-dark">
                <?php
                echo $product_name
                ?>
              </h4>
              <div class="d-flex flex-row my-3">
                <div class="text-warning mb-1 me-2">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
                  <span class="ms-1">
                    4.5
                  </span>
                </div>
                <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
                <span class="text-success ms-2">In stock</span>
              </div>

              <div class="mb-3">
                <span class="h5">₹ <?php echo $row['product_price']?></span>
              </div>

              <p>
              <?php echo json_decode($row['product_description'])[0]?>
              </p>

              <div class="row">
                <dt class="col-3">Type:</dt>
                <dd class="col-9">Regular</dd>

                <dt class="col-3">Color</dt>
                <dd class="col-9">Brown</dd>

                <dt class="col-3">Material</dt>
                <dd class="col-9">Cotton, Jeans</dd>

                <dt class="col-3">Brand</dt>
                <dd class="col-9">Reebook</dd>
              </div>

              <hr />

              <div class="row mb-4">
                <div class="col-md-4 col-6">
                  <label class="mb-2">Size</label>
                  <select class="form-select border border-secondary" style="height: 35px;">
                    <option>Small</option>
                    <option>Medium</option>
                    <option>Large</option>
                  </select>
                </div>
                <!-- col.// -->
                <div class="col-md-4 col-6 mb-3">
                  <label class="mb-2 d-block">Quantity</label>
                  <div class="input-group mb-3" style="width: 170px;">
                    <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon1" data-mdb-ripple-color="dark">
                      <i class="fas fa-minus"></i>
                    </button>
                    <input type="text" class="form-control text-center border border-secondary" placeholder="14" aria-label="Example text with button addon" aria-describedby="button-addon1" />
                    <button class="btn btn-white border border-secondary px-3" type="button" id="button-addon2" data-mdb-ripple-color="dark">
                      <i class="fas fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
              <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
              <a href="#" class="btn btn-light border border-secondary py-2 icon-hover px-3"> <i class="me-1 fa fa-heart fa-lg"></i> Save </a>
            </div>
          </main>
        </div>
      </div>
    </section>
  <?php
    }
  }
  ?>
  <!-- content -->

  <section class="bg-light border-top py-4">
    <div class="container">
      <div class="row gx-4">
        <div class="col-lg-8 mb-4">
          <div class="border rounded-2 px-3 py-2 bg-white">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Specification</a>
              </li>
              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-2" data-mdb-toggle="pill" href="#ex1-pills-2" role="tab" aria-controls="ex1-pills-2" aria-selected="false">Warranty info</a>
              </li>
              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-3" data-mdb-toggle="pill" href="#ex1-pills-3" role="tab" aria-controls="ex1-pills-3" aria-selected="false">Shipping info</a>
              </li>
              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100" id="ex1-tab-4" data-mdb-toggle="pill" href="#ex1-pills-4" role="tab" aria-controls="ex1-pills-4" aria-selected="false">Seller profile</a>
              </li>
            </ul>
            <!-- Pills navs -->

            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
                <p>
                  With supporting text below as a natural lead-in to additional content. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                  enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                  pariatur.
                </p>
                <div class="row mb-2">
                  <div class="col-12 col-md-6">
                    <ul class="list-unstyled mb-0">
                      <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                      <li><i class="fas fa-check text-success me-2"></i>Lorem ipsum dolor sit amet, consectetur</li>
                      <li><i class="fas fa-check text-success me-2"></i>Duis aute irure dolor in reprehenderit</li>
                      <li><i class="fas fa-check text-success me-2"></i>Optical heart sensor</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-6 mb-0">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-check text-success me-2"></i>Easy fast and ver good</li>
                      <li><i class="fas fa-check text-success me-2"></i>Some great feature name here</li>
                      <li><i class="fas fa-check text-success me-2"></i>Modern style and design</li>
                    </ul>
                  </div>
                </div>
                <table class="table border mt-3 mb-2">
                  <tr>
                    <th class="py-2">Display:</th>
                    <td class="py-2">13.3-inch LED-backlit display with IPS</td>
                  </tr>
                  <tr>
                    <th class="py-2">Processor capacity:</th>
                    <td class="py-2">2.3GHz dual-core Intel Core i5</td>
                  </tr>
                  <tr>
                    <th class="py-2">Camera quality:</th>
                    <td class="py-2">720p FaceTime HD camera</td>
                  </tr>
                  <tr>
                    <th class="py-2">Memory</th>
                    <td class="py-2">8 GB RAM or 16 GB RAM</td>
                  </tr>
                  <tr>
                    <th class="py-2">Graphics</th>
                    <td class="py-2">Intel Iris Plus Graphics 640</td>
                  </tr>
                </table>
              </div>
              <div class="tab-pane fade mb-2" id="ex1-pills-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                Tab content or sample information now <br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              </div>
              <div class="tab-pane fade mb-2" id="ex1-pills-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                Another tab content or sample information now <br />
                Dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </div>
              <div class="tab-pane fade mb-2" id="ex1-pills-4" role="tabpanel" aria-labelledby="ex1-tab-4">
                Some other tab content or sample information now <br />
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                officia deserunt mollit anim id est laborum.
              </div>
            </div>
            <!-- Pills content -->
          </div>
        </div>
        <div class="col-lg-4">
          <div class="px-0 border rounded-2 shadow-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Similar items</h5>
                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/8.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Rucksack Backpack Large <br />
                      Line Mounts
                    </a>
                    <strong class="text-dark"> $38.90</strong>
                  </div>
                </div>

                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/9.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1">
                      Summer New Men's Denim <br />
                      Jeans Shorts
                    </a>
                    <strong class="text-dark"> $29.50</strong>
                  </div>
                </div>

                <div class="d-flex mb-3">
                  <a href="#" class="me-3">
                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/10.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1"> T-shirts with multiple colors, for men and lady </a>
                    <strong class="text-dark"> $120.00</strong>
                  </div>
                </div>

                <div class="d-flex">
                  <a href="#" class="me-3">
                    <img src="https://mdbcdn.b-cdn.net/img/bootstrap-ecommerce/items/11.webp" style="min-width: 96px; height: 96px;" class="img-md img-thumbnail" />
                  </a>
                  <div class="info">
                    <a href="#" class="nav-link mb-1"> Blazer Suit Dress Jacket for Men, Blue color </a>
                    <strong class="text-dark"> $339.90</strong>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- </section> -->
  <!-- Footer -->
  <footer class="footer-section">
    <div class="container relative">

      <div class="sofa-img">
        <img src="images/sofa.png" alt="Image" class="img-fluid">
      </div>

      <div class="row">
        <div class="col-lg-8">
          <div class="subscription-form">
            <h3 class="d-flex align-items-center"><span class="me-1"><img src="images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Newsletter</span></h3>

            <form action="#" class="row g-3">
              <div class="col-auto">
                <input type="text" class="form-control" placeholder="Enter your name">
              </div>
              <div class="col-auto">
                <input type="email" class="form-control" placeholder="Enter your email">
              </div>
              <div class="col-auto">
                <button class="btn btn-primary">
                  <span class="fa fa-paper-plane"></span>
                </button>
              </div>
            </form>

          </div>
        </div>
      </div>

      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
          <p class="mb-4">Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant</p>

          <ul class="list-unstyled custom-social">
            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
          </ul>
        </div>

        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Support</a></li>
                <li><a href="#">Knowledge base</a></li>
                <li><a href="#">Live chat</a></li>
              </ul>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Jobs</a></li>
                <li><a href="#">Our team</a></li>
                <li><a href="#">Leadership</a></li>
                <li><a href="#">Privacy Policy</a></li>
              </ul>
            </div>

            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Nordic Chair</a></li>
                <li><a href="#">Kruzo Aero</a></li>
                <li><a href="#">Ergonomic Chair</a></li>
              </ul>
            </div>
          </div>
        </div>

      </div>

      <div class="border-top copyright">
        <div class="row pt-4">
          <div class="col-lg-6">
            <p class="mb-2 text-center text-lg-start">Copyright &copy;<script>
                document.write(new Date().getFullYear());
              </script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a> <!-- License information: https://untree.co/license/ -->
            </p>
          </div>

          <div class="col-lg-6 text-center text-lg-end">
            <ul class="list-unstyled d-inline-flex ms-auto">
              <li class="me-4"><a href="#">Terms &amp; Conditions</a></li>
              <li><a href="#">Privacy Policy</a></li>
            </ul>
          </div>

        </div>
      </div>

    </div>
  </footer>
  <!-- Footer -->

  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      loop: true,
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
</body>

</html>