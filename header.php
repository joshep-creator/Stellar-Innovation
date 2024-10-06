<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Exoplanets</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="p-3 bg-dark text-white">
    <div class="container sticky-top bg-dark" >
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#Home" class="nav-link px-2 text-white"> <i class="bi bi-house"></i></a></li>
                <li><a href="#About" class="nav-link px-2 text-white">About</a></li>
                <li><a href="#Exoplanets" class="nav-link px-2 text-white">Exoplanets</a></li>
                <li><a href="#More" class="nav-link px-2 text-white">More</a></li>
            </ul>

            <!-- Barra de búsqueda -->
            <form class="d-flex" role="search" onsubmit="return searchFunction(event);">
                <input id="searchInput" class="form-control me-2" type="search" placeholder="Search... or  Ctrl + F" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

            <script>
                function searchFunction(event) {
                    event.preventDefault(); // Evitar que el formulario se envíe

                    const input = document.getElementById('searchInput');
                    const filter = input.value.toLowerCase(); // Obtener el valor del input en minúsculas
                    const sections = document.querySelectorAll('section h1, section h2, section p, .card h1, .card h2, .card p, .card h6'); // Seleccionar secciones para buscar

                    // Limpiar resaltados anteriores
                    sections.forEach(section => {
                        section.innerHTML = section.textContent; // Restablecer el texto original
                    });

                    // Si hay un término de búsqueda
                    if (filter) {
                        const regex = new RegExp(`(${filter})`, 'gi'); // Crear expresión regular

                        sections.forEach(section => {
                            if (section.innerText.toLowerCase().includes(filter)) {
                                // Resaltar coincidencias
                                section.innerHTML = section.innerHTML.replace(regex, '<span class="search-result" style="background-color: yellow;">$1</span>');
                            }
                        });
                    }
                }
            </script>

            <style>
                .search-result {
                    background-color: yellow;
                    /* Resaltar los resultados */
                }
            </style>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>