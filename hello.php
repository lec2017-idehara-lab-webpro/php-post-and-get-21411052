<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hello</title>
  </head>
  <body>

    <?php
    	if( !isset($_GET['name'],$_GET['id']) ||
    		strlen($_GET['name']) == 0 ||
    		strlen($_GET['id']) == 0
        )
    	{
    		echo 'Missing Data';
    	}
    	else
    	{
    		$id = ($_GET['id']) ;
        $name = ($_GET['name']);
      }
      echo "$id の $name さん、こんにちは";

      ?>


  </body>
</html>
