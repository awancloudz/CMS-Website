<!-- FOOTER -->
        <div id="footer" class="footer" style="margin-top:0px;">
            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="promo-text-footer">Kontak Perusahaan</div>
                @foreach($websettings as $web)
                <ul class="contact-footer">
                    <li><i class="icon-location"></i> Alamat : {!! $web->address !!}</li>
                    <li><i class="icon-mobile"></i> Phone : {{ $web->phone }} </li>
                    <li><i class="icon-mail"></i> E-mail : {{ $web->email }}</li>
                    <li><i class="icon-key"></i> Jam Kerja : 08.00 - 17.00 WIB (Senin-Sabtu)</li>
                </ul> 
                @endforeach
                <ul class="soc-footer">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Telegram"><i class="fa fa-telegram"></i></a></li>
                </ul>       
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="promo-text-footer">Tag Populer</div>
                    <ul class="tags-footer">
                    <li><a href="#">website</a></li>
                    <li><a href="#">mobileapps</a></li>
                    <li><a href="#">android</a></li>
                    <li><a href="#">html</a></li>
                    <li><a href="#">css</a></li>
                    <li><a href="#">javascript</a></li>
                    <li><a href="#">sistem informasi</a></li>
                    <li><a href="#">ecommerce</a></li>
                    <li><a href="#">laravel</a></li>
                    <li><a href="#">ionicframework</a></li>
                    <li><a href="#">seo</a></li>
                    <li><a href="#">macbook</a></li>
                    <li><a href="#">linux</a></li>
                    <li><a href="#">windows</a></li>
                    <li><a href="#">pemrograman</a></li>
                    <li><a href="#">frontend</a></li>
                    <li><a href="#">backend</a></li>
                    <li><a href="#">nodejs</a></li>
                    <li><a href="#">internetmarketing</a></li>
                    <li><a href="#">webdesign</a></li>
                    <li><a href="#">uiux</a></li>
                    <li><a href="#">digitalmarketing</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="promo-text-footer">Galeri Foto</div>
                    <div class="flickr_widget_wrapper"><script src="https://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=46591745@N03"></script></div>
                </div>
            </div>
            </div>
            
            <div class="container">
                <div class="footer-bottom">
                    <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-left">
                        <div class="copyright">Copyright © 2019 <a href="#">Motivadea IT Soluions</a>.</div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-ms-12 pull-right">
                        <div class="foot_menu">
                        <ul>
                            @foreach($webmenu as $menu)
                                @if($menu->id_groupmenu == 1)
                                <li>
                                    <a href="{{ url($menu->link) }}">{{ $menu->title }}</a>
                                </li>
                                @endif
                            @endforeach
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END FOOTER -->