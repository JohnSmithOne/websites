const galleryItems = document.querySelectorAll('.galleryItem');
let currentIndex = 0;

// First image shown by default
galleryItems[currentIndex].classList.add('active');
galleryItems[currentIndex].style.zIndex = currentIndex + 1;
galleryItems[currentIndex].style.transform = `translateY(0) scale(1) rotate(${getRandomRotation()}deg)`;

document.getElementById('upButton').addEventListener('click', () => {
    if (currentIndex < galleryItems.length - 1) {
        currentIndex++;
        galleryItems[currentIndex].classList.add('active');
        galleryItems[currentIndex].style.zIndex = currentIndex + 1;
        galleryItems[currentIndex].style.transform = `translateY(0) scale(1) rotate(${getRandomRotation()}deg)`;
    }
});

document.getElementById('downButton').addEventListener('click', () => {
    if (currentIndex > 0) {
        galleryItems[currentIndex].classList.remove('active');
        currentIndex--;
    }
});

// Helper function to get random rotation between -10deg and +10deg
function getRandomRotation() {
    return Math.floor(Math.random() * 21) - 10; // -10 to +10 degrees
}