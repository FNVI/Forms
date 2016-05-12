<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" type="text/javascript"></script>
            
    </head>
    <body>
        <?php
            include '../vendor/autoload.php';
            
            use FNVi\Forms\Collections\Forms;
            
            $forms = new Forms();
        ?>
         <nav class="navbar navbar-default">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="newform.php">New Form</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="list-group">
                        <?php foreach($forms->find() as $form){ ?>
                            <a href="viewform.php?name=<?php echo $form->name; ?>" class="list-group-item">
                                <?php echo $form->name . " - " . $form->title; ?>
                            </a>
                        <?php } ?>
                        <a href="newform.php" class="list-group-item">
                                Create form
                        </a>
                    </ul>
                </div>
            </div>
        </main>
    </body>
</html>
