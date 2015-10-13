<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo POST</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>        
        <form action="prueba2.php" method="get" enctype="application/x-www-form-urlencoded">
            <input name="param1[]" value="hola">
            <input name="param1[]" value="mundo">
            <select multiple name="param2[]" size="4">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
        <form action="prueba2.php" method="post" enctype="multipart/form-data">
			<input type="file" name="archivo" />
			<input type="submit" />
		</form>
    </body>
</html>