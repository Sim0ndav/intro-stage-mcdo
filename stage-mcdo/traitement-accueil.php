<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choix = $_POST['dropdown'];

    switch ($choix) {
        case 'petit-foret':
            header('Location: form.php');
            exit; 
        case 'quievrechain': 
            header('Location: roue.html');
            exit;
        case 'harpignies':
            header('Location: harpignies.php'); 
            exit;
        case 'gaumont':
            header('Location: gaumont.php');
            exit;
        case 'azerty':
            header('Location: azerty.php');
            exit;
        case 'az2erty':
            header('Location: az2erty.php');
            exit;
        default:
            header('Location: index.html');
            exit;
    }
} else {
    header('Location: index.html');
    exit;
}
?>

