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

### 2. Docker

Eğer docker yoksa; https://docs.docker.com/ adresinden docker için gerekli kurulumları yapabilirsiniz.

```
cd pathtestcase/
mkdir var
mkdir var/cache
mkdir var/log
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
curl --location --request GET 'http://127.0.0.1:8022/api/order/lists' \
--header 'Content-Type: application/json'
```

### 2. Sipariş Görüntüleme

| Tip | Değer |
| --- | --- |
| Method | GET |
| Route | /api/order/{orderId} |

##### Örnek Curl İsteği
```
curl --location --request GET 'http://127.0.0.1:8022/api/order/1' \
--header 'Content-Type: application/json'
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
--header 'Authorization: Bearer 2343242' \
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
--header 'Content-Type: application/json'
```


### 5. Sipariş Güncelleme

> Not: Ürünlerden stok bilgisini günceller.

| Tip | Değer |
| --- | --- |
| Method | PUT |
| Route | /api/order/{orderId} |

##### Örnek Curl İsteği
```
curl --location --request PUT 'http://127.0.0.1:8022/order/1' \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'quantity=1' \
--data-urlencode 'address=werewr'
```

### 6. Postman Restful API Collection

> Not: PathInternet.postman_collection.json

