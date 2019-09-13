@extends($themes)

@section('content')
<!-- SLIDER -->
      <div class="tp-banner-container" style="height:500px;">
        <div class="tp-banner" >
          <ul style="display:none;">
          @foreach($sliderlist as $slider)
            <li data-transition="fade" data-slotamount="7" data-masterspeed="700" >
              <img src="{{ asset ('slider/'.$slider->picture)}}"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="tp-caption largeblackbg sfb"
                data-x="center"
                data-y="95"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 4; text-shadow: 1px 1px #4c4c4c;">{{ $slider->title }}
              </div>
              <div class="tp-caption largeborder skewfromrightshort"
                data-x="center"
                data-y="200"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1100"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">
              </div>
              <div class="tp-caption largetext sft"
                data-x="center"
                data-y="250"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9;text-shadow: 1px 1px #4c4c4c;">{!! $slider->description !!}
              </div>
              <div class="tp-caption largebutton lfb"
                data-x="center"
                data-y="360"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><a href="{{ url($slider->link)}}">{{ $slider->buttontext }}</a>
              </div>
            </li>
          @endforeach
            <!-- <li data-transition="random" data-slotamount="7" data-masterspeed="700" >
              <img src="tema1/assets/images/fon2.jpg"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="tp-caption largeblackbg sfb"
                data-x="30"
                data-y="80"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 4">Fully Responsive & Retina
              </div>
              <div class="tp-caption largetext sft"
                data-x="30"
                data-y="170"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1100"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9;text-align:left;">Pellentesque luctus ac lorem aenean sagittis magna purus vehicsula.<br> Tristique nunc a felis ultricies, ultrices eratSuspendisse velit ticol sodales
              </div>
              <div class="tp-caption largebutton lft"
                data-x="30"
                data-y="270"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><a href="https://themeforest.net/item/xenia-refined-html-5-css-3-corporate-template/6863456?ref=DankovThemes">Purchase now</a>
              </div>
              <div class="tp-caption lfb"
                data-x="730"
                data-y="40"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1650"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="tema1/assets/images/imac.png" alt="">
              </div>
              <div class="tp-caption lfb"
                data-x="760"
                data-y="405"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="1850"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="tema1/assets/images/keyboard.png" alt="">
              </div>
              <div class="tp-caption lfb"
                data-x="1020"
                data-y="405"
                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                data-speed="500"
                data-start="2000"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="tema1/assets/images/mouse.png" alt="">
              </div>
            </li>
            <li data-transition="random" data-slotamount="7" data-masterspeed="700" >
              <img src="tema1/assets/images/fon3.jpg"  alt=""  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
              <div class="tp-caption lfb"
                data-x="30"
                data-y="40"
                data-speed="500"
                data-start="800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="tema1/assets/images/man.png" alt="">
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="550"
                data-y="75"
                data-speed="500"
                data-start="1400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">We Love Our Clients
              </div>
              <div class="tp-caption largetext sft"
                data-x="550"
                data-y="160"
                data-speed="500"
                data-start="1600"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9;text-align:left;">Pellentesque luctus ac lorem aenean sagittis magna purus vehicsula.<br> Tristique nunc a felis ultricies, ultrices eratSuspendisse velit ticol sodales
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="540"
                data-y="250"
                data-speed="500"
                data-start="1800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><i class="icon-user"></i>
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="625"
                data-y="245"
                data-speed="500"
                data-start="2000"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><i class="glyphicon glyphicon-plus"></i>
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="682"
                data-y="250"
                data-speed="500"
                data-start="2200"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><img src="tema1/assets/images/logo-slider.png" alt="">
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="765"
                data-y="250"
                data-speed="500"
                data-start="2400"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9">=
              </div>
              <div class="tp-caption largeblackbg sfb"
                data-x="815"
                data-y="250"
                data-speed="500"
                data-start="2600"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><i class="icon-heart"></i>
              </div>
              <div class="tp-caption largebutton lft"
                data-x="550"
                data-y="350"
                data-speed="500"
                data-start="2800"
                data-easing="Back.easeOut"
                data-endspeed="500"
                data-endeasing="Power4.easeIn"
                data-captionhidden="on"
                style="z-index: 9"><a href="https://themeforest.net/item/xenia-refined-html-5-css-3-corporate-template/6863456?ref=DankovThemes">Purchase now</a>
              </div>
            </li> -->

          </ul>
        </div>
      </div>
      <script type="text/javascript">
        var revapi;
        jQuery(document).ready(function() {
             revapi = jQuery('.tp-banner').revolution({
              delay:9000,
              startwidth:1170,
              startheight:500,
              hideThumbs:10,
              forceFullWidth:"off",
            });
        }); //ready
      </script>

<!-- OUR SERVICE -->
      <div class="container marg75">
        <div class="row">
          <div class="col-lg-12">
            <div class="promo-block">
              <div class="promo-text"><b>SELAMAT DATANG DI MOTIVADEA IT SOLUTIONS</b></div>
              <div class="center-line"></div>
            </div>
            <div class="promo-paragraph">Teknologi informasi merupakan inti dari bagaimana Anda melakukan bisnis Anda dan bagaimana model bisnis Anda sendiri berkembang. 
