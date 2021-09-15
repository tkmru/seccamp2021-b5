<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Level2</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css'>
</head>
<body>
<nav class="navbar is-light" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <span class="navbar-item">
      <span class="icon-text is-large">
        <span class="fa fa-language">PHP Object Injection Exercise</span>
      </span>
    </span>
  </div>
  <div class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item" href="./">
        Home
      </a>
    </div>
  </div>
</nav>
<br>

<div class="container">
<h1 class="title">Level2</h1>
<h2 class="subtitle">説明:</h2>
<p>次のコードでは、Mainクラスを<strong>serialize()</strong>によって文字列へシリアライズした後、その文字列を出力しています。</p>
<p>その後、objectパラメータが存在する場合はobjectパラメータを、存在しない場合はシリアライズされた文字列を<strong>unserialize()</strong>によってデシリアライズしています。</p>
<p>objectパラメータでシリアライズされた文字列を指定し、<strong>/etc/passwd</strong>を読み取ってください。</p>
<br>
<h2 class="subtitle">コード:</h2>
<pre>
<code>
class Setting {
  public $path = "config.json";
  public function read() {
    $content = file_get_contents($this->path);
    echo $content;
  }
}

class Main {
  public $file = null;
  public function __destruct(){
    $this->file->read();
  }
}

$main = new Main();
$serialized = serialize($main);
echo htmlspecialchars($serialized);
echo "&lt;br&gt;";
echo "-------------------------------------------";
echo "&lt;br&gt;";
if(isset($_GET["object"])){
  unserialize($_GET["object"]);
} else {
  echo "objectパラメータを設定してください";
}
</code>
</pre>
<br>
<h2 class="subtitle">実行結果:</h2>
<pre>
<code>
<?php
class Setting {
  public $path = "config.json";
  public function read() {
    $content = file_get_contents($this->path);
    echo $content;
  }
}

class Main {
  public $file = null;
  public function __destruct(){
    $this->file->read();
  }
}

$main = new Main();
$serialized = serialize($main);
echo htmlspecialchars($serialized);
echo "<br>";
echo "-------------------------------------------";
echo "<br>";
if(isset($_GET["object"])){
  unserialize($_GET["object"]);
} else {
  echo "objectパラメータを設定してください";
}
?>
</code>
</pre>
</div>
<br>
<footer class="footer">
<div class="has-text-centered">
Copyright © 2021 <a href="https://github.com/tkmru"><b>tkmru</b></a>.
</div>
</footer>
</body>
</html>


