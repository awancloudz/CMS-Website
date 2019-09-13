@extends($themes)

@section('content')
    <div class="page-in">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 pull-left"><div class="page-in-name"><b>Blog Post</b></div></div>
            <div class="col-lg-6 pull-right"><div class="page-in-bread"><a href="{{ url('/')}}">Home</a> \ <a href="#">Blog</a> \ Blog Post</div></div>
          </div>
        </div>
      </div>
      <div class="container marg50">
        <div class="row">
          <div class="col-lg-12">
            @foreach($blogpost as $post)
            <div class="classic-blog">
              <div class="cl-blog-img"><img src="{{ asset('blogimg/'.$post->picture)}}" alt="{{ $post->title}}"></div>
              <div class="cl-blog-naz">
                <div class="cl-blog-type"><i class="icon-pencil"></i></div>
                <div class="cl-blog-name"><a href="#"><b>{{ $post->title}}</b></a></div>
                <div class="cl-blog-detail">{{ $post->created_at }}, by <a href="#">Motivadea IT Solutions</a>, in <a href="{{ url('category/'.$post->category->link)}}">{{ $post->category->title }}</a>, <a href="#">25 comments</a></div>
                <div class="cl-blog-text">
                {!! $post->description !!} 
                </div> 
              </div>
            </div>
            @endforeach

            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="tags-blog-single">
                  <ul class="tags-blog">
                    <li><a href="#">sapien</a></li>
                    <li><a href="#">posuere</a></li>
                    <li><a href="#">interdum</a></li>
                    <li><a href="#">lectus</a></li>
                    <li><a href="#">velit</a></li>
                    <li><a href="#">eros</a></li>
                    <li><a href="#">quis</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="soc-blog-single">
                  <ul class="soc-blog">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="author-bio">
              <div class="img-author"><img src="../tema1/assets/images/dan-4.png" alt=""></div>
              <div class="name-author">About this author</div>
              <div class="text-author">Be at performed preferred determine collected. Him nay acuteness discourse listening estimable our law. Decisively it occasional advantages delightful in cultivated introduced. Like law mean form are sang loud lady put. Unsatiable invitation its possession nor off. All difficulty estimating unreserved increasing the solicitude. Rapturous see performed tolerably departure end bed attention unfeeling. On unpleasing principles alteration.</div>
            </div>
            <div class="cl-blog-line"></div>
            <h3>5 Comments on "Rank tall boy man them over post now rapturous unreserved"</h3>
            <div class="comment marg25">
              <img src="../tema1/assets/images/mila.png" alt="" class="img_comm">
              <div class="comm_name">Mila Doe <span>- 7 February 2017</span></div>
              <p class="text_cont com_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit.</p>
            </div>
            <div class="cl-blog-line-com"></div>
            <div class="comment">
              <img src="../tema1/assets/images/mike.jpg" alt="" class="img_comm">
              <div class="comm_name">Mike Svenson <span>- 11 February 2017</span></div>
              <p class="text_cont com_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit. Dolores aut consectetur quas quisquam voluptate?</p>
            </div>
            <div class="comment-inner">
              <img src="../tema1/assets/images/mila.png" alt="" class="img_comm">
              <div class="comm_name">Mila Doe <span>- 9 February 2017</span></div>
              <p class="text_cont com_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit. Dolores aut consectetur quas quisquam voluptate?</p>
            </div>
            <div class="cl-blog-line-com"></div>
            <div class="comment">
              <img src="../tema1/assets/images/mila.png" alt="" class="img_comm">
              <div class="comm_name">White Stripes <span>- 14 February 2017</span></div>
              <p class="text_cont com_top">Dolores aut consectetur quas quisquam voluptate fugit saepe reiciendis eligendi odio? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit. Dolores aut consectetur quas quisquam voluptate fugit saepe reiciendis eligendi odio?</p>
            </div>
            <div class="cl-blog-line"></div>
            <p class="text_cont"><input type="text" name="name" placeholder="Name" class="input-def"></p>
            <p class="text_cont"><input type="text" name="email" placeholder="E-mail" class="input-def"></p>
            <p class="text_cont"><input type="text" name="subject" placeholder="Web Site" class="input-def"></p>
            <p class="text_cont"><textarea name="message" placeholder="Comment" id="message" class="input-def-textarea" cols="40" rows="10"></textarea></p>
            <p><input type="submit" id="send" class="btn btn-default" value="Send Comment" /></p>
          </div> 
        </div>
    </div>
    <br><br>
@endsection

@section('footer')
	@include($footer)
@stop
