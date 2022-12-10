
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Burlas - Educação e Ajuda</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Para podermos usar o Bootstrap  -->
        @vite(["resources/css/bootstrap.css", "resources/css/styles.css", "resources/js/components/editarTags.js", "resources/js/scripts.js", "resources/js/bootstrap.js"])
    </head>
    <body id="page-top">
        <!-- Navigation-->
        @yield('header')
        <!-- Masthead-->
        
        @yield('content')
        
       <!-- Footer-->
       <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Localização</h4>
                        <p class="lead mb-0">
                            Funchal,
                            <br />
                            Região Autónoma da Madeira
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Partilhar</h4>
                        <span class="btn btn-outline-light btn-social mx-1 facebook-btn"><i class="fab fa-fw fa-facebook-f"></i></span>
                        <span class="btn btn-outline-light btn-social mx-1 twitter-btn"><i class="fab fa-fw fa-twitter"></i></span>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Colaboração</h4>
                        <p class="lead mb-0">
                            Feito em colaboração com a Associação Regional de Defesa dos Direitos do Consumidor Regional,
                            <a href="https://www.madeira.gov.pt/" target="_blank"> saiba mais</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; ER Grupo1 2022/2023</small></div>
        </div>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        
        
    </body>
</html>
