@extends('layouts.mainOutLayout')

@section('title','Comer bien nunca fue tan facil')

@section('sobreContainer')
<section id="frusteate">
</section>
<section id="features" class="pb-5">
  <div class="container">
    <div class="fullDiv text-center mt-5 mb-5">
      <span class="display-4 textoGris">¿Por que <strong>utilizar frust</strong>?</span>
    </div>
    <div class="row pt-5 pl-3 pr-3">
      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4">
          <img src="{{asset('images/inicio/levels.svg')}}" width="150px" height="150px">
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Eficacia</strong></span>
        </div>
        <div class="fullDiv">
          Elaboración de planes alimentarios realizados a medida, acorde a tus requerimientos nutricionales.
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4">
          <img src="{{asset('images/inicio/curriculum.svg')}}" width="150px" height="150px">
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Historial</strong></span>
        </div>
        <div class="fullDiv">
          Guarda y comparte tu estilo de alimentación con nutricionistas o amigos a lo largo del tiempo.
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4">
          <img src="{{asset('images/inicio/idea.svg')}}" width="150px" height="150px">
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Intuitivo</strong></span>
        </div>
        <div class="fullDiv">
          No necesitas de conocimientos previos sobre nutrición para crear planes alimentarios.
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4">
          <img src="{{asset('images/inicio/page.svg')}}" width="150px" height="150px">
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Amigable</strong></span>
        </div>
        <div class="fullDiv">
          Sitio visualmente ordenado, limpio, moderno y de facil orientación para encontrar el contenido.
        </div>
      </div>

    </div>
  </div>
</section>

<section id="llamandoNutricionistas" class="mb-5 textoBlanco">
  <div class="fullDiv text-center pt-3">
    <span class="display-4">¿Te gustaria trabajar en <strong>Frust</strong>?</span>
  </div>

  <div class="container">
    <div class="row pt-5 pl-3 pr-3">
      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4 fontAwH2">
          <i class="fa fa-clock-o" aria-hidden="true"></i>
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Eficiencia</strong></span>
        </div>
        <div class="fullDiv">
          Ahorra tiempo, define porcentajes y factores en base a tu experiencia para todos tus clientes.
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4 fontAwH2">
          <i class="fa fa-money" aria-hidden="true"></i>
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Ingresos</strong></span>
        </div>
        <div class="fullDiv">
          Define una tarifa por entregar atención personalizada a un cliente. Tus servicios, tus tarifas!
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4 fontAwH2">
          <i class="fa fa-home" aria-hidden="true"></i>
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Comodidad</strong></span>
        </div>
        <div class="fullDiv">
          Asesora gente de cualquier zona geografica desde la comodidad de tu hogar.
        </div>
      </div>

      <div class="col-sm-6 col-lg-3 mb-5 text-center">
        <div class="fullDiv mb-4 fontAwH2">
          <i class="fa fa-handshake-o" aria-hidden="true"></i>
        </div>
        <div class="fullDiv mb-2 mt-4">
          <span class="display-2"><strong>Clientes</strong></span>
        </div>
        <div class="fullDiv">
          Aumenta la cantidad de pacientes ofreciendo un servicio de calidad y precios convenientes.
        </div>
      </div>

    </div>
  </div>
</section>

<section id="pruebaGratis">
  <div class="container pt-5 pb-5 mt-5 mb-5">
    <div class="row pb-5">
      <div class="fullDiv text-center">
        <span>Si quieres la mejor version de ti</span><br/>
        <div class="fullDiv text-center">
          <a href="{{ route('register') }}">
            <button style="height: 40px;" type="button" class="btn btn-primary">
              <div class="row">
                <div class="col-10 text-center display-2">
                 <span >Registrate</span>
               </div>
             </div>
           </button>
         </a>
       </div>
       <span>y obtén 30 dias<strong id="diasGratis"> ¡GRATIS!</strong>  </span>
     </div>

   </div>
 </div>
</section>

<section id="llamandoFormularioContacto" class="pb-5 textoBlanco">
 <div class="fullDiv text-center pt-3">
  <span class="display-4">¿Tienes dudas?<br/><strong>Contactate con nosotros</strong></span>
</div>

<div class="container">
  @include('formContacto')
  <div class="text-center pb-5">
   <button  type="button" class="btn btn-outline-success  col-sm-3">
              <div class="row ">
                <div class="col-12 text-center ">
                 <span >Enviar</span>
               </div>
             </div>
           </button>
           </div>
</section>
@endsection

@section('js')
<script>
$(function(){
  location.href = "/#frusteate";
});
</script>
@endsection
