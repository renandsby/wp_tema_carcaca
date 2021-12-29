<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orion Pag</title>

  <title><?php bloginfo('name'); echo " | "; if(is_home()){bloginfo('description');}else{ the_title(); } ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />

  <link href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png" rel="shortcut icon">

  <!-- Boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Fonts -->
  <link href="<?php bloginfo('template_url'); ?>/assets/fonts/Helvetica/stylesheet.css" rel="stylesheet">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
    integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <!-- Aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Notyf -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.css">
  <script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>


  <!-- Style -->
  <link href="<?php bloginfo('template_url'); ?>/assets/css/style.css" rel="stylesheet">

  <?php wp_head(); ?>

</head>

<body>

  <div class="header">
    <div class="row align-items-center">
      <div class="col-md-3">
        <div class="logo">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/logo.svg" class="mw-100">
        </div>
      </div>
      <div class="col-md-6">
        <div class="menu_desktop text-center">
          <a href="<?php bloginfo('url'); ?>/index">Home</a>
          <a href="#servicos">Serviços</a>
          <a href="<?php bloginfo('url'); ?>/sobre">Empresa</a>
          <a href="#perguntas">Dúvidas</a>
        </div>
      </div>
      <div class="col-md-3 text-end">
        <a href="#contato">
          <button class="button-padrao">Fale conosco</button>
        </a>
      </div>
    </div>
  </div>
