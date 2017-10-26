{{ Form::Open(['route' => 'categoriasalimentarias.store', 'method'=>'POST']) }}
<div class="text-center  mb-4 mt-3">
    <span class="display-5">Agregar una<strong> categoria</strong>
    </span>
</div>
<hr>
<div class="row text-center">
 @include('admin.categoriasalimentarias.form')
 <div class=" col-sm-6 offset-sm-3 col-md-5 offset-md-4  col-lg-4 offset-lg-4 col-xl-2 offset-xl-0  mt-4 pt-2  ">
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
