<?php
    // Strings
    $name = "Your Name"; // We define a variable and assign the value "Your Name" to it.
    $food = "Pizza";
    $email = "fake@email.com";

    // Integers
    $age = 15; // We define a variable and assign a whole number to it, in this case 15.
    $onlineUsers = 2;
    $quantity = 4;
    $tax_rate = 5.1;

    // Floats
    $gpa = 2.5; // We define a variable and assign a decimal number to it.
    $price = 5.99;

    $employed = false; // We define a variable and assign a value to it, the value may either be "true" or "false".
    $online = true;
    $for_sale = false;

    $total = null;

    echo "You have ordered {$quantity} x {$food}s <br>";
    $total = $quantity * $price;
    echo "Your total is \${$total}";