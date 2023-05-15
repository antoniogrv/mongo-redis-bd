### Esecuzione

Per seguire il progetto, copiare il contenuto di `.env.example` in un nuovo file chiamato `.env`. Successivamente, eseguire i seguenti comandi:

```
npm run init
npm run up
```

### mongosh

E' possibile interagire con la CLI di MongoDB accedendo al rispettivo container Docker.

```
docker exec -it mongo-redis-bd-mongodb-1 bash
mongo -u user -p password --authenticationDatabase db
use db
```

### MongoDB Compass

E' possibile visualizzare graficamente il comportamento e lo stato di MongoDB tramite [MongoDB Compass](https://www.mongodb.com/products/compass).

```
URI: mongodb://user:password@mongodb/db
Database: myappdb
```

### Redis Insight

E' possibile visualizzare graficamente il comportamento e lo stato di MongoDB tramite [Redis Insight](https://redis.com/redis-enterprise/redis-insight/).

```
Host: localhost
Port: 6379
Logical Index: 1
```

