<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <style>
            .sidebar {
                height: 100vh;
                position: fixed;
            }
            .nav-item:hover {
                background-color: #343a40; /* Change the background color on hover */
            }
            .nav-link {
                color: white; /* Change the text color */
            }
        </style>
        <nav class="col-md-6 col-lg-2 d-md-block bg-light sidebar bg-dark position-fixed">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showContent('dashboard')">
                            Dashboard   
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showContent('genre')">
                            Genre
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#" onclick="showContent('movie')">
                            Movie
                        </a>    
                    </li>
                </ul>   
            </div>
        </nav>

        <!-- Main content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="content" id="dashboard" style="display: none;">
                @include('backend.dashboard.dashboard')
            </div>
            <div class="content" id="genre" style="display: none;">
                @include('backend.create_genres')
            </div>
            <div class="content" id="movie" style="display: none;">
                @include('backend.movies.create')
            </div>
        </main>
    </div>
</div>

<script>
    function showContent(id) {
        // Hide all content elements
        var contents = document.querySelectorAll('.content');
        contents.forEach(function(content) {
            content.style.display = 'none';
        });

        // Show the selected content
        var selectedContent = document.getElementById(id);
        selectedContent.style.display = 'block';

        // Remove active class from all nav links
        var navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(function(link) {
            link.classList.remove('active');
        });

        // Add active class to the clicked nav link
        var clickedLink = document.querySelector(`a[href="#"][onclick*="${id}"]`);
        clickedLink.classList.add('active');
    }

    // Show dashboard content when no link is clicked
    window.addEventListener('DOMContentLoaded', function() {
        var dashboardLink = document.querySelector('.nav-link[href="#"][onclick*="dashboard"]');
        dashboardLink.classList.add('active');
        var dashboardContent = document.getElementById('dashboard');
        dashboardContent.style.display = 'block';
    });
</script>
