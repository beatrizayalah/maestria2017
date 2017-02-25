<!doctype html>
<html lang="es">
<head>
 <meta charset="utf-8">
 <title>Mi aplicacion web</title>
 <meta name="description" content="Introducción al desarrollo web">
 <meta name="author" content="Jorge I. Meza">
 <!-- <link rel="stylesheet" href="css/styles.css"> -->
</head>
<body>
 @section('barralateral')
 This is the master sidebar.
 @show
 <div class="container">
 @yield('contenido')
 </div>
 <!-- <script src="js/scripts.js"></script> -->
</body>
</html>
