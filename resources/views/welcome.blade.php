@extends('layouts.app')


@section('header')
    <title>Viral Content, Latest News - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
    <div class="site-content">
            <!-- <div class="mnmd-block mnmd-block--fullwidth mnmd-block--contiguous mnmd-featured-with-list mnmd-featured-with-list--vertical-list">
                <div class="mnmd-featured-with-list__wrapper js-overlay-bg">
                    <div class="main-background background-img hidden-xs hidden-sm" style="background-image: url('http://9scroob.com/storage/app/public/posts/April2019/pn8KDvX0jYVB1O5ve38y.jpg')"></div>
                    <div class="mnmd-featured-with-list__inner">
                        <article class="main-post post cat-4">
                            <div class="background-img background-img--darkened hidden-md hidden-lg" style="background-image: url('http://9scroob.com/storage/app/public/posts/April2019/pn8KDvX0jYVB1O5ve38y.jpg')"></div>
                            <div class="post__text inverse-text"><a href="category/news" class="post__cat post__cat--bg cat-theme-bg">News</a>
                                <h3 class="post__title typescale-6"><a href="why-madras-high-court-ordered-centre-government-for-tik-tok-ban">Why Madras High Court Ordered Centre Government for Tik-Tok Ban?</a></h3>
                                <div class="post__excerpt post__excerpt--lg hidden-xs">On Wednesday, Madras high court has ordered Center Government to ban Tik Tok in India as they say that it violates children online privacy act. </div>
                                <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> -->
            <div class="mnmd-block mnmd-block--fullwidth mnmd-mosaic mnmd-mosaic--gutter-10">
                <div class="container-fluid max-width-xl">
                    <div class="row row--space-between">
                        <div class="mosaic-item col-xs-12 col-lg-6">
                            <article class="post post--overlay post--overlay-floorfade post--overlay-bottom cat-4">
                                <div class="background-img" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{ str_replace("\\", "/", $slider_post[0]->image)}}"></div>
                                <div class="post__text inverse-text">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <h3 class="post__title typescale-4">{{$slider_post[0]->title}}</h3>
                                            <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{$slider_post[0]->slug}}" class="link-overlay"></a> <a href="category/{{$slider_post[0]->category->slug}}" class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">{{$slider_post[0]->category->name}}</a>
                            </article>
                        </div>
                        <div class="mosaic-item col-xs-12 col-md-6 col-lg-3">
                            <article class="post post--overlay post--overlay-floorfade post--overlay-bottom cat-3">
                                <div class="background-img" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{ str_replace("\\", "/", $slider_post[1]->image)}}"></div>
                                <div class="post__text inverse-text">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <h3 class="post__title typescale-3">{{$slider_post[1]->title}}</h3>
                                            <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{$slider_post[1]->slug}}" class="link-overlay"></a> <a href="category/{{$slider_post[1]->category->slug}}" class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">{{$slider_post[1]->category->name}}</a>
                            </article>
                        </div>
                        <div class="mosaic-item mosaic-item--half col-xs-12 col-sm-6 col-lg-3">
                            <article class="post post--overlay post--overlay-floorfade post--overlay-bottom cat-4">
                                <div class="background-img" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{ str_replace("\\", "/", $slider_post[2]->image)}}"></div>
                                <div class="post__text inverse-text">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <h3 class="post__title typescale-1"><a href="#">{{$slider_post[2]->title}}</a></h3>
                                            <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{$slider_post[2]->slug}}" class="link-overlay"></a> <a href="category/{{$slider_post[2]->category->slug}}" class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">{{$slider_post[2]->category->name}}</a>
                            </article>
                        </div>
                        <div class="mosaic-item mosaic-item--half col-xs-12 col-sm-6 col-lg-3">
                            <article class="post post--overlay post--overlay-floorfade post--overlay-bottom cat-1">
                                <div class="background-img" style="background-image: url(&quot;{{asset('storage/app/public')}}/{{ str_replace("\\", "/", $slider_post[3]->image)}}"></div>
                                <div class="post__text inverse-text">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <h3 class="post__title typescale-1"><a href="#">{{$slider_post[3]->title}}</a></h3>
                                            <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span></div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{$slider_post[3]->slug}}" class="link-overlay"></a> <a href="category/{{$slider_post[3]->category->slug}}" class="post__cat post__cat--bg cat-theme-bg overlay-item--top-left">{{$slider_post[3]->category->name}}</a>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mnmd-layout-split mnmd-block mnmd-block--fullwidth">
                <div class="container">
                    <div class="row">
                        <div class="mnmd-main-col has-left-sidebar">
                            <div class="mnmd-block">
                                <div class="block-heading block-heading--line-under">
                                    <h4 class="block-heading__title"><span class="first-word">News</span> Stories</h4><a href="{{url('./category/news')}}" class="block-heading__secondary"><span class="first-word">View all</span> News<i class="mdicon mdicon-arrow_forward mdicon--last"></i></a></div>
                                <div class="row row--space-between">
                                    <div class="col-xs-12 col-sm-6">
                                        <article class="post--vertical cat-1">
                                            <div class="post__thumb">
                                                <a href="/{{$news_post[0]->slug}}"><img src="{{Voyager::image($news_post[0]->thumbnail('medium'))}}"></a>
                                            </div>
                                            <div class="post__text">
                                                <h3 class="post__title typescale-2"><a href="/{{$news_post[0]->slug}}">{{$news_post[0]->title}}</a></h3>
                                                <div class="post__excerpt">
                                                    {!! substr($news_post[0]->body, 20, 100) !!}
                                                </div>
                                                <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span>
                                                    <!-- <time class="time published" ><i class="mdicon mdicon-schedule"></i></time> -->
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="row row--space-between">
                                            <div class="col-xs-6">
                                                <article class="post--vertical cat-2">
                                                    <div class="post__thumb">
                                                        <a href="/{{$news_post[1]->slug}}"><img src="{{Voyager::image($news_post[1]->thumbnail('small'))}}" style="height: 100px"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-0"><a href="/{{$news_post[1]->slug}}">
                                                             {{$news_post[1]->title}}
                                                        </a></h3></div>
                                                </article>
                                            </div>
                                            <div class="col-xs-6">
                                                <article class="post--vertical cat-2">
                                                    <div class="post__thumb">
                                                        <a href="/{{$news_post[2]->slug}}"><img src="{{Voyager::image($news_post[2]->thumbnail('small'))}}"  style="height: 100px"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-0"><a href="/{{$news_post[2]->slug}}">
                                                             {{$news_post[2]->title}}
                                                        </a></h3></div>
                                                </article>
                                            </div>
                                            <div class="col-xs-12">
                                                <ul class="list-space-xs list-unstyled list-square-bullet list-seperated">
                                                    @for($i=3; $i <= 5; $i++)
                                                    <li>
                                                        <article class="post--list cat-4">
                                                            <div class="post__text">
                                                                <h3 class="post__title typescale-0"><a href="/{{ $news_post[$i]->slug }}">{{ $news_post[$i]->title }}</a></h3></div>
                                                        </article>
                                                    </li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row -->
                            </div>
                            <div class="mnmd-block">
                                <div class="row row--space-between">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="block-heading block-heading--line-under">
                                            <h4 class="block-heading__title">LifeStyle</h4><a href="./category/lifestyle" class="block-heading__secondary"><span class="first-word">View all</span><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a></div>
                                        <div class="row row--space-between">
                                            <div class="col-xs-12">
                                                <article class="post--vertical cat-1">
                                                    <div class="post__thumb">
                                                        <a href="/{{$lifestyle_post[0]->slug}}"><img src="{{Voyager::image($lifestyle_post[0]->thumbnail('medium'))}}" style="height: 200px"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-2"><a href="/{{$lifestyle_post[0]->slug}}">{{$lifestyle_post[0]->title}}
                                                        </a></h3>
                                                        
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xs-6">
                                                <article class="post--vertical cat-2">
                                                    <div class="post__thumb">
                                                        <a href="/{{$lifestyle_post[1]->slug}}"><img src="{{Voyager::image($lifestyle_post[1]->thumbnail('small'))}}"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-0"><a href="/{{$lifestyle_post[1]->slug}}">{{$lifestyle_post[1]->title}}</a></h3></div>
                                                </article>
                                            </div>
                                            <div class="col-xs-6">
                                                <article class="post--vertical cat-2">
                                                    <div class="post__thumb">
                                                        <a href="/{{$lifestyle_post[2]->slug}}"><img src="{{Voyager::image($lifestyle_post[2]->thumbnail('small'))}}"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-0"><a href="/{{$lifestyle_post[2]->slug}}">{{$lifestyle_post[2]->title}}</a></h3></div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="block-heading block-heading--line-under">
                                            <h4 class="block-heading__title">Food</h4><a href="./category/food" class="block-heading__secondary"><span class="first-word">View all</span><i class="mdicon mdicon-arrow_forward mdicon--last"></i></a></div>
                                        <div class="row row--space-between">
                                            <div class="col-xs-12">
                                                <article class="post--vertical cat-1">
                                                    <div class="post__thumb">
                                                        <a href="/{{$food_post[0]->slug}}"><img src="{{Voyager::image($food_post[0]->thumbnail('medium'))}}" style="height: 200px"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-2"><a href="/{{$food_post[0]->slug}}">{{$food_post[0]->title}}
                                                        </a></h3>
                                                        
                                                    </div>
                                                </article>
                                            </div>
                                            <div class="col-xs-6">
                                                <article class="post--vertical cat-2">
                                                    <div class="post__thumb">
                                                        <a href="/{{$food_post[1]->slug}}"><img src="{{Voyager::image($food_post[1]->thumbnail('small'))}}"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-0"><a href="/{{$food_post[1]->slug}}">{{$food_post[1]->title}}</a></h3></div>
                                                </article>
                                            </div>
                                            <div class="col-xs-6">
                                                <article class="post--vertical cat-2">
                                                    <div class="post__thumb">
                                                        <a href="/{{$food_post[2]->slug}}"><img src="{{Voyager::image($food_post[2]->thumbnail('small'))}}"></a>
                                                    </div>
                                                    <div class="post__text">
                                                        <h3 class="post__title typescale-0"><a href="/{{$food_post[2]->slug}}">{{$food_post[2]->title}}</a></h3></div>
                                                </article>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- .row -->
                            </div>
                            <div class="mnmd-block">
                                @include('includes.ad_script')
                            </div>
                            <div class="mnmd-block">
                                <div class="block-heading block-heading--line-under">
                                    <h4 class="block-heading__title"><span class="first-word">Latest</span> Stories</h4></div>
                                <div class="list-unstyled list-space-md list-seperated">

                                    @if($posts->count() > 0)
                                    @foreach($posts as $post)
                                    <div class="list-item">
                                        <article class="post post--horizontal post--horizontal-sm cat-2">
                                            <div class="post__thumb">
                                                <a href="/{{$post->slug}}"><img src="{{Voyager::image($post->thumbnail('small'))}}"></a>
                                            </div>
                                            <div class="post__text">
                                                <a href="{{url('/category')}}/{{$post->category->slug}}" class="post__cat cat-theme">{{$post->category->name}}</a>
                                                <h3 class="post__title typescale-2"><a href="/{{$post->slug}}">{{substr($post->title,0, 80)}}...</a></h3>
                                                <div class="post__excerpt">
                                                    {!!substr($post->body, 20, 200)!!} 
                                                </div>
                                                <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span>
                                                    <time class="time published" datetime="{{date('d', strtotime($post->updated_at))}}" title="{{$post->title}}"><!-- <i class="mdicon mdicon-schedule"> --></i></time>
                                                     <!-- <a href="#" title="21 comments"><i class="mdicon mdicon-chat_bubble_outline"></i>21</a> -->
                                                 </div>
                                            </div>
                                        </article>
                                    </div>
                                    @endforeach
                                    @else
                                    <h3>Nothing Found...</h3>
                                    @endif
                                </div>
                                <div class="text-center" style="    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.03), 0 6px 6px rgba(0, 0, 0, 0.05); margin: 19px 0px;">
                                	{{$posts->links()}}
                                </div>
                                
                                <!-- <nav class="mnmd-pagination text-center"><a href="#" class="btn btn-default">View all stories<i class="mdicon mdicon-arrow_forward mdicon--last"></i></a></nav> -->
                            </div>
                            <!-- .mnmd-block -->
                        </div>
                        <!-- .mnmd-main-col -->
                        <div class="mnmd-sub-col js-sticky-sidebar" role="complementary">
                            <!-- Widget subscribe -->
                            <div class="mnmd-widget widget widget-subscribe widget-subscribe--stack-top">
                                @include('includes.ad_script')
                            </div>
                            <div class="mnmd-widget widget widget-subscribe widget-subscribe--stack-top">
                                <div class="widget-subscribe__inner">
                                    <div class="subscribe-form subscribe-form--center">
                                        <p><b class="typescale-3">Don't miss any updates</b></p>
                                        <p>Enter your email to receive viral news and updates direct into your inbox</p>
                                         @if (session('success'))
                                            <div>
                                                {{ session('success') }}
                                            </div>
                                        @endif
                                         <form action="{{route('new_subscriber')}}" method="POST">
                                            @csrf
                                            <div class="subscribe-form__fields">
                                                <p>
                                                    <label>Email address:</label>
                                                    <input type="email" name="email" placeholder="Your email address" required="">
                                                </p>
                                                <p>
                                                    <input type="submit" value="Subscribe" class="btn-block">
                                                </p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Widget subscribe -->
                            <div class="mnmd-widget-reviews-list mnmd-widget widget">
                                <div class="widget__title">
                                    <h4 class="widget__title-text">Technology</h4>
                                </div>
                                
                                <ol class="posts-list list-space-sm list-unstyled">
                                    @if($tech_post->count() > 0)
                                    @foreach($tech_post as $post)
                                    <li>
                                        <article class="post post--vertical cat-1">
                                            <div class="post__thumb">
                                                <a href="/{{$post->slug}}"><img src="{{Voyager::image($post->thumbnail('medium'))}}"></a>
                                            </div>
                                            <div class="post__text">
                                                <div class="media">
                                                    <div class="media-body media-middle">
                                                        <h3 class="post__title typescale-0">{{$post->title}}</h3></div>
                                                    
                                                </div>
                                            </div>
                                            <a href="/{{$post->slug}}" class="link-overlay"></a>
                                        </article>
                                    </li>
                                    @endforeach
                                    @else
                                    <h3>Nothing Found...</h3>
                                    @endif
                                </ol>
                                
                            </div>
                            
                        </div>
                        <!-- .mnmd-sub-col -->
                    </div>
                    <!-- .row -->
                </div>
                <!-- .container -->
            </div>
            <!-- .mnmd-block -->
            <div class="mnmd-block mnmd-block--fullwidth mnmd-carousel mnmd-carousel-dots-none mnmd-carousel-nav-c">
                <div class="container">
                    <div class="block-heading block-heading--center block-heading--lg">
                        <h4 class="block-heading__title"><span class="first-word">Editor's</span> Pick</h4></div>
                    <div class="mnmd-carousel__inner owl-carousel js-carousel-3i4m">
                        @if($editor_pick->count() > 0)
                        @foreach($editor_pick as $post)
                        <div class="slide-content">
                            <article class="post--overlay post--overlay-bottom post--overlay-floorfade post--overlay-sm cat-5">
                                <div class="background-img" style="background-image: url(&quot;{{ str_replace("\\", "/", Voyager::image($post->thumbnail('medium')))}}&quot;);"></div>
                                <div class="post__text inverse-text text-center">
                                    <div class="post__text-wrap">
                                        <div class="post__text-inner">
                                            <!-- <a href="#" class="post__cat post__cat--bg cat-theme-bg">Business</a> -->
                                            <h3 class="post__title typescale-2"><a href="/{{$post->slug}}">{{$post->title}}</a></h3>
                                            <div class="post__meta">
                                                <!-- <time class="time published" datetime="2016-08-20T08:53+00:00" title="August 20, 2016 at 08:53 am"><i class="mdicon mdicon-schedule"></i>2 hours ago</time> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="/{{$post->slug}}" class="link-overlay"></a>
                            </article>
                        </div>
                        @endforeach
                        @else
                        <h3>Nothing Found...</h3>
                        @endif
                    </div>
                </div>
                <!-- .container -->
            </div>
            <!-- .mnmd-block -->
        </div>
        @include('includes.subscribe-modal')
@endsection    
