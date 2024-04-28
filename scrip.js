document.getElementById('signup-form').addEventListener('submit', function(event){
    event.preventDefault();
    const fullName = document.getElementById('full-name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    console.log('Cadastro realizado:', fullName, phone, email, password);
    // Adicionar o código para processar o cadastro
});

document.addEventListener('DOMContentLoaded', function() {
    const togglePasswordButtons = document.querySelectorAll('.toggle-password');

    togglePasswordButtons.forEach(button => {
        button.addEventListener('click', function() {
            const passwordInput = button.previousElementSibling; 
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                button.innerHTML = '<i class="bi bi-eye"></i>';
            } else {
                passwordInput.type = "password";
                button.innerHTML = '<i class="bi bi-eye-slash"></i>';
            }
        });
    });
});
