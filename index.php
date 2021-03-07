<!DOCTYPE html>
<html>
    <head>
        <title>CV Julio Morais</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v5.8.0/js/all.js"></script>
        <script type="text/javascript" src="assets/funcJS.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/style.css">
    </head>
    <body>
        <!--navbar-->
        <nav class="navbar navbar-expand-md navbar-light navbar-dark bg-dark sticky-top">    
            
            <div class="container-fluid">
            
                <a class="navbar-brand" href="#"><img src="assets/img/cvlogo50.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive"> 
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#presentation">Présentation</a>
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#competences">Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacts" data-toggle="modal" data-target="#contacter">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--Carousel--> 
            <div id="carouselFade" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/img/presentation.jpg" class="d-block w-100" alt="">
                        <div class="carousel-caption">
                            <h1 class="display-2">Présentation</h1>
                            <a href="#presentation"><button type="button" class="btn btn-success" >Clique ici!</button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/competences.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1 class="display-2">Compétences</h1>
                            <a href="#competences"><button type="button" class="btn btn-success">Clique ici!</button></a>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/img/contact.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <h1 class="display-2">Contact</h1>
                            <a href="#"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#contacter">Contacter</button></a>
                        </div>
                    </div>
                </div>
                <a href="#carouselFade" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précedent</span>
                </a>
                <a href="#carouselFade" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>
        <!--Jumbotron-->
        <div class="">
            <div class="jumbotron text-justify" id="presentation">
                <h1 class="display-4">Présentation</h1>
                <hr>
                <p class="">Actuellement je suis en train de finir un diplôme de Technicien développeur Web 
                    aux Cnam (code du diplôme : CPN9000A-2) et je cherche un emploi ou un stage dans ce domaine 
                    pour valider les compétences acquises au cours de cette formation.
                </p>
                <p class="">Ce cours m’a permis d’acquérir des compétences de conception des logiciels 
                    et du développement web en utilisant les langages Java, PHP, Javascript, HTML, CSS, SQL 
                    aussi bien que quelques notions de Modélisation Merise, UML ce qui pourra être un atout pour
                     mener à bien la mission que vous proposez.                    
                </p>
                <p class="">En outre, votre offre m’intéresse tout particulièrement car je pourrais 
                    mettre en oeuvre les compétences que j’ai acquis et aussi élargir mes connaissances 
                    de manière à pouvoir vous aider à atteindre vous objectifs.</p>
                <p class=""> Je serai donc ravi de mettre mes compétences au service de votre entreprise.</p>
                <hr>
                <div class="container-fluid">
                    <div class="col-md-12 col-xl-6">
                        <a href="https://www.cnam-nouvelle-aquitaine.fr/diplomes/titre-rncp-niveau-5-ex-niveau-iii-technicien-developpeur-web.html" class="btn btn-outline-dark mt-1" target="blank">Ma formation</a>
                        <a href="./Fichiers/CV Julio Morais.pdf" class="btn btn-primary mt-1" download="" target="blank">Télécharger CV</a>
                    </div>
                </div>
            </div>
        </div>

        <!--competences-->
        <div class="container-fluid padding">
            <div id="comp-div" class="row padding">
                <h1 id="competences" class="display-4 col-12 text-left">Compétences</h1>
            </div>
        </div> 
        
        <!--Competences liste-->                
        <div class="container-fluid padding">
            <div id="comp-liste"  class="row padding comp-section">
                <div class="col-md-12 col-lg-4">
                    <hr><h5 class="text-center">Développement d'applications de gestion</h5><hr>
                    <ul class="list-unstyled text-center">
                        <li>Maîtrise d'une méthode de génie logiciel</li><br>
                        <li>Connaissance des systèmes de bases de données et de leurs environnements</li><br>
                        <li>Maîtrise de l'ingénierie d'une application de gestion</li><br>
                        <li>Connaissance en mathématiques appliquées (graphes et algorithmes)</li><br>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4">
                    <hr><h5 class="text-center">Analyse et de conception technique</h5><hr>
                    <ul class="list-unstyled text-center">
                        <li>Connaissance des réseaux, de systèmes et des architectures machine</li><br>
                        <li>Connaissance des caractéristiques des environnements de développement</li><br>
                        <li>Maîtrise d'une méthode de génie logiciel</li><br>
                        <li>Maîtrise des relations entre schéma relationnel de bases de données et 
                            bases de données existantes</li><br>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4">
                    <hr><h5 class="text-center">Développement d'une application internet</h5><hr>
                    <ul class="list-unstyled text-center">
                        <li>Maîtrise des principes des interfaces hommes-machines</li><br>
                        <li>Maîtrise du développement d'un site web</li><br>
                        <li>Maîtrise de l'ingénierie du développement des applications 
                            (Analyse fonctionnelle, conception, test, développements, maintenance)</li><br>
                    </ul>
                </div>
            </div>
        </div>
        <button class="langages btn btn-primary" data-toggle="collapse" data-target="#langages">Pour savoir plus sur les Langages cliquer ici</button>
        <div id="langages" class="collapse">
            <div class="row col-12 text-center">
                <div class="col-xs-12 col-md-4 lang-iten">
                    <i class="fab fa-java"></i>
                    <h4>Développement Java</h4>
                </div>
                <div class="col-xs-12 col-md-4 lang-iten">
                    <i class="fab fa-php"></i>
                    <h4>Développement PHP</h4>
                </div>
                <div class="col-xs-12 col-md-4 lang-iten">
                    <i class="fas fa-database "></i>
                    <h4>Gestion base de données SQL</h4>
                </div>                 
            </div>
            <div class="row col-12 text-center">
                <div class="col-xs-12 col-md-4 lang-iten">
                    <i class="fab fa-js"></i>
                    <h4>Développement Javascript</h4>
                </div>
                <div class="col-xs-12 col-md-4 lang-iten">
                    <i class="fab fa-css3-alt"></i>
                    <h4>Webdesign CSS</h4>
                </div>
                    <div class="col-xs-12 col-md-4 lang-iten">
                    <i class="fab fa-html5"></i>
                    <h4>Webdesign HTML</h4>
                </div> 
            </div>
        
        </div>  
        <!--Contact me-->
        <!-- Button trigger modal -->
        <button type="button" class="langages btn btn-secondary" data-toggle="modal" data-target="#contacter">
            Pour me contacter cliquez ici.
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="contacter" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Formulaire de contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body ">
                <form method="post"  action="tools.php">
                    <div class="row justify-content-center">
                        <div class="m-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">* Nom / Prenom </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="nom" required>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" >Enteprise </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="enterprise">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" >Téléphone </span>
                                </div>
                                <input type="tel" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="0101010101" maxlength="10" pattern="[0-9]{10}" name="tel">
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" >* E-mail </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="e_mail" required>
                            </div>
                            
                        </div>
                        <div>
                            <textarea rows="15" cols="50" name="msg" required placeholder="* Message"></textarea>
                            <p class="text-black-50" > * Champs obligatoires</p>
                        </div>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                    <button type="submit" value="Submit" class="btn btn-success" >Envoyer</button>
                </div>
                </form>        
            </div>
            </div>
        </div>
        <!--footer-->
        <footer>
            <div class="container-fluid padding bg-dark text-light">
                <div class="row text-center">
                    <div class="col-md-6">
                        <br>
                        <img src="assets/img/cvlogo50.png"   class="footer-logo">
                        <hr class="light">
                        <p>06 01 01 72 58</p>
                        <p>jjlmorais@gmail.com</p>
                        <p>Rue Condorcet</p>
                        <p>33300 Bordeaux</p>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <br>
                        <h5>Déplacements</h5>
                        <hr class="light">
                        <p>Bordeaux</p>
                        <p>Mérignac</p>
                        <p>Talence</p>
                        <p>Rive droit</p>
                    </div>
                    <div class="row col-12 padding align-items-center">
                        <hr class="light-100">
                        <div class="col-xs-12 col-md-4 col-lg-4">
                            <h5 class="h5-footer">
                                <i class="fas fa-at"></i> jjlmorais@gmail.com
                            </h5>
                        </div>
                        <div class="col-xs-12 col-md-4 col-lg-4">
                            <h5 class="h5-footer">
                                
                            </h5>
                        </div>
                        <div class="col-xs-12 col-md-4 col-lg-4">
                            <h5 class="h5-footer">
                                made with <a href="https://getbootstrap.com" target="blank"><i class="fab fa-bootstrap"></i></a>
                            </h5>   
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </footer> 
        <!-- Modal -->
        <div class="modal fade" id="modalConfirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Message envoyé.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                La message a été bien envoyé!</br>
                Merci.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
            </div>
            </div>
        </div>
        </div>


    </body>
</html>