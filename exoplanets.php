<section id=Exoplanets>
    <!-- Start Best Seller -->
    <section class="lattest-product-area pb-40 category-list">
        <div class="row">
<!--Listado con php de los planetas-->
                <!-- single planet -->
                <div class="col-lg-4 col-md-6">
                <?php $contador = 0;?>
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
                            <button type="submit" class="btn btn-primary">Ver Más</button>
                            <dialog id="miDialog<?php echo $contador; ?>">
                                nasa_vch_descripction
                                <h6>The distance to Earth</h6>nasa_dec_distance<h6>Persecs</h6>
                                <button id="cerrarButton<?php echo $contador; ?>">Cerrar</button>
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
                                });
                            </script>
                        </div>
                    </div>
                </div>

            
        </div>
    </section>
    <!-- End Best Seller -->
</section>