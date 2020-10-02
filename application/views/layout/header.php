<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
   
   <?php echo (isset($titulo) ? '<title> Sytem Ordem | '.$titulo.'</title>' : '<title>System Ordem</title>')?>
  


  <!-- Alterado para o codigo abaixo-->
  <link href="<?php echo base_url('public/vendor/fontawesome-free/css/all.min.css" rel="stylesheet'); ?>" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">


  <!-- Alterado para o codigo abaixo-->
  <link href="<?php echo base_url('public/css/sb-admin-2.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('public/css/app.css'); ?>" rel="stylesheet"><!--codigo que comtem o caminho para o css-->

  <?php if(isset($styles)): ?>
     <?php  foreach($styles as $style):?>
       <link href="<?php echo base_url('public/' . $style); ?>" rel="stylesheet">
     <?php  endforeach;?>
  <?php endif; ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">