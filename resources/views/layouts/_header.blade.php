<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
-->
<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use>
                </svg>
            </a>

            <style>
              .active
              {
                background-color: cadetblue;
              }

            </style>

            <ul class="ml-auto nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('home') }}" class="nav-link px-2 text-secondary"> {{ config('app.name') }}</a>
                </li>
                <li><a href="{{ route('film.all') }}" class="nav-link px-2 text-white {{ request()->routeIs('film.all') ? ' active' : '' }}">Films</a></li>
                <li><a href="{{ route('film.add') }}" class="nav-link px-2 text-white {{ request()->routeIs('film.add') ? ' active' : '' }}">Add film</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Series</a></li>


                <!--------------------------------------------------------------------------------------------------------------------------------------->
                <div class="btn-group">
                    <button type="button" class="btn btn-secondary  dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Categories
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">See all</a></li>
                        @foreach ($topics as $topic)
                            <li> <a href="#" class="dropdown-item "> {{ $topic->name }} </a> </li>
                        @endforeach
                    </ul>
                </div>
                <!--------------------------------------------------------------------------------------------------------------------------------------->


            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" class="btn btn-outline-light me-2">Login</button>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>
