<!DOCTYPE html>
<html lang="pl">
<html>
<head>
 <meta charset="utf-8"> 
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
 <link rel="icon" type="image/x-icon" href="http://naostrzuksiazki.pl/wp-content/uploads/2019/03/clevera.ico" />
 
<!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136674175-1"></script>
  <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136674175-1');
  </script>
 
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <link href="<?php echo get_bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

  <?php wp_head();?>

</head>
<body>

  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2"></script>

  <div class="container-fluid d-lg-none justify-content-center">
    <div class="row d-lg-none">
      <nav class="navbar navbar-dark bg-dark col-md-12 bg-light">
        <a class="navbar-brand" href="#"><?php echo get_bloginfo( 'name' ); ?></a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
          </button>

    <div class="collapse navbar-collapse" id="navbar">
      <div class="nav-item"><br>
        <?php get_search_form(); ?>
      </div>
      <div class="nav-item"><br>
        <p>
          <a href="mailto:clevera@gazeta.pl">clevera@gazeta.pl</a>
        </p>
      </div>
        </nav>
    </div>
    </div>

<div class="item-1 col-xl-12 d-none d-lg-block">
  
  <div class='item-1-span'>
    <h1>
      <p class="header-text">
		<a href="/"><?php echo get_bloginfo( 'name' ); ?></a></p>
      <small><?php echo get_bloginfo( 'description' ); ?></small>
    </h1>
  </div>
</div>
</div>