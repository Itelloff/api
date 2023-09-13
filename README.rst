URL для Postman:
==========================================

GET | http://127.0.0.1:8000/api/orders - отображает список заказов в виде JSON

POST | http://127.0.0.1:8000/api/orders - вносит данные по таким ключам как: name (varchar), location (varchar), house (int), flat (int), product (varchar)

GET | http://127.0.0.1:8000/api/orders/id - отображает определённый заказ в виде JSON

GET | http://127.0.0.1:8000/api/delivery - отображает стоимость доставки до определённого адреса в виде JSON

Информация по расположению файлов
==========================================

В папке recources/views/api.php находятся все API маршруты

В папке Http/Controller/Api/DeliveryController.php - метод index (описывается доставка до определённой улицы)

В папке Http/Controller/Api/OrdersController.php - метод index (вывод списка всех заказов); метод store (создание заказа покупателем); метод show (вывод определённого заказа)

В папке Http/Recources/DeliveryRecource.php - принимается массив с данными location, price

В папке Http/Recources/OrderRecource.php - принимается массив данными name, location, house, flat, product

В папке Models/Delivery.php - соединение с таблицей Delivery

В папке Models/Orders.php - соединение с таблицей Orders

api.sql - База данных под названием api

==========================================
Данные манипуляции сделанные на Laravel PHP



