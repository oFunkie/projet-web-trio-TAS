
<?php

$id = $_POST['id'];

include '../inc/connect.php';
$sql = "SELECT * FROM customers WHERE id=$id";

$response = $auth->query($sql);

foreach($response AS $r){

    <form action="update.php" method="POST">

    <input type="text" name="email" value="<?=$r['email']?>" maxlenght="200" id="email">
    <input type="text" name="town" value="<?=$r['town']?>" maxlenght="200" id="town">
    <input type="hidden" name="id" maxlenght="200"value="<?=$r['id']?>">

<input type="submit" value="enregistrer mes coordonnées">

</form>
    
}



