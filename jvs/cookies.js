const cookieContainer = document.querySelector('.cookie-container');
const cookieBtn = document.querySelector('.cookie-btn');

setTimeout( () => {
    if (!localStorage.getItem('cookieBannerDispayed')){
        cookieContainer.classList.add('active');
    }
    
}, 1000);


cookieBtn.addEventListener('click', () => {
    cookieContainer.classList.remove('active');
    localStorage.setItem('cookieBannerDisplayed', 'true')
});






