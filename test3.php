<?php

error_reporting(0);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thm";

$conn  = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed" . mysqli_connect_error());
}


$sql = "SELECT * FROM itemdetail WHERE ItemType = 'vegetable'";
$vegetable = mysqli_query($conn, $sql);
$vegetable2 = mysqli_query($conn, $sql);
$vegetable3 = mysqli_query($conn, $sql);
$vegetable4 = mysqli_query($conn, $sql);
$vegetable5 = mysqli_query($conn, $sql);
$vegetable6 = mysqli_query($conn, $sql);
$vegetable7 = mysqli_query($conn, $sql);
$vegetable8 = mysqli_query($conn, $sql);
$vegetable9 = mysqli_query($conn, $sql);
$vegetable10 = mysqli_query($conn, $sql);
$vegetable11 = mysqli_query($conn, $sql);
$vegetable12 = mysqli_query($conn, $sql);
$vegetable13 = mysqli_query($conn, $sql);
$vegetable14 = mysqli_query($conn, $sql);
$vegetable15 = mysqli_query($conn, $sql);
$vegetable16 = mysqli_query($conn, $sql);
$vegetable17 = mysqli_query($conn, $sql);
$vegetable18 = mysqli_query($conn, $sql);
$vegetable19 = mysqli_query($conn, $sql);
$vegetable20 = mysqli_query($conn, $sql);


$sql = "SELECT * FROM itemdetail WHERE ItemType = 'Fruit'";
$Fruit = mysqli_query($conn, $sql);
$Fruit2 = mysqli_query($conn, $sql);
$Fruit3 = mysqli_query($conn, $sql);
$Fruit4 = mysqli_query($conn, $sql);
$Fruit5 = mysqli_query($conn, $sql);
$Fruit6 = mysqli_query($conn, $sql);
$Fruit7 = mysqli_query($conn, $sql);
$Fruit8 = mysqli_query($conn, $sql);
$Fruit9 = mysqli_query($conn, $sql);
$Fruit10 = mysqli_query($conn, $sql);
$Fruit11 = mysqli_query($conn, $sql);
$Fruit12 = mysqli_query($conn, $sql);
$Fruit13 = mysqli_query($conn, $sql);
$Fruit14 = mysqli_query($conn, $sql);
$Fruit15 = mysqli_query($conn, $sql);
$Fruit16 = mysqli_query($conn, $sql);
$Fruit17 = mysqli_query($conn, $sql);
$Fruit18 = mysqli_query($conn, $sql);
$Fruit19 = mysqli_query($conn, $sql);
$Fruit20 = mysqli_query($conn, $sql);

$sql = "SELECT * FROM itemdetail WHERE ItemType = 'Chicken'";
$Chicken1 = mysqli_query($conn, $sql);
$Chicken2 = mysqli_query($conn, $sql);
$Chicken3 = mysqli_query($conn, $sql);
$Chicken4 = mysqli_query($conn, $sql);
$Chicken5 = mysqli_query($conn, $sql);
$Chicken6 = mysqli_query($conn, $sql);
$Chicken7 = mysqli_query($conn, $sql);
$Chicken8 = mysqli_query($conn, $sql);
$Chicken9 = mysqli_query($conn, $sql);
$Chicken10 = mysqli_query($conn, $sql);


