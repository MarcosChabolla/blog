<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css" >
    <title>Alpha Blog - Bootstrap Theme</title>

</head>
<body>

<div class="links">
<div class="header">
  <div class="content">
    <div class="title m-b-md">
        <a href="{{ url('/') }}">Development Hill</a>
    </div>

    <div class="links">
        <a href="{{ url('/resume') }}">Resume</a>
        <a href="{{ url('/aboutme') }}">About Me</a>
        <a href="https://github.com/MarcosChabolla">GitHub</a>
    </div>
  </div>
</div>
</div>

<div class="container">
  <div class="row row-centered">
  <div class="col-sm-7 mx-auto">
        <div class="card">
          <h2>20 Questions to Practice for a Tech Interview</h2>
          <h5>May 6, 2018</h5>
          <hr>
          <!-- <div class="fakeimg" style="height:200px;">Image</div> -->
            <h1>Fundamentals</h1>
            <p>
            1. What is Object Oriented Programming?</p><p>
            Object Oriented Programming is a programming paradigm based on the concept of objects, which can contain variables and methods.
            </p>
            <p>
            2. What is a pointer?</p><p>
            A pointer points to another value stored elsewhere in memory using its memory address.
            </p><p>
            3. What does it mean to pass by reference?</p><p>
            When a parameter is passed by reference both the caller and callee of the function use the same variable value.
            </p><p>
            4. What does it mean to pass by value?</p><p>
            When a parameter is passed by value, the caller and callee of the function use two independent variables with the same value.
            </p><p>
            5. Whats the difference between compile time and runtime?</p><p>
            <i>Compile time</i> is when code is broken down into assembly before the application runs.
            </p><p>
            <i>Runtime</i>
            is when the application or code is actually running. <br>
              Method overriding is an example of dynamic or runtime polymorphism.
            </p><p>
            6. What's the difference between a method and a function?</p><p>
            A Method act on an object.
            A Function act independent of an object.
            </p><p>
            7. What is a virtual function?</p><p>
            A virtual function is a declared function without a body that must be implemented in any subclasses to be used.
            </p><p>
            8. TIP: Abstract classes in C++ and Java cannot have an instance of the object instantiated, only subclasses can instantiate an instance of an abstract class object.
            </p><p>
            9. What is an Interface?</p><p>
            An interface is a collection of abstract classes to be inherited.
            </p><p>
            10. What's the difference between objects being implicitly vs explicitly passed? </p><p>
            Explicitly passed means that the object itself was referenced in the parameter, often by the keyword self.</p><p>
            Implicitly passed means that the object was not referenced as a parameter but could still operate.
            </p><p>
            11. What is Encapsulation?</p><p>
            Encapsulation is the wrapping of variables and methods within a class to hide the internal state of an object.
            </p><p>
            12. What is Polymorphism?</p><p>
            Polymorphism means to process objects differently based on their data type...</p><p>
              Method overloading: Method overloading is in the same class, where more than one method has the same name but different signatures. Ad-hoc polymorphism.</p><p>
                </p><p>
              Method overriding: Redefining a super class method in a sub class, method signature (i.e. method name, parameter list, and return type) must match. </p><p>
                Overridden method can widen the accessibility but not narrow it as well as change what the method does (ex. if it is private in the base class it can be made public in a child class)
            </p><p>
            13. What is Inheritance? </p><p>
            Inheritance is a mechanism where you can derive a class from another class for a hierarchy of classes that can share the same attributes and methods.
            </p>
            <h1>MYSQL</h1>
            <p>
            14. What is a foreign key? </p><p>
            Foreign Keys allow you to cross reference related data across tables.
              Foreign keys involve a parent table and a child table.
            </p><p>
            15. What is Left, Right, and Inner join? </p><p>
            Left join returns all records from the left table and the matched records from the right table.
            Right join returns all records from th eright table and the matched records from the left.
            Inner Join returns all matching records from both table A and B. 
            </p><p>
            16. How do you create an alias in MySQL? </p><p>
            Ex.
            List of all orders and total order values (alias t)
            <br><code><pre>
(
  SELECT<
    order_id, SUM(purchase_price * quantity) AS total
  FROM 
    products_to_orders 
  GROUP BY order_id 
) AS t
          </pre></code>
            </p><p>
            17. What is an Alias in MYSQL? </p><p>
              Aliases allow you to treat multiple columns and quantities of those as a unit.
            </p><p>
            18. MySQL Supported data types: </p><p>
            TINYINT, SMALLINT, MEDIUMINT, INT, and BIGINT
            FLOAT, DOUBLE
            DATE, DATETIME, TIMESTAMP
            CHAR, VARCHAR
            TEXT, BLOB
            ENUM
            </p><p>
            19. How do you store currency information in MYSQL? </p><p>
            Store currency information as INTEGERS because FLOAT's can lead to rounding errors
            </p><p>
            20. Aggregate Functions:</p><p>
            SUM() - calculate various rows of data to find meaningful patterns and trends
            AVG() - Used to find averages over large quantities of data
            COUNT() - Used to count rows; particularly useful for aggregating quantity information
            MAX()/MIN()
            UNION() - combines the content of two or more tables into one larger table.
            </p>

            <p><h1>
            PHP
            </h1></p><p>
            What do I like about php?</p><p>
              It sucks. But you might be asked this question about any language you're looking for a job in. Have something prepared for this question. But here's why php sucks.</p><p>

              Integer Overflows are handled by converting the value to a float, with no easy way of detecting the overflows. To deal with numbers larger than signed 32bit integers are required to use a 3rd party library.</p><p>

              Use the (===) Operator for type and value for everything except classes</p><p>
              using (==) can be a security risk because the equality operator (==) operates stupidly:</p><p>
              If you compare a number with a string or the comparison involves numerical strings, then each string is converted to a number and the comparison performed numerically. These rules also apply to the switch statement</p><p>
              ex.</p><p>
              Boolean value true is equals to the string "foobar" while "foobar" is equals to 0 yet 0 is not equal to true. Super inconsistent
              There is not equivalent >/<== operators</p><p>

              Naming conventions of PHP library functions:</p><p>
              <h1>Inconsistency</h1></p><p>
              strlen / str_pad, urlencode / utf8_encode, gethostname / php_uname</p><p>

              Some string functions start with "str", not all of them do though:</p><p>
              trim, substr, chr, levenshtein, gethostname, php_uname</p><p>

              Numerous functions with the same name:</p><p>
              chop / rtrim, fwrite / fputs, is_integer / is_int</p><p>

              Use the (==) Operator with objects, it will compare value and types of all member variables.</p>
        </div>
     
   <!--  <div class="card">
      <h2>TITLE HEADING</h2>
      <h5>Title description, Sep 2, 2017</h5>
      <div class="fakeimg" style="height:200px;">Image</div>
      <p>Some text..</p>
    </div> -->
    </div> 
</div>

</body>
</html>