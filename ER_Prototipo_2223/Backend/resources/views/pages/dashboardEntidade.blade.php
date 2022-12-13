@extends ('layout.layouts')

@section('scripts')

@endsection

@section('header')
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="#page-top"><i class="fa-solid fa-hand-holding-hand mx-1"></i>DASHBOARD ENTIDADE COMPETENTE</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
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

<!--Sinal de Boas vindas-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0"> Bem Vindo {user.name}</h1>
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
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Selecione o que pretende fazer </h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#atualizaEstado">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/burlas/atualizarEstado.png" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#contactaCliente">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/burlas/contactar.png" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#listaBurlas">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                    </div>
                    <img class="img-fluid" src="assets/img/burlas/lista.png" alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>

<!--Footer -->
<footer class="footer text-center">
    <div class="container">
        <div class="row">
            <!-- Footer Location-->
            <div class="col-lg-4 mb-5 mb-lg-0">
                <h4 class="text-uppercase mb-4">Localização</h4>
                <p class="lead mb-0">
                    Funchal,
                    <br />
                    Região Autónoma da Madeira
                </p>
            </div>
            <!-- Footer Social Icons-->
            <div class="col-lg-4 mb-5 mb-lg-0">

            </div>
            <!-- Footer About Text-->
            <div class="col-lg-4">
                <h4 class="text-uppercase mb-4">Colaboração</h4>
                <p class="lead mb-0">
                    Feito em colaboração com a Associação Regional de Defesa dos Direitos do Consumidor Regional,
                    <a href="https://www.madeira.gov.pt/" target="_blank"> saiba mais</a>
                    .
                </p>
            </div>
        </div>
    </div>
</footer>

