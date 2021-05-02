<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SAP FSVP</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/ready.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        
        @livewireStyles 
        <script src="{{asset('js/app.js')}}" defer data-turbolinks-track="reload"></script>
    </head> 
    <body>
        <div class="wrapper">
            <div class="main-header">
                <div class="logo-header">
                    <a href="/" class="logo-letter">
                        SAP - FSVP
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
                </div>
            </div>
                
            <div class="sidebar">
                <div class="scrollbar-inner sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                                <i class="la la-industry"></i>
                                <p>Supplier</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse in" id="collapseExample2" aria-expanded="true">
                                <ul class="nav ml-4">
                                    <li>
                                        <a href="/supplier">
                                            <span class="link-collapse">All Supplier</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#edit">
                                            <span class="link-collapse">Domestic Supplier</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Foreign Supplier</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Emergency Supplier</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="" data-toggle="collapse" href="#collapseExample3" aria-expanded="true">
                                <i class="la la-cubes"></i>
                                <p >Materials</p>
                                <span class="caret"></span>
                            </a>
                        

                            <div class="collapse in" id="collapseExample3" aria-expanded="true">
                                <ul class="nav ml-4">
                                    <li>
                                        <a href="/material?type=Raw Materials">
                                            <span class="link-collapse">Raw Materials</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/material?type=Packaging Material">
                                            <span class="link-collapse">Packaging Materials</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/material?type=Misc/Other">
                                            <span class="link-collapse">Misc/Other</span>
                                        </a>
                                    </li>
                            
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="/requirements">
                                <i class="la la-cubes"></i>
                                <p>Requirements</p>
                                <span class="caret"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
                <div class="main-panel">
                    <div class="content">
                        {{$slot}}
                    </div>
    
                </div>
            </div>
        </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    </body>
</html>
