@extends('Layouts.app')

@section('title', 'Dashboard')

@section('content')


<!-- Inicio Dashboard container -->
<div class="dashboard-container" src="img/bg-datacenter.jpg">
    <!-- Inicio Barra de navegação -->
    <nav class="sidebar">
        <div class="logo_content">
            <div class="logo">
                Logo TIEX
            </div>
        <i class="bi bi-list"></i> 
        <div>
        <ul class="nav-list">
            <li>
                <a href="#">
                    <i class="bi bi-house-door-fill"></i>
                    <!-- Home Dashboard -->
                    <span class="links_name">Home</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-headset"></i>
                    <!-- Suporte -->
                    <span class="links_name">Suporte</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-telephone-fill"></i>
                    <!-- Voz -->
                    <span class="links_name">Voz</span>
                </a>
            </li>
            <li>
                <a href="#">
                <i class="bi bi-journal-bookmark-fill"></i>
                    <!-- Planner-->
                    <span class="links_name">Planner</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-file-spreadsheet-fill"></i>
                    <!-- Planilhas -->
                    <span class="links_name">Planilhas</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-pencil-fill"></i>
                    <!-- Editor -->
                    <span class="links_name">Editor</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-easel-fill"></i>
                    <!-- Tela de Desenhos -->
                    <span class="links_name">Tela de desenhos</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-person-video3"></i>
                    <!-- Sala de Reunião -->
                    <span class="links_name">Sala de reunião</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bi bi-cloud-fill"></i>
                    <!-- Drive -->
                    <span class="links_name">Drive</span>
                </a>
            </li>
        </ul>
    </nav>




</div>
@endsection