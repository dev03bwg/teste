@extends('Layouts.app')

@section('title', 'Home')

@section('content')


<!-- Inicio Home container -->
<div class="home-container">
    <!-- Inicio Barra de navegação -->
    <nav class="navbar navbar-expand-sm fixed-top">
        <div class="container-fluid">

            <a class="navbar-brand" href="#">
                <img src="img/tiex_logo_reduzida.png" width="90" class="d-inline-block ">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse align-text-top justify-content-end" id="navbarNav">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <!--ROUTE PARA LOGIN-->
                        <a class="nav-link" href="{{route('Autenticacao.login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <!--ROUTE PARA REGISTRO-->
                        <a class="nav-link" href="{{route('Autenticacao.registro')}}">Criar conta</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre_nos">Sobre nós</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#servicos">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--/Fim Barra de navegação -->

    <!-- Inicio Header -->
    <header class="home-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">

                <div class="col-lg-10 align-self-end">
                    <img src="img/tiex_logo.png" width="330" height="330" alt="Tiex logo" id="logo-header" />
                </div>

                <div class="col-lg-10 align-self-end">

                    <div class="row" id="icones">
                        <div class="col">
                            <a href=""><i class="bi bi-envelope md-6"></i></a>
                        </div>

                        <div class="col">
                            <a href=""><i class="bi bi-calendar2-week md-6"></i></a>
                        </div>

                        <div class="col">
                            <a href=""><i class="bi bi-person-fill md-6"></i></a>
                        </div>

                        <div class="col">
                            <a href=""><i class="bi bi-headset md-6"></i></a>
                        </div>
                    </div>
                    <div class="row" id="titulos-icon">
                        <div class="col" style="padding:0px 10px;text-align:center;">
                            <h6>E-mail</h6>
                        </div>

                        <div class="col" style="padding:0px 5px;text-align:center;">
                            <h6>Agenda</h6>
                        </div>

                        <div class="col" style="padding:0px 5px;text-align:center;">
                            <h6>Suporte</h6>
                        </div>

                        <div class="col" style="padding:0px 5px;text-align:center;">
                            <h6>Voz</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 align-self-baseline button-header">
                    <h5 class="text-black font-weight-light mb-5" style="margin-top:90px">Sua área de trabalho em um só lugar!</h5>
                    <!-- ROUTE PARA REGISTRO -->
                    <a class="btn btn-primary" href="{{route('Autenticacao.registro')}}">CRIAR NOVA CONTA</a>
                </div>
            </div>
        </div>
    </header>
    <!--/ Fim Header -->
</div>
<!--/Fim Home content-->

<!-- Barra teste -->
<div class="botao-flutuante" id="dock">
    <i class="bi bi-columns-gap" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample" onclick="acao('dock')"></i>
