@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">詳細確認画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    名前：{{ $contact->your_name }}<br><br>
                    件名：<div>{{ $contact->title }}</div><br><br>
                    メールアドレス：{{ $contact->email }}<br><br>
                    ホームページ：{{ $contact->url }}<br><br>
                    性別：{{ $gender }}<br><br>
                    年齢：{{ $age }}<br><br>
                    お問い合わせ内容：{{ $contact->contact }}<br><br>
                    <form method="GET" action="{{ route('contact.edit', ['id' => $contact->id] ) }}">
                    @csrf
                        <input class="btn btn-info" type="submit" value="変更する">
                    </form>

                    <form method="GET" action="{{ route('contact.index') }}">
                      <button class="btn btn-primary" type="submit">一覧画面に戻る</button>
                    </form>

                    <form method="POST" action="{{ route('contact.destroy', ['id' => $contact->id] ) }}" id="delete_{{ $contact->id }}">
                    @csrf
                    <a href="#" class="btn btn-danger" type="submit" data-id="{{ $contact->id }}" onclick="deletePost(this);">
                    削除する</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function deletePost(e) {
    'use strict';
    if (confirm('本当に削除していいですか？')){
        document.getElementById('delete_' + e.dataset.id).submit();
    }
}
</script>
@endsection
