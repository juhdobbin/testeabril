<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags always come first -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php wp_title(''); ?></title>
  <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>

<body class="home">
  <div class="container">
    <header>
      <div class="banner">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/banner.jpg" alt="Financiamento de veículos do HSBC">
      </div>
      <div class="header">
        <nav class="navbar">
          <div class="navbar-header">
            <a class="navbar-brand"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img alt="Quatro Rodas" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png">
            </a>

          </a>
        </div>
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carros <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-2">
                    <ul class="submenu btn">
                      <li>  <a href="#" class="btn-padrao">Ver todos os carros</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul class="submenu">
                      <li><a href="#">Audi</a></li>
                      <li><a href="#">Bentley</a></li>
                      <li><a href="#">BMW</a></li>
                      <li><a href="#">Chevrolet</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul class="submenu">
                      <li><a href="#">Chrysler</a></li>
                      <li><a href="#">Chevrolet</a></li>
                      <li><a href="#">Dodge</a></li>
                      <li><a href="#">Ferrari</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul class="submenu">
                      <li><a href="#">Fiat</a></li>
                      <li><a href="#">Ford</a></li>
                      <li><a href="#">Honda</a></li>
                      <li><a href="#">Hyundai</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul class="submenu">
                      <li><a href="#">JAC Motos</a></li>
                      <li><a href="#">Jaguar</a></li>
                      <li><a href="#">Jeep</a></li>
                      <li><a href="#">Kia</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <ul class="submenu">
                      <li><a href="#">Lamborghini</a></li>
                      <li><a href="#">Mercedes-Benz</a></li>
                      <li><a href="#">Mitsubishi</a></li>
                      <li><a href="#">Volkswagen</a></li>
                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown menu-img">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Testes <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-2">
                    <ul class="submenu menu-lateral">
                      <li class="active"><a href="#">Ver tudo de teste > </a></li>
                      <li><a href="#">Comparativos</a></li>
                      <li><a href="#">Impressões</a></li>
                      <li><a href="#">Longa duração</a></li>
                      <li><a href="#">Teste de pista</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-01.jpg" class="img-responsive" alt="">
                      <p>Ford Focus Fastback Titanium Plus</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-02.jpg" class="img-responsive" alt="">
                      <p>Audi A6 2.0 TFSI</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-03.jpg" class="img-responsive" alt="">
                      <p>Ford EcoSport 1.6 Powershift</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-04.jpg" class="img-responsive" alt="">
                      <p>Audi Q3 1.4</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-05.jpg" class="img-responsive" alt="">
                      <p>BMW 420i Cabriolet</p>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown menu-img">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notícias <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-2">
                    <ul class="submenu menu-lateral">
                      <li class="active"><a href="#">Ver tudo de teste > </a></li>
                      <li><a href="#">Comparativos</a></li>
                      <li><a href="#">Impressões</a></li>
                      <li><a href="#">Longa duração</a></li>
                      <li><a href="#">Teste de pista</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-01.jpg" class="img-responsive" alt="">
                      <p>Ford Focus Fastback Titanium Plus</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-02.jpg" class="img-responsive" alt="">
                      <p>Audi A6 2.0 TFSI</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-03.jpg" class="img-responsive" alt="">
                      <p>Ford EcoSport 1.6 Powershift</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-04.jpg" class="img-responsive" alt="">
                      <p>Audi Q3 1.4</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-05.jpg" class="img-responsive" alt="">
                      <p>BMW 420i Cabriolet</p>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="dropdown menu-img">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Auto-serviço <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-2">
                    <ul class="submenu menu-lateral">
                      <li class="active"><a href="#">Ver tudo de teste > </a></li>
                      <li><a href="#">Comparativos</a></li>
                      <li><a href="#">Impressões</a></li>
                      <li><a href="#">Longa duração</a></li>
                      <li><a href="#">Teste de pista</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-01.jpg" class="img-responsive" alt="">
                      <p>Ford Focus Fastback Titanium Plus</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-02.jpg" class="img-responsive" alt="">
                      <p>Audi A6 2.0 TFSI</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-03.jpg" class="img-responsive" alt="">
                      <p>Ford EcoSport 1.6 Powershift</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-04.jpg" class="img-responsive" alt="">
                      <p>Audi Q3 1.4</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-05.jpg" class="img-responsive" alt="">
                      <p>BMW 420i Cabriolet</p>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="#">Guia de compras</a></li>
          <li class="dropdown menu-img">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tabela FIPE <span class="glyphicon glyphicon-chevron-down"></span></a>
            <ul class="dropdown-menu">
              <li>
                <div class="row">
                  <div class="col-md-2">
                    <ul class="submenu menu-lateral">
                      <li class="active"><a href="#">Ver tudo de teste > </a></li>
                      <li><a href="#">Comparativos</a></li>
                      <li><a href="#">Impressões</a></li>
                      <li><a href="#">Longa duração</a></li>
                      <li><a href="#">Teste de pista</a></li>
                    </ul>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-01.jpg" class="img-responsive" alt="">
                      <p>Ford Focus Fastback Titanium Plus</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-02.jpg" class="img-responsive" alt="">
                      <p>Audi A6 2.0 TFSI</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-03.jpg" class="img-responsive" alt="">
                      <p>Ford EcoSport 1.6 Powershift</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-04.jpg" class="img-responsive" alt="">
                      <p>Audi Q3 1.4</p>
                    </a>
                  </div>
                  <div class="col-md-2">
                    <a href="#">
                      <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/img-menu-05.jpg" class="img-responsive" alt="">
                      <p>BMW 420i Cabriolet</p>
                    </a>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li><a href="#">Assine</a></li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Pesquisar">
          </div>
        </form>
      </nav>
      <div class="menu-secundario">
        <ul class="list-inline">
          <li class="shape">
            <span class="ret"></span>
            <span class="tria"></span>
            <span class="arrow"></span>
            <span class="text">+ acessados</span>
          </li>
          <li><a href="#">Salão do automóvel</a></li>
          <li><a href="#">Renegade</a></li>
          <li><a href="#">Novo sandero</a></li>
          <li><a href="#">Novo fox</a></li>
          <li><a href="#">Novo Ka</a></li>
          <li><a href="#">HB20</a></li>
          <li><a href="#">Duster</a></li>
          <li><a href="#">Golf</a></li>
          <li><a href="#">Corolla</a></li>
          <li><a href="#">Civic</a></li>
          <li><a href="#">IA-ZI</a></li>
        </ul>
      </div>
    </div>
  </header>
</div>
