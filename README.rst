Общее описание
==============

GET | http://127.0.0.1:8000/api/orders - отображает список заказов в виде JSON

POST | http://127.0.0.1:8000/api/orders - вносит данные по таким ключам как: name (varchar), location (varchar), house (int), flat (int), product (varchar)

GET | http://127.0.0.1:8000/api/orders/id - отображает определённый заказ в виде JSON

GET | http://127.0.0.1:8000/api/delivery - отображает стоимость доставки до определённого адреса

В папке recources/views/api.php находится все API маршруты

В папке Http/Controller/Api/DeliveryController.php - метод index (описывается доставка до определённой улицы)

В папке Http/Controller/Api/OrdersController.php - метод index (вывод списка всех заказов); метод store (создание заказа покупателем); метод show (вывод определённого заказа)

В папке Http/Recources/DeliveryRecource.php - принимается массив с данными location, price

В папке Http/Recources/OrderRecource.php - принимается массивс данными name, location, house, flat, product

В папке Models/Delivery.php - соединие с таблицей Delivery

В папке Models/Orders.php - соединие с таблицей Orders

==============
Дата последнего редактирования: 12.09.2023