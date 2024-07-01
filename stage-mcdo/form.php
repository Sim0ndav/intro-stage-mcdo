<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roue de la fortune</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #346954;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: #1f532f;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #fedf22;
        }
        label {
            color: #fedf22;
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        p {
            color: #fedf22;
            font-size: 13px;
        }
        input[type="text"], 
        input[type="date"],
        input[type="email"],
        input[type="tel"],
        select {
            width: calc(100% - 22px);
            padding: 10px;
            margin-bottom: 20px;
            border: 2px solid #c8e6c9;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #fedf22;
            color: #1f532f;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }
        input[type="checkbox"] {
            margin-bottom: 15px;
            font-size: 5px;
        }
        input[type="submit"]:hover {
            background-color: #fedf22;
        }

        .logo {
            position: absolute;
            top: 10px;
            left: 10px;
            width: 150px; 
        }
    </style>
</head>
<body>
    <img src="logo.jpg" alt="Logo" class="logo">
    <div class="form-container">
        <h1>Lancer notre roue de la chance !</h1>
        <form method="post" action="traitement-form.php">
            <label for="mail">Adresse mail : </label>
            <input type="email" id="mail" name="mail" required>
            <label for="tel">Numéro de téléphone : </label>
            <input type="tel" id="tel" name="tel" pattern="[0-9]{10}" required>
            <label for="date">Date de participation : </label>
            <input type="date" id="date" name="date" required>
            <p>
                <input type="checkbox" id="conditions" name="conditions" required>
                J'accepte les <a href="conditions/conditions.html" target="_blank">conditions générales d'utilisation</a>
                <input type="checkbox" id="pub" name="pub"> J'accepte de recevoir des publicités commerciales de chez McDonald's
            </p>
            <input type="submit" value="Valider">
        </form>
    </div>  
</body>
</html>
