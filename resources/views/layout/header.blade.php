@section('header')
    <header>
        <nav class="navbar navbar-light navbar-expand-md bg-light">
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" class="logo-img" width="200px" height="auto">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarmenu" aria-controls="navbarmenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarmenu">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="p-3 text-dark" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="p-3 text-dark" href="/news">ニュース</a> 
                    </li>
                    <li class="nav-item">
                        <a class="p-3 text-dark" href="./introduction">メンバー</a> 
                    </li>
                    <li class="nav-item">
                        <a class="p-3 text-dark" href="./contact">お問い合わせ</a> 
                    </li>
                </ul>
            </div>
          </nav>
    </header>
@endsection