{{ Form::Open(['route' => 'factores.store', 'method'=>'POST']) }}
<div class="text-center  mb-4 mt-3">
    <span class="display-4">Agregar<strong> factor</strong>
    </span>
</div>
<hr class="col-xs-4">
<div class="row text-center">
 @include('nutricionista.factores.form')
 <div class="   col-sm-6 offset-sm-3 col-md-5 offset-md-4  col-lg-3 offset-lg-5 col-xl-2 offset-xl-0  mt-4 pt-2  pr-5">
    <button type="submit" class="btn btn-primary fullDiv">
        <div class="row">
            <div class="col-2 text-left"">
                <i class="fa fa-plus" aria-hidden="true"></i>   
            </div>
            <div class="col-8 text-center">
                Agregar                  
            </div>
        </div>
    </button> 
</div>
</div> 
{{ Form::Close() }} 
