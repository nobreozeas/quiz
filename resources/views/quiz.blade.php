@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-light mt-2">Com que profissional de TI você se parece</h1>
        </div>
    </div>
    <form action="{{route('adiciona_quiz')}}" method="POST">
        @csrf
        <div class="bg" id="q1">

            <div class="box">
                <div class="row">
                    <div class="col">
                        <div class="p-3">
                            <span class="">1) Quando a internet ou equipamento eletrônico da sua casa não está
                                funcionando muito bem. Você:</span>
                        </div>
                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="col-12">
                        <div class="card bg-info">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="a" name="questao1"
                                        id="q1a">
                                    <label class="form-check-label" for="q1a">
                                        Pergunto para todos da casa se notaram alguma mudança, para diagnosticar o
                                        problema e ajudar a melhorar. Gosto de colaborar com todos.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-warning">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="b" name="questao1"
                                        id="q1b">
                                    <label class="form-check-label" for="q1b">
                                        Acesso o sistema e descubro o problema para solucioná-lo rapidamente. O (a) sabe tudo da tecnologia está on!
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-danger">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="c" name="questao1"
                                        id="q1c">
                                    <label class="form-check-label" for="q1c">
                                        Ligo para a assistência, pois são profissionais mais capacitados para resolver os problemas da forma mais segura.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-success">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="d" name="questao1"
                                        id="q1d">
                                    <label class="form-check-label" for="q1d">
                                        Eu sou a pessoa que noto a piora na qualidade ou problema e reporto para que alguém assuma e resolva com a expertise necessária.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary me-3 mb-3" type="button" id="btn1">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg" id="q2">
            <div class="box">
                <div class="row">
                    <div class="col">
                        <div class="p-3">
                            <span>2) Quando você pensa na sua profissão, você se imagina:</span>
                        </div>
                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="col-12">
                        <div class="card bg-info" id="btn_2a">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="a" name="questao2"
                                        id="q2a">
                                    <label class="form-check-label" for="q2a">
                                        Ajudando as pessoas com manutenção e soluções de problemas cotidianos e situações mais complexas.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-warning" id="btn_2b">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="b" name="questao2"
                                        id="q2b">
                                    <label class="form-check-label" for="q2b">
                                        Desenvolvendo aplicativos, jogos, sites e até sistemas.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-danger" id="btn_2c">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="c" name="questao2"
                                        id="q2c">
                                    <label class="form-check-label" for="q2c">
                                        Administrando dados e cuidando da segurança de informações confidenciais de usuários da internet, criando soluções inteligentes para melhor protegê-los.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-success" id="btn_2d">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="d" name="questao2"
                                        id="q2d">
                                    <label class="form-check-label" for="q2d">
                                        Utilizando softwares, certificando-me do melhor funcionamento deles e reportando possíveis problemas.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary me-3 mb-3" type="button" id="btn2">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg" id="q3">
            <div class="box">
                <div class="row">
                    <div class="col">
                        <div class="p-3">
                            <span>3) Dentre as opções abaixo, qual você acredita que seja a sua melhor qualidade: </span>
                        </div>
                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="col-12">
                        <div class="card bg-info" id="btn_3a">
                            <div class="card-body">
                               <div class="form-check">
                                    <input class="form-check-input" type="radio" value="a" name="questao3"
                                        id="q3a">
                                    <label class="form-check-label" for="q3a">
                                        Sou eficaz na resolução de problemas.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-warning" id="btn_3b">
                            <div class="card-body">
                               <div class="form-check">
                                    <input class="form-check-input" type="radio" value="b" name="questao3"
                                        id="q3b">
                                    <label class="form-check-label" for="q3b">
                                        Sou criativo(a).
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-danger" id="btn_3c">
                            <div class="card-body">
                               <div class="form-check">
                                    <input class="form-check-input" type="radio" value="c" name="questao3"
                                        id="q3c">
                                    <label class="form-check-label" for="q3c">
                                        Sou astuto(a).
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-success" id="btn_3d">
                            <div class="card-body">
                               <div class="form-check">
                                    <input class="form-check-input" type="radio" value="d" name="questao3"
                                        id="q3d">
                                    <label class="form-check-label" for="q3d">
                                        Sou analítico(a).
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary me-3 mb-3" type="button" id="btn3">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg" id="q4">
            <div class="box">
                <div class="row">
                    <div class="col">
                        <div class="p-3">
                            <span>4) Você está no computador e o software apresenta problemas de funcionamento. Qual solução você apresentaria: </span>
                        </div>
                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="col-12">
                        <div class="card bg-info" id="btn_4a">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="a" name="questao4"
                                        id="q4a">
                                    <label class="form-check-label" for="q4a">
                                        Desenvolveria um aplicativo novo para suprir as necessidades elencadas pelo meu chefe.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-warning" id="btn_4b">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="b" name="questao4"
                                        id="q4b">
                                    <label class="form-check-label" for="q4b">
                                        Encontraria, de forma rápida, o problema do sistema utilizado, levaria a solução à minha equipe e, se necessário, ajudaria no que fosse possível para resolver tudo em conjunto.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-danger" id="btn_4c">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="c" name="questao4"
                                        id="q4c">
                                    <label class="form-check-label" for="q4c">
                                        Avaliaria primeiro se todas as informações e dados dos usuários estão seguras e então pensaria na melhor solução.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-success" id="btn_4d">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="d" name="questao4"
                                        id="q4d">
                                    <label class="form-check-label" for="q4d">
                                        Encontraria o problema no sistema e aplicaria atualizações para modernizar e melhorar o software.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary me-3 mb-3" type="button" id="btn4">Próximo</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg" id="q5">
            <div class="box">
                <div class="row">
                    <div class="col">
                        <div class="p-3">
                            <span>5) No seu tempo livre, você gosta de: </span>
                        </div>
                    </div>
                </div>
                <div class="row ms-2 me-2">
                    <div class="col-12">
                        <div class="card bg-info" id="btn_5a">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="a" name="questao5"
                                        id="q5a">
                                    <label class="form-check-label" for="q5a">
                                        Desenvolveria um aplicativo novo para suprir as necessidades elencadas pelo meu chefe.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-warning" id="btn_5b">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="b" name="questao5"
                                        id="q5b">
                                    <label class="form-check-label" for="q5b">
                                        Desenvolveria um aplicativo novo para suprir as necessidades elencadas pelo meu chefe.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-danger" id="btn_5c">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="c" name="questao5"
                                        id="q5c">
                                    <label class="form-check-label" for="q5c">
                                        Desenvolveria um aplicativo novo para suprir as necessidades elencadas pelo meu chefe.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="card bg-success" id="btn_5d">
                            <div class="card-body">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="d" name="questao5"
                                        id="q5d">
                                    <label class="form-check-label" for="q5d">
                                        Desenvolveria um aplicativo novo para suprir as necessidades elencadas pelo meu chefe.
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-end">
                        <button class="btn btn-primary me-3 mb-3" type="submit"
                            id="btn5">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

