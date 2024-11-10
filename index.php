<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <?php include "nav.php" ?>
    
    <div class="container mt-3">
        <h1>Liste des produits :</h1>
        <div class="row">
            <?php
            for ($i = 0; $i < 9; $i++) { 
            ?>
                <div class="col-4">
                    <div class="card">
                        <img src="https://picsum.photos/200/200" class="img-fluid" alt="Produit">
                        <div class="card-body">
                            <h5 class="card-title">Asus I7</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, officiis?</p>
                            <a href="#" class="btn btn-success btn-sm">Détail</a>
                            <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i> Ajouter</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <hr>
    
    <h2>Service irréprochable</h2>
    <div class="row">
        <div class="col-4">
            <div class="card bg-primary text-white text-center">
                <div class="card-body">
                    <i class="fas fa-truck fa-3x"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, magnam minima amet quos vitae modi?</p>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card bg-primary text-white text-center">
                <div class="card-body">
                    <i class="fas fa-lock fa-3x"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae neque obcaecati, nemo ea nihil reiciendis?</p>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="card bg-primary text-white text-center">
                <div class="card-body">
                    <i class="fas fa-check fa-3x"></i>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sint laudantium nobis vero vitae, maxime ducimus!</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>