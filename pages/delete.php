    <?php 
    if (isset($_POST['id']) && !empty($_POST['id']))
    {
        $x = $_POST['id'];
        $reqsql = 'DELETE FROM client WHERE id=$x';

        include '../main/access.php';
        $auth->query($reqsql);
    }

    header('Location:liste.php');

    ?>

