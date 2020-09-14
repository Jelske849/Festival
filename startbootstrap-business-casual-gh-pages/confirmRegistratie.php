<?php require_once('initialize.php'); ?>
<?php
    //echo"<pre>";
    //print_r($_POST);

    if( !empty($_POST['Voornaam']) && 
        !empty($_POST['Achternaam']) && 
        !empty($_POST['Email']) 
          ){
           //toevoegen aan db
            $voornaam = $_POST['Voornaam'];
            $Achternaam = $_POST['Achternaam'];
            $email = $_POST['Email'];
           

           $sql =  "INSERT INTO gebruiker SET 
            Voornaam = '$voornaam', 
            Achternaam = '$Achternaam', 
            Email = '$email'";

            $query = mysqli_query($db, $sql);

            if(mysqli_affected_rows($db) === 1){
                echo "<h1> Gebruiker $voornaam $Achternaam is toegevoegd aan de database!</h1>";
            }
        

    } else{
        header("Location: registratie.php");
    }
?>
<?php
db_disconnect($db);
?>