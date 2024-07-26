// Lorem Ipsum Generator
function generateLoremIpsum() {
    const paragraphs = parseInt(document.getElementById('loremParagraphs').value) || 1;
    const wordsCount = parseInt(document.getElementById('loremWords').value) || 50;
    const loremIpsumText = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
    const loremWords = loremIpsumText.split(' ');

    let output = '';
    for (let i = 0; i < paragraphs; i++) {
        let paragraph = '';
        for (let w = 0; w < wordsCount; w++) {
            paragraph += loremWords[w % loremWords.length] + ' ';
        }
        output += `<p>${paragraph.trim()}</p>`;
    }
    document.getElementById('loremOutput').innerHTML = output;
}