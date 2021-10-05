@section('adminheader')
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/admin/adminhome">設定画面TOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse ms-4 justify-content-end" id="navbarSupportedContent">
            <div class="navbar-nav mr-auto">
              <a class="nav-link ms-2" href="/admin/topbanner">TOPバナー新規作成</a>
              <a class="nav-link ms-2" href="#">ニュース新規作成</a>
              <a class="nav-link ms-2" href="#">メンバーリスト新規追加</a>
              <form class="d-flex ms-5" method="post" action="/admin">
                {{ csrf_field() }}
                <input type="hidden" name="logout" value="logout">
                <button class="me-2 btn btn-outline-success" type="submit">ログアウト</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
    </header>
@endsection