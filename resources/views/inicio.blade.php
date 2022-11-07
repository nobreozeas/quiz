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

    .cont {
        height: 100%;
    }
</style>
@section('content')
    <div class="loader">

        <div class="row cont">
            <div class="col d-flex flex-column align-items-center justify-content-center">
                <div class="">
                    <div class="spinner-grow text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-secondary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-success" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-danger" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-warning" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-info" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <div class="spinner-grow text-light" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                </div>
                <div>
                    <h5 class="text-secondary">Carregando...</h5>
                </div>
            </div>
        </div>

    </div>
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
                        <a href="{{ route('quiz') }}" class="btn btn-primary"><i class="fa-solid fa-right-to-bracket me-2"></i>Iniciar Teste</a>
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
                    }, 1500);
                })
            })
        </script>
    @endpush
@endsection
