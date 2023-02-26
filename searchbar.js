const form = document.querySelector('form');
const input = form.querySelector('input[type="text"]');

form.addEventListener('submit', (event) => {
  event.preventDefault();
  const searchQuery = input.value.trim();
  if (searchQuery !== '') {
    const url = `https://www.example.com/search?q=${encodeURIComponent(searchQuery)}`;
    window.location.href = url;
  }
});
