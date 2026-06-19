<!DOCTYPE html>
<html>
<head>
    <title>my php activities</title>
</head>
<body>

<h1>my php activities</h1>

<div class="intro">
    <p>hi, i’m john ernest m. allado, 21 years old a first-year bs information technology, college student at pateros technological college</p>
    <p>i like discovering new things.</p>
</div>

<div class="container">

    <div class="card">
        <h2>activity 1: basic output</h2>
        <div class="output">
        <?php
        echo "name: john ernest m. allado <br>";
        print "course: bsit";
        ?>
        </div>
        <div class="notes">
            1. the symbol used to end a php statement is a semicolon.<br>
            2. the faster one is echo because it simply outputs text.
        </div>
    </div>

    <div class="card">
        <h2>activity 2: multiple outputs</h2>
        <div class="output">
        <?php
        echo "welcome to my php mini project!<br>";
        echo "i'm john ernest and this is my first php project.<br>";
        echo "i love gaining knowledge.";
        ?>
        </div>
    </div>

    <div class="card">
        <h2>activity 3: declaring variables</h2>
        <div class="output">
        <?php
        $name = "john ernest m. allado";
        $age = 21;
        $course = "bsit";

        echo "name: " . $name . "<br>";
        echo "age: " . $age . "<br>";
        echo "course: " . $course;
        ?>
        </div>
    </div>

    <div class="card">
        <h2>activity 4: variable rules</h2>
        <div class="output">
        <?php
        $name = "ana";   
        $age = 18;       
        echo $age;     
        ?> 
        </div>
    </div>

    <div class="card">
        <h2>activity 5: arithmetic operators</h2>
        <div class="output">
        <?php
        $a = 10;
        $b = 3;

        echo "addition: " . ($a + $b) . "<br>";
        echo "subtraction: " . ($a - $b) . "<br>";
        echo "multiplication: " . ($a * $b) . "<br>";
        echo "division: " . ($a / $b);
        ?>
        </div>
    </div>

    <div class="card">
        <h2>activity 6: assignment operators</h2>
        <div class="output">
        <?php
        $x = 5;
        $x += 3;
        echo $x;
        ?>
        </div>
    </div>

    <div class="card">
        <h2>activity 7: comparison operators</h2>
        <div class="output">
        <?php
        $a = 10;
        $b = 5;

        var_dump($a > $b);
        echo "<br>";
        var_dump($a == $b);
        ?>
        </div>
    </div>

    <div class="card">
        <h2>mini project: calculator</h2>
        <div class="output">
        <?php
        $num1 = 8;
        $num2 = 4;

        echo "sum: " . ($num1 + $num2) . "<br>";
        echo "difference: " . ($num1 - $num2) . "<br>";
        echo "product: " . ($num1 * $num2) . "<br>";
        echo "division: " . ($num1 / $num2);
        ?>
        </div>
    </div>

</div>
</body>
</html>
