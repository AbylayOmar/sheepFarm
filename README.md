# Фермочка для овечек


Фермочка для овечек. Приложения для мониторинга загонов и менеджмента овец.
В начале 10 овец распределяются пл загонам. Каждый день в загонах в которых больше одной овцы, появлется одна новая овца. Можно переместить к одинокой овце, овцу из другого загона. Смотреть гиф
![Alt Text](https://media.giphy.com/media/f6CnjeiTyt3CziXmQk/giphy.gif)
Ведется счет дней. Каждый день длится  10 секунд. Каждый 10 день уводится одно овечка из загона. Смотреть на гиф
![Alt Text](https://media.giphy.com/media/J0Il5pI6M1IAUVPvul/giphy.gif)
### Стэк технологий

Фермочка для овечек использует:

* [VueJS] - фронтенд
* [Laravel] - бэкенд
* [sqlite] - бд

### Установка

Для работы нужен 
* [Vuejs].
* [php7].

Клонируйте репозиторий
```sh
git clone 
```

Создайте в корневой директорий файл .env и скопируйте все из .env.example
Создайте файл database.sqlite в директорий database

Для установки зависимостей запустите скрипт configure .sh
```sh
./configure.sh
```
При ошибках проверьте разрешения. 
Алтеринативно вы можете запустить команды в ручную:
```sh
sudo composer install
sudo npm install
php artisan migrate:fresh --seed
```

После завершения установки вы должны запустить в отдельном окне терминала запустить скрипт timer .sh
```sh
./timer.sh
```
Запустите локальный сервер Laravel:
```sh
php artisan serve
```
Для просмотра перейдите на 
```sh
http://127.0.0.1:8000/
```

   [VueJS]: <https://vuejs.org/>
   [Laravel]: <https://laravel.com/>
   [sqlite]: <https://www.sqlite.org/index.html>
   [php7]: <https://www.php.net/downloads>
   
