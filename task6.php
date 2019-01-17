<?php include_once('header.php') ?>
<div class="taskDesk task2-6">
    <p class="title">
        2. What is indexing in tables for and what are its advantages / disadvantages?
    </p>
    <p class="description">
        
        <strong>advantages </strong><br>
        1 Fast search, speeds up the selection.<br>
        2 An index is a data structure that is created next to a table and supports itself when the table changes.
        <br><br>
        <strong>disadvantages</strong><br>
        1 They are not setup by default; <br>   
        2 Occupy space when indexes are misused. if you index each column in a large table, the storage needed to store the indexes will greatly exceed the size of the table itself.<br>
        3 It slows down inserts, updates, and deletes, because the database engine does not need to write only the data, but also the index. The index requires hard disk space (and more importantly) in RAM. An index that cannot be kept in RAM is useless. An index in a column with multiple values ​​does not speed up the selection, because it cannot sort many rows (for example, the gender column, which usually has only two different values ​​— man, woman).   
    </p>

    <p class="title">
        3. What are magic methods in PHP?
    </p>
    <p class="description">          
        All list of 15th methods. No magic only methods if we use __ prefix. We use this methods for all Objects that we used in this Class.
        <br>   
        sample : 
    </p>
        <pre> 
            class  Magic
            {//psr
                public function __construct() {
                echo ‘ new magic 3.1’ ;
            }
        </pre>
    <p class="deastiption">    
        <strong> 3.1 prefix</strong>   __ and function name like  construct() { ‘’ }<br>
        In each lang if JS or PHP we should create some statements.<br> 
        $magic = new magic();
        <br><br>
        <strong>3.2</strong>  If we call object as function so should use method __invoke() 
        This method work in object created. So in end of text document, we should init it. 
        magic();<br>
        public function __invoke() { echo ‘type 3.2’;}<br>    
        <strong>3.3</strong> if this if string  so we call methods __toString()
        echo $magic;<br>    
        public function __toString() { echo ‘Last magic 3.3’;}   

    </p>
    <p class="title">
        4. What is the PSR?
    </p>
    <p class="description">
        PSR is about 15 rules, this is coding style guide, this is a basic rules for formatted php code.
        My psr that i try to use : 0,2,4
    </p>
    <p class="title">
        5. What are the differences between the interface and the abstract class?
    </p>
    <p class="description">
        When extending interface you need to implement all it's methods. <br>
        When inheriting from abstract class subclass must implement only the abstract methods. <br>
        If needed, other methods can be overrided, but this is not necessary.<br>
        A class can implement multiple interfaces, but inherit only from one abstract class.
    </p>
    <p class="title">
        6. List and discuss 3 design patterns.
    </p>
    <p class="description">
        Main idea of using patterns is set the best architecture for future product.
        <br><br>
        1) Prototype pattern php - if class instances can be in one of a small number of initial 
        states, and creating new objects is often necessary based on them, this reduces the amount 
        of written code. This pattern belong to the class of generating patterns. It is used to specify the type of objects created on the basis of the prototype object, from which the internal state is transferred. 
        It is akin to the factory method*.
        <br>
        *Factory Method - belong to the class of generating patterns. They are used to define and maintain relationships between objects. Factory methods eliminate the need for the designer to embed application-dependent classes into the code.
        <br><br>
        2) Singleton pattern PHP - belong to the class of generating patterns. 
        It is used to create only one instance of a class, and ensures that during the program 
        does not appear the second. For example, in the MVC scheme, often this pattern is used 
        to generate the main controller (front-line). At the first call to the getInstance function,
         an object will be created, which, subsequently, will be given to everyone. 
         Since the creation of other means is not possible, this ensures the presence of only 
         one instance of the class;
        <br><br>
        3) Adapter on PHP  - belong to the class of structural patterns. A dapter can adapt to 
        several interfaces at once, such a pattern is called an object adapter. The use of this
         pattern is justified in several cases. If you want to use an existing class with a 
         different interface. If you are going to use the adaptable interface in several places, 
         and you do not have the opportunity to bring a single view everywhere, then the use of 
         interchangeable adapters may be a good idea;
        <br><br>        
    </p>
</div>
    
</body>
</html>