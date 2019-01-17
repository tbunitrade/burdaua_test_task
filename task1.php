<?php include_once('header.php') ?>
<div class="taskDesk task12">
    <p class="title">
        <strong>1.  there are two tables: 
        product (id, code, price)<br>  
        product_description (id, product_id, lang_id, name, description).  </strong><br>  

        <table style="border:1px solid black;">
        <caption>table product</caption>
        <tr>
            <td>id</td>
            <td>code</td>
            <td>price</td>
        </tr>
        <tr>
            <td>1</td>
            <td>211</td>
            <td>1211</td>
        </tr>
        <tr>
            <td>n</td>
            <td>..</td>
            <td>..</td>
        </tr>
        <tr>
            <td>10</td>
            <td>230</td>
            <td>1225</td>
        </tr>
        </table>

        <table style="border:1px solid black;">
        <caption>table product_description</caption>
        <tr>
            <td>id</td>
            <td>product_id</td>
            <td>lang_id</td>
            <td>name</td>
            <td>description</td>
        </tr>
        <tr>
            <td>1</td>
            <td>221</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>2</td>
            <td>222</td>
            <td>1</td>
            <td>bmv</td>
            <td>used simple car</td>
        </tr>

        <tr>
            <td>3</td>
            <td>223</td>
            <td>6</td>
            <td>bmv</td>
            <td>used simple car</td>
        </tr>

        <tr>
            <td>4</td>
            <td>224</td>
            <td>4</td>
            <td>bmv</td>
            <td>used simple car</td>
        </tr>

        <tr>
            <td>10</td>
            <td>230</td>
            <td>5</td>
            <td>bmv</td>
            <td>used simple car</td>
        </tr>
        </table>

        you should submit queries that: <br>     
        <strong> 1.1  return all products with Polish descriptions (lang_id = 1)</strong>
    <pre>
        $lang_id = 1;
        SELECT * FROM product, product_description [WHERE product.id = product_description.id [ `lang_id` = '$lang_id']]
        
        or

        SELECT product. * FROM product
        JOIN product_description ON product.id = product_description.product_id
        WHERE (lang.id) = 1
        
    </pre>
    <strong>1.2 return products that have more than 5 language versions;</strong>
    <pre>
        SELECT product. * FROM product
        JOIN product_description ON product.id = product_description.product_id
        GROUP BY product_id
        HAVING COUNT (lang.id) > 5

        or

        SELECT * FROM product, product_description [WHERE product.id = product_description.id [ `lang_id` > 5]]
    </pre>
    <strong>1.3 return all products in each language version and those that do not have descriptions created;</strong>
    <pre>                
        SELECT id, name FROM product LEFT JOIN product_description USING(id) WHERE product_description IS NULL;
    </pre>
    <strong>1.4 returns the last 10 products.</strong>
    <pre>
        SELECT * FROM products ORDER BY ID DESC LIMIT 10
    </pre>
    </p>
  


</div>
    
</body>
</html>