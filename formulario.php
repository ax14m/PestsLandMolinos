<!DOCTYPE html>
<html lang="es">
<head>
<title>Pet Shop | PetMart</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



</main>
<meta charset="iso-8859-1">
<link href="css/style.css" rel="stylesheet" type="text/css">
<!--[if IE 6]><link href="css/ie6.css" rel="stylesheet" type="text/css"><![endif]-->
<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet" type="text/css"><![endif]-->
</head>
<body>
<div id="header"> <a href="#" id="logo"><img src="images/logo.gif" width="310" height="114" alt=""></a>
  <ul class="navigation">
  <li class="active"><a href="index.html">Home</a></li>
    <li><a href="petmart.html">PetMart</a></li>
    <li><a href="listarProductos.php">Ver Productos</a></li>
    <li><a href="formulario.php">Registrar Productos</a></li>
    <li><a href="blog.html">Blog</a></li>
    <li><a href="petguide.html">PetGuide</a></li>
    <li><a href="contact.html">Contact us</a></li>
  </ul>
</div>
<div id="body">
  <div id="content">
    <div class="search">
      <input type="text" name="s" value="Find">
      <button>&nbsp;</button>
      <label for="articles">
        <input type="radio" id="articles">
        Articles</label>
      <label for="products">
        <input type="radio" id="products" checked>
        PetMart Products</label>
    </div>
    <main>
      <div class="container">
          <form action="registrarProductos.php" method="POST">
              <h1>REGISTRO DE PRODUCTOS</h1>
              
              <div class="row">
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Nombre" name="nombre">
                  </div>
                  <div class="col">
                      <input type="text" class="form-control" placeholder="Cantidad" name="cantidad">
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                  <label class="font-weight-bold">Fotografia:</label>
                      <input type="text" class="form-control" placeholder="URL fotografia" name="foto">
                  </div>
                 
              </div>
              
              <div class="row mt-3">
                  
                  <div class="col">
                      <label class="font-weight-bold">Descripción:</label>
                      <textarea class="form-control" rows="4" name="descripcion"></textarea>
                  </div>
              </div>
              
              <div class="row mt-3">
                  <div class="col align-self-end">
                      <label class="font-weight-bold">Tipo: </label>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="genero" value="m">
                          <label class="form-check-label">Concentrado</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="genero" value="f">
                          <label class="form-check-label">Medicamentos</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="genero" value="m">
                          <label class="form-check-label">Jugueteria</label>
                      </div>
                      <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="genero" value="f">
                          <label class="form-check-label">Snaks</label>
                      </div>
                      
                      
                  </div>
                  
              </div>
              <button type="submit" class="btn btn-warning btn-red" name="botonEnvio">Registrar</button>
          </form>
      </div>
    </div>
    
              <br>
              <br>
            
  </main>
<div id="footer">
  <div class="section">
    <ul>
      <li> <img src="images/friendly-pets.jpg" width="240" height="186" alt="">
        <h2><a href="#">Friendly Pets</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonummy nib. <a class="more" href="#">Read More</a> </p>
      </li>
      <li> <img src="images/pet-lover2.jpg" width="240" height="186" alt="">
        <h2><a href="#">How dangerous are they</a></h2>
        <p> Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="#">Read More</a> </p>
      </li>
      <li> <img src="images/healthy-dog.jpg" width="240" height="186" alt="">
        <h2><a href="#">Keep them healthy</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonu mmy. <a class="more" href="#">Read More</a> </p>
      </li>
      <li>
        <h2><a href="#">Love...love...love...pets</a></h2>
        <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diameusim. <a class="more" href="#">Read More</a> </p>
        <img src="images/pet-lover.jpg" width="240" height="186" alt=""> </li>
    </ul>
  </div>
  <div id="footnote">
    <div class="section">Copyright &copy; 2012 <a href="#">Company Name</a> All rights reserved | Website Template By <a target="_blank" href="http://www.freewebsitetemplates.com/">freewebsitetemplates.com</a></div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</body>
</html>
