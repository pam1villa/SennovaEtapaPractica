@extends('layouts.app')
@section('contenido')

<!-- Tooltip validations start -->
<section class="tooltip-validations" id="tooltip-validation">
    <div class="row">
        <form class="needs-validation" method="POST" action="{{  route('InsertRegional') }}" novalidate>
        @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Registrar Regional</h4>
                    </div>
                    <div class="card-body">
                        {{-- <p>
                            <code>.{valid/invalid}-feedback</code> classes for <code>.{valid/invalid}-tooltip</code> classes to display
                            validation feedback in a styled tooltip.
                        </p> --}}
                            <div class="row">
    
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                    <label class="form-label" for="REGIO_Nombre">Nombre Regional</label>
                                    <input type="text" class="form-control" id="REGIO_Nombre" placeholder="Ingrese el nombre de la regional" name="REGIO_Nombre" required />
                                    <div class="valid-tooltip">Looks good!</div>
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

