<?php

include '../vendor/autoload.php';

use FNVi\Forms\Collections\Forms;

$forms = new Forms();

$form = $forms->findOne([]);

$out = $form->getActivities();

echo get_class($out);

echo "<pre>".json_encode(iterator_to_array($out),128)."</pre>";