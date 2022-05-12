<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Papertown Art</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
    </head>

    
    <body class="antialiased">
    @extends('layouts.app')
    <div id="preloader">
    <div class="inner">
    <img class="gif" src="img/1491.gif" alt="loading">
    </div>
    </div>

    


<div id="universe"></div>

        <!-- <div class="background welcome">
        <svg class="vetoronda" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">

            <path
            class="onda-1"  fill="#E5FFF7" fill-opacity="1" d="M0,64L26.7,69.3C53.3,75,107,85,160,117.3C213.3,149,267,203,320,213.3C373.3,224,427,192,480,170.7C533.3,149,587,139,640,149.3C693.3,160,747,192,800,181.3C853.3,171,907,117,960,122.7C1013.3,128,1067,192,1120,197.3C1173.3,203,1227,149,1280,149.3C1333.3,149,1387,203,1413,229.3L1440,256L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>

            <path 
            class="onda-2"  fill="#FDE9F2" fill-opacity="1" d="M0,288L21.8,282.7C43.6,277,87,267,131,245.3C174.5,224,218,192,262,165.3C305.5,139,349,117,393,133.3C436.4,149,480,203,524,197.3C567.3,192,611,128,655,106.7C698.2,85,742,107,785,112C829.1,117,873,107,916,101.3C960,96,1004,96,1047,128C1090.9,160,1135,224,1178,213.3C1221.8,203,1265,117,1309,85.3C1352.7,53,1396,75,1418,85.3L1440,96L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path>
    </svg>
        </div> -->

    </body>
    <script src="js/slide.js"></script>
    <script src="js/preloader.js"></script>
    
</html>
