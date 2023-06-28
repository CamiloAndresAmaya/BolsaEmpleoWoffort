<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Cargar Hoja De vida</title>

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
      <a href="Acerca.php"><i class="fas fa-question" style="color: #d89503"></i><span>Acerca De</span></a>
      <a href="Ofertas.php"><i class="fas fa-briefcase" style="color: #d89503"></i><span>Ofertas</span></a>
      <a href="Personal.php"><i class="fas fa-chalkboard-user" style="color: #d89503"></i><span>Personal</span></a>
      <a href="Contacto.php"><i class="fas fa-headset" style="color: #d89503"></i><span>Contactanos</span></a>
   </nav>

</div>

<section class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Hoja De Vida Prueba</h3>
      <p>Nombre<span>*</span></p>
      <input type="text" name="name" placeholder="Ingrese Su Nombre" required maxlength="50" class="box">
      <p>Email<span>*</span></p>
      <input type="email" name="email" placeholder="Ingrese Su Email" required maxlength="50" class="box">
      <p>Titulos<span>*</span></p>
      <input type="text" name="pass" placeholder="Ingrese Los Titulos Que Tenga" required maxlength="20" class="box">
      <p>Idiomas<span>*</span></p>
      <input type="text" name="c_pass" placeholder="Ingrese Los Idiomas Que Sepas" required maxlength="20" class="box">
      <p>Cargar Titulo<span>*</span></p>
      <input type="file" accept="image/*" required class="box">
      <input type="submit" value="Cargar Hoja De Vida" name="submit" class="btn" style="background-color: #d89503">
   </form>

</section>















<footer class="footer">

   &copy; copyright @ 2023 by <span style="color: #d89503">Equipo De Trabajo WOFFORT</span> | all rights reserved!

</footer>

<!-- custom js file link  -->
<script src="assets/js/scriptHome.js"></script>

   
</body>
</html>