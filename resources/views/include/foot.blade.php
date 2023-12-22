<style>
.footerDetailsAnimated {
    animation: fadeInUp 2s;
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<footer>
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 30vh">
        <div>
            <div class=" d-table d-md-flex" id="footerDetails">
                <div class="col pt-2">
                    <p style="border-bottom: 3px solid white; width: 150px"><b>Serviços</b></p>
                    <ul>
                        <li>Diagnóstico de cães</li>
                        <li>Tratamento de cães</li>
                        <li>Passagem de receitas</li>
                    </ul>
                </div>

                <div class="col pt-2 ">
                    <p style="border-bottom: 3px solid white; width: 150px"><b>Atendimento</b></p>
                    <p>Segunda-feira à Sexta-feira Aberto das 08:00 até 20:30</p>
                    <p>Sábado Aberto das 07:10 até 14:20 </p>
                </div>

                <div class="col pt-2 ">
                    <p style="border-bottom: 3px solid white; width: 150px"><b>Localização</b></p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis atque iste placeat asperiores
                    consequatur, eum nisi dolorum similique obcaecati dignissimos voluptas tenetur porro earum molestias
                    deleniti cum sequi quidem quaerat!
                </div>

                <div class="col pt-2 ">
                    <p style="border-bottom: 3px solid white; width: 150px"><b>Contactos</b></p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis atque iste placeat asperiores
                    consequatur, eum nisi dolorum similique obcaecati dignissimos voluptas tenetur porro earum molestias
                    deleniti cum sequi quidem quaerat!
                </div>
            </div>

            <div class="row pt-3 pb-4">
                <hr>
                <center>Sistema de Diagnóstico de Doenças Caninas. Todos direitos reservados</center>
            </div>
        </div>
    </div>
</footer>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        var animated = document.getElementById("footerDetails");

        var observer = new IntersectionObserver(function(entries) {
            if (entries[0].isIntersecting) {
                animated.classList.add("footerDetailsAnimated");
            } else {
                animated.classList.remove("footerDetailsAnimated");
            }
        });

        observer.observe(animated);
    });
</script>
</body>

</html>