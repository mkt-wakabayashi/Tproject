<!DOCTYPE html>
<html>
<head>
<title>経費申請ページ</title>
</head>
<body>
<div class="photo1">
<img src="\ameeeda-b-kintai\img\logo.jpg">
</div>
<link rel="stylesheet"  href="./img.css">
 <table border="1">
    <tr>
      <th>問い合わせ先</th>
　　　　<th>要項</th>
      <th>リンク一覧</th>
    </tr>
    <tr>
      <td>営業本部</td>
      <td>備品購入に関する問い合わせ</td>
　　　<th>
<?php
echo '<a href="mailto:eigyo@ameeeda.jp">ここ</a>';

?>
　　　</th>
    </tr>
    <tr>
      <td>技術本部</td>
      <td>未だ不明</td>
　　　<th>
　　　<?php
echo '<a href="mailto:engineer@ameeeda.jp">ここ</a>';

?>
　　　</th>
    </tr>
　　<tr>
      <td>人事部</td>
      <td>
　　　　<ol>
<li>資格（研修）に関する問い合わせ</li>
<li>給与に関する問い合わせ</li>
<li>各種保険に関する問い合わせ</li>
<li>振り込み関係（経理に関することの問い合わせ）</li>
</ol>
</td>
　　　<th>
<?php
echo '<a href="mailto:jinji@ameeeda.jp">ここ</a>';
//  宛先変更
?>
</th>
    </tr>
　　
  </table>
<a href= "申請タブ.php" >申請メニューに戻る</a>
</body>
</html>