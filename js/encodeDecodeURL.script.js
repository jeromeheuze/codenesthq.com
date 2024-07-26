// URL Encoder & URL Decoder
function encodeDecodeURL() {
    const input = document.getElementById('urlInput').value;
    try {
        if (input === encodeURIComponent(decodeURIComponent(input))) {
            // Input is not URL encoded, encode it
            document.getElementById('urlOutput').querySelector('span').textContent = encodeURIComponent(input);
        } else {
            // Input is URL encoded, decode it
            document.getElementById('urlOutput').querySelector('span').textContent = decodeURIComponent(input);
        }
    } catch (e) {
        // Input is not a valid URL encoding
        document.getElementById('urlOutput').querySelector('span').textContent = 'Invalid input for URL decoding';
    }
}