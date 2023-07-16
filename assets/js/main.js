/*
 * Copyright (c) 09/07/23, 20:32.
 * Created By WebZow Soluções Digitais.
 * Site: https://webzow.com
 * Discord: https://discord.gg/TgCccsKSYu
 */

const nomes = [
    "Alice",
    "Arthur",
    "Miguel",
    "Sophia",
    "Bernardo",
    "Valentina",
    "Heitor",
    "Laura",
    "Davi",
    "Isabella",
    "Lorenzo",
    "Manuela",
    "Théo",
    "Júlia",
    "Pedro",
    "Heloísa",
    "Gabriel",
    "Luiza",
    "Enzo",
    "Maria",
    "Matheus",
    "Lívia",
    "Lucas",
    "Giovanna",
    "Benjamin",
    "Beatriz",
    "Nicolas",
    "Mariana",
    "Guilherme",
    "Rafaela",
    "Rafael",
    "Camila",
    "Samuel",
    "Isadora",
    "João",
    "Lara",
    "Eduardo",
    "Ana",
    "Gustavo",
    "Letícia",
    "Antônio",
    "Melissa",
    "Felipe",
    "Yasmin",
    "João Pedro",
    "Maria Eduarda",
    "Cauã",
    "Cecília",
    "Vinícius",
    "Emanuelly",
    "João Lucas",
    "Esther",
    "Daniel",
    "Eloá",
    "Pietro",
    "Lavínia",
    "Leonardo",
    "Sarah",
    "Henrique",
    "Isabelly",
    "Theodoro",
    "Vitória",
    "Murilo",
    "Alicia",
    "Emanuel",
    "Isis",
    "Bryan",
    "Maria Cecília",
    "Lucca",
    "Alícia",
    "Anthony",
    "Stella",
    "Pedro Henrique",
    "Gabriela",
    "Enzo Gabriel",
    "Marina",
    "João Miguel",
    "Agatha",
    "Pietra",
    "Isabel",
    "João Guilherme",
    "Rebeca",
    "Davi Lucca",
    "Clara",
    "Vitor",
    "Ana Clara",
    "Yuri",
    "Bianca",
    "Caio",
    "Laura Beatriz",
    "Davi Lucas",
    "Maria Júlia",
    "Luiz Felipe",
    "Laís",
    "Raul",
    "Maria Luiza",
    "Augusto",
    "Larissa",
    "André",
    "Fernanda",
    "Bruno",
    "Nicole",
    "Felipe",
    "Carolina",
    "Luiz Miguel",
    "Amanda",
    "Igor",
    "Ana Júlia",
    "Fernando",
    "Elisa",
    "Diego",
    "Luna",
    "Luiz Henrique",
    "Emily",
    "Vicente",
    "Bárbara",
    "Caleb",
    "Catarina",
    "Ryan",
    "Gabrielly",
    "Luiz Gustavo",
    "Sophie",
    "Otávio",
    "Elis",
    "Erick",
    "Ana Luiza",
    "Luiz Otávio",
    "Maitê",
    "Davi Miguel",
    "Alana",
    "Ruan",
    "Luana",
    "Enrico",
    "Mirella",
    "Raquel",
    "Carlos",
    "Mariano",
    "Sofia",
    "Victor",
    "Helena",
    "Isaac",
    "Luana",
    "Levi",
    "Gabriela",
    "Ricardo",
    "Cristina",
    "Ricardo",
    "Jéssica",
    "Luan",
    "Bianca",
    "Eduarda",
    "Renan",
    "Fernanda",
    "Rafael",
    "Lorena",
    "Thiago",
    "Carolina",
    "Afonso",
    "Gabriela",
    "André",
    "Natalia",
    "Rafael",
    "Elisa",
    "Eduardo",
    "Carla",
    "Marcelo",
    "Sara",
    "Alexandre",
    "Vanessa",
    "Adriano",
    "Andressa",
    "Marcelo",
    "Luciana",
    "Rodrigo",
    "Daniela",
    "Fábio",
    "Tatiana",
    "Renato",
    "Carolina",
    "Paulo",
    "Juliana",
    "Maurício",
    "Aline",
    "Leonardo",
    "Patrícia",
    "Renan",
    "Letícia",
    "Henrique",
    "Renata",
    "Vinicius",
    "Amanda",
    "Roberto",
    "Cláudia",
    "José",
    "Débora",
    "Alex",
    "Carla",
    "Júlio",
    "Bárbara",
    "Hugo",
    "Carolina",
    "Marcos",
    "Patrícia",
    "Raphael",
    "Fernanda",
    "Gustavo",
    "Tatiana",
    "Rodrigo",
    "Mariana",
    "Sérgio",
    "Ana",
    "Thales",
    "Gisele",
    "Lucas",
    "Marcela",
    "Rafael",
    "Larissa",
    "Luciano",
    "Priscila",
    "Fernando",
    "Laura",
    "Luís",
    "Sandra",
    "Rui",
    "Carolina",
    "Ricardo",
    "Isabel",
    "Miguel",
    "Diana",
    "Alexandre",
    "Flávia",
    "Rafael",
    "Bruna",
    "João",
    "Natália",
    "Caio",
    "Débora",
    "Igor",
    "Amanda",
    "Roberto",
    "Carolina",
    "Samuel",
    "Marina",
    "Ricardo",
    "Vanessa",
    "Tiago",
    "Carla",
    "Eduardo",
    "Júlia",
    "Renato",
    "Patrícia",
    "César",
    "Renata",
    "Vitor",
    "Daniela",
    "Marcos",
    "Camila",
    "Felipe",
    "Mariana",
    "Bruno",
    "Gabriela",
    "Pedro",
    "Larissa",
    "Gustavo",
    "Priscila",
    "Francisco",
    "Laura",
    "João",
    "Isabel",
    "Rui",
    "Diana",
    "André",
    "Flávia",
    "José",
    "Bruna",
    "Thiago",
    "Natália",
    "Rodrigo",
    "Débora",
    "Luís",
    "Amanda",
    "Fernando",
    "Carolina",
    "Maurício",
    "Marina",
    "Thales",
    "Carla",
    "Sérgio",
    "Patrícia",
    "Hugo",
    "Mariana",
    "Raphael",
    "Priscila",
    "Luciano",
    "Laura",
    "Vinicius",
    "Isabel",
    "José",
    "Gabriela",
    "Leonardo",
    "Larissa",
    "Marcos",
    "Priscila",
    "Alexandre",
    "Débora",
    "Roberto",
    "Carolina",
    "Gustavo",
    "Mariana",
    "Rafael",
    "Patrícia",
    "Luís",
    "Isabel",
    "Alex",
    "Gabriela",
    "Paulo",
    "Larissa",
    "Renato",
    "Priscila",
    "Rodrigo",
    "Laura",
    "Henrique",
    "Carolina",
    "Ricardo",
    "Mariana",
    "Fábio",
    "Patrícia",
    "Renan",
    "Isabel",
    "José",
    "Gabriela",
    "Rui",
    "Larissa",
    "Hugo",
    "Priscila",
    "Marcos",
    "Laura",
    "Thiago",
    "Carolina",
    "André",
    "Mariana",
    "Ricardo",
    "Patrícia",
    "Renato",
    "Isabel",
    "Roberto",
    "Gabriela",
    "Francisco",
    "Larissa",
    "José",
    "Priscila",
    "Vitor",
];

