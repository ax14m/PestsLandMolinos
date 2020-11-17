<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
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
<?php  
    
    include("BaseDatos.php");

    //1. Crear un objeto de la clase BaseDatos
    $transaccion=new BaseDatos();

    //2. Definir la consulta para buscar datos
    $consultaSQL="SELECT * FROM productos WHERE 1";

    //3. Ejecutar el metodo consultarDatos() 
    // y almacenar la respuesta en una variable
    $productos=$transaccion->consultarDatos($consultaSQL);


?>

<main>

<div class="container">
    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach($productos as $producto):?>

            <div class="col mb-4">
                <div class="card">
                    <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="FOTO">
                    <div class="card-body">
                        <h3 class="card-title"><?php echo($producto["nombre"]) ?></h3>
                        <h3 class="card-title"><?php echo($producto["cantidad"]) ?></h3>
                        <p class="card-text"><?php echo($producto["descripcion"]) ?></p>
                        <a href="eliminarproductos.php?id=<?php echo($producto['idProducto'])?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">
                           Editar
                        </button>

                    </div>
                </div>
                
                <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edición de producto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form action="editarProducto.php?id=<?php echo($producto["idProducto"])?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion:</label>
                                            <textarea class="form-control" rows="3" name="descEditar"><?php echo($producto["descripcion"])?></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>cantidad:</label>
                                            <textarea class="form-control" rows="3" name="cantEditar"><?php echo($producto["cantidad"])?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-warning" name="botonEditar">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <?php endforeach?>


    </div>

</div>


</main>

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









</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
</html>