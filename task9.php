<?php include_once('header.php') ?>
<div class="taskDesk task10">
    <p class="title">
        9. There are classes A and B. <br>
            B inherits from A and uses trait C.<br>
            In class A and in <strong>trait</strong> C the getList () method is implemented. 
    </p>
        <pre>
            class A {
                public function getList(){
                    echo ul;
                }
            }

            class B extends A {
                use Cclass;
            }

            trait C {
                public function getList(){
                    parent::getList();            
                    echo li->my list;
                }
            } 

            $obj = new B();
            $obj->getList();
        </pre>
    <p class="title">
        Answer : low priority ;
    </p>
    
   <?php
        class A 
        {
            public function getList()
            {
                echo '<ul>';
            }
        }

        class B extends A 
        {
            use C;
        }

        trait C 
        {
            public function getList()
            {
                parent::getList();            
                echo '<li>my list</li>';
            }
        } 

        $obj = new B();
        $obj->getList();
    ?>

</div>
    
</body>
</html>