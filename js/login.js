//notification
function showToast(message, type = 'error') {
    const toast = document.getElementById('toast');

    const icons = {
        error: '❌'
    };

    toast.innerHTML = `
        <span class="toast-icon">${icons[type]}</span>
        <span>${message}</span>
    `;

    toast.className = `toast ${type}`;

    setTimeout(() => {
        toast.classList.add('show');
    }, 100);

    setTimeout(() => {
        toast.classList.remove('show');
        toast.classList.add('hide');
    }, 4000);

    setTimeout(() => {
        toast.classList.remove('hide');
    }, 4500);
}

//toogle password
document.addEventListener('DOMContentLoaded', function () {
    function tooglePassword() {
        const passwordInput = document.getElementById('password');
        const toogleText = document.querySelector('.toogle-password');
        if (!passwordInput || !toogleText) return;
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toogleText.textContent = 'Hide';
        } else {
            passwordInput.type = 'password';
            toogleText.textContent = 'Show';
        }
    }

    //animasi login BTN
    const loginForm = document.getElementById('loginForm');
    const loginBtn = document.getElementById('loginBtn');
    const btnText = document.querySelector('.btn-text');
    const spinner = document.querySelector('.spinner');
    const toggleBtn = document.querySelector('.toogle-password');

    if (toggleBtn) toggleBtn.addEventListener('click', tooglePassword);

    if (loginForm) {
        loginForm.addEventListener('submit', function (e) {

            if (btnText) btnText.textContent = 'Loading...';
            if (spinner) spinner.style.display = 'block';

            setTimeout(() => {
                if (loginBtn) loginBtn.disabled = true;
            }, 0);
        });
    }
});