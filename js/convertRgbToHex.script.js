// RGB to HEX Converter
function convertRgbToHex() {
    const rgbInput = document.getElementById('rgbInput').value;
    const rgbArray = rgbInput.split(',').map(num => parseInt(num.trim()));
    if (rgbArray.length === 3 && rgbArray.every(num => num >= 0 && num <= 255)) {
        const hex = '#' + rgbArray.map(num => num.toString(16).padStart(2, '0')).join('').toUpperCase();
        document.getElementById('hexOutput').textContent = hex;
        document.getElementById('colorPicker').value = hex;
    } else {
        document.getElementById('hexOutput').textContent = 'Invalid RGB Value';
    }
}
// Update Color Inputs and Box when Color Picker changes
function updateColorInputs() {
    const color = document.getElementById('colorPicker').value;
    document.getElementById('rgbInput').value = hexToRgb(color);
    document.getElementById('hexInput').value = color;
}