# Banco de dados

Um banco de dados como um todo é essencialmente um sistema de gerenciamento de variáveis persistentes de altíssima performance. Ou seja, uma forma de salvar dados no HD de forma rápida e eficiente.

Todo ecossistema pode ser dividido mais precisamente em:

1. Banco de dados (Database): onde estão os valores.
2. SGDB: o programa que gerencia os dados.
3. Plugins/UI/Bibliotecas: conectam o usuário ao SGDB.


## Estruturas

A primeira grande divisão é como a informação é estruturada e relacionada:

- Relacional (SQL): Dados organizados em tabelas estritas (linhas e colunas) conectadas por chaves (PK/FK). É ideal quando a integridade dos dados e a consistência são prioridades.

  - Exemplos: PostgreSQL, MySQL, SQLite, Oracle.

- Documentos (NoSQL): Dados armazenados como objetos flexíveis (geralmente JSON). Excelente para prototipagem rápida e esquemas variáveis.

  - Exemplos: MongoDB, CouchDB.

- Chave-Valor (NoSQL): Estrutura ultra-rápida baseada em pares de chave e conteúdo, operando prioritariamente em memória RAM.

  - Exemplos: Redis, Memcached.

- Grafos (NoSQL): Focado em nós e arestas para mapear relacionamentos complexos e redes interpessoais ou conexões de alta intensidade.

  - Exemplos: Neo4j, ArangoDB.


## SGDB (Sistema de Gerenciador de Banco de Dados) 

SGBD é o motor que gerencia o banco de dados, é o programa.
Para que um software seja considerado um SGBD (seja ele um código próprio simples ou um PostgreSQL com milhões de linhas de código), ele precisa resolver quatro problemas fundamentais:

1. Mapeamento de Memória para Disco: Transferir dados da RAM (volátil) para o Disco (persistente) de forma eficiente.

2. Concorrência: Garantir que 1.000 pessoas alterando o mesmo arquivo ao mesmo tempo não destruam a informação.

3. Recuperação de Falhas: Saber exatamente o que foi salvo e o que ficou pela metade caso o computador desligue repentinamente.

4. Indexação e Busca: Encontrar a informação em milissegundos sem precisar ler o disco inteiro.

Exemplos: 
- SQLite: Banco embarcado. O SQLite fica dentro do programa e é usado para se conectar a um banco externo.
- MySQL / MariaDB: servidor separado focado pra Web. O site conecta ao SGDB, ele gerencia todos os dados e volta com a resposta.
- PostgreSQL: Servidor extensível com multi processos. Melhor para aplicações mais complexas.


## SQL (Linguagem de consulta)

SQL é a linguagem do SGBD.

- DML (Data Manipulation Language): Manipula os registros dentro das tabelas.

  - SELECT: Consulta e filtra dados existentes.
  - INSERT: Insere novas linhas de dados.
  - UPDATE: Altera dados já existentes.
  - DELETE: Remove linhas de dados.

- DDL (Data Definition Language): Define e altera a estrutura do banco (esquema).

  - CREATE TABLE: Cria uma nova tabela e define suas colunas e tipos.
  - ALTER TABLE: Adiciona ou remove colunas de uma tabela existente.
  - DROP TABLE: Exclui uma tabela inteira e seus dados do disco.

- DCL (Data Control Language): Controla permissões de acesso de usuários.

  - GRANT: Concede acesso a determinados dados ou operações.
  - REVOKE: Remove permissões de acesso.

- TCL (Transaction Control Language): Gerencia transações e garante as propriedades ACID.

  - COMMIT: Salva permanentemente as alterações da transação atual.
  - ROLLBACK: Desfaz as alterações feitas na transação caso ocorra um erro.



## Propriedades

Propriedades ACID (Bancos Relacionais Clássicos)

- Atomicidade: A transação é "tudo ou nada". Se um passo falhar, tudo sofre rollback.

- Consistência: O banco transita de um estado válido para outro válido, respeitando todas as regras e restrições (constraints).

- Isolamento: Transações concorrentes não interferem no resultado uma da outra antes de serem concluídas.

- Durabilidade: Uma vez confirmado (commit), o dado persiste mesmo em caso de falha de energia ou crash.

Teorema CAP (Sistemas Distribuídos / NoSQL)

Em um sistema distribuído, você só pode **escolher duas** destas três garantias simultaneamente:

- Consistência (Consistency): Todos os nós veem os mesmos dados ao mesmo tempo.

- Disponibilidade (Availability): Toda requisição recebe uma resposta (sucesso ou falha).

- Tolerância a Partição (Partition Tolerance): O sistema continua operando mesmo se houver falha de rede entre os nós.