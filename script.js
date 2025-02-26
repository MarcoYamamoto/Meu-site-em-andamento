// Verifica se há preferência de tema salva no localStorage
if (localStorage.getItem('darkMode') === 'true') {
    document.body.classList.add('dark-mode');
}

// Botão de alternância de tema
const themeToggleButton = document.querySelector('.theme-toggle'); // Certifique-se de que o botão tenha a classe 'theme-toggle'

// Função para alternar o tema
themeToggleButton.addEventListener('click', () => {
    document.body.classList.toggle('dark-mode');

    // Salva a preferência do tema no localStorage
    if (document.body.classList.contains('dark-mode')) {
        localStorage.setItem('darkMode', 'true');
    } else {
        localStorage.setItem('darkMode', 'false');
    }
});
