<?php
//error_reporting(E_ALL ^ E_NOTICE);
$libros = new LibrosController();
$categorias = $libros->readListadoCategorias();
//$idLibro = $_GET['idLibro'];
//$idLibro = ;
if(isset($_POST['idLibro'])){
	$datosLibro = $libros->read($_POST['idLibro']);
	foreach( $datosLibro as $registro ){
		$pdf =  $registro['dir_pdf'];
	}
	
}
//

?>
	<!-- contenido Principal -->
	<section>
		<div class="container mt-5">
			<div class="row">

				<!-- Columna izquierda -->
				<div class="col-md-3">
					<div class="card" style="width: 18rem;">
					  <div class="card-header">
					    <center><h5>Categorías</h5></center> 
					  </div>
					  <?php 
							foreach( $categorias as $registro ){
								//echo "<a class='dropdown-item' href='buscadorcategoria?cat=". $registro['id']."'>". $registro['categoria']."</a>";
								echo "
								<form action='buscadorcategoria' method='POST'>
									<input type='hidden' name='cat' value='". $registro['id']."'>
									<input class='dropdown-item' type='submit' value='". $registro['categoria']."'>
								</form>
								";
								
							}
						?>
					</div>
				</div>

				<!-- Columna Vista del Libro
							$datosLibro['dir_pdf']
				-->
				<div class="col-md-7">
					<div class="ml-2 card">
					<?php //echo $datosLibro['dir_pdf'];  
					?>
						<embed src="<?php echo $pdf; ?>" type="application/pdf" width="100%" height="600">
						</embed>
						<button type="button" class="btn btn-primary btn-lg">Pantalla completa</button>
					</div>
				</div>

				<!-- Columna derecha -->
				<div class="col-md-2">
					<div>
						<center>
							<a class="btn btn-primary btn-lg" href="login">Salir</a>
						</center> 
					</div>

					<br><br><br>
					
					<center>
                    <form action='buscadorcategoria' method='POST'>
                            <input type="text" placeholder="Titulo del libro" name="valor" class="form-control m-2">
                            <input type="submit" value="Buscar"  class="btn btn-primary btn-lg" class="form-control" >
                    </form>
                </center>

					<br><br>
					
					<div>
						<img src="../img/libros_digitales.png" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</section>
