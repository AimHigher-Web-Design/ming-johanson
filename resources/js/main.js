var mobileMenu = function() {
	if (document.getElementsByClassName('nav-main active').length < 1) {
		document.getElementById('nav-main').classList.add('active')
	} else {
		document.getElementById('nav-main').classList.remove('active')
	}
}

// window.onscroll = function() {
//         if(document.body.scrollTop > 20) {
//             document.getElementById('root').classList.add('scrolled');
//         }
//         else {
//             document.getElementById('root').classList.remove('scrolled');
//         };
//     };

document
	.querySelectorAll(
		'.wpforms-field-email input, .wpforms-field-text input, .wpforms-field-textarea textarea',
	)
	.forEach(i => {
		i.addEventListener('input', e => {
			console.log(e.target.value)

			if (e.target.value !== '') {
				e.target.parentElement.querySelector('label').classList.add('filled')
			}
		})
	})
