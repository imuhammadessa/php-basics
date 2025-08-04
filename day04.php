<!--
// Conditional Statements 

<?php
$price = 100;
if ($price > 100 && $price < 200) {
    echo "Price is greater than 100";
} elseif ($price < 100) {
    echo "Price is less than 100";
} else {
    echo "Price is 100";
}
?>
-->

<!--
// Switch Statement
<?php
$color = "red";
switch ($color) {
    case "red":
        echo "Color is red";
        break;
    case "blue":
        echo "Color is blue";
        break;
    default:
        echo "Color is not red or blue";
        break;
}
?>
-->

<!-- Looping 
<?php
// For Loop
for ($i = 0; $i < 10; $i++) {
    echo "<button>For Loop $i </button> . " . " ";
}

// While Loop
$i = 0;
while ($i < 10) {
    echo "<br>" . $i;
    $i++;
}

// Do While Loop
$i = 0;
do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

// Foreach Loop
$colors = array("red", "blue", "green");
foreach ($colors as $color) {
    echo strtolower($color) . " ";
    echo "<hr>";
    echo strtoupper($color) . " ";
    echo "<hr>";
}
?>-->


<!--
// Break and Continue 
<?php
// Break
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . "<br>";
}

// Continue
for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
        continue;
    }
    echo $i . "<br>";
}

?> -->