<!-- Ferramenta atualizar Estado da Burla -->
<div class="portfolio-modal modal fade" id="atualizaEstado" tabindex="-1" aria-labelledby="atualizaEstado" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Atualizar Estado de Burlas</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/burlas/atualizarEstado.png" width="300" height="300" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Atualize o Estado de Burla </p>
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Estado Atual</th>
                                        <th scope="col">Mudar Estado para</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(Request::url()== "http://127.0.0.1:8000/ent")

                                    @foreach($entReports as $report)
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        @if(isset($report->getTag->tagDescription) && isset($report->getState->stateDescription))
                                        <td>
                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td id="state-bur-{{ $report->id }}" data-reportid="{{ $report->getState->id }}">
                                            {{ $report->getState->stateDescription }}
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/ent/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="{{ $report->getState->id }}" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @elseif(isset($report->getTag->tagDescription))
                                        <td>
                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/ent/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @elseif(isset($report->getState->stateDescription))
                                        <td>
                                            -
                                        </td>
                                        <td id="state-bur-{{ $report->id }}" data-reportid="{{ $report->getState->id }}">
                                            {{ $report->getState->stateDescription }}
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/ent/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @else
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/ent/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @endforeach
                                        @elseif(Request::url()== "http://127.0.0.1:8000/entphishing")
                                        @foreach($entReports as $report)
                                        @if(isset($report->getTag->tagDescription) && isset($report->getState->stateDescription))
                                        @if($report->getTag->tagDescription=="Phising")
                                        <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td id="state-bur-{{ $report->id }}" data-reportid="{{ $report->getState->id }}">
                                            {{ $report->getState->stateDescription }}
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entphising/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="{{ $report->getState->id }}" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @elseif(isset($report->getTag->tagDescription))
                                        @if($report->getTag->tagDescription=="Phising")
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entphising/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @elseif(isset($report->getState->stateDescription))
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td id="state-bur-{{ $report->id }}" data-reportid="{{ $report->getState->id }}">
                                            {{ $report->getState->stateDescription }}
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entphising/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @else
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entphising/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @endforeach
                                        @elseif(Request::url()== "http://127.0.0.1:8000/entpharming")
                                            @foreach($entReports as $report)
                                        @if(isset($report->getTag->tagDescription) && isset($report->getState->stateDescription))
                                        @if($report->getTag->tagDescription=="Pharming")
                                        <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td id="state-bur-{{ $report->id }}" data-reportid="{{ $report->getState->id }}">
                                            {{ $report->getState->stateDescription }}
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entpharming/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="{{ $report->getState->id }}" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @elseif(isset($report->getTag->tagDescription))
                                        @if($report->getTag->tagDescription=="Pharming")
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entpharming/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @elseif(isset($report->getState->stateDescription))
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td id="state-bur-{{ $report->id }}" data-reportid="{{ $report->getState->id }}">
                                            {{ $report->getState->stateDescription }}
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entpharming/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="{{ $report->getState->id }}" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @else
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            -
                                        </td>
                                        <td>
                                            <form id="form-bur-{{ $report->id }}" action="/entpharming/{{ $report->id }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <select id="state-{{ $report->id }}-edit" name="stateName">
                                                    @foreach($stateReport as $state)
                                                    <option value="{{$state->id}}">{{$state->stateDescription}}</option>
                                                    @endforeach
                                                </select>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button id="del-{{ $report->id }}" type="button" class="btn btn-primary btn-sm">Apagar</button>
                                                <button id="bur-{{ $report->id }}" type="button" class="btn btn-primary btn-sm" data-stateBur="-" data-repId="{{ $report->id }}">Mudar</button>
                                            </div>
                                        </td>
                                        @endif
                                        @endforeach
                                        @endif
                                </tbody>
                            </table>

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">Apagar</button>
                                <button type="button" class="btn btn-warning">Editar</button>
                                <button type="button" class="btn btn-success">Atualizar</button>
                            </div>
                            <div> <br> </div>
                            <div>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Fechar
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Conctato Cliente -->
<div class="portfolio-modal modal fade" id="contactaCliente" tabindex="-1" aria-labelledby="contactaCliente" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Contactar Cliente</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/burlas/contactar.png" width="300" height="300" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Selecione o cliente que pretende contactar</p>
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Contacto</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($entReports as $report)
                                    <tr>
                                        <td>
                                            {{ $report->id }}
                                        </td>
                                        <td>
                                            {{ $report->fullname_cliente }}
                                        </td>
                                        @if(isset($report->getTag->tagDescription))
                                        <td id="tag-{{ $report->id }}" data-reportid="{{ $report->getTag->id }}">

                                            {{ $report->getTag->tagDescription }}
                                        </td>
                                        <td>
                                            {{ $report->phone_report }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="button" class="btn btn-success">Contactar</button>
                                            </div>
                                        </td>

                                        @else
                                        <td id="tag-{{ $report->id }}" data-reportid="{{ $report->id }}">
                                            -
                                        </td>
                                        <td>
                                            {{ $report->phone_report }}
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                <button type="button" class="btn btn-success">Contactar</button>
                                            </div>
                                        </td>
                                        @endif

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">Apagar</button>
                                <button type="button" class="btn btn-warning">Editar</button>
                                <button type="button" class="btn btn-success">Contactar</button>
                            </div>
                            <div> <br> </div>
                            <div>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Lista Burlas -->
<div class="portfolio-modal modal fade" id="listaBurlas" tabindex="-1" aria-labelledby="listaBurlas" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
            <div class="modal-body text-center pb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <!-- Portfolio Modal - Title-->
                            <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lista de Burlas</h2>
                            <!-- Icon Divider-->
                            <div class="divider-custom">
                                <div class="divider-custom-line"></div>
                                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                <div class="divider-custom-line"></div>
                            </div>
                            <!-- Portfolio Modal - Image-->
                            <img class="img-fluid rounded mb-5" src="assets/img/burlas/lista.png" width="300" height="300" alt="..." />
                            <!-- Portfolio Modal - Text-->
                            <p class="mb-4">Lista de Burlas Ativas</p>
                            <table class="table table-dark table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Data de Adição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">Apagar</button>
                                <button type="button" class="btn btn-warning">Editar</button>
                                <button type="button" class="btn btn-success">Guardar</button>
                            </div>
                            <div> <br> </div>
                            <div>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Fechar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
    function getOptionEnt(id) {


        //Obter o valor da opção
        let text1 = id;
        let result = text1.concat("tag-", id);
        selectElement = document.querySelector("select");
        output = selectElement.value;
        outputSelected = selectElement.options[selectElement.selectedIndex].innerHTML
        tdSelected = document.getElementById(result);

        let form = document.getElementById("form-"+id);
        form.submit();

    }
</script>
@endsection