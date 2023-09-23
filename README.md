## PHP Handbook 
by [Alex](https://alxzr.cloud/)

--- 

### Links

- [Comments](#comments)
  - [inline comments](#inline-comment)
  - [multiline comments](#multiline-comment)
- [Variables and Datatypes](#variables-and-datatypes)
  - [Strings](#strings)
  - [Integers](#integers)
  - [Floats](#floats)
  - [Booleans](#booleans)

### Comments

In programming, comments are commonly used to document your code. Comments will be ignored by php, and will thus not be ran.

###### Inline-comment
Inline comments are commonly used for a short comment that won't take up too much space.

```php
// This is a inline-comment.
```

###### Multiline comment
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

Strings can also contain numbers, but beware, these numbers are looked at as characters, they cannot be used for calculations or such.

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