if (isset($_POST['submit'])) {

    $ClientID = $_POST['ClientID'];
    $ClientName = $_POST['ClientName'];
    $DeliveryDate = $_POST['DeliveryDate'];





    $VegItemCode1 = $_POST['vegetable_1'];
    $VegItemCode2 = $_POST['vegetable_2'];
    $VegItemCode3 = $_POST['vegetable_3'];
    $VegItemCode4 = $_POST['vegetable_4'];
    $VegItemCode5 = $_POST['vegetable_5'];
    $VegItemCode6 = $_POST['vegetable_6'];
    $VegItemCode7 = $_POST['vegetable_7'];
    $VegItemCode8 = $_POST['vegetable_8'];
    $VegItemCode9 = $_POST['vegetable_9'];
    $VegItemCode10 = $_POST['vegetable_10'];
    $VegItemCode11 = $_POST['vegetable_11'];
    $VegItemCode12 = $_POST['vegetable_12'];
    $VegItemCode13 = $_POST['vegetable_13'];
    $VegItemCode14 = $_POST['vegetable_14'];
    $VegItemCode15 = $_POST['vegetable_15'];
    $VegItemCode16 = $_POST['vegetable_16'];
    $VegItemCode17 = $_POST['vegetable_17'];
    $VegItemCode18 = $_POST['vegetable_18'];
    $VegItemCode19 = $_POST['vegetable_19'];
    $VegItemCode20 = $_POST['vegetable_20'];


    $VegQuantity1 = $_POST['vegetable_qty_1'];
    $VegQuantity2 = $_POST['vegetable_qty_2'];
    $VegQuantity3 = $_POST['vegetable_qty_3'];
    $VegQuantity4 = $_POST['vegetable_qty_4'];
    $VegQuantity5 = $_POST['vegetable_qty_5'];
    $VegQuantity6 = $_POST['vegetable_qty_6'];
    $VegQuantity7 = $_POST['vegetable_qty_7'];
    $VegQuantity8 = $_POST['vegetable_qty_8'];
    $VegQuantity9 = $_POST['vegetable_qty_9'];
    $VegQuantity10 = $_POST['vegetable_qty_10'];
    $VegQuantity11 = $_POST['vegetable_qty_11'];
    $VegQuantity12 = $_POST['vegetable_qty_12'];
    $VegQuantity13 = $_POST['vegetable_qty_13'];
    $VegQuantity14 = $_POST['vegetable_qty_14'];
    $VegQuantity15 = $_POST['vegetable_qty_15'];
    $VegQuantity16 = $_POST['vegetable_qty_16'];
    $VegQuantity17 = $_POST['vegetable_qty_17'];
    $VegQuantity18 = $_POST['vegetable_qty_18'];
    $VegQuantity19 = $_POST['vegetable_qty_19'];
    $VegQuantity20 = $_POST['vegetable_qty_20'];


    $FruitItemCode1 = $_POST['Fruit_1'];
    $FruitItemCode2 = $_POST['Fruit_2'];
    $FruitItemCode3 = $_POST['Fruit_3'];
    $FruitItemCode4 = $_POST['Fruit_4'];
    $FruitItemCode5 = $_POST['Fruit_5'];
    $FruitItemCode6 = $_POST['Fruit_6'];
    $FruitItemCode7 = $_POST['Fruit_7'];
    $FruitItemCode8 = $_POST['Fruit_8'];
    $FruitItemCode9 = $_POST['Fruit_9'];
    $FruitItemCode10 = $_POST['Fruit_10'];
    $FruitItemCode11 = $_POST['Fruit_11'];
    $FruitItemCode12 = $_POST['Fruit_12'];
    $FruitItemCode13 = $_POST['Fruit_13'];
    $FruitItemCode14 = $_POST['Fruit_14'];
    $FruitItemCode15 = $_POST['Fruit_15'];
    $FruitItemCode16 = $_POST['Fruit_16'];
    $FruitItemCode17 = $_POST['Fruit_17'];
    $FruitItemCode18 = $_POST['Fruit_18'];
    $FruitItemCode19 = $_POST['Fruit_19'];
    $FruitItemCode20 = $_POST['Fruit_20'];


    $FruitQuantity1 = $_POST['Fruit_qty_1'];
    $FruitQuantity2 = $_POST['Fruit_qty_2'];
    $FruitQuantity3 = $_POST['Fruit_qty_3'];
    $FruitQuantity4 = $_POST['Fruit_qty_4'];
    $FruitQuantity5 = $_POST['Fruit_qty_5'];
    $FruitQuantity6 = $_POST['Fruit_qty_6'];
    $FruitQuantity7 = $_POST['Fruit_qty_7'];
    $FruitQuantity8 = $_POST['Fruit_qty_8'];
    $FruitQuantity9 = $_POST['Fruit_qty_9'];
    $FruitQuantity10 = $_POST['Fruit_qty_10'];
    $FruitQuantity11 = $_POST['Fruit_qty_11'];
    $FruitQuantity12 = $_POST['Fruit_qty_12'];
    $FruitQuantity13 = $_POST['Fruit_qty_13'];
    $FruitQuantity14 = $_POST['Fruit_qty_14'];
    $FruitQuantity15 = $_POST['Fruit_qty_15'];
    $FruitQuantity16 = $_POST['Fruit_qty_16'];
    $FruitQuantity17 = $_POST['Fruit_qty_17'];
    $FruitQuantity18 = $_POST['Fruit_qty_18'];
    $FruitQuantity19 = $_POST['Fruit_qty_19'];
    $FruitQuantity20 = $_POST['Fruit_qty_20'];

    $ChickenItemCode1 = $_POST['Chicken_1'];
    $ChickenItemCode2 = $_POST['Chicken_2'];
    $ChickenItemCode3 = $_POST['Chicken_3'];
    $ChickenItemCode4 = $_POST['Chicken_4'];
    $ChickenItemCode5 = $_POST['Chicken_5'];
    $ChickenItemCode6 = $_POST['Chicken_6'];
    $ChickenItemCode7 = $_POST['Chicken_7'];
    $ChickenItemCode8 = $_POST['Chicken_8'];
    $ChickenItemCode9 = $_POST['Chicken_9'];
    $ChickenItemCode10 = $_POST['Chicken_10'];

    $ChickenQuantity1 = $_POST['Chicken_qty_1'];
    $ChickenQuantity2 = $_POST['Chicken_qty_2'];
    $ChickenQuantity3 = $_POST['Chicken_qty_3'];
    $ChickenQuantity4 = $_POST['Chicken_qty_4'];
    $ChickenQuantity5 = $_POST['Chicken_qty_5'];
    $ChickenQuantity6 = $_POST['Chicken_qty_6'];
    $ChickenQuantity7 = $_POST['Chicken_qty_7'];
    $ChickenQuantity8 = $_POST['Chicken_qty_8'];
    $ChickenQuantity9 = $_POST['Chicken_qty_9'];
    $ChickenQuantity10 = $_POST['Chicken_qty_10'];




    $insert_sql = "CALL upsCreateOrder('$ClientID','$DeliveryDate','$VegItemCode1','$VegItemCode2','$VegItemCode3','$VegItemCode4','$VegItemCode5','$VegItemCode6','$VegItemCode7','$VegItemCode8','$VegItemCode9','$VegItemCode10','$VegItemCode11','$VegItemCode12','$VegItemCode13','$VegItemCode14','$VegItemCode15','$VegItemCode16','$VegItemCode17','$VegItemCode18','$VegItemCode19','$VegItemCode20','$VegQuantity1','$VegQuantity2','$VegQuantity3','$VegQuantity4','$VegQuantity5','$VegQuantity6','$VegQuantity7','$VegQuantity8','$VegQuantity9','$VegQuantity10','$VegQuantity11','$VegQuantity12','$VegQuantity13','$VegQuantity14','$VegQuantity15','$VegQuantity16','$VegQuantity17','$VegQuantity18','$VegQuantity19','$VegQuantity20','$FruitItemCode1','$FruitItemCode2','$FruitItemCode3','$FruitItemCode4','$FruitItemCode5','$FruitItemCode6','$FruitItemCode7','$FruitItemCode8','$FruitItemCode9','$FruitItemCode10','$FruitItemCode11','$FruitItemCode12','$FruitItemCode13','$FruitItemCode14','$FruitItemCode15','$FruitItemCode16','$FruitItemCode17','$FruitItemCode18','$FruitItemCode19','$FruitItemCode20','$FruitQuantity1','$FruitQuantity2','$FruitQuantity3','$FruitQuantity4','$FruitQuantity5','$FruitQuantity6','$FruitQuantity7','$FruitQuantity8','$FruitQuantity9','$FruitQuantity10','$FruitQuantity11','$FruitQuantity12','$FruitQuantity13','$FruitQuantity14','$FruitQuantity15','$FruitQuantity16','$FruitQuantity17','$FruitQuantity18','$FruitQuantity19','$FruitQuantity20','$ChickenItemCode1','$ChickenItemCode2','$ChickenItemCode3','$ChickenItemCode4','$ChickenItemCode5','$ChickenItemCode6','$ChickenItemCode7','$ChickenItemCode8','$ChickenItemCode9','$ChickenItemCode10','$ChickenQuantity1','$ChickenQuantity2','$ChickenQuantity3','$ChickenQuantity4','$ChickenQuantity5','$ChickenQuantity6','$ChickenQuantity7','$ChickenQuantity8','$ChickenQuantity9','$ChickenQuantity10')";

    $result1 = mysqli_query($conn, $insert_sql);

    if ($result1) {
        header("Location: order_details.php?msg=New record created sucessfully");
        echo "<script>alert('Order Created Sucessfully!!')</script>";
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script> -->


    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <!-- search client scripts -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="JsLocalSearch.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
    <style>
        .mark {
            background-color: #d7ffe7 !important
        }

        .mark .gsearch {
            font-size: 20px
        }

        .unmark {
            background-color: #e8e8e8 !important
        }

        .unmark .gsearch {
            font-size: 10px
        }

        .marktext {
            font-weight: bold;
            background-color: antiquewhite;
        }
    </style>



    <!-- end search client scripts -->

    <title>Purchase Details</title>
</head>

<body onload="addDate();">
    <nav class="navbar navbar-light justify-content-center fs-3 mb-3" style="background-color: #FF5733">🚩The Hindu Mart🚩</nav>

    <div class="d-flex justify-content-center">
        <a href="add_customer.php" class="btn btn-dark mb-3">Add Customer<a>&nbsp;
                <a href="customer_details.php" class="btn btn-dark mb-3">Customer Details<a>&nbsp;
                        <a href="order_details.php" class="btn btn-dark mb-3">Order Details<a>&nbsp;
                                <a href="Item_details.php" class="btn btn-dark mb-3">Item Details<a>&nbsp;
                                        <a href="purchase_details.php" class="btn btn-dark mb-3">Purchase Details<a>&nbsp;
    </div>

    <div class="container">
        <form action="" method="post" id="search-form" style="width:70vw; ">
            <!-- Client search code 1 -->
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <input type="text" id="gsearchsimple" class="form-control form-control-sm" placeholder="Enter CLient name to place order" name="ClientName" />
                    <ul class="list-group">
                    </ul>
                    <div id="localSearchSimple"></div>
                    <div id="detail" style="margin-top:16px;"></div>
                </div>
                <div class="col-md-3"></div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#gsearchsimple').keyup(function() {
                        var query = $('#gsearchsimple').val();
                        $('#detail').html('');
                        $('.list-group').css('display', 'block');
                        if (query.length == 2) {
                            $.ajax({
                                url: "fetch.php",
                                method: "POST",
                                data: {
                                    query: query
                                },
                                success: function(data) {
                                    $('.list-group').html(data);
                                }
                            })
                        }
                        if (query.length == 0) {
                            $('.list-group').css('display', 'none');
                        }
                    });

                    $('#localSearchSimple').jsLocalSearch({
                        action: "Show",
                        html_search: true,
                        mark_text: "marktext"
                    });

                    $(document).on('click', '.gsearch', function() {
                        var email = $(this).text();
                        $('#gsearchsimple').val(email);
                        $('.list-group').css('display', 'none');
                        $.ajax({
                            url: "fetch.php",
                            method: "POST",
                            data: {
                                email: email
                            },
                            success: function(data) {
                                $('#detail').html(data);
                            }
                        })
                    });
                });
            </script>
            <!-- End Client search code 1 -->


            <div class="form-group d-flex justify-content-center">
                <lable for="DeliveryDate">Enter Delivery Date : </lable>&nbsp;
                <input type="date" name="DeliveryDate" id="DeliveryDate" placeholder="Enter Here..." />
            </div>

            <div class="container d-flex justify-content-center">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" style="width:33%; min-width:90px; text-align: center">Vegetable</th>
                            <th scope="col" style="width:33%; min-width:90px; text-align: center">Fruit</th>
                            <th scope="col" style="width:33%; min-width:90px; text-align: center">Chicken</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_1">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_1">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_1">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity1">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_1">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken1, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_1">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_2">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable2, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_2">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_2">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit2, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity2">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_2">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken2, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_2">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_3">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable3, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_3">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_3">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit3, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity3">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_3">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken3, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_3">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_4">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable4, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_4">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_4">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit4, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity4">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_4">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken4, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_4">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_5">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable5, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_5">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_5">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit5, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity5">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_5">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken5, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_5">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_6">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable6, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_6">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_6">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit6, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity6">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_6">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken6, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_6">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_7">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable7, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_7">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_7">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit7, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity7">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_7">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken7, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_7">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_8">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable8, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_8">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_8">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit8, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity8">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_8">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken8, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_8">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_9">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable9, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_9">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_9">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit9, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity9">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_9">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken9, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_9">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_10">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable10, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_10">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_10">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit10, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity10">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Chicken_10">
                                        <?php
                                        while ($category = mysqli_fetch_array($Chicken10, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>


                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="Chicken_qty_10">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_11">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable11, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_11">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_11">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit11, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity11">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_12">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable12, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_12">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_12">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit12, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity12">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_13">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable13, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_13">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_13">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit13, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity13">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_14">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable14, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_14">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_14">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit14, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity14">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_15">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable15, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_15">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_15">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit15, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity15">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_16">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable16, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_16">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_16">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit16, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity16">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_17">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable17, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_17">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_17">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit17, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity17">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_18">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable18, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_18">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_18">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit18, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity18">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_19">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable19, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_19">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_19">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit19, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity19">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="vegetable_20">
                                        <?php
                                        while ($category = mysqli_fetch_array($vegetable20, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php
                                        endwhile;
                                        ?>
                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="vegetable_qty_20">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="btn-group dropright">
                                    <select class="form-control form-control-sm" name="Fruit_20">
                                        <?php
                                        while ($category = mysqli_fetch_array($Fruit20, MYSQLI_ASSOC)) :;
                                        ?>
                                            <option value="<?php echo $category["ItemCode"]; ?>">
                                                <?php echo $category["EnglishName"]; ?> / <?php echo $category["MarathiName"]; ?>
                                            </option>
                                        <?php endwhile; ?>

                                    </select>&nbsp;
                                    <select class="form-control form-control-sm" name="FruitQuantity20">
                                        <option value="0">0</option>
                                        <option value="0.25">0.25</option>
                                        <option value="0.5">0.5</option>
                                        <option value="1">1</option>
                                        <option value="1.5">1.5</option>
                                        <option value="2">2</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </td>
                            <td>

                            </td>
                        </tr>



                    </tbody>
                </table>

            </div>
            <div class="container">
                <div style="align-self: center;">
                    <button type="submit" name="submit" id="submit" class="btn btn-success" style="align-self: center;">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>
<script>
    var date = new Date();
    var year = date.getFullYear();
    var month = String(date.getMonth() + 1).padStart(2, '0');
    var todayDate = String(date.getDate()).padStart(2, '0');
    var datePattern = year + '-' + month + '-' + todayDate;
    document.getElementById("DeliveryDate").value = datePattern;
</script>

</html>