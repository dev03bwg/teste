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

            <div class="collapse navbar-collapse align-text-top justify-content-end"   id="navbarNav">

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
                    <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav><!--/Fim Barra de navegação -->

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
                    <a class="btn btn-primary" href="{{route('Autenticacao.registro')}}">CRIAR NOVA CONTA</a>
                </div>
            </div>
        </div>
    </header> <!--/ Fim Header -->
</div><!--/Fim Home content-->

<!--Section Sobre Nós-->
<section class="page-sections" id="sobre_nos">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2>Sobre nós</h2>
          <p style=" font-size:20px;">A TIEX é uma empresa de tecnologia, do setor de data center, que atende empresas dos mais variados ramos com serviço de computação nuvem, telefonia VOIP, gerenciamento de redes e ambiente para Work Space. </p>
        </div>
      </div>
    </div>
</section><!--/Fim Section Sobre Nós-->

<!--Section Serviços-->
<section class="page-sections" id="servicos">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2>Serviços</h2>

        <div class="container">
                <div class="row g-2">
                    <div class="col-6">
                        <a>CRM</a></br>
                        <a>Telefonia VOIP</a>  
                    </div>
                    <div class="col-6">
                        <a> Active Directory</a></br>
                        <a>Gerência de Arquivos</a>
                    <div class="col-6">
                        <a>Provimento de acesso à internet</a></br>
                        <a>Gerência Técnica (GLPI/ZABBIX)</a>
                    </div>
                    <div class="col-6">
                        <a>Hospedagem (domínios, sites, e-mails)</a></br>
                        <a>Cloud (drive, compartilhamento, office)</a>
                    </div>
                </div>
        </div>

        </div>
      </div>
    </div>
</section><!--/Fim Section Serviços-->

<!--Section Contato-->
<section class="page-section" id="contato">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0">Contato</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
            <i class="bi bi-geo-alt-fill"></i>
            <div style="font-size:15px; margin-top:25px;">Rua Miguel Calmon, 61, Edif. Ouro Preto, sala 604, Comércio, Salvador/BA. CEP: 40.015-010.</div>
          </div>
        <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
        <i class="bi bi-telephone-fill"></i>
          <div style="font-size:17px; margin-top:27px;">Telefone: 71 9 9259.6388;</div>
        </div>
        <div class="col-lg-4 mr-auto text-center">
          <i class="bi bi-envelope-fill"></i>
          <div class="d-block" style="font-size:19px; margin-top:27px;">contato@tiex.tec.br</div>
          
        </div>
        
      </div>
    </div>
</section><!--/ Fim Section Contato-->

<!-- Footer -->
<footer class="py-5" style="background-color: #e7ecef;">
    <div class="container">
      <div class="small text-center text-muted"></div>
      <div class="small text-center text-muted">2022 - ©</div>
    </div>
</footer>
@endsection