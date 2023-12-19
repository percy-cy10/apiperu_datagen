
<style>
        /* Otras reglas de estilo */

        button.btn-primary {
            background-color: #002060; /* Cambia a tu color deseado */
        }
    </style>

@extends('layouts.app')

@section('content')

    <!-- Tarjeta 1: Consulta de Datos -->
    <div class="row">
        <div class="col-md-4">

                <div class="card-body">
                    <p class="text-center mb-4"> <strong> CONSULTA DE DATOS</strong></p>

                    <form method="POST" action="{{ url('/consulta') }}">
                        <div class="form-group">
                            <label for="tipoConsulta">Tipo de Consulta</label>
                            <select class="form-control" id="tipoConsulta" name="tipoConsulta">
                                <option value="DNI">DNI</option>
                                <option value="RUC">RUC</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="datoConsulta">Ingrese el dato</label>
                            <input type="text" class="form-control" id="datoConsulta" name="datoConsulta">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Consultar</button>
                    </form>

                </div>

        </div>

        <!-- Tarjeta 2: Información -->
        <div class="col-md-8">
            <p class="text-center mb-4 mt-2"> <strong>INFORACCIÓN</strong></p>
            <div class="card">

                <div class="card-body">


                    <div id="informacion">

                        @if ($mensaje)
                            <div class="alert alert-danger text-center">
                                {{ $mensaje }}
                            </div>
                        @endif

                        @yield('informacion')

                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