Lalu apa yang menjadikan kami percaya diri bisa menjadi Konsultan Teknologi anda ? Layanan apa saja yang bisa kami berikan untuk anda ?</div>
          </div>
        </div>
      </div>
      <div class="container animated-area">
        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12 animated" data-animation-delay="0.3s" data-animation="fadeInUp">
            <div class="hi-icon-effect marg50">
              <div class="hi-icon icon-globe"></div>
              <div class="service-name">Pembuatan Website</div>
              <div class="service-text">Kami membuat website menggunakan teknologi terbaru dengan desain yang menarik serta responsif, bisa diakses di perangkat apapun.</div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12 animated" data-animation-delay="0.6s" data-animation="fadeInUp">
            <div class="hi-icon-effect marg50">
              <div class="hi-icon icon-mobile"></div>
              <div class="service-name">Aplikasi Smartphone</div>
              <div class="service-text">Pembuatan aplikasi Android & IOS. Ide dari anda akan kami wujudkan dalam bentuk aplikasi di smartphone anda.</div>
           </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12 animated" data-animation-delay="0.9s" data-animation="fadeInUp">
            <div class="hi-icon-effect marg50">
              <div class="hi-icon icon-database"></div>
              <div class="service-name">Konsultan & Audit IT</div>
              <div class="service-text">Kami menyediakan jasa Konsultan & Audit IT untuk infrastruktur mau pun sistem pada bisnis/perusahaan anda.</div>
           </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 col-ms-12 animated" data-animation-delay="1.2s" data-animation="fadeInUp">
            <div class="hi-icon-effect marg50">
              <div class="hi-icon icon-desktop"></div>
              <div class="service-name">Internet Marketing</div>
              <div class="service-text">Jasa optimasi pemasaran website anda, agar lebih menjangkau berbagai kalangan. Menjadi no.1 di setiap pencarian kata kunci google.</div>
            </div>
          </div>
        </div>
      </div>

<!-- PORTOFOLIO -->
      <div class="container-color marg75">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="promo-block">
                <div class="promo-text"><b>Portofolio Kami</b></div>
                <div class="center-line"></div>
              </div>
              <div class="promo-paragraph">Berikut beberapa pekerjaan di Instansi maupun Perusahaan yang telah selesai kami kerjakan, kami rangkum dalam satu galeri portofolio.</div>
            </div>
          </div>
        </div>
        <div class="container marg50 animated-area">
          <div class="grid hover-3">
            <div class="cbp-l-grid-projects" id="grid-container">
              <ul>
                @foreach($portofoliolist as $portofolio)
                <li class="cbp-item animated" data-animation-delay="0.3s" data-animation="fadeIn">
                  <div class="portfolio-main">
                    <figure>
                      <img src="{{ asset ('klien/'.$portofolio->picture)}}" alt="{{ $portofolio->title }}">
                      <figcaption>
                        <h3>{{ $portofolio->title }}</h3>
                        <span>&copy; Motivadea IT Solutions</span>
                        <a href="{{ asset ('klien/'.$portofolio->picture)}}" class="portfolio-attach cbp-lightbox" data-title="{{ $portofolio->title . '<br>' . $portofolio->description }}"><i class="icon-search"></i></a>
                        <!-- <a href="#" class="portfolio-search cbp-singlePageInline"><i class="icon-attach"></i></a> -->
                      </figcaption>
                    </figure> 
                  </div>
                </li>
                @endforeach
               </ul>
            </div>
            <!-- <div class="col-lg-12">
              <div class="button-center"><a href="portfolio/loadmore.html" class="btn-simple cbp-l-loadMore-button-link">Load Full Portfolio</a></div>
            </div> -->
          </div>  
        </div>
      </div>

<!-- TESTIMONIAL -->
      <div class="prl-1">
        <div class="prlx">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 marg50"><div class="quote"><i class="fa fa-quote-right"></i></div></div>
              <div class="col-lg-12">
                <div class="testimonials">
                  <div id="carousel-testimonials" class="carousel slide">
                    <ol class="carousel-indicators">
                      <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                      <li data-target="#carousel-testimonials" data-slide-to="1" class=""></li>
                      <li data-target="#carousel-testimonials" data-slide-to="2" class=""></li>
                      <li data-target="#carousel-testimonials" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="item active">
                        <p class="testimonial-quote">Bekerja sama dengan Motivadea IT Solutions adalah keputusan terbaik yang pernah saya buat untuk mengembangkan bisnis saya. Sistem jadi lebih baik dari yang sebelumnya masih konvensional. Kompetensi mereka tidak diragukan lagi.</p>
                        <p class="testimonial-author">Bp.Sumadi - Umbul Tirta Sumur Artesis</p>
                      </div>
                      <div class="item">
                        <p class="testimonial-quote">Jujur saja saya orang yang awam tentang IT, namun setelah berkonsultasi secara bertahap dengan Motivadea IT Solutions saya mulai paham bahwa jika bisnis yang sudah berkembang harus menggunakan sistem yang canggih.</p>
                        <p class="testimonial-author">Bp.Aries - Aries Frozen Food & Burger</p>
                      </div>
                      <div class="item">
                        <p class="testimonial-quote">Saya mau buat sistem untuk instansi saya, namun dalam benak dan bayangan saya sistem ini terlalu rumit dan bahkan mahal. Setelah saya berkonsultasi dengan Motivadea IT Solutions, semua yang saya bayangkan tadi serasa sirna karena di tangan ahli IT mereka semua jadi mudah. </p>
                        <p class="testimonial-author">Bp. I Wayan Suarta - Denpasar Bali</p>
                      </div>
                      <div class="item">
                        <p class="testimonial-quote">Aenean luctus non eros et bibendum. Vivamus facilisis sollicitudin auctor. In tellus ante, porttitor et gravida non, tincidunt lacinia augue. </p>
                        <p class="testimonial-author">Julia Romer</p>
                      </div>
                    </div>
                    <a class="left carousel-control" href="#carousel-testimonials" data-slide="prev">&lsaquo;</a>
                    <a class="right carousel-control" href="#carousel-testimonials" data-slide="next">&rsaquo;</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

