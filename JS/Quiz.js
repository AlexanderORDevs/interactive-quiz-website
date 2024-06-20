
const progressBar = document.querySelector(".progress-bar"),
    progressText = document.querySelector(".progress-text");

const progress = (value) => {
    const percentage = (value / time) * 100;
    progressBar.style.width = `${percentage}%`;
    progressText.innerHTML = `${value}`;
};

const startBtn = document.querySelector(".start"),
    numQuestions = document.querySelector("#num-questions"),
    quiz = document.querySelector(".quiz"),
    startScreen = document.querySelector(".start-screen");

let questions = [],
    time = 30,
    score = 0,
    currentQuestion,
    timer;

let lastFetchTime = 0;
const minInterval = 1000000000;


//ANIMACION
const loadingAnimation = () => {
    startBtn.innerHTML = "Empezando";
    const loadingInterval = setInterval(() => {
        if (startBtn.innerHTML.length === 13) {
            startBtn.innerHTML = "Empezando";
        } else {
            startBtn.innerHTML += ".";
        }
    }, 500);
};

$(document).ready(function () {
    $('#quizForm').submit(function (event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del formulario

        let nombre = $('#nombre').val().toLowerCase();
        let apellido = $('#apellido').val().toLowerCase();
        let correo = $('#correo').val().toLowerCase();
        let dni = $('#dni').val();
        let departamento = $('#departamento').val().toLowerCase();
        let edad = $('#edad').val();
        let num = numQuestions.value;

        // Enviar datos al servidor mediante AJAX
        $.ajax({
            url: '../php/formulario.php',
            type: 'POST',
            data: {
                nombre,
                apellido,
                correo,
                dni,
                departamento,
                edad, 
                num
            },
            success: function (response) {
                questions = JSON.parse(response);
                console.log("questions---",questions)
                if (questions.length > 0) {
                    $('.start-screen').addClass('hide');
                    $('.quiz').removeClass('hide');
                    setTimeout(startQuiz, 100);
                } else {
                    alert('No se encontraron registros en la tabla participantes.');
                }
            },
            error: function (xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("quizForm").addEventListener("submit", function (event) {
        // Detiene el envío del formulario
        event.preventDefault();
        setTimeout(startQuiz(), 100);
    });
});

const startQuiz = () => {
    const currentTime = Date.now();
    const timeSinceLastFetch = currentTime - lastFetchTime;

    if (timeSinceLastFetch < minInterval) {
        const timeToWait = minInterval - timeSinceLastFetch;
        setTimeout(startQuiz, timeToWait);
        return;
    }
    lastFetchTime = currentTime;
    console.log("questions---", questions)
    setTimeout(() => {
        startScreen.classList.add("hide");
        quiz.classList.remove("hide");
        currentQuestion = 1;
        showQuestion(questions[0]);
    }, 1000);
};

//MOSTRAR PREGUNTA
const showQuestion = (question) => {

    const questionText = document.querySelector(".question"),
        answersWrapper = document.querySelector(".answer-wrapper");
    let questionNumber = document.querySelector(".number");
    let respuestasIncorrectas = JSON.parse(question.respuestas_incorrectas)
    questionText.innerHTML = question.pregunta;

    //LLAMAR A TODAS LAS RESPUESTAS
    const answers = [
        ...respuestasIncorrectas,
        question.respuesta_correcta.toString(),
    ];
    answersWrapper.innerHTML = "";
    answers.sort(() => Math.random() - 0.5);
    answers.forEach((answer) => {
        answersWrapper.innerHTML += `
          <div class="answer ">
              <span class="text">${answer}</span>
              <span class="checkbox">
                  <i class="fas fa-check"></i>
              </span>
          </div>
      `;
    });

    //ITERAR PREGUNTAS
    questionNumber.innerHTML = ` Pregunta <span class="current">${questions.indexOf(question) + 1}</span>
      <span class="total">/${questions.length}</span>`;
    const answersDiv = document.querySelectorAll(".answer");
    answersDiv.forEach((answer) => {
        answer.addEventListener("click", () => {
            if (!answer.classList.contains("checked")) {
                answersDiv.forEach((answer) => {
                    answer.classList.remove("selected");
                });
                answer.classList.add("selected");
                submitBtn.disabled = false;
            }
        });
    });

    //AÑADIR EVENTO DE SONIDO
    time = 15;
    startTimer(time);
};

const startTimer = (time) => {
    timer = setInterval(() => {
        if (time === 3) {
            playAdudio("../assets/media/countdown.mp3");
        }
        if (time >= 0) {
            progress(time);
            time--;
        } else {
            checkAnswer();
        }
    }, 1000);
};

const submitBtn = document.querySelector(".submit"),
    nextBtn = document.querySelector(".next");
submitBtn.addEventListener("click", () => {
    checkAnswer();
});

nextBtn.addEventListener("click", () => {
    nextQuestion();
    submitBtn.style.display = "block";
    nextBtn.style.display = "none";
});

//MOSTRAR PREGUNTA AL TERMINAR TIEMPO
const checkAnswer = () => {
    clearInterval(timer);
    const selectedAnswer = document.querySelector(".answer.selected");
    if (selectedAnswer) {
        const answer = selectedAnswer.querySelector(".text").innerHTML;
        if (answer === questions[currentQuestion - 1].respuesta_correcta) {
            score++;
            selectedAnswer.classList.add("correct");
        } else {
            selectedAnswer.classList.add("wrong");
            const correctAnswer = document
                .querySelectorAll(".answer")
                .forEach((answer) => {
                    if (
                        answer.querySelector(".text").innerHTML ===
                        questions[currentQuestion - 1].respuesta_correcta
                    ) {
                        answer.classList.add("correct");
                    }
                });
        }
    } else {
        const correctAnswer = document
            .querySelectorAll(".answer")
            .forEach((answer) => {
                if (
                    answer.querySelector(".text").innerHTML ===
                    questions[currentQuestion - 1].respuesta_correcta
                ) {
                    answer.classList.add("correct");
                }
            });
    }
    const answersDiv = document.querySelectorAll(".answer");
    answersDiv.forEach((answer) => {
        answer.classList.add("checked");
    });

    submitBtn.style.display = "none";
    nextBtn.style.display = "block";
};

//SIGUIENTE PREGUNTA
const nextQuestion = () => {
    if (currentQuestion < questions.length) {
        currentQuestion++;
        showQuestion(questions[currentQuestion - 1]);
    } else {
        showScore();
    }
};

//RESULTADOS
const endScreen = document.querySelector(".end-screen"),
    finalScore = document.querySelector(".final-score"),
    totalScore = document.querySelector(".total-score");

const showScore = () => {
    endScreen.classList.remove("hide");
    quiz.classList.add("hide");

    $.ajax({
        url: '../php/formulario.php',
        type: 'POST',
        data: {
            puntaje: score
        },
        success: function (response) {
            console.log(response);
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });

    finalScore.innerHTML = score;
    totalScore.innerHTML = `/ ${questions.length}`;
};

const restartBtn = document.querySelector(".restart");
restartBtn.addEventListener("click", () => {
    window.location.reload();
});

const playAdudio = (src) => {
    const audio = new Audio(src);
    audio.play();
};
