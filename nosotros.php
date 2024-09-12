<?php include('principal/header.php') ?>
<body>
    
    <div class="page">
      <!-- Page Header-->
      <?php include('principal/navbar.php') ?>
      <!-- Breadcrumbs -->
      <section class="bg-gray-7">
        <div class="breadcrumbs-custom box-transform-wrap context-dark bg-image gradient-overlay" style="background-image: url(images/bg-typography.jpg);">
          <div class="container">
            <h3 class="breadcrumbs-custom-title">Forms</h3>
            <div class="breadcrumbs-custom-decor"></div>
          </div>
        </div>
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Elements</a></li>
            <li class="active">Forms</li>
          </ul>
        </div>
      </section>
      <!-- Forms-->
      <section class="section section-lg bg-default text-md-start">
        <div class="container">
          <div class="row row-50 justify-content-center justify-content-xl-between">
            <div class="col-md-8 col-lg-6 col-xl-5">
              <h3 class="text-spacing-50 fw-bold">Contact Form</h3>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Your Name*</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">Your E-mail*</label>
                </div>
                <div class="form-wrap">
                  <!--Select 2-->
                  <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required" data-placeholder="Select a Service">
                    <option label="placeholder"></option>
                    <option value="1">Oil Platforms</option>
                    <option value="2">Gas Flares</option>
                    <option value="3">Oil Pumps</option>
                  </select>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message">Message</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <button class="button button-primary-gradient" type="submit">Send Message</button>
              </form>
            </div>
            <div class="col-md-10 col-lg-6">
              <div class="box-width-xl-520">
                <h3 class="text-spacing-50 fw-bold">Login form</h3>
                <div class="form-login">
                  <div class="button-social"><a class="button button-sm button-icon button-icon-left button-facebook" href="#"><span class="icon fa fa-facebook"></span><span>Facebook</span></a><a class="button button-sm button-icon button-icon-left button-twitter" href="#"><span class="icon fa fa-twitter"></span><span>Twitter</span></a><a class="button button-sm button-icon button-icon-left button-google" href="#"><span class="icon fa fa-google-plus"></span><span>Google+</span></a></div>
                  <p class="text-divider">or</p>
                  <form class="rd-form rd-form-center rd-mailform">
                    <div class="form-wrap">
                      <label class="form-label" for="login-name">Your Name*</label>
                      <input class="form-input" id="login-name" type="text" name="form-input" data-constraints="@Required">
                    </div>
                    <div class="form-wrap">
                      <label class="form-label" for="login-password">Password</label>
                      <input class="form-input" id="login-password" type="password" name="password" data-constraints="@Required">
                    </div>
                    <label class="checkbox-inline">
                      <input name="input-checkbox-1" value="checkbox-1" type="checkbox">Remember Me
                    </label>
                    <div class="row row-14 gutters-14">
                      <div class="col-sm-6 col-lg-5 col-xl-6">
                        <button class="button button-block button-primary-gradient" type="submit">Login</button>
                      </div>
                      <div class="col-sm-6 col-lg-7 col-xl-6"><a class="button button-block button-outline button-default-outline" href="#">Create an account</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Subscribe to Our Newsletter-->
      <section class="section-md context-dark text-md-start bg-gradient-1">
        <div class="container">
          <div class="row row-30 justify-content-center align-items-center">
            <div class="col-lg-4 col-xl-3">
              <h5 class="oh-desktop"><span class="d-inline-block wow slideInUp">Newsletter</span></h5>
              <p class="oh-desktop"><span class="d-inline-block wow slideInDown">Sign up for our newsletter and follow us on social media</span></p>
            </div>
            <div class="col-lg-8 col-xl-9">
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform rd-form-inline oh-desktop rd-form-inline-lg" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                <div class="form-wrap wow slideInUp">
                  <input class="form-input" id="subscribe-form-0-email" type="email" name="email" data-constraints="@Email @Required"/>
                  <label class="form-label" for="subscribe-form-0-email">Your E-mail*</label>
                </div>
                <div class="form-button wow slideInRight">
                  <button class="button button-primary-gradient button-lg" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Us (with reCAPTCHA)-->
      <section class="section section-sm section-first bg-default">
        <div class="container">
          <h3 class="text-spacing-50 fw-bold">Contact Form (with reCAPTCHA)</h3>
          <div class="row row-lg justify-content-center">
            <div class="col-md-11 col-lg-9 col-xl-7">
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-name-2" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-name-2">Your Name*</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-wrap">
                      <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email-2">Your E-mail*</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <!--Select 2-->
                      <select class="form-input" data-minimum-results-for-search="Infinity" data-constraints="@Required" data-placeholder="Select a Service">
                        <option label="placeholder"></option>
                        <option value="1">Oil Platforms</option>
                        <option value="2">Gas Flares</option>
                        <option value="3">Oil Pumps</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap">
                      <label class="form-label" for="contact-message-3">Message</label>
                      <textarea class="form-input" id="contact-message-3" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                  <div class="col-sm-7 col-md-6">
                    <div class="form-wrap form-wrap-recaptcha">
                      <!-- Google captcha-->
                      <div class="recaptcha" id="captcha1" data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                    </div>
                  </div>
                  <div class="col-sm-5 col-md-6">
                    <button class="button button-block button-primary-gradient" type="submit">Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Mailchimp-->
      <section class="section section-sm bg-default text-center">
        <div class="container">
          <h3 class="text-spacing-50 fw-bold">MailChimp</h3>
          <!-- RD Mailform-->
          <form class="rd-form mailchimp-mailform rd-form-inline rd-form-inline-centered" data-form-output="form-output-global" action="https://templatemonster.us1.list-manage.com/subscribe/post?u=1e39a6d114a4cc130a4edbe43&amp;id=9fc9ef194a" method="post">
            <div class="form-wrap">
              <label class="form-label" for="mailchimp-email">Enter your e-mail</label>
              <input class="form-input" id="mailchimp-email" type="email" name="email" data-constraints="@Email @Required">
            </div>
            <div class="form-button">
              <button class="button button-sm button-primary-gradient" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </section>

      <!-- Section Campaign Monitor-->
      <section class="section section-sm section-last bg-default text-center">
        <div class="container">
          <h3 class="text-spacing-50 fw-bold">Campaign Monitor</h3>
          <!-- Campaign Monitor-->
          <form class="rd-form campaign-mailform rd-form-inline rd-form-inline-centered" data-form-output="form-output-global" action="https://templatermonster.createsend.com/t/j/s/zjjikd/" method="post">
            <div class="form-wrap">
              <label class="form-label" for="campaign-email">Enter your E-mail</label>
              <input class="form-input" id="campaign-email" type="email" name="cm-zjjikd-zjjikd" data-constraints="@Email @Required">
            </div>
            <div class="form-button">
              <button class="button button-sm button-primary-gradient" type="submit">Subscribe</button>
            </div>
          </form>
        </div>
      </section>

      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">What We Offer</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="#">Facebook Ads</a></li>
                  <li><a href="#">PPC Services</a></li>
                  <li><a href="#">Email Marketing</a></li>
                  <li><a href="#">Conversion Optimization</a></li>
                  <li><a href="#">Lead Generation</a></li>
                  <li><a href="#">Marketing Strategy</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Information</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="masonry-blog.html">Latest News</a></li>
                  <li><a href="projects.html">Our Works</a></li>
                  <li><a href="#">FAQ</a></li>
                  <li><a href="#">Shop</a></li>
                  <li><a href="contacts.html">Contacts Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-xl-5">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Newsletter</span></h5>
                <p class="wow fadeInRight">Sign up today for the latest news and tips</p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-sm oh-desktop" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap wow slideInUp">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="subscribe-form-2-email">Enter your E-mail</label>
                  </div>
                  <div class="form-button form-button-2 wow slideInRight">
                    <button class="button button-sm button-icon-3 button-primary-gradient" type="submit"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-2">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4">
                <div class="row row-30 align-items-center text-lg-center">
                  <div class="col-md-7 col-xl-6"><a class="brand" href="index.html"><img src="images/logo-inverse-244x78.png" alt="" width="122" height="39"/></a></div>
                  <div class="col-md-5 col-xl-6">
                    <div class="iso-1"><img src="images/fot-img.png" alt=""/><span class="iso-1-big">9.4k</span></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon icon-24 mdi mdi-phone"></span></div>
                      <div class="unit-body"><a class="phone" href="tel:#">+1 718-999-3939</a></div>
                    </div>
                  </div>
                  <div class="footer-modern-contacts wow slideInDown">
                    <div class="unit unit-spacing-sm align-items-center">
                      <div class="unit-left"><span class="icon mdi mdi-email"></span></div>
                      <div class="unit-body"><a class="mail" href="mailto:#">info@demolink.org</a></div>
                    </div>
                  </div>
                  <div class="wow slideInRight">
                    <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                      <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><a href="#">514 S. Magnolia St. Orlando, FL 32806</a></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Flex</span><span>.&nbsp;</span><a href="privacy-policy.html">Privacy policy</a></p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
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
    <!--pre#debug1.debug-->
    <!-- Javascript-->
  <?php include('principal/script.php') ?>
  </body>
