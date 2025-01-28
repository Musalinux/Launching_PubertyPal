const quiz = [
    {
        question: "Which hormone is like the 'master key' that unlocks puberty in girls?",
        answers: ["Estrogen", "Testosterone", "Insulin"],
        correct: 0
    },
    {
        question: "At what age range do girls typically start noticing changes like breast development?",
        answers: ["6-8 years", "8-13 years", "12-15 years"],
        correct: 1
    },
    {
        question: "Which gland in the brain acts like a 'conductor,' signaling the start of puberty?",
        answers: ["Pituitary gland", "Pineal gland", "Adrenal gland"],
        correct: 0
    },
    {
        question: "What is the medical term for a girl's first menstrual period, marking a significant milestone in puberty?",
        answers: ["Menarche", "Menopause", "Amenorrhea"],
        correct: 0
    },
    {
        question: "What is a common emotional change that many girls experience during puberty?",
        answers: ["Increased anxiety", "Loss of appetite", "Decreased interest in friends"],
        correct: 0
    },
    {
        question: "Why might some girls experience more acne during puberty?",
        answers: ["Due to increased oil production in the skin", "Due to dehydration", "Due to poor diet"],
        correct: 0
    },
    {
        question: "How does body hair typically change during puberty for girls?",
        answers: ["It becomes thinner", "It grows in new areas like underarms and the pubic region", "It falls out"],
        correct: 1
    },
    {
        question: "What indicates that a girl is going through a growth spurt during puberty?",
        answers: ["Increased need for sleep", "Decreased appetite", "Shorter height"],
        correct: 0
    },
    {
        question: "What significant role do the ovaries begin to play during puberty?",
        answers: ["Producing eggs", "Producing insulin", "Regulating heartbeat"],
        correct: 0
    },
    {
        question: "How might the menstrual cycle affect a girl's mood during puberty?",
        answers: ["It can cause mood swings", "It always makes them happy", "It has no effect on mood"],
        correct: 0
    },
    {
        question: "What change in a girl's body during puberty helps prepare for potential childbirth in the future?",
        answers: ["Hips widen", "Hips narrow", "Hips stay the same"],
        correct: 0
    },
    {
        question: "Which vitamin is crucial for bone health and should be included in the diet during puberty?",
        answers: ["Vitamin C", "Vitamin D", "Vitamin B12"],
        correct: 1
    }
];

let currentQuestion = 0;
let score = 0;

document.addEventListener("DOMContentLoaded", function() {
    displayQuestion();
});

function displayQuestion() {
    const questionElement = document.getElementById('question');
    const answersElement = document.getElementById('answers');
    const submitButton = document.getElementById('submit-button');
    const resultElement = document.getElementById('result');

    if (!questionElement || !answersElement || !submitButton || !resultElement) {
        console.error('One or more required HTML elements are missing!');
        return;
    }

    const question = quiz[currentQuestion];

    questionElement.textContent = question.question;
    answersElement.innerHTML = '';

    question.answers.forEach((answer, index) => {
        const li = document.createElement('li');
        li.textContent = answer;
        li.classList.add('answer');
        li.addEventListener('click', () => checkAnswer(index));
        answersElement.appendChild(li);
    });

    resultElement.textContent = '';
    submitButton.style.display = 'none';
}

function checkAnswer(index) {
    const question = quiz[currentQuestion];
    const resultElement = document.getElementById('result');
    const submitButton = document.getElementById('submit-button');

    if (index === question.correct) {
        resultElement.textContent = "Correct!";
        score++;
    } else {
        resultElement.textContent = "Sorry, that's not right.";
    }

    submitButton.style.display = 'block';
}

function nextQuestion() {
    currentQuestion++;

    if (currentQuestion < quiz.length) {
        displayQuestion();
    } else {
        showFinalResults();
    }
}

// JavaScript logic to show restart button after the quiz ends
function showFinalResults() {
    const questionElement = document.getElementById('question');
    const answersElement = document.getElementById('answers');
    const submitButton = document.getElementById('submit-button');
    const restartButton = document.getElementById('restart-button');

    questionElement.textContent = "Quiz Completed";
    answersElement.innerHTML = '';
    submitButton.style.display = 'none';
    restartButton.style.display = 'block';

    const resultElement = document.getElementById('result');
    resultElement.textContent = `Your score is ${score} out of ${quiz.length}`;
}

function restartQuiz() {
    currentQuestion = 0;
    score = 0;
    displayQuestion();
    document.getElementById('restart-button').style.display = 'none';
    document.getElementById('submit-button').style.display = 'block';
}

