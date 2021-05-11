@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ログインできました。</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="GET" action="{{ route('contact.index') }}">
                      <button class="btn btn-primary" type="submit">一覧画面をみる</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
