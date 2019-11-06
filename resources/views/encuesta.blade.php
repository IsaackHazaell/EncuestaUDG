<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>Preparatoria 13 - Encuestas</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
      
    <body>
      <div class="topnav" id="myTopnav">
        <img src="{{ Storage::url("../storage/logoudg.png") }}" style="width:65px;" alt="">
      </div>

      <div>
        <h1>Encuestas</h1>
      </div>

      <section style="display: block;" class="body current" id="wizard-p-4" role="tabpanel" aria-labelledby="wizard-h-4" aria-hidden="false">
        <div class="wrapper_row" style="">
          <div class="row js_error_placement_parent step_5">
            <div class="m_header_step" data-step="5">
              <h1 class="js_error_placement quizz_question required_field">¿Cuál es tu época preferida del año para viajar?</h1>
            </div>

            <div class="m_options js_quizz_question">
              <ul>
                <li>
                  <div class="m_option js_ok_ko_class_placement">
                    <input class="m_option_input js_quizz_radio" data-msg-required="Choose one of the options" required="required" type="radio" value="36428" name="participation[promo_response_attributes][response_11732]" id="participation_promo_response_attributes_response_11732_36428" aria-required="true">
                    <label class="m_option_label" for="participation_promo_response_attributes_response_11732_36428">Semana Santa</label>
                  </div>
                </li>
                <li>
                  <div class="m_option js_ok_ko_class_placement">
                    <input class="m_option_input js_quizz_radio" data-msg-required="Choose one of the options" required="required" type="radio" value="36429" name="participation[promo_response_attributes][response_11732]" id="participation_promo_response_attributes_response_11732_36429" aria-required="true">
                    <label class="m_option_label" for="participation_promo_response_attributes_response_11732_36429">Verano</label>
                  </div>
                </li>
                <li>
                  <div class="m_option js_ok_ko_class_placement">
                    <input class="m_option_input js_quizz_radio" data-msg-required="Choose one of the options" required="required" type="radio" value="36430" name="participation[promo_response_attributes][response_11732]" id="participation_promo_response_attributes_response_11732_36430" aria-required="true">
                    <label class="m_option_label" for="participation_promo_response_attributes_response_11732_36430">Navidades</label>
                  </div>
                </li>
                <li>
                  <div class="m_option js_ok_ko_class_placement">
                    <input class="m_option_input js_quizz_radio" data-msg-required="Choose one of the options" required="required" type="radio" value="36431" name="participation[promo_response_attributes][response_11732]" id="participation_promo_response_attributes_response_11732_36431" aria-required="true">
                    <label class="m_option_label" for="participation_promo_response_attributes_response_11732_36431">Otros puentes/fiestas</label>
                  </div>
                </li>
              </ul>
            </div>
          </div><!-- - class=row -->
        </div><!-- - class=wrapper_row -->
      </section>

    </body>            
     
    <link rel="stylesheet" href="{{ asset('adminlte/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/bower_components/Ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminlte/css/skins/skin-blue.min.css')}}">
    {{-- <script src="{{asset('adminlte/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminlte/js/adminlte.min.js')}}"></script> --}}
    
</html>

<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>