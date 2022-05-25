<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Papertown Art</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,300;1,500&display=swap" rel="stylesheet">
        <style>

   .welcome-entre{
    background-color: rgb(242 242 242 / 20%);
      padding: 6px 18px;
      border-radius:10px;
      backdrop-filter: blur( 3.5px );
      border: 1px solid rgba( 255, 255, 255 );
      box-shadow:0px 5px 13px 0 rgb(178 178 178 / 22%);
      transition: 1s;

    }
    .welcome-entre:hover{
      background-color: rgb(250 108 134 / 10%);
    }

  .vetor1{
    left: 50px;
  }
    .entre-welcome div a, .entre-welcome p{
      text-decoration:none;
      color:black;
      font-family:"Poppins";
      font-weight: bold ;
      font-size:1.5rem;
  
    }
  
    .entre-welcome div{
      margin:0 5px;
      font-family:"Poppins";
      font-weight: bold ;
      font-size:1.5rem;
    }
    .entre-welcome{
      margin:25px auto;
      align-items:center;
      display:flex;
      animation:  entre-welcome  5s forwards;
    }
    @keyframes entre-welcome  {
    0% {
      opacity: 0;
      transform: translate3d(0px, 90px, 0);
    }
    80% {
      opacity: 0;
      transform: translate3d(0px, 90px, 0);
    }
    100% {
      opacity: 1;
      transform: translate3d(0, 0px, 0);
    }}
    .imagem-logo-welcome img{
      animation: surgir-img 1s forwards;
      margin:25px auto;
      width: 200px;
    }
      .antialiased{
        margin:0;
        width: 100vw;
        height: 100vh;
        display:flex;
          background: white;
          font-family:"Nunito";
          flex-direction:column;
          align-items:center;
      }
       .flip_letters {
      position: relative;
      text-align:center;
    }
    .h3-paper{
      margin-top:50PX;
      font-size: 2rem;
      font-family:"Poppins";
      font-weight: bold ;
      animation: surgir-h2 4s forwards;
    }
    .titulo-paper{
      margin:0 auto !important;
      animation: surgir 3s forwards;
  
    }
    .flip_letters span {
      font-size: 5rem;
      position: relative;
      display: inline-block;
      color: pink;
      font-weight: bold ;
      animation: flip 3s infinite;
      animation-delay: calc(.2s * var(--flip));
    }
    @keyframes surgir  {
    0% {
      opacity: 0;
      transform: translate3d(80px, 0px, 0);
    }
    40% {
      opacity: 0;
      transform: translate3d(80px, 0px, 0);
    }
    100% {
      opacity: 1;
      transform: translate3d(0, 0px, 0);
    }}
    @keyframes surgir-h2  {
    0% {
      opacity: 0;
      transform: translate3d(-80px, 0px, 0);
    }
    60% {
      opacity: 0;
      transform: translate3d(-80px, 0px, 0);
    }
    100% {
      opacity: 1;
      transform: translate3d(0, 0px, 0);
    }
  }
  @keyframes surgir-img  {
    from {
      opacity: 1;
      transform: translate3d(60px, 0px, 0);
    }
    to {
      opacity: 1;
      transform: translate3d(0, 0px, 0);
    }
  }
  
    @keyframes flip {
      0%{
        transform: translate3d(0, 0px, 0);
      }
      50% {
        transform: translate3d(0, 20px, 0);
      }
      100%{
        transform: translate3d(0, 0px, 0);
      }
    }
    @media(max-width:800px){
      .imagem-logo-welcome img{
        width: 150px;
      }
      .flip_letters span{
        font-size:3rem;
      }
      .h3-paper{
          margin-top:25px;
          font-size:1.5rem;
      }
    }
    @media(max-width:480px){
      .flip_letters span{
        font-size:2.2rem;
      }
      .h3-paper{
          margin-top:25px;
          font-size:1.5rem;
      }
    }
    @media(max-width:480px){
      .entre-welcome{
        flex-direction:column;
      }
      .flip_letters{
        font-size:1rem;
      }
    }
  
        </style>
    </head>

    
    <body class="antialiased">
    <div class="background">
        <img class="vetor1" src="img/Vector1.png" alt="detalhe">
        <img class="vetor2" src="img/Vector2.png" alt="detalhe">
        <img class="bolinhasRosa" src="img/BolinhasRosa.png" alt="detalhe">
        <img class="bolinhasVerde" src="img/BolinhasVerde.png" alt="detalhe">
        <img class="circleRosa" src="img/circleRosa.png" alt="detalhe">
        <img class="circleVerde" src="img/CircleVerde.png" alt="detalhe">
    </div>

    <div id="preloader">
    <div class="inner">
    <img class="gif" src="img/1491.gif" alt="loading">
    </div>
    </div>

<div class="imagem-logo-welcome"> 
  <img src="img/Logo-big.png" alt="">
</div>

<h1 class="titulo-paper" style="color:white; margin:100px 0; font-family:"> <div class="flip_letters">
   <span style="--flip:1">P</span>
   <span style="--flip:2">a</span>
   <span style="--flip:3">p</span>
   <span style="--flip:4">e</span>
   <span style="--flip:5">r</span>
   <span style="--flip:6"> </span>
   <span style="--flip:6">T</span>
   <span style="--flip:7">o</span>
   <span style="--flip:8">w</span>
   <span style="--flip:9">n</span>
   <span style="--flip:10"> </span>
   <span style="--flip:11">A</span>
   <span style="--flip:12">r</span>
   <span style="--flip:13">t</span>
  </div>
  
</h1>
  <h3 class="h3-paper">
    Canecas Personalizadas! 
  </h3>

  <div class="entre-welcome">
<div>
  <a class="welcome-entre" href="{{ route('login')}}">Entre</a>
</div>

<p>ou faça o</p>

<div>
  <a class="welcome-entre" href="{{ route('register') }}">Cadastro</a>
</div>

</div>



    </body>
    <script src="js/slide.js"></script>
    <script src="js/preloader.js"></script>
    
</html>
