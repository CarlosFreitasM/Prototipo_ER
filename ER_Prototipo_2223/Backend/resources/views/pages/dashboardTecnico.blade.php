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
            
            <!-- Items-->
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
                <!--Ferramenta 4-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#erro">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
            </div>
                        <img class="img-fluid" src="assets/img/burlas/erros.png" alt="..." />
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
				<!-- Fazer espaço -->
				<div class="col-lg-4 mb-5 mb-lg-0">
				</div>
                <!-- Footer About Text-->
                <div class="col-lg-4 mb-5 mb-lg-0">
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
<!--Pop-Ups-->
    <div class="portfolio-modal modal fade" id="atribuirTags" tabindex="-1" aria-labelledby="atribuirTags" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Atualizar Tags:</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/burlas/tags.png" width="300" height="300" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Atribua Tags </p>
                                <table class="table table-dark table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nome cliente</th>
                                            <th scope="col">Descrição</th>
                                            <th scope="col">Tag</th>
                                            <th scope="col">Data de Adição</th>
                                            <th scope="col">Ações</th>
                                        </tr>
                                    
                                      
                                    </thead>
                                    <tbody>
                                        @foreach($tecReports as $report)
                                            <tr>
                                                <td>
                                                    {{ $report->id }}
                                                </td>
                                                <td>
                                                    {{ $report->fullname_cliente }}
                                                </td>
                                                <td>
                                                    {{ $report->description }}
                                                </td>
                                                <td id="tag-edit-{{ $report->id }}" data-reportid="{{ $report->id }}"> 
                                                    {{ $report->getTag->tagDescription }}
                                                </td>
                                                <td>
                                                    {{ $report->created_at }}
                                                </td>
                                                <!-- <td>
                                                    <button id="edit-{{ $report->id }}" data-tagid="{{ $report->getTag->id }}">
                                                        Editar
                                                    </button>
                                                </td>-->
                                                <td>
                                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                                        <button type="button" class="btn btn-danger">Apagar</button>
                                                        <button type="button" class="btn btn-warning" data-tagEdit="{{ $report->id }}">Editar</button>
                                                        <button type="button" class="btn btn-success">Atribuir</button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                      
                                    </tbody>
                                </table>

                                    <div> <br> </div>
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
    <!-- Atualizar Entidades Competentes-->
    <div class="portfolio-modal modal fade" id="atualizarEntidades" tabindex="-1" aria-labelledby="atualizarEntidades" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Atualizar Entidades Competentes:</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/burlas/atualizar.png" width="300" height="300" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Atualizar Entidades Competentes</p>
                                <table class="table table-dark table-striped">
                                    <thead>
        <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Contacto</th>
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
                                        <td colspan="2"></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                </table>

                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger">Apagar</button>
                                        <button type="button" class="btn btn-warning">Editar</button>
                                         <button type="button" class="btn btn-success">Atualizar</button>
                                    </div>
                                    <div> <br> </div>
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
    <!--Atualizar Burlas-->
    <div class="portfolio-modal modal fade" id="atualizarBurlas" tabindex="-1" aria-labelledby="atualizarBurlas" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lista de Burlas:</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/burlas/burlas.png" width="300" height="300" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lista de Burlas Ativas</p>
                                <table class="table table-dark table-striped">
                                    <thead>
                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Estado</th>
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
                                        <td colspan="2"></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                </table>
                    
                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger">Apagar</button>
                                        <button type="button" class="btn btn-warning">Editar</button>
                                         <button type="button" class="btn btn-success">Atribuir</button>
                                    </div>
                                    <div> <br> </div>
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
    <!-- Lista de Erros-->
    <div class="portfolio-modal modal fade" id="erro" tabindex="-1" aria-labelledby="erro" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Portfolio Modal - Title-->
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Lista de Erros:</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/burlas/erros.png" width="300" height="300" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-4">Lista de Burlas Ativas</p>
                                <table class="table table-dark table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tag</th>
                                        <th scope="col">Tipo de erro</th>
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
                                        <td colspan="2"></td>
                                        <td></td>
                                      </tr>
                                    </tbody>
                                </table>

                                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                        <button type="button" class="btn btn-danger">Apagar</button>                                       
                                    </div>
                                    <div> <br> </div>
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
                
                                
</body>

@endsection