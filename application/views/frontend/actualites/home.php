<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    ACTUALITES
                    <!-- <small>EN TEST</small> -->
                </h1>

                <!-- First Blog Post -->
                <!-- display the data from 'actualites' -->
                <?php foreach($acts as $act): ?>
                    <h3>
                        <a href="#"><?php echo $act["ACT_INTITULE"]; ?></a>
                    </h3>
                    <p class="lead">
                        by <a href="<?php echo base_url('index.php/Actualites/index');?>"><?php echo $act["CPT_PSEUDO"]; ?></a>
                    </p>
                    <p>&nbsp;Edited on&nbsp;:&nbsp;<span class="glyphicon"></span><?php echo $act["ACT_DATE_DEBUT"]; ?></p>
                    <hr>
                    <!-- <img class="img-responsive" src="<?php// echo $act["ACT_IMAGE"];?>" alt="image_article_a_mettre"/> -->
                    <hr>
                    <p><?php echo $act["ACT_DESCRIPTION"]; ?></p>
                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon"></span></a>
                    <hr>
                <?php endforeach; ?>

                <!-- Pager -->
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; Previous</a>
                    </li>
                    <li class="next">
                        <a href="#">Next &rarr;</a>
                    </li>
                </ul>

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Match Search Well -->
                <div class="well">
                    <h4>Play a match</h4>
                    <hr/>
                    <div class="input-group">
                    <form class="form-horizontal" action="<?php echo site_url("actualites");?>"  method="post">
                            <input id="code_match" type="text" class="form-control" name="mat_code" placeholder="Enter a match code" autofocus>
                            <span class="input-group-btn">
                                <hr/>
                                <button class="btn btn-success" name="code_submit" type="submit" onclick="myFunction()">
                                    PLAY <span class="glyphicon"></span>
                                </button>
                                <script>
                                    function myFunction() {
                                        alert("Match Code entered is not available !");
                                    }
                                </script>
                            </span>
                    </form> 
                    </div>


                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Quizzes Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Computer Network</a>
                                </li>
                                <li><a href="#">Network Switches</a>
                                </li>
                                <li><a href="#">Network Cabling</a>
                                </li>
                                <li><a href="#">Routeur Configuration</a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.col-lg-6 -->
                        <!-- <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div> -->
                        <!-- /.col-lg-6 -->
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <div class="well">
                    <h4>Side Widget Well</h4>
                    <p>WHAT WILL WE PLACE HERE ?????</p>
                </div>

            </div>

        </div>
        <!-- /.row -->

        <hr>

   

