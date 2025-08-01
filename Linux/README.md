# Linux

Criado em C por Linus

DOcumentação: https://docs.kernel.org/

## Básico

```
bash –> terminal
usuario: caminho$ ← (então) →  Lumi:~$
~ significa /home/Lumi/
$ -> usuario normal
# -> root
clear ou ctrl+L → limpa
pwd –> mostra o caminho
-h –> deixa mais humano
ctrl+c –> interrompe a ação
```

para ajudas:
comando --help  –> ajuda
man comando  –> manual

```
cd –> entrar na pasta
cd local
cd Documentos –> entra na pasta Documentos
cd /etc/Teste –> entra na pasta Teste dentro de etc
cd .. –> volta um diretório

ls -> lista, descreve o que tem na pasta
ls local
ls Pasta1 –> mostra o que tem em Pasta1 de onde vc ta
ls /etc/Documentos –> lista o que tem em Documentos que está na pasta etc
ls /etc/*.txt –> lista arquivos txt da pasta etc
ls *x* –> lista arquivos que tem x
ls ?a* –> lista arquivos que a segunda letra é "a"
ls ??[am,t]* –> lista arquivos que a 3 letra está entre "a" e "m" ou "t"
ls {am,du} –> lista arquivos que tem "am" ou "du"
ls *.{pdf,txt} –> lista arquivos em pdf ou txt

mkdir –> make diretório, criar arquivo
mkdir nome
mkdir teste1 –> cria o arquivo teste1 na pasta atual
mkdir Linux "Linux 2" –> cria a pasta Linux e Linux 2

cp –> copiar
cp nome destino
cp texto.txt Pasta1/ –> copia o texto para Pasta1

mv –> mover
mv nome local
mv Texto.txt /home -=> move o arquivo Texto.txt para a pasta home
mv gasw.pdf Pasta1/
mv nome_antigo nome_novo –> renomeia
mv texto1.txt Texto.txt –> texto1 para Texto
mv Pasta1/ Folder –> Pasta1 para Folder

rm –> remover
rm arquivo
rm texto.txt
rm Pasta1/* –> apaga tudo da Pasta1
rm -rf –> apaga forçadamente (pastas e arquivos dentro)

touch –> cria arquivo
touch texto.txt –> criou o arquivo txt

nano –> bloco de notas
nano texto.txt –> entra no arquivo texto.txt

cat –> descreve o que tem no arquivo
cat texto.txt
cat /etc/texto.txt

find –> procurar
find . -name *.txt –> procura, na pasta atual e filhos, arquivos txt

less –> uma preview do arquivo
less texto.txt
(dentro dele pode colocar /palavra para buscar).
```

## Diretórios:

bin (binários) -> arquivos binários dos programas instalados
boot -> arquivos para o boot
cdroom -> para cdroom
dev: device -> arquivos do seu hardware
etc -> arquivos quaisquer que podem ser editados por usuários
home -> pasta dos usuários
lib (library) -> bibliotecas que os programas usam
media -> local onde pendrive e outros vãos er montados
mnt -> montagem manual da media
opt (optional) -> alguns softwares querem pastas únicas (davince resolve)
proc (processos) -> arquivos criados pelos processos quando liga o pc
root -> home do root (usuario principal)
run -> serve como memoria ram, arquivos como logs são criados no boot
sbin -> binarios do sistema
snap -> algum programa do ubunto
srv (services) -> servidores
sys (system) -> forma de interagir com o kernel, drives e firmwares
tmp -> arquivos temporarios
usr (user) -> programas e bibliotecas uteis mas não vitais
var (variable) -> arquivos que vão se acumulando com o tempo, como backup