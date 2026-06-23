<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

<?php

//arrays
$students=array("Anas","afaq","Faizan","77","Yahya");
echo $students[2];

//functions
// function add(){
//     echo 10+20;
// }
//calling a functon
// add();

//perameterized function
// function add($a=0,$b=0) //parameters
// {
//     echo $a+$b;//0+0
// }
// //calling a functon
// add(5,5);  //arguments

//conditional statements
$age=118;

if ($age > 18) {
    echo "you can vote";
}
elseif ($age = 18){
    echo '<script>alert("you can vote but get cnic first")</script>';
}
else {
    echo "you can't vote";
}

?>