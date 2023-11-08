<?php 

    require_once '../config/index.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Découvrez l'application française qui vous accompagne dans votre vie etudiante : trouvez les informations utiles et une communauté pour mieux s'intégrer en France.">
    <meta property="og:image" content="../assets/img/brands/desc.jpg" >

    <!-- icon -->
    <link rel="shortcut icon" href="../assets/img/brands/icon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="../assets/img/brands/icon.svg">

    <!-- Links -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/main.css">

    <!-- CNDs -->

        <!-- icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        

    <!--  -->

    <title> Aide - Connect | Le guide des étudiants étrangers</title>
</head>
<body>

    <!-- Loader -->

        <div id="loader">

            <div class="loading">
                <div class='loader--dot'></div>
                <div class='loader--dot'></div>
                <div class='loader--dot'></div>
                <div class='loader--dot'></div>
                <div class='loader--dot'></div>
                <div class='loader--dot'></div>
                <div class='loader--text'></div>
            </div>

        </div>
        
    <!-- Loader End -->

    <!-- Header Nav -->

        <?php include_once '../components/headernav.php'; ?>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <div class="container-fluid header-cta" id="page-header-cta">

            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-md-10 text-center">

                        <h1>Comment pouvons-nous vous aider ?</h1>

                    </div>

                </div>
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- All about Container -->

        <div class="container-fluid mt-5 py-5">

            <div class="container pb-5">

                <div class="row">

                    <div class="col-md-5">

                        <h2>Comment ça marche ?</h2>
                    
                    </div>

                    <div class="col-md-7 tp5-mob">

                        <div class="row">

                            <div class="col">
                                <h4>1. Téléchargez l'app</h4>
                            </div>
                            <div class="col">
                                <p>Inscrivez-vous gratuitement.</p>
                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            
                            <div class="col">
                                <h4>2. Explorez librement</h4>
                            </div>
                            <div class="col">

                                <p>Accédez à un catalogue large et varié d'informations et de ressources</p>
                            
                            </div>

                        </div>

                        <hr>

                        <div class="row">
                            
                            <div class="col">
                                <h4>3. Rencontrez, discutez, questionnez simplement</h4>
                            </div>
                            <div class="col">
                                <p>De quelques personnes à toute une communauté, Connect est organisée pour que vous puissiez discutez ou poser.</p>
                            </div>

                        </div>
                        
                    </div>

                </div>

            </div>

            <hr>

            <div class="container py-5">
                <div class="row">

                    <div class="col-md-5">

                        <h2>Mon compte</h2>
                    
                    </div>

                    <div class="col-md-7">

                        <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Créer mon compte, quelles informations à renseigner ?
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <p>
                                Pour s'inscrire sur Connect, il faut être étudiant.e en France.<br><br>
                                Lors de l'inscription, les éléments suivants sont demandés.<br><br>
                                <strong>Coordonnées</strong>
                                <ul>
                                    <li>Nom et prénom </li>
                                    <li>Email</li>
                                    <li>Genre</li>
                                    <li>Nationalité</li>
                                    <li>Ville d'étude</li>
                                    <li>Ecole ou université</li>
                                    <li>Domaine d'étude</li>
                                    <li>Niveau d'étude</li>
                                </ul>
                                </p>
                            
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                J'ai oublié mon mot de passe
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Afin de pouvoir vous identifier, cliquez sur le boutton "mot de passe oublié" puis saisissez l'adresse email avec laquelle votre compte a été créé puis cliquez sur envoyer. Vous recevrez un email vous permettant de réinitialiser votre mot de passe.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Comment supprimer mon compte ?
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                                <p>
                                Vous pouvez supprimer votre compte depuis l'application Connect ou sur Internet.<br><br>
                                Si vous souhaitez supprimer votre compte, il vous suffit de vous rendre dans les paramètres puis de cliquer sur le bouton "Quitter Connect" puis sur le bouton "Quitter définitivement". Votre compte sera sauvegardé pendant 30 jours avant d'être supprimé définitivement. <br><br>
                                <strong>Remarque :</strong> Si vous ne parvenez pas à supprimer votre compte, contactez-nous à l'aide du lien ci-dessous : <br><br>
                                <a href="delete-account/">J'ai besoin d'aide pour supprimer mon compte</a>

                                </p>
                            
                            </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>

                </div>
            </div>          

        </div>   

        <!-- Last -->
        <div class="container">
            
            <div class="row justify-content-center pb-5">

                <div class="col-md-10 text-center justify-content-center">

                    <h2>Ensemble, créons une communauté</h2>

                </div>

            </div>
        </div>

    <!-- All about Container End -->

    <!-- Prefooter -->
        <?php include_once '../components/prefooter.php'; ?>
    <!-- Prefooter end -->

    <!-- Footer -->

        <?php include_once '../components/footer.php'; ?>

    <!-- Footer End -->    

    <!-- JavaScript -->
    <script src="../assets/js/style.js"></script>

</body>
</html>