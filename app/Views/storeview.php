<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop of the gods</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <link rel="stylesheet" href="stylestores.css">


</head>
<body class="grey lighten">
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg  navbar-black  warning-color-dark">

        <!-- Navbar brand -->
        <a class="navbar-brand" href="storeview.php"><img src="" alt=""></a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/record')?>">Users</a>
        </li>
    
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/product')?>">Product</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/programmers')?>">About</a>
        </li>

               
            </ul>
            <!-- Links -->

            <form class="form-inline">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

</header>
<main>
<section>
        <!-- This is Section 1 of the page -->

        <div class="section1">
            <img src="img/logojj.png" class="logo" />
            <div class="navigation">
                <img src="Img/list-ul-regular-24.png" class="toggle" />
                <a class="cgr" >Categories</a>
            </div>
            <div>
                <a class="submenu" >Sports tennis</a>
                <a class="submenu">Bags</a>
                <a class="submenu">Sweatshirts</a>
                <a class="submenu">Shirts</a>
            </div>


             <p class="para1">Specials</p>
             <div class="Special">
                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/sneakerMen.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>21.000<strike> $25.639</strike></h3>
                        <p>Tennis underarmor men's</p>
                    </div>
                </fieldset>



                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/sneaker128.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>21.000 <strike> $25.639</strike></h3>
                        <p>Tennis sport for women </p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/shortM.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$39.789<strike>$49.303</strike></h3>
                        <p>short for men</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/backpack.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$133.899<strike>$189.900</strike></h3>
                        <p>backpack unisex</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/sneaker128.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$133.899<strike>$194.164</strike></h3>
                        <p>tennis for women adidas</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/shirtW.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$14.932<strike>$20.000</strike></h3>
                        <p>Shirt for women underarmor</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/tshirt.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$15.894<strike>$20.000</strike></h3>
                        <p>shirt adidas for men</p>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Sale</legend>
                    <div class="div1">
                        <img src="<?php echo(base_url('public/img/backpack.png'))?>" class="img1" />
                    </div>
                    <div class="div2">
                        <h3>$85.494<strike>$90.888</strike></h3>
                        <p>backpack unisex nike</p>
                    </div>
                </fieldset>
            </div>



        </div>


