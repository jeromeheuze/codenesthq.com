// HEX to RGB Converter
function convertHexToRgb() {
    const hexInput = document.getElementById('hexInput').value;
    const isValidHex = /^#?([0-9A-Fa-f]{3}){1,2}$/.test(hexInput);
    if (isValidHex) {
        let hex = hexInput.replace(/^#/, '');
        if (hex.length === 3) {
            hex = Array.from(hex).map(h => h + h).join('');
        }
        const bigint = parseInt(hex, 16);
        const r = (bigint >> 16) & 255;
        const g = (bigint >> 8) & 255;
        const b = bigint & 255;
        const rgb = `RGB: ${r}, ${g}, ${b}`;
        document.getElementById('rgbOutput').textContent = rgb;
        document.getElementById('colorPicker').value = '#' + hex;
    } else {
        document.getElementById('rgbOutput').textContent = 'Invalid HEX Value';
    }
}
// Update Color Inputs and Box when Color Picker changes
function updateColorInputs() {
    const color = document.getElementById('colorPicker').value;
    document.getElementById('rgbInput').value = hexToRgb(color);
    document.getElementById('hexInput').value = color;
}

// Convert HEX to RGB String
function hexToRgb(hex) {
    const bigint = parseInt(hex.replace(/^#/, ''), 16);
    const r = (bigint >> 16) & 255;
    const g = (bigint >> 8) & 255;
    const b = bigint & 255;
    return `${r}, ${g}, ${b}`;
}