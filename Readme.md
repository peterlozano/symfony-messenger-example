Symfony Messenger Example

`docker-compose up`

#### Produce a message

Visit `http://localhost:8000/lucky/number`

#### Consumer

`docker-compose exec app bin/console messenger:consume-messages`