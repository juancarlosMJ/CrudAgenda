@extends('layouts/agenda')

@section('tituloPagina','Inicio')

@section('contenido')
<div class="row">
    <div class="col-sm-12">
    <div class="card">
        <div class="card-body">
        <div class="row">
            <div class="col-sm-12">
                <h3>Esta es una genda con laravel 8</h3>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-sm-12">
                        <img src="{{asset('img/ra.jpg')}}" alt="" width="20%">
                        <p style="font-family: 'Roboto', sans-serif;">
                            Agenda
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 