<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js']);
   <style>
  
   *{
    margin-top: 2px;
   }
   th{
    background-color: rgb(88, 10, 81) !important;
   }

   td{
    background-color: rgb(247, 221, 242) !important;
   }
  
 
   
   </style>
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col">

            <nav
                class="navbar navbar-expand-sm navbar-dark bg-primary"
            >
                <a class="navbar-brand" href="#">Hola</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                ></button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page"
                                >Iniio <span class="visually-hidden">(current)</span></a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Alumnos</a>
                        </li>
                       
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input
                            class="form-control me-sm-2"
                            type="text"
                            placeholder="Search"
                        />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                            Search
                        </button>
                    </form>
                </div>
            </nav>
            
        </div>
        </div>
        <div class="row">
            <div class="col">
                @yield("contenido3")
            </div>
    </div>
        <div class="row">
            <div class="col">
                @yield("contenido1")
            </div>
            
        </div>

        <div class="row">
            <div class="col">
                @yield("piePagina1")
            </div>
        </div>

</body>
</html>