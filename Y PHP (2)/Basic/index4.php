<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php
     //multidimensional associative array
$marks = [
    "haris" => ["Computer" => 88, "Maths" => 100, "Physics" => 75],
    "owais" => ["Computer" => 75, "Maths" => 88, "Physics" => 65],
    "ebad" => ["Computer" => 60, "Maths" => 55, "Physics" => 90],
    "afzal" => ["Computer" => 98, "Maths" => 95, "Physics" => 45],
    "usama" => ["Computer" => 18, "Maths" => 25, "Physics" => 35]
];

echo $marks['afzal']['Physics'];

echo "<table border=1 cellpadding=5px>
<caption><h2>Student Marks</h2></caption>
<tr>
    <th>Name</th>
    <th>Computer</th>
    <th>Maths</th>
    <th>Physics</th>
</tr>";

foreach ($marks as $key => $value) {
    echo "<tr>
        <td>$key</td>
        <td>{$value['Computer']}</td>
        <td>{$value['Maths']}</td>
        <td>{$value['Physics']}</td>
    </tr>";
}

echo "</table>";

?>



</body>
</html>