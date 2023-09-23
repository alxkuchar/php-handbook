## PHP Handbook 



### Links

- [Comments](#comments)
  - [inline comments](#inline-comment)
  - [multiline comments](#multiline-comment)
- [Variables and Datatypes](#variables-and-datatypes)
  - [Strings](#strings)
  - [Integers](#integers)
  - [Floats](#floats)
  - [Booleans](#booleans)
- [Arithmetics](#arithmetic)
  - [Arithmetic Operations](#arithmetic-operations)
  - [Increment and Decrement Operators](#increment-and-decrement-operators)
  - [Operator Precedence](#operator-precedence)
- [$_GET and $_POST](#get-and-post)
- [Mathematical Functions](#mathematical-functions)
  - [abs](#absolute-number)
  - [round](#round)
  - [floor](#floor)
  - [ceil](#ceil)
  - [sqrt](#sqrt)
  - [pow](#pow)
  - [max](#max)
  - [min](#min)
  - [pi](#pi)
  - [rand](#rand)
- [if statements](#if-statements)

### Comments

In programming, comments are commonly used to document your code. Comments will be ignored by php, and will thus not be ran.

#### Inline-comment
Inline comments are frequently used for a short comment that won't take up too much space.

```php
// This is a inline-comment.
```

#### Multiline comment
Multiline comments are used for more complex documentations.
```php
/*
 * This is a
 * multiline comment.
 * */
```


### Variables and Datatypes

#### Strings
Strings are data types used for working with text. For example, in PHP, to display the following text, we can use the following code:
```php
$name = "Your Name"; // We define a variable and assign the value "Your Name" to it.
$food = "Pizza";
$email = "fake@email.com";

echo "Hello, {$name}!"; // We include the variable within a text to create the output.
echo "Your food is: {$food}";
echo "Your email is: {$email}";
```

Strings can also contain numbers, but it's important to note that these numbers are treated at as characters, they cannot be used for calculations or such.

#### Integers
Integers are data types used for working with whole numbers, such as 21, 22, 23. In code, a variable containing an integer would look like this:
```php
$age = 15; // Example of an integer variable
```
As a result, the output is: ```15```

#### Floats
Floats are data types used for working with decimal numbers, such as 4.99, 16.99, 24.99. In code, a variable containing a float would look like this:
```php
$price = 4.99;
```

As a result, the output is:
```4.99```

Given the utilization of a price variable in our illustrative example, it is noteworthy to mention that in order to prepend a dollar sign to the variable within an output, you should employ a preceding backslash. For instance:
````php
echo "The price comes out to \${$price};"
````


#### Booleans
Booleans are data types for logical operations, typically used internally, e.g., in an if statement. When echoed, 'true' is 1, but 'false' remains invisible. See the code example below for clarification:
```php
$online = false;
echo "{$online}";
```

In this code snippet, the result remains hidden because the value is 'false.'

```php
$online = true;
echo "{$online}";
```

In contrast, in this scenario, the result will be '1' since the value is 'true.'

### Arithmetic

Arithmetics, at their core, are the basic mathematical operations used for working with numbers. These operations include addition, subtraction, multiplication, and division, and they are essential for performing calculations in math and programming.


#### Arithmetic Operations

In this code snippet below, we perform basic arithmetic operations with variables $x and $y and store the results in $z. These operations include addition, subtraction, multiplication, division, exponentiation, and modulus (remainder). Each operation is explained with an example, demonstrating the resulting value of $z after the operation.
```php
$x = 10; // We set $x to 10.
$y = 2;  // We assign the value 2 to $y.
$z = null; // Initializing $z as null.

// Examples of basic arithmetic operations:
// $z = $x + $y; // Addition: $z becomes 12
// $z = $x - $y; // Subtraction: $z becomes 8
// $z = $x * $y; // Multiplication: $z becomes 20
// $z = $x / $y; // Division: $z becomes 5
// $z = $x ** $y; // Exponentiation: $z becomes 100
// $z = $x % $y; // Modulus (remainder): $z becomes 0
```

#### Increment and Decrement Operators
In programming, increment (++) and decrement (--) operators are handy tools for altering the value of a variable. They increase (++) or decrease (--) the variable by 1, allowing for convenient numeric adjustments in code. These operators are frequently used in loops and other scenarios where variables need to be incremented or decremented during execution. Code example:
```php
$counter = 5;  // Initialize a variable with the value 5.

$counter++;   // Increment by 1. Now $counter is 6.
$counter--;   // Decrement by 1. Now $counter is 5 again.

echo "Counter: $counter"; // Output: Counter: 5
```
#### Operator Precedence
In programming, Operator Precedence determines the order in which operators are evaluated within an expression. It ensures that mathematical operations like multiplication take place before addition, for instance. Understanding operator precedence is crucial to predict how expressions are computed in code.

```php
$result = 10 + 5 * 2; // Here, multiplication (*) takes precedence over addition (+).
echo $result; // Output: 20
```

### Get and Post
$_GET and $_POST are both used to collect data from your html file. While working with $_GET and $_POST can be quite easy, it is important to use them with caution - here are some pro's and con's for $_GET and $_POST

- $_GET
  - Parameters are displayed in the URL
  - Can be bookmarked while keeping the parameters
  - Frequently used for search forms
  - Can be cached
  - Shouldn't be used while working with user credentials

- $_POST
  - Parameters are NOT displayed in the URL
  - Cannot be bookmarked
  - Frequently used for Login, Register and Contact Forms.
  - Cannot be cached

Code example:
```php
$name = $_GET["name"]; // Access the 'name' parameter in the URL.
$email = $_POST["email"]; // Access the 'email' field from a submitted form.
```

It's important to handle submitted data from these arrays with care, as not doing so can lead to security issues like SQL Injections or XSS(Cross-site scripting) attacks. 

### Mathematical Functions
PHP comes with a lot of mathematical functions that make your life easier.

#### Absolute Number
In PHP, the abs() function is used to calculate the absolute value of a number. The absolute value represents the distance of a number from zero, regardless of its sign. Code Example using the function:
```php
$x = $_POST["x"]; // Initialize a variable and set its value using user input.
$total = null; // Initialize $total to store the result.
$total = abs($x); // Calculate the absolute value.
```

For example, if you set 'x' to the value of 5, the absolute value calculated using abs($x) would be 5. The abs() function is helpful for ensuring that you always obtain a positive value, regardless of the input's sign.


#### round
In PHP, the round() function is used to round a number to the nearest whole number. It can round up or down based on the decimal part of the number. Here's how to use the round() function:
```php
$x = $_POST["x"]; // Initialize a variable and set its value using user input.
$total = null; // Initialize $total to store the result.
$total = round($x); // Round the value of '$x'
```

For instance, if the value of ```$x``` is ```4.1```, the round() function will round it down to ```4```


#### floor
In PHP, the floor() function is used to round a number down. It cannot round a number up, no matter how close it is to the next whole number. Here's how to use the floor() function:

```php
$x = $_POST["x"]; // Initialize a variable and set its value using user input.
$total = null; // Initialize $total to store the result.
$total = floor($x); // Round the value of '$x' down.
```

For instance, if the value of `$x` is `4.9`, the floor() function will round it down to `4`.


#### ceil
Just like PHP has a function to always round a decimal number down, it has one to always round the number up. Here's how to use the ceil() function:

```php
$x = $_POST["x"]; // Initialize a variable and set its value using user input.
$total = null; // Initialize $total to store the result.
$total = ceil($x); // Round the value of '$x' up.
```

For instance, if the value of `$x` is `4.1`, the ceil() function will round it up to `5`.

#### sqrt
In PHP, the sqrt() function is used to calculate the square root of a number. Here's how to use the sqrt() function:
```php
$x = $_POST["x"]; // Initialize a variable and set its value using user input.
$total = null; // Initialize $total to store the result.
$total = sqrt($x); // Calculate the square root of '$x' up.
```

For instance, if the user input is `25` the result will be `5`.

#### pow
In PHP, the pow() function is used to calculate the result of a raising number to a specified power. It allows you to perform exponentiation, making it handy for various mathematical and computational tasks. The `pow()` function takes two arguments: the base number and the exponent. It returns the result of raising the base to the power of the exponent. Here's how to use the pow() function:

```php
$x = $_POST["x"]; // Initialize a variable and set its value using user input.
$y = $_POST["y"]; // initialize a variable and set its value using user input. 'y' will be the exponent.
$total = null; // Initialize $total to store the result.

$total = pow($x, $y); /// Calculates '$x' and '$y'.
```

For instance, if `$x` is 2, and `$y` is 3, the result will be `8`.

#### max
In PHP, the max() function is used to get the highest number among multiple values. Code example:
```php
$x = 4; // Initialize a variable and assign a value to it.
$y = 5; // Initialize a variable and assign a value to it.
$z = 1; // Initialize a variable and assign a value to it.
$total = null; // Initialize $total to store the result.

$total = max($x, $y, $z);

echo $total;
```

In this example, the result would be `5`.


#### min
In PHP, the min() function is used to get the lowest number among multiple values. Code example:

```php
$x = 4; // Initialize a variable and assign a value to it.
$y = 5; // Initialize a variable and assign a value to it.
$z = 1; // Initialize a variable and assign a value to it.
$total = null; // Initialize $total to store the result.

$total = max($x, $y, $z);

echo $total;
```

In this example, the result would be `1`.

#### pi
In PHP, the pi() function returns 3.14159265359, as it is pi. Code example:

```php
$total = pi(); // Result would be 3.14159265359.
```

The pi function can be used for more complex mathematical operations, such as calculating the circumference of a circle.

#### rand
In PHP, the rand() function is returns a random number. Not only can it return a random number, but also a random number from two values, say `1` and `100`. Code example:

```php
$total = null;
// $total = rand(); // returns a random number from 1 to 2147483647.
$total = rand(1,100); // returns a random number from 1 to 100.
```

#### if-statements
if statements are used in many programming languages, they are used for operations that are based on a value. Say, you want to create a Website for a Video game that is only allowed to users above the age of 16, you would use an if-statement. Code Example:

```php
$age = $_POST["age"]; // Initialize a variable and set the value using user input.

if($age >= 16) { // >= are the comparison symbols to check if the user is 15 or above. <= would do the complete opposite, thus: check if the user is below 15 or above.
    echo "You may download the game."; // the code entered inside of the curly brackets happens if the user is 15+, in this case it echoes a text.
}else { // the code in this block happens if the user is below the age of 15.
    echo "You need to be 16+ to download the game."; // echoes an error message.
}
```