<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contactanos</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="assets/css/styleHome.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">WOFFORT</a>

      <form action="search.html" method="post" class="search-form">
         <input type="text" name="search_box" required placeholder="search" maxlength="100">
         <button type="submit" class="fas fa-search"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="toggle-btn" class="fas fa-sun"></div>
      </div>

      <div class="profile">
         <img src="assets/images/pic-1.jpg" class="image" alt="">
         <h3 class="name">Andrés Castañeda</h3>
         <p class="role">Postulante</p>
         <a href="profile.php" class="btn">Ver Perfil</a>
         <div class="flex-btn">
            <a href="php/cerrar_session.php" class="option-btn">Cerrar Sesion</a>
         </div>
      </div>

   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
      <img src="assets/images/pic-1.jpg" class="image" alt="">
      <h3 class="name">Andrés Castañeda</h3>
      <p class="role">Postulante</p>
      <a href="profile.php" class="btn" style="background-color: #d89503">Ver Perfil</a>
   </div>

   <nav class="navbar">
      <a href="Home.php"><i class="fas fa-home" style="color: #d89503"></i><span>Inicio</span></a>
      <a href="Acerca.php"><i class="fas fa-question" style="color: #d89503"></i><span>Acerca de</span></a>
      <a href="Ofertas.php"><i class="fas fa-briefcase" style="color: #d89503"></i><span>Ofertas</span></a>
      <a href="Personal.php"><i class="fas fa-chalkboard-user" style="color: #d89503"></i><span>Personal</span></a>
      <a href="Contacto.php"><i class="fas fa-headset" style="color: #d89503"></i><span>Contactanos</span></a>
   </nav>

</div>

<section class="contact">

   <div class="row">

      <form action="" method="post">
         <h3>Ponerse en contacto</h3>
         <input type="text" placeholder="Ingrese Su Nombre" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="Ingrese Su Email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="Ingrese Su Numero" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="Ingrese Su Mensaje" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="Enviar Mensaje" class="inline-btn" name="submit" style="background-color: #d89503">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone" style="color: #d89503"></i>
         <h3>Numero De Telefono</h3>
         <a href="tel:1234567890">123-456-7890</a>
         <a href="tel:1112223333">111-222-3333</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope" style="color: #d89503"></i>
         <h3>Direccion Correo Electronico</h3>
         <a href="mailto:shaikhanas@gmail.com">WOFFORT@gmail.come</a>
         <a href="mailto:anasbhai@gmail.com">WOFFORT@gmail.come</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt" style="color: #d89503"></i>
         <h3>Direccion Oficina</h3>
         <a href="#">Dubai, las canarias, avenida americas con avenida boyaca</a>
      </div>

   </div>

</section>














<footer class="footer">

   &copy; copyright @ 2023 by <span style="color: #d89503">Equipo De Trabajo WOFFORT</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="assets/js/scriptHome.js"></script>

   
</body>
</html>