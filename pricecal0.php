<!DOCTYPE html>

<html lang="ja">

<head>
<title>
宅配料金計算
</title>
<meta charset="utf-8">
</head>

<body>

<h1>宅配料金計算サービス</h1>

<?php

if(isset($_POST['num'])){
    print "aa11\n";


    print "aa11\n";
  for($i = 0; $i < $_POST['num']; $i++){
    print "aa22\n";
  if(is_numeric($_POST['data1[$i]']) && is_numeric($_POST['data2[$i]']) && is_numeric($_POST['data3[$i]']) && is_numeric($_POST['data4[$i]'])){
print "aa33\n";
   if($_POST['data1[$i]'] > 0 && $_POST['data2[$i]'] > 0 && $_POST['data3[$i]'] > 0 && $_POST['data4[$i]'] > 0){

     $sum = $_POST['data1[$i]'] + $_POST['data2[$i]'] + $_POST['data3[$i]'];
     $weight = $_POST['data4[$i]'];

     if($_POST['data5[$i]'] === "common"){
    //普通便
      if($sum <= 60 && $weight <= 2){
        print "1,040円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 80 && $weight <= 5){
        print "1,260円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 100 && $weight <= 10){
        print "1,500円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 120 && $weight <= 15){
        print "1,720円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 140 && $weight <= 20){
        print "1,960円です\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }elseif($sum <= 160 && $weight <= 25){
        print "2,180円です。\n";
        print "<a href=\"index.html\">開始画面へ戻る</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
      }else{
        print "荷物が大きすぎます。\n";
        print "<a href=\"pricecal.php\">入力し直して下さい。</a>\n";
        print "</body>\n";
        print "</html>\n";
        exit;
    }

  }else{
    //クール便
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
    }else{
      print "荷物が大きすぎます。\n";
      print "<a href=\"pricecal.php\">入力し直して下さい。</a>\n";
      print "</body>\n";
      print "</html>\n";
      exit;
    }
}

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

}







if(isset($_POST['data'])>0){
  if(is_numeric($_POST['data'])){
   if($_POST['data'] > 0){

      print "<p>";
      print "※値は半角で入力してください。\n";
      print "</p>";

      print $_POST['data']."\n";

      print "<form action=\"pricecal.php\" method=\"post\">\n";

      $num = $_POST['data'];

      for($i = 0; $i < $_POST['data']; $i++){

      print "荷物の縦の長さ（cm）を入力してください。\n";
      print "<p>";
      print "<input type=\"text\" name=\"data1[]\">\n";
      print "</p>";

      print "荷物の横の長さ（cm）を入力してください。\n";
      print "<p>";
      print "<input type=\"text\" name=\"data2[]\">\n";
      print "</p>";

      print "荷物の高さ（cm）を入力してください。\n";
      print "<p>";
      print "<input type=\"text\" name=\"data3[]\">\n";
      print "</p>";

      print "荷物の重さ（kg）を入力してください。\n";
      print "<p>";
      print "<input type=\"text\" name=\"data4[]\">\n";
      print "</p>";

      print "<p>";
      print "<input type=\"radio\" name=\"data5[$i]\" value=\"common\" checked>通常便\n";
      print "<input type=\"radio\" name=\"data5[$i]\" value=\"cool\" >クール便\n";
      print "</p>";

      }
      print "<p>";
      print "<input type=\"hidden\" name=\"num\"　value=\"$num\">\n";
      print "</p>";
      print "<input type=\"submit\">\n";
      print "</form>\n";
      exit;
    }
    print "<p>";
    print "<a href=\"index.php\">正しい値を入力し直して下さい。</a>";
    print "</p>";
    exit;
  }
  print "<p>";
  print "<a href=\"index.php\">正しい値を入力し直して下さい。</a>";
  print "</p>";
  exit;
}


?>


</body>
</html>
