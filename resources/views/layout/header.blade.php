@section('header')
    <header>
      <div class="headerarea">
        <div id="nav-toggle">
          <div>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        
        <div id="gloval-nav">
          <nav>
            <ul id="navigation">
              <li><a href="/" class="p-3 text-dark">Home</a></li>
              <li><a href="/news" class="p-3 text-dark">News</a></li>
              <li><a href="./introduction" class="p-3 text-dark">Member</a></li>
              <li><a href="#" class="p-3 text-dark">Guidline</a></li>
              <li><a href="./contact" class="p-3 text-dark">Contact</a></li>
            </ul>
          </nav>
        
          <div id="nav-bg-wrap">
            <div class="nav-bg home"></div>
            <div class="nav-bg news"></div>
            <div class="nav-bg about"></div>
            <div class="nav-bg works"></div>
            <div class="nav-bg contact"></div>
          </div>
        </div>
      </div>
    </header>
@endsection