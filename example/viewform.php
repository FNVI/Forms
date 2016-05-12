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
            
            $name = filter_input(INPUT_GET, "name");
            
            $forms = new Forms();
            $form = $forms->findOne(["name"=>$name]);
            
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
                    <div class="panel panel-primary">
                        <header class="panel-heading">
                            <?php echo $form->name . " : " . $form->title; ?>
                        </header>
                            <section class="panel-body">
                                <div class="panel-group" id="accordion">
                                    <?php foreach($form->sections as $s => $section){ ?>
                                        <div class="panel panel-default">
                                            <header class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#section<?php echo $s;?>" data-toggle="collapse" data-parent="#accordion" role="button">
                                                        <?php echo $section->title; ?>
                                                    </a>
                                                </h4>
                                            </header>
                                            <section class="panel-collapse collapse" role="tabpanel" id="section<?php echo $s;?>">
                                                <ul class="list-group">
                                                    <?php foreach($section->activities as $activity){ ?>
                                                        <li class="list-group-item">
                                                            <?php echo $activity->description; ?>
                                                        </li>
                                                    <?php } ?>
                                                </ul>
                                            </section>
                                        </div>
                                    <?php } ?>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