</div>
<div class="collapse collapse-horizontal" id="collapseWidthExample" onmouseleave="acaoBarra('collapseWidthExample')">
    <div id="dockContainer">
        <div id="dockWrapper">
            <div class="cap left"></div>
            <ul class="osx-dock">
                <li class="active">
                    <span>ZURB</span>
                    <a href="https://www.zurb.com">
                        <img alt="Zurb icon" src="https://d33wubrfki0l68.cloudfront.net/31714c00e7f5bf1f440bc8c9f569ea63fbdb89cc/ec0cc/playground/uploads/upload/upload/151/zurb-icon.png" />
                    </a>
                </li>
                <li>
                    <span>LinkedIn</span>
                    <a href="https://www.linkedin.com"><img alt="Linkedin icon" src="https://d33wubrfki0l68.cloudfront.net/71c53d31e16820202404d793049721a42db7ec0c/6e9a2/playground/uploads/upload/upload/154/linkedin-icon.png" /></a>
                </li>
                <li>
                    <span>Notable</span>
                    <a href="https://www.notableapp.com"><img alt="Notable icon" src="https://d33wubrfki0l68.cloudfront.net/b3e14a060fea6c79f7bce1a406dbb1b52c76e32a/0c544/playground/uploads/upload/upload/152/notable-icon.png" /></a>
                </li>
                <li>
                    <span>last.fm</span>
                    <a href="https://www.last.fm"><img alt="Lastfm icon" src="https://d33wubrfki0l68.cloudfront.net/d377f15c758e68f4ef77ce4be6434902fc2d4a6b/cbab8/playground/uploads/upload/upload/155/lastfm-icon.png" /></a>
                </li>
                <li>
                    <span>Facebook</span>
                    <a href="https://www.facebook.com"><img alt="Facebook icon" src="https://d33wubrfki0l68.cloudfront.net/c0779bcdd947e205883f2046aad14b2d66c8f382/f8bfd/playground/uploads/upload/upload/150/facebook-icon.png" /></a>
                </li>
                <li>
                    <span>Google</span>
                    <a href="https://www.google.com"><img alt="Google icon" src="https://d33wubrfki0l68.cloudfront.net/8f32f44c52d529a545730639e257bcb781bdf16b/a8702/playground/uploads/upload/upload/153/google-icon.png" /></a>
                </li>
                <li>
                    <span>Notable</span>
                    <a href="https://www.notableapp.com"><img alt="Notable icon" src="https://d33wubrfki0l68.cloudfront.net/b3e14a060fea6c79f7bce1a406dbb1b52c76e32a/0c544/playground/uploads/upload/upload/152/notable-icon.png" /></a>
                </li>
                <li>
                    <span>last.fm</span>
                    <a href="https://www.last.fm"><img alt="Lastfm icon" src="https://d33wubrfki0l68.cloudfront.net/d377f15c758e68f4ef77ce4be6434902fc2d4a6b/cbab8/playground/uploads/upload/upload/155/lastfm-icon.png" /></a>
                </li>
                <li>
                    <span>Facebook</span>
                    <a href="https://www.facebook.com"><img alt="Facebook icon" src="https://d33wubrfki0l68.cloudfront.net/c0779bcdd947e205883f2046aad14b2d66c8f382/f8bfd/playground/uploads/upload/upload/150/facebook-icon.png" /></a>
                </li>
                <li>
                    <span>Google</span>
                    <a href="https://www.google.com"><img alt="Google icon" src="https://d33wubrfki0l68.cloudfront.net/8f32f44c52d529a545730639e257bcb781bdf16b/a8702/playground/uploads/upload/upload/153/google-icon.png" /></a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!--/Fim barra teste -->

<!--Section Serviços-->
<section id="servicos">
    <h2>Serviços</h2>
    <div class="col-md-12">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md py-2 carousel-text">
                            <h4>Gerência Técnica (GLPI/ZABBIX)</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col-md py-2">
                            <img class="d-block img-fluid" src="img/img3.jpeg" width="647px" height="450px" alt="First slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Telefonia VOIP</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="img/img3.jpeg" width="647px" height="450px" alt="">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Active Directory</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="img/img3.jpeg" width="647px" height="450px" alt="3rd slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Gerência de Arquivos</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="" alt="3rd slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Hospedagem (domínios, sites, e-mails)</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="//placehold.it/900x500/ffcc00" alt="3rd slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Servidores virtuais e hospedagem física</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="//placehold.it/900x500/ffcc00" alt="3rd slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Provimento de acesso à internet</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="//placehold.it/900x500/ffcc00" alt="3rd slide">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col carousel-text">
                            <h4>Cloud (drive, compartilhamento, office)</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it...</p>
                            <button type="button" class="btn btn-sm">Saiba mais</button>
                        </div>
                        <div class="col">
                            <img class="d-block img-fluid" src="//placehold.it/900x500/ffcc00" alt="3rd slide">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>
<!--/Fim Section Serviços-->

<!--Section Contato-->
<section id="contato">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">Contato</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="bi bi-geo-alt-fill"></i>
                <div style="font-size:15px; margin-top:25px;">
                    Rua Miguel Calmon, 61, Edif. Ouro Preto, sala 604, Comércio, Salvador/BA. CEP: 40.015-010.
                </div>
            </div>
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="bi bi-telephone-fill"></i>
                <div style="font-size:17px; margin-top:27px;">
                    Telefone: (71) 9 9259-6388
                </div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="bi bi-envelope-fill"></i>
                <div class="d-block" style="font-size:19px; margin-top:27px;">
                    contato@tiex.tec.br
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ Fim Section Contato-->

<!-- Footer -->
<footer class="py-5" style="background-color: #e7ecef;">
    <div class="container">
        <div class="small text-center text-muted"></div>
        <div class="small text-center text-muted">2022 - ©</div>
    </div>
</footer>
@endsection