// Reading Time Calculator
function calculateReadingTime() {
    const text = document.getElementById('readingTimeInput').value;
    const wordsPerMinute = 200; // Average case.
    let result = '';
    if (text.length > 0) {
        const words = text.trim().split(/\s+/).length;
        console.log("words", words)
        const timeToRead = words / wordsPerMinute;
        result = `${Math.ceil(timeToRead)} minutes`;
    } else {
        result = '0 minutes';
    }
    document.getElementById('readingTimeOutput').querySelector('span').textContent = result;
}