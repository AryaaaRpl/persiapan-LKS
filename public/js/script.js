const navButton = document.getElementById('home-tab2');
const navButton1 = document.getElementById('profile-tab2');
const navButton2 = document.getElementById('contact-tab2');
const navButton3 = document.getElementById('detail-tab2');

navButton.addEventListener('click', function(){
    navButton.classList.add('active');
    navButton1.classList.remove('active');
    navButton2.classList.remove('active');
    navButton3.classList.remove('active');
});
navButton1.addEventListener('click', function(){
    navButton1.classList.add('active');
    navButton.classList.remove('active');
    navButton2.classList.remove('active');
    navButton3.classList.remove('active');
});
navButton2.addEventListener('click', function(){
    navButton2.classList.add('active');
    navButton1.classList.remove('active');
    navButton.classList.remove('active');
    navButton3.classList.remove('active');
});
navButton3.addEventListener('click', function(){
    navButton3.classList.add('active');
    navButton1.classList.remove('active');
    navButton.classList.remove('active');
    navButton2.classList.remove('active');
});



