<?php
//error_reporting(E_ALL ^ E_NOTICE);
$libros = new LibrosController();
$categorias = $libros->readListadoCategorias();

?>
	<!-- contenido Principal -->
	<section>
		<div class="container-fluid mt-5">
			<div class="row">

				<!-- Columna izquierda -->
				<div class="col-md-3">
					<div class="card" style="width: 18rem;">
					  <div class="card-header">
					    <center><h5>Categorias</h5></center> 
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

				<!-- Columna Vista del Libro -->
				<div class="col-md-7">
					<div class="row">
						<div class="col-12">
							<div class="ml-2 card" >
								<h1 class="m-3">Libros </h1>
								<div class="row p-2">
								<?php 

									if(isset($_POST['cat'])){
										foreach( $libros->readByCategoria( $_POST['cat'] ) as $registro ){
											echo "
											<div class='col-3'>
											<form action='ver-libro' method='post'>
												<div class='card' style='width: 100%;'>
													<img class='card-img-top' src='".$registro['dir_portada']." '>
													<div class='card-body'>
													<input type='hidden' name='idLibro' value='".$registro['id'] ."'>
														<p class='card-title'>".$registro['titulo']."  </p>
														<input type='submit' value='Leer'  class='btn btn-primary btn-lg'>
													</div>
												</div>
												</form>
											</div>
												";
											}
									}else if( isset($_POST['valor']) ){
										$tupla = $libros->readByTitulo( $_POST['valor'] );
										if($tupla == null ){
											echo "<h4 class='p-2'>No hay resultados</h4>";
										}else{
											foreach( $tupla as $registro ){
												echo "
												
													<div class='col-3'>
													<form action='ver-libro' method='post'>
														<div class='card' style='width: 100%;'>
															<img class='card-img-top' src='".$registro['dir_portada']." '>
															<div class='card-body'>
															<input type='hidden' name='idLibro' value='".$registro['id'] ."'>
																<p class='card-title'>".$registro['titulo']."  </p>
																
																<input type='submit' value='Leer' class='btn btn-primary btn-lg'>
															</div>
														</div>
														</form>
													</div>
													
													";
												}
										}
										
									}
									
								?>
									
								</div>
							</div>
						</div>
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
