# projeto-integrador
# RÉLOU UORDI

- Clonando um projeto
git init
git clone https://bitbucket.org/name/project
git remote add origin https://bitbucket.org/name/project


- Criando a mensagem do commit
git commit -m "alterações em source.js"

- Adicionando repositório criado em um projeto existente
git init
git remote add origin https://github.com/renandamarate/repository-name.git


- Adicionando todas modificações no próximo commit
git all -A //Adiciona arquivos novos, modificados e removidos
git add .  //Adiciona arquivos novos e modificados
git add -u //Adiciona arquivos modificados e removidos

- Configuração inicial 
git config --global user.email "seu_email@provider.com"
git config --global user.name "nome_usuario"

- Criando nova Branch "Developer"
git checkout -b developer
git push -u origin developer

- Exibindo todas branchs
git branch

- Trocando branch master para developer
git fetch
git checkout developer
git pull origin developer

- Fazendo push para servidor
git push -u origin --all
git push -u origin --tags
