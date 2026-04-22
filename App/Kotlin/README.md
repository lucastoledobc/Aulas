# Kotlin

Desenvolvido por JetBrains, baseado em Java.  

Documentação: https://kotlinlang.org/docs/home.html


kotlin -> como a tela comporta (lógica)
xml -> como a tela parece (design)



=> Pastas:

-> Res:

mipmap/ → APENAS para ÍCONES DO APP

    Ícone na tela inicial do celular
    Ícone no gaveta de apps
    Ícone nas configurações do app
    NUNCA para imagens dentro do app

* por padrão, há um arquivo que chama a imagem em "drawable


drawable/ → PARA TODAS OUTRAS IMAGENS

    Imagens dentro do app
    Backgrounds, botões, ilustrações
    Fotos de conteúdo
    Tudo que NÃO é ícone do app



=> Imports:

androidx.activity.enableEdgeToEdge - o app usar tela completa (atrás da câmera/notch)

androidx.appcompat.app.AppCompatActivity - A classe base para todas as telas do seu app

android.content.Intent - Objeto para navegar entre telas ou abrir outros apps

androidx.core.view.ViewCompat
androidx.core.view.WindowInsetsCompat - Controla como o app lida com barras do sistema (notificação, navegação)

android.os.Bundle - "Pacote" de dados para salvar/restaurar estado da tela

