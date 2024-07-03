<header class="header-main">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-5">
        <a class="navbar-brand" href="{{ route('clients.index') }}">UZINFOCOM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('clients.index') }}">Клиенты</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('clients.create') }}">Добавить клиента</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Акций</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
