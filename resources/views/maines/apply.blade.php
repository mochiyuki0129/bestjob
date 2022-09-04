@extends('maines.mainBase')
@section('apply')
    <form action="{{ route('applyConfirm', ["id" => $data->id]) }}" method="post">
        @csrf
        <div class="login_wrapper">
            <div class="login_inner">
                <div class="login_title">
                    <h1>応募フォーム</h1>
                </div>
                <div class="apply_form">
                    <div class="apply_title">
                        <h2>自己PR</h2>
                        <p>*500文字以内でご入力ください</p>
                    </div>
                    <textarea name="self_promotion" cols="50" rows="10" >{{ old('self_promotion') }}</textarea>
                    <div class="apply_title">
                        <h2>志望動機</h2>
                        <p>*500文字以内でご入力ください</p>
                    </div>
                    <textarea name="reason" cols="50" rows="10">{{ old('reason') }}</textarea>
                </div>
                <div class="twin_btn">
                    <input type="button" value="戻る" onClick="history.back()">
                    <input type="submit" value="確認">
                </div>
            </div>
        </div>
    </form>
@endsection
