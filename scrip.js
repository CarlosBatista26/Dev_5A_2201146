document.getElementById('signup-form').addEventListener('submit', function(event){
    event.preventDefault();
    const fullName = document.getElementById('full-name').value;
    const phone = document.getElementById('phone').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    console.log('Cadastro realizado:', fullName, phone, email, password);
    // Aqui você pode adicionar o código para processar o cadastro
});



