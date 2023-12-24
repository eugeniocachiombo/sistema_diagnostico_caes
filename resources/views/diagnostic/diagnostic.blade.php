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
                        @foreach ($symptoms as $item)
                            <option value="{{ $item->id_sintoma }}">{{ $item->nome_sintoma }}</option>
                        @endforeach
                    </select>
                    <i class="fas fa-chevron-circle-down" style="color: white; position: relative; left: -32px;"></i>
                </div>

                <div class="col-8 col-md-4 d-flex align-items-center">
                    <select class="form-control" name="symptomB" id="symptomB"
                        style="background: rgb(72, 103, 161); color: white">
                        <option value="">Selecione o sintoma... </option>
                        @foreach ($symptoms as $item)
                            <option value="{{ $item->id_sintoma }}">{{ $item->nome_sintoma }}</option>
                        @endforeach
                    </select> <i class="fas fa-chevron-circle-down"
                        style="color: white; position: relative; left: -32px;"></i>
                </div>

                <div class="col-8 col-md-4 d-flex align-items-center">
                    <select class="form-control" name="symptomC" id="symptomC"
                        style="background: rgb(72, 103, 161); color: white">
                        <option value="">Selecione o sintoma... </option>
                        @foreach ($symptoms as $item)
                            <option value="{{ $item->id_sintoma }}">{{ $item->nome_sintoma }}</option>
                        @endforeach
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
                @isset($message)
                    @if (!empty($message))
                        <div class="col pb-5">
                            <hr style="padding: 5px">
                            <b>Resultado do diagnóstico</b> <br>
                            Este cachorro está com: <b class="text-danger">{{ $message[0]->nome_doenca }}</b> <br>
                            <b>O que faz << Consequência>> : </b>
                            <b class="text-danger">{{ $message[0]->consequencia_doenca }}.</b> <br>
                            <b>Causa da doença:</b>
                            <b class="text-danger">{{ $message[0]->causa_doenca }}.</b>
                        </div>
                    @else
                        <div class="col pb-5">
                            <hr style="padding: 5px">
                            <b>Resultado do diagnóstico</b> <br>
                            <b class="text-danger">Infelizmente não foi encontrado doenças com estes sintomas, por favor especifique novamente.</b>
                        </div>
                    @endif
                @endisset

                @if (!isset($message))
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
