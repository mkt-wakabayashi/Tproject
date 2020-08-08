
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>申請タブ一覧</title>
  <body>
<div class="photo1">
<img src="\ameeeda-b-kintai\img\logo.jpg">
</div>
<link rel="stylesheet"  href="./img.css">
<table id="list">

<table border="1">
  
        <td>各種機能申請メニュー</td>
     <td>
  
<form action="" method="post">
    <select name="action">
<?php
//$arr=[];
$toujitu=array("当日遅延申請","当日欠席","当日早退");
//$toujitu2=array("画像申請","メール送信項目"); 　　　　　　//当日遅延申請の子ツリーにしたい。
//for($i=0;$i<count($toujitu);$i++){
//$arr[]=$toujitu;
//$toujitu[0][$i]=$toujitu2;
foreach($toujitu as $tou) {
   print('<option value="' . $tou . '">' . $tou. '</option>');
    }
if ($_POST['action'] === '当日遅延申請') {
        header('Location:当日遅延申請.php');
        exit;
    } else if ($_POST['action'] === '当日欠席') {
        header('Location:当日欠席.php');
        exit;
}else if ($_POST['action'] === '当日早退') {
        header('Location:当日早退.php');
        exit;
    }  
?>
</select>
<input type='submit' value='送信' />

</form>


<form action="" method="post">
    <select name="action">
<?php
$koumoku=array("休暇申請","半休申請","有給休暇","育児休暇","産前産後休暇","大切な記念日休暇");
foreach($koumoku as $koumoku) {
    print('<option value="' . $koumoku . '">' . $koumoku . '</option>');
    }
if ($_POST['action'] === '休暇申請') {
        header('Location: 休暇申請.php');
        exit;
    } else if ($_POST['action'] === '半休申請') {
        header('Location: 半休申請.php');
        exit;
}else if ($_POST['action'] === '有給休暇') {
        header('Location: 有給休暇.php');
        exit;
    }else if ($_POST['action'] === '育児休暇') {
        header('Location:育児休暇.php');
        exit;
    }else if ($_POST['action'] === '産前産後休暇') {
        header('Location:産前産後休暇.php');
        exit;
    }else if ($_POST['action'] === '大切な記念日休暇') {
        header('Location:大切な記念日休暇.php');
        exit;
    }  
?>
</select>
<input type='submit' value='送信' />

</form>

 

<form action="" method="post">
    <select name="action">    
<?php
$keihi=array("経費申請","交通費","経費");
foreach($keihi as $keihi) {
    print('<option value="' . $keihi . '">' . $keihi . '</option>');
    }
 if ($_POST['action'] === '経費申請') {
        header('Location: 経費申請.php');
        exit;
    }
else if ($_POST['action'] === '経費') {
        header('Location: 経費.php');
        exit;
    } else if ($_POST['action'] === '交通費') {
        header('Location: 交通費.php');
        exit;
    }
?>
</select>
<input type='submit' value='送信' />
</form>


</table border>