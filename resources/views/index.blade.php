@extends('template')

@section('content')
  <main>
    <nav class="navigation">
      <ul>
        <li class="list"><a href="#">ユーザー</a></li>
        <li class="list"><a href="#">各種申請</a></li>
        <li class="list"><a href="#">一覧</a></li>
        <span class="logout"><a href="#">ログアウト</a></span>
      </ul>
    </nav>
    <div class="container">
      <div class="time-field"><p>現在の日時: {{date("Y/m/d H:i:s")}}</p></div>
      <div class="time-field"></div>
    </div>
  </main>
@endsection
