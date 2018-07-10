<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>GeeksforGeeks</title>
    
    <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">

    <link href="<?php echo base_url()?>assets/css/custom.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.html">GeeksforGeeks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>subjects">Subjects <span class="sr-only">(current)</span></a>
          </li>
          <?php if(!$this->session->userdata('logged_in')) : ?>
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url()?>users/register/">Create Account</a>
          </li>
          <?php endif; ?>
          
        </ul>
        <?php if(!$this->session->userdata('logged_in')) : ?>
        <form method="post" action="<?php echo base_url();?>users/login/" class="form-inline my-2 my-lg-0">
          <input name="username" class="form-control mr-sm-2" type="text" placeholder="username" >
          <input name="password" class="form-control mr-sm-2" type="password" placeholder="password" >
          <button name="submit" class="btn btn-success my-2 my-sm-0" type="submit">Login</button>
        </form>
        <?php else : ?>
        <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url();?>profile/"><?php echo $this->session->userdata('username');?></a>
        </li>
        <form class="navbar-form navbar-right" method="post" action="<?php echo base_url();?>users/logout/">
            <button name="submit" type="submit" class="btn btn-default">Logout</button>
        </form>
        <?php endif; ?>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="container">