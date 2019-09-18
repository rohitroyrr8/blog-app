@extends('layouts.app')

@section('header')
<title>Category : {{$category[0]->name}} - {{env('APP_NAME')}}</title>
@endsection

@section('content')
<div class="mnmd-block mnmd-block--fullwidth mnmd-block--contiguous page-heading page-heading--has-background">
    <div class="container">
        <h2 class="page-heading__title">Category : {{$category[0]->name}}</h2>
        
    </div>
</div>

<div class="mnmd-block mnmd-block--fullwidth" style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="row" style="transform: none;">
            <div class="mnmd-main-col" role="main">
                <div class="mnmd-block">
                    <div class="posts-listing list-unstyled list-space-lg">
                    	@if($posts->count() > 0)
                        @foreach($posts as $post)
                        @if($post->id %9 == 0) 
                        	<div class="list-item">
                            	<article class="post post--horizontal post--horizontal-sm cat-2">	
                        			@include('includes.ad_script')
                        		</article>
                        	</div>
                        @endif
                        <div class="list-item">
                            <article class="post post--horizontal post--horizontal-sm cat-2">
                                <div class="post__thumb">
                                    <a href="/{{$post->slug}}">
                                    	<img src="{{Voyager::image($post->thumbnail('medium'))}}"></a>
                                </div>
                                <div class="post__text"><a href="" class="post__cat cat-theme">{{$post->category->name}}</a>
                                    <h3 class="post__title typescale-2"><a href="/{{$post->slug}}">{{$post->title}}</a></h3>
                                    <div class="post__excerpt">
                                    	 {!!substr($post->body, 0, 150)!!} 
                                    </div>
                                    <div class="post__meta"><span class="entry-author">By <a href="#" class="entry-author__name">9Scroob Team</a></span>
                                     </div>
                                </div>
                            </article>
                        </div>
                        @endforeach
                        @else
                        <h3>Nothing Found...</h3>
                        @endif
                    </div>
                    <nav class="mnmd-pagination">
                        <h4 class="mnmd-pagination__title sr-only">Posts navigation</h4>
                        <div class="mnmd-pagination__links text-center">
                        	
                        		{{ $posts->links() }}
                        </div>
                    </nav>
                </div>
                <!-- .mnmd-block -->
            </div>
            <!-- .mnmd-main-col -->
            <div class="mnmd-sub-col mnmd-sub-col--right sidebar js-sticky-sidebar" role="complementary" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <!-- .widget -->
                <!-- .widget -->
                <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; top: 80px; left: 944.5px;">
                    <div class="mnmd-widget widget widget-subscribe widget-subscribe--stack-bottom">
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
                    <div class="mnmd-widget-social-counter-counter mnmd-widget widget">
                        <div class="mnmd-widget-social-counter__inner">
                           @include('includes.ad_script')
                        </div>
                    </div>
                </div>
            </div>
            <!-- .mnmd-sub-col -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</div>
@endsection