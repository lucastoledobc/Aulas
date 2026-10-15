# Git

Documentação: https://git-scm.com/doc

git init -> iniciar
git add <nome>   -> prepara o arquivo
git add .   -> prepara todos os arquivos
git commit -m <msg> -> comita com o nome "msg".
git commit -a -m <msg> -> add +commit
git log -> mostra informações dos commits
git status -> status das branchs e commit
git diff -> mostra as mudanças desde o último commit
git restore <name> -> desfaz

git branch <nome> -> criar branch
git checkout <nome> -> muda para a branch especificada
git branch -> mostras as branchs e a atual
git merge <nome> -> mescla essa branch com a branch “nome”
git branch -d <nome> -> deleta
git branch -m <novo_nome>   -> renomeia

git remote add <nome’> <link> -> adiciona o repositório remoto. 
<nome’> - escolha o nome local do repositório remoto
git push -> upa tudo
git push <nome’> <branch’> -> upa a branch’ para o hub (se branch’ == branch”, atualiza no github)
git pull -> baixa tudo
git pull <nome’> <branch’> -> upa a branch
git fetch -> atualiza o sistema com o que ta online
git push <nome’> --delete <nome”> - deleta branch remoto
git remote rename <nome_antigo> <nome_novo>
git remote remove <nome’>


# GitHub

Documentação: https://docs.github.com/en