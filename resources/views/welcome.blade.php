@extends("app")

@section('bodyColor', 'class="uk-background-muted"')

@section('custCss')

    <style>
        .uk-navbar-nav>li>a {
            cursor: default;
        }
    </style>

@endsection

@section('navbar')
    <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
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
    </div>
@endsection

@section('main')
    
@endsection