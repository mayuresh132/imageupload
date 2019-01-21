<!DOCTYPE html>
<html>
<body>

<?php
class Car {
    function Car() {
        $model = "VMW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie.$model;
?>

</body>
</html>