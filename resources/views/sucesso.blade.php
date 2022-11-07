@extends('layouts.app')

<style>
    .loader {
        position: fixed;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: #fff;

    }
</style>

@section('content')
    <div class="loader">
        <div class="row cont">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <img class="p-3" style="max-width: 400px;"
                    src="{{ asset('assets/images/carrega_resultado.gif') }}"alt="">
                <h5 class="text-secondary text-center">Estamos analisando o seu resultado...</h5>

            </div>
        </div>
    </div>
    <div class="container">
        <div class="bg mt-4 fogos">
            <div class="row">
                <div class="col">
                    <div class="ms-3">
                        <a href="{{route('inicio')}}" class="btn btn-primary"><i class="fa-solid fa-plus me-2"></i>Novo Teste</a>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center  flex-column">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center">
                            <h1 class="text-success">Parabéns!</h1>
                            <h4>
                                O profissional de T.I que combina com você é o que atua com
                            </h4>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class=" d-flex justify-content-center">
                            <div class="teste text-center p-2" style="max-height: 300px; margin-bottom: 20px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg_input">
            <div class="row">
                <div class="col">
                    <div class="p-2">
                        <h5>E aí, Ficou interessado na área? Deixa o seu contato para saber mais.</h5>
                    </div>
                    <div class="m-2">
                        <form action="" method="POST">


                            <div class="input-group mb-3">
                                <input type="text" class="form-control telefone" name="telefone"
                                    placeholder="Seu telefone aqui" aria-label="Seu telefone aqui"
                                    aria-describedby="button-addon2">
                                <button class="btn btn-primary" id="btn_telefone" type="submit"
                                    id="button-addon2">Enviar</button>
                            </div>
                        </form>

                    </div>
                </div>


            </div>

        </div>
    </div>

    @push('js')
        <script>
            $(document).ready(function() {

                $(window).on('load', function() {
                    setTimeout(() => {
                        $('.loader').hide();
                    }, 3000);
                })

                $.ajax({
                    type: 'GET',
                    dataType: 'JSON',
                    url: "{{ route('mostra_quiz') }}",
                    success: function(data) {
                        var dados = [
                            data.questao_1,
                            data.questao_2,
                            data.questao_3,
                            data.questao_4,
                            data.questao_5,
                        ];
                        var cont_a = 0
                        var cont_b = 0
                        var cont_c = 0
                        var cont_d = 0


                        for (let i in dados) {
                            if (dados[i] == 'a') {
                                cont_a++;
                            } else if (dados[i] == 'b') {
                                cont_b++;
                            }
                            if (dados[i] == 'c') {
                                cont_c++;
                            }
                            if (dados[i] == 'd') {
                                cont_d++;
                            }

                        }


                        if (cont_a > cont_b && cont_a > cont_c && cont_a > cont_d) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Suporte Técnico
                               </h1>
                               <span class="text-justify">
                                Você é rápido na resolução de problemas e sabe ouvir as pessoas, procurando sempre ajudá-las em qualquer que seja a situação. Assim, a área da Tecnologia da informação que pode combinar muito bem com você é a de suporte técnico, uma profissão muito necessária nas empresas. "O analista de suporte precisa desenvolver também a paciência, dicção e escrita consistentes para tratar diretamente com as pessoas que solicitam o suporte e podem ter diversos níveis de conhecimento em relação à tecnologia”.
                               </span>`
                            )
                        } else if (cont_b > cont_a && cont_b > cont_c && cont_b > cont_d) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Desenvolvimento de Software
                               </h1>
                               <span class="text-justify">
                                Você e o desenvolvimento de sistemas/ programação foram feitos um para o outro. "Entre as várias habilidades que esse profissional precisa ter, o raciocínio lógico é a mais exigida”. Nessa área da TI, você também pode imaginar uma história, um layout e ter diversas ideias para criar um aplicativo, um jogo ou software. Já imaginou criar aquele game que vira sucesso entre o pessoal da escola? A sua imaginação é que vai te conduzir para essa profissão.
                               </span>`
                            )
                        } else if (cont_c > cont_a && cont_c > cont_a && cont_c > cont_d) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Administração de Banco de Dados
                               </h1>
                               <span class="text-justify">
                                Se preocupar com a segurança dos dados e informações das pessoas é muito importante, principalmente na era em que vivemos, com tantos dados expostos na internet. Por isso, as profissões de administrador(a) de banco de dados e segurança da informação são tão requisitadas atualmente. "Resiliência em situações adversas, firmeza no cumprimento das normas e atenção aliada ao senso de observação dos detalhes são características preponderantes para essa profissão”.
                               </span>`
                            )
                        } else if (cont_d > cont_a && cont_d > cont_b && cont_d > cont_c) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Qualidade de Software
                               </h1>
                               <span class="text-justify">
                                Que legal, você combina com a Qualidade de Software. Você é analítico e muito bom em enxergar as possíveis falhas de um software e as até suas melhorias. Essa ajuda é muito importante na etapa de desenvolvimento de programas, pois entregará o melhor serviço, deixando tanto a empresa desenvolvedora quando os usuários mais felizes.
                               </span>`
                            )
                        } else if (cont_a == cont_b) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Suporte Técnico ou Desenvolvimento de Software
                               </h1>`
                            )

                        } else if (cont_a == cont_c) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Suporte Técnico ou Administração de Banco de Dados
                               </h1>`
                            )

                        } else if (cont_a == cont_d) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Suporte Técnico ou Qualidade de Software
                               </h1>`
                            )
                        } else if (cont_b == cont_c) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Desenvolvimento de Software ou Administração de Banco de Dados
                               </h1>`
                            )
                        } else if (cont_b == cont_d) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Desenvolvimento de Software ou Qualidade de Software
                               </h1>`
                            )
                        } else if (cont_c == cont_d) {
                            $('.teste').html(
                                `<h1 class="text-primary">
                                    Administração de Banco de Dados ou Qualidade de Software
                               </h1>`
                            )
                        }


                    },
                    error: function() {
                        alert('erro');
                    }


                })

                var SPMaskBehavior = function(val) {
                        return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                    },
                    spOptions = {
                        onKeyPress: function(val, e, field, options) {
                            field.mask(SPMaskBehavior.apply({}, arguments), options);
                        }
                    };

                $('.telefone').mask(SPMaskBehavior, spOptions);


                $('#btn_telefone').on('click', function(e) {
                    e.preventDefault();

                    $.ajax({
                        type: 'POST',
                        dataType: 'JSON',
                        url: "{{ route('contato') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            telefone: $('.telefone').val()
                        },
                        success: function(response) {

                            Swal.fire(
                                {
                                    title: 'Parabéns',
                                text: "Muito obrigado por participar do nosso quiz",
                                icon: 'success',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Ok'
                                }
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "{{ route('inicio') }}";
                                }
                            })
                        },
                        error: function() {

                        }
                    })
                })
            })
        </script>
    @endpush
@endsection
