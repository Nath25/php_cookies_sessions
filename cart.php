<?php 
  session_start();
  require 'inc/head.php'; 
?>
<section class="cookies container-fluid">
    <div class="row">
      TODO : Display shopping cart items from $_SESSION here.
      <table>
        <tbody>
          <tr style ="border: thin solid">

              <td style ="border: thin solid">Product</td>
              <td>Quantity</td>
          </tr>
          <?php
          foreach ($_SESSION['panier'] as $cle => $panier) { ?>
        
            <tr>
                <td style ="border: thin solid"><?=$panier['article'] ?></td>
                
                <td style ="border: thin solid"><?=$panier['qte']?></td>
            </tr>
        <?php    
        }
        ?>
      </tbody>
      </table>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
