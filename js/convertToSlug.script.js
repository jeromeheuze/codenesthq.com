// Text to Slug
function convertToSlug() {
    const input = document.getElementById('slugInput').value;
    const slug = input.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/^-+|-+$/g, '');
    document.getElementById('slugOutput').querySelector('span').textContent = slug;
}