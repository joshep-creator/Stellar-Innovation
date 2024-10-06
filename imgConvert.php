<?php

$image = "/src/planet_1.jpg";


// Obtener el contenido binario de la imagen
$image_data = file_get_contents($image);

// Codificar la imagen en Base64
$base64_image = base64_encode($image_data);

// Obtener el tipo MIME de la imagen
$mime_type = mime_content_type($image_path);

// Crear la cadena en formato "data:image/jpeg;base64,..."
$base64_image_src = 'data:' . $mime_type . ';base64,' . $base64_image;

// Mostrar la imagen en formato Base64
echo '<img src="' . $base64_image_src . '" alt="Imagen en Base64">';
?>