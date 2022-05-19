<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel = "stylesheet" href = "style.css"> 
    <title>ORDER</title>
</head>
<div class="header">
    <img src="head2.jpg" class="rounded" alt="header" height="60" width="1365">
</div>
<body>
<div class="rectangle" align="center">
    <table class="table1" align="center">
        <table border="2" cellspacing="2" cellpadding="15" align="center" width="1200">

            <ul>
                <thead>

                    <body>
                        <tr>
                            <td><b>NOMOR</b></td>
                            <td><b>NAMA MAKANAN</b></td>
                            <td><b>HARGA</b></td>
                            <!-- <td><b>PESAN</b></td> -->
                        </tr>
                        @foreach($order as $od)
                        <tr>
                            <td>{{ $od->NOMOR }}</td>
                            <td>{{ $od->NAMA_MAKANAN }}</td>
                            <td>RP. {{ $od->HARGA }}</td>
                            <!-- <td>RP. {{ $od->checkbox }}</td> -->
                            <!-- <td><input type="checkbox" name="chk"></td> -->
                        </tr>
                           @endforeach
                    </body>
                </thead>
            </ul>
        </table>
         </div>
        
         <div class="rectangle" align="center">
             Silahkan Masukkan nama makanan dan harga nya
         <form action="pesanan" method ="post">
        {{csrf_field()}}
        <table class="table1" align="center">
        <table border="2" cellspacing="2" cellpadding="15" align="center" width="1200">

            <ul>
                <thead>

                    <body>
                        <tr>
                            <td><b>NAMA MAKANAN</b></td>
                            <td><b>HARGA</b></td>
                        </tr>
                        <tr>
                           <td><input type=text, name="NAMA_MAKANAN", required="required"></td>
                           <td><input type=text, name="HARGA", required="required"></td>
                           <td><input type="submit" value="Order"></td>
                        </tr>
                    </body>
                </thead>
            </ul>
         </form>
         </div>

        <a href="pesanan">
        <!-- <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-secondary me-md-5" type="button">Order</button> -->
        <!-- </div> -->
        </a>   
</body>
</html>