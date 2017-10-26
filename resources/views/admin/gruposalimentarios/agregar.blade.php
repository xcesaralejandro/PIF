{{ Form::Open(['route' => 'gruposalimentarios.store', 'method'=>'POST']) }}
<div class="text-center  mb-4 mt-3">
    <span class="display-5">Agregar un<strong> grupo</strong>
    </span>
</div>
<hr >
<div class="row text-center">
 @include('admin.gruposalimentarios.form')
 <div class=" col-sm-8 offset-sm-2 col-md-4 offset-md-4  col-lg-3 offset-lg-0 col-xl-3 offset-xl-0  mt-1 pt-2 ">
    <button type="submit" class="btn btn-primary fullDiv btn-agregar">
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
