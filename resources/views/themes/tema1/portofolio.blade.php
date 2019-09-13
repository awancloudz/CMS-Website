<div class="page-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pull-left"><div class="page-in-name"><b>Portfolio</b><span></span></div></div>
            <div class="col-lg-6 pull-right"><div class="page-in-bread"><a href="{{ url('/')}}">Home</a> \ Portfolio</div></div>
          </div>
        </div>
      </div>
      <div class="container marg50">
        <div class="row">
          <div class="col-lg-12">
            <div id="filters-container-portfolio-4" class="cbp-l-filters-button">
              <button data-filter="*" class="cbp-filter-item-active cbp-filter-item">Semua<div class="cbp-filter-counter"></div></button>
              @foreach($categorylist as $catportofolio)
              <button data-filter=".{{ $catportofolio->tags }}" class="cbp-filter-item">{{ $catportofolio->tags }}<div class="cbp-filter-counter"></div></button>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="container marg50">
        <div class="grid hover-3">
          <div class="cbp-l-grid-projects" id="grid-container-portfolio-4">
            <ul>
            @foreach($portofoliolist as $portofolio)
              <li class="cbp-item {{ $portofolio->tags }}">
                <div class="portfolio-main">
                  <figure>
                    <img src="{{ asset ('klien/'.$portofolio->picture)}}" alt="{{ $portofolio->title }}">
                    <figcaption>
                      <h3>{{ $portofolio->title }}</h3>
                      <span>@copy Motivadea IT Solutions</span>
                      <a href="{{ asset ('klien/'.$portofolio->picture)}}" class="portfolio-attach cbp-lightbox" data-title="{{ $portofolio->title . '<br>' . $portofolio->description }}"><i class="icon-search"></i></a>
                      <!-- <a href="portfolio/project1.html" class="portfolio-search cbp-singlePageInline"><i class="icon-attach"></i></a> -->
                    </figcaption>
                  </figure> 
                </div>
              </li>
            @endforeach
            </ul>
          </div>
          <div class="col-lg-12">
            <div class="button-center"><a href="portfolio/loadmore-portfolio.html" class="btn-simple cbp-l-loadMore-button-link">Load Full Portfolio</a></div>
          </div>
        </div>  
      </div>