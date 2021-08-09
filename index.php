<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Car Rental</title>
  </head>
  <body>
    <h1 class="text-center my-5">Car Rental</h1>
    <?PHP
    $carRentals = array(
        "Porsche" => array
        (
            "name" => "Porsche",
            "type" => "Carrera",
            "date" => "2020",
            "available" => 1,
            "price" => "300",
            "location" => "Paris",
            "link" => "https://cdn.pixabay.com/photo/2020/06/22/19/30/automobile-5330343__340.jpg"
        ),

        "BMW" => array
        (
            "name" => "BMW",
            "type" => "The 7",
            "date" => "2021",
            "available" => 2,
            "price" => "200",
            "location" => "Vienna",
            "link" => "https://cdn.pixabay.com/photo/2015/09/02/12/25/bmw-918408_1280.jpg"
        ),

        "Audi" => array
        (
            "name" => "Audi",
            "type" => "A8",
            "date" => "2019",
            "available" => 4,
            "price" => "150",
            "location" => "Munich",
            "link" => "https://cdn.pixabay.com/photo/2015/01/19/13/51/car-604019_1280.jpg"
        ),

        "Lambo" => array
        (
            "name" => "Lambourgini",
            "type" => "Sian FKP 37",
            "date" => "2019",
            "available" => 1,
            "price" => "400",
            "location" => "Berlin",
            "link" => "https://cdn.pixabay.com/photo/2018/03/26/09/29/car-3262045__480.jpg"
        )
);
        echo"
        <div class='container'>
            <div class='row'>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3'>
                    <div class='card shadow border-0 mt-2' >
                        <img src=' ".$carRentals['Audi']['link']." ' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h4 class='card-text'>Brand: ".$carRentals['Audi']['name']."  </h4>
                            <p class='h6 card-text '>Type: ".$carRentals['Audi']['type']."  </p>
                            <p class='card-text fw-light text-muted my-0'>Build: ".$carRentals['Audi']['date']."  </p>
                            <p class='card-text fw-light text-muted'>Price: ".$carRentals['Audi']['price']."  </p>
                            <p class='card-text fw-light  my-1'>Available: ".$carRentals['Audi']['available']."  </p>
                            <p class='card-text fw-light'>Location:  ".$carRentals['Audi']['location']."  </p>
                        </div>
                    </div>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3'>
                    <div class='card shadow border-0 mt-2' >
                        <img src=' ".$carRentals['Lambo']['link']." ' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h4 class='card-text'>Brand: ".$carRentals['Lambo']['name']."  </h4>
                            <p class='h6 card-text '>Type: ".$carRentals['Lambo']['type']."  </p>
                            <p class='card-text fw-light text-muted my-0'>Build: ".$carRentals['Lambo']['date']."  </p>
                            <p class='card-text fw-light text-muted '>Price: ".$carRentals['Lambo']['price']."  </p>
                            <p class='card-text fw-light  my-1'>Available: ".$carRentals['Lambo']['available']."  </p>
                            <p class='card-text fw-light'>Location: ".$carRentals['Lambo']['location']."  </p>
                        </div>
                    </div>
                </div>

                

                <div class='col-12 col-sm-6 col-md-4 col-lg-3'>
                    <div class='card shadow border-0 mt-2'>
                        <img src=' ".$carRentals['Porsche']['link']." ' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h4 class='card-text'>Brand: ".$carRentals['Porsche']['name']."  </h4>
                            <p class='h6 card-text '>Type: ".$carRentals['Porsche']['type']."  </p>
                            <p class='card-text fw-light text-muted my-0'>Build: ".$carRentals['Porsche']['date']."  </p>
                            <p class='card-text fw-light text-muted'>Price: ".$carRentals['Porsche']['price']."  </p>
                            <p class='card-text fw-light  my-1'>Available: ".$carRentals['Porsche']['available']."  </p>
                            <p class='card-text fw-light'>Location: ".$carRentals['Porsche']['location']."  </p>
                        </div>
                    </div>
                </div>

                <div class='col-12 col-sm-6 col-md-4 col-lg-3'>
                    <div class='card shadow border-0 mt-2' >
                        <img src=' ".$carRentals['BMW']['link']." ' class='card-img-top' alt='...'>
                        <div class='card-body'>
                            <h4 class='card-text'>Brand: ".$carRentals['BMW']['name']."  </h4>
                            <p class='h6 card-text '>Type: ".$carRentals['BMW']['type']."  </p>
                            <p class='card-text fw-light text-muted my-0'>Build: ".$carRentals['BMW']['date']."  </p>
                            <p class='card-text fw-light text-muted'>Price: ".$carRentals['BMW']['price']."  </p>
                            <p class='card-text fw-light  my-1'>Available: ".$carRentals['BMW']['available']."  </p>
                            <p class='card-text fw-light'>Location: ".$carRentals['BMW']['location']."  </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> "   
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
