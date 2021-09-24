@section('header')
    <header>
        <nav class="navbar navbar-dark navbar-expand-md bg-dark">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" class="logo-img mx-4" width="350px" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarmenu" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                <ul class="navbar-nav">
                    <li class="nav-item py-3 mx-2">
                        <a class="p-3 text-white" href="/">Home</a>
                    </li>
                    <li class="nav-item py-3 mx-2">
                        <a class="p-3 text-white" href="/news">ニュース</a> 
                    </li>
                    <li class="nav-item py-3 mx-2">
                        <a class="p-3 text-white" href="./introduction">メンバー</a> 
                    </li>
                    <li class="nav-item py-3 mx-2">
                        <a class="p-3 text-white" href="./contact">お問い合わせ</a> 
                    </li>
                </ul>
            </div>
          </nav>
    </header>
@endsection