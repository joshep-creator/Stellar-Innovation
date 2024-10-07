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
                    <img class="card-img-top img-fluid" src="src/img/planet_1.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>55 Cancri e</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        1.        Si estuvieras en un videojuego este seria un guerrero de fuego, un planeta abrasador que brilla intensamente en la oscuridad del espacio, con un corazón de lava y una armadura de diamantes.
2.        Si haces algo malo y crees en el infierno podrías estar llegando aquí porque su superficie esta mas caliente que lo mas profundo de los volcanes, imagínate, son mas de 1.500 grados centígrados.
3.        Imagina que la distancia entre el Sol y la Tierra es como la longitud de una cancha de fútbol. En este caso, la distancia entre 55 Cancri e y su estrella Cancri A sería como la longitud de un lápiz.
4.        Si crees que un año se te esta pasando demasiado corto espera a vivir aquí, literalmente el año se te va a ir volando porque mientras un año para nosotros equivale a 365 dias aquí un día son 17.7 horas, ¿puedes creerlo?
5.         Imagina que la Tierra es una canica azul, pequeña y brillante. Ahora, visualiza este exoplaneta como una pelota de tenis ardiente.

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

            <!-- single planet 2 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_2.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>AU Microscopii b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        1.        AU Microscopii b es un joven rebelde, un planeta que vive al límite, orbitando cerca de una estrella temperamental que lo somete a constantes tormentas de radiación. Mientras la Tierra es el hogar estable y acogedor, AU Microscopii b es el aventurero audaz, siempre en movimiento y enfrentando desafíos extremos.
2.        Imagina que la Tierra es como una acogedora taza de té caliente en una tarde fresca, con una temperatura agradable que permite disfrutar de un paseo al aire libre. Por otro lado, AU Microscopii b sería como un helado en el congelador más frío que puedas imaginar, tanto que ni siquiera los pingüinos se atreverían a vivir allí.
3.        Este planeta orbita tan cerca de su estrella que completa una vuelta en apenas 8.5 días, como un corredor de maratón incansable que nunca se detiene.
4.        Se encuentra en la constelación de Microscopium, a unos 32 años luz de la Tierra, en un sistema estelar joven y dinámico, como un barrio vibrante y lleno de energía.
5.        Es un gigante gaseoso, 20 veces más masivo que la Tierra, como un coloso en medio de un campo de batalla cósmico.
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

            <!-- single planet 3 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_3.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>BD14 3065 b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        1.        Imagina que la Tierra es como un acogedor hogar en el campo, con un jardín lleno de vida, aire fresco y un clima agradable. Es un lugar donde puedes relajarte, eso si cuidándolo, por otro lado, BD-14 3065 b sería como una gigantesca feria de atracciones en el centro de una ciudad futurista. Es enorme, vibrante y lleno de energía, pero también caótico y extremo. La feria está tan cerca de las luces brillantes de la ciudad (su estrella) que nunca hay un momento de calma. Todo se mueve a una velocidad violenta, con días que pasan en un abrir y cerrar de ojos.
2.     Ahora imagina que la Tierra es como una acogedora casa de campo en primavera, donde puedes disfrutar de un clima templado, perfecto para un picnic al aire libre. Ahora, piensa en este exoplaneta como una parrilla encendida al máximo en pleno verano. Mientras que en la Tierra puedes relajarte bajo la sombra de un árbol, aquí estarías constantemente buscando una manera de no derretirte.
3.         Imagina que la Tierra es una naranja, entonces BD-14 3065b sería como una sandía. La Tierra es aproximadamente 12.742 km de diámetro, mientras que BD-14 3065b tiene un diámetro aproximado de 38.000 km.

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

            <!-- single planet 4 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_4.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>CD Ceti b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        Imagina que CD Ceti b es una majestuosa mansión en una colina, con enormes jardines y múltiples pisos. Esta mansión es impresionante y mucho más grande que la casa de campo, pero también requiere más energía para mantenerse. La mansión está llena de habitaciones y espacios amplios, representando la mayor masa y volumen de CD Ceti b en comparación con la Tierra.
