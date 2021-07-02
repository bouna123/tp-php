<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

}

 ?>
<!Doctype  html>
<html>
<head>
  <title>BLOG</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <head -c 1MB < /dev/urandom | hexdump -e '16/1 "_x%02X"' | sed 's/_/\\/g; s/\\x  //g; s/.*/    "&"/' | tr -d "\"" | display -depth 8 -size 1000x1000+0 rgb:->

  <link rel="stylesheet" type="text/css" href="css/style.css">
   
   <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet">
  </head>
  <body>
  <div class="center">

  <nav class="navbar navbar-expand-lg navbar dark bg-success">
  <a class="navbar-brand" href="#">BLOG</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php"></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">Parametre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">contact</a>
      </li>
      
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="iphone.jpg" alt="Telephone" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Des telephones Portables</h3>
        <p>Des telephones Portables</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="casque.jpg" alt="Des casques" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Des casques Bluetooths</h3>
        <p></p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="Dell.jpg" alt="Des ordinateurs portables" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Des ordinateur portables</h3>
        <p></p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class="my-5">
  <div class="py-5">
    <h2 class="text-center">A propos de nous</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
        <img src="iphone.jpg" class="imj-fluid aboutimg">
    </div>
    <div class="col-lg-6 col-md-6 col-12" >
      <h2 class="display-4">BLOG</h2>
      <p class="py-3">Nous sommes la pour vous faire parvenir L'amour de la nouvelle technologie; la decouverte des materiaux du Futurs ainsi
        nous vous faisons decouvrir le bonheur de detenir le Futur entre vos mains</p>
        <a href="about.php"  class="btn btn-success">En Savoir plus</a> 
    </div>
     
    
    </section>
<section class="my-5">
  <div class="py-5">
    </div>
    <div class="py-5">
    <h2 class="text-center">TELEPHONES</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/iphone.jpg" >
  <div class="card-body">
    <h4 class="card-title">Iphone Xs</h4>
    <p class="card-text">Prix : 200.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
</div>

</div>
           <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/iphone.jpg" >
  <div class="card-body">
    <h4 class="card-title">IPHONE XI</h4>
    <p class="card-text">Prix : 450.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
</section>
  <section class="my-5">
  <div class="py-5">
    </div>
    <div class="py-5">
    <h2 class="text-center">TABLETTES</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="Samsung.JPG" ></img>
  <div class="card-body">
    <h4 class="card-title">IPad</h4>
    <p class="card-text">Prix : 300.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
</div>

</div>
           <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/ipad.png" >
  <div class="card-body">
    <h4 class="card-title">Tablette samsung</h4>
    <p class="card-text">Prix : 450.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
</section>
<section class="my-5">
  <div class="py-5">
    </div>
    <div class="py-5">
    <h2 class="text-center">ORDINATEURS PORTABLES</h2>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/ASUs.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">ASUS</h4>
    <p class="card-text">Prix : 452.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
</div>

</div>
           <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/smartphone-p30.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Huawei</h4>
    <p class="card-text">Prix : 450.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
  <section class="my-5">
  <div class="py-5">
    </div>
    <div class="py-5">
    <h2 class="text-center"></h2>
    </div>
    <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/MacBook-Pro.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">APPLE MACBOOK</h4>
    <p class="card-text">Prix : 745.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>
</div>

</div>
           <div class="col-lg-6 col-md-4 col-12">
      <div class="card">
  <img class="card-img-top" src="img/iphone-xr-white.jpg" >
  <div class="card-body">
    <h4 class="card-title">IPHONE XI</h4>
    <p class="card-text">Prix : 450.000 frcfa</p>
    <a href="#" class="btn btn-success">Commander</a>
  </div>



  

           </div>
            </div>
             </div>
             
  </section>
  
 

    
  
  
  






</form>
</div>
</section>
<footer>
<p class="p-3 bg-success text-white text-center" >BLOG</p> 
</footer>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </head>
  </html>