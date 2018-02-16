<!DOCTYPE html>
<html lang="ja">
    
    <head>
    <meta charset="UTF-8">
    <title>4eachblog 掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
<body>

<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=keijiban;host=localhost;","root","mysql");
    $stmt = $pdo->query("select * from 4each_keijiban");
 ?>
    
    <h1>プログラミングに役立つ掲示板</h1>
     <form method="post" action="insert.php">
         <h3>入力フォーム</h3>
         <div>
          <label>ハンドルネーム</label>
          <br>
          <input type="text" class="text" size="35" name="handlename">
         </div>
         
         <div>
          <label>タイトル</label>
          <br>
          <input type="text" class="text" size="35" name="title">
         </div>
         
         <div>
          <label>コメント</label>
          <br>
             <textarea cols="35" rows="7" name="comments"></textarea>
         </div>
         
         <div>
          <input type="submit" class="submit" value="投稿する">
         </div>
     </form>
    
     <?php
    while ($row = $stmt->fetch()) {
     echo "<div class='contents'>";
     echo "<h3>".$row['title']."</h3>";
     echo "<div class='comments'>";
     echo $row['comments'];
     echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
     echo "</div>";
     echo "</div>";
}
 ?>
     
         
</body>