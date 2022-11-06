@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="bg mt-4">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <h1>Parabéns</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="fogos d-flex justify-content-center">
                        <div class="teste">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script>
            $(document).ready(function() {
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
                        console.log(dados)
                        $('.teste').html(`${data.id}`)
                    },
                    error: function() {
                        alert('erro');
                    }


                })
            })
        </script>
    @endpush
@endsection
