@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">新規作成画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if($errors->any())
                    <div class="alert alert-denger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="POST" action="{{ route('contact.store')}}">
                    @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1">氏名</label>
                            <input type="text" name="your_name" class="form-control" id="exampleFormControlInput1" placeholder="山田　太郎">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">件名</label>
                            <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="タイトル">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">メールアドレス</label>
                            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">ホームページ　※任意</label>
                            <input type="url" name="url" class="form-control" id="exampleFormControlInput1" placeholder="htts://××××.jp">
                        </div>

                        <label>性別</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="inlineRadio0" value="0">
                            <label class="form-check-label" for="inlineRadio1">男性</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                            <label class="form-check-label" for="inlineRadio1">女性</label>
                        </div><br><br>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">年齢</label>
                            <select class="form-control" name="age" id="exampleFormControlSelect1">
                            <option value="">選択してください</option>
                            <option value="1">〜19歳</option>
                            <option value="2">20歳〜29歳</option>
                            <option value="3">30歳〜39歳</option>
                            <option value="4">40歳〜49歳</option>
                            <option value="5">50歳〜59歳</option>
                            <option value="6">60歳〜</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">お問い合わせ内容</label>
                            <textarea class="form-control" name="contact" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="caution" value="1" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">注意事項に同意する</label>
                        </div><br>

                        <input class="btn btn-info" type="submit" value="登録する">
                    </form>

                        <form method="GET" action="{{ route('contact.index') }}">
                            <button class="btn btn-primary" type="submit">一覧画面に戻る</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
