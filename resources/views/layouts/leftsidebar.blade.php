<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <style>
            .sidebar {
                width: 30%;
                height: 100vh;
                position: fixed;
                background-color: #343a40; /* Set sidebar background color */
                color: white; /* Set text color */
                overflow-y: auto; /* Enable vertical scrolling if content exceeds viewport height */
            }
        
            .nav-item:hover {
                background-color: #495057; /* Change the background color on hover */
            }
        
            .nav-link {
                color: white; /* Change the text color */
            }
          
        </style>
        <nav class="col-md-6 col-lg-2 d-md-block sidebar position-fixed bg-color">
            <div class="position-sticky pt-3">
              <ul class="nav flex-column">
                 <li class="nav-item">
                  <a class="nav-link text-white" href="{{ URL::route('dashboard.index') }}"
                    onclick="showContent('dashboard')">
                    Dashboard
                  </a>
                </li> 

                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ URL::route('genres.list') }}"
                    onclick="showContent('genre')">
                    Genre
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link text-white" href="{{ URL::route('movie.create') }}"
                    onclick="showContent('movie')">
                    Movie
                  </a>
                </li>
            </div>
        </nav>
    </div>
</div>
<script>
    const subscriptionDropdown = document.getElementById('subscriptionDropdown')
    subscriptionDropdown.addEventListener('click', function (event) {
      event.stopPropagation(); // Prevent menu close on dropdown item click
    })
  </script>
