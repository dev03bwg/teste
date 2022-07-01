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
                    <img src="img/tiex_logo.png" width="330" height="330" alt="Tiex logo" />
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
                    <div class="row">
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
                            <h6>Comunicação</h6>
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



<!--Section Sobre Nós-->
<section id="sobre_nos">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2>Sobre nós</h2>
                <p style="font-size:20px; font-weight: bold;">A TIEX é uma empresa de tecnologia, do setor de data center, que atende empresas dos mais variados ramos com serviço de computação nuvem, telefonia VOIP, gerenciamento de redes e ambiente para Work Space. </p>
            </div>
        </div>
    </div>

    <div id="mvv">
        <div class="container overflow-hidden">
            <div class="row">
                <div class="col" id="box" style="margin-right:50px">
                    <h4>Missão</h4>
                    <img src="img/icon-missao.png" width="20%">
                    <p>Oferece serviços de tecnologia de alto nível com suporte técnico próximo aos nossos clientes.</p>
                </div>
                <div class="col" id="box" style="margin-right:50px">
                    <h4>Visão</h4>
                    <img src="img/icon-visao.png" width="20%">
                    <p>Ser referência em serviços para ambiente de trabalho cloud.</p>
                </div>
                <div class="col" id="box">
                    <h4>Valores</h4>
                    <img src="img/icon-valores.png" width="20%" style="margin-right:160px">
                    <p>Inovação, organização, atendimento de excelência unido ao comprometimento.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Fim Section Sobre Nós-->

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

 <!-- Barra teste -->
 <div class="dock" id="dock2">
  <div class="dock-container2">
    <div class="trapezio">
        <a class="dock-item2" href="#">
            <span class="tooltip" data-bs-toggle="tooltip" title="Default tooltip">Home</span>
            <img src="img/nav/home.png" alt="home" />
        </a> 
        <a class="dock-item2" href="#"><span>Contact</span><img src="img/nav/email.png" alt="contact" /></a> 
        <a class="dock-item2" href="#"><span>Portfolio</span><img src="img/nav/portfolio.png" alt="portfolio" /></a> 
        <a class="dock-item2" href="#"><span>Music</span><img src="img/nav/music.png" alt="music" /></a> 
        <a class="dock-item2" href="#"><span>Video</span><img src="img/nav/video.png" alt="video" /></a> 
        <a class="dock-item2" href="#"><span>History</span><img src="img/nav/history.png" alt="history" /></a> 
        <a class="dock-item2" href="#"><span>Calendar</span><img src="img/nav/calendar.png" alt="calendar" /></a> 
        <a class="dock-item2" href="#"><span>Links</span><img src="img/nav/link.png" alt="links" /></a> 
        <a class="dock-item2" href="#"><span>RSS</span><img src="img/nav/rss.png" alt="rss" /></a> 
        <a class="dock-item2" href="#"><span>RSS2</span><img src="img/nav/rss2.png" alt="rss" /></a>
    </div>
  </div>
</div>
    <!--/Fim barra teste -->

<!-- Footer -->
<footer class="py-5" style="background-color: #e7ecef;">
    <div class="container">
        <div class="small text-center text-muted"></div>
        <div class="small text-center text-muted">2022 - ©</div>
    </div>
</footer>
@endsection