@push('js')
<script>
$(document).ready(function() {

    $('#q2').hide();
    $('#q3').hide();
    $('#q4').hide();
    $('#q5').hide();

    $('#btn1').attr("disabled", true)
    $('#btn2').attr("disabled", true)
    $('#btn3').attr("disabled", true)
    $('#btn4').attr("disabled", true)
    $('#btn5').attr("disabled", true)

    $('body').on('change', 'input[name=questao1]', function(){
        console.log($(this))
        if($(this).length != 0){
            $('#btn1').attr("disabled", false)
        }
    })
    $('body').on('change', 'input[name=questao2]', function(){
        console.log($(this))
        if($(this).length != 0){
            $('#btn2').attr("disabled", false)
        }
    })
    $('body').on('change', 'input[name=questao3]', function(){
        console.log($(this))
        if($(this).length != 0){
            $('#btn3').attr("disabled", false)
        }
    })
    $('body').on('change', 'input[name=questao4]', function(){
        console.log($(this))
        if($(this).length != 0){
            $('#btn4').attr("disabled", false)
        }
    })
    $('body').on('change', 'input[name=questao5]', function(){
        console.log($(this))
        if($(this).length != 0){
            $('#btn5').attr("disabled", false)
        }
    })

    $('#btn1').on('click', function() {
        $('#q1').hide();
        $('#q2').show('slow');
    })
    $('#btn2').on('click', function() {
        $('#q2').hide();
        $('#q3').show('slow');
    })
    $('#btn3').on('click', function() {
        $('#q3').hide();
        $('#q4').show('slow');
    })
    $('#btn4').on('click', function() {
        $('#q4').hide();
        $('#q5').show('slow');
    })

});
</script>
@endpush

@endsection
