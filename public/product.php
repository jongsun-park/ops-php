<?php
declare(strict_types = 1);                                           // Use strict types
include '../src/bootstrap.php';                                      // Setup file

$data = [];
$errors = [];
$info = "";

// UPDATE PRODUCT
if(isset($_POST['id'])){
  $arguments = $_POST;
  $result = $cms->getProduct()->update($arguments);
  if($result){
    $info = "Product udpated";
  }else{
    $errors[] = "Fail to update product, please try it again later";
  } 
}

// DELETE PRODUCT
if(isset($_GET['t']) && $_GET['t'] == "delete" && isset($_GET['id'])){
  // echo "delete";
  // var_dump($_POST);
  $id = $_GET['id'] ?? '';
  $result = $cms->getProduct()->delete($id);
  if(!$result) $errors[] = "Sorry, failed to delete product, please try again";
  header('Location: product.php');

}

// CREATE PRODUCT
if(isset($_POST['t']) && $_POST['t'] == "create"){
  $arguments = $_POST;
  $result = $cms->getProduct()->create($arguments);
  if($result){
    $info = "Product created";
  }else{
    $errors[] = "Fail to create product, please try it again later";
  } 
}

// FETCH PRODUCTS
$products = $cms->getProduct()->getAll() ?? [];
// var_dump($_POST);


// FETCH LINKED TABLE OPTIONS
try{
  $units = $cms->getOption()->getAll('unit');
  $looms = $cms->getOption()->getAll('loom');
  $labels = $cms->getOption()->getAll('label');
  $hem_types = $cms->getOption()->getAll('hem_type');
  $hem_sizes = $cms->getOption()->getAll('hem_size');
  $corners = $cms->getOption()->getAll('corner');
}catch(Exception $e){
  $errors[] = "Fail to fetch options";
}

// NON LINKED TABLE OPTIONS 
$fields = [
  [
    'key' => 'id',
    'label' => 'ID'
  ],
  [
    'key' => 'sku',
    'label' => 'SKU'
  ],
  [
    'key' => 'tf_num',
    'label' => 'TF Number'
  ],
  [
    'key' => 'description',
    'label' => 'Description'
  ],
  [
    'key' => 'divs',
    'label' => 'Dividers'
  ],
  [
    'key' => 'ppcm',
    'label' => 'PPCM'
  ],
  [
    'key' => 'pprepeat',
    'label' => 'PPRepeat'
  ],
  [
    'key' => 'cut_w',
    'label' => 'Cut Width'
  ],
  [
    'key' => 'cut_l',
    'label' => 'Cut Length'
  ],
  [
    'key' => 'finish_w',
    'label' => 'Finish Width'
  ],
  [
    'key' => 'finish_l',
    'label' => 'Finish Length'
  ],
];

// GROUP LINKED TABLE OPTIONS
$selects = [
  [
    "data"  => $units,
    "fk"    => "unit_id",
    "label" => "Unit"
  ],
  [
    "data"  => $looms,
    "fk"    => "loom_id",
    "label" => "Loom"
  ],
  [
    "data"  => $labels,
    "fk"    => "label_id",
    "label" => "Label"
  ],
  [
    "data"  => $hem_types,
    "fk"    => "hem_type_id",
    "label" => "Hem Type"
  ],
  [
    "data"  => $hem_sizes,
    "fk"    => "hem_size_id",
    "label" => "Hem Size"
  ],
  [
    "data"  => $corners,
    "fk"    => "corner_id",
    "label" => "Corner"
  ],
];


// SENDING TABLE FOR TEMPLATE
$data["title"] = "Products";
$data["products"] = $products;
$data['fields'] = $fields;
$data['units'] = $units;
$data['selects'] = $selects;
$data['errors'] = $errors;
$data['info'] = $info;

// RENDER TEMPLATE
echo $twig->render('products.html', $data);                         