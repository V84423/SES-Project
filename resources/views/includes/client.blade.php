@extends('layouts.site')

@section('title')
法人検索
@endsection

@section('content')

		<link rel="stylesheet" href="{{asset('assets/css/seclarch.css')}}">
        <style>
            .main-banner-area-with-bg-image {
                height: 600px;
                background-image: url(../../assets/images/main-banner/banner-two/client.jpg);
            }

        </style>
        <!-- Start Main Banner Area -->
        <div class="main-banner-area-with-bg-image">
            <div class="container-fluid">
                <div class="main-banner-content-with-search" data-speed="0" data-revert="true">
                    <section class="top_hero">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-md-12 mb-5 text-center">
                                    <h2 class="heading mb-2 display-5 font-light " style="color: white;padding: 20px;">法人検索</h2>
                                    
                                    
                                    <form action="{{route('search_client')}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" placeholder="Search.." name="keyword" required="" style="
                                                    width: 70%;
                                                    height: 40px;
                                                    border-style: initial;
                                                    border-radius: 5px;
                                                    padding: 10px;
                                                ">
                                        </div>

                                        <button type="submit" class="default-btn disabled" style="pointer-events: all; cursor: pointer;width: 30%;">検 索</button>
                                    </form>



                                </div>
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
                    <h3 class="section-title search-pages">検索された法人</h3>
                    <div class="search-case-items">

                        @foreach($randomClients as $client)
                        <div class="job-list">
                            <a href="{{route('company_details',['id'=>$client->created_by_id])}}">
                                <div class="title" style="background-image: url({{asset('storage').str_replace('public','',$client->bg_image)}})">
                                    
                                </div>
                                <h4 class="job-title box-orient"> 
                                    {{$client->name}}
                                </h4>
                                <a href="{{$client->url}}" style="font-size:11px" target="blank">会社ホームページアドレス</a>
                                <div class="technologies">
                                    <span class="technology-name"> 電話番号 : {{$client->phone}}</span>
                                </div>
                                <div class="location">
                                    <span class="station">場所 : </span>
                                    <span class="station">{{$client->address}}</span>
                                </div>
                                <div class="price">
                                    <span class="unit-price-label">資本金</span>
                                    <span class="unit-price-value">{{$client->capital}}万円</span>
                                </div>
                            </a>
                        </div>
                        @endforeach 
                        
                        
                    </div>  
                </div>
              </section>
        </div>

        <!-- End Candidates Area -->


@endsection