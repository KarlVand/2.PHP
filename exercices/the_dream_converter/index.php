
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
      <h1>Nicaragua</h1>
      <p><?php echo date('h:i:s A');?></p>
    </header>
    <main>
      <form method="POST" action="convert.php">
      <div value="NIO" name="to_currency">
        <label for="input">Nic. Cordobas</label>
      </div>
      <input type="number" name="amount" placeholder="0.0">
     
      <p>to your tourist currency</p>
      <select name="from_currency">
        <option value="USD">USD</option>
        <option value="EUR">EUR</option>
        <option value="GBP">GBP</option>
    </select>
   
   
    <button type="submit">Submit</button>
    <br>
    <br>
    <output name="result" for="amount"></output>

        

      </form>
    </main>

  </body>
</html>
