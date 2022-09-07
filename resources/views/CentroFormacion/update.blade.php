@extends('layouts.app')
@section('contenido')

<!-- Tooltip validations start -->
<section class="tooltip-validations" id="tooltip-validation">
    <div class="row">
        <form class="needs-validation" method="POST" action="{{  route('UpdateBdCentroFormacion') }}" novalidate>
        @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Actualizar Centro De Formacion</h4>
                    </div>
                    <div class="card-body">
                        
                            <div class="row">
    
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">

                                    <input type="hidden" value="{{ $updatecentroformacion->id }}" name="id" id="id">

                                    <label class="form-label" for="CENTR_Nombre">Nombre Centro De Formacion</label>
                                    <input type="text" class="form-control" id="CENTR_Nombre" value="{{ $updatecentroformacion->CENTR_Nombre }}" name="CENTR_Nombre" required />
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

