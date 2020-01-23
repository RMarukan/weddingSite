@extends('front.layouts.app')

@section('content')
    <title>入力内容確認</title>
    <!-- Massage Area -->
    <h1>ご入力内容をご確認ください</h1>

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
                            <label class="col-sm-3 control-label">年代</label>
                        </div>
                    </td>
                    <td>
                        <div class="col-sm-6">
                            <select name="Age">
                                @foreach($ageCode as $code)
                                    <option value={{$code->id}}>{{$code->type}} </option>
                                @endforeach
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="attend1" class="col-sm-3 control-label">{{$type->attendType}}へのご参加</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            <input type="radio" name="attend1" id="r1" value="yes" checked>
                            <lavel accesskey="Y" for="r1">ご出席</lavel>
                            <input type="radio" name="attend1" id="r2" value="no">
                            <lavel accesskey="N" for="r2">ご欠席</lavel>
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
