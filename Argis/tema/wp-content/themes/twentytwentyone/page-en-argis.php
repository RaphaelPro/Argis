<?php
  /* Template Name: Argis */
?>
<!doctype <?php language_attributes(); ?>>
<html>

<head>
  <title>Argis</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/css/lightbox.min.css">
  <link rel="stylesheet" href="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/css/style.css">
  <?php wp_head() ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-12 d-flex justify-content-end p-3">
        <a href="http://localhost/Argis/Argis/tema/">
          <img class="idioma mr-4 " src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/br.svg" alt="Português">
        </a>
        <a href="argis_en">
        <img class="idioma" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/american.svg" alt="Inglês">
      </a>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-light border-bottom">

    <div class="col-5 col-sm-6 col-xl-6  p-0">
      <a class="navbar-brand pl-xl-5" href="#">
        <img class="logo" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/logo.svg" width="100" height="100" alt="Argis">
      </a>
    </div>
    <div class="col-7 col-sm-6 col-xl-6 p-0 ">
      <p class="float-right mt-4 pr-xl-5 text-nav">
      Architecture and Integrated Management
      </p>
    </div>

  </nav>
  <div class="container d-flex flex-column-reverse flex-lg-column">
    <div class="row">
      <div class="col-12 d-flex justify-content-center ">
        <div class="text-container">
          <h1 class="text-content mt-5 mt-md-5 mt-xl-5">
            WHO WE ARE
          </h1>
          <p class="text-lg-justify text-center mt-4">
          Since 2003, Argis has been working with architecture and coordination projects for undertakings in the retail, logistics and corporate fields, always committed to understanding and attending to the needs of our clients.

            <br><br>
            We believe that architecture has the essential goal of consolidating, making compatible, synthesizing and documenting all projects in line with the wishes and the needs of each venture.

          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 d-flex justify-content-center align-content-center">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
          <?php 
              $images = get_field('Imagens');
              $count = 0;
              $class = '';
              if($images):
            ?>
            <?php foreach($images as $image): ?>
            <?php $count++; ?>

           <?php $class = ($count == 1) ? 'active' : '';?>
            <div  class="carousel-item <?php echo $class ?>">
              <a href="<?php echo esc_url( $image['url']);?>" data-lightbox="images" data-title="<?php echo esc_html($image['caption']); ?>">
                <img class="d-block w-100" src="<?php echo esc_url( $image['sizes']['medium_large']);?>" alt="<?php echo esc_html($value['caption']); ?>">
              </a>
            </div>
          
            
            <?php endforeach; ?>
      <?php endif; ?>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
    <div class="row row-cols-2 mt-5 mt-sm-3 mb-5 mb-sm-3 mt-md-5  mt-lg-5 mb-lg-5 mt-xl-0 mb-lg-0 mb-xl-0">
      <div class="col">
        <a style="text-decoration:none;" href="https://www.facebook.com/Orbiarq">
        <img class="icon float-right" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/fb.svg" alt="Facebook"> 
      </a>
      </div>
      <div class="col">
        <a style="text-decoration:none;" href="https://www.instagram.com/argis_arquitetura/">
          <img class="icon float-left" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/instagram.svg" alt="Instagram">
        </a>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="grid">
      <div class="grid-sizer"></div>
      <div class="gutter-sizer"></div>
      <?php 
      $images = get_field('Imagens');
      $width = array('grid-item grid-item--width2','grid-item grid-item--width4','grid-item grid-item--width2','grid-item grid-item--width4','grid-item grid-item--width2');
      if($images) : ?>
      <?php foreach($images as $image => $value): ?>
      <div class="<?php echo $width[$image % 5]; ?>">
        <a href="<?php echo esc_url($value['url']);?>" data-lightbox="Galeria" data-title="<?php echo esc_html($value['caption']); ?>">
            <img src="<?php echo esc_url($value['sizes']['medium_large']);?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <div class="text-item">
              <p><?php echo str_replace('-', '<br/>', esc_html($value['caption']));  ?></p>
            </div>
        </a>
      </div>
      <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
  <div class="container mb-5">
    <div class="row">
      <div class="col-12 d-flex justify-content-center">
        <div class="text-container">
          <h1 class="text-content mt-2 mt-md-5 mt-lg-5">
          Our projects

          </h1>
          <p class="text-lg-justify text-center mt-4">
          We have developed an integrated management methodology to fully accommodate the client, in coordination with all complementary projects.

            <br><br>
            Our team is currently formed by more than 15 experienced architects, highly qualified for the development of projects for retail, multipurpose spaces, corporate buildings, shopping centres, among others, which now make over one million square meters.
          </p>
        </div>
      </div>
    </div>
  </div>
  <footer class="container-fluid border-top">
    <div class="row">
      <div class="col-12 d-flex flex-column pl-5 pl-lg-0 mt-4 justify-content-center align-content-center flex-lg-row">
        <p class="img-fluid pr-5"><img class="mr-3" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/location.svg" alt="Localização"> Rua General Jardim
          482 - CJ 122, Vila Buarque - SP, 01223-010</p>
        <p class="img-fluid pr-5"><img class="mr-3" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/contato.svg" alt="Contato">11.3192-0900</p>
        <p class="img-fluid pr-5"><img class="mr-3" src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/img/email.svg" alt="Email">argis@argis.com.br</p>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/js/jquery.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/js/popper.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/js/bootstrap.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/js/isotope.js"></script>
  <script src="<?php bloginfo( 'template_url' );?>/templates/Argis/assets/js/lightbox.min.js"></script>
  <script>
    lightbox.option({
      'positionFromTop': 50,
      'disableScrolling': true,
    });
  </script>
  <script>
    var $grid = $('.grid').isotope({
      // options
      percentPosition: true,
      itemSelector: '.grid-item',
      masonry: {
        columnWidth: '.grid-sizer',
        gutter: 5      
        }
    });
    $grid.imagesLoaded().progress(function () {
      $grid.isotope('layout');
    });
  </script>
</body>

</html>