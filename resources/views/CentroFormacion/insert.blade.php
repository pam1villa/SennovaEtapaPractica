@extends('layouts.app')
@section('contenido')

<!-- Tooltip validations start -->
<section class="tooltip-validations" id="tooltip-validation">
    <div class="row">
        <form class="needs-validation" method="POST" action="{{  route('InsertCentroFormacion') }}" novalidate>
        @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registrar Centro De Formacion</h4>
                    </div>
                    <div class="card-body">
                        {{-- <p>
                            <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display
                            validation feedback in a styled tooltip.
                        </p> --}}
                            <div class="row">
    
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                    <label class="form-label" for="CENTR_Nombre">Nombre Centro De Formacion</label>
                                    <input type="text" class="form-control" id="CENTR_Nombre" placeholder="Ingrese el nombre del centro" name="CENTR_Nombre" required />
                                    <div class="valid-tooltip">Looks good!</div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label">Seleccione el nombre de la regional</label>
                                        <select class="form-select" arial-label="Default select example" name="id_regional" id="id_regional" required>
                    
                                            @foreach ($objetoretornado as $regionales)
                                            <option value="{{ $regionales->id }}">{{$regionales->REGIO_Nombre}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <br>
                                        <button class="btn btn-primary" type="submit">Registrar</button>
                                   
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>



@include('layouts.footer')
@endsection

