<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Universe of Hero</title>

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      color: white;
    }

    section.constr-container {
      width: 100vw;
      height: 100vh;
      position: relative;
      text-align: center;
      background-image: url('{{ asset('images/bg.png') }}');
      background-repeat: no-repeat;
      background-size: cover;
    }

    section.constr-container::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      z-index: 1;
      backdrop-filter: blur(5px);
    }

    .constr {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      font-family: 'Poppins', sans-serif;
      z-index: 3;
    }

    h2 {
      font-family: 'Poppins', sans-serif;
      margin-top: 50px;
      left: 50%;
      transform: translate(-50%, 0);
      font-size: 20px;
      position: absolute;
      z-index: 2;
    }

    .constr h1 {
      font-size: 60px;
      text-transform: uppercase;
      line-height: 1;
      transition: all ease-out 500ms;
    }

    .constr h1:hover {
      letter-spacing: 2px;
    }

  </style>
</head>

<body>
  <section class="constr-container">
    <h2>Universe of Hero</h2>
    <div class="constr">
      <h1>This website is underconstruction</h1>
    </div>
  </section>
</body>

</html>
