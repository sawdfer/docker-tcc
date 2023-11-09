# Trabalho de Conclusão de Curso

Projeto criado para atender um centro logístico.

## Como rodar

### Instalando dependências
Acesse a pasta `./api` no terminal e execute:
```
npm install
```

Com isso instalamos as dependências Node que precisamos. Estou utilizando Node 10.

### Construindo as imagens

Acesse a pasta raíz do projeto e construa cada imagem (MySQL, Node API e PHP):

```
docker build -t mysql-system -f api/db/Dockerfile .
```
```
docker build -t node-system -f api/Dockerfile .
```
```
docker build -t php-system -f website/Dockerfile .
```

### Rodando os containers
Na pasta raíz do projeto, execute um de cada vez:

```
docker run -d -v "$(pwd)/api/db/data:/var/lib/mysql" --rm --name mysql-container mysql-image
```
```

docker run -d -v "$(pwd)/api:/home/node/app" -p 9001:9001 --link mysql-container --rm --name node-container node-system
```
```
docker run -d -v "$(pwd)/website:/var/www/html" -p 8888:80 --link node-container --rm --name php-container php-system
```
