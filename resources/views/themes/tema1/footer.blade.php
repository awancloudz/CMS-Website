<!-- FOOTER -->
        <div id="footer" class="footer" style="margin-top:0px;">
            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="promo-text-footer">Get in Touch</div>
                <ul class="contact-footer">
                    <li><i class="icon-location"></i> Adress: 455 Martinson, Los Angeles</li>
                    <li><i class="icon-mobile"></i> Phone: 8 (043) 567 - 89 - 30</li>
                    <li><i class="icon-videocam"></i> Skype: companyname</li>
                    <li><i class="icon-mail"></i> E-mail: support@email.com</li>
                    <li><i class="icon-key"></i> Weekend: from 9 am to 6 pm</li>
                </ul> 
                <ul class="soc-footer">
                    <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                    <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                    <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
                </ul>       
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="promo-text-footer">Popular Tags</div>
                    <ul class="tags-footer">
                    <li><a href="#">sapien</a></li>
                    <li><a href="#">posuere</a></li>
                    <li><a href="#">interdum</a></li>
                    <li><a href="#">lectus</a></li>
                    <li><a href="#">velit</a></li>
                    <li><a href="#">eros</a></li>
                    <li><a href="#">quis</a></li>
                    <li><a href="#">fermen</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">sapien</a></li>
                    <li><a href="#">posuere</a></li>
                    <li><a href="#">interdum</a></li>
                    <li><a href="#">lectus</a></li>
                    <li><a href="#">velit</a></li>
                    <li><a href="#">eros</a></li>
                    <li><a href="#">quis</a></li>
                    <li><a href="#">fermen</a></li>
                    <li><a href="#">lorem</a></li>
                    <li><a href="#">sapien</a></li>
                    <li><a href="#">posuere</a></li>
                    <li><a href="#">interdum</a></li>
                    <li><a href="#">quis</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="promo-text-footer">Flickr Photos</div>
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
                                    <a href="{{ $menu->link }}">{{ $menu->title }}</a>
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