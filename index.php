<?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=bdd_west_wash;charset=utf8', 'root', 'root');
    }
    catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
    $nav_services = $bdd->query('SELECT * FROM tbl_services');
    $display_services = $bdd->query('SELECT * FROM tbl_services');

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/styles/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
    <title>West Wash</title>
</head>
<body>

<header>

<video autoplay loop muted plays-inline><source src="./assets/images/video-header.mp4" type="video/mp4"></video>

<nav>
    <a href="#"><img src="./assets/images/logo-west-wash.png" alt="logo de West Wash"></a>
    <ul class="nav-ul">
        <li><a href="#">Accueil</li></a>
        <li><a href="./a-propos/">A propos de nous</li></a>
        <li class="nav-anchor"><a href="./prestations/">Nos services</a>
            <div class="nav-hidden">
                <ul>
                <?php 
                    while($service = $nav_services->fetch()) {
                ?> 
                <li><a href="./nos-prestations/<?php echo $service['a_service']; ?>"><?php echo $service['service']; ?></li></a>
                <?php
                    }
                    $nav_services->closeCursor();
                ?>
                </ul>
            </div>
        </li>
        <li><a href="./nos-realisations/">Nos réalisations</li></a>
        <li><a href="./nous-contacter/">Contact</li></a>
    </ul>
    <a href="./nous-contacter/" class="main-btn">
    <p>Prendre rdv</p>
    <div class="anim-btn">
        <div></div>
        <div></div>
        <div></div>
    </div> 
    </a>  
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="display: block; height: 0; width: 0;">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo"></feColorMatrix>
                <feBlend in="SourceGraphic" in2="goo"></feBlend>
            </filter>
        </defs>
    </svg>
</nav>

<div class="hero-container">
    <div class="main-hero">
        <h1>West Wash</h1>
        <h2>Entreprise de rénovation et lavage automobile</h2>
    </div>
        <a class="cta-hero" href="#about-section">Voir plus
            <img src="./assets/icones/chevron-down-solid.svg">
        </a>
</div>

</header>

<main>
<section id="about-section">
    <div class="left-part">
        <h2>Lorem ipsum dolor sit amet.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum sunt maxime ea fugiat distinctio ullam facilis illum excepturi minus ipsa.</p>
        <div class="img-about-section"><img src="./assets/images/car-prestations.jpg"></div>
    </div>
    <div class="right-part">
        <ul>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Lorem ipsum dolor sit amet</li>
            <li>Lorem ipsum dolor sit amet</li>
        </ul>
    </div>
</section>

<section id="products-section">
    <div class="headband">
        <h2>Nos services</h2>
        <div class="services">
        <?php 
            while($service = $display_services->fetch()) {
        ?> 
            <div class="service">
                <a href="./nos-prestations/<?php echo $service['a_service']; ?>">
                    <div class="product-img"><img src="./assets/icones/<?php echo $service['a_service']; ?>.svg"></div>
                    <h3><?php echo $service['service']; ?></h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur itaque, est ipsa quos fuga ullam repellat illum! Blanditiis voluptatum dolor soluta in delectus eum, suscipit ut aspernatur, temporibus saepe deleniti!</p>
                </a>
            </div>
        <?php
            } $display_services->closeCursor();
        ?>
        </div>
    </div>
</section>

<section id="figures-section">
    <div class="values-part">
        <h2>West Wash en chiffres</h2>
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae repudiandae veritatis est incidunt nesciunt, modi voluptatum architecto delectus tempore sint?</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque, molestiae reprehenderit. Excepturi cum harum doloribus distinctio maxime consectetur! Velit suscipit nisi at in sapiente, distinctio unde iure quidem laboriosam. Delectus.</p>
        <div class="values-list">
            <ul>
                <li>Lorem ipsum dolor</li>
                <li>Lorem ipsum dolor</li>
                <li>Lorem ipsum dolor</li>
            </ul>
        <a class="primary-btn" href="./nos-prestations/">Voir nos services</a>
        </div>
    </div>
    <div class="img-figures-section"><img src="./assets/images/car-top.png" alt="image de voiture de sport"></div>
    <div class="key-part">
        <ul>
            <li class="key-figure">10</li>
            <li class="key-title">ans d'experience</li>
            <li class="key-text">Nous avons 10 ans d'experience</li>
        </ul>
        <ul>
            <li class="key-figure">10</li>
            <li class="key-title">ans d'experience</li>
            <li class="key-text">Nous avons 10 ans d'experience</li>
        </ul>
        <ul>
            <li class="key-figure">10</li>
            <li class="key-title">ans d'experience</li>
            <li class="key-text">Nous avons 10 ans d'experience</li>
        </ul>
    </div>
</section>

