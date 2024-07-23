
const wrapper = document.querySelector('.wrapper');
const registerLink = document.querySelector('.reg');
const loginLink = document.querySelector('.login-link');
registerLink.onclick = () => {
    wrapper.classList.add('active');
}
loginLink.onclick = () => {
    wrapper.classList.remove('active');
}