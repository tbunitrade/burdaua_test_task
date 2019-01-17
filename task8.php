<?php include_once('header.php') ?>
<div class="taskDesk task10">
    <p class="title">
        8.  Below is the code of the product controller method that returns a list of products from a database in a given category. How would you improve this code?
    </p>
    <pre>
        public function indexProductsAction($c)
        {
            $err = 0;
            if ($c instanceof Category) {
                /** @var EntityRepository $r */
                $r = $this->getDoctrine()->getRepository();
                $p = $r->createQueryBuilder('a')
                    ->where('a.category = :c')
                    ->setParameter('c', $c)
                    ->getQuery()
                    ->getResult();
            } else {
                $err = 1;
            }
            return $this->renderView('template.html.twig', [
                'p' => $p,
                'err' => $err
            ]);
        }

    </pre>
    <p class="title">
        Answer : 1)need to add $p, 2) bad request on error 3) send Category
    </p>
    <pre>
        public function indexProductsAction(Category $c)
        {
        $p;    
        $err = 0;// need correct status
            if ($c instanceof Category) {
                /** @var EntityRepository $r */
                $r = $this->getDoctrine()->getRepository();
                $p = $r->createQueryBuilder('a')
                    ->where('a.category = :c')
                    ->setParameter('c', $c)
                    ->getQuery()
                    ->getResult();
            } else {
                $err = 1;//need more info about this error
            }
            return $this->renderView('template.html.twig', [
                'p' => $p,
                'err' => $err
            ]);
        }
    </pre> 
</div>    
</body>
</html>