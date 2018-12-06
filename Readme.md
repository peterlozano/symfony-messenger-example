Symfony Messenger Example

Example simple project of sending and receiving messages using the Symfony Messenger component using AMQP with Rabbitmq.

See: https://symfony.com/doc/current/messenger.html

`docker-compose up`

#### Produce a message

Visit `http://localhost:8000/lucky/number`

#### Consumer

`docker-compose exec app bin/console messenger:consume-messages`