# Taller de arquitectura: pedidos con colas

Componente web en Laravel 11 (PHP) de un taller de arquitectura de software sobre colas de mensajes. Permite hacer un pedido de pizza (tamaño y sabores) y ver su confirmación con el estado del pedido.

El taller completo usaba Kafka para la mensajería, un servicio en .NET (C#) y SQL Server como persistencia. Este repositorio contiene solo la parte web.

## Cómo correrlo

Requiere PHP 8.2 y Composer.

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

Luego abre `http://localhost:8000/ordenar-pizza`.
