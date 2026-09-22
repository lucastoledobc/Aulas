export const questaoEnem = {
  id: "enem-2023-91",
  vestibular: "ENEM 2023",
  subtitulo: "Questão 91 (Amarelo)",
  enunciado: "UERJ 2023) Na tirinha de Mauricio de Sousa, os personagens Cebolinha e Cascão fazem uma brincadeira utilizando duas latas e um barbante. Ao perceberem que o som pode ser transmitido através do barbante, resolvem alterar o comprimento do barbante para ficar cada vez mais extenso. As demais condições permaneceram inalteradas durante a brincadeira.",
  imagem: {
    src: "https://via.placeholder.com/600x200", // Substitua pelo link real da imagem depois
    alt: "Imagem cebolinha e cascão",
    legenda: "SOUSA, M. Disponível em: www.monica.com.br. Acesso em: 2 out. 2012 (adaptado)."
  },
  pergunta: "Na prática, à medida que se aumenta o comprimento do barbante, ocorre a redução de qual característica da onda sonora?",
  dica: "Eles estão ficando mais longe um do outro. O que acontece com o som ao percorrer longas distâncias?",
  alternativas: [
    { id: "A", texto: "(A) Altura.", correta: false },
    { id: "B", texto: "(B) Período.", correta: false },
    { id: "C", texto: "(C) Amplitude.", correta: true },
    { id: "D", texto: "(D) Velocidade.", correta: false },
    { id: "E", texto: "(E) Comprimento de onda.", correta: false }
  ],
  resoluções: {
    curta: "Som é uma onda que vai ficando mais “fraca” com a distância, o que significa a amplitude. Uma pessoa de longe pode gritar para aumentar a amplitude e assim ser ouvida.\n\nGabarito: C) Amplitude.",
    completa: "Se eu gritar no seu ouvido o som vai ter uma grande amplitude, mas se eu sussurrar a amplitude vai ser bem menor...",
    videoHorizontal: "https://www.youtube.com/embed/--XQesl7YHw",
    videoVertical: "https://www.youtube.com/embed/vfm1cjSdwPc"
  }
};
// Mantendo o mesmo arquivo, apenas adicionamos uma nova variável no final:
export const questaoEnem92 = {
  id: "enem-2023-92",
  vestibular: "ENEM 2023",
  subtitulo: "Questão 92 (Amarelo)",
  enunciado: "Um ciclista move-se em uma pista retilínea com velocidade constante. Ele passa pelo quilômetro 10 às 14h e pelo quilômetro 70 às 16h. Determine a velocidade escalar média do ciclista nesse intervalo de tempo.",
  imagem: {
    src: "https://via.placeholder.com/600x200", // Link da imagem da Q92 se houver
    alt: "Gráfico de cinemática",
    legenda: "Dado adaptado para fins didáticos."
  },
  pergunta: "Qual foi a velocidade média desenvolvida pelo ciclista?",
  dica: "Velocidade média é a variação do espaço dividida pela variação do tempo ($v = \Delta s / \Delta t$).",
  alternativas: [
    { id: "A", texto: "(A) 20 km/h.", correta: false },
    { id: "B", texto: "(B) 30 km/h.", correta: true },
    { id: "C", texto: "(C) 40 km/h.", correta: false },
    { id: "D", texto: "(D) 50 km/h.", correta: false },
    { id: "E", texto: "(E) 60 km/h.", correta: false }
  ],
  resoluções: {
    curta: "A variação de espaço foi de $70 - 10 = 60 \text{ km}$. O tempo gasto foi de $16 - 14 = 2 \text{ h}$. Logo, $v = 60/2 = 30 \text{ km/h}$.\n\nGabarito: B) 30 km/h.",
    completa: "Para resolver essa questão de Cinemática Básica, usamos a definição de velocidade escalar média...\n\n$$\Delta s = 70 - 10 = 60 \text{ km}$$\n$$\Delta t = 16 - 14 = 2 \text{ h}$$",
    videoHorizontal: "https://www.youtube.com/embed/--XQesl7YHw", // Seus links de vídeo da Q92
    videoVertical: "https://www.youtube.com/embed/vfm1cjSdwPc"
  }
};