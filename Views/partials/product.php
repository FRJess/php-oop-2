<?php
//var_dump($movies);
?>

<body>

  <main>

  <div class="container">

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 py-5">

    <?php foreach($food_products as $product): ?>
      
      <div class="col">
        <div class="card jt-card text-bg-light border-success h-100">
          
          <div class="card-header">
            <h5 class=""><?php echo $product->name . ' (' . $product->brand . ')'?></h5>
            <h6 class=""><?php echo $product->id ?></h6>
          </div>
            
            <div class="card-body">
            <span class="badge text-bg-success position-absolute top-0 end-0 m-1"><?php echo $product->category->name ?></span>
            <p class="">Ingredienti: <?php echo $product->ingredients ?></p>
            <p class="">Sapore: <?php echo $product->taste ?></p>
            <p class="">Peso: <?php echo $product->weight . 'kg' ?></p>
              <p class="">Prezzo: <?php echo $product->price . '€'  ?></p>

            </div>
        </div>
      </div>

    <?php endforeach; ?>
 

    </div>

  </div>

  </main>

</body>