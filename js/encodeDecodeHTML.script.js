// HTML Encoder/Decoder
function encodeDecodeHTML() {
    const textArea = document.createElement('textarea');
    const input = document.getElementById('htmlInput').value;
    let output = '';
    if (input.indexOf('&') === -1) {
        // Input is not HTML encoded
        textArea.textContent = input;
        output = textArea.innerHTML;
    } else {
        // Input is HTML encoded
        textArea.innerHTML = input;
        output = textArea.textContent;
    }
    document.getElementById('htmlOutput').querySelector('span').textContent = output;
}