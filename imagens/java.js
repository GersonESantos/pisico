document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    if (name === "" || email === "") {
        document.getElementById('form-message').textContent = "Por favor, preencha os campos obrigatórios.";
        return;
    }

    document.getElementById('form-message').textContent = "Obrigado por entrar em contato, retornaremos em breve!";
    this.reset();
});
