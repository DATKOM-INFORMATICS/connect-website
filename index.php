<?php 

    require_once 'config/index.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Description -->
    <meta name="description" content="Découvrez l'application française qui vous accompagne dans votre vie etudiante : trouvez les informations utiles et une communauté pour mieux s'intégrer en France.">
    <meta property="og:image" content="assets/img/brands/desc.jpg" >

    <!-- icon -->
    <link rel="shortcut icon" href="assets/img/brands/icon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" href="assets/img/brands/icon.svg">

    <!-- Links -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">

    <!-- CNDs -->

        <!-- icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        

    <!--  -->

    <title>Connect | Le guide des étudiants étrangers</title>
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
        
    <!--  -->

    <!-- Header Nav -->

        <?php
            include 'components/headernav.php';
        ?>

    <!-- Header Nav End -->

    <!-- Header CTA -->

        <div class="container-fluid header-cta" id="homepage-header-cta">

            <div class="container">
                <div class="row">

                    <div class="col-md-6">

                        <h1>Simplifiez la vie de l'étudiant étranger</h1>
                        <p>Vous êtes étudiants ou prévoyez d'étudier en France ?<br>Connect est la solution parfaite pour mieux vous adapter.</p>
                        <br><br class="responsive-none">
                        <a href="https://connectnow.fr/dl/">Télécharger</a>

                    </div>

                    <div class="col-md-6">
                        <img src="assets/img/web/homepage.svg" alt="" width="85%">
                    </div>

                </div>
            </div>

        </div>

    <!-- Header CTA End -->

    <!-- transition Container -->

        <div class="container-fluid py-5" id="homepage-transition">

            <div class="container py-5">

                <div class="row pb-5 justify-content-center">

                    <div class="col-md-10 text-center justify-content-center">

                        <h3>Imaginez l'outil polyvalent en ligne que vous partagez avec vos amis, vos amis d'amis, et vous vous dites : "C'est génial !"</h3>

                    </div>

                </div>

                <div class="row">

                    <div class="col-md-4 text-center p-4">
                        
                        <img src="assets/img/web/phone.svg" alt="phone" width="15%">
                        <br><br>
                        <h3>Application gratuite</h3>
                    
                    </div>

                    <div class="col-md-4 text-center p-4">
                        
                        <img src="assets/img/web/Infinity.svg" alt="possibilities" width="20%">
                        <br><br>
                        <h3>Possibilité infinies</h3>
                    
                    </div>

                    <div class="col-md-4 text-center p-4">
                        
                        <img src="assets/img/web/smile.svg" alt="smile" width="20%">
                        <br><br>
                        <h3>Pour tous</h3>
                    
                    </div>

                </div>

            </div>        

        </div>

    <!-- transition Container End -->

    <!-- advantages Container -->

        <div class="container-fluid py-5" id="homepage-advantages">

            <div class="container py-3">

                <div class="row justify-content-center pb-5">

                    <div class="col-md-10 text-center justify-content-center">

                        <h2>Beaucoup plus avec Connect</h2>
                    
                    </div>

                </div>
                
                <div class="row justify-content-center mb-5">

                    <div class="col-md-10 p-4">
                        
                        <div class="row">

                            <div class="col">

                                <h3>Informations & ressources</h3>
                                <p>Accédez à un catalogue large et varié, des infos gouvernementales, aux bons plans en passant par la culture.</p>
                                
                            </div>

                            <div class="col">
                                <img src="assets/img/web/allinone.svg" alt="all in one" width="85%">
                            </div>

                        </div>    
                    
                    </div>

                </div>

                <div class="row justify-content-center mb-5">

                    <div class="col-md-10 p-4">
                        
                        <div class="row">

                            <div class="col">
                                <img src="assets/img/web/unity.svg" alt="unity" width="85%">
                            </div>

                            <div class="col">

                                <h3>Ta communauté</h3>
                                <p>Connect c'est aussi un endroit pour retrouver d'autres étudiants : De même origine, partageant la même passion ou tout simplement habitant la même ville.</p>
                                
                            </div>
                        </div>    
                    
                    </div>

                </div>
                
                <div class="row justify-content-center mb-5">

                    <div class="col-md-10 p-4">
                        
                        <div class="row">

                            <div class="col">

                                <h3>La zone d'entraide</h3>
                                <p>L'espace d'entraide est organisé pour que vous puissiez poser vos questions ou pour répondre à celles des autres.</p>
                                
                            </div>
                            
                            <div class="col">
                                <img src="assets/img/web/entraide.svg" alt="logo" width="85%">
                            </div>

                        </div>    
                    
                    </div>

                </div>     

                <div class="row justify-content-center py-5">

                    <div class="col-md-10 text-center justify-content-center">

                        <h2>Plein d'autres avantages à venir...</h2>
                    
                    </div>

                </div>
            </div>        

        </div>

    <!-- advantages Container End -->

    <!-- Prefooter -->
        <?php include_once 'components/prefooter.php'; ?>
    <!-- Prefooter end -->

    <!-- Footer -->
        <?php include_once 'components/footer.php'; ?>
    <!-- Footer End -->    

    <!-- JavaScript -->
    <script src="assets/js/style.js"></script>

</body>
</html>