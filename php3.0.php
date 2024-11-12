<?php
    $intVar = 10;              // Целое число
    $floatVar = 3.14;          // Число с плавающей точкой
    $stringVar = "Hello";      // Строка
    $boolVar = true;           // Логическая переменная

    $array = array(1, 2, 3, "four");
    $assocArray = array("key1" => "value1", "key2" => "value2");

// Обращение к элементам массива
echo $array[0];
echo $assocArray["key1"];

    $age = '20';
    if ($age < 18) {
        echo "Underage";
    } elseif ($age < "21") {
        echo "Young adult";
    } else {
        echo "Adult";
    }

    // Цикл for
    for ($i = 0; $i < 5; $i++) {
        echo $i;
    }

    // Цикл while
    $i = 0;
    while ($i < 5) {
        echo $i;
        $i++;
    }

    // Цикл do...while
    $i = 0;
    do {
        echo $i;
        $i++;
    } while ($i < 5);

    class MyClass
    {
        var $property = "Hello";

        function myMethod()
        {
            return $this->property;
        }
    }

$obj = new MyClass();
echo $obj->myMethod();
?>

