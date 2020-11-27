<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dylan's Ice Cream</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.png">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/pulse.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap-select.min.css">
    <script>var base_url = '<?php echo base_url() ?>';</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/"><img src="<?php echo base_url();?>/assets/images/dylans_ice_cream_logo_x1.png" alt="Dylan's Ice Cream Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Make Your Sundae</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/retrieve">Retrieve a Sundae</a>
      </li>
      <?php if($isLogged): ?>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Admin Section
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/admin">Admin Section</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/user">Users</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/flavour">Flavours</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/wafer">Wafers</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/inclusion">Inclusions</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/sauce">Sauces</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="/admin/sprinkles">Sprinkles</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item text-white bg-danger" href="/logout">Logout</a>
        </div>
      </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

<div class="container">