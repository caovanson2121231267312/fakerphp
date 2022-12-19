<?php
require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

function localization(){
    $faker = Faker\Factory::create('vi_VN');
    for ($i = 0; $i < 10; $i++) {
        echo $faker->name() . "\n";
        echo $faker->address() . "<br>";
    }
}
localization();
echo "<br>";

function modifiersOptional(){
    $values=[];
    $faker = Faker\Factory::create('vi_VN');
    for ($i = 0; $i < 10; $i++) {
        $values []= $faker->optional()->randomDigit();
    }
    print_r($values);
}
modifiersOptional();
echo "<br>";

function fakeData()  {
    $faker = Faker\Factory::create('vi_VN');
    echo $faker->name();
    echo "<br>";
    echo $faker->address();
    echo "<br>";
    echo $faker->phoneNumber();
    echo "<br>";
    echo $faker->email();
    echo "<br>";
    echo $faker->text();
    echo "<br>";
}
fakeData();
echo "<br>";

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