## About Project

A simple chatroom with laravel, livewire and websocket 

## Installation and Configuration

Run these commands in terminal

```
composer install
npm install
php artisan migrate
```

In .env File set this:
```
BROADCAST_DRIVER=pusher
```

and set below keys to same value such this :
```
PUSHER_APP_ID=mycustomvalue
PUSHER_APP_KEY=mycustomvalue
PUSHER_APP_SECRET=mycustomvalue
```

## Run Project

```
php artisan websockets:serve
php artisan serve
```