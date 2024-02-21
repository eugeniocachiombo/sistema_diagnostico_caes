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

        @include("diagnostic.form")
    </div>
</main>

<script src="../assets/js/required_filds.js"></script>
@include('include.foot')
