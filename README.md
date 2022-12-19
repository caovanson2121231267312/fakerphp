# faker-php

* Faker là một thư viện PHP tạo dữ liệu giả, Faker có thể sinh ra bộ dữ liệu phù hợp với các kiểu sau:

    * Kiểu số
    * Kiểu văn bản
    * Bộ dữ liệu cho một người. Ví dụ như tên, tuổi, giới tính, etc..
    * Địa chỉ
    * Số điện thoại
    * Công ty
    * Ký tự
    * Ngày tháng
    * Internet, ví dụ như domains, URLs, etc..
    * Màu sắc
    * File
    * Images
    * ...

* Cài đặt faker

```php
    composer require fakerphp/faker
```

* Cách sử dụng

```php
    require_once 'vendor/autoload.php';
```

* Tạo dữ liệu giả

```php
<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

for ($i = 0; $i < 3; $i++) {
    echo $faker->unique()->name() . "<br>";

    echo $faker->email() . "<br>";

    echo $faker->text() . "<br>";
    
    echo $faker->bankAccountNumber() . "<br>";
    
    echo $faker->areaCode() . "<br>";
    
    echo $faker->city() . "<br>";
    
    echo $faker->date("d/m/Y") . "<br>";
    
    echo $faker->randomNumber(3, true) . "<br>";

    echo $faker->localIpv4() . "<br>";

    echo "<br>";
}
?>
```
