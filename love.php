<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Para ti 💖</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #fff0f5, #ffeef2);
      height: 100vh;
      font-family: 'Segoe UI', sans-serif;
      overflow-x: hidden;
      position: relative;
    }

    h1 {
      text-align: center;
      font-size: 6vw;
      color: #b30059;
      margin-top: 5vh;
    }

    .carta {
      display: block;
      margin: 20px auto;
      width: 85vw;
      height:  75vh;
      max-height: 300px;
      padding: 15px;
      font-size: 4vw;
      border-radius: 12px;
      border: 2px solid #ffb6c1;
      background: #fff;
      resize: none;
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.3);
    }

    .decoraciones {
      position: absolute;
      top: 10vh;
      bottom: 10vh;
      width: 100%;
      pointer-events: none;
      z-index: 0;
    }

    .tulipan {
      position: absolute;
      width: 40px;
      height: auto;
    }

    .tulipan.izq {
      left: 10px;
      animation: flotar 3s infinite ease-in-out;
    }

    .tulipan.der {
      right: 10px;
      animation: flotar 3s infinite ease-in-out;
    }

    .corazon {
      position: absolute;
      font-size: 4vw;
      color: #ff69b4;
      animation: subir 5s ease-in-out infinite;
    }

    @keyframes flotar {
      0%, 100% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
    }

    @keyframes subir {
      0% { transform: translateY(0) scale(1); opacity: 1; }
      100% { transform: translateY(-100vh) scale(1.5); opacity: 0; }
    }
  </style>
</head>
<body>

<h1>💖 Esta canción es para ti 💖</h1>

<textarea class="carta" placeholder="Holaaa ojitos brillantes, niña linda, chica que cautivo mi corazon. Queria decirte que me enamore de ti de un momento a otro, no pense que eso pasaria, pero mi corazon siente tanto por ti, cada momento que paso a tu lado, cada palabra que compartimos, empezo a tejer ese sentimiento tan profundo y lindo que ahora llevo adentro.
Mi amor por ti se fue formando de una manera tan linda y pura, el hecho de escuchar tu voz me dice donde siempre quiero estar, me generas una tranquilidad unica, eres la calma en medio de las tormentas. Me enamore de tu manera tan unica de expresarte eres tan unica, tan autentica, tan real, brillas en el mundo, el ser tu misma hizo que me enamorara de ti, esa tan maravillosa forma de ser,nunca habia sido bueno demostrando lo que siento, pero contigo me da ganas de decirte todo lo lindo que lleva mi corazon.
Quiero caminar a tu lado, quiero aprender de ti y contigo, estar a tu lado y poder compartir muchos momentos lindos, prometo agarrarte la mano y nunca soltarte, estar ahi en cada paso y en cada tropiezo, escucharte siempre, se que todo necesita su tiempo y no quiero apresurar nada, solo quiero que cada paso que demos sea juntos y haya confianza. 
Quiero aprender mas de ti, que aprendas mas de mi, que cada dia sea unico a tu lado, todo lo que digo me sale del corazon quiero construir algo hermoso a tu lado y contigo aprender lo que verdaderamente significa el amor, no la palabra, si no lo que conlleva sentirlo y descubrir a tu lado todo lo lindo que la vida puede ofrecer. "></textarea>

<!-- Música automática -->
<audio autoplay loop>
  <source src="tupoeta.mp3" type="audio/mpeg">
  Tu navegador no soporta audio HTML5.
</audio>

<!-- Tulipanes y corazones -->
<div class="decoraciones">
  <img src="https://cdn-icons-png.flaticon.com/512/765/765755.png" class="tulipan izq" style="top: 20vh;">
  <img src="https://cdn-icons-png.flaticon.com/512/765/765755.png" class="tulipan izq" style="top: 60vh;">
  <img src="https://cdn-icons-png.flaticon.com/512/765/765755.png" class="tulipan der" style="top: 30vh;">
  <img src="https://cdn-icons-png.flaticon.com/512/765/765755.png" class="tulipan der" style="top: 70vh;">

  <!-- Corazones flotando -->
  <div class="corazon" style="left: 20%; top: 90vh;">💖</div>
  <div class="corazon" style="left: 40%; top: 100vh;">💞</div>
  <div class="corazon" style="left: 60%; top: 95vh;">💕</div>
  <div class="corazon" style="left: 80%; top: 105vh;">💗</div>
</div>

</body>
</html>
