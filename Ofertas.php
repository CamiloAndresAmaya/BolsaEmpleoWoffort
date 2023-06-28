<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Ofertas</title>

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
      <a href="Ofertas.php"><i class="fas fa-briefcase" style="color: #d89503"></i></i><span>Ofertas</span></a>
      <a href="Personal.php"><i class="fas fa-chalkboard-user" style="color: #d89503"></i><span>Personal</span></a>
      <a href="Contacto.php"><i class="fas fa-headset" style="color: #d89503"></i><span>Contactanos</span></a>
   </nav>

</div>

<section class="courses">

   <h1 class="heading">Ofertas De Trabajo Vigentes</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Bill Gates</h3>
               <span>14-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/thumb-1.png" alt="">
            <span>Ingeniero</span>
         </div>
         <h3 class="title">Se Necesita Programador HTML</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-3.jpg" alt="">
            <div class="info">
               <h3>Jeff Bezos</h3>
               <span>01-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/thumb-2.png" alt="">
            <span>Tecnico</span>
         </div>
         <h3 class="title">Se Necesita Programador <br> CSS</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-4.jpg" alt="">
            <div class="info">
               <h3>James Gosling</h3>
               <span>23-05-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/Barrer.jpg" alt="">
            <span>Informal</span>
         </div>
         <h3 class="title">Se Necesita Barredor De <br> Agua</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-5.jpg" alt="">
            <div class="info">
               <h3>John Pork</h3>
               <span>21-04-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/Cesped.jpg" alt="">
            <span>Informal</span>
         </div>
         <h3 class="title">Se Necesita Podador De <br>Cesped</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-6.jpg" alt="">
            <div class="info">
               <h3>Mark Sork</h3>
               <span>14-02-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/Cajero.webp" alt="">
            <span>Informal</span>
         </div>
         <h3 class="title">Se Necesita Cajero Del <br>McDonals </h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Jhon Wick</h3>
               <span>09-06-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/BarMen.jpg" alt="">
            <span>Bachillerato</span>
         </div>
         <h3 class="title">Se Necesita <br> Barmen</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-8.jpg" alt="">
            <div class="info">
               <h3>Snoop Dog</h3>
               <span>02-01-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/thumb-7.png" alt="">
            <span>Ingeniero</span>
         </div>
         <h3 class="title">Se Necesita Programador Especializado En  PHP</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-9.jpg" alt="">
            <div class="info">
               <h3>Elon Musk</h3>
               <span>27-04-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/thumb-8.png" alt="">
            <span>Ingeniero</span>
         </div>
         <h3 class="title">Se Necesita Administrador De Base De Datos En MySQL</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="assets/images/pic-1.jpg" alt="">
            <div class="info">
               <h3>Clark Kent</h3>
               <span>02-02-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="assets/images/Contador.webp" alt="">
            <span>Profesional</span>
         </div>
         <h3 class="title">Se Necesita Contador <br> Profesional</h3>
         <a href="DetallesOferta.php" class="inline-btn" style="background-color: #d89503">Ver Oferta</a>
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