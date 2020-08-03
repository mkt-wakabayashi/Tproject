@extends('template')

@section('content')
  <main>
    <nav class="navigation">
      <ul>
        <li class="list"><a href="#">ユーザー</a></li>
        <li class="list"><a href="#">各種申請</a></li>
        <li class="list"><a href="#">勤怠一覧</a></li>
        <span class="logout"><a href="#">ログアウト</a></span>
      </ul>
    </nav>
    <div class="container">
      <div class="time-field">
        <div class="attendance-datetime">
        <h1 class="attendance-date">{{date("Y年m月d日")}}</h1>
        <h1 class="attendance-time">{{date("h:i:s")}}</h1>
        <div class="attendance-button-group">
          <input type="button" value="出勤" class="attendance-button">
          <input type="button" value="休憩" class="attendance-button">
          <input type="button" value="退勤" class="attendance-button">
        </div>
        </div>
      </div>
      <div class="time-field">
        <div>
          <h2>Today's</h2>
        </div>
        <table class="attendance-table">
          <tr>
            <th>出勤</th>
            <th>休憩入</th>
            <th>休憩出</th>
            <th>退勤</th>
            <th>残業</th>
          </tr>
          <tr>
            <td>00:00:00</td>
            <td>00:00:00</td>
            <td>00:00:00</td>
            <td>00:00:00</td>
            <td>00:00:00</td>
          </tr>
        </table>
      </div>
    </div>
  </main>
@endsection
