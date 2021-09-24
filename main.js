import './styles.scss'

var hamburgerBtn = document.querySelector('.navicon');
var hamburgerMenu = document.querySelector('.menu__hamburger');


hamburgerBtn.addEventListener('click', function() {

    var hamDisplay = hamburgerMenu.style.display;

    if (hamDisplay == 'none') {

        hamburgerMenu.style.display = 'flex';
        hamburgerMenu.style.height = '100vh';
    }

    else {
        hamburgerMenu.style.display = 'none';
        hamburgerMenu.style.height = '0vh';
    }
    
})