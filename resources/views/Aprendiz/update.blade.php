@extends('layouts.app')
@section('contenido')

<!-- Tooltip validations start -->
<section class="tooltip-validations" id="tooltip-validation">
    <div class="row">
        <form class="needs-validation" method="POST" action="{{  route('UpdateBdAprendiz') }}" novalidate>
        @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Actualizar Aprendiz</h4>
                    </div>
                    <div class="card-body">
                        {{-- <p>
                            <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display
                            validation feedback in a styled tooltip.
                        </p> --}}
                            <div class="row">
    
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">

                                    <input type="hidden" value="{{ $updateAprendiz->id }}" name="id" id="id">

                                    <label class="form-label" for="APREN_Nombre">Nombre Aprendiz</label>
                                    <input type="text" class="form-control" id="APREN_Nombre" value="{{ $updateAprendiz->APREN_Nombre }}" name="APREN_Nombre" required />
                                    <div class="valid-tooltip">Looks good!</div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                    <label class="form-label" for="APREN_Documento">Documento Aprendiz</label>
                                    <input type="text" class="form-control" id="APREN_Documento" value="{{ $updateAprendiz->APREN_Documento }}" name="APREN_Documento" required />
                                    <div class="valid-tooltip">Looks good!</div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                    <label class="form-label" for="APREN_Tipo_Documento">Tipo Documento</label>
                                    <select class="form-select" arial-label="Default select example" value="{{ $updateAprendiz->APREN_Tipo_Documento }}" name="APREN_Tipo_Documento" id="APREN_Tipo_Documento" required>
                                        <option value="CC">Cedula</option>
                                        <option value="TI">Tarjeta De Identidad</option>
                                        <option value="CE">Cedula De Extranjeria</option>
                                    </select>
                                    <div class="valid-tooltip">Looks good!</div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                    <label class="form-label" for="APREN_Genero">Genero Aprendiz</label>
                                    <select class="form-select" arial-label="Default select example" value="{{ $updateAprendiz->APREN_Genero }}"  name="APREN_Genero" id="APREN_Genero" required>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    <div class="valid-tooltip">Looks good!</div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                    <label class="form-label" for="APREN_Estado">Estado Aprendiz</label>
                                    <select class="form-select" arial-label="Default select example" value="{{ $updateAprendiz->APREN_Estado }}" name="APREN_Estado" id="APREN_Estado" required>
                                        <option value="Activo">Activo</option>
                                        <option value="Inactivo">Inactivo</option>
                                    </select>
                                    <div class="valid-tooltip">Looks good!</div>
                                    </div>
                                </div>
 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <br>
                                        <button class="btn btn-primary" type="submit">Actualizar</button>
                                   
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

