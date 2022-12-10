@extends ('layout.layouts')

@section('header')
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><i class="fa-solid fa-gear mx-1"></i>DASHBOARD TÉCNICO</a>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button"
                data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#ferramentas">ferramentas</a></li>
                    <a class="nav-link py-3 px-0 px-lg-3 rounded" href="/"><i class="fa-solid fa-arrow-rotate-left mx-1"></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
        
@endsection

@section('content')
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0"> Bem Vindo Técnico {user.name}</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">O que é que pretende fazer hoje?</p>
        </div>
    </header>
    <section class="page-section portfolio" id="ferramentas">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Selecione o que pretende fazer</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Burlas Grid Items-->
            <div class="row justify-content-center">
                <!-- NEW: Burla 1 Phishing | OLD:Portfolio Item 1-->
                
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#atribuirTags">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/burlas/tags.png" alt="..." />
                    </div>
                </div>
                <!-- NEW: Burla 2 Pharming | OLD:Portfolio Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#atualizarEntidades">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/burlas/atualizar.png" alt="..." />
                    </div>
                </div>
                <!--NEW: Burla 3 Spyware | OLD:Portfolio Item 3-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#atualizarBurlas">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/burlas/burlas.png" alt="..." />
                    </div>
                </div>
            </div>
        </div>

    </section>

    <table style="text-align: left; width: 100%;" cellspacing="1" cellpadding="1" border="1">
        
        <tr>
            <th>Full name cliente</th>  
            <th>Email cliente</th>  
            <th>Contacto cliente</th>  
            <th>Descrição cliente</th>  
            <th>Tags</th>
            <th>Ações</th>
        </tr>
        <tbody>
            
                @foreach($tecReports as $report)
                    <tr>
                        <td>
                            {{ $report->fullname_cliente }}
                        </td>
                        <td>
                            {{ $report->email_report }}
                        </td>
                        <td>
                            {{ $report->phone_report }}
                        </td>
                        <td>
                            {{ $report->description }}
                        </td>
                        <td>
                            {{ $report->getTag->tagDescription }}
                        </td>
                        <td>
                            <div id="edit" data-tagid="{{ $report->getTag->id }}">
                                <a href=>Editar</a>
                            </div>
                        </td>
                    <tr>
                @endforeach
                
        <tbody>
    </table>

@endsection