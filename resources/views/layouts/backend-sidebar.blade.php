<nav class="navbar navbar-light bg-white d-flex justify-content-center">
    <a class="navbar-brand" href="/backend/dashboard"><i class="fa fa-wrench"></i> Projeto Digital</a>
    <button type="button" class="close">
        <span>&times;</span>
    </button>
</nav>

<div id="sidebar-body">
    <nav class="list-group">
        <a href="/backend/dashboard" class="list-group-item">
            <i class="fa fa-tachometer"></i> Painel de controle
        </a>

        <a href="#collapseUsersOption" class="list-group-item" data-toggle="collapse">
            <i class="fa fa-users"></i> Usuários
        </a>
        <div class="collapse" id="collapseUsersOption">
            <nav class="list-group">
                @can ('create', \ProjetoDigital\Models\User::class)
                    <a href="/backend/users/create" class="list-group-item">
                        <i class="fa fa-pencil-square-o"></i> Cadastrar
                    </a>
                @endcan

                <a href="/backend/users" class="list-group-item">
                    <i class="fa fa-list-alt"></i> Listar
                </a>
            </nav>
        </div>

        <a href="#collapsePeopleOption" class="list-group-item" data-toggle="collapse">
            <i class="fa fa-user-circle-o"></i> Pessoas
        </a>
        <div class="collapse" id="collapsePeopleOption">
            <nav class="list-group">
                <a href="/backend/people" class="list-group-item">
                    <i class="fa fa-list-alt"></i> Listar
                </a>
            </nav>
        </div>

        <a href="/backend/pending-accounts" class="list-group-item">
            <i class="fa fa-address-card-o"></i> Contas pendentes
        </a>

        <a href="/backend/projects" class="list-group-item">
            <i class="fa fa-file-text"></i> Solicitações
        </a>

        @include ('layouts.last-sidebar-items')
    </nav>
</div>
