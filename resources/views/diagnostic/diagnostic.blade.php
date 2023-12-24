@include('include.head')
<link rel="stylesheet" href="../assets/css/animatedIMG.css">
<title>Diagnóstico</title>

<main>
    <div class="container" style="min-height: inherit">
        <div class="row">
            <div class="col">
                <h1 class="pt-5 pb-4"><b>Diagnóstico de cães </b></h1>
                <hr>
            </div>
        </div>

        <form action="/diagnostico" class="" method="post">
            @csrf
            <div class="row g-2">
                <label for="">Quais são os sintomas do cachorro?</label>
                <div class="col-8 col-md-4 d-flex align-items-center">
                    <select class="form-control" name="symptomA" id="symptomA"
                        style="background: rgb(72, 103, 161); color: white">
                        <option value="">Selecione o sintoma... </option>
                    </select>
                    <i class="fas fa-chevron-circle-down" style="color: white; position: relative; left: -32px;"></i>
                </div>

                <div class="col-8 col-md-4 d-flex align-items-center">
                    <select class="form-control" name="symptomB" id="symptomB"
                        style="background: rgb(72, 103, 161); color: white">
                        <option value="">Selecione o sintoma... </option>
                    </select> <i class="fas fa-chevron-circle-down"
                        style="color: white; position: relative; left: -32px;"></i>
                </div>

                <div class="col-8 col-md-4 d-flex align-items-center">
                    <select class="form-control" name="symptomC" id="symptomC"
                        style="background: rgb(72, 103, 161); color: white">
                        <option value="">Selecione o sintoma... </option>
                    </select> <i class="fas fa-chevron-circle-down"
                        style="color: white; position: relative; left: -32px;"></i>
                </div>
            </div>

            <div class="row pt-3">
                <div class="col-6 col-md-3 d-flex align-items-center">
                    <button type="submit" name="btnDiagnostic" name="btnDiagnostic" class="btnDiagnostic form-control">
                        <b>Diagnosticar</b>
                    </button> <i class="fas fa-search" style="color: white; position: relative; left: -32px;"></i>
                </div>
            </div>

            <div class="row pt-3">
                @if (!empty($message) && $message == true)
                    <div class="col">
                        <hr style="padding: 5px">
                        <b>Resultado do diagnóstico</b> <br>
                        Este cachorro está com: <b class="text-danger">Tosse dos canis</b> <br>
                        <b>O que faz: </b> <b class="text-danger">Tosse dos canis</b> é uma doença que <b
                            class="text-danger">causa enflamação das vias respiratórias.</b> <br>
                        <b>Causa da doença:</b> <b class="text-danger">Complexo de vírus e bactérias, como o vírus da
                            parainfluenza e a bactéira Bordetella bronchiseptica.</b>
                    </div>
                @else
                    <div class="col">
                        <hr style="padding: 5px">
                        <b>O Resultado do diagnóstico será exibido aqui</b>
                    </div>
                @endif
            </div>
        </form>
    </div>
</main>

<script src="../assets/js/animatedIMG.js"></script>
@include('include.foot')
