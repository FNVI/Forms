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
            $formCount = $forms->count([]) + 1;
            $count = str_pad($formCount, 2,"0",STR_PAD_LEFT);
            $defaultName = "F-$count-A";
            $defaultTitle = "Dummy Form $formCount";
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
                            Create a form
                        </header>
                        <form method="post" action="generatedummyform.php">
                            <section class="panel-body">
                                <div class="form">
                                    <div class="form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $defaultName; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="title">Title:</label>
                                        <input type="text" class="form-control" name="title" id="title" value="<?php echo $defaultTitle; ?>">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-inline">
                                            <div class="form-group">
                                                <label for="sections">Sections:</label>
                                                <input type="number" class="form-control" name="sectioncount" id="sections" value="5" min="1" max="10">
                                            </div>
                                            <div class="form-group">
                                                <label>Minimum activities:</label>
                                                <input type="number" class="form-control" name="activitiesmin" value="10" min="5" max="30">
                                            </div>
                                            <div class="form-group">
                                                <label>Maximum activities:</label>
                                                <input type="number" class="form-control" name="activitiesmax" value="25" min="5" max="40">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <footer class="panel-footer">
                                <button type="submit" class="btn btn-success">Generate</button>
                            </footer>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
