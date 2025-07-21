<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Traitement</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Welcome</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="traitement.php">Traitement</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <h2>Résultat du formulaire</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);

        echo "<p>Bienvenue <strong>$nom</strong> !</p>";
        echo "<p>Votre email est : <strong>$email</strong></p>";
    } else {
        echo "<p>Aucune donnée reçue.</p>";
    }
    ?>
    
<style>
    body {
    
        background-color:rgba(204, 51, 102, 0);
        font-family: 'Segoe UI', sans-serif;
    }
    h2 {
        color: #cc3366;
        margin-top: 20px;
    }
    .container {
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        margin-top: 40px;
    }
    img.custom-image {
        width: 100%;
        max-width: 300px;
        display: block;
        margin: 20px auto;
        border-radius: 8px;
    }
    .btn-primary {
        background-color: #000;
        border-color: #000;
        color: white;
    }
    .btn-primary:hover {
        background-color: #333;
        border-color: #333;
    }

.navbar-nav .nav-link {
    font-size: 25px;
    
}
.navbar-brand {
    font-size: 20px;
    font-weight: bold;
}
.navbar-brand{
    font-size: 35px;
    font-weight: bold;
}

    </style>

</div>

</body>
</html>