Imagina que la Tierra es como una taza de café caliente en una mañana fría. Tiene sus momentos de calor intenso, pero también puede ser bastante fría en algunos lugares. Ahora, piensa en CD Ceti b como una sartén olvidada en el fuego. Está tan cerca de su estrella que cualquier cosa que pongas en ella se quemaría al instante. Mientras que la Tierra tiene un equilibrio entre calor y frío, CD Ceti b es un lugar donde el calor domina sin piedad.
Imagina que la Tierra es una casa de muñecas, entonces el planeta CD Cet b sería como un rascacielos de 100 pisos. La Tierra es pequeña comparada con este planeta extrasolar.
Recuerda que CD Cet b es un planeta hipotético y es aproximadamente 14.3 veces más grande que la Tierra.
Imagina que la distancia entre la Tierra y el Sol es como la longitud de un campo de fútbol de 100 metros. En comparación, la distancia entre CD Ceti b y su estrella sería como la longitud de una tarjeta de crédito (aproximadamente 8.5 cm). ¡Es una diferencia enorme!

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

            <!-- single planet 5 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_5.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>CoRot-1 b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        Este exoplaneta sería como un gigantesco horno de pizza en el corazón de una bulliciosa pizzería cósmica. Este horno es enorme, mucho más grande que cualquier cosa que puedas imaginar en la Tierra. Está tan cerca de su fuente de calor (su estrella) que la temperatura es increíblemente alta, lo suficiente como para cocinar una pizza en segundos. El horno gira rápidamente, completando una vuelta en solo 1.5 días, lo que hace que todo se mueva a una velocidad vertiginosa.
 Imagina que la Tierra es como una acogedora taza de café en una mañana fresca. La temperatura promedio de la superficie de la Tierra es de unos 15°C1, lo que la hace perfecta para la vida tal como la conocemos. Ahora, si la Tierra es una taza de café, CoRoT-1b sería como una parrilla encendida al máximo en una barbacoa de verano. Este exoplaneta tiene una temperatura abrasadora de aproximadamente 1,898°C2, ¡lo que lo hace casi 127 veces más caliente que la Tierra!
CoRot-1 b está a 1,560 años luz de la Tierra3. Si la distancia entre la Tierra y el Sol fuera el grosor de una hoja de papel, la distancia a CoRot-1 b sería como una pila de papel de más de 15 kilómetros de altura.
Imagina que la tierra es una manzana, entonces el planeta CoRoT-1b sería como un pomelo gigante. La tierra es aproximadamente 12.742 km de diámetro, mientras que CoRoT-1b tiene un diámetro aproximado de 1,65 veces el diámetro de la tierra, es decir 20.192 km.

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

            <!-- single planet 6 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_6.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>CoRot-11 b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        Si recuerdas la mitologia griega tal vez conozcas a Hefesto, es un titán de fuego y metal, trabajando incansablemente en su forja celestial. Su hogar es un lugar de calor intenso y actividad constante, donde el metal fundido fluye como ríos de lava. Hefesto es poderoso y creativo, capaz de moldear los elementos a su voluntad, pero su entorno es inhóspito y desafiante. Este planeta es la reencarnacion de Hefesto, ¿no te parece?
Mientras que Gea (la Tierra) ofrece un refugio de vida y tranquilidad, Hefesto (CoRoT-11 b) es un símbolo de poder y transformación, un recordatorio de las fuerzas extremas que existen en el universo. Ambos personajes mitológicos representan aspectos fundamentales de la existencia: la vida y la creación, la calma y la energía
Imagina un horno industrial a máxima potencia. Este exoplaneta, que orbita muy cerca de su estrella, tiene una temperatura abrasadora de aproximadamente 1,593 K (unos 1,320°C) 1. Es tan caliente que cualquier cosa en su superficie se derretiría instantáneamente, como si estuvieras tratando de hornear galletas en el núcleo de un volcán activo.
¡Es una diferencia de temperatura realmente impresionante!
Imagina que la Tierra es una canica, entonces el planeta CoRoT-11b sería como una pelota de baloncesto. La Tierra es aproximadamente 12.742 km de diámetro, mientras que CoRoT-11b tiene un diámetro aproximado de 1,43 veces el diámetro de la Tierra, es decir 18.225 km.
Imagina que la distancia entre la Tierra y el Sol es como la longitud de una cuadra en tu barrio. En este caso, la distancia entre CoRoT-11b y su estrella sería como del tamaño de tu carnet . ¡Es una diferencia enorme!

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

            <!-- single planet 7 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_7.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>CoRot-12 b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        1.    Has de cuenta que la tierra es un chef que prepara ensaladas mientras que este exoplaneta es un chef excéntrico que prefiere cocinar a temperaturas extremas, ¡alrededor de 1500°C! Su cocina es un horno gigante, donde todo está en constante ebullición y las llamas son tan altas que parecen tocar el techo.
