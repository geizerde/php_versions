<?php
class Person {
    public string $name;
    public int $age;

    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

$person = new Person("John", 30);
echo $person->name; // Выведет: John
?>


<?php
$numbers = [1, 2, 3, 4];

$squared = array_map(fn($n) => $n * $n, $numbers);
print_r($squared); // Выведет: Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 )
?>


<?php

/**
 * @deprecated это страя функция
 *
 */
function increment(int &$value): void {
    $value++;
}

$num = 5;
increment($num);
echo $num; // Выведет: 6
?>
