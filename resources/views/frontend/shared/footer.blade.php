<footer class="section footer-corporate context-dark">
    <div class="footer-corporate-inset">
      <div class="container">
        <div class="row row-40 justify-content-lg-between">
          <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
            <div class="oh-desktop">
              <div class="wow slideInRight" data-wow-delay="0s">
                <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                <ul class="footer-contacts d-inline-block d-sm-block">
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                      <div class="unit-body"><a class="link-phone" href="tel:#">{{$info->phone}}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                      <div class="unit-body"><a class="link-aemail" href="mailto:#">{{$info->emil}}</a></div>
                    </div>
                  </li>
                  <li>
                    <div class="unit">
                      <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                      <div class="unit-body"><a class="link-location" href="#">{{$info->adress}}</a></div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
         
          <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
            <div class="oh-desktop">
              <div class="wow slideInLeft" data-wow-delay="0s">
                <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-1">
                  <li><a href="about.html">Home</a></li>
                  <li><a href="#">Discover</a></li>
                  <li><a href="#">Contact us</a></li>
                </ul>
                <div class="group-md group-middle justify-content-sm-start">
                  <a class="button button-lg button-primary button-ujarak" href="{{$info->app_link}}">Get the phone app</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-corporate-bottom-panel">
      <div class="container">
  
          <div class="col-sm-6 col-md-8 order-sm-first">
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>
              Wonder Tour Theme </span>. All Rights Reserved to the University of Abou bekr Belkaid - Tlemcen</a></p>
          </div>
          <div class="col-sm-6 col-md-2 text-justify-right ">
            <p class="rights"><a href="#">Privacy Policy</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="{{asset('js/core.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>