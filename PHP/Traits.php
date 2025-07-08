<?php
trait massage 
 {
    function hello()
 {
        echo 'This Is OOP';
    }
}

class newclass
 {
    use massage;
}

$ogj = new newclass();
$ogj->hello();
?>

<!-- Using Multiple Traits -->
<?php
trait Car_1
 {
    function class_1()
 {
        echo 'This Is a First Function ';
    }
}

trait Car_2
 {
    function class_2()
 {
        echo 'This Is a Scond Function ';
    }
}

class print_1
 {
    use Car_1;
}

class print_2
 {
    use Car_1, Car_2;
}

$a = new print_1();
$a->class_1();

$a = new print_2();
echo '<br>';
$a->class_2();
?>