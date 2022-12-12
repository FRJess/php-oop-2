<?php
//var_dump($movies);
?>

<body>

  <main>

    <div class="container jt-container py-5">

      <h3 class="text-center text-success py-2">Cibo per cani e gatti</h3>
      <div class="row row-cols-1 row-cols-md-2 g-4 py-2">

      <?php foreach($food_products as $product): ?>
        
        <div class="col">
          <div class="card jt-card text-bg-light border-dark h-100">
            
            <div class="card-header">
        
              <h5><?php echo $product->name . ' (' . $product->brand . ')'?></h5>
              <h6><?php echo $product->id ?></h6>
            </div>
              
              <div class="card-body">
              <span class="badge text-bg-success position-absolute top-0 end-0 m-1"><?php echo $product->category->name ?></span>
              <p>Ingredienti: <?php echo $product->ingredients ?></p>
              <p>Sapore: <?php echo $product->taste ?></p>
              <p>Peso: <?php echo $product->weight . 'kg' ?></p>
              
            </div>
            <div class="card-footer text-center">
              <div class="text-warning fw-bold"><?php echo $product->price ?>&euro;</div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
      </div>

      <h3 class="text-center text-primary py-4">Giocattoli per cani e gatti</h3>
      <div class="row row-cols-1 row-cols-md-2 g-4 py-2">

      <?php foreach($toy_products as $product): ?>
        
        <div class="col">
          <div class="card jt-card text-bg-light border-dark h-100">
            
            <div class="card-header">
              <h5 class=""><?php echo $product->name . ' (' . $product->brand . ')'?></h5>
              <h6 class=""><?php echo $product->id ?></h6>
            </div>
              
              <div class="card-body">
              <span class="badge text-bg-primary position-absolute top-0 end-0 m-1"><?php echo $product->category->name ?></span>
              <p class="">Ideale per: <?php echo $product->feature ?></p>
              <p class="">Taglia: <?php echo $product->size ?></p>
              
            </div>
            <div class="card-footer text-center">
              <div class="text-warning fw-bold"><?php echo $product->price ?>&euro;</div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
      </div>

      <h3 class="text-center text-info py-4">Accessori per cani e gatti</h3>
      <div class="row row-cols-1 row-cols-md-2 g-4 py-2">

      <?php foreach($accessory_products as $product): ?>
        
        <div class="col">
          <div class="card jt-card text-bg-light border-dark h-100">
            
            <div class="card-header">
              <h5 class=""><?php echo $product->name . ' (' . $product->brand . ')'?></h5>
              <h6 class=""><?php echo $product->id ?></h6>
            </div>
              
              <div class="card-body">
              <span class="badge text-bg-info position-absolute top-0 end-0 m-1"><?php echo $product->category->name ?></span>
              <p class="">Materiale: <?php echo $product->material ?></p>
              <p class="">Taglia: <?php echo $product->size ?></p>
              
            </div>
            <div class="card-footer text-center">
              <div class="text-warning fw-bold"><?php echo $product->price ?>&euro;</div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
      </div>

    </div>

  </main>

</body>