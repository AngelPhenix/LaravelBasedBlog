<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-house-chimney"></i>
        Accueil</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="#">Link
            </a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          @if (Auth::user())
              <li class="nav-item">
                <a class="nav-link active" href="#">Déconnexion
                </a>
              </li>           
          @else
                <li class="nav-item">
                  <a class="nav-link active" href="#">Se connecter
                  </a>
                </li>
          @endif
          <li class="nav-item">
            <a class="nav-link active" href="#">Link
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>