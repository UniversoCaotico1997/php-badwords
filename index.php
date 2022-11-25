<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Badwords</title>
</head>
<body>
    

    <div class="container">
        <form action="greetings.php" method="get">
          <div class="my-3">
            <label for="name" class="form-label">Paragrafo</label>
            <input type="text"  name="name" class="form-control" id="name" aria-describedby="paragrafo">
          </div>
          <div class="mb-3">
            <label for="badword" class="form-label">Parola censurata</label>
            <input type="text" name="badWord" class="form-control" id="badword">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
</html>