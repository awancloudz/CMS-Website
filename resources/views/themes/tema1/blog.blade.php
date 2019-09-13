    <div class="page-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pull-left"><div class="page-in-name"><b>Blog Post</b></div></div>
            <div class="col-lg-6 pull-right"><div class="page-in-bread"><a href="{{ url('/')}}">Home</a> \ Blog</div></div>
          </div>
        </div>
    </div>
    
    <div class="container marg50">
        <div class="row">
          <div class="col-lg-9">
          @foreach($postlist as $post)
            <div class="row">
              <div class="medium-blog">
                <div class="col-lg-5">
                  <div class="cl-blog-img"><img src="{{ asset('blogimg/'.$post->picture)}}" alt=""></div>
                </div>
                <div class="col-lg-7">
                  <div class="med-blog-naz">
                    <div class="cl-blog-name"><a href="{{ url('post/'.$post->link)}}"><b>{{ $post->title}}</b></a></div>
                    <div class="cl-blog-detail">{{ $post->created_at }}, by <a href="#">Motivadea IT Solutions</a>, in <a href="{{ url('category/'.$post->category->link)}}">{{ $post->category->title }}</a>, <a href="#">25 comments</a></div>
                    <div class="cl-blog-text">
                    <?php $short = substr($post->description,0,200); ?>
                    {!! $short !!}..
                    </div>
                  </div>
                  <div class="cl-blog-read"><a href="{{ url('post/'.$post->link)}}">Selengkapnya &raquo;</a></div>
                </div>
                <div class="cl-blog-line"></div>
              </div>
            </div>
          @endforeach

          </div> 
          <div class="col-lg-3">
            <div class="promo-text-blog"><b>Pencarian</b></div>
            <input class="blog-search" type="text" placeholder="Ketik disini...">
            <div class="promo-text-blog"><b>Selamat Membaca</b></div>
            <p class="text-widget">Blog ini didedikasikan untuk anda semua yang ingin belajar, baik pemula maupun yang sudah expert. Di atas langit masih ada langit, belajar adalah hal yang selalu kita lakukan agar selalu terdepan dalam kehidupan.</p>
            <div class="promo-text-blog">Kategori</div>
            <ul class="blog-category">
              <li><i class="fa fa-angle-right"></i> <a href="#">Wordpress</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Frond-end</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Corporate</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Creative</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Minimal</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#">Web Design</a></li>
            </ul>
            <div class="promo-text-blog"><b>Tag Populer</b></div>
            <ul class="tags-blog">
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
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="pride_pg">
              <span class="page-numbers current">1</span>
                <a class="page-numbers" href="#">2</a>
                <a class="page-numbers" href="#">3</a>
                <a class="page-numbers" href="#">4</a>
                <a class="page-numbers" href="#">5</a>                
                <a class="next_page page-numbers" href="#">Next</a>
            </div>
          </div>
        </div>
    </div>