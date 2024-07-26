// Text to Binary/Binary to Text
function convertTextBinary() {
    const input = document.getElementById('textBinaryInput').value;
    let output = '';
    if (input.match(/^[01\s]+$/)) {
        // Input is binary, convert to text
        output = input.split(' ').map(bin => String.fromCharCode(parseInt(bin, 2))).join('');
    } else {
        // Input is text, convert to binary
        output = input.split('').map(char => char.charCodeAt(0).toString(2)).join(' ');
    }
    document.getElementById('textBinaryOutput').querySelector('span').textContent = output;
}