<?php
// Класс с модификаторами доступа и наследованием

interface TestInterface {}
class Animal implements TestInterface
{
    /**
     * @var string $name
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function speak()
    {
        return "The animal makes a sound.";
    }
}

class Dog extends Animal
{
    public function speak()
    {
        return "Woof! My name is " . $this->name;
    }
}

$dog = new Dog("Buddy");
echo $dog->speak(); // Выведет: Woof! My name is Buddy
?>


<?php
/**
 * @return Generator
 */
function getValues() {
    yield 1;
    yield 2;
    yield 3;
}

foreach (getValues() as $value) {
    echo $value . " "; // Выведет: 1 2 3
}
?>

<?php
try {
    throw new Exception("Что-то пошло не так");
} catch (Exception $e) {
    echo $e->getMessage(); // Выведет: Что-то пошло не так
} finally {
    echo "Конец обработки."; // Выведет: Конец обработки.
}
?>


<?php
/**
 * @param string $name
 * @return string
 */
$greet = function(...$name) {
    $result = '';

    foreach ($name as $value) {
        $result .= $value . ' ';
    }
    return "Hello, " . $result;
};

echo $greet("John"); // Выведет: Hello, John
?>
