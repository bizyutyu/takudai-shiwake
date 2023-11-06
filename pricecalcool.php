<!DOCTYPE html>

<html lang="ja">

<head>
<title>
クール便料金計算
</title>
<meta charset="utf-8">
</head>

<body>

<h1>宅配料金計算サービス（クール便）</h1>

<?php

if(isset($_POST['data1']) || isset($_POST['data2']) || isset($_POST['data3']) || isset($_POST['data4'])){
  if(is_numeric($_POST['data1']) && is_numeric($_POST['data2']) && is_numeric($_POST['data3']) && is_numeric($_POST['data4'])){
   if($_POST['data1'] > 0 && $_POST['data2'] > 0 && $_POST['data3'] > 0 && $_POST['data4'] > 0){

      $sum = $_POST['data1'] + $_POST['data2'] + $_POST['data3'];
      $weight = $_POST['data4'];

      if($sum <= 60 && $weight <= 2){
        print "1,260円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 80 && $weight <= 5){
        print "1,480円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 100 && $weight <= 10){
        print "1,830円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 120 && $weight <= 15){
        print "2,380円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }else
        print "荷物が大きすぎます。\n";
        print "<a href=\"pricecal.php\">入力し直して下さい。</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
    }
    print "入力の値が無い、もしくは間違っています。\n";
    print "<a href=\"pricecal.php\">入力し直して下さい。</a>\n";
    print "</body>\n";
    print "</html>\n";
    exit;
  }
    print "入力の値が無い、もしくは間違っています。\n";
    print "<a href=\"pricecal.php\">入力し直して下さい。</a>\n";
    print "</body>\n";
    print "</html>\n";
    exit;
}


print "<p>";
print "※値は半角で入力してください。\n";
print "</p>";

print "<form action=\"pricecal.php\" method=\"post\">\n";

print "荷物の縦の長さ（cm）を入力してください。\n";
print "<p>";
print "<input type=\"text\" name=\"data1\">\n";
print "</p>";

print "荷物の横の長さ（cm）を入力してください。\n";
print "<p>";
print "<input type=\"text\" name=\"data2\">\n";
print "</p>";

print "荷物の高さ（cm）を入力してください。\n";
print "<p>";
print "<input type=\"text\" name=\"data3\">\n";
print "</p>";

print "荷物の重さ（kg）を入力してください。\n";
print "<p>";
print "<input type=\"text\" name=\"data4\">\n";
print "</p>";


print"<input type=\"submit\">\n";
print"</form>\n";

?>


</body>
</html>
