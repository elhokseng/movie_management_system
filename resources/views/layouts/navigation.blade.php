<div class="container_fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary p-3">
        <div class="container justify-content-center">
            <!-- Search on the left side -->
            <div class="me-auto d-flex flex-grow-1 justify-content-center">
                <div class="input-group rounded-pill overflow-hidden" style="width: 270px;">
                    <input type="text" class="form-control border-0 p-2" placeholder="Search" aria-label="Search" style="padding-right: 50px;">
                    <button class="btn btn-outline-secondary border-0 position-absolute bg-white" type="button" id="button-addon2" style="right: 0; top: 0; width: 50px; height: 100%; border-radius: 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
      
            <ul class="navbar-nav ms-auto flex-grow-1 justify-content">
                <li class="nav-item">
                    <a class="navbar-brand" href="#">LOGO</a>
              </li>
            </ul>
      
            <div class="ms-5 d-flex justify-content-center">
              <div class="input-group rounded-pill overflow-hidden" style="width: 200px;">
                  <input type="submit" class="form-control border-0 p-2" placeholder="..." aria-label="Search" style="padding-right: 50px;">
                  <button class="btn btn-outline-secondary border-0 position-absolute bg-white" type="button" id="button-addon2" style="right: 0; top: 0; width: 50px; height: 100%; border-radius: 0;">
                      <i class="fas fa-search"></i>
                  </button>
              </div>
          </div>
      
          <div class="ms-3 d-flex justify-content-center">
            <div class="input-group rounded-pill overflow-hidden" style="width: 100px;">
                <input type="submit" class="form-control border-0 p-2" placeholder="..." aria-label="Search" style="padding-right: 50px;">
                <button class="btn btn-outline-secondary border-0 position-absolute bg-white" type="button" id="button-addon2" style="right: 0; top: 0; width: 50px; height: 100%; border-radius: 0;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
      
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a></li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-block m-0">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Log Out</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            </li>
                        @endif
                    @endauth
                @endif
            </ul>
        </div>
    </nav>
            
    {{-- Banner image slider --}}
    {{-- <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 h-50" src="https://imgs.search.brave.com/JQ16Nf3tKuUNraao_j3BXMulJmjaSScE_nTNWUVmeaI/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS12ZWN0b3Iv/Y2luZW1hLW1vdmll/LWZlc3RpdmFsLWhv/cml6b250YWwtc2Fs/ZS1iYW5uZXItdGVt/cGxhdGVfMjMtMjE0/OTk2NDc0Ny5qcGc_/c2l6ZT02MjYmZXh0/PWpwZw" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://imgs.search.brave.com/zAwlvmrT0QiOBEVBinp-Rjve54CT50t-7Wx28xztkJY/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9oNy5h/bGFteS5jb20vY29t/cC9UNTNKMkcvY2lu/YW1hLWZpbG0tY29u/Y2VwdC1tb3ZpZS1j/bGFwcGVyLWJvYXJk/LW9uLW9yYW5nZS1j/b2xvci1iYWNrZ3Jv/dW5kLWJhbm5lci1j/b3B5LXNwYWNlLVQ1/M0oyRy5qcGc" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://imgs.search.brave.com/HljgBt    WcHV2y1ldlQRP3ao2xvocK-qvHRG3zCXPtzb0/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9kMWNz/YXJrejhvYmU5dS5j/bG91ZGZyb250Lm5l/dC9wb3N0ZXJwcmV2/aWV3cy9maWxtLW1v/dmllLW1ha2VyLXlv/dXR1YmUtY2hhbm5l/bC1hcnQtYmFubmVy/LWRlc2lnbi10ZW1w/bGF0ZS00NTJiNTE4/MTUzYWJmYzcxY2E5/MjliOTNlM2ZjMjY3/Zl9zY3JlZW4uanBn/P3RzPTE1ODg1Njgw/ODk" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>   
    
    </div>
     --}}
     
</div>