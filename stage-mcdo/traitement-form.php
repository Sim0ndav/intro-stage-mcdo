<?php
// traitement.php
    $dsn = 'mysql:dbname=roue-de-la-fortune;host=127.0.0.1';
    $user = 'root';
    $password = 'azerty';

    try {
        $dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $email = $_POST['mail'];
        $telephone = $_POST['tel'];
        $date = $_POST['date'];
        $publicite = isset($_POST['pub']) ? 1 : 0; // Si la case est cochée, on enregistre 1 sinon 0


        // Entourer les noms de colonnes contenant des tirets de backticks
        $sql = "INSERT INTO utilisateurs (`mail`, `num-tel`, `date-participation`, `publicite`) VALUES (:email, :telephone, :date, :publicite)";
        $stmt = $dbh->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':date', $date);
        $stmt->bindParam(':publicite', $publicite); // Liaison du paramètre pour la publicité


        if ($stmt->execute()) {
            // Redirection vers roue.html 
            header("Location: roue.html");
            exit(); 
        } else {
            echo "Erreur lors de l'insertion des données.";
        }
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
    }

?>
