<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./stylesADama/menuMobileADama.css">
    <link rel="stylesheet" href="./stylesADama/menuDesktopADama.css">
    <link rel="stylesheet" href="./stylesADama/homeADama.css">
    <link rel="stylesheet" href="./stylesADama/servicosADama.css">
    <title>A Dama</title>
</head>
<body>

    <header>
        <!-- -------------------- MENU MOBILE -------------------- -->
        <div id="menu_mobile_adama">
            <!-- LOGO A DAMA -->
            <div id="logo_adama">
                <img src="#" alt="Logo - A Dama">
            </div>

            <!-- MENU -->
            <div id="container_menu_adama">
                <div class="txt_menu_adama">
                    <h5>MENU</h5>
                </div>

                <button id="btn_abrir_menu_adama" type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false">
				    <img id="img_icone_menu_adama" src="./imagensADama/Ícone_Menu.png" alt="Abrir menu">
			    </button>

                <ul id="lista_menu_adama" class="dropdown-menu dropdown-menu-end">
                    <!-- PAINEL ADMINISTRADORA -->
                    <div id="admin_menu_adama">
                        <img class="img_admin_adama" src="./imagensADama/ADM.png" alt="Foto - ADM">
                        <div class="txt_admin_adama">
                            <h4 class="txt_gesiane_adama">Gesiane Carriel</h4>
                            <p class="txt_cabeleireira_adama">Cabeleireira</p>
                        </div>
                    </div>

                    <!-- DROPDOWN -->
                    <li class="itens_menu_aberto_adama">
                        <img src="./imagensADama/Home.png" alt="IMAGEM" width="35" heigth="35">
                        <a class="dropdown-item" type="button" href="/">Home</a>
                    </li>
                    <li class="itens_menu_aberto_adama">
                        <img src="./imagensADama/Tesoura.png" alt="IMAGEM" width="35" heigth="35">
                        <a class="dropdown-item" type="button" href="/servicos">Serviços</a>
                    </li>
                    <li class="itens_menu_aberto_adama">
                        <img src="./imagensADama/Dinheiro.png" alt="IMAGEM" class="img_dolar" width="35" heigth="35">
                        <a class="dropdown-item" type="button" href="/promocoes">Promoções</a>
                    </li>
                    <li class="itens_menu_aberto_adama">
                        <img src="./imagensADama/mulher.png" alt="IMAGEM" width="35" heigth="35">
                        <a class="dropdown-item" type="button" href="/cadastrese">Cadastre-se</a>
                    </li>
                    <li class="itens_menu_aberto_adama">
                        <img src="./imagensADama/Localização.png" alt="IMAGEM" width="35" heigth="35">
                        <a class="dropdown-item" type="button" href="/informacoes">Mais Informações</a>
                    </li>

				    <!-- DIVISÃO DE ABAS -->
				    <li><hr class="dropdown-divider"></li>

				    <!-- DESENVOLVEDORAS A DAMA -->
				    <div class="desenvolvedoras_adama">
					    <p class="txt_devs_adama">Desenvolvido por <h6>@Isabelly Lima @Yara Gomes</h6> </p>
				    </div>
			    </ul>
	        </div>
        </div>

        <!-- -------------------- MENU DESKTOP -------------------- -->
        <div id="menu_desktop_adama">
            <div class="d-flex flex-column flex-shrink-0 menu">
                <a href="/" class="d-block p-2 link-dark text-decoration-none" title="Icon-only" data-bs-toggle="tooltip" data-bs-placement="right">
                    <img src="#" alt="Logo - ADama" class="bi" width="50" height="50"></img>
                </a>
                <ul class="nav nav-pills nav-flush flex-column mb-auto text-center ">
                    <li class="nav-item ">
                        <a href="/" class="nav-link  py-3" title="Home" data-bs-toggle="tooltip" data-bs-placement="right">
                            <img src="./imagensADama/Home.png" class="bi" width="30" height="30" aria-label=""> </img>
                        </a>
                    </li>
                    <li>
                        <a href="/servicos" class="nav-link py-3 " title="Clientes" data-bs-toggle="tooltip" data-bs-placement="right">
                            <img src="./imagensADama/Tesoura.png" class="bi" width="30" height="30" role="img" aria-label=""> </img>
                        </a>
                    </li>
                    <li>
                        <a href="/promocoes" class="nav-link py-3 " title="Lucros" data-bs-toggle="tooltip" data-bs-placement="right">
                            <img src="./imagensADama/Dinheiro.png" class="bi" width="30" height="30" role="img" aria-label=""> </img>
                        </a>
                    </li>
                    <li>
                        <a href="/cadastrese" class="nav-link py-3 " title="Notificações" data-bs-toggle="tooltip" data-bs-placement="right">
                            <img src="./imagensADama/mulher.png" class="bi" width="30" height="30" role="img" aria-label=""> </img>
                        </a>
                    </li>
                    <li>
                        <a href="/informacoes" class="nav-link py-3  " title="Agendamentos" data-bs-toggle="tooltip" data-bs-placement="right">
                            <img src="./imagensADama/Localização.png" class="bi" width="30" height="30" role="img" aria-label=""> </img>
                        </a>
                    </li> 
                </ul>
                <div class="dropdown border-top"></div>
            </div>
        </div>
    </header>

    <!-- CONTEÚDO DAS PÁGINAS -->
    <main>
        <?= $this->renderSection('conteudo'); ?>
    </main>

    <!-- FOOTER -->
    <footer></footer>

    <!-- CHAMAR O SCRIPT DO BOOTSTRAP -->
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>