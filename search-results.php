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
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Pages</a></li>
            <li class="active">Search Results</li>
          </ul>
        </div>
      </section>
      <!-- Search results-->
      <section class="section section-lg bg-default">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-9">
              <!-- RD Search-->
              <form class="rd-form rd-search rd-form-inline rd-form-inline-centered" action="search-results.html" method="GET">
                <div class="form-wrap">
                  <label class="form-label" for="rd-search-form-input">Escribe nombre del documento</label>
                  <input class="form-input" id="rd-search-form-input" type="text" name="s" autocomplete="off">
                </div>
                <div class="form-wrap form-button">
                  <button class="button button-sm button-primary-gradient" type="submit">BUSCAR</button>
                </div>
              </form>
              
              <!-- iconos de Busqueda documentaria-->
      <section class="section section-lg bg-default">
        <div class="container">
          <!-- #1-->
          <div class="row row-md row-20">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-md flex-column text-center flex-md-row text-md-start">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-phone"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="single-post-title"><a href="single-service.html">ESTATUTO</a></h5>
                   </div>
                </div>
              </article>
            </div>
            <!-- #2-->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-md flex-column text-center flex-md-row text-md-start">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-chart-growth"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="single-service.html">TUPA</a></h5>          
                  </div>
                </div>
              </article>
            </div>
            <!-- #3-->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-md flex-column text-center flex-md-row text-md-start">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-chart-growth"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="single-service.html">PLAN ESTRATEGICO</a></h5>                    
                  </div>
                </div>
              </article>
            </div>
          <!-- #4-->
            <div class="col-sm-6 col-md-4 col-lg-3">
              <article class="box-icon-classic">
                <div class="unit unit-spacing-md flex-column text-center flex-md-row text-md-start">
                  <div class="unit-left">
                    <div class="box-icon-classic-icon linearicons-chart-growth"></div>
                  </div>
                  <div class="unit-body">
                    <h5 class="box-icon-classic-title"><a href="single-service.html">DIRECTIVAS</a></h5>                    
                  </div>
                </div>
              </article>
            </div>
          
          </div>
        </div>
      </section>
      <h4>LISTADO DE DOCUMENTOS </h4>
    
              <?php listadoDirectorio('documentos'); ?>
              <div class="rd-search-results"></div>
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

    <?php include('principal/footer.php') ?>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>


  <?php include('principal/script.php') ?>


</body>
</html>