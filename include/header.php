<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6 demo-2 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7 demo-2 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8 demo-2 no-js" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="pt-br">
<!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>ISIS AUTIRIA</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen">
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/fonts.css">
  <style type="text/css">
  body, html {
    height: 100%;
    color: #585858;
  }
  aside .categorias .cat-item ul li a{
    color: #585858;
  }
  #slider{
    display: block;
    width: 100%;
    height: 100%;
    margin: auto;
    text-align: center;
    padding: 0!important;
    overflow: hidden;
  }
  #slider img{
    /* Full height */
    height: 100%; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .widget_archive{
    width: 100%;
    height: 106px;
    background: #3d9e90;
    text-align: center;
    border-radius: 115px 0 115px 0;
  }
  .widget_archive .widget-title{
    font-size: 20px;
    line-height: 105px;
    color: #fff;
    font-family: 'nexa_lightregular';
    text-transform: uppercase;
  }
  .blog-list .box-post .post-header .title-post a{
    color: #FFF !important;
    font-weight: 600 !important;
    font-size: 19px !important;
  }
  .screen-reader-text{
    display: none !important;
  }
  .blog-post p{
    color: #585858;
  }
  footer .wpcf7-form .wpcf7-submit {
    width: 126px;
    height: 30px;
    border: none;
    background: #00A18E;
    color: #FFF;
    font-size: 16px;
    float: left;
    line-height: 17px;
    margin-top: 15px;
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
  }
  footer .wpcf7-form .wpcf7-submit:hover {
    border: 2px solid #00A18E;
    background: #FFF;
    color: #00A18E;
    transition: 0.7s; }
    .blog-list .box-post:hover .post-header{
      width: 100% !important;
    }
    .bt-veja-mais{
      padding: 10px;
      text-align: center;
      color: #019f91;
      cursor: pointer;
      font-weight: 600 !important;
      border-width: 0 1px 1px 0;
      border-style: solid;
      border-color: #fff;
      transition: all 600ms ease-in-out;
      -webkit-transition: all 600ms ease-in-out;
      -moz-transition: all 600ms ease-in-out;
      -o-transition: all 600ms ease-in-out;
    }
    .bt-veja-mais:hover{
      color: #dec9ad;
    }
    .relpost-block-single{
      transition: all 600ms ease-in-out;
      -webkit-transition: all 600ms ease-in-out;
      -moz-transition: all 600ms ease-in-out;
      -o-transition: all 600ms ease-in-out;
    }
    .relpost-block-single:hover{
      opacity: 0.7;
    }
    .box-post{
      transition: all 600ms ease-in-out;
      -webkit-transition: all 600ms ease-in-out;
      -moz-transition: all 600ms ease-in-out;
      -o-transition: all 600ms ease-in-out;
    }
    .box-post:hover{
      transition: all 600ms ease-in-out;
      -webkit-transition: all 600ms ease-in-out;
      -moz-transition: all 600ms ease-in-out;
      -o-transition: all 600ms ease-in-out;
    }
  </style>

</head>

<div class="container-fluid">
  <div class="row">
   <header class="pl-0 col-xs-12">
    <div class="no-padding col-xs-4 col-md-7 navbar-header">
     <div class="logo-box">
      <a class="logo navbar-brand active" href="#home" data-scroll-nav="0">

        <img src="<?php bloginfo('template_directory') ?>/img/isis.png" alt="">

      </a>
    </div>
    <div class="">
      <button type="button" class=" navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
       <span class="sr-only">Toggle navigation</span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
     </button>
   </div>
 </div>
 <nav class="no-padding col-xs-12 col-md-5 collapse navbar-collapse" id="collapse">
  <!-- links -->
          <!-- <ul class="nav navbar-nav navbar-right" id="navbar">
            <li class="active"><a href="#"  class="active">ISIS AUTIRIA</a></li>
            <li><a href="#" >MASSAGENS</a></li>
            <li><a href="#">BLOG</a></li>
          </ul> -->
          <?php
          wp_nav_menu('menu-principal');
          ?>
        </nav>
      </header>
    </div>
  </div>
