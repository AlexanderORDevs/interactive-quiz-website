<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../css/Quiz.css" />

  <script src="../js/helpers/jquery-3.7.1.min.js"></script>
  <script defer src="../js/quiz.js"></script>
  <title>Quiz App</title>
</head>

<body>
  <div class="container">
    <div class="start-screen">
      <h1 class="heading">Quiz App</h1>
      <div class="settings">
        <form id="quizForm" method="POST">
          <label for="nombre">Nombre:</label>
          <input class="labelText" type="text" id="nombre" name="nombre" maxlength="20" pattern="[A-Za-z\s]{1,20}"
            title="Solo se permiten letras y un máximo de 20 caracteres" required>

          <label for="apellido">Apellido:</label>
          <input class="labelText" type="text" id="apellido" name="apellido" maxlength="20" pattern="[A-Za-z\s]{1,20}"
            title="Solo se permiten letras y un máximo de 20 caracteres" required>

          <label for="correo">Correo Electrónico:</label>
          <input class="labelText" type="email" id="correo" name="correo" title="Debe ser un correo de @gmail.com"
            required>

          <label for="dni">Número de DNI:</label>
          <input class="labelText" type="text" id="dni" name="dni" pattern="\d{8}"
            title="Debe contener exactamente 8 dígitos" required>

          <label for="departamento">Departamento:</label>
          <input class="labelText" type="text" id="departamento" name="departamento" maxlength="20"
            pattern="[A-Za-z\s]{1,20}" title="Solo se permiten letras y un máximo de 20 caracteres" required>

          <label for="edad">Edad:</label>
          <input class="labelText" type="number" id="edad" name="edad" min="5" max="100" required>
          <label for="num-questions">Números de Preguntas:</label>
          <select class="labelText" id="num-questions">
            <option value="2">2</option>
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
          </select>
          <button type="submit" id="startQuizBtn" class="btn start">Comenzar Quiz</button>
        </form>
      </div>
    </div>
    <div class="quiz hide">
      <div class="timer">
        <div class="progress">
          <div class="progress-bar"></div>
          <span class="progress-text"></span>
        </div>
      </div>
      <div class="question-wrapper">
        <div class="number">
          Pregunta <span class="current">1</span>
          <span class="total">/10</span>
        </div>
        <div class="question">Preparando Preguntas </div>
      </div>
      <div class="answer-wrapper">
        <div class="answer selected">
          <span class="text">Preparando Respuesta</span>
          <span class="checkbox">
            <i class="fas fa-check"></i>
          </span>
        </div>
      </div>
      <button class="btn submit" disabled>Verificar Respuesta</button>
      <button class="btn next">Siguiente Pregunta</button>
    </div>
    <div class="end-screen hide">
      <h1 class="heading">Quiz App</h1>
      <div class="score">
        <span class="score-text">RESULTADO:</span>
        <div>
          <span class="final-score">0</span>
          <span class="total-score">/10</span>
        </div>
      </div>
      <button class="btn restart">Empezar Nuevamente</button>
    </div>
  </div>
</body>

</html>