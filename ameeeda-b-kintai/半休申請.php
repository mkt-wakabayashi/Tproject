<!DOCTYPE html>
<html>
<head>
<title>基本的な表の作成</title>
</head>
<body>
<div class="photo1">
<img src="\ameeeda-b-kintai\img\logo.jpg">
</div>
<link rel="stylesheet"  href="./img.css">
 <table border="1">
    <tr>
      <th>半休（早退）申請</th>
      <th>注意事項</th>
    </tr>
    <tr>
      <td>
　　　<?php
echo '<a href="mailto:hogehoge@gmail.com">早退申請はここ</a>';
// kintai@ameeeda.jp 宛先変更
?>
　　　</td>
      <td>当日に行ってください。
　　　　　やむを得ず申請当日にできない場合は翌営業日までに報告する。
　　　　　（遅刻、早退、欠勤も同じ）</td>
    </tr>
    
  </table>
<a href= "申請タブ.php" >申請メニューに戻る</a>
</body>
</html>




