<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all5.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all6.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/inputs.css">
    <!-- <link rel="stylesheet" href="../assets/css/menu.css"> -->
    <script src="../assets/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
     <!--<script src="../assets/jquery/jquery.js"></script> -->

    <style>
        #home:hover, #diganostic:hover, #treatment:hover, #about:hover {
            background: cornflowerblue;
            color: white;
        }
    </style>
</head>

<body>
    <header>
        <div class="container " style="min-height: inherit">
            <center class="d-flex justify-content-center align-items-center" style="min-height: inherit">
                <div class="d-md-table">
                    <div class="col pt-5">
                        <hr class="d-none" style="padding: 5px; background: white; color: white">
                    </div>

                    <div class="col d-none d-md-block justify-content-center align-items-end"
                        style="min-height: inherit; padding: 30px; border: 10px solid white; border-radius: 50%; width: 50%">
                        <i class="fas fa-clinic-medical display-3"></i>
                    </div>

                    <div class="col d-flex d-md-none justify-content-center align-items-end" 
                        style="min-height: inherit; padding: 30px; border: 10px solid white; border-radius: 50%; width: 50%">
                        <i class="fas fa-clinic-medical display-3"></i>
                    </div>

                    <div class="col pt-2 d-none d-md-block justify-content-center align-items-center"
                        style="min-height: inherit">
                        <b>Sistema de Diagnóstico de Doenças Caninas</b>
                    </div>

                    <div class="col pt-2 d-flex d-md-none justify-content-start align-items-center"
                        style="min-height: inherit; font-size: 15px">
                        <b>Sistema de Diagnóstico de Doenças Caninas</b>
                    </div>
                    <hr style="padding: 5px; background: white; color: white">
                </div>
            </center>
        </div>

        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-inverse " style="background: rgb(72, 103, 161)">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><b class="d-lg-none">Menu</b></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link  " id="home" href="/">Página Inicial</a>
                            <a class="nav-link  " id="diganostic" href="/diagnostico">Diagnóstico</a>
                            <a class="nav-link  " id="treatment" href="/tratamento">Tratamento</a>
                            <a class="nav-link  " id="about" href="#">Sobre</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <script>
        let home = document.querySelector("#home");
        let diganostic = document.querySelector("#diganostic");
        let treatment = document.querySelector("#treatment");
        let about = document.querySelector("#about");
        let path = window.location.pathname;

        switch (path) {
            case "/":
                home.classList.add("active");
            break;

            case "/diagnostico":
                diganostic.classList.add("active");
            break;
        
            default:
            
            break;
        }
    </script>