<!-- ABOUT --> <!-- RECENT POST -->
      <div class="container marg75">
        <div class="row animated-area">
          <div class="col-lg-6 col-md-6 col-sm-12 animated" data-animation-delay="0.3s" data-animation="fadeInLeft">
            <div class="promo-block">
              <div class="promo-text">Tentang Kami</div>
              <div class="center-line"></div>
            </div>
            <div class="marg50">
              <p class="about-text"><span class="first-letter">K</span>ami adalah sebuah perusahaan yang bergerak di bidang jasa konsultan teknologi informasi dan pengembang 
perangkat lunak baik berbasis Website maupun Mobile Apps (aplikasi yang berjalan di Smartphone). 
Didirikan di Semarang pada tanggal 30 September 2009, telah berpengalaman dan dipercaya menyelesaikan 
pekerjaan di berbagai Instansi maupun Perusahaan Swasta di seluruh Indonesia.</p>
              <ul class="list-check">
                <li><i class="icon-ok"></i> Clean Code & Minimalis Design</li>
                <li><i class="icon-ok"></i> Responsive on All Devices</li>
                <li><i class="icon-ok"></i> Powerful & Flexible Settings</li>
                <li><i class="icon-ok"></i> Online Premium Support</li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 animated" data-animation-delay="0.3s" data-animation="fadeInRight">
            <div class="promo-block">
              <div class="promo-text">Blog Terbaru</div>
              <div class="center-line"></div>
            </div>
            <div class="row marg50">
            @foreach($postlist as $post)
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                <div class="blog-main">
                  <div class="blog-images">
                    <div class="view view-fifth">
                      <img src="{{ asset('blogimg/'.$post->picture)}}" alt="">
                      <div class="mask"><a href="{{ url('post/'.$post->link)}}" class="btn-blog">Selengkapnya</a></div>
                    </div>
                  </div>
                  <div class="blog-name"><a href="{{ url('post/'.$post->link)}}">{{ $post->title}}</a></div>
                  <div class="blog-desc">{{ $post->created_at }} by <a href="#">Motivadea IT Solutions</a>, in <a href="{{ url('category/'.$post->category->link)}}">{{ $post->category->title }}</a></div>
                </div>
              </div>
            @endforeach
            </div>
          </div>
        </div>
      </div>

<!-- OUR CLIENT -->
      <div class="container marg75 animated-area">
        <div class="row">
          <div class="col-lg-12">
            <div class="promo-block">
              <div class="promo-text">Teknologi yang Kami Gunakan</div>
              <div class="center-line"></div>
            </div>
          </div>
          <div class="col-lg-12 marg25">
            <div class="jcarousel-wrapper">
              <div class="jcarousel animated-area">
                <ul>
                  <li class="animated" data-animation-delay="0.3s" data-animation="fadeInUp"><a href="#"><img src="{{ asset('tech/1.png')}}" alt=""></a></li>
                  <li class="animated" data-animation-delay="0.5s" data-animation="fadeInDown"><a href="#"><img src="{{ asset('tech/2.png')}}" alt=""></a></li>
                  <li class="animated" data-animation-delay="0.7s" data-animation="fadeInUp"><a href="#"><img src="{{ asset('tech/3.png')}}" alt=""></a></li>
                  <li class="animated" data-animation-delay="0.9s" data-animation="fadeInDown"><a href="#"><img src="{{ asset('tech/4.png')}}" alt=""></a></li>
                  <li class="animated" data-animation-delay="1.1s" data-animation="fadeInUp"><a href="#"><img src="{{ asset('tech/5.png')}}" alt=""></a></li>
                  <li class="animated" data-animation-delay="1.3s" data-animation="fadeInDown"><a href="#"><img src="{{ asset('tech/6.png')}}" alt=""></a></li>
                </ul>
              </div>
              <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
              <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('footer')
	@include($footer)
@stop
