
<!DOCTYPE html>
<?php date_default_timezone_set('Europe/Brussels');?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0" />
    <title>The Dream Converter</title>
  </head>

  <body>

    <header>
      <h1>Brasil</h1>
      <p><?php echo date('h:i:s A');?></p>
    </header>

    <main>

      <form method="POST" action="convert.php" target="result_frame">
      
      <input type="text" name="amount" placeholder="0.0">
      <p>Your tourist currency</p>
      <select name="other_currency">
        <option value='EUR'>EUR</option>
        <option value="GBP">GBP</option>
        <option value="USD">USD</option>
      </select>
     
      <input type="hidden" name="mode" value="from_brl">
      <input type="submit" name="convert" value="Convert">
      <br>
      <br>
      <iframe src="convert.php" width="100%" name="result_frame" title="Result" for="amount"></iframe>

     </form>

    </main>

  </body>
</html>
