<!doctype html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- tailwind cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css">

</head>
<header style="margin-bottom: 2%">
 <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #000000;">
     <a class="navbar-brand" href="#">Navbar</a>
     <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
         aria-expanded="false" aria-label="Toggle navigation"></button>
     <div class="collapse navbar-collapse" id="collapsibleNavId">
         <ul class="navbar-nav me-auto mt-2 mt-lg-0">
             <li class="nav-item">
                 <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">Link</a>
             </li>
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                 <div class="dropdown-menu" aria-labelledby="dropdownId">
                     <a class="dropdown-item" href="#">Action 1</a>
                     <a class="dropdown-item" href="#">Action 2</a>
                 </div>
             </li>
         </ul>
         <form class="d-flex my-2 my-lg-0">
             <input class="form-control me-sm-2" type="text" placeholder="Search">
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
     </div>
 </nav>
</header>
<body>
    <section>
        <div class="container">
            @yield('content')
        </div>
    </section>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>
<footer>
    <div class="footer bg-dark mt-5 text-center "  style="color: whitesmoke">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                     <p> jose andres vargas vargas &copy; 2022</p>
                    
                </div>
            </div>
        </div>
</footer>

</html>
