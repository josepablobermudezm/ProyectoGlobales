@extends('layouts.app')
@section('PageTitle', 'Reportes')
@section('content')
<div class="row justify-content-center align-items-center h-100">
    <div class="col-md-9">
        <div class="card">
            <div class="card-header">Menú de reportes</div>
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="container">
                    <div class="d-flex flex-row justify-content-around align-items-center">
                        <?php if (auth()->user()->tipoUsuario == 'C') { ?>
                        <div class="">
                            <a href="{{ route('CurriculumsMenu') }}"><button id="Button3" class="Button1"
                                    onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label
                                        style="font-size: 20px; cursor: pointer;">Curriculum</label></button></a>
                        </div>
                        <div class="">
                            <a href="{{ route('listaOfertas') }}"><button id="Button4" class="Button1"
                                    onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label
                                        style="font-size: 20px; cursor: pointer;">Ofertas</label></button></a>
                        </div>
                        <?php } ?>
                        <div class=" ">
                            <a href="{{ route('pdf2') }}"><button id="Button2" class="Button1"
                                    onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label
                                        style="font-size: 20px; cursor: pointer;">Empleos</label></button></a>
                        </div>
                        <div class=" ">
                            <a href="{{ route('listaEmpresas') }}"><button id="Button3" class="Button1"
                                    onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label
                                        style="font-size: 20px; cursor: pointer;">Empresas</label></button></a>
                        </div>

                        <div class=" ">
                            <a href="{{ route('pdf5') }}"><button id="Button1" class="Button1"
                                    onclick="CambiarColor(this)"><i class="fas fa-scroll"></i><br><label
                                        style="font-size: 20px; cursor: pointer;">Gráfico</label></button></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection