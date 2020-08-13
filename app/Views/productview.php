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
            <a class="nav-link" href="<?= base_url('public/record')?>">Users</a>
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
       <div class="row">
           <div class="col-xl-7 col-lg-12 d-flex">
                <div class="container align-self-center p-6">
                    <h1 class="font-weight-bold mb-3">Product registration</h1>

                    <form action="<?php echo(base_url('public/product/crearP'))?>" method="POST">
                        <div class="form-row mb-2">
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Name Product <span class="text-danger">*</span></label>
                                <input type="text" class="form-control warning-color-dark" placeholder="name product" id="nameProduct" name="nameProduct">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Supplier <span class="text-danger">*</span></label>
                                <input type="text" class="form-control warning-color-dark" placeholder="Enter Supplier" id="supplier" name="supplier">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                                <label class="font-weight-bold">Color <span class="text-danger">*</span></label>
                                <input type="text" class="form-control warning-color-dark" placeholder="Enter Color" id="color" name="color">
                            </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Size <span class="text-danger">*</span></label>
                            <input type="text" class="form-control warning-color-dark" placeholder="Enter a Size" id="size" name="size">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Gender <span class="text-danger">*</span></label>
                            <input type="text" class="form-control warning-color-dark" placeholder="Enter a Gender" id="gender" name="gender">
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control warning-color-dark" placeholder="Enter a Price" id="price" name="price">
                        </div>
                        <div class="form-group mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label text-muted">By selecting this box you agree to our privacy notice and terms and conditions</label>
                            </div>
                            <?php if(session("mensaje")):?>
                        <div class="alert alert-info alert-dismissible fade show mt-5" role="alert">
                            <?= session('mensaje') ?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    <?php endif ?>
                        </div>
                        <button class="btn warning-color-dark width-100">Register</button>
                    </form>
                </div>
           </div>
           <img src="img/zapatillas.jpg" class="rounded float-right" alt="...">
       </div>
    <div class="container">
    <div class="row">

<div class="col-12 mt-3">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>productoID</th>
                <th>nameProduct</th>
                <th>supplier</th>
                <th>size</th>
                <th>color</th>
                <th>gender</th>
                <th>price</th>
            </tr>
        </thead>

        <tbody>
            
            <?php foreach($productos as $clave => $valor): ?>

                <tr>
                    <td><?php echo($valor->productoID)?></td>
                    <td><?php echo($valor->nameProduct)?></td>
                    <td><?php echo($valor->supplier)?></td>
                    <td><?php echo($valor->size)?></td>
                    <td><?php echo($valor->color)?></td>
                    <td><?php echo($valor->gender)?></td>
                    <td><?php echo($valor->price)?></td>

                    <td><a href="<?php echo(base_url('public/product/eliminar'.$valor->productoID))?>" class="btn btn-danger">Delete</a></td>
                    <td><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample<?php echo($valor->productoID)?>" role="button" aria-expanded="false" aria-controls="collapseExample">
                             Update</a></td>
                             <div class="collapse" id="collapseExample<?php echo($valor->productoID)?>">
                         <div class="card card-body bg-transparent ">
                         
                             <form action="<?php echo(base_url('public/product/modificar/'.$valor->productoID))?>" class="mt-2" method="POST">
                             <div class="form-group col-md-6">
                                <label class="font-weight-bold">Name Product <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="name product" id="nameProduct2" name="nameProduct2" value="<?php echo($valor->nameProduct) ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Supplier <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Supplier" id="supplier2" name="supplier2" value="<?php echo($valor->supplier) ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">color <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="name color" id="color2" name="color2" value="<?php echo($valor->color) ?>">
                            </div>
                            <div class="form-group col-md-6">
                                <label class="font-weight-bold">Size <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter Size" id="size2" name="size2" value="<?php echo($valor->size) ?>">
                             </div>
                             <div class="form-group col-md-6">
                                <label class="font-weight-bold">Gender <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter gender" id="gender2" name="gender2" value="<?php echo($valor->gender) ?>">
                             </div>
                             <div class="form-group col-md-6">
                                <label class="font-weight-bold">Price <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Enter a price" id="price2" name="price2" value="<?php echo($valor->price) ?>">
                             </div>
                             <button type="button" class="btn btn-primary btn-sm col-md-6" id="enviar" name="enviar">Send</button>
                            
                             </form>
   
                         </div>
                        </div>
                </tr>
             <?php endforeach ?>
            
        </tbody>
    
    </table>
  </div>
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