@extends('layouts.app')

@section('header')
<title>Subscribe to our mail-list - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
<div class="mnmd-block mnmd-block--fullwidth single-entry-wrap" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="mnmd-main-col " style="padding-top: 30px" role="main">
                    <article class="mnmd-block post post--single post-10 type-post status-publish format-standard has-post-thumbnail hentry category-abroad tag-landscape cat-5" itemscope="" itemtype="http://schema.org/Article">
                        
                        <div class="single-content">
                            <div class="single-body entry-content typography-copy" itemprop="articleBody">
                               <h2>Sign up for our weekly newsletter</h2>
                                <h4>Get more hot & viral news, tips and exclusive offers sent straight to your inbox</h4>
                                @if (session('success'))
                                    <div>
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <form action="{{route('new_subscriber')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Your Name</label>
                                                <input type="name" name="name" class="form-control" placeholder="your name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Your Email</label>
                                                <input type="email" name="email" class="form-control" placeholder="your email-address">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <small>By clicking on below button, I authorize 9Scroob to send me promotional email</small>
                                        </div><br><br><br>
                                        <div class="col-md-12">
                                            <button style="    padding: 10px 37px; font-size: 16px;" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>  
                                </form>
                            </div>
                            
                        </div>
                        <!-- .single-content -->
                    </article>
                   
                </div>
            </div>
		</div>
</div>
@endsection