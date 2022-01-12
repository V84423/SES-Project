@extends('layouts.company_profile')

@section('title')
    新規登録
@endsection

@section('content')

    <style>

        .selectize-input {
            border: 0px solid #d0d0d0;
            padding: 0px 0px;
            font-size: 18px;
        }

        .selectize-control.multi .selectize-input>div {
            background: #1c905a;
            color: #f9f9f9;
            border-radius: 5px;
        }

        .skill-registration-form .telephone-number .skill-phone-number {
            max-width: none;
        }


    </style>
    @if (Session::has('msg'))
    <div class="notification-alert alert alert-success alert-dismissible show" role="alert" align="center">
        {{ Session::get('msg') }}
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close" style="top:10px;">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    @endif

    <section class="skill-registration-form">
        <div class="skill-registration-form-inner form-wrapper-js">
            
            <form action="{{ route('registration-project')}}" method="post" class="appstar-skill-form-js" novalidate="novalidate" id="companyPostForm">

                @csrf
            	<div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">案件名<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　求人メディア運営会社でのデザイン制作" name="title" required="" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">案件名は必須です</span>
                </div>

                <!--other options  -->

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">言語・ツール<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" name="skills" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">言語・ツールは必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">職種<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" name="positions" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">職種は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">エリア<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" name="areas" class="skill-phone-number" style="max-width: 100%;">
                    <span class="reg-error">エリアは必須です</span>
                </div>

                <!--end other options  -->


                <div class="skill-comment-section">
                    <h4 class="appstar-section-title appstar-multi-line-heading">案件詳細</h4>
                    <h4 class="appstar-title-hints">（案件詳細情報を入力してください）</h4>
                    <textarea placeholder="" name="details"  style="font-size:22px"></textarea>
                    <span class="reg-error">案件詳細は必須です</span>
                </div>
                <br/>
                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">単金幅 (スキル見合い)<span class="appstar-title-hints">(万円)</span> *
                    </h4>
                    <input type="tel" placeholder="例 )　60-80" name="estimate" required="" class="skill-phone-number" aria-required="true">
                    <span class="reg-error">電話番号は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">募集人数 <span class="appstar-title-hints">(人)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　3" name="mates" required="" class="skill-phone-number">
                    <span class="reg-error">募集人数は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">開発期間 (更新の可能性あり)<span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　2021/1/1〜2021/3/31" name="during" required="" class="skill-phone-number">
                    <span class="reg-error">開発期間は必須です</span>
                </div>

                <div class="telephone-number registration-must">
                    <h4 class="appstar-section-title">作業場所 <span class="appstar-title-hints">(案件をより早くご紹介いたします)</span> *
                    </h4>
                    <input type="text" placeholder="例 )　〒106-0044東京都港区東麻布1-8-1 東麻布ISビル4F" name="address" required="" class="skill-phone-number"  style="max-width: 100%;">
                    <span class="reg-error">作業場所は必須です</span>
                </div>

                <div class="skill-comment-section">
                    <h4 class="appstar-section-title appstar-multi-line-heading">商流ご記入をお願いします</h4>
                    <h4 class="appstar-title-hints">（ご担当したサイトURL、ポートフォリオサイトURL、職務経歴など）</h4>
                    <textarea placeholder="" name="schedule" style="font-size:22px"></textarea>
                    <span class="reg-error">商流ご記入をお願いします</span>
                </div>

                <div class="skill-submit">
                    <input type="button" value="案件情報を送る" id="sendCompanyPost">
                </div>

            </form>
        </div>
    </section>

@endsection