<?php 
	function listadoDirectorio($directorio){
	    $listado = scandir($directorio);
	    unset($listado[array_search('.', $listado, true)]);
	    unset($listado[array_search('..', $listado, true)]);
	    if (count($listado) < 1) {
	        return;
	    }
	    foreach($listado as $elemento){
	    	if(!is_dir($directorio.'/'.$elemento)) {
	        	echo "<li>- <a href='$directorio/$elemento'>$elemento</a></li>";
	        }
	        if(is_dir($directorio.'/'.$elemento)) {
	        	echo '<li class="open-dropdown">+ '.$elemento.'</li>';
	    		echo '<ul class="dropdown d-none">';
	        		listadoDirectorio($directorio.'/'.$elemento);
	    		echo '</ul>';
	        }
	    }
	}
?>
<?php include('principal/header.php') ?>
  <body>

    <div class="page">
      <!-- Page Header-->
      <?php include('principal/navbar.php') ?>
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark bg-image gradient-overlay" style="background-image: url(images/bg-typography.jpg);">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">TRANSPARENCIA UNIVERSITARIA - UNAT</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
        </div>
        
      </section>




<div   id="json" >
      <!-- Search results-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <h4> LISTADO DE DOCUMENTOS</h4>
              <p class="pservices text-justify">LEY Nº 30220, Ley Universitaria Artículo 11. Transparencia de las Universidades Las universidades públicas y privadas tienen la obligación de publicar en sus portales electrónicos, en forma permanente y actualizada, como mínimo, la información correspondiente a los siguientes puntos:</p>
              <!-- RD Search-->

                <div class="form-wrap">
                    <input class="form-input"  type="text" placeholder="Buscar por nombre de documento." autocomplete="off" v-model="this.busquedaDocumento" @keyup.enter="busquedaDocumentoFiltro(this.busquedaDocumento)"/>

                </div>
                <div class="rd-search-results"></div>
            </div>
          </div>
        </div>
      </section>
              <!-- iconos de Busqueda documentaria-->
      <section class="section section-lg bg-default" style="cursor: pointer">
          <div class="container">
              <div class="row">
              <div class="col-3">
                <table class="table table-striped table-bordered">
            
                  <tbody>
                      <tr v-for="articulo in tipoFilter">
                          <td v-on:click.prevent="getDocumentos(articulo)">{{articulo}}</td>
                      </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-9">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                          <th scope="col">Documento</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Descargar</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr v-for="art in articulos">
                        <th scope="row">{{art.nombre}}</th>
                        <td>{{art.url}}</td>
                        <td>

                            <div v-if="art.documento !='http://localhost/unat/documentos/SIN ARCHIVOS' ">
                                <a v-bind:href="art.documento" :download="art.nombre" style="font-size: 35px;"> <i class="mdi mdi-file-pdf-box"></i>   </a>
                            </div>
                            <div v-if="art.documento =='http://localhost/unat/documentos/SIN ARCHIVOS' ">
                                <label for=""><strong>Sin archivo</strong> </label>
                            </div>




                        </td>
                      </tr>
                    </tbody>
                  </table>
              </div>
            </div>
          </div>
      </section>

    

      
    <!-- Panel Thumbnail-->
    <!-- Template panel-->
   
    <section class="section section-sm section-inset-3 bg-gray-100 text-center">
        <div class="container">
            <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-margin="30" data-dots="true" data-mouse-drag="false"><a class="clients-jean" href="#"><img src="images/clients-18-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-6-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-2-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-3-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-4-200x90.png" alt="" width="200" height="90"/></a></div>
        </div>
    </section>
</div>
    <?php include('principal/footer.php') ?>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>


  <?php include('principal/script.php') ?>


</body>
</html>