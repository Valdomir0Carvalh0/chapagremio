// Objeto para armazenar os votos
var votos = {
    chapa01: 0,
    chapa02: 0,
    chapa03: 0,
    chapa04: 0
};

// Função para registrar o voto
function registrarVoto(chapaSelecionada) {
    // Verifica se a chapa selecionada é válida
    if (votos.hasOwnProperty(chapaSelecionada)) {
        // Incrementa o contador de votos para a chapa selecionada
        votos[chapaSelecionada]++;
        // Retorna true para indicar que o voto foi registrado com sucesso
        return true;
    } else {
        // Retorna false se a chapa selecionada for inválida
        return false;
    }
}

// Exemplo de uso da função registrarVoto
registrarVoto('chapa01'); // Voto para a Chapa 01
registrarVoto('chapa02'); // Voto para a Chapa 02
registrarVoto('chapa01'); // Segundo voto para a Chapa 01

// Exibindo os votos registrados
console.log(votos);
