<?php
include '../vendor/autoload.php';

use FNVi\Forms\Schemas\Form;
use FNVi\Forms\Collections\Forms;
use FNVi\Forms\Schemas\Section;
use FNVi\Forms\Schemas\Activity;

$args = [
    "name"=>FILTER_SANITIZE_STRING,
    "title"=>FILTER_SANITIZE_STRING,
    "sectioncount"=>FILTER_VALIDATE_INT,
    "activitiesmin"=>FILTER_VALIDATE_INT,
    "activitiesmax"=>FILTER_VALIDATE_INT
];

$post_vars = filter_input_array(INPUT_POST, $args);


$formCollection = new Forms();
$formCount = $formCollection->count([]) + 1;
$form = new Form($post_vars["name"], $post_vars["title"]);

for($s = 0; $s < $post_vars["sectioncount"]; $s++){
    $section = new Section("Section $s");
    
    for($a = 0; $a < rand($post_vars["activitiesmin"], $post_vars["activitiesmax"]); $a++){
//        $activity = new Activity("Activity description $a");
        
        $section->activities[] = new Activity("Activity description $a");
    }
    $form->sections[] = $section;
}

$formCollection->insertOne($form);

header('Location: index.php');