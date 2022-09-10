<title>验证中…</title>
<?php
  $pwd=$_POST["passwd"];
  if($pwd=="47"){
    header("refresh:3;url=/weboffice/index.html");
    print('<br>正在加载，请稍等...<br>三秒后自动<a href="/weboffice/index.html">跳转</a>到网站~~~');
  }else{
  echo "<br><a href='index.html'>返回重新输入</a>";
  }

?>  