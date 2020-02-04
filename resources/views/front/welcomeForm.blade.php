@extends('front.layouts.app')

@section('content')
    <title>Welcome To Our Wedding Party</title>
    <!-- Massage Area -->
    <div class="container" style="text-align: center">
        <h2>INVITATION</h2>
        <div>
            丸山 直樹・丸山 莉穂（旧姓：神田）です。<br>
            <br>
            皆様、お変わりなくお過ごしでしょうか？<br>
            このたび私たちは結婚式を挙げることになりました。<br>
            <br>
            つきましては、日頃の感謝の気持ちを込めて<br>
            ご挨拶ならびに小宴を催したく存じます。<br>
            ご多用中誠に恐縮でございますが、<br>
            是非ご出席いただきたくご案内申し上げます。<br>
            <br>
            皆様と楽しい時間を過ごしたいと思っておりますので<br>
            是非ご出席くださいますようお願い申し上げます。<br>
            皆様にお会いできるのを楽しみにしております。<br>
            <br>
            出欠のお知らせは、<br>
            以下のリンクより入力をお願いいたします。
        </div>
        <hr>
        <div>
            <section class="mt-4">
                <h3>HOST</h3>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">新郎</p>
                    <p>丸山 直樹</p>
                </div>

                <div class="row">
                    <p class="offset-3 col-3 ta-l">新婦</p>
                    <p>丸山 莉穂</p>
                </div>
            </section>

            <section class="mt-4">
                <h3>INFORMATION</h3>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">開催種別</p>
                    <p>{{ $attribute->attendType }}</p>
                </div>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">日程</p>
                    <p>{{ $attribute->weddingDay }}</p>
                </div>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">受付時間</p>
                    <p>{{ $attribute->reception }}</p>
                </div>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">開宴時間</p>
                    <p>{{ $attribute->start }}</p>
                </div>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">終宴時間</p>
                    <p>{{ $attribute->end }}</p>
                </div>
                @if($attribute->attributeId==3)
                    <div class="row">
                        <p class="offset-3 col-3 ta-l">会費</p>
                        <p>{{ $attribute->fee }}円</p>
                    </div>
                @endif
            </section>

            <section class="mt-4">
                <h3>ACCESS</h3>
                <div class="row text-wrap">
                    <p class="offset-3 col-3 ta-l">会場名</p>
                    <p class="ta-l">赤坂アプローズスクエア<br class="d-lg-none">迎賓館</p>
                </div>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">会場住所</p>
                    <p class="ta-l"> 〒107-0052<br>
                        東京都港区赤坂5-3-1<br>
                        TEL:03-3568-8651</p>
                </div>
                <div class="row">
                    <p class="offset-3 col-3 ta-l">会場URL</p>
                    <p><a href="https://www.bestbridal.co.jp/tokyo/applause_akasaka/access/" target="_blank">https://www.bestbridal.co.jp</a></p>
                </div>
            </section>
        </div>
    </div>

    <!-- Input From -->
    <section class="mt-4">
        <div align="center">
            <input type="hidden" name="attributeId" value=>
            <a href="../../inputForm/{{$attribute->attributeId}}">回答を入力する</a>
        </div>
    </section>

    <style>
        .ta-l {
            text-align: left;
        }
    </style>
@endsection