<section id="project-section">
    <h2>Nos réalisations</h2>
    <div class="carousel">
        <div class="continue">
            <img src="./assets/icones/arrow-right-solid.svg">
        </div>
        <a href="./nos-realisations.html">
            <img src="./assets/images/car-prestations.jpg">
            <h3>Porsche</h3>
            <p>Nettoyage d'une Porsche 918 Spyder</p>
        </a>
        <a href="./nos-realisations.html">
            <img src="./assets/images/car-prestations.jpg">
            <h3>Porsche</h3>
            <p>Nettoyage d'une Porsche 918 Spyder</p>
        </a>
        <a href="./nos-realisations.html">
            <img src="./assets/images/car-prestations.jpg">
            <h3>Porsche</h3>
            <p>Nettoyage d'une Porsche 918 Spyder</p>
        </a>
        <div class="continue">
            <img src="./assets/icones/arrow-right-solid.svg">
        </div>
    </div>
</section>

<section id="cta-section">
    <div class="cta-part">
        <img src="" alt="">
        <h3>Prends rendez-vous !</h3>
        <a href="contact.html" class="primary-btn">Tout de suite</a>
    </div>
</section>

<section id="testimonials">
    <div class="btn-container">
        <button><img src="./assets/icones/arrow-right-solid.svg"></button>
        <button><img src="./assets/icones/arrow-right-solid.svg"></button>
    </div>
    <div class="slider">
        <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, beatae."</p>
        <h4></h4>
    </div>
    <div class="slider">
        <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, beatae."</p>
        <h4></h4>
    </div>
    <div class="slider">
        <p>"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus, beatae."</p>
        <h4></h4>
    </div>
</section>

<section id="blog-section">
    <div class="cards">
        <div class="card">
            <img src="./assets/images/car-prestations.jpg" alt="">
            <h4>26 Septembre 2022</h4>
            <h3>Essai d'une ferrari 599 Testarossa</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi quas veniam quia illo error, nostrum dolor aut quo deleniti provident...</p>
            <hr>
        </div>
        <div class="card">
            <img src="./assets/images/car-prestations.jpg" alt="">
            <h4>26 Septembre 2022</h4>
            <h3>Essai d'une ferrari 599 Testarossa</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi quas veniam quia illo error, nostrum dolor aut quo deleniti provident...</p>
            <hr>
        </div>
        <div class="card">
            <img src="./assets/images/car-prestations.jpg" alt="">
            <h4>26 Septembre 2022</h4>
            <h3>Essai d'une ferrari 599 Testarossa</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi quas veniam quia illo error, nostrum dolor aut quo deleniti provident...</p>
            <hr>
        </div>
    </div>
</section>

<section id="contact-section">
    <div class="location-part">
        <div class="infos-part">
            <img src="./assets/icones/location-dot-solid.svg">
            <h3>Ou sommes-nous ?</h3>
            <h4>Auray, Morbihan <br><br> westwash56@gmail.com</h4>
        </div>
        <div class="plan-part">
            <img src="" alt="carte du champ d'action de West Wash dans la zone d'Auray">
        </div>
    </div>
    <div class="hours-part">
        <h3>Heures d'ouverture</h3>
        <h4>Lundi..................... <b>9H00 - 18H00</b></h4>
        <h4>Mardi..................... <b>9H00 - 18H00</b></h4>
        <h4>Mercredi.................. <b>9H00 - 18H00</b></h4>
        <h4>Jeudi..................... <b>9H00 - 18H00</b></h4>
        <h4>Vendredi.................. <b>9H00 - 18H00</b></h4>
        <h4>Samedi.................... <b>9H00 - 18H00</b></h4>
        <h4>Dimanche.................. <b>9H00 - 18H00</b></h4>
        <a href="contact.html">Réserver un lavage</a>
    </div>
</section>
</main>

<footer>
    <div class="main-footer">
        <div class="desc">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum mollitia aliquam labore voluptate quia voluptatum quibusdam. Voluptatibus necessitatibus accusamus expedita dolorum ratione, tempore ad, libero quisquam, fuga a numquam laboriosam.$</p>
            <a href=""><img src="./assets/icones/instagram.svg"></a>
        </div>
        <div class="links">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="a-propos.html">A propos</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="prestations.html">Nos services</a></li>
                <li><a href="professionnels.html">Professionnels</a></li>
                <li><a href="actualites.html">Actualités</a></li>
                <li><a href="nos-realisations.html">Nos réalisations</a></li>
            </ul>
        </div>
        <div class="services">
            <ul>
                <li><a href="./prestations/prestations-lavage-interieur.html">Nettoyage intérieur</a></li>
                <li><a href="./prestations/prestations-lavage-exterieur.html">Nettoyage extérieur</a></li>
            </ul>
        </div>
        <div class="contact">
            <ul>
                <li><img src="./assets/icones/envelope-regular.svg"><a href="mailto:westwash56@gmail.com">westwash56@gmail.com</a></li>
                <li><img src="./assets/icones/location-dot-solid.svg">Auray, Morbihan</li>
            </ul>
        </div>
    </div>
    <div class="legal-part">
        <p>© West Wash, <span id="year"></span></p>
        <ul>
            <li><a href="./legales/mentions-legales.html">Mentions légales</a></li>|
            <li><a href="./legales/conditions-generales-de-vente.html">Conditions générales de vente</a></li>|
            <li><a href="./legales/politique-de-confidentialite.html">Politique de confidentialité</a></li>
        </ul>
    </div>
</footer>

</body>
</html>