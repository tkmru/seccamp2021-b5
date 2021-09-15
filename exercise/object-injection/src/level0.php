<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>Level0</title>
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
<h1 class="title">Level0</h1>
<h2 class="subtitle">説明:</h1>
<p>次のコードでは、Lectureクラスを<strong>serialize()</strong>によって文字列へシリアライズした後、その文字列を出力しています。</p>
<p>その後、シリアライズされた文字列を<strong>unserialize()</strong>によってデシリアライズしています。</p>
<p>マジックメソッド<strong>__wakeup()</strong>の挙動や、シリアライズされた文字列を確認してください。</p>
<br>
<h2 class="subtitle">コード:</h1>
<pre>
<code>
class Lecture {
  public $title = '趣味と実益のための著名なOSSライブラリ起因の脆弱性の探求';
  public $track = 'B';
  public $year = 2021;
  public function __wakeup() {
    echo 'wakeup!!';
  }
}
 
$l = new Lecture();
$serialized = serialize($l);
echo htmlspecialchars($serialized);
echo "&lt;br&gt;";
echo "-------------------------------------------";
echo "&lt;br&gt;";
$unserialized = unserialize($serialized);
</code>
</pre>
<br>
<h2 class="subtitle">実行結果:</h2>
<pre>
<code>
<?php
class Lecture {
  public $title = '趣味と実益のための著名なOSSライブラリ起因の脆弱性の探求';
  public $track = 'B';
  public $year = 2021;
  public function __wakeup() {
    echo 'wakeup!!';
  }
}
 
$l = new Lecture();
$serialized = serialize($l);
echo htmlspecialchars($serialized);
echo "<br>";
echo "-------------------------------------------";
echo "<br>";
$unserialized = unserialize($serialized);
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