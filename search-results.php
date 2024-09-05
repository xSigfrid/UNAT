<?php include('principal/header.php') ?>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <?php include('principal/navbar.php') ?>
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark bg-image gradient-overlay" style="background-image: url(images/bg-typography.jpg);">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">ENCUENTRA EL DOCUMENTO QUE NECESITAS</h3>
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
              <div class="rd-search-results"></div>
            </div>
          </div>
        </div>
      </section>
      
    <!-- Panel Thumbnail-->
    <!-- Template panel-->
    <div class="layout-panel">
      <button class="layout-panel-toggle" data-custom-toggle=".layout-panel" data-custom-toggle-disable-on-blur="true"><span></span></button>
      <div class="layout-panel-scroll">
        <div class="layout-panel-content">
          <div class="layout-panel-header"><a class="button button-primary button-icon button-icon-left" href="https://www.templatemonster.com/website-templates/flex-universal-multipurpose-creative-html-website-template-88389.html"><span class="icon mdi mdi-cart-outline"></span>Buy template</a>
            <div class="layout-panel-element"><a href="../landing/index.html"><img src="../landing/images/logo-default-244x78.png" width="122" height="39" alt=""></a></div>
          </div>
          <!-- Isotope Content-->
          <div class="layout-panel-body"><a class="thumbnail-small" href="../flex-dynamics/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/dynamics.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Dynamics</p>
                  </div></a><a class="thumbnail-small" href="../flex-flooring/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/flooring.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Flooring</p>
                  </div></a><a class="thumbnail-small" href="../flex-library/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/library.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Library</p>
                  </div></a><a class="thumbnail-small" href="../flex-marketing-agency/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/marketing-agency.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Marketing Agency</p>
                  </div></a><a class="thumbnail-small" href="../flex-pizza/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/pizza.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Pizza</p>
                  </div></a><a class="thumbnail-small" href="../flex-real-estate/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/real-estate.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Real Estate</p>
                  </div></a><a class="thumbnail-small" href="../flex-steel-processing/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/steel-processing.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Steel Processing</p>
                  </div></a><a class="thumbnail-small" href="../flex-transportation/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/transportation.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Transportation</p>
                  </div></a><a class="thumbnail-small" href="../flex-service-center/index.html">
                  <div class="thumbnail-small-image"><img src="images/layout-panel/service-center.jpg" alt="" width="380" height="280"></div>
                  <div class="thumbnail-small-caption">
                    <p class="thumbnail-small-header">Service Center</p>
                  </div></a>
          </div>
        </div>
      </div>
    </div>
    <?php include('principal/footer.php') ?>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>


  <?php include('principal/script.php') ?>


</body>
</html>