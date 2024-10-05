<?php include("../db.php"); ?>

<form action="save.php" method="post" enctype="multipart/form-data" onsubmit="return confirm('Desea crear');">
										
										<div class="mb-3">
											<label for="txtimagen" class="form-label">Imagen</label>
											<input type="file" class="form-control" name="txtimagen" id="txtimagen" aria-describedby="helpId" placeholder="Seleccione la imagen" accept="image/png,image/jpg" required>

										</div>