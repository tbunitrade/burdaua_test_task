<?php include_once('header.php') ?>
<div class="taskDesk task10">
    <p class="title">

        11. What is Dependency Injection?
              
    </p>
    <p class="title">
        Answer: 
    </p>
    <p class="description">
        
        
        Inversion of Control Containers and the Dependency Injection Pattern is an excellent tool for developing supported and tested code. <br>        
        Dependency injection is an object configuration style in which the object fields are specified by an external entity. In other words, objects are configured by external objects. DI is an alternative to self-tuning objects.<br>
        To implement loosely coupled architecture. To get more testable, accompanied and extensible code;
        Also Factory Method, Service Locator same dependency for IoC.
        <br><br>In case Doctrine2 ORM, next sample
    </p>

    <pre>
        namespace DesignPatterns\Structural\DependencyInjection;

        class DatabaseConfiguration

        //
        namespace DesignPatterns\Structural\DependencyInjection;

        class DatabaseConnection
       
        //

        namespace DesignPatterns\Structural\DependencyInjection\Tests;

        use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
        use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
        use PHPUnit\Framework\TestCase;
    
        class DependencyInjectionTest extends TestCase

        //

        class MyController { 
            function __construct(Connection $connection) { 
                ... 
            } 
        }
            
        </pre>

</div>
    
</body>
</html>