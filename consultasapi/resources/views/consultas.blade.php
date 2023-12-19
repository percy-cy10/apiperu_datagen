@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h2 class="text-center mb-4">Consulta de Datos</h2>

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
        </div>

        <div class="col-md-6">
            <div class="card">
                
                <h2 class="text-center mb-4 mt-2">Información</h2>
                <div class="card-body" id="informacion">

                    @yield('informacion')

                </div>
            </div>
        </div>

    </div>
</div>

@endsection