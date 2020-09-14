<?php require_once('initialize.php'); ?>

<?php if( !empty($_POST['Gebruiker_ID']) && 
        !empty($_POST['Aantal'])
          ){        ?>
 <div id="tabel">
<table>

<tr>
<td>KlantID</td>
<td><?php echo $_POST['Gebruiker_ID']?></td>
</tr>
<tr>
<td>Aantal:</td>
<td><?php echo $_POST['Aantal']?></td>
</tr>
<tr>
<td>Tickets:</td>
<td><?php echo $_POST['type']?></td>
</tr>

</table>
</div>
<?php 
$ticketID = $_POST['type'];

$sql = "SELECT Prijs FROM tickets WHERE Ticket_ID = $ticketID "; 
$query = mysqli_query($db, $sql);
$result = mysqli_fetch_assoc($query);
$result['Prijs'];

$totaal = $result['Prijs'] * $_POST['Aantal'];



    $tID = $_POST['type'];
    $aantal = $_POST['Aantal'];
    $kID = $_POST['Gebruiker_ID'];

    $sql =  "INSERT INTO bestellingen SET 
            Ticket_ID = '$tID', 
            Aantal  = '$aantal',
            Gebruiker_ID  = '$kID',
            Totaalprijs  = '$totaal'";

             $query = mysqli_query($db, $sql);
             if(mysqli_affected_rows($db) === 1){
                echo "<h1> Uw bestelling is gelukt!</h1>";
            }
          }?>
          <span class="section-heading-upper" > <a href="profiel.php">ga hier door naar uw profiel</a></span>
