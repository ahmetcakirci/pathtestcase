# pathtestcase
Path İnternet test case

Bir sipariş RESTful Api servisidir.

## Docker

- Php: 7.4.20-fpm
- Mysql: 8.0.27

## Kurulum

### 1. İndirme

Repoyu pathtestcase isimli klasöre klonluyoruz.

```
git clone https://github.com/ahmetcakirci/pathtestcase.git
```

### 2. Composer ve Docker

Eğer composer paket yöneticiniz local bilgisayarınızda yüklü değilse https://getcomposer.org/ adresinden gerekli talimatlara uyarak kurabilirsiniz.
Eğer docker yoksa; https://docs.docker.com/ adresinden docker için gerekli kurulumları yapabilirsiniz.

```
cd pathtestcase/
mkdir var
mkdir var/cache
mkdir var/log
composer install
sudo make init up
veya
sudo docker-compose up -d
```
> Docker containerlarımızı hazır hale getiriyoruz.
> - Symfony sanal web sunucumuz 8022 üzerinden yayın yapıyor.
> - Mysql veritabanı sunucumuz 3306 üzerinden yayın yapıyor.

### 3. Migration

Docker containerlarımız çalışınca artık symfony için veritabanını hazır hale getiriyoruz.

```
sudo docker exec -it app php bin/console doctrine:migrations:migrate
```

> Migration ile tüm tablolar oluşturuluyor, "Order" ve "User" için örnek dataları veritabanına ekliyor.


## RESTful Api

### 1. Sipariş Tümünü Listeleme

| Tip | Değer |
| --- | --- |
| Method | GET |
| Route | /api/order/lists |

##### Örnek Curl İsteği
```
curl --location --request GET 'http://127.0.0.1:8022/api/order/list' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NDU0ODcwMzcsImV4cCI6MTY0NTQ5MDYzNywicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoiYWxpY2FraXJjaSJ9.cg5WOmJe_V3Lu3mm6Lqa_Kvr1RCKLvpRweCyPLHT-YP87YiWVtTL9lnZ7crQWphnBVq-3vX5wa_BfHQJ9wyHNYFG9gUZhOZY2f_CvlnJ1pF9tq8lYfPKkuiDUu4qHRaKR3Vl54Gg0CJzAUT6hlQNFsHXjxDRP5d9TRVLZ6xRqJZE0FFWJtudUgnFyVEJW9BG8ThQnkivnKLP_kNAPM-A8XqEzrveo4Ivmps75bG13yQfMfYEI5TY0h3vTG8WPo3xfILB44ATVkcoo8l--rCe-Yq3EOFxsa2GDs5K91ijmxk2Jmimiv2fHnQmHIl9jTOeSBD1sLHDc4x6uIdWHZ0KYw'
```

### 2. Sipariş Görüntüleme

| Tip | Değer |
| --- | --- |
| Method | GET |
| Route | /api/order/{orderId} |

##### Örnek Curl İsteği
```
curl --location --request GET 'http://127.0.0.1:8022/api/order/2' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NDU0ODcwMzcsImV4cCI6MTY0NTQ5MDYzNywicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoiYWxpY2FraXJjaSJ9.cg5WOmJe_V3Lu3mm6Lqa_Kvr1RCKLvpRweCyPLHT-YP87YiWVtTL9lnZ7crQWphnBVq-3vX5wa_BfHQJ9wyHNYFG9gUZhOZY2f_CvlnJ1pF9tq8lYfPKkuiDUu4qHRaKR3Vl54Gg0CJzAUT6hlQNFsHXjxDRP5d9TRVLZ6xRqJZE0FFWJtudUgnFyVEJW9BG8ThQnkivnKLP_kNAPM-A8XqEzrveo4Ivmps75bG13yQfMfYEI5TY0h3vTG8WPo3xfILB44ATVkcoo8l--rCe-Yq3EOFxsa2GDs5K91ijmxk2Jmimiv2fHnQmHIl9jTOeSBD1sLHDc4x6uIdWHZ0KYw'
```

### 3. Sipariş Ekleme

> Not: Ürünlerden stok bilgisini ekler.

| Tip | Değer |
| --- | --- |
| Method | POST |
| Route | /api/order |

