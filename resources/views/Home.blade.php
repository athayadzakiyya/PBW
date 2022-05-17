<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel = "stylesheet" href = "style.css"> 
    <title>Homepage</title>
</head>

<div class="header">
    <img src="head.jpg" class="rounded" alt="header" height="60" width="1349">
</div>
<body>
<div class="text-center">
<img src="la comida.jpeg" class="rounded" alt="la comida"  width="400" height="200">
</div>
    <center>Welcome to our Beloved Restaurant!<br>
        Enjoy the sensation of the delicious food in<br> La Comida Restaurant with your family
    </center>
    
    <div class="kotak">
    @csrf
    <!-- <label for="name"></label> -->
				<input type="name" required placeholder="enter name"/>
    </div>
    
    <div class="kotak">
    <!-- <label for="table"></label> -->
				<input type="table" required placeholder="enter number of table"/>
    </div>
    
    <a href="order">
    <div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-secondary me-md-5" type="button">Order Here!!</button>
    </div>
    </a>
</body>
</html>