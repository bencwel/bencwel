<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Bencwel</title>
    
</head>
<style>
    body{
        text-align: center;
        background-image: url(tlo.png);
        

    }
    *{
        margin: none;
    }
    table{
        margin: auto;
        border: 1px solid black;
        
    }
    td{
        padding: 2px;
        border: 1px solid black;
        box-shadow: 5px 5px black;
        border-radius: 15px;
    }
    img{
        height: 550px;
        width: 200px;
    }
    img:hover{
        cursor: pointer;
    }
    h1{
        color: white;
        text-shadow:  3px 3px black;
        background-color: black;
        width: 450px;
        margin: auto;
    }
    #gitara{
        width: 70vw;
        border: 1px solid black;
        box-shadow: 5px 5px black;
        border-radius: 15px;
        display: block;
        margin: 0 auto;
    }
</style>
<body>
    <h1>Bencwel Janoszczyk</h1>
    <table>
            <?php
                $folder='img/';
                $pliki=scandir($folder);

                $licz=0;


                foreach ($pliki as $plik){
                    $licz++;
                }
                $licz=$licz-2;
                for($i=1;$i<=$licz;$i++){
                    echo "<td><img src='img/benek$i.png'></td>";
                    if($i%4==0){
                        echo "<tr>";
                    }
                }
            ?>
    </table>
    <br>
    <video id="gitara" controls playsinline webkit-playsinline>
          <source src="film.mp4" type="video/mp4">
    </video>






    
</body>
</html>
