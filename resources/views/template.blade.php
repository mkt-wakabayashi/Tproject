<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet"  href="{{asset('assets/css/index.css')}}">
  <title>ameeeda 勤怠管理システム</title>
</head>
<body>
  <div class="wrapper">
    <header>
      <p>勤怠管理システム</p>
      <img class="logo "src="img/logo.png" alt="logo">
    </header>
    @yield('content')
    <footer>
      <img class="footer-logo" src="img/logo-black.png" alt="logo">
    </footer>
  </div>
</body>
</html>