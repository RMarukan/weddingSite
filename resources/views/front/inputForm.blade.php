@extends('front.layouts.app')

@section('content')
    <title>入力フォーム</title>

    <!-- Massage Area -->
    <div class="container" style="text-align: center">
        <div class="bg-ground">
            <h2>ご出欠をご記入ください</h2>
            <p><font color="red">*</font>の箇所は入力必須項目です。</p>
        </div>
    </div>

    <!-- Input From -->
    <form  action="{{ url('confirmForm') . "/" . $type->attributeId}}" method="post">
        {{ csrf_field() }}
        <div class="container" style="text-align: center">
            <section class="mt-4 bg-ground">
                <div class="row">
                    <p class="col-3"><font color="red">*</font>お名前<br class="d-lg-none">（漢字）</p>
                    <p class="col-4 ta-l">
                        <input type="text" name="lstNameK" id="lstNameK" maxlength=10 size="15;" placeholder="姓" required>
                    </p>
                    <p class="col-4 ta-l">
                        <input type="text" name="fstNameK" id="fstNameK" maxlength=10 size="15;" placeholder="名" required>
                    </p>
                </div>
                <div class="row">
                    <p class="col-3"><font color="red">*</font>お名前<br class="d-lg-none">（かな）</p>
                    <p class="col-4 ta-l">
                        <input type="text" name="lstNameF" id="lstNameF" maxlength=15  size="15;" placeholder="せい" required>
                    </p>
                    <p class="col-4 ta-l">
                        <input type="text" name="fstNameF" id="fstNameF" maxlength=15  size="15;" placeholder="めい" required>
                    </p>
                </div>
                <div class="row">
                    <p class="col-3"><font color="red">*</font>年代</p>
                    <p class="col-9 ta-l">
                        <select name="ageFlg" required>
                            <option label="選択してください"></option>
                            @foreach($ageCode as $code)
                                <option value={{$code->ageId}}>{{$code->type}} </option>
                            @endforeach
                        </select>
                    </p>
                 </div>
                <div class="row">
                    <p class="col-3"><font color="red">*</font>{{$type->attendType}}へのご参加</p>
                    <p class="col-4 ta-l">
                        <input type="radio" name="attendFlg" id="r1" value="1" checked>
                        <label accesskey="Y" for="r1">ご出席</label>
                    </p>
                    <p class="col-4 ta-l">
                        <input type="radio" name="attendFlg" id="r2" value="2">
                        <label accesskey="N" for="r2">ご欠席</label>
                    </p>
                </div>
                <div class="row">
                    <p class="col-3"><font color="red">*</font>メッセージ</p>
                    <p class="col-9 ta-l">
                        <textarea name="guestComment" cols="35" rows="6" placeholder="" required></textarea>
                    </p>
                </div>
                <div class="row">
                    <p class="col-3">お料理に対するご要望</p>
                    <p class="col-9 ta-l">
                        <textarea name="dinnerComment" cols="35" rows="6" placeholder="アレルギー等料理へのご要望がありましたら入力をお願いいたします。"></textarea>
                    </p>
                </div>
                <div class="row">
                    <p class="col-3">その他<br class="d-lg-none">ご要望</p>
                    <p class="col-9 ta-l">
                        <textarea name="anotherComment" cols="35" rows="6" placeholder="車椅子のご利用等要望がございましたらご入力をお願いいたします。"></textarea>
                    </p>
                </div>
            </section>

            <div class="mt-2 bg-ground">
                <button type="submit" class="btn btn-link">入力内容を確認する</button>
            </div>
        </div>
    </form>
@endsection
