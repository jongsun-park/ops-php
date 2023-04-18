<?php
declare(strict_types = 1);                   // Use strict types
include '../src/bootstrap.php';              // Setup file

$table = filter_input(INPUT_GET, 'q') ?? ''; // GET TABLE NAME
$type  = $_POST['t'] ?? $_GET['t'] ?? ''; // GET REQUEST TYPE
$id = $_POST['id'] ?? $_GET['id'] ?? '';                    // GET ID FOR FORM
$name = $_POST['name'] ?? '';                // GET NAME FOR FORM
$data = [];
$errors = [];

// UPDATE OPTION
if($type === 'update' && isset($id) && isset($name)){
  // echo "update";
  // var_dump($_POST);
  $result = $cms->getOption()->update($table, $id, $name);
  if(!$result) $errors[] = "Sorry, failed to update option, please try again";
}

// DELETE OPTION
if($type === 'delete' && isset($id)){
  // echo "delete";
  // var_dump($_POST);
  $result = $cms->getOption()->delete($table, $id);
  if(!$result) $errors[] = "Sorry, failed to delete option, please try again";
}

// CREATE OPTION
if($type === 'create' && isset($name)){
  // echo "create";
  $arguments = $_POST;
  unset($arguments['t']);
  // var_dump($arguments);

  $result = $cms->getOption()->create($table, $arguments);
  if(!$result) $errors[] = "Duplicate option - Please add different option name";
}

if (!$table) {                                              
  // TABLE IS NOT SELECTED
  // SHOW OPTION TABLE LIST
  $data["info"] = 'No table selected';
  echo $twig->render('option.html', $data);     

} elseif ($table === 'wash_option'){

  $rows = $cms->getOption()->getAll($table);
  $fields = array_keys($rows[0]) ?? [];
  
  $data['table']   = $table ?? ''; 
  $data['title']   = getBetterName($table) ?? ''; 
  $data['options'] = $rows  ?? [];
  $data['errors'] = $errors;

  $fields = $rows[0];
  unset($fields['id']);
  $fields = array_keys($fields);
  $fields = array_map(function($key){ return [$key, getBetterName($key)];}, $fields);
  // var_dump($fields);

  $data['fields'] = $fields;

  echo $twig->render('wash_option.html', $data);
  
}else{
  // IF TABLE IS SELECTED
  // GET ROWS
  $rows = $cms->getOption()->getAll($table);
  $data['table']   = $table ?? ''; 
  $data['title']   = getBetterName($table) ?? ''; 
  $data['options'] = $rows  ?? [];
  $data['errors'] = $errors;

  echo $twig->render('option.html', $data); // Render template
}



