<?php
@include_once "./components/navbar.php";
@require_once "../config/connection.php";
?>

<body>
    <header>

    </header>
    <main>
        <h1 class="text-center">Welcome to the CRUD Application</h1>


        <table class="table">
  <thead>
    <tr>
      <th scope="col">#Id</th>
      <th scope="col">Model</th>
      <th scope="col">Brand</th>
      <th scope="col">Price</th>
      <th scope="col">Stock</th>
      <th scope="col">PtaStatus</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM `mobiles`";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <th scope='row'>" . $row['Id'] . "</th>
                    <td>" . $row['Model'] . "</td>
                    <td>" . $row['Brand'] . "</td>
                    <td>" . $row['Price'] . "</td>
                    <td>" . $row['Stock'] . "</td>
                    <td>" . $row['PtaStatus'] . "</td>
                </tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
 
  </tbody>
</table>

    </main>
    <!-- place footer here -->

    <?php
    @include "./components/footer.php"
    ?>

    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>