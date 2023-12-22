<?php include "../resources/views/include/head.blade.php"; ?>
<style>
    .animatedIMG1 {
    animation: animatedIMG1 2s;
    }

    @keyframes animatedIMG1 {
        from {
            opacity: 0;
            transform: translateY(100px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animatedIMG2 {
    animation-name: animatedIMG2;
    animation-duration: 2s;
    /*animation-delay: 0.5s;*/
    }

    @keyframes animatedIMG2 {
        from {
            opacity: 0;
            transform: translateY(-100px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animatedIMG3 {
    animation-name: animatedIMG3;
    animation-duration: 2s;
    /*animation-delay: 1s;*/
    }

    @keyframes animatedIMG3 {
        from {
            opacity: 0;
            transform: translateX(100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animatedIMG4 {
    animation-name: animatedIMG4;
    animation-duration: 2s;
    /*animation-delay: 1.5s;*/
    }

    @keyframes animatedIMG4 {
        from {
            opacity: 0;
            transform: translateX(-100px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>


<main>
    <div class="container d-flex align-items-center" style="min-height: inherit">
        <div class="row">
            <div class="col">
                <h1 class="pt-4 pb-4">Seja Bem-vindo </h1>
                <dl>
                    <dt>Diagnóstico</dt>
                    <dd>
                        Diagnóstico é a identificação de uma doença ou condição médica com base nos sintomas
                        apresentados pelo paciente (animal), exames laboratoriais, imagens médicas, e outras informações
                        relevantes. O diagnóstico é crucial para o desenvolvimento de um plano de tratamento adequado.

                        <div class="container pt-4">
                            <div class="row">
                                <div class="col-8 col-md-3 pt-4" id="animatedIMG1">
                                    <img src="../assets/img/img1.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>

                                <div class="col-8 col-md-3 pt-4" id="animatedIMG2">
                                    <img src="../assets/img/img2.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>

                                <div class="col-8 col-md-3 pt-4" id="animatedIMG3">
                                    <img src="../assets/img/img3.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>

                                <div class="col-8 col-md-3 pt-4" id="animatedIMG4">
                                    <img src="../assets/img/img3.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>
                            </div>
                        </div>
                    </dd>

                    <dt>Tratamento</dt>
                    <dd>
                        O tratamento de um diagnóstico refere-se às intervenções ou ações tomadas para abordar uma
                        condição ou problema identificado por meio de um diagnóstico. O tratamento é projetado para
                        melhorar a situação, aliviar sintomas, corrigir desafios ou promover o bem-estar, dependendo da
                        natureza específica do diagnóstico.
                        <div class="container pt-4">
                            <div class="row">
                                <div class="col-8 col-md-3 pt-4">
                                    <img src="../assets/img/img1.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>

                                <div class="col-8 col-md-3 pt-4">
                                    <img src="../assets/img/img2.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>

                                <div class="col-8 col-md-3 pt-4">
                                    <img src="../assets/img/img3.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>

                                <div class="col-8 col-md-3 pt-4">
                                    <img src="../assets/img/img3.jpg" class="img-fluid " width="100%"
                                        alt="foto não reconhecida" srcset="">
                                </div>
                            </div>
                        </div>
                    
                    </dd>
                </dl>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        AnimatedIMG1();
        AnimatedIMG2();
        AnimatedIMG3();
        AnimatedIMG4();
    });

    function AnimatedIMG1(){
        var animatedIMG1 = document.getElementById("animatedIMG1");
        var ObserverAnimatedIMG1 = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                animatedIMG1.classList.add("animatedIMG1");
            } else {
                animatedIMG1.classList.remove("animatedIMG1");
            }
        });
        ObserverAnimatedIMG1.observe(animatedIMG1);
    }

    function AnimatedIMG2(){
        var animatedIMG2 = document.getElementById("animatedIMG2");
        var ObserverAnimatedIMG2 = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                animatedIMG2.classList.add("animatedIMG2");
            } else {
                animatedIMG2.classList.remove("animatedIMG2");
            }
        });
        ObserverAnimatedIMG2.observe(animatedIMG2);
    }

    function AnimatedIMG3(){
        var animatedIMG3 = document.getElementById("animatedIMG3");
        var ObserverAnimatedIMG3 = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                animatedIMG3.classList.add("animatedIMG3");
            } else {
                animatedIMG3.classList.remove("animatedIMG3");
            }
        });
        ObserverAnimatedIMG3.observe(animatedIMG3);
    }

    function AnimatedIMG4(){
        var animatedIMG4 = document.getElementById("animatedIMG4");
        var ObserverAnimatedIMG4 = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                animatedIMG4.classList.add("animatedIMG4");
            } else {
                animatedIMG4.classList.remove("animatedIMG4");
            }
        });
        ObserverAnimatedIMG4.observe(animatedIMG4);
    }


</script>


<?php include "../resources/views/include/foot.blade.php"; ?>