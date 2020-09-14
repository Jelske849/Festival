<?php require_once('initialize.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Speakers Festival</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">

</head>

<body>

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Festival</span>
    <span class="site-heading-lower">Speakers</span>
  </h1>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
    <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item active px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php ">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href=" tickets.php">Tickets</a>
          </li>
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="info.php">Info</a>
          </li>
          <li class="nav-item  px-lg-4">
            <?php if(isset( $_SESSION['login'])) {?>
                <a class="nav-link text-uppercase text-expanded" href="profiel.php">PROFIEL</a>
              <?php } else  { ?>
                <a class="nav-link text-uppercase text-expanded" href="inloggen.php">INLOGGEN</a>
              <?php }?>
            </li>
        </ul>
      </div>
    </div>
  </nav>
  <?php
  $sql = "SELECT * FROM gebruiker WHERE Gebruiker_ID = '1'";
$query = mysqli_query($db, $sql);
$result = mysqli_fetch_assoc($query);

 ?>
 <section style="background-color: rgba(164, 225, 233, 0.7); display:inline-block; text-align:center; margin:auto;ss">
 <br>
 <table class= "profiel">
 <tr>
 <td> Gebruiker ID</td>
 <td> <?php echo $result['Gebruiker_ID']; ?></td>
 </tr>
 <tr>
 <td> E-mail</td>
 <td> <?php echo $result['Email']; ?></td>
 </tr>
 <tr>
 <td> Naam</td>
 <td> <?php echo $result['Voornaam'] ," ", $result['Achternaam']; ?></td>
 </tr>
<br>
 <?php 
    $sqlTicket = "SELECT t.Naam, Prijs FROM Bestellingen b, Tickets t WHERE b.Gebruiker_ID = '1' AND b.Ticket_ID = t.Ticket_ID";

    $Ticketquery = mysqli_query($db, $sqlTicket);
 ?>
 <div>
     <table>
         <tr>
             <td>aantal</td>
             <td>type</td>
             <td>totaal</td>
         </tr>
         <?php 
         while ($Ticketresult = mysqli_fetch_assoc($Ticketquery)){?>

        <tr>
            
            
            <td><?php echo $Ticketresult['Naam'];?></td>
            <td><?php echo $Ticketresult['Prijs'];?></td>
        </tr>
         <?php } ?>
     </table>
 </div>
 <a href="uitlog.php" >Uitloggen</a>
 </section>