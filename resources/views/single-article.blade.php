@extends('layouts.app')

@section('header')
<title>{{$post[0]->title}} - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
    <div class="site-content single-entry" style="transform: none;">
    <div class="mnmd-block mnmd-block--fullwidth single-header-wrap">
        <div class="container">
            <header class="single-header">
                <!-- <a href="#" class="entry-cat cat-theme cat-5">Tech</a> -->
                <h1 class="entry-title entry-title--lg">{{$post[0]->title}}</h1>
                <div class="entry-meta"><span class="entry-author entry-author--with-ava">By <a href="#" class="entry-author__name" rel="author">9Scroob Team</a> </span>
                   <!--  <time class="entry-date published" datetime="{{$post[0]->updated_at}}" itemprop="datePublished" title="{{$post[0]->updated_at}}"><i class="mdicon mdicon-schedule"></i></time> -->
                    
                </div>
            </header>
            <!-- <div class="entry-interaction entry-interaction--horizontal">
                <div class="entry-interaction__left">
                    <div class="post-sharing post-sharing--simple">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{env('APP_URL')}}/{{$post[0]->slug}}" class="sharing-btn sharing-btn-primary facebook-btn facebook-theme-bg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share on Facebook"><i class="mdicon mdicon-facebook"></i><span class="sharing-btn__text">Share</span></a></li>
                          
                            <li><a target="_blank" href="https://twitter.com/share?url={{env('APP_URL')}}/{{$post[0]->slug}}" class="sharing-btn sharing-btn-primary twitter-btn twitter-theme-bg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share on Twitter"><i class="mdicon mdicon-twitter"></i><span class="sharing-btn__text">Tweet</span></a></li>
                            
                            <li><a target="_blank" href="http://pinterest.com/pin/create/button/?url={{env('APP_URL')}}/{{$post[0]->slug}}&description={{$post[0]->title}}" class="sharing-btn pinterest-btn pinterest-theme-bg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Share on Pinterest"><i class="mdicon mdicon-pinterest-p"></i></a></li>
                           
                          
                        </ul>
                    </div>
                </div>
                <div class="entry-interaction__right"><a href="#comment" class="comments-count entry-action-btn" data-toggle="tooltip" data-placement="top" title="" data-original-title="17 comments"><i class="mdicon mdicon-chat_bubble"></i><span>17</span></a></div>
            </div> -->
        </div>
        <!-- .container -->
    </div>
    <!-- .mnmd-block -->
    <div class="mnmd-block mnmd-block--fullwidth single-entry-wrap" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="mnmd-main-col" role="main">
                    <article class="mnmd-block post post--single post-10 type-post status-publish format-standard has-post-thumbnail hentry category-abroad tag-landscape cat-5" itemscope="" itemtype="http://schema.org/Article">
                        
                        <div class="single-content">
                            <div class="entry-thumb single-entry-thumb"><img src="{{asset('storage/app/public')}}/{{$post[0]->image}}"></div>

                            <div class="single-body entry-content typography-copy" itemprop="articleBody">
                                {!!$post[0]->body!!}
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <ins class="adsbygoogle"
                                     style="display:block; text-align:center;"
                                     data-ad-layout="in-article"
                                     data-ad-format="fluid"
                                     data-ad-client="ca-pub-5060116531723583"
                                     data-ad-slot="6783826934"></ins>
                                <script>
                                     (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                            
                        </div>
                        <!-- .single-content -->
                    </article>
                   
                </div>
                <!-- .mnmd-main-col -->
                <div class="mnmd-sub-col mnmd-sub-col--right sidebar js-sticky-sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                    <!-- Widget Indexed posts C -->
                    <!-- Widget Indexed posts C -->
                    <!-- Widget posts list -->
                    <!-- Widget posts list -->
                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;">
                        <div class="mnmd-widget-indexed-posts-c mnmd-widget widget">
                            <div class="widget__title">
                                <h4 class="widget__title-text"><span class="first-word">Popular</span> posts</h4>
                                <div class="widget__title-seperator"></div>
                                <div class="post">
                                    @include('includes.ad_script')
                                </div>
                            </div>
                            <ol class="posts-list list-space-md list-seperated-exclude-first list-unstyled">
                                <li>
                                    <article class="post post--overlay post--overlay-bottom cat-4">
                                        <div class="background-img background-img--darkened" style="background-image: url('{{ str_replace("\\", "/", Voyager::image($popular_post[0]->thumbnail('small')))}}')"></div>
                                        <div class="post__text inverse-text">
                                            <div class="post__text-inner">
                                                <div class="media">
                                                    <div class="media-left media-middle"><span class="list-index">1</span></div>
                                                    <div class="media-body media-middle">
                                                        <h3 class="post__title typescale-1">{{$popular_post[0]->title}}</h3>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="/{{$popular_post[0]->slug}}" class="link-overlay"></a>
                                    </article>
                                </li>
                                
                                @if($popular_post->count() > 0)
                                @for($i = 1; $i < 4; $i++)
                                <li>
                                    <article class="post cat-4">
                                        <div class="media">
                                            <div class="media-left media-middle"><span class="list-index">{{$i+1}}</span></div>
                                            <div class="media-body media-middle">
                                                <h3 class="post__title typescale-0"><a href="/{{$popular_post[$i]->slug}}">{{$popular_post[$i]->title}}</a></h3>
                                                
                                            </div>
                                        </div>
                                    </article>
                                </li>
                                
                                @endfor
                                @else
                                <h3>Nothing Found...</h3>
                                @endif
                               
                            </ol>
                        </div>
                        <div class="mnmd-widget-posts-list mnmd-widget widget">
                            <div class="widget__title">
                                <h4 class="widget__title-text">Latest Posts</h4></div>
                            <ul class="posts-list list-space-sm list-unstyled">
                                @if($latest_post->count() > 0)
                                @foreach($latest_post as $post)
                                <li>
                                    <article class="post post--horizontal post--horizontal-xxs cat-4">
                                        <div class="post__thumb">
                                            <a href="/{{$post->slug}}"><img src="{{Voyager::image($post->thumbnail('small'))}}"></a>
                                        </div>
                                        <div class="post__text">
                                            <h3 class="post__title typescale-0"><a href="/{{$post->slug}}">{{$post->title}}</a></h3>
                                            
                                        </div>
                                    </article>
                                </li>
                                @endforeach
                                @else
                                <h3>Nothing Found...</h3>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- .mnmd-sub-col -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- .mnmd-block -->
</div>
@include('includes.subscribe-modal')
@endsection