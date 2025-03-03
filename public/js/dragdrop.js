document.addEventListener('DOMContentLoaded', function () {
    setupEventListeners(); 
    nextSection('start-screen'); 
});

document.querySelector('#enter-name button').addEventListener('click', function () {
    playerName = document.querySelector('#enter-name input').value.trim();
    console.log("Player Name: ", playerName);  
});

let currentSection = 'start-screen';
let level1Results = 0;
let level2Results = 0;
let playerName = '';

function nextSection(next) {
    if (currentSection) {
        document.getElementById(currentSection).style.display = 'none';
    }
    document.getElementById(next).style.display = 'block';
    currentSection = next;

    if (next === 'level1' || next === 'level2') {
        clearLevel(next);
        populateCategoriesAndItems(next);
        initializeDragDrop();
    }

    if (next === 'results') {
        displayResults(); 
    }
}


function setupEventListeners() {
    document.querySelectorAll('button[data-next]').forEach(button => {
        button.addEventListener('click', function () {
            const next = this.getAttribute('data-next');
            if (next === 'level1') {
                playerName = document.querySelector('#enter-name input').value.trim(); 
            }
            nextSection(next);
        });
    });

    const restartButtons = document.querySelectorAll('.restart-button');
    restartButtons.forEach(button => {
        button.addEventListener('click', function () {
            restartGame();
        });
    });
}

function clearLevel(levelId) {
    const categoryContainer = document.querySelector(`#${levelId} .category-container`);
    const itemContainer = document.querySelector(`#${levelId} .items-container`);
    categoryContainer.innerHTML = '';
    itemContainer.innerHTML = '';
}

function populateCategoriesAndItems(levelId) {
    let categories, items;
    if (levelId === 'level1') {
        categories = [
            { id: 'physical', name: 'Physical Changes', image: '../images/phychange.jpg' },
            { id: 'emotional', name: 'Emotional Changes', image: '../images/mentalch.jpg' }
        ];
        items = [
            { id: 'growth', name: 'Growth Spurts', category: 'physical', feedback: 'Growth spurts are a physical part of puberty.' },
            { id: 'selfImage', name: 'Self-Image Issues', category: 'emotional', feedback: 'Self-image can fluctuate significantly during puberty.' },
            { id: 'breast', name: 'Breast Development', category: 'physical', feedback: 'Breast development is a natural physical process during puberty.' },
            { id: 'hair', name: 'Body Hair', category: 'physical', feedback: 'The appearance of body hair is a normal aspect of puberty.' },
            { id: 'mood', name: 'Mood Swings', category: 'emotional', feedback: 'Mood swings can be intense and frequent during puberty.' },
            { id: 'menstruation', name: 'Menstruation', category: 'physical', feedback: 'Menstruation is a significant physical change during puberty.' },
            { id: 'sensitivity', name: 'Increased Sensitivity', category: 'emotional', feedback: 'Emotions may be more intense during this time.' },
            { id: 'acne', name: 'Acne and Skin Care', category: 'physical', feedback: 'Managing acne is crucial for skin health during puberty.' },
            { id: 'romantic', name: 'Interest in Romantic Relationships', category: 'emotional', feedback: 'New feelings towards others can develop during puberty.' },
            { id: 'independence', name: 'Desire for Independence', category: 'emotional', feedback: 'Seeking more independence is common in puberty.' }
        ];
    } else if (levelId === 'level2') {
        categories = [
            { id: 'safe', name: 'Safe to Share', image: '../images/safe.jpg' },
            { id: 'private', name: 'Keep Private', image: '../images/notsafe.jpg' }
        ];
        items = [
            { id: 'colors', name: 'Favorite Colors and Books', category: 'safe', feedback: 'Sharing favorite colors and books is generally safe.' },
            { id: 'financial', name: 'Family Financial Information', category: 'private', feedback: 'Family financial details should always be kept private.' },
            { id: 'games', name: 'Game Achievements and App High Scores', category: 'safe', feedback: 'Discussing game scores and achievements is safe.' },
            { id: 'address', name: 'Home Address and Current Location', category: 'private', feedback: 'Never share your home address or current location online.' },
            { id: 'school', name: 'School Name and Teacher’s Name', category: 'private', feedback: 'Keep your school and teacher’s information private.' },
            { id: 'opinions', name: 'Opinions on Music and Movies', category: 'safe', feedback: 'It is safe to share your opinions on general topics.' },
            { id: 'contact', name: 'Phone Numbers and Personal Emails', category: 'private', feedback: 'Personal contact information should remain confidential.' },
            { id: 'vacation', name: 'Vacation Plans and Away Times', category: 'private', feedback: 'Avoid sharing when your house will be empty.' }
        ];
    }

    const categoryContainer = document.querySelector(`#${levelId} .category-container`);
    const itemContainer = document.querySelector(`#${levelId} .items-container`);

    categories.forEach(cat => {
        let div = document.createElement('div');
        div.className = 'category';
        div.dataset.category = cat.id;
        div.innerHTML = `<img src="${cat.image}" alt="${cat.name}" class="category-image"><span>${cat.name}</span>`;
        categoryContainer.appendChild(div);
    });

    items.forEach(item => {
        let div = document.createElement('div');
        div.className = 'item';
        div.id = item.id;
        div.textContent = item.name;
        div.setAttribute('draggable', 'true');
        div.dataset.category = item.category;
        itemContainer.appendChild(div);
    });
}

// Initialize drag and drop functionality
function initializeDragDrop() {
    const items = document.querySelectorAll('.item');
    const categories = document.querySelectorAll('.category');

    items.forEach(item => {
        item.addEventListener('dragstart', e => {
            e.dataTransfer.setData('text/plain', e.target.id);
        });
    });

    categories.forEach(category => {
        category.addEventListener('dragover', e => e.preventDefault());
        category.addEventListener('drop', e => handleDrop(e, category));
    });
}

function handleDrop(e, category) {
    e.preventDefault();
    const itemId = e.dataTransfer.getData('text');
    const item = document.getElementById(itemId);
    const feedbackPanel = document.querySelector('.feedback-panel');

    if (item.dataset.category === category.dataset.category) {
        category.appendChild(item);
        feedbackPanel.textContent = `${playerName}, you got this, well done!`;
        feedbackPanel.style.color = 'green';
        updateResults(true, category.parentNode.parentNode.id);
    } else {
        feedbackPanel.textContent = `${playerName}, Oops, wrong answer. Try again!`;
        feedbackPanel.style.color = 'red';
        updateResults(false, category.parentNode.parentNode.id);
    }
}

function updateResults(isCorrect, levelId) {
    if (isCorrect) {
        if (levelId === 'level1') {
            level1Results++;
        } else if (levelId === 'level2') {
            level2Results++;
        }
    }
}

function displayResults() {
    const resultsDisplay = document.getElementById('results-display');
    resultsDisplay.textContent = `Level 1 Correct Placements: ${level1Results}, Level 2 Correct Placements: ${level2Results}`;
}

function restartGame() {
    level1Results = 0;
    level2Results = 0;
    nextSection('start-screen');
    document.getElementById('results-display').textContent = '';
}
