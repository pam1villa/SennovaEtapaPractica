@extends('layouts.app')
@section('contenido')

<!-- Tooltip validations start -->
<section class="tooltip-validations" id="tooltip-validation">
    <div class="row">
        <form class="needs-validation" method="POST" action="{{  route('UpdateBdRegional') }}" novalidate>
        @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Actualizar Regional</h4>
                    </div>
                    <div class="card-body">
                        
                            <div class="row">
    
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">

                                    <input type="hidden" value="{{ $updateregional->id }}" name="id" id="id">

                                    <label class="form-label" for="REGIO_Nombre">Nombre Regional</label>
                                    <input type="text" class="form-control" id="REGIO_Nombre" value="{{ $updateregional->REGIO_Nombre }}" name="REGIO_Nombre" required />
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

