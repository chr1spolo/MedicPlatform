@extends("app")

@section('bodyColor', 'class="uk-background-muted"')

@section('custCss')

    <style>
        .uk-navbar-nav>li>a {
            cursor: default;
        }
        .triangle{
            display:block;
            position:relative;
            content:'';
            top: -25px;
            background: inherit;
            box-shadow: -50px 50px 0 #fefeff, 50px -50px 0 #fefeff; /* Change The Hex Values */
            left: 50%;
            width: 50px;
            height: 50px;
            -webkit-transform: translateX(-50%) rotate(45deg);
            transform: translateX(-50%) rotate(45deg);
        }
        .triangle2{
            display:block;
            position:relative;
            content:'';
            bottom: -25px;
            background: inherit;
            box-shadow: -50px 50px 0 #fefeff, 50px -50px 0 #fefeff; /* Change The Hex Values */
            left: 50%;
            width: 50px;
            height: 50px;
            -webkit-transform: translateX(-50%) rotate(45deg);
            transform: translateX(-50%) rotate(45deg);
        }
        .white{
            color: #fff !important;
            text-align: center;
        }
        .padding-t{
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .section2{
            font-size: 30px;
        }
        .degrade{
            background: rgba(226,226,226,1);
            background: -moz-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 0%, rgba(209,209,209,1) 51%, rgba(179,177,177,1) 100%);
            background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(226,226,226,1)), color-stop(24%, rgba(219,219,219,1)), color-stop(51%, rgba(209,209,209,1)), color-stop(100%, rgba(179,177,177,1)));
            background: -webkit-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 0%, rgba(209,209,209,1) 51%, rgba(179,177,177,1) 100%);
            background: -o-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 0%, rgba(209,209,209,1) 51%, rgba(179,177,177,1) 100%);
            background: -ms-linear-gradient(top, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 0%, rgba(209,209,209,1) 51%, rgba(179,177,177,1) 100%);
            background: linear-gradient(to bottom, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 0%, rgba(209,209,209,1) 51%, rgba(179,177,177,1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e2e2e2', endColorstr='#b3b1b1', GradientType=0 );
        }
    </style>
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

@endsection

@section('navbar')
    
        <nav class="uk-navbar-transparent uk-container uk-container-small" uk-navbar>
            <div class="uk-navbar-left">
                
                <img
                src="https://i.pinimg.com/736x/d6/b7/51/d6b751d75c50b98be47a56bd11106334--alternative-cancer-treatments-logos-ideas.jpg" 
                class="uk-navbar-item uk-logo"
                alt="LOGO">
            </div>
            
            <div class="uk-navbar-right">

                <ul class="uk-navbar-nav">
                    <li class="uk-active "> 
                        <a href="#"> 
                            <button class="uk-button uk-button-default"> Iniciar </button>
                        </a>
                    </li>
                    <li> <a href="#"> O </a> </li>
                    <li> 
                        <a href="#"> <button class="uk-button uk-button-default"> Registrate </button> </a>
                    </li>
                </ul>

            </div>
        </nav>
@endsection

@section('main')
    <div class="uk-container uk-container-small">
       <div class="uk-column-1-2">
            <div class="animated uk-card uk-card-body" id="left">
                <img src="http://gerenciaderiesgos.com/wp-content/uploads/2016/11/hogar-icon3.png" alt="" width="100%">
            </div>
            <div class="animated" id="right">
                <h2>Bienvenidos</h2>
                <p>
                    Aquí podrás encontrar tu historial médico en caso de ser un paciente,
                    o por lo contrario eres un doctor, tendrás acceso a las medicinas que dicho paciente 
                    es alergico, historial médico, añadir resultados de citas, editarlas y agregar medicinas
                    utilizadas o recomendadas, así como el paciente puede agregar qué medicinas no fueron favorables.
                </p>
            </div>
        </div>
    </div>
    <!-- endsection -->
    
    <div class="uk-container uk-container-expand" style="padding: 0;
    background: url('http://www.spaceops2018.org/upload/fond/space.jpeg') no-repeat #000;
    background-attachment: fixed;
    background-position: center;">
        <div class="triangle"></div>
        
        <div class="uk-container uk-container-small padding-t">
            <div class="uk-column-1-2 section2 white">
                <div class="animated">
                    <p>
                        La mejor forma de innovar y llevar un control exacto de los medicamentos que cada paciente
                        ha utilizado y el problema que quizás algunos les represente, para de esta forma evitar
                        posibles reacciones
                    </p>
                </div>
                <div class="animated">
                    <p>
                        innecesarias, también se tendrá un correcto analisis de las medicinas
                        utilizadas y los hospitales a los que ha sido atendido, así como poder ampliar la capacidad 
                        del historial medico de cada persona.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="triangle2"></div>
    </div>
    <!-- endsection -->

    <div class="uk-container uk-container-expand" style="padding: 0;">
        <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('http://nxcache.nexon.net/dn/microsite/level70/img/bg/bg_fog1.png');background-size: 100% 100%;">
            <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;" style="color: black;">Proximamente</h1>
                <p uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;" style="color: black;">
                    Se estará desarrollando la app para que también puedas tener acceso desde el dispositivo movil.
                </p>
                <img  uk-parallax="opacity: 0,1; y: 100,0; scale: 1.2,1; viewport: 0.5;" src="https://cdn3.iconfinder.com/data/icons/medical-4-1/512/online_medicine-512.png" alt="" width="30%">
            </div>
        </div>
    </div>
    <!-- endsection -->
    
    <div class="uk-container uk-container-expand degrade" style="padding: 0;">
        <div class="uk-container uk-container-expand">
            <h1 class="uk-heading-line uk-text-right"><span>© Copyright 2017</span></h1>
        </div>
        <div class="uk-container uk-container-small padding-t">
            <article class="uk-comment">
                <header class="uk-grid-medium uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-comment-avatar" src="{{ asset('img/avatar.jpg') }}" width="100" alt="">
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset">Christian Polo - Web developer</a></h4>
                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                            <li><a href="https://github.com/chr1spolo/" target="_blank">Github</a></li>
                            <li><a href="https://www.facebook.com/k1ngle0n" target="_blank">Facebook</a></li>
                        </ul>
                    </div>
                </header>
            </article>
        </div>
    </div>
    <!-- endsection -->
@endsection

@section('custJS')
    
    <script>
        $(document).ready(
            function () {
                $("#left").addClass("bounceInLeft");
                $("#right").addClass("bounceInRight");
            }
        );
    </script>
    
@endsection