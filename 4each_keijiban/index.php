<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>

    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
    $stmt=$pdo->query("select * from 4each_keijiban");
   
    ?>
    
    <logo>
        <img src="4eachblog_logo.jpg">
    </logo>
    <header>
        <ul class="menu">
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>
    
    <main>
        <div class="main-container">
            <div class="left">
            <h1>プログラミングに役立つ掲示板</h1>
            <form method="post" action="insert.php">
            <div class="box">
            <h3 class="nyuryoku">  入力フォーム</h3>
                    <div>
                        <label>ハンドルネーム</label>
                        <br>
                        <input type="text" class="text" size="40" name="handlename">
                    </div>
                    
                    <div>
                        <label>タイトル</label>
                        <br>
                        <input type="text" class="text" size="40" name="title">
                    </div>
                    
                    <div>
                        <label>コメント</label>
                        <br>
                        <textarea cols="60" rows="10" name="comments"></textarea>
                    </div>
                    
                    <div class="button">
                        <input type="submit" class="submit" value="投稿する">
                        <br>
                    </div>
                
                </div>
                </form>
                
               
                
                <?php
                while($row = $stmt->fetch()){
                    echo "<div class='box1'>";
                    echo "<h3>".$row['title']."</h3>";
                    echo "<div class='contents'>";
                    echo $row['comments'];
                    echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
                    echo "</div>";
                    echo "</div>";     
                    }
                ?>

            </div>
            
            <div class="right">
                <h2>人気の記事</h2>
                    <ul class="page">
                        <li>PHPオススメ本</li>
                        <li>PHP MyAdminの使い方</li>
                        <li>今人気のエディタ Top5</li>
                        <li>HTMLの基礎</li>
                    </ul>
                <h2>オススメリンク</h2>
                    <ul class="page">
                        <li>インターノウス株式会社</li>
                        <li>XAMPPのダウンロード</li>
                        <li>Eclipseのダウンロード</li>
                        <li>Bracketsのダウンロード</li>
                    </ul>
                <h2>カテゴリ</h2>
                    <ul class="page">
                        <li>HTML</li>
                        <li>PHP</li>
                        <li>MySQL</li>
                        <li>JavaScript</li>
                    </ul>
    
            </div>
        </div> 
    </main>
    
    <footer>
            copyright ⓒ internous | 4each blog the which provides A to Z about programming. 
    </footer>

</body>












</html>