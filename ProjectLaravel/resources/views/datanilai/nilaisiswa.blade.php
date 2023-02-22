<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Nilai Siswa</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container text-center mt-3 pt-3 bg-while">


        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nama?>
        </h1>

        <br>

        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            <?php echo $nilai?>
        </h1>

        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{date(now())}}
        </h1>


    </div>

    <div class="container text-center mt-3 pt-3 bg-while">


        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nama}}
        </h1>

        <h1 class="bg-dark px-3 py-1 text-white d-inline-block">
            {{$nilai}}
        </h1>

        <br>

        <div class="alert alert-secondary d-inline-block">
            <?php 
            if (($nilai >= 0) and ($nilai < 50) ) {
                echo "maaf, anda belim lulus";
            }else if(($nilai >= 50) and ($nilai <= 100)){
                echo "selamat, anda lulus";
            }    
            ?>
        </div>
    </div>

    <div class="container text-center mt-3 pt-3 bg-while">
        @for($i = 0; $i <5; $i++)
            <div class="alert alert-info d-inline-block">
                {{$i}}
            </div>
        @endfor
    </div>
</body>
</html>