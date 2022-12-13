@extends ('layout.layouts')


@section('scripts')
    
@endsection

@section('header')
    <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><i class="fas fa-exclamation-triangle mx-1"></i>Burlas Online</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#burlas">Burlas Frequentes</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#prevencao">Prevenção</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#reportar">Reportar</a></li>
                    </ul>
                </div>
            <!-- Login -->
            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#login">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white"> 
                            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="#"  aria-expanded="false">
                            <i class="fa-solid fa-user"></i>
                            Login
                        </a></div>
                    </div>        
                </div>
            </div> <!-- div container-->
        </nav>
@endsection

@section('content')

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Aprenda a proteger-se Online!</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Educação - Prevenção - Ajuda</p>
            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="burlas">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Burlas Frequentes</h2>
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
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/burlas/phishing.png" alt="..." />
                        </div>
                    </div>
                    <!-- NEW: Burla 2 Pharming | OLD:Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/burlas/pharming.png" alt="..." />
                        </div>
                    </div>
                    <!--NEW: Burla 3 Spyware | OLD:Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/burlas/spyware.png" alt="..." />
                        </div>
                    </div>
                    <!--NEW: Burla 4 SIM Card Swap | OLD:Portfolio Item 4-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/burlas/sim_card_swap.png" alt="..." />
                        </div>
                    </div>
                    <!--NEW: Burla 5 Shoulder Surfing | OLD:Portfolio Item 5-->
                    <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/burlas/shoulder_surfing.png" alt="..." />
                        </div>
                    </div>
                    <!--NEW: Burla 6 Identity Theft | OLD:Portfolio Item 6-->
                    <div class="col-md-6 col-lg-4">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets/img/burlas/identity_theft.png" alt="..." />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--NEW: Prevenção contra Burlas Online | OLD: About Section-->
     <section class="page-section bg-primary text-white mb-0" id="prevencao">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Prevenção contra Burlas Online</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- NEW: Prevenção contra Burlas Online | OLD: About Section Content-->
                <div class="row">
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Sempre que possível, utilize a autenticação de dois passos, além da password, pode receber um código por sms. Essa medida aumenta a segurança das suas ações online.</p></div>
                    <div class="col-lg-4 ms-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Nunca clique num link de email ou descarregue ficheiros anexos de um remetente desconhecido, mesmo que pareçam ser links de sites de serviços públicos.</p></div>
                    <div class="col-lg-4 ms-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Cuidado com domínios falsos, principalmente se forem parecidos com domínios de instituições oficiais, como as Finanças ou Bancos. Não clique nos links.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Leia sempre os termos e condições dos sites ao subscrever algum serviço, incluindo newsletters, para saber como serão tratados os seus dados pessoais.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Não clique em links promocionais de emails. Se o desconto for do seu interesse, aceda diretamente à loja online e verifique se a promoção é real.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Não confie em mensagens online que aparecem como pop-up nos sites a dizer que ganhou um sorteio ou um prémio.</p></div>
                    <div class="col-lg-4 ms-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Se o seu computador avisar que o site onde acaba de aceder não é seguro, feche este  acesso.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Tenha um programa de antivírus sempre atualizado no seu computador.</p></div>
                    <div class="col-lg-4 ms-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Reveja as configurações de privacidade das suas redes sociais.</p></div>   
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Não acredite em tudo o que lê online.</p></div>
                    <div class="col-lg-4 ms-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Utilize sempre redes seguras.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead"><i class="fas fa-asterisk me-1"></i>Tenha uma password segura.</p></div>
                </div>
                <!--NEW: Prevenção contra Burlas Online | OLD:About Section Button-->
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx" target="_blank">
                        <i class="fas fa-book me-2"></i>
                        Mais Informações!
                    </a>
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="reportar">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Reportar Burla</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row justify-content-center">
                    <div>
                        <form action="/createReport" method="post" > 
                            @csrf
                            <input class="form-control" type="text" name="fullname" placeholder="Nome completo" required><br>
                            <input class="form-control" type="text" name="email" placeholder="Email" required><br>
                            <input class="form-control" type="text" name="phone" placeholder="Telefone" required><br>
                            <textarea class="form-control" style="height: 10rem" type="text" name="message" placeholder="Descrição da burla" required></textarea><br>
                            <label for="tagsName">Tags</label>
                            <select class="form-control" id="tagsName" name="tagsName"><br>
                                <option value=""></option>
                                @foreach($tecTags as $tag)
                                    <option value="{{ $tag->id }}">{{$tag->tagDescription}}</option>
                                @endforeach
                            <input class="form-control" type="hidden" name="state" value="1"><br>
                            <input class="btn btn-primary btn-xl" type="submit" name="report" value="Reportar"><br>

                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
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
                        <h4 class="text-uppercase mb-4">Partilhar</h4>
                        <span class="btn btn-outline-light btn-social mx-1 facebook-btn"><i class="fab fa-fw fa-facebook-f"></i></span>
                        <span class="btn btn-outline-light btn-social mx-1 twitter-btn"><i class="fab fa-fw fa-twitter"></i></span>
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
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; ER Grupo1 2022/2023</small></div>
        </div>
        <!-- BURLAS Conteúdo| OLD: Portfolio Modals-->
        <!-- NEW: Burla 1 Phishing | OLD: Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Phishing</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/burlas/phishing.png" width="300" height="300" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Alguém que se faz passar por uma instituição ou empresa, enviando mensagens fraudulentas (por e-mail ou SMS) ou até com um telefonema. O objetivo é convencer o destinatário a fornecer informações pessoais ou bancárias que serão depois usadas para aceder à sua conta.</p>
                                    <p class="mb-4">No caso das mensagens, acontece frequentemente ser enviado um link para uma página falsa (muitas vezes semelhante à enviada pela entidade oficial e autêntica) que lhe solicita os dados pessoais. Pode surgir também uma janela no site que está a visitar, solicitando o mesmo tipo de informação.</p>
                                    <p class="mb-4">Fonte: <a href="https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx" target="_blank">https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx</a></p> 
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
        <!-- NEW: Burla 2 Pharming | OLD: Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Pharming</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/burlas/pharming.png" width="300" height="300" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Através do download de um ficheiro ou no curso da navegação em sites, é instalado um vírus informático no seu dispositivo eletrónico.</p>
                                    <p class="mb-4">Este vírus direciona para determinada página falsa na internet, a chamada página espelho, onde o utilizador regista, inadvertidamente, os seus dados pessoais, que são depois usados por terceiros.</p>
                                    <p class="mb-4">Fonte: <a href="https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx" target="_blank">https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx</a></p> 
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
        <!--NEW: Burla 3 Spyware |  Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Spyware</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/burlas/spyware.png" width="300" height="300" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Sem que o utilizador se aperceba, é instalado no seu dispositivo um programa malicioso que pode registar dados de maior melindre. Isto pode acontecer num momento do pagamento das suas compras online ou no acesso ao homebanking. Ou seja, quando estiver a registar informação mais sensível ou pessoal.</p>
                                    <p class="mb-4">Fonte: <a href="https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx" target="_blank">https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx</a></p> 
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
        <!--NEW: Burla 4 SIM Card Swap | OLD: Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">SIM Card Swap</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/burlas/sim_card_swap.png" width="300" height="300" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Alguém usa o seu número de telefone – fornecido por si ou tirado das redes sociais – para, fazendo-se passar por si, pedir uma segunda via do seu cartão de telemóvel.</p>
                                    <p class="mb-4">A partir desse momento, todas as chamadas e SMS que receber (incluindo as passwords que o seu banco lhe envia para fazer transações online) são direcionadas para este segundo cartão.</p>
                                    <p class="mb-4">Fonte: <a href="https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx" target="_blank">https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx</a></p> 
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
        <!--NEW: Burla 5 Shoulder Surfing | OLD: Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Shoulder Surfing</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/burlas/shoulder_surfing.png" width="300" height="300" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Num local com uma grande aglomeração de pessoas, alguém que o observa, quando insere as suas passwords ou dados pessoais num telemóvel ou tablet, passa a poder aceder, em seu nome, a esses sites ou aplicações.</p>
                                    <p class="mb-4">Fonte: <a href="https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx" target="_blank">https://www.cgd.pt/Site/Saldo-Positivo/protecao/Pages/fraudes-e-burlas-online-como-proteger.aspx</a></p> 
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
        <!--NEW: Burla 6 Identity Theft | OLD: Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Roubo de Identidade</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/burlas/identity_theft.png" width="300" height="300" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Invadir um perfil do Facebook para extorquir dinheiro é um dos esquemas que mais preocupa a PJ neste momento. O perfil é usurpado por hackers que depois colocam mensagens falsas que são enviadas para os amigos e familiares da pessoa.</p>
                                    <p class="mb-4">Num caso, a pessoa dizia estar a passar por uma situação aflitiva em Espanha e por isso precisava de dinheiro. Os amigos acreditaram e enviarem quantias para um NIB referido no texto. Era fraude. A própria pessoa desconhecia e os amigos e familiares foram lesados em centenas de euros.</p>
                                    <p class="mb-4">Conselho: Proteja o seu computador e telemóvel de ataques informáticos. Não envie dinheiro a nenhum amigo através de conta indicada numa rede social. </p>
                                    <p class="mb-4">Fonte: <a href="https://www.dn.pt/sociedade/cinco-esquemas-de-burla-pela-net-que-estao-na-moda-5030434.html" target="_blank">https://www.dn.pt/sociedade/cinco-esquemas-de-burla-pela-net-que-estao-na-moda-5030434.html</a></p> 
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
        <!-- FAzer login - Rework do Portfolio Modal -->
        <div class="portfolio-modal modal fade" id="login" tabindex="-1" aria-labelledby="login" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Login</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-user"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- FORM DO LOGIN-->
                                    <div class="container">
                                        <p>
                                            Login não funcional!
                                        </p>
                                        <label for="username"><b>Username</b></label>
                                        <input type="text" placeholder="Enter Username" name="username" required>
                                
                                        <label for="password"><b>Password</b></label>
                                        <input type="password" placeholder="Enter Password" name="password" required>
                                
                                        <button type="submit">Login</button>
                                        <label>
                                            <input type="checkbox" checked="checked" name="remember"> Remember me
                                        </label>
                                    </div>
                                    <!-- Fim do form do Login -->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Links para as outras páginas-->
                                    <h3>Simulação de login:</h3>
                                    <a href="/tec">simular login como técnico</a>
                                    <br>
                                    <a href="/ent">simular login como entidade competente geral</a>
                                    <br>
                                    <a href="/entpharming">simular login como entidade competente de pharming</a>
                                    <br>
                                    <a href="/entphishing">simular login como entidade competente phising</a>
                                    <br>
                                    <br>
                                    
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

@endsection