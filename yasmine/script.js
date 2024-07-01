// script.js

// URL of the image to use as a snowflake
const snowflakeImageURL = 'yasmine.png';

// Number of snowflakes
const numberOfSnowflakes = 50;

// Function to generate random integer between min and max
function randomIntFromRange(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
}

// Function to create a snowflake
function createSnowflake() {
    const snowflake = document.createElement('div');
    snowflake.classList.add('snowflake');
    snowflake.style.left = `${randomIntFromRange(0, window.innerWidth)}px`;
    snowflake.style.animationDuration = `${randomIntFromRange(5, 15)}s`;
    snowflake.style.backgroundImage = `url(${snowflakeImageURL})`;

    document.querySelector('.snow-container').appendChild(snowflake);

    // Remove the snowflake after animation ends
    snowflake.addEventListener('animationend', () => {
        snowflake.remove();
    });
}

// Function to generate snowflakes
function generateSnowflakes() {
    for (let i = 0; i < numberOfSnowflakes; i++) {
        createSnowflake();
    }
}

// Event listener for the start button
document.getElementById('startButton').addEventListener('click', () => {
    // Generate initial snowflakes
    generateSnowflakes();

    // Generate new snowflakes periodically
    setInterval(createSnowflake, 1000);

    document.getElementById('backgroundMusic').play();

    // Optionally, hide the button after clicking
    document.getElementById('startButton').style.display = 'none';
});
