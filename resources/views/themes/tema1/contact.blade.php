    <div class="page-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pull-left"><div class="page-in-name"><b>Contact</b></div></div>
            <div class="col-lg-6 pull-right"><div class="page-in-bread"><a href="{{ url('/') }}">Home</a> \ Contact</div></div>
          </div>
        </div>
      </div>
      <div class="container marg75">
        <div class="row">
          <div class="col-lg-12">
          @include('_partial.flash_message')
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="promo-block">
              <div class="promo-text">Lokasi kami?</div>
              <div class="center-line"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="container marg50">
        <div class="row">
          <div class="col-lg-12">
            <iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ru/?ie=UTF8&amp;ll=42.376467,-71.063175&amp;spn=0.006967,0.016512&amp;t=m&amp;z=17&amp;output=embed"></iframe>
          </div> 
        </div>
      </div>  
      <div class="container marg100">
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="promo-block">
              <div class="promo-text">Contact Form</div>
              <div class="center-line"></div>
            </div>
            <div class="marg50">
              <div class="row">
                <form id="contact" class="form-style" name="sentMessage"  novalidate="" action="contact" method="POST">
                  <div class="col-lg-4">
                    <div class="text_cont form-group floating-label-form-group controls">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="read" value="N">
                      <input name="name" type="text" placeholder="Nama" required="" data-validation-required-message="Silahkan masukkan nama" class="form-control"><span class="help-block text-danger"></span>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="text_cont form-group floating-label-form-group controls">
                      <input name="email" type="email" placeholder="Email" required="" data-validation-required-message="Silahkan masukkan email" class="form-control"><span class="help-block text-danger"></span>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="text_cont form-group floating-label-form-group controls">
                      <input name="phone" type="tel" placeholder="No.Handphone" required="" data-validation-required-message="Silahkan masukkan no.handphone" class="form-control"><span class="help-block text-danger"></span>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="text_cont form-group floating-label-form-group controls">
                      <textarea name="message" cols="40" rows="10" placeholder="Isi Pesan" required="" data-validation-required-message="Silahkan masukkan isi pesan" aria-invalid="false" class="form-control"></textarea><span class="help-block text-danger"></span>
                    </div>
                  </div>
                  <div class="col-lg-12"><div id="success"></div></div>
                  <div class="col-lg-12"><p><button type="submit" class="btn btn-default">Kirim</button></p></div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="promo-block">
              <div class="promo-text">Information</div>
              <div class="center-line"></div>
            </div>
            <div class="marg50">
                <ul class="contact-footer">
                  <li><i class="icon-location"></i> Adress: 455 Martinson, Los Angeles</li>
                  <li><i class="icon-mobile"></i> Phone: 8 (043) 567 - 89 - 30</li>
                  <li><i class="icon-inbox"></i> Fax: 8 (057) 149 - 24 - 64</li>
                  <li><i class="icon-videocam"></i> Skype: companyname</li>
                  <li><i class="icon-mail"></i> E-mail: support@email.com</li>
                  <li><i class="icon-key"></i> Weekend: from 9 am to 6 pm</li>
                </ul> 
                <ul class="soc-contacts">
                  <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                  <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-bitbucket-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-pinterest-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-xing-square"></i></a></li>
                  <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                </ul> 
            </div>
          </div>
        </div>
    </div>