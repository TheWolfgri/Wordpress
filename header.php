<html>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php bloginfo('name');?> - <?php bloginfo('description');?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/site.css"></style>
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<link rel="stylesheet" href="normalize.css">
  </head>
    <body>
      <header style="background-color: brown;">

      <div >
        <div>
          <h1 style="text-align: center"><?php bloginfo ('name') ; ?></h1>
        </div>

      </div>

      <?php
      echo "</header>";?>
