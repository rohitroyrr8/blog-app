@extends('layouts.app')

@section('header')
<title>Contact Us - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
<div class="mnmd-block mnmd-block--fullwidth single-entry-wrap" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="mnmd-main-col " style="padding-top: 30px" role="main">
                    <article class="mnmd-block post post--single post-10 type-post status-publish format-standard has-post-thumbnail hentry category-abroad tag-landscape cat-5" itemscope="" itemtype="http://schema.org/Article">
                        
                        <div class="single-content">
                            <div class="single-body entry-content typography-copy" itemprop="articleBody">
                               <h2>Contact Us</h2>
                               <p>On the off chance that you have any inquiries regarding this Privacy Policy, the acts of this site, or your dealings with this site, get in touch with us.
								<br>Contact Us
								<br>For Advertising, Jobs, Feedback
								<br>{{env('APP_CONTACT_EMAIL_1')}}</p>
                            </div>
                            
                        </div>
                        <!-- .single-content -->
                    </article>
                   
                </div>
            </div>
		</div>
</div>
@endsection