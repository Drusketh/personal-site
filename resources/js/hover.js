document.addEventListener('DOMContentLoaded', () => {
    const listItems = document.querySelectorAll('ul > li.relative');
    console.log('Hover script loaded, found items:', listItems.length);

    listItems.forEach(item => {
        const popup = item.querySelector('div.popup');
        let timer;

        // Show popup on hover
        item.addEventListener('mouseenter', () => {
            clearTimeout(timer);
            popup.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
            popup.classList.add('opacity-100', 'scale-100');
        });

        // Hide popup when leaving the item (with slight delay)
        item.addEventListener('mouseleave', () => {
            timer = setTimeout(() => {
                popup.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                popup.classList.remove('opacity-100', 'scale-100');
            }, 150);
        });

        // Keep popup visible when hovered
        popup.addEventListener('mouseenter', () => {
            clearTimeout(timer);
            popup.classList.remove('opacity-0', 'scale-95', 'pointer-events-none');
            popup.classList.add('opacity-100', 'scale-100');
        });

        // Hide popup when leaving popup area
        popup.addEventListener('mouseleave', () => {
            timer = setTimeout(() => {
                popup.classList.add('opacity-0', 'scale-95', 'pointer-events-none');
                popup.classList.remove('opacity-100', 'scale-100');
            }, 150);
        });
    });
});
