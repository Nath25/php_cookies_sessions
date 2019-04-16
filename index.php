<?php 
  session_start();
 
  require 'inc/head.php'; 
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    //echo 'passag' ;

    if (isset($_GET ['add_to_cart']) && !empty($_GET["add_to_cart"])) {
      $article = 'Pecan nuts';
      if ($_GET ['add_to_cart'] == 36) {
        $article = 'Chocolate chips';
      }
      if ($_GET ['add_to_cart'] == 58) {
        $article = 'Chocolate chips';
      }
      if ($_GET ['add_to_cart'] == 32) {
        $article =  "M&M's&copy; cookies";
      }
       
          
      if (array_key_exists($_GET ['add_to_cart'], $_SESSION['panier'])) {
        $_SESSION['panier'][$_GET ['add_to_cart']]['qte']+= 1;
      }
      else {
        $_SESSION['panier'][$_GET ['add_to_cart']]=array('article' => $article, 'qte' => 1);
      }
      
             
        
    }
    
    
  }
?>
<section class="cookies container-fluid">
  
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <h3>Pecan nuts</h3>
            <p>Cooked by Penny !</p>
            <a  href="?add_to_cart=46" class="btn btn-primary" >
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </a>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <h3>Chocolate chips</h3>
            <p>Cooked by Bernadette !</p>
            <a  href="?add_to_cart=36" class="btn btn-primary" >
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </a>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <h3>Chocolate cookie</h3>
            <p>Cooked by Bernadette !</p>
            <a  href="?add_to_cart=58" class="btn btn-primary" >
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </a>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
          <figcaption class="caption">
            <h3>M&M's&copy; cookies</h3>
            <p>Cooked by Penny !</p>
            <a  href="?add_to_cart=32" class="btn btn-primary" >
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
            </a>
          </figcaption>
        </figure>
      </div>
    </div>
  
</section>
<?php require 'inc/foot.php'; ?>
