# Docker

O ecossistema Docker gira em torno de três conceitos fundamentais:

- Imagem (Image): O "molde" ou blueprint somente leitura (ex: a imagem do Ubuntu, do Node.js ou do PostgreSQL).

- Container (Container): A instância em execução da imagem (o ambiente isolado rodando na sua máquina).

- Registry (Docker Hub): O repositório onde as imagens públicas ficam armazenadas.

## Comandos

docker ps -a : lista os containers

docker logs nome -f

docker start nome
docker stop nome

docker rm nome : remove o container
docker rmi nome : remove a imagem

docker exec -it nome bash : intarage com o cont

docker compose up -d --nome
docker compose down


## Docker Compose

version: '3.8'

services:
  web:
    image: node:18
    ports:
      - "3000:3000"
    volumes:
      - .:/app
    working_dir: /app
    command: npm run dev
    depends_on:
      - db

  db:
    image: postgres:15
    environment:
      POSTGRES_USER: root
      POSTGRES_PASSWORD: secretpassword
      POSTGRES_DB: meu_banco
    volumes:
      - pgdata:/var/lib/postgresql/data

volumes:
  pgdata: