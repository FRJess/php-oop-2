<?php

$categories = [
  'cane' => new Category('Cane','<i class="fa-solid fa-dog"></i>'),
  'gatto' => new Category('Gatto','<i class="fa-solid fa-cat"></i>'),
  'pesce' => new Category('Pesce','<i class="fa-solid fa-fish"></i>'),
  'ucello' => new Category('Ucello','<i class="fa-solid fa-dove"></i>'),
];

$products = [
  new Food(3001, 'Natural', 'Trainer', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/natural/trainer/light/in/fat/mini/adult/con/tacchino/2/800/nuovo_progetto_32__2.jpg', $categories['cane'], true, 20, 7, ['carne, yucca, spirulina', 'tacchino'], 'tacchino'),
  new Food(3002, 'Hypoallergenic', 'Exlcusion', 79.99, 'https://shop-cdn-m.mediazs.com/bilder/exclusion/diet/hypoallergenic/pesce/patate/crocchette/per/cani/3/400/icon_topseller_1_2022_03_09t122529_207_3.jpg', $categories['cane'], true, 10, 12, ['patate, pesce, olio di girasole'], 'pesce'),
  new Food(3003, 'Science Plan', 'Hill\'s', 51.99,'https://shop-cdn-m.mediazs.com/bilder/hills/science/plan/adult/medium/con/agnello/e/riso/2/400/nuovo_progetto_2022_07_19t144419_721_2.jpg', $categories['cane'], true, 10, 12, ['mais, frumento, farina di pollo, semi di lino'], 'pollo'),
  new Food(3004, 'HFC', 'Almo Nature', 8.98,'https://shop-cdn-m.mediazs.com/bilder/almo/nature/hfc/adult/sterilised/pollo/fresco/crocchette/per/gatti/8/400/288355_pla_almonature_hfc_adult_sterilized_huhn_300g_hs_01_8.jpg', $categories['gatto'], true, 10, 12, ['pollo fresco, piselli, polpa di barbabietola '], 'pollo'),
  new Toy(1001, 'Osso Grosso', 'PlayDog',  8.29, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/nylabone/osso/annodato/al/gusto/di/manzo/1/400/225398_pla_nylabone_rohhautknochen_rindfleischgeschmack_hs_04_1.jpg', $categories['cane'], true, 4, 'masticazione', 'M'),
  new Toy(1002, 'Elefantina', 'Elma', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/elma/in/lattice/7/400/249596_elma_fg_1828_7.jpg', $categories['cane'], true, 2, 'masticazione', 'S'),
  new Toy(1003, 'Corda', 'Limoen', 2.99, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/limoen/osso/8/400/217894_pla_limoen_bone_fg_0038_8.jpg', $categories['cane'], true, 8, 'masticazione', 'M' ),
  new Toy(1004, 'Turning Feather', 'Trixie', 15.29, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/gatti/trixie/turning/feather/8/400/74762_pla_trixie_katzenspielzeug_turning_feather_grau_hs_05_8.jpg', $categories['gatto'], false, 0,'stimolazione', '/'),
  new Accessory(2001, 'Collare', 'Trixie', 9.99, 'https://shop-cdn-m.mediazs.com/bilder/collare/per/gatti/my/home/5/400/icon_topseller_1_2021_12_23t163010_904_5.jpg', $categories['gatto'], true, 20, 'nylon', 'S' ),
  new Accessory(2001, 'Ciotola', 'Savic', 5.49, 'https://shop-cdn-m.mediazs.com/bilder/doppia/ciotola/savic/delice/double/marble/7/400/252331_pla_savic_futternapf_delice_doublemarble_hs_01_7.jpg', $categories['gatto'], true, 14, 'plastica', '200ml' ),
  new Accessory(2001, 'Pettorina', 'Julius', 39.99, 'https://shop-cdn-m.mediazs.com/bilder/pettorina/juliusk/power/antracite/8/400/69285_pla_julius_k9_powergeschirr_anthrazit_hs_01_8.jpg', $categories['cane'], true, 4, 'poliestere, cotone', 'M'),
  new Accessory(2001, 'Cuscino Be Nordic', 'Trixie', 80.99, 'https://shop-cdn-m.mediazs.com/bilder/cuscino/per/cani/trixie/fhr/be/nordic/0/400/211498_211499_pla_trixie_benordic_kissen_foehr_hs_01_0.jpg', $categories['cane'], true, 1, 'poliestere, cotone', '/'),
];

foreach ($products as $product){
  $product->setDiscount(0);
}

$products[0]->setDiscount(20);
$products[1]->setDiscount(2);
$products[3]->setDiscount(5);
$products[4]->setDiscount(1);

$users = [
  new User('Ilaria', 'Rossi', 40),
  new User('Jessica', 'Verde', 30),
  new User('Fabio', 'Bianchi', 70),
];

$orders = [
  new Order($users[0], [$products[0],$products[3],$products[7]], date('d/m/Y')),
  new Order($users[1], [$products[1],$products[2],$products[6]], date('d/m/Y')),
  // new Order($users[2], [$products[3],$products[6],$products[7]], date('d/m/Y')),
];