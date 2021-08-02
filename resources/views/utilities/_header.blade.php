<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="navbar-brand" href="/home">FS IT</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="#navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                          <ul>
                            <li><a class="nav-link" href="/home">Home</a></li>
                            <li class="caret"><a class="nav-link" href="about.html">About</a>
                            <ul>
                              <li><a href="">About Style 1</a></li>
                              <li><a href="">About Style 2</a></li>
                              <li><a href="">About Style 3</a></li>
                              <li><a href="">About Style 4</a></li>
                              <li><a href="">About Style 5</a></li>
                            </ul>
                            </li>
                            <li><a class="nav-link" href="services.html">Services</a></li>
                            <li><a class="nav-link" href="#">Portfolio</a></li>
                            <li class="caret"><a class="nav-link" href="#">Gallery</a>
                              <ul>
                                <li><a href="">Gallery Style 1</a></li>
                                <li><a href="">Gallery Style 2</a></li>
                                <li><a href="">Gallery Style 3</a></li>
                                <li><a href="">Gallery Style 4</a></li>
                                <li><a href="">Gallery Style 5</a></li>
                              </ul>
                            </li>
                            <li><a class="nav-link" href="#">Contact</a></li>
                            <li>
                                <form method="POST" action="/logout" class="nav-link">
                                    @csrf

                                    <button class="text-danger"><i class="nav-icon fas fa-power-off"></i>Logout</button>
                               </form>
                            </li>
                          </ul>
                        </div>
                      </div>
                  </nav>
            </div>
        </div>
    </div>
</header>
