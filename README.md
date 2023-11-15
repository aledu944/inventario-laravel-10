<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Inventario Laravel 10

## Instalacion
1. Renombrar el archivo ```.env.template``` a ```.env```

2. Instalar paquetes de NPM
```bash
$   npm install
```

3. Instalar paquetes de componser
```bash
$   composer install
```

4. Instanciar base de datos 
- Con Docker
```bash
$   docker compose up -d
#   Despues
$   php artisan migrate
```


- Con laragon debe crear la base de datos y ejecutar la migracion
```bash
$   php artisan migrate
```

## Insertar datos semilla
```bash
$   php artisan db:seed --class=CategorySeeder
```

## Correr el proyecto
```bash
$   php artisan serve

#   En otra terminal

$   npm run dev
```
