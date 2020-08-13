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
    <link rel="stylesheet" href="Styles.css">
</head>
<body class=" unique-color-dark">
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
             <a class="nav-link" href="<?= base_url('public/store')?>">Home
                <span class="sr-only">(current)</span>
             </a>
           </li>
         <li class="nav-item active">
            <a class="nav-link" href="<?= base_url('public/product')?>">Product </a>
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
<section class="contact-box">
       <div class="row no-gutters plus">
           <div class="col-xl-5 col-lg-12 register-bg">
            <div class="position-absolute testiomonial p-4">
                <h3 class="font-weight-bold text-light">Shop of the god.</h3>
                <p class="lead text-light">New sports virtual store.</p>
            </div>
           </div>
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">User registration</h1>
                    <div class="form-group">
                        <button class="btn btn-outline-dark d-inline-block text-light mr-2 mb-3 width-100"><a href="<?= base_url('public/store')?>">Invitado</a></button>
                        <button class="btn btn-outline-dark d-inline-block text-light mb-3 width-100"><a href="<?= base_url('public/product')?>">Registrar mi producto</a></button>
                        
                    </div>
                    <p class="text-muted mb-5">Enter the following information to register.</p>
                    

                    <form action="<?php echo(base_url('public/record/crear'))?> " method="POST" >
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Your name" id="name" name="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Surname. <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Your last name"id="surname" name="surname" >
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" placeholder="Enter your email"id="email" name="email" >
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Phone <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your phone" id="phone" name="phone">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Address <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter your address" id="address" name="address">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Password <span class="text-danger">*</span></label>
                            <input type="password" class="form-control" placeholder="Enter a password" id="password" name="password">
                        </div>
                        <div class="form-group mb-5">
                        <?php if(session("mensaje")):?>
                        <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                            <?= session('mensaje') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>
                        </div>
                        <a href="<?= base_url('public/store')?>" class="btn btn-dark width-100" id="enviar" name="enviar">Rgistar</a>
                    </form>
                </div>
           </div>
       </div>
   </section>
</main>
    
   
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