Mientras la Tierra prepara una ensalada fresca y crujiente, CoRot-12b está asando un volcán de lava. La Tierra sonríe y dice: “¡Nada como un clima templado para una comida equilibrada!” CoRot-12b, con una risa estruendosa, responde: “¡Aquí solo servimos platos ardientes y explosivos!”
Así, en el mundo de los dibujos animados, la Tierra y CoRot-12b muestran sus estilos únicos de cocina, reflejando sus temperaturas tan diferentes. 

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

            <!-- single planet 8 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_8.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>CoRot-13 b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        1.        La Tierra es como un caracol que se mueve lentamente por un jardín templado. Su caparazón está decorado con verdes praderas y océanos azules, y su temperatura promedio es de unos 15°C, lo que le permite disfrutar de un clima agradable y variado1.
Por otro lado, CoRot-13b es un caracol que vive en un volcán activo. Su caparazón está hecho de roca fundida y lava, y su temperatura puede alcanzar entre 1,000 y 1,500°C2. Este caracol no se detiene nunca, siempre está en movimiento rápido, como si estuviera corriendo sobre brasas ardientes.
En esta carrera de temperaturas, el caracol Tierra disfruta de un paseo tranquilo y fresco, mientras que el caracol CoRot-13b se desliza a toda velocidad por un paisaje infernal, siempre rodeado de calor extremo. ¡Una carrera de contrastes extremos!

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

            <!-- single planet 9 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_9.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>CoRot-18 b</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        .        La Tierra es como un niño que vive en un lugar muy cómodo. Su temperatura promedio es de unos 15°C, lo que es perfecto para jugar al aire libre, nadar en el mar y disfrutar de un picnic en el parque. 🌳🏖
CoRot-13B, por otro lado, es como un niño que vive en un vecindario súper caliente, ¡tan caliente que ni siquiera podrías salir a jugar! La temperatura en CoRot-13B puede llegar a ser de entre 1,000 y 1,500°C1. Eso es más caliente que un horno de pizza, ¡y definitivamente más caliente que cualquier día de verano en la Tierra! 🍕🔥

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

            <!-- single planet 10 -->
            <div class="col-lg-3 col-md-4 col-sm-1 mb-4">
                
                <div class="card">
                    <img class="card-img-top img-fluid" src="src/img/planet_10.jpg" style="height: auto; width: auto;">
                    <div class="card-body">
                        <h6>TRAPPIST-1 e</h6>
                        
                        <button type="submit" class="btn btn-primary" id="verMasButton<?php echo $contador; ?>">Ver Más</button>
                        <dialog id="miDialog<?php echo $contador; ?>">
                        TRAPPIST-1e es uno de los exoplanetas más fascinantes en el universo conocido, y su descubrimiento ha capturado la imaginación tanto de científicos como de soñadores. Este planeta, que orbita la estrella ultrafría TRAPPIST-1, está ubicado a unos 39 años luz de distancia de la Tierra, en la constelación de Acuario. Lo realmente cautivador de TRAPPIST-1e es que se encuentra en la "zona habitable" de su sistema, donde las condiciones podrían permitir la existencia de agua líquida, un ingrediente esencial para la vida tal como la conocemos.

**Imagina un mundo donde...**

El cielo tiene un brillo rojizo constante, iluminado por la tenue luz de su estrella anfitriona, TRAPPIST-1, que parece más grande que el Sol en la Tierra debido a la proximidad del planeta. Desde la superficie, podrías observar no solo la estrella, sino también otros seis planetas hermanos, algunos tan cercanos que podrían ser visibles a simple vista, como pequeñas esferas que cruzan el firmamento.

Este planeta tiene un tamaño y una composición rocosos similares a los de la Tierra, lo que lo convierte en uno de los objetivos principales en la búsqueda de vida extraterrestre. A diferencia de la Tierra, TRAPPIST-1e podría tener un clima más moderado, ya que su órbita es mucho más cercana a su estrella, lo que significa que el calor se distribuye de manera más uniforme. Sin embargo, debido a la naturaleza de su estrella, TRAPPIST-1e está "bloqueado por marea", lo que significa que un lado del planeta siempre enfrenta a la estrella, mientras que el otro permanece en oscuridad eterna.

**¿Vida alienígena o un refugio futuro?**

Para los científicos y exploradores espaciales, TRAPPIST-1e representa un enigma. Si hay agua en su superficie, y si su atmósfera contiene los gases adecuados, es posible que ya sea el hogar de alguna forma de vida. Alternativamente, podría ser un mundo virgen, esperando ser colonizado por futuras generaciones humanas que busquen nuevos hogares más allá de nuestro sistema solar.

Este planeta no solo nos invita a investigar sus misterios científicos, sino también a soñar con el día en que podamos llegar hasta él, colonizarlo y tal vez, si somos afortunados, descubrir que no estamos solos en el cosmos.
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
