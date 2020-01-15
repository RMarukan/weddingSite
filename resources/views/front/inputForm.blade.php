@extends('front.layouts.app')

@section('content')
    <h1>Welcome To Our Wedding Party</h1>
    <!-- Massage Area -->
    <h1>Message Area</h1>
    <div>Common Message</div>
    <div>Attribute Message</div>

    <!-- Input From -->
    <form  action="{{ url('/inputForm')}}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped task-table">
            <tbody>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">お名前（漢字）</label>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-6">
                            姓：<input type="text" name="lstNameK" id="lstNameK"  maxlength=10>　
                            名：<input type="text" name="fstNameK" id="fstNameK"  maxlength=10>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">お名前（かな）</label>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-6">
                            せい：<input type="text" name="lstNameF" id="lstNameF" maxlength=15>　
                            めい：<input type="text" name="fstNameF" id="fstNameF" maxlength=15>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="attend1" class="col-sm-3 control-label">挙式・披露宴へのご参加</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input type="radio" name="attend1" id="r1" value="yes" checked>
                            <lavel accesskey="Y" for="r1">ご出席</lavel>
                            <input type="radio" name="attend1" id="r2" value="no">
                            <lavel accesskey="Y" for="r2">ご欠席</lavel>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="attend2" class="col-sm-3 control-label">二次会へのご参加</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input type="radio" name="attend2" id="r3" value="yes" checked>
                            <lavel accesskey="Y" for="r3">ご出席</lavel>
                            <input type="radio" name="attend2" id="r4" value="no">
                            <lavel accesskey="Y" for="r4">ご欠席</lavel>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="dComment" class="col-sm-3 control-label">お料理に対するご要望等</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            <textarea name="dComment" cols=60 rows=8>アレルギー等料理へのご要望がありましたら入力をお願いいたします。</textarea>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="dComment" class="col-sm-3 control-label">その他ご要望等</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            <textarea name="dComment" cols=60 rows=8>車椅子のご利用等要望がございましたらご入力をお願いいたします。</textarea>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div>
            <button type="submit">入力内容を確認する</button>
        </div>
    </form>
@endsection
