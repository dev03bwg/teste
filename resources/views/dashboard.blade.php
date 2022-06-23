@extends('Layouts.app')

@section('title', 'Dashboard')

@section('content')


<!-- Inicio Dashboard container -->
<div class="dashboard-container">
    <!-- Inicio Barra de navegação -->
    <div class="sidebar">
     <div class="logo_content">
       <div class="logo">
         <div class="logo_name">Logo Tiex</div>
       </div>
       <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
       <li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
       </li>
       <li>
        <!-- Rota Home -->
        <a href="#">
         <i class="bi bi-house-door-fill"></i>
         <span class="links_name">Home</span>
        </a>
        <span class="tooltip">Home</span>
      </li>
       <li>
        <!-- Rota suporte -->
         <a href="#">
         <i class="bi bi-headset"></i>
          <span class="links_name">Suporte</span>
         </a>
         <span class="tooltip">Suporte</span>
       </li>
       <li>
        <!-- Rota voz -->
        <a href="#">
        <i class="bi bi-telephone-fill"></i>
         <span class="links_name">Voz</span>
        </a>
        <span class="tooltip">Voz</span>
      </li>
      <li>
          <!-- Rota plannner -->
        <a href="#">
        <i class="bi bi-journal-bookmark-fill"></i>
         <span class="links_name">Planner</span>
        </a>
        <span class="tooltip">Planner</span>
      </li>
      <li>
          <!--Rota planilha -->
        <a href="#">
         <i class="bi bi-file-spreadsheet-fill"></i>
         <span class="links_name">Planilha</span>
        </a>
        <span class="tooltip">Planilha</span>
      </li>
      <li>
        <!-- Rota Editor -->
        <a href="#">
        <i class="bi bi-pencil-fill"></i>
         <span class="links_name">Editor</span>
        </a>
        <span class="tooltip">Editor</span>
      </li>
      <li>
          <!--Rota Tela de desenho -->
        <a href="#">
        <i class="bi bi-easel-fill"></i>
         <span class="links_name">Tela de desenho</span>
        </a>
        <span class="tooltip">Tela de desenho</span>
      </li>
      <li>
        <!-- Rota sala de reunião -->
        <a href="#">
        <i class="bi bi-person-video3"></i>
         <span class="links_name">Sala de reunião</span>
        </a>
        <span class="tooltip">Sala de reunião</span>
      </li>
      <li>
        <!-- Rota drive -->
        <a href="#">
        <i class="bi bi-cloud-fill"></i>
         <span class="links_name">Drive</span>
        </a>
        <span class="tooltip">Drive</span>
      </li>
     </ul>
   </div>


   
























   




</div>
@endsection