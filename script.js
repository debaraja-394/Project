<<<<<<< HEAD
=======
function dismissButton() {
    var dismissibleButton = document.getElementById("dismissibleButton");
    dismissibleButton.style.display = "none";
}
>>>>>>> origin/main
const wrapper = document.querySelector('.wrapper');
const signUpLink = document.querySelector('.signUp-link');
const signInLink = document.querySelector('.signIn-link');

signUpLink.addEventListener('click', () => {
    wrapper.classList.add('animate-signIn');
    wrapper.classList.remove('animate-signUp');
});

signInLink.addEventListener('click', () => {
    wrapper.classList.add('animate-signUp');
    wrapper.classList.remove('animate-signIn');
<<<<<<< HEAD
});
=======
});
>>>>>>> origin/main
