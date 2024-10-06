<section id=Exoplanets>
    <!-- Start Best Seller -->
    <div class="d-flex justify-content-center align-items-center vh-20">
        <!-- Botón centrado -->
        <button type="submit" class="btn btn-primary" id="explore_button">
            EXPLORE
        </button>
            <div style="width: 100%;" id="seccionOculta">
                <div style="position: relative; padding-bottom: 56.25%; padding-top: 0; height: 0;"><iframe title="Chronicles of Exoplanet Exploration" frameborder="0" width="1200px" height="675px" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" src="https://view.genially.com/6701c1e884539aac21ee2357" type="text/html" allowscriptaccess="always" allowfullscreen="true" scrolling="yes" allownetworking="all"></iframe> </div>
            </div>
            <button id="cerrarExplore" type="button" class="btn btn-secondary">Close</button>
        </dialog>
        <script>
    const mostrarButton = document.getElementById('explore_button');
    const ocultarButton = document.getElementById('cerrarExplore');
    const seccionOculta = document.getElementById('seccionOculta');

    // Mostrar la sección oculta al hacer clic en el botón "Mostrar Sección"
    mostrarButton.addEventListener('click', () => {
        seccionOculta.style.display = 'block'; // Muestra la sección
        mostrarButton.style.display = 'none'; // Oculta el botón de mostrar
    });

    // Ocultar la sección al hacer clic en el botón "Ocultar Sección"
    ocultarButton.addEventListener('click', () => {
        seccionOculta.style.display = 'none'; // Oculta la sección
        mostrarButton.style.display = 'inline'; // Muestra el botón de mostrar de nuevo
    });
</script>

    </div>
    <section class="lattest-product-area pb-40 category-list mt-5" id=More>
        <div class="row">
            <!--Listado con php de los planetas-->
            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombre</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombre</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombre</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

            <!-- single planet 1 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                <?php $contador = 0; ?>
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: 150px; width: auto;">
                    <div class="card-body">
                        <h6>planet..nombrhfhfhfhfhfhfhe</h6>
                        <div class="price">
                            <!--Actual year-->
                            <h6>Year Discover<strong>Year</strong></h6>
                            <!--Before price-->
                            <h6 class="l-through"></h6>
                        </div>
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                            <h6>nasa_vch_descripction</h6>
                            <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                            <button type="button" class="btn btn-secondary" id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
                        </dialog>
                        <script>
                            // Obtener referencias a los elementos del DOM utilizando el identificador único
                            const verMasButton<?php echo $contador; ?> = document.getElementById('verMasButton<?php echo $contador; ?>');
                            const miDialog<?php echo $contador; ?> = document.getElementById('miDialog<?php echo $contador; ?>');
                            const cerrarButton<?php echo $contador; ?> = document.getElementById('cerrarButton<?php echo $contador; ?>');

                            // Agregar un controlador de eventos al botón para abrir la ventana emergente
                            verMasButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.showModal();
                            });

                            // Agregar un controlador de eventos al botón de cerrar la ventana emergente
                            cerrarButton<?php echo $contador; ?>.addEventListener('click', () => {
                                miDialog<?php echo $contador; ?>.close();

                                <?php $contador++; ?>
                            });
                        </script>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Best Seller -->
</section>