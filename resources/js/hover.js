const dropdowns = document.querySelectorAll('.dropdown-content');
const arrows = document.querySelectorAll('.arrow');

const toggleLang = document.getElementById('toggle-lang');
const toggleCad = document.getElementById('toggle-cad');
let openLang = false;
let openCad = false;

toggleLang.addEventListener('click', () => {
    openLang = !openLang;

	arrows.forEach(arrow => {
		if (openLang && arrow.classList.contains('lang')) {
			arrow.classList.remove('-rotate-90');
		} 
		else if (!openLang && arrow.classList.contains('lang')) {
			arrow.classList.add('-rotate-90');
		}
      	else {}
  	});

    dropdowns.forEach(dropdown => {
        if (openLang && dropdown.classList.contains('lang')) {
            dropdown.classList.add('opacity-100', 'max-h-96', 'pointer-events-auto', 'p-4', 'm-4', 'border');
            dropdown.classList.remove('opacity-0', 'max-h-0', 'pointer-events-none', 'p-0', 'm-0');
        } 
        else if (!openLang && dropdown.classList.contains('lang')) {
            dropdown.classList.add('opacity-0', 'max-h-0', 'pointer-events-none', 'p-0', 'm-0');
            dropdown.classList.remove('opacity-100', 'max-h-96', 'pointer-events-auto', 'p-4', 'm-4', 'border');
        }
        else {}
    });

    toggleLang.textContent = openLang ? 'Collapse All' : 'Expand All';
});

toggleCad.addEventListener('click', () => {
  	openCad = !openCad;

	arrows.forEach(arrow => {
		if (openCad && arrow.classList.contains('cad')) {
			arrow.classList.remove('-rotate-90');
		} 
		else if (!openCad && arrow.classList.contains('cad')) {
			arrow.classList.add('-rotate-90');
		}
      	else {}
  	});

  	dropdowns.forEach(dropdown => {
		if (openCad && dropdown.classList.contains('cad')) {
			dropdown.classList.add('opacity-100', 'max-h-96', 'pointer-events-auto', 'p-4', 'm-4', 'border');
			dropdown.classList.remove('opacity-0', 'max-h-0', 'pointer-events-none', 'p-0', 'm-0');
		} 
		else if (!openCad && dropdown.classList.contains('cad')) {
			dropdown.classList.add('opacity-0', 'max-h-0', 'pointer-events-none', 'p-0', 'm-0');
			dropdown.classList.remove('opacity-100', 'max-h-96', 'pointer-events-auto', 'p-4', 'm-4', 'border');
		}
      	else {}
  	});

  	toggleCad.textContent = openCad ? 'Collapse All' : 'Expand All';
});

document.querySelectorAll('.dropdown-item').forEach(item => {
	item.addEventListener('click', () => {
		const dropdown = item.querySelector('.dropdown-content');
		const arrow = item.querySelector('.arrow');

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