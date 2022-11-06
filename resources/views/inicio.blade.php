@extends('layouts.app')

<style>

</style>
@section('content')
    <div class="container">
        <div class="bg mt-4">
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column align-items-center justify-content-center p-1">
                        <h1>Quiz</h1>
                        <h5 class="text-center">Com que profissional de TI você se parece?</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="d-flex flex-column align-items-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('assets/images/img_inicio.svg') }}" alt=""
                            width="350">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="d-flex justify-content-center mb-3 mt-3">
                        <a href="{{ route('quiz') }}" class="btn btn-primary">Iniciar Teste</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')

    @endpush
@endsection
