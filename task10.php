<?php include_once('header.php') ?>
<div class="taskDesk task10">
    <p class="title">

        10. What will be the effect of the following code?
        <pre>
            $message = 'hello';
            $example = function () {
                var_dump($message);
            };
            $example();
        </pre>

        Answer Null;

    </p>
   <?php 

    $message = 'hello null';
    $example = function () {
        var_dump($message);
    };
    $example();
    echo '<br> need to add use <br> ';
    
    $message = 'function need use value';
    $example = function () use ($message) {
    var_dump($message);
    };
    $example();
    echo '<br> or send data in function <br> ';
    $message = 'hello last';
    $example = function ($msg) {
    var_dump($msg);
    };
    $example($message);

   ?>

<p class="title">


<pre>
    $message = 'function need use value';
    $example = function () use ($message) {
    var_dump($message);
    };
    $example();
</pre>



</p>

</div>
    
</body>
</html>