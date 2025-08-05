<!-- Types of Arrays -->
<?php
// array(), range(), fill()

// Array creation function
// Empty Array
$empty = array();
echo "<pre style='background-color: lavender; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Empty Array</h3>";
print_r($empty);
echo "</pre>";

// Numbered Array
$numbers = [1, 2, 3, 4, 5];
echo "<br /> <pre style='background-color: skyblue; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Numbered Array</h3>";
print_r($numbers);
echo "</pre>";

// range()
$range = range(0, 20, 2); // last parameter is step
echo "<br /> <pre style='background-color: cadetblue; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Range Array</h3>";
print_r($range);
echo "</pre>";

// fill()
$fill = array_fill(0, 5, "Hello");
echo "<br /> <pre style='background-color: darkblue; color: white; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Fill Array</h3>";
print_r($fill);
echo "</pre>";

// Array Iteration function
// map()
$val_map = array("V8", "V10", "V12", "V14", "V16");
$map = array_map("strtoupper", $val_map);
echo "<br /> <pre style='background-color: purple; color: white; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Map Array</h3>";
print_r($map);
echo "</pre>";

// walk()
echo "<h3 style='text-decoration: underline; text-align: center;'>Walk array</h3>";
function walk($value, $key)
{
    echo "<pre style='background-color: green; color: white; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
    echo "$key for $value";
    echo "</pre>";
};
$key = array("a" => "apple", "b" => "banana", "c" => "cherry");
array_walk($key, "walk");

// foreach()
echo "<h3 style='text-decoration: underline; text-align: center;'>Foreach Array</h3>";
foreach ($key as $k => $v) {
    echo "<pre style='background-color: Cornsilk; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
    echo "$k for $v";
    echo "</pre>";
}


// Array Manipulation function / Arrays Functions

// Push
$push = array("a", "b", "c");
array_push($push, "d", "e");
echo "<br /> <pre style='background-color: GreenYellow; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Push Array</h3>";
print_r($push);
echo "</pre>";

// Pop
$pop = array("a", "b", "c");
array_pop($pop);
echo "<br /> <pre style='background-color: orange; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Pop array</h3>";
print_r($pop);
echo "</pre>";

// Shift
$shift = array("a", "b", "c");
array_shift($shift);
echo "<br /> <pre style='background-color: Navy; color: white; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Shift Array</h3>";
print_r($shift);
echo "</pre>";

// Unshift
$unshift = array("a", "b", "c");
array_unshift($unshift, "d", "e");
echo "<br /> <pre style='background-color: Plum; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Unshift Array</h3>";
print_r($unshift);
echo "</pre>";


// Sort
$sort = array("c", "0", "z", "a", "b");
sort($sort);
echo "<br /> <pre style='background-color: Salmon; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Sort Array</h3>";
print_r($sort);
echo "</pre>";

// rSort
$rSort = array("c", "0", "z", "a", "b");
rsort($rSort);
echo "<br /> <pre style='background-color: YellowGreen; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>rSort Array</h3>";
print_r($rSort);
echo "</pre>";

// aSort
$aSort = array("c", "0", "z", "7", "b");
asort($aSort);
echo "<br /> <pre style='background-color: LightSkyBlue; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>aSort Array</h3>";
print_r($aSort);
echo "</pre>";

// kSort
$kSort = array("c" => "c", "0" => "0", "z" => "z", "7" => "7", "b" => "b");
ksort($kSort);
echo "<br /> <pre style='background-color: Plum; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>kSort Array</h3>";
print_r($kSort);
echo "</pre>";

// Shuffle
$shuffle = array("a", "1", "c", "z", "b", "2");
shuffle($shuffle);
echo "<br /> <pre style='background-color: SandyBrown; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Shuffle Array</h3>";
print_r($shuffle);
echo "</pre>";

// Replace array
$replace = array("a", "b", "c");
$replaced = array_replace($replace, array("d", "e", "f"));
echo "<br /> <pre style='background-color: PapayaWhip; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Replace Array</h3>";
print_r($replaced);
echo "</pre>";

// Merge arrays
$first = array("a", "b", "c");
$second = array(4, 5, 6);
$merged = array_merge($first, $second);
echo "<br /> <pre style='background-color: Tan; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Merge Array</h3>";
print_r($merged);
echo "</pre>";

// Slice
$slice = array("a", "b", "c");
$sliced = array_slice($slice, 1, 1);
echo "<br /> <pre style='background-color: Lavender; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Slice Array</h3>";
print_r($sliced);
echo "</pre>";

// Splice
$splice = array("a", "b", "c");
array_splice($splice, 1, 1);
echo "<br /> <pre style='background-color: LavenderBlush; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Splice Array</h3>";
print_r($splice);
echo "</pre>";

// Multi dimensional arrays
$multi = array(
    array("a", "b", "c"),
    array("d", "e", "f"),
    array("g", "h", "i")
);
echo "<br /> <pre style='background-color: Goldenrod; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Multi Dimensional Array</h3>";
print_r($multi);
echo "</pre>";

// Multi dimensional arrays - JSON encode
$multi = array(
    array("a", "b", "c"),
    array("d", "e", "f"),
    array("g", "h", "i")
);
echo "<br /> <pre style='background-color: PaleGreen; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'> ";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Multi Dimensional Array JSON encode</h3>";
print_r(json_encode($multi));
echo "<br /><br /></pre> <br /><br />";

// Four dimensional arrays
$four = array(
    $fruits = array(
        array("apple", "banana", "cherry"),
    ),
    $vegetables = array(
        array("carrot", "broccoli", "spinach"),
        "fruits" => $fruits,

    ),
    $meats = array(
        array("beef", "chicken", "pork"),
        "vegetables" => $vegetables
    )
);
echo "<br /> <pre style='background-color: PaleVioletRed; color: white; padding: 10px; border-radius: 10px; width: 50%; margin: auto;'>";
echo "<h3 style='text-align: center; font-family: Tahoma, sans-serif;'>Four Dimensional Array</h3>";
print_r($four);
echo "</pre>";

?>


