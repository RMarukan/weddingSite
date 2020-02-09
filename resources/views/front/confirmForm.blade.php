@extends('front.layouts.app')

@section('content')
    <title>入力内容確認</title>

    <!-- Massage Area -->
    <div class="container" style="text-align: center">
        <div class="bg-ground">
            <h2>ご入力内容をご確認ください</h2>
        </div>
    </div>

    <!-- Input From -->
    <div class="container" style="text-align: center">
        <section class="mt-4 bg-ground">
            <div class="row">
                <p class="col-3 col-sm-3">お名前<br class="d-lg-none">（漢字）</p>
                <p class="col-4 col-sm-4 ta-l">{{ $all['lstNameK'] }}</p>
                <p class="col-4 col-sm-4 ta-l">{{ $all['fstNameK'] }}</p>
            </div>
            <div class="row">
                <p class="col-3 col-sm-3">お名前<br class="d-lg-none">（かな）</p>
                <p class="col-4 col-sm-4 ta-l">{{ $all['lstNameF']  }}</p>
                <p class="col-4 col-sm-4 ta-l">{{ $all['fstNameF']  }}</p>
            </div>
            <div class="row">
                <p class="col-3 col-sm-3">年代</p>
                <p class="col-9 col-sm-9 ta-l">{{ $ageName->type }}</p>
            </div>
            <div class="row">
                <p class="col-3 col-sm-3">{{$type->attendType}}へのご参加</p>
                <p class="col-9 col-sm-9 ta-l">
                    @if($all['attendFlg']==1)
                        ご出席
                    @else
                        ご欠席
                    @endif
                </p>
            </div>
            <div class="row">
                <p class="col-3 col-sm-3">メッセージ</p>
                <p class="col-9 col-sm-9 ta-l">{{ $all['guestComment'] }}</p>
            </div>
            <div class="row">
                <p class="col-3 col-sm-3">お料理に対するご要望</p>
                <p class="col-9 col-sm-9 ta-l"> {{ $all['dinnerComment'] }}</p>
            </div>
            <div class="row">
                <p class="col-3 col-sm-3">その他<br class="d-lg-none">ご要望</p>
                <p class="col-9 col-sm-9 ta-l"> {{ $all['anotherComment'] }}</p>
            </div>

        </section>
    </div>
    <div class="mt-4 container"  style="text-align: center">
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
                <button type="submit"  class="mt-2 btn btn-light">修正する</button>
            </form>
        </div>
        <div>
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
                <button type="submit" class="mt-2 btn btn-light">登録する</button>
            </form>
        </div>
    </div>
@endsection
