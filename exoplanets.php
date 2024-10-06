<section id=Exoplanets>
    <!-- Start Best Seller -->
    <section class="lattest-product-area pb-40 category-list">
        <div class="row">

            <!--Listado con php de los planetas-->
            <?php
            include("db.php");
            $query = "SELECT nasa_vch_name_planet, nasa_dec_distance, nasa_int_year, nasa_int_suns_planet, nasa_int_mun_planet, nasa_vch_descover, nasa_dec_tiempo_orbita, nasa_dec_insolacion, nasa_dec_temperatura, nasa_vch_descripction FROM tbl_nasa_exoplanetas LIMIT 10";
            $resultado1 = mysqli_query($conn, $query);
            /* El código anterior es un bucle de PHP que obtiene datos de una base de datos MySQL y los muestra como una cuadrícula de exoplanetas en una
								página web. Recupera cada fila de datos de la variable  y la muestra en una única división de exoplaneta. El código también incluye la imagen del exoplaneta, el nombre, la descripcion y un comentario educativo
								"Ver más". */
            $contador = 0;
            while ($row = mysqli_fetch_assoc($resultado1)) {
            ?>
                <!-- single planet -->
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <img class="card-img-top img-fluid" src="data:image/png;base64,<?php echo base64_encode($row['imagen_url']); ?>" style="height: 150px; width: auto;">
                        <div class="card-body">
                            <h6><?php echo $row["nasa_vch_name_planet"]; ?></h6>
                            <div class="price">
                                <!--Actual price-->
                                <h6><?php echo $row["nasa_int_year"]; ?> <strong>Year</strong></h6>
                                <!--Before price-->
                                <h6 class="l-through"></h6>
                            </div>
                            <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                            <dialog id="miDialog<?php echo $contador; ?>">
                                <?php echo $row["nasa_vch_descripction"]; ?>
                                <h6>The distance to Earth</h6><?php echo $row["nasa_dec_distance"]; ?><h6>Persecs</h6>
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
            <?php
                $contador++;
            }
            ?>
        </div>
    </section>
    <!-- End Best Seller -->
</section>