<!-- This is section 2 of the page -->
<div class="section2">

            <div class="slider">
                <div class="slides">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                     <div class="carousel-item active">
                       <img src="img/1.png" class="d-block w-100" alt="...">
                     </div>
                      <div class="carousel-item">
                         <img src="img/2.png" class="d-block w-100" alt="...">
                          </div>
                      <div class="carousel-item">
                          <img src="img/3.png" class="d-block w-100" alt="...">
                       </div>
                   </div>
               </div>
                    <div class="constant">
                        <h1>On sale</h1>
                        <p>enjoy our promotions and discounts today.</p>

                        <a class="btnshopnow text-white">Shop Now!</a>
                    </div>
                </div>
            </div>


            <div class="content1">
                <div class="innertitle1">
                    <h3>Tennis puma for women</h3>
                    <p class="para1">tennis brand puma for women.</p>
                    <br />
                    <button type="button" class=" para1 btn btn-info">Shop Now</button>
                </div>

                <div class="innertitle2">
                    <h3>Sweatshirt</h3>
                    <p class="para1">incredible unisex sweatshirt from the nike brand.</p>
                    <br />
                    <button type="button" class=" para1 btn btn-info">Shop Now</button>
                </div>

                <div class="inner1">
                    <img src="<?php echo(base_url('public/img/sneaker128.png'))?>" class="img1" />
                </div>
                <div class="inner2">
                    <img src="<?php echo(base_url('public/img/buso.png'))?>" class="img2" />
                </div>
            </div>

            <p class="featuredpara">Latest</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>New</legend>
                    <img src="<?php echo(base_url('public/img/buso.png'))?>" class="img1" />
                    <h3>$184.785<strike>$192.458</strike></h3>
                    <h4>new hoodie brand underarmor</h4>
                    <button type="button" class=" para1 btn btn-info">Shop Now</button>
                </fieldset>

                <fieldset class="col2">
                    <legend>New</legend>
                    <img src="<?php echo(base_url('public/img/tshirt.png'))?>" class="img1" />
                    <h3>$636.214<strike>$642.456</strike></h3>
                    <h4>new men's T-shirts new generation</h4>
                    <button type="button" class=" para1 btn btn-info">Shop Now</button>
                </fieldset>

                <fieldset class="col3" >
                    <legend>New</legend>
                    <img src="<?php echo(base_url('public/img/backpack.png'))?>" class="img1" />
                    <h3>$49.416<strike>$50.316</strike></h3>
                    <h4>new unpermeable totto </h4>
                    <button type="button" class=" para1 btn btn-info">Shop Now</button>
                </fieldset>
            </div>


            <p class="featuredpara">Featured</p>

            <div class="products">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo(base_url('public/img/sneaker128.png'))?>" class="img1" />
                    <h3>$29.990<strike>$31.348</strike></h3>
                    <h4>we recommend the best tennis</h4>
                    <button type="button" class=" para1 btn btn-info">Shop Now</button>

                </fieldset>

                <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo(base_url('public/img/sneakerMen.png'))?>" class="img1" />
                    <h3>$104.976<strike>$104.938</strike></h3>
                    <h4>we recommend the best tennis</h4>
                    <p><button type="button" class=" para1 btn btn-info">Shop Now</button></p>
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo(base_url('public/img/shortW.png'))?>" class="img1" />
                    <h3>$28.717<strike>$35.319</strike></h3>
                    <h4>Short for comfortable women</h4>
                    <p><button type="button" class=" para1 btn btn-info">Shop Now</button></p>
                </fieldset>
            </div>

            <div class="products" style="margin-top:3vh;">
                <fieldset class="col1">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo(base_url('public/img/buso.png'))?>" class="img1" />
                    <h3>$120.495<strike>$122.479</strike></h3>
                    <h4>comfortable sweatshirt cold days</h4>
                    <p><button type="button" class=" para1 btn btn-info">Shop Now</button></p>
                </fieldset>

                <fieldset class="col2">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo(base_url('public/img/shortM.png'))?>" class="img1" />
                    <h3>$449.120<strike>$559.238</strike></h3>
                    <h4>men's sports pant runnin confortant</h4>
                    <p><button type="button" class=" para1 btn btn-info">Shop Now</button></p>
                </fieldset>

                <fieldset class="col3">
                    <legend>Hot Deal</legend>
                    <img src="<?php echo(base_url('public/img/shirtW.png'))?>" class="img1" />
                    <h3>$239.590<strike>$259.881</strike></h3>
                    <h4>T-shirt for comfortable women</h4>
                    <p><button type="button" class=" para1 btn btn-info">Shop Now</button></p>
                </fieldset>
            </div>


        </div>
    </section>

   

    </div>

    
</main>

<footer>
<div class="footer mt-5">
    <div class="footer-content">
      <div class="footer-section about">
        <h1 class="logo-text">Shop  <span>of gods</span></h1>
        <p>
        we are a sports shop, inspired to give the best of sports brands
        </p>
        <!-- <br> -->
        <div class="contact">
          <i class="fa fa-phone"> &nbsp; 123-456-789</i>
          <i class="fa fa-envelope"> &nbsp; info@mywebsite.com</i>
        </div>
        <div class="social">
         <a href="#"><i class="fab fa-facebook-square"></i></a>
          <a href="#"><i class="fab fa-whatsapp"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-section quick-links">
        <h2>QUICK LINKS</h2>
        <ul>
          <a href="#">
            <li>Contact</li>
          </a>
          <a href="#">
            <li>Galleries</li>
          </a>
          <a href="#">
            <li>Write for us</li>
          </a>
          <a href="programmersview.php">
            <li>Terms and conditions</li>
          </a>
        </ul>
      </div>
     
    </div>
    <div class="footer-bottom">
      <p>© Shop of gods| Designed by FiveOfTeam G1</p>
    </div>
  </div>
</footer>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>




</body>

</html>