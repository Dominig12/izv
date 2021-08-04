<?php
    $text = "";
    $col = 1;
    if($_POST["text"] && $_POST["col"]){
        $col = $_POST["col"];
        for($i = 0; $i < $col; $i++)
            $text.="{$_POST['text']}\n";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col"></div>
      <div class="col-6">
      <form method="POST">
        <div class="form-group">
          <label for="col">Количество извинений</label>
          <input type="number" name="col" class="form-control" id="col">
        </div>
        <div class="form-group">
          <label for="text">Текст извинений</label>
          <input type="text" name="text" class="form-control" id="text">
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
        <div class="form-group">
          <label for="text_izv">Извинения</label>
          <textarea class="form-control" name="text_izv" id="text_izv" rows="<?php echo $col?>"><?php echo $text?></textarea>
        </div>
      </form>
      </div>
      <div class="col"></div>
    </div>
  </div>
</body>
</html>