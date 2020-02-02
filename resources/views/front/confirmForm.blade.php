@extends('front.layouts.app')

@section('content')
    <title>入力内容確認</title>
    <!-- Massage Area -->
    <h1>ご入力内容をご確認ください</h1>

    <!-- Input From -->
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
                            姓：{{ $all['lstNameK'] }}　
                            名：{{ $all['fstNameK'] }}
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
                            せい：{{ $all['lstNameF']  }}　
                            めい：{{ $all['fstNameF']  }}
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
                            {{ $ageName->type }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="attendFlg" class="col-sm-3 control-label">{{$type->attendType}}へのご参加</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            @if($all['attendFlg']==1)
                                ご出席
                            @else
                                ご欠席
                            @endif
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="guestComment" class="col-sm-3 control-label">メッセージ</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $all['guestComment']  }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="dinnerComment" class="col-sm-3 control-label">お料理に対するご要望等</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $all['dinnerComment']  }}
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="anotherComment" class="col-sm-3 control-label">その他ご要望等</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $all['anotherComment']  }}
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div>
            <form  action="{{ url('/inputForm'). "/" . $type->attributeId}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="lstNameK" value={{$all['lstNameK']}}>
                <input type="hidden" name="fstNameK" value={{$all['fstNameK']}}>
                <input type="hidden" name="lstNameF" value={{$all['lstNameF']}}>
                <input type="hidden" name="fstNameF" value={{$all['fstNameF']}}>
                <input type="hidden" name="ageFlg" value={{$all['ageFlg']}}>
                <input type="hidden" name="attendFlg" value={{$all['attendFlg']}}>
                <input type="hidden" name="guestComment" value={{$all['guestComment']}}>
                <input type="hidden" name="dinnerComment" value={{$all['dinnerComment']}}>
                <input type="hidden" name="anotherComment" value={{$all['anotherComment']}}>
                <button type="submit">修正する</button>
            </form>
            <form  action="{{ url('/completeForm')}}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="lstNameK" value={{$all['lstNameK']}}>
                <input type="hidden" name="fstNameK" value={{$all['fstNameK']}}>
                <input type="hidden" name="lstNameF" value={{$all['lstNameF']}}>
                <input type="hidden" name="fstNameF" value={{$all['fstNameF']}}>
                <input type="hidden" name="attributeId" value={{$type->attributeId}}>
                <input type="hidden" name="ageFlg" value={{$all['ageFlg']}}>
                <input type="hidden" name="attendType" value={{$type->attendType}}>
                <input type="hidden" name="attendFlg" value={{$all['attendFlg']}}>
                <input type="hidden" name="guestComment" value={{$all['guestComment']}}>
                <input type="hidden" name="dinnerComment" value={{$all['dinnerComment']}}>
                <input type="hidden" name="anotherComment" value={{$all['anotherComment']}}>
                <button type="submit">登録する</button>
            </form>
        </div>
@endsection
