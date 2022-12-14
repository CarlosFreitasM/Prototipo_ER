NOTA IMPORTANTE: CADA VEZ QUE FOR INSTALADO ALGO PARA O VS CODE É PRECISO FECHAR E ABRIR

1 - Usar o IDE Visual Studio Code
2 - Instalar o xampp para obter o PHP caso não tenham e nas variaveis de ambiente, podem seguir este pequeno tutorial para fazer o path:
	https://maheshwaghmare.com/windows/blog/environment-variables-path/#set-environment-variable. 
3 - Instalar o composer,
    3.1 - No installer, onde diz para fazer o add PHP Path aceitar e o resto pode ser passado à frente, as vezes ele pode não pedir pelo PHP Path, e é normal
    3.2 - Depois de re-abrir o vs code fazer composer global require "laravel/installer"
4 - Instalar o node.js com a versão LST
5 - Instalar o Git bash, podem passar tudo clicando no next ao instalá-lo, depois de instalar fechar e abrir o vs code
6 - Abrir um novo terminal no VS Code onde o terminal é Git Bash
7 - Dentro do Visual Studio code instalar as seguintes extensões:
    7.1- Node Extension Pack
    7.2- PHP Extension Pack
8 - No terminal git bash e fazer cd ER_Prototipo/Backend e depois fazer: composer install
   8.1 - Esperar até acabar e depois fazer npm install
   8.2 - npm run build, só por percaução
6 - Criar o ficheiro na pasta Backend nomeado: .env
7 - Copiar o que está no ficheiro .env.example para o .env 
8 - No ficheiro .env devem colocar a DB_Password como:
Malha1@+
9 - Fazer php artisan serve, no terminal git bash
10 - Para fazer o refresh automatico, abrem outro terminal como Git Bash e fazem 
cd ER_Prototipo/Backend
Seguido de:
npm run dev

Boa sorte!