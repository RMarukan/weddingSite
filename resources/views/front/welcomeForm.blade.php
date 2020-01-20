@extends('front.layouts.app')

@section('content')
    <title>Welcome To Our Wedding Party</title>
    <!-- Massage Area -->
    <h1>INVITATION</h1>
    <div align="center">
        丸山 直樹・丸山 莉穂（旧姓：神田）です。<br>
        <br>
        皆様、お変わりなくお過ごしでしょうか？<br>
        このたび私たちは結婚式を挙げることになりました。<br>
        <br>
        つきましては、日頃の感謝の気持ちを込めて<br>
        ご挨拶ならびに小宴を催したく存じます。<br>
        ご多用中誠に恐縮でございますが、是非ご出席いただきたく<br>
        ご案内申し上げます。<br>
        <br>
        皆様と楽しい時間を過ごしたいと思っておりますので<br>
        是非ご出席くださいますようお願い申し上げます。<br>
        皆様にお会いできるのを楽しみにしております。<br>
        <br>
        出欠のお知らせは、<br>
        以下のリンクより入力をお願いいたします。
    </div>
    <hr>
    <h2>HOST</h2>
    <div>
        <table class="table table-striped task-table">
            <tbody>
                <tr>
                    <td>
                        <label class="col-sm-3 control-label">新郎</label>
                    </td>
                    <td>
                        <label class="col-sm-3 control-label">丸山 直樹</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="col-sm-3 control-label">新婦</label>
                    </td>
                    <td>
                        <label class="col-sm-3 control-label">丸山 莉穂</label>
                    </td>
                </tr>

            </tbody>
        </table>

    <h3>INFORMATION</h3>
    <div>
        <table class="table table-striped task-table">
            <tbody>
            <tr>
                <td>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">開催種別</label>
                    </div>
                </td>
                <td>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">{{ $attribute->attendType }}</label>
                    </div>
                </td>
            </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">日程</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ $attribute->weddingDay }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">受付時間</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ $attribute->reception }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">開宴時間</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ $attribute->start }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">終宴時間</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ $attribute->end }}</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">会費</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">{{ $attribute->fee }}円</label>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <h4>ACCESS</h4>
        <table class="table table-striped task-table">
            <tbody>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">会場名</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">赤坂 アプローズスクエア迎賓館</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">会場住所</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">
                                〒107-0052<br>
                                東京都港区赤坂5-3-1<br>
                                TEL:03-3568-8651<br>
                            </label>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">会場URL</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                           <a href="https://www.bestbridal.co.jp/tokyo/applause_akasaka/access/" target="_blank">https://www.bestbridal.co.jp</a>
                        </div>
                    </td>
                </tr>
        </table>
    </div>

    <!-- Input From -->
    <div align="center">
        <input type="hidden" name="attributeId" value=>
        <a href="../../inputForm/{{$attribute->attributeId}}">回答を入力する</a>
    </div>
@endsection
