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
                            <label for="attend1" class="col-sm-3 control-label">{{$type->attendType}}へのご参加</label>
                        </div>
                    </td>
                    <td>
                        <div>
                            {{ $all['attend1']  }}
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
                            {{ $all['dComment']  }}
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
                            {{ $all['aComment']  }}
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
        <div>
            <form  action="{{ url('/inputForm')}}" method="post">
                {{ csrf_field() }}
                 <button type="submit">修正する</button>
            </form>
            <form  action="{{ url('/inputForm')}}" method="post">
                {{ csrf_field() }}
                <button type="submit">登録する</button>
            </form>
        </div>
@endsection