##### Örnek Curl İsteği
```
curl --location --request POST 'http://127.0.0.1:8022/api/order' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NDU0ODcwMzcsImV4cCI6MTY0NTQ5MDYzNywicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoiYWxpY2FraXJjaSJ9.cg5WOmJe_V3Lu3mm6Lqa_Kvr1RCKLvpRweCyPLHT-YP87YiWVtTL9lnZ7crQWphnBVq-3vX5wa_BfHQJ9wyHNYFG9gUZhOZY2f_CvlnJ1pF9tq8lYfPKkuiDUu4qHRaKR3Vl54Gg0CJzAUT6hlQNFsHXjxDRP5d9TRVLZ6xRqJZE0FFWJtudUgnFyVEJW9BG8ThQnkivnKLP_kNAPM-A8XqEzrveo4Ivmps75bG13yQfMfYEI5TY0h3vTG8WPo3xfILB44ATVkcoo8l--rCe-Yq3EOFxsa2GDs5K91ijmxk2Jmimiv2fHnQmHIl9jTOeSBD1sLHDc4x6uIdWHZ0KYw' \
--form 'order_code="12345"' \
--form 'product_id="345345"' \
--form 'quantity="2"' \
--form 'address="Deneme Adres1"'
```

### 4. Sipariş Silme

> Not: Ürünlerden stok bilgisini siler.

| Tip | Değer |
| --- | --- |
| Method | DELETE |
| Route | /api/order/{orderId} |

##### Örnek Curl İsteği
```
curl --location --request DELETE 'http://127.0.0.1:8022/api/order/1' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NDU0ODcwMzcsImV4cCI6MTY0NTQ5MDYzNywicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoiYWxpY2FraXJjaSJ9.cg5WOmJe_V3Lu3mm6Lqa_Kvr1RCKLvpRweCyPLHT-YP87YiWVtTL9lnZ7crQWphnBVq-3vX5wa_BfHQJ9wyHNYFG9gUZhOZY2f_CvlnJ1pF9tq8lYfPKkuiDUu4qHRaKR3Vl54Gg0CJzAUT6hlQNFsHXjxDRP5d9TRVLZ6xRqJZE0FFWJtudUgnFyVEJW9BG8ThQnkivnKLP_kNAPM-A8XqEzrveo4Ivmps75bG13yQfMfYEI5TY0h3vTG8WPo3xfILB44ATVkcoo8l--rCe-Yq3EOFxsa2GDs5K91ijmxk2Jmimiv2fHnQmHIl9jTOeSBD1sLHDc4x6uIdWHZ0KYw'
```


### 5. Sipariş Güncelleme

> Not: Ürünlerden stok bilgisini günceller.

| Tip | Değer |
| --- | --- |
| Method | PUT |
| Route | /api/order/{orderId} |

##### Örnek Curl İsteği
```
curl --location --request PUT 'http://127.0.0.1:8022/api/order/1' \
--header 'Accept: application/json' \
--header 'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJpYXQiOjE2NDU0ODcwMzcsImV4cCI6MTY0NTQ5MDYzNywicm9sZXMiOlsiUk9MRV9VU0VSIl0sInVzZXJuYW1lIjoiYWxpY2FraXJjaSJ9.cg5WOmJe_V3Lu3mm6Lqa_Kvr1RCKLvpRweCyPLHT-YP87YiWVtTL9lnZ7crQWphnBVq-3vX5wa_BfHQJ9wyHNYFG9gUZhOZY2f_CvlnJ1pF9tq8lYfPKkuiDUu4qHRaKR3Vl54Gg0CJzAUT6hlQNFsHXjxDRP5d9TRVLZ6xRqJZE0FFWJtudUgnFyVEJW9BG8ThQnkivnKLP_kNAPM-A8XqEzrveo4Ivmps75bG13yQfMfYEI5TY0h3vTG8WPo3xfILB44ATVkcoo8l--rCe-Yq3EOFxsa2GDs5K91ijmxk2Jmimiv2fHnQmHIl9jTOeSBD1sLHDc4x6uIdWHZ0KYw' \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'quantity=1' \
--data-urlencode 'address=werewr'
```
### 6. Register
| Tip | Değer |
| --- | --- |
| Method | POST |
| Route | /register |
```
curl --location --request POST 'http://127.0.0.1:8022/register' \
--form 'username="alicakirci"' \
--form 'password="12345345"' \
--form 'email="deneme@gmail.com"'
```
### 7. Login
| Tip | Değer |
| --- | --- |
| Method | POST |
| Route | /api/login_check |
```
curl --location --request POST 'http://127.0.0.1:8022/api/login_check' \
--header 'Content-Type: application/json' \
--data-raw '{
    "username":"alicakirci",
    "password":"12345345"
}'
```
### 8. Postman Restful API Collection

> Not: PathInternet.postman_collection.json

