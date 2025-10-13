document.querySelectorAll('.dropdown-item').forEach(item => {
  item.addEventListener('click', () => {
    const dropdown = item.querySelector('.dropdown-content');
    const arrow = item.querySelector('.arrow');
    console.log(dropdown);

    // Toggle open/close
    if (dropdown.classList.contains('opacity-0')) {
        arrow.classList.remove('-rotate-90');

        dropdown.classList.add('opacity-100', 'max-h-96', 'pointer-events-auto', 'p-4', 'm-4', 'border');
        dropdown.classList.remove('opacity-0', 'max-h-0', 'pointer-events-none', 'p-0', 'm-0');
    } else {
        arrow.classList.add('-rotate-90');

        dropdown.classList.add('opacity-0', 'max-h-0', 'pointer-events-none', 'p-0', 'm-0');
        dropdown.classList.remove('opacity-100', 'max-h-96', 'pointer-events-auto', 'p-4', 'm-4', 'border');
    }
  });
});