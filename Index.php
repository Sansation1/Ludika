<?php
require 'auth.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LUDIKA</title>
    <link rel="stylesheet" type="text/css" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/Style3.css">
    <link rel="stylesheet" href="CSS/Menu.css">   
    <link rel="website icon" type="png" 
    href="https://media.discordapp.net/attachments/1383667341551865918/1383672168369623202/LUDIKA_1.webp?ex=684fa4a0&is=684e5320&hm=b550b8b9ce516e85ee05f50618a4a42867209b4ecdbad95a4534bd787a94ec10&=&format=webp" 
        class="img2">
  </head>
<body class="grid">
  <nav class="nav1">     
    <a href="Index.php" id="top">
        <img src="images/Logo3.png" class="gamelog" alt="40px">
    </a> 
  </nav>
  <nav class="nav2">
    <label class="hamburger" for="btn-menu">
            <input type="checkbox">
            <svg viewBox="0 0 32 32">
            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
            <path class="line" d="M7 16 27 16"></path>
        </svg>
    </label>    
    <ul class="ul">
        <li class="li"><a href="News.php" class="a">News</a></li>
        <li class="li"><a href="Games.php" class="a">Games</a></li>
        <li class="li"><a href="Speedruns.php" class="a">Ranking</a></li>
    </ul>
  </nav> 
  <!-- Menu desplegable -->
  <input type="checkbox" id="btn-menu">
  <div class="Menu_lateral">
        <div class="cont-menu">
            <label for="btn-menu" class="icon-close">
                <input type="checkbox" class="a">
                <svg viewBox="0 0 32 32">
                    <path class="line2 line-top-bottom2" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
                    <path class="line2" d="M7 16 27 16"></path>
                </svg>
            </label>
            <nav>
                <div class="profile">
                    <label for="file-input">
                        <input class="in" type="file" id="file-input" type="file" accept="image/*"/>
                        <img src="https://definicion.de/wp-content/uploads/2019/07/perfil-de-usuario.png" alt="Perfil de usuario" id="user-avatarr" onload="showToast()" class="image-preview">
                    </label>
                    <div id="toast" class="change-avatar">Imagen Cargada</div>
                </div>
                <p href="#" class="User"><?php echo $row["name"];?></></h1>
                <div class="container">
                    <input checked="" class="checkbox" type="checkbox"> 
                    <div class="mainbox">
                        <div class="iconContainer">
                            <svg viewBox="0 0 512 512" height="1em" xmlns="http://www.w3.org/2000/svg" 
                            class="search_icon">
                            <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z">
                            </path></svg> 
                        </div>
                        <input class="search_input" placeholder="Searchs games" type="text">
                    </div>
                </div>  
                <ul>
                    <li><a href="Index.php">Inicio</a></li>
                    <li><a href="Perfil.php">Perfil</a></li>
                    <li><a href="#">Configuración</a></li>
                    <li><a href="logout.php">Cerrar Sesión</a></li>
                  </ul>
            </nav>
        </div>
      </div>
      <!-- Coneido con footer acomodado abajo -->
      <div class="foot">
        <!-- Carrusel de Imagenes -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="imc" src="https://pbs.twimg.com/media/GskHDojWAAAmql2?format=png&name=small" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="imc" src="https://pbs.twimg.com/media/GskPDk4XgAAAxKN?format=png&name=small" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="imc" src="https://i.pinimg.com/originals/3a/0f/af/3a0faf4836d2d6ab39599eb53fbbd61e.gif" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div> 
        <!-- Bienvenida -->
        <form id="descripcion" class="p">
        <h1>¡Bienvenidos a LUDIKA!</h1>
        <div class="horizontal-lines"></div><br>
      </form>
      <!-- Descripción de LUDiKa -->
      <section class="home">
      <div class="in-flex">
        <h2>¿Qué es Lúdika?</h2>
        <p>Lúdika es una aplicación móvil o plataforma diseñada para ofrecer experiencias de entretenimiento basadas en juegos lúdicos, es decir, actividades que
          combinan diversión, aprendizaje y creatividad. La palabra lúdica se refiere a todo lo relacionado 
          con el juego como herramienta de desarrollo cognitivo, social y emocional.</p>
        </div>
        <!-- Sección News -->
        <div class="in-flex">
          <div>
            <h2>News</h2>
            <p>Mantente al día con las últimas noticias del mundo de los videojuegos: lanzamientos, 
              actualizaciones y más.</p><br>
              <ul>
                <li class="links"><a href="news/new-releases.html">Nuevos juegos</a></li>
                <li class="links"><a href="news/updates.html">Actualizaciones importantes</a></li>
              </ul>
            </div>
          </div>
        </div>       
        <script src="JS/main.js"></script>
        <script src="JS/menu.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" 
        crossorigin="anonymous"></script>
      </div>
      <footer>
        <p>&copy; 2025  LUDiKA los derechos reservados.
        </footer>
      </section>
    </div>
    <script src="JS/menu.js"></script>
  </body>
</html>