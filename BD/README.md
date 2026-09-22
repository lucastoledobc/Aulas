Um banco de dados é essencialmente um sistema de gerenciamento de variáveis persistentes de altíssima performance.

# SQL
SQL é a linguagem do SGBD.

DML (Data Manipulation Language): Manipula os registros dentro das tabelas.

  SELECT: Consulta e filtra dados existentes.

  INSERT: Insere novas linhas de dados.

  UPDATE: Altera dados já existentes.

  DELETE: Remove linhas de dados.

DDL (Data Definition Language): Define e altera a estrutura do banco (esquema).

  CREATE TABLE: Cria uma nova tabela e define suas colunas e tipos.

  ALTER TABLE: Adiciona ou remove colunas de uma tabela existente.

  DROP TABLE: Exclui uma tabela inteira e seus dados do disco.

DCL (Data Control Language): Controla permissões de acesso de usuários.

  GRANT: Concede acesso a determinados dados ou operações.

  REVOKE: Remove permissões de acesso.

TCL (Transaction Control Language): Gerencia transações e garante as propriedades ACID.

  COMMIT: Salva permanentemente as alterações da transação atual.

  ROLLBACK: Desfaz as alterações feitas na transação caso ocorra um erro.


# SGDB

SGBD é o motor que gerencia o banco de dados. Exemplos: SQLite, MySQL e PostgreSQL.

O que ó SGDB faz quando recebe um comando em SQL:

O que o código C/C++ do SGBD faz em cada etapa:
1. Parser (Análise Sintática)

O motor recebe o SQL como um simples ponteiro de caracteres (uma string pura).

  O código C percorre essa string quebrando-a em tokens (SELECT, FROM, WHERE).

  Ele valida a sintaxe e constrói uma árvore estruturada em memória chamada AST (Abstract Syntax Tree), verificando se a tabela usuarios e a coluna idade realmente existem nos dicionários do sistema.

2. Query Planner & Optimizer (O Cérebro)

Esta é a parte mais complexa da engenharia de um SGBD. O motor não sai executando o comando cegamente.

  O otimizador analisa as estatísticas dos dados e decide: "Vale mais a pena usar o índice B-Tree na coluna idade ou ler o arquivo inteiro do disco?"

  Ele gera um Plano de Execução (uma sequência de rotinas e funções internas a serem chamadas).

3. Executor (A Máquina de Estado)

O executor pega o plano otimizado e chama as funções C de baixo nível para buscar os dados:

  Ele chama iteradores de leitura de disco (read_page(), fetch_next_row()).

  Carrega os dados para o Buffer Pool na memória RAM.

  Aplica a comparação condicional (if (linha.idade > 30)).

4. Serializador de Resposta

Os dados encontrados são convertidos do formato binário interno do banco para o protocolo de rede (ou buffer de memória, no caso do SQLite) e devolvidos para o cliente que fez a requisição.

# Modelos

A primeira grande divisão é como a informação é estruturada e relacionada:

- Relacional (SQL): Dados organizados em tabelas estritas (linhas e colunas) conectadas por chaves (PK/FK). É ideal quando a integridade dos dados e a consistência são prioridades.

  Exemplos: PostgreSQL, MySQL, SQLite, Oracle.

- Documentos (NoSQL): Dados armazenados como objetos flexíveis (geralmente JSON). Excelente para prototipagem rápida e esquemas variáveis.

  Exemplos: MongoDB, CouchDB.

- Chave-Valor (NoSQL): Estrutura ultra-rápida baseada em pares de chave e conteúdo, operando prioritariamente em memória RAM.

  Exemplos: Redis, Memcached.

- Grafos (NoSQL): Focado em nós e arestas para mapear relacionamentos complexos e redes interpessoais ou conexões de alta intensidade.

  Exemplos: Neo4j, ArangoDB.


# Propriedades

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