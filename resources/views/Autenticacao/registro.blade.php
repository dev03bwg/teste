@extends('Layouts.app')

@section('title', 'Registro')

@section('content')

<!-- Inicio Registro container -->
<div class="registro-container">

    <!-- Inicio Registro centered -->
    <div class="centered">

        <!-- Inicio Registro content -->
        <div class="registro-content">
            <img src="img/tiex_logo.png" width="330" height="330" alt="Tiex logo" />
        </div>
        <!--/ Fim Registro content -->

        <!-- Inicio Registro Form -->
        <div class="registro-form">

            <!-- Inicio Registro Content -->
            <div class="registro-content">

                <h2> Cadastre-se </h2>
                
                <!-- Inicio Form -->
                                    <!--ROUTE PARA REGISTRO-->
                <form method="post" action="{{route('Autenticacao.registro')}}">
                 @csrf
                 <div class="form-group">
                        <div class="input-group">	
                            <div>
                                <i class="bi bi-person-fill"></i>
                                <div id="linha-vertical"></div>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Nome" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">	
                            <div>
                                <i class="bi bi-envelope-fill"></i>
                                <div id="linha-vertical"></div>
                            </div>
                            <input type="text" class="form-control" name="e-mail" placeholder="E-mail" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div>
                                <i class="bi bi-key-fill"></i>
                                <div id="linha-vertical"></div>
                            </div>
                            <input type="password" class="form-control" name="password" placeholder="Senha" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div>
                                <i class="bi bi-key-fill"></i>
                                <div id="linha-vertical"></div>
                            </div>
                            <input type="password" class="form-control" name="confirmar_password" placeholder="Confirmar Senha" />
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block btn-registro" name="submit_login">
                        <div class="input-group-addon">
                            Cadastrar
                            <i class="bi bi-box-arrow-in-right"></i>
                        </div>
                        </button>
                    </div>
                </form><!--/ Fim Form -->

                <div class="login-bottom-links">
                    <a href="" style=" text-decoration: none;" target='_blank'>Tiex Workspace</a> <a href="" style="text-decoration: none;" target='_blank'>GPL</a>. 2019 - 2022.</div>
                </div>

            </div> <!--/Fim Registro Content -->

        </div> <!--/Fim Registro content -->
    </div><!--/Fim Registro centered -->

</div><!--/Fim Registro container -->
@endsection