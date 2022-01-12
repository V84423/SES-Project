@extends('layouts.site')

@section('title')
    案件検索
@endsection

@section('content')

		<link rel="stylesheet" href="{{asset('assets/css/search.css')}}">

        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 mb-5 text-center">
                                    <h2 class="heading mb-2 display-5 font-light ">職種から探す</h2>
                                </div>
                                <ul class="col-md-12 project_quick_link">
                                    <li>
                                        <a href="project/positions/3Dデザイナー/" title="">
                                            3Dデザイナー
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/サーバーエンジニア/" title="">
                                            サーバーエンジニア
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/UXデザイナー/" title="">
                                            UIデザイナー
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/WEBデザイナー/" title="">
                                            WEBディレクター・PM
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/フロントエンジニア/" title="">
                                            フロントエンジニア
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/WEBデザイナー/" title="">
                                            WEBデザイナー
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/ゲームエンジニア/" title="">
                                            ゲームエンジニア
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/SE（システムエンジニア）/" title="">
                                            SE（システムエンジニア）
                                        </a>
                                    </li>
                                    <li>
                                        <a href="project/positions/クリエイター（ゲーム・動画）/" title="">
                                            クリエイター（ゲーム・動画）
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

        <!-- Start Candidates Area -->
        <div class="job-list-area pb-100" style="margin-top:10em">
            <section class="page-section search_result_search-cases search-result-container-js">
                <div class="section-wrapper section-wrapper__1224">
                    <h3 class="section-title search-pages">検索された案件・求人</h3>
                    <div class="search-case-items">

                        @foreach($randomJobs as $job)
                        <div class="job-list">
                            <a href="{{route('details',['id'=>$job->id])}}">
                                @if(str_contains($job->positions, 'デザイナー'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/design.png')}})">
                                @elseif(str_contains($job->positions, 'PM'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/PM.png')}})">
                                @elseif(str_contains($job->positions, 'QA'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/QA.png')}})">
                                @elseif(str_contains($job->positions, 'SE'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/SE.png')}})">
                                @elseif(str_contains($job->positions, 'ゲーム'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/game.png')}})">
                                @elseif(str_contains($job->positions, 'コーダー'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/coder.png')}})">
                                @elseif(str_contains($job->positions, 'エンジニア'))
                                <div class="title" style="background-image: url({{asset('assets/images/blog/engineer.png')}})">
                                @else
                                <div class="title" style="background-image: url({{asset('assets/images/blog/other.png')}})">
                                @endif
                                    <div>
                                        <div class="professions"> {{$job->positions}} </div>
                                        <div class="technology"> {{$job->skills}} </div>
                                    </div>
                                </div>
                                <h4 class="job-title box-orient">[リモート] {{$job->title}}</h4>
                                <div class="technologies">
                                    <span class="technology-name"> {{$job->skills}} </span>
                                </div>
                                <div class="location">
                                    <span class="station">作業場所 : </span>
                                    <span class="station">{{$job->address}}</span>
                                </div>
                                <div class="price">
                                    <span class="unit-price-label">単価（税抜き）</span>
                                    <span class="unit-price-value">{{$job->estimate}}万円</span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        
                        
                    </div>  
                </div>
              </section>
        </div>

        <div class="feel-free-to-contact no-load-more-item-js ">
            <div class="icon"></div>
            <div class="desc">
                <span class="underline_y">好条件、</span>
                <span class="underline_g">高給与</span>
                など人気の求人の多くは非公開となっています。
                <br> お気軽にお問い合わせください。
                <br> あなたにマッチした求人を多数紹介します。
            </div>
            <a href="#" class="btn btn-green">
              相談してみる
            </a>
        </div>  
        
        <div class="job-list-area pb-100">
            <section class="inhouse-service-desc"></section>

            <section class="find-other-jobs">
                <h3 class="section-title">その他の案件・求人を探す</h3>
                <div class="buttons">
                    <a href="{{url('')}}/project/skills/Ruby/" class="btn find-other-jobs_btn"><span>Ruby</span></a>
                    <a href="{{url('')}}/project/skills/PHP/" class="btn find-other-jobs_btn"><span>PHP</span></a>
                    <a href="{{url('')}}/project/skills/Java/" class="btn find-other-jobs_btn"><span>Java</span></a>
                    <a href="{{url('')}}/project/skills/JavaScript/" class="btn find-other-jobs_btn"><span>JavaScript</span></a>
                    <a href="{{url('')}}/project/skills/Swift/" class="btn find-other-jobs_btn"><span>Swift</span></a>
                    <a href="{{url('')}}/project/skills/Kotlin/" class="btn find-other-jobs_btn"><span>Kotlin</span></a>
                    <a href="{{url('')}}/project/skills/Android/" class="btn find-other-jobs_btn"><span>Android Java</span></a>
                    <a href="{{url('')}}/project/skills/Unity/" class="btn find-other-jobs_btn"><span>Unity</span></a>
                    <a href="{{url('')}}/project/skills/Photoshop/" class="btn find-other-jobs_btn"><span>Photoshop / Illustrator</span></a>
                </div>
            </section>

        </div>
        <!-- End Candidates Area -->


@endsection