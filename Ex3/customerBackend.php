<?php
    echo "<link rel='stylesheet' type='text/css' href='style.css'/>";

    $user = $_POST["username"];
    $pass = $_POST["password"];
    $numatla = $_POST["atlaQ"];
    $numlok = $_POST["lokQ"];
    $numto = $_POST["toQ"];
    $shipping = $_POST["shipping"];
    $atlaPrice = 24.99;
    $lokPrice = 32.99;
    $toPrice = 111.99;
    $shippingPrice = 0;
    $total = ($numatla * $atlaPrice) + ($numlok * $lokPrice) + ($numto * $toPrice);


    if($shipping == "Free Shipping")
    {
        $shippingPrice = 0;
    }
    else if($shipping == "Overnight Shipping")
    {
        $shippingPrice = 50;
    }
    else if($shipping == "3 Day Shipping")
    {
        $shippingPrice = 5;
    }

    echo "<h3>Your User/Email is " . $user . ".<h3>";
    echo "<h3>For shipping, you selected: " . $shipping . ".<h3><br>";
    echo "<div class='order'>";
    echo "<table>";
    echo "<tr><th></th><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
    echo "<tr><th>Avatar: The Last Airbender</th><td>" . $numatla . "</td><td>$" . $atlaPrice . "</td><td>$" . $numatla * $atlaPrice ."</td></tr>";
    echo "<tr><th>Legend of Korra</th><td>" . $numlok . "</td><td>$" . $lokPrice . "</td><td>$" . $numlok * $lokPrice ."</td></tr>";
    echo "<tr><th>The Office</th><td>". $numto . "</td><td>$". $toPrice ."</td><td>$" . $numto * $toPrice . "</td></tr>";
    echo "<tr><th>Shipping</th><td colspan='2'>" . $shipping . "</td><td>$". $shippingPrice .".00</td></tr>";
    echo "<tr><th colspan ='3'>Total Cost</th><th>$". ($total + $shippingPrice) ."</th></tr>";
?>