@extends('layouts.app')

@section('header')
<title>Advertise with us - {{ env('APP_NAME') }}</title>
@endsection

@section('content')
<div class="mnmd-block mnmd-block--fullwidth single-entry-wrap" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row" style="transform: none;">
                <div class="mnmd-main-col " style="padding-top: 30px" role="main">
                    <article class="mnmd-block post post--single post-10 type-post status-publish format-standard has-post-thumbnail hentry category-abroad tag-landscape cat-5" itemscope="" itemtype="http://schema.org/Article">
                        
                        <div class="single-content">
                            <div class="single-body entry-content typography-copy" itemprop="articleBody">
                               <h2>Advertise with Us</h2>
                               <p>Our branding and advertising team is a gathering of imaginative chiefs, publicists, fashioners, advanced fellows, item geeks and video addicts who will make the correct sort of commotion for your business. Join forces with us to get the clearer, greater picture, and begin new computerized patterns…

 
<br><br>	
For advertising with us, reach us on {{env('APP_CONTACT_EMAIL_1')}}</p>
                            </div>
                            
                        </div>
                        <!-- .single-content -->
                    </article>
                   
                </div>
            </div>
		</div>
</div>
@endsection