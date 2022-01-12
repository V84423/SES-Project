@extends('layouts.projects')

@section('title')
    案件一覧
@endsection

@section('content')

	<link rel="stylesheet" href="assets/css/projects.css">

    <!-- End Header Area -->
    <div class="main-banner-area-with-bg-image">

    </div>


    <div id="root-sub-header">
        <a data-type="important_profile_sections_lack" href="/user/profile/edit">プロフィール完成度が30％以下です。自己紹介、この先やってみたいこと、職歴または学歴を入力して応募の返信率をあげよう。</a>
    </div>

    <div id="project-index-sub-header">
        <div id="featured-projects">
            <div class="featured-projects-wrapper">
                <div class="featured-projects-inner slick-initialized slick-slider">
                    <div class="slick-list draggable" style="padding: 0px;">

                        <div class="review-slides owl-carousel owl-theme">
                            <div class="featured-project" data-project-id="791230" data-slick-index="-2" id="" aria-hidden="true" tabindex="-1">
                                <a class="project-show-link" href="/projects/791230?featured=0" tabindex="-1"></a>
                                <div class="project-cover">
                                    <img src="{{asset('assets/images/projects/logixtech.png')}}">
                                </div>
                                <div class="featured-project-details">
                                    <div class="title-icons">
                                        <div class="project-tags">
                                            <div class="project-tag small normal" style="color: #0e74b3; border-color: #0e74b3;">
                                                人事
                                            </div>
                                            <div class="new-label">
                                                NEW
                                            </div>
                                        </div>

                                    </div>
                                    <h2 class="project-title">
                                        <a href="/projects/791230?featured=0" tabindex="-1">Logi×Techベンチャーでの人事採用担当者募集！</a>
                                    </h2>
                                    <p class="company-name">
                                        <a href="/companies/openlogi" tabindex="-1">株式会社オープンロジ</a>
                                    </p>
                                    <div class="wt-ui-support-button wt-ui-support-button-small">
                                        <div class="wt-ui-button wt-ui-button-blue project-support-link" data-action-type="support" data-project-id="791230" data-project="{&quot;companyAvatarUrl&quot;:&quot;https://d2v9k5u4v94ulw.cloudfront.net/small_light(dw=48,dh=48,da=s,ds=s,cw=48,ch=48,cc=FFFFFF,of=webp)/assets/images/6713139/original/5f63ad0c-25f8-457f-aef2-5753fb2d8a32?1621235433&quot;,&quot;companyName&quot;:&quot;株式会社オープンロジ&quot;,&quot;title&quot;:&quot;Logi×Techベンチャーでの人事採用担当者募集！&quot;,&quot;id&quot;:791230,&quot;category&quot;:&quot;normal&quot;,&quot;country&quot;:&quot;japan&quot;,&quot;url&quot;:&quot;https://www.wantedly.com/projects/791230&quot;,&quot;twitterShareText&quot;:&quot;Logi×Techベンチャーでの人事採用担当者募集！ by 株式会社オープンロジ (@openlogi)&quot;,&quot;imageUrl&quot;:&quot;https://d2v9k5u4v94ulw.cloudfront.net/small_light(dw=560,dh=229,da=s,ds=s,cw=560,ch=229,cc=FFFFFF,of=webp)/assets/images/8200499/original/03d83b5b-2c5c-4fc7-9462-5aaabe828f94?1637914745&quot;,&quot;location&quot;:&quot;東京都豊島区東池袋１丁目34−5&quot;}" data-support-project-button-react="" data-user-id="156201586">
                                            <i class="icon-bullhorn"></i>
                                        </div>
                                        <div class="count wt-support-count" data-project-id="791230">
                                            14
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Employers Details Area -->

    <div class="checkout-area ptb-100">
        <div class="container">
            <form>
                <div class="row">                    
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-3 col-md-12">
                        <div class="order-details">
                            <h3 class="title">
                                <p class="projects-count">
                                    <span>検索条件</span>                                
                                </p>
                            </h3>

                            <form>
                                <div class="row align-items-center">                                
                
                                    
                                    <div class="form-group">
                                        <label><i class="icon-search"></i> 会社名（オプション）</label>
                                        <input type="text" class="form-control keyword" placeholder="キーワードで検索">
                                    </div>
                                                                      
                                    <div class="form-group">
                                        <label>スキル見合い</label>
                                        <input id="itemQuery" type="text" placeholder="Search" class="skill">
                                    </div>  
                                    
                                    <div class="form-group">
                                        <label>単金幅 <small style="color:grey">( 万円 )</small> </label>

                                        <select class="form-control estimate">
                                            <option value="0" selected="selected"></option>
                                            <option value="50">50 - 60</option>
                                            <option value="60">60 - 70</option>
                                            <option value="70">70 - 80</option>
                                            <option value="80">80 - 90</option>
                                            <option value="90">90 - 100</option>
                                            <option value="100">100 -</option>
                                        </select>
                                        
                                    </div>  
                                      
                                </div>
                            </form>                      
                            
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12"></div>
                    <div class="col-lg-6 col-md-12">
                        <div class="billing-details">
                            <h3 class="title"><p class="projects-count">
                                <span class="current">{{count($randomJobs)}}</span>
                                <span class="per"> / </span>
                                <span class="total">{{$allJobs}}</span>
                                </p>
                            </h3>

                            <div class="row">
                                <div class="projects-index-list">


                                    @foreach($randomJobs as $job)

                                        
                                    <article class="projects-index-single">
                                        <div class="project-index-single-outer">
                                            <div class="project-index-single-inner">
                                                <div class="project-cover-wrapper">
                                                    <div class="cover-image">
                                                        <img width="560" height="228" class="lazy" src="{{asset('storage').str_replace('public','',$job->company_bg)}}" style="">
                                                    </div>
                                                </div>
                                                <div class="project-detail">
                                                    <div class="project-tags">
                                                        <div class="project-tag small normal" style="color: #b36704; border-color: #b36704;">
                                                            {{$job->positions}}
                                                        </div>
                                                        <div class="project-tag small inverted" style="background-color: #b36704;">
                                                            @if($job->status == 1)
                                                                    募集中
                                                            @else
                                                                    募集終了
                                                            @endif
                                                        </div>
                                                        <div class="entry-count">
                                                            
                                                            <div class="entry-text">
                                                                募集⼈数
                                                            </div>

                                                            <div class="count">
                                                                {{$job->mates}}
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <h1 class="project-title">
                                                        <a href="{{route('details',['id'=>$job->id])}}">{{$job->title}}</a>
                                                    </h1>
                                                    <p class="project-excerpt">
                                                        {{$job->areas}}
                                                    </p>
                                                    <p class="project-excerpt">
                                                        <span> 単⾦幅 : {{$job->estimate}} 万円</span>
                                                    </p>
                                                    <p class="project-excerpt">
                                                        <span> 開発期間 : {{$job->during}} (更新の可能性あり)</span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="project-bottom">
                                                <div class="company-thumbnail">
                                                    <a href="{{route('company_details',['id'=>$job->user_id])}}">
                                                        <img  width="60" height="60" class="lazy" src="{{asset('storage').str_replace('public','',$job->user_photo)}}">
                                                    </a>
                                                </div>
                                                <div class="company-name">
                                                    <h3>
                                                        <a href="{{route('company_details',['id'=>$job->user_id])}}">{{$job->user_company}}株式会社 {{$job->user_name}}</a>
                                                    </h3>
                                                </div>
                                                <div class="actions-and-metas">
                                                    <div class="wt-ui-support-button">
                                                        <a class="project-support-link">
                                                            <i class="wt-icon wt-icon-support"></i>
                                                            <span class="wt-support-count">32</span>
                                                        </a>
                                                    </div>
                                                    <div class="bookmark-button">
                                                        <form class="button_to" method="post" action="" data-remote="true">
                                                            <button class="bookmark-submit-button" type="submit">
                                                                <i class="wt-icon wt-icon-bookmark-o-2"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>



                                    @endforeach 



                                </div>

                                <ul id="pagination-demo" class="pagination-sm"></ul>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 col-md-12"></div>

                    
                </div>
            </form>
        </div>
    </div>
    <!-- End Employers Details Area -->














@endsection