const jogos = ["DOUBLE", "MINES", "CRASH", "ROLETA", "SLOTS"];

/*
function geradoraGanhadores() {
    const carouselTrack = document.querySelector(".carousel-track");

    let jogo = jogos[Math.floor(Math.random() * jogos.length)];
    let usuario = nomes[Math.floor(Math.random() * nomes.length)];
    let valor = (Math.random() * (200 - 2) + 2).toFixed(0);

    const div = document.createElement("div");
    div.classList.add("carousel-item");

    const imgPix = document.createElement("img");
    imgPix.classList.add("img-pix");
    imgPix.src = "./assets/img/pix.svg";

    const usuarioGanhador = document.createTextNode(usuario + " ");

    const spanRecebe = document.createElement("span");
    spanRecebe.classList.add("recebe");
    spanRecebe.textContent = "recebou";

    const spanProfite = document.createElement("span");
    spanProfite.classList.add("profite");
    spanProfite.textContent = `R$ ${valor} do ${jogo}`;

    div.appendChild(imgPix);
    div.appendChild(usuarioGanhador);
    div.appendChild(spanRecebe);
    div.appendChild(spanProfite);

    carouselTrack.appendChild(div);
}

for (let x = 0; x < 20; x++) {
    geradoraGanhadores();
}*/

function login(event) {
    event.preventDefault(); // Impede o envio do formulário padrão

    var email = document.getElementById('email').value;

    // Verifica se o e-mail existe no arquivo de texto (pode ser substituído por qualquer lógica de verificação desejada)
    var url = 'controllers/login.php'; // Atualize o caminho para o arquivo PHP correto

    var formData = new FormData();
    formData.append('email', email);

    fetch(url, {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            if (data === 'success') {
                // Login bem-sucedido - redirecione para a página principal ou faça o que desejar
                //alert('Login bem-sucedido!');
                var botaologin = document.getElementById('botaologin');
                botaologin.innerHTML = 'Aguarde. . .';
                setTimeout(redirectToPanel, 1000); // Atraso de 1 segundo (1000 milissegundos)

            } else {
                // E-mail não encontrado - exiba mensagem de erro
                var errorMessage = document.getElementById('error-message');
                errorMessage.style.display = 'block';
                errorMessage.innerHTML = 'E-mail não encontrado.';
            }
        })
        .catch(error => {
            console.error('Erro:', error);
        });

    return false;
}

function redirectToPanel() {
    window.location.href = 'painel'; // Atualize o caminho para a página painel.php
}
