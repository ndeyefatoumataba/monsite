<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    


<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">welcome</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="traitement.php">Traitement</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    <h2>Formulaire d'inscription</h2>
    <form action="traitement.php" method="POST">
        <div class="mb-3">
            <label for="nom" class="form-label">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email :</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>
<style>


<style>
    body {
    
        background-color:rgba(171, 51, 204, 0.17);
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

</body>
</html>
