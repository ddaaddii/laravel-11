@php
  use App\Tipo_Usuario;
  $permissao = Tipo_Usuario::where('id', auth()->user()->tipo_usuario_id)->first();
@endphp

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-gray elevation-4" style="background-image:url({{ asset('light/img/sidebar-4.jpg') }}); background-size:cover;background-blend-mode:multiply">
  <!-- Brand Logo -->
  <a href="/home" class="brand-link">
    <img src="/img/logo-quadrada.png" alt="Selartec Logo" class="brand-image img-circle elevation-3" >
    <span class="brand-text font-weight-light">Selartec</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    {{-- <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div> --}}

    <!-- SidebarSearch Form -->
    <div class="form-inline mt-3 pb-3 border-bottom border-secondary">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav id="sidebar-menu" class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->

        <li class="nav-item">
          <a href="/home" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
              Home
            </p>
          </a>
        </li>


      @if($permissao->exibir_franquia or $permissao->exibir_usuario or $permissao->exibir_mao_obra or $permissao->exibir_material)
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
            <p>
              Cadastros
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @if($permissao->exibir_usuario)
            <li class="nav-item">
              <a href="/usuarios" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Usuários</p>
              </a>
            </li>
            @endif

            
            @if($permissao->exibir_equipes)
              <li class="nav-item">
                <a href="/equipes" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Equipes</p>
                </a>
              </li>
            @endif
            
            @if($permissao->exibir_colaboradores)
            <li class="nav-item">
              <a href="/colaboradores" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Colaboradores</p>
              </a>
            </li>
            @endif

            <li class="nav-item">
              <a href="/lista-servicos" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Lista de Serviços</p>
              </a>
            </li>
          </ul>
        </li>
        @endif

        {{--  --}}
        @if($permissao->exibir_material)
        <li class="nav-item">
          <a href="/material" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
            <p>Materiais</p>
            <i class="right fas fa-angle-left"></i>
          </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/material" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mostrar</p>
                </a>
              </li>
                <li class="nav-item">
                  <a href="/material/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo</p>
                  </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
            <p>Estoque</p>
            <i class="right fas fa-angle-left"></i>
          </a>
              


              <ul class="nav nav-treeview">
                
                      <li class="nav-item">
                        <a href="/estoque" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Mostrar</p>
                        </a>
                      </li>
                        <li class="nav-item">
                          <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Movimentações</p>
                            <i class="right fas fa-angle-left"></i>
                          </a>
                              <ul class="nav nav-treeview">
                    
                                <li class="nav-item">
                                  <a href="/movimentacoes-estoque" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Mostrar</p>
                                  </a>
                                </li>

                                <li class="nav-item">
                                  <a href="/movimentacoes-estoque/create" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Novo</p>
                                  </a>
                                </li>
                              </ul>
                        </li>
      
              </ul>
        </li>
        @endif
        {{--  --}}

        @if($permissao->exibir_clientes)
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-window-restore"></i>
                <p>Clientes</p>
                <i class="right fas fa-angle-left"></i>
              </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/clientes-institucionais" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Clientes Institucionais</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="/clientes" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Clientes</p>
                      </a>
                    </li>
                  </ul>
            </li>
            @endif
        {{--  --}}

        @if($permissao->exibir_ordem_servico or $permissao->criar_ordem_servico)
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
            <p>
              Ordem de Serviço
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @if($permissao->criar_ordem_servico )
                <li class="nav-item">
                  <a href="/ordem-servico/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Nova Ordem de Serviço</p>
                  </a>
                </li>
             @endif   
             @if($permissao->exibir_ordem_servico )  
                <li class="nav-item">
                  <a href="/ordem-servico" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mostrar Ordens de Serviço</p>
                  </a>
                </li>
             @endif 

          </ul>
        </li>
        
    @endif

      @if($permissao->exibir_ordem_servico or $permissao->criar_ordem_servico)
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-window-restore"></i>
            <p>
              Orçamentos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @if($permissao->criar_ordem_servico )
                <li class="nav-item">
                  <a href="/orcamentos/create" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Novo Orçamento</p>
                  </a>
                </li>
             @endif   
             @if($permissao->exibir_ordem_servico )  
                <li class="nav-item">
                  <a href="/orcamentos" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Mostrar Orçamentos</p>
                  </a>
                </li>
             @endif 
          </ul>
        </li>
      @endif
        {{--  --}}

       
    
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  <script>
    var url = window.location;

    var base_url = window.location.origin;
    var baseurl = window.location.origin+window.location.pathname;
    var host = window.location.host;
    var pathArray = window.location.pathname.split( '/' );
    /* console.log(base_url);
    console.log(baseurl);
    console.log(host);
    console.log(pathArray); */
// console.log(url.origin + "/" + pathArray[1]);
// console.log(url.origin);


// Adicionar Classe Active no item unico (Exemplo: HOME)
$('#sidebar-menu ul li a').filter(function(){

    return this.href == url.origin + "/" + pathArray[1];
}).addClass('active');

// Adicionar Classe Active no subitem (Exemplo: Cadastro/Franquias)
// Também adiciona a classe quando se trata de uma página interna do link 
// Exemplo: franquias/create continua Cadastro/Franquias como active
$('#sidebar-menu ul.nav-treeview li a').filter(function () {
        return this.href == url.origin + "/" + pathArray[1];
    }).addClass('active');

// Resolver problema dos links direto para páginas internas
// Exemplo Suporte/Suporte-Sistema/Novo-Chamado
// Endereço é suporte-sistema/create
// Estava aplicando active no item Mostrar também 
$('#sidebar-menu ul.nav-treeview li a').filter(function () {
  return this.href == url.href;

    }).addClass('active');

$('#sidebar-menu ul.nav-treeview li a').filter(function () {
  return this.href == url.href;

    }).parentsUntil('ul').siblings().children().removeClass('active');

// Adicionar Classes no item principal do menu quando uma subitem for acionado
// Exemplo Cadastro/Franquias
// Adicionar classes ao item Cadastro
// console.log(pathArray);

$('#sidebar-menu ul.nav-treeview li a').filter(function() {
  if(this.href == url.href){
    return this.href == url.href;
  } else {
    return this.href == url.origin + "/" + pathArray[1];
  }
}).parentsUntil(".nav-sidebar")
        .css({'display': 'block'})
        .addClass('menu-open')
        .prev('a')
        .addClass('active');
  </script>
</aside>