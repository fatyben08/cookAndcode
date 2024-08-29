<?php require_once "controllers/indexCtrl.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="assets\css\style.css" />
  <link rel="stylesheet" href="assets\css\table.css" />
  <link rel="stylesheet" href="assets\css\aboutus.css" />

  <title>Cook&Code</title>
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="./assets/img/logo.png" alt="" />
        <h1>Cook&Code</h1>
        <p>Goût du partage en ligne</p>
      </div>
      <ul>
        <li><a class="links-menu" target="recette-menu" href="#">Recettes</a></li>
        <li><a class="links-menu" target="menu-menu" href="#">Menu</a></li>
        <li><a class="links-menu" target="theme-menu" href="#">Thèmes</a></li>
        <li><a class="links-menu" target="idea-menu" href="#">Idées de recettes</a></li>
        <li><a class="links-menu" target="about-menu" href="#">À propos</a></li>
        <li><a href="./connexion.php">Mon compte</a></li>
      </ul>
      <div class="search">
        <img src="./assets/img/Vector.png" alt="" />
        <input type="text" placeholder="Je cherche..." />
      </div>
    </nav>
  </header>


  <main>
    <div id="recette-menu" class="menu">
      <section>
        <div class="title-column title-top"><a href="#">Catégories</a></div>
        <div class="title-column"><a href="#">Apéritifs</a></div>
        <div class="title-column"><a href="#">Salades</a></div>
        <div class="title-column"><a href="#">Plats</a></div>
        <div class="title-column"><a href="#">Desserts</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Ingrédients</a></div>
        <div class="title-column"><a href="#">Légumes</a></div>
        <div class="title-column"><a href="#">Fruits</a></div>
        <div class="title-column"><a href="#">Viandes</a></div>
        <div class="title-column"><a href="#">Poissons</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Recettes d'automne</a></div>
        <div class="title-column"><a href="#">Soupes</a></div>
        <div class="title-column"><a href="#">Gratins aux potirons</a></div>
        <div class="title-column"><a href="#">Tarte aux noix</a></div>
        <div class="title-column"><a href="#">Fondant au chocolat</a></div>
      </section>
    </div>
    <div id="menu-menu" class="menu">
      <section>
        <div class="title-column title-top"><a href="#">Menu</a></div>
        <div class="title-column"><a href="#">Apéritifs</a></div>
        <div class="title-column"><a href="#">Salades</a></div>
        <div class="title-column"><a href="#">Plats</a></div>
        <div class="title-column"><a href="#">Desserts</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Ingrédients</a></div>
        <div class="title-column"><a href="#">Légumes</a></div>
        <div class="title-column"><a href="#">Fruits</a></div>
        <div class="title-column"><a href="#">Viandes</a></div>
        <div class="title-column"><a href="#">Poissons</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Recettes d'automne</a></div>
        <div class="title-column"><a href="#">Soupes</a></div>
        <div class="title-column"><a href="#">Gratins aux potirons</a></div>
        <div class="title-column"><a href="#">Tarte aux noix</a></div>
        <div class="title-column"><a href="#">Fondant au chocolat</a></div>
      </section>
    </div>
    <div id="theme-menu" class="menu">
      <section>
        <div class="title-column title-top"><a href="#">THEME</a></div>
        <div class="title-column"><a href="#">Apéritifs</a></div>
        <div class="title-column"><a href="#">Salades</a></div>
        <div class="title-column"><a href="#">Plats</a></div>
        <div class="title-column"><a href="#">Desserts</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Ingrédients</a></div>
        <div class="title-column"><a href="#">Légumes</a></div>
        <div class="title-column"><a href="#">Fruits</a></div>
        <div class="title-column"><a href="#">Viandes</a></div>
        <div class="title-column"><a href="#">Poissons</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Recettes d'automne</a></div>
        <div class="title-column"><a href="#">Soupes</a></div>
        <div class="title-column"><a href="#">Gratins aux potirons</a></div>
        <div class="title-column"><a href="#">Tarte aux noix</a></div>
        <div class="title-column"><a href="#">Fondant au chocolat</a></div>
      </section>
    </div>
    <div id="idea-menu" class="menu">
      <section>
        <div class="title-column title-top"><a href="#">Idee</a></div>
        <div class="title-column"><a href="#">Apéritifs</a></div>
        <div class="title-column"><a href="#">Salades</a></div>
        <div class="title-column"><a href="#">Plats</a></div>
        <div class="title-column"><a href="#">Desserts</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Ingrédients</a></div>
        <div class="title-column"><a href="#">Légumes</a></div>
        <div class="title-column"><a href="#">Fruits</a></div>
        <div class="title-column"><a href="#">Viandes</a></div>
        <div class="title-column"><a href="#">Poissons</a></div>
      </section>
      <section>
        <div class="title-column title-top"><a href="#">Recettes d'automne</a></div>
        <div class="title-column"><a href="#">Soupes</a></div>
        <div class="title-column"><a href="#">Gratins aux potirons</a></div>
        <div class="title-column"><a href="#">Tarte aux noix</a></div>
        <div class="title-column"><a href="#">Fondant au chocolat</a></div>
      </section>
    </div>
    <div id="about-menu" class="card">
      <p class="team">L'équipe Cook&Code</p>
      <p class="description">
        Cook&Code, créé en 2024 par Fatimaezzahra BENCHEIKH, vous apporte chaque jour
        de nouvelles recettes, techniques, vidéos, trucs de pro pour vous aider à vous faire
        plaisir en cuisine.<br><br>
        Fatimaezzahra est également l'auteur du blog Biodélices et a publié de nombreux livres.
      </p>
      <div class="social-media">
        <p>Suivez Cook&Code</p>
        <div class="icons">
          <img src="assets/img/instagram.png" alt="Instagram">
          <img src="assets/img/facebook.png" alt="Facebook">
          <img src="assets/img/pinterest.png" alt="Pinterest">
        </div>
      </div>
    </div>
    <section class="top-recipes">
      <h2>Nos top recettes codées avec amour</h2>
      <div class="recipes">
        <div class="recipe-flex">
          <div class="recipe">
            <img src="./assets/img/1.jpg" alt="Salade d'automne" />
            <p>Salades d'automne</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/2.jpg" alt="Dessert d'automne" />
            <p>Desserts d'automne</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/3.jpg" alt="Recette du Monde" />
            <p>Recettes du Monde</p>
          </div>
        </div>
        <div class="recipe-flex">
          <div class="recipe">
            <img src="./assets/img/4.jpg" alt="Salade d'automne" />
            <p>Fruits rouges</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/5.jpg" alt="Dessert d'automne" />
            <p>Recettes de saison</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/6.jpg" alt="Recette du Monde" />
            <p>Burgers gourmands</p>
          </div>
        </div>
      </div>
    </section>
    <section class="top-recipes">
      <h2>Nos recettes salées de saison en Novembre</h2>
      <div class="recipes">
        <div class="recipe-flex">
          <div class="recipe">
            <img src="./assets/img/Rectangle 15.png" alt="Salade d'automne" />
            <p>Salade de chou rouge</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/8.webp" alt="Dessert d'automne" />
            <p>Effilochée de poulet</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/9.webp" alt="Recette du Monde" />
            <p>Salade lentilles et carottes</p>
          </div>
        </div>
        <div class="recipe-flex">
          <div class="recipe">
            <img src="./assets/img/10.webp" alt="Salade d'automne" />
            <p>Citrouille d'automne</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/12.webp" alt="Dessert d'automne" />
            <p>Légumes d'automne rôtis</p>
          </div>
          <div class="recipe">
            <img src="./assets/img/13.webp" alt="Recette du Monde" />
            <p>Muffins aux topinambours</p>
          </div>
        </div>
      </div>
    </section>
  </main>
</body>
<script src="./assets/js/index.js"></script>

</html>