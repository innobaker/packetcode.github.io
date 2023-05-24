<? php

  $hostname='localhost';
  $dbusername='root';
  $password='';
  $dbname='hoy';

    $conn=new mysqli('localhost','root','','hoy') or die("failed");
    echo'success'  ;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> hey</title>
  </head>
  <body>
    <div>
      <form class="" action="" method="post">
        name<input type="text" name="name" value="name"/>
        </form>

    </div>
  </body>
</html>
