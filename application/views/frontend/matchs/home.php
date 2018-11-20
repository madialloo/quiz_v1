<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    MATCHS
                    <!-- <small>EN TEST</small> -->
                </h1>

                <!-- First Blog Post -->
                <!-- display the data from 'actualites' -->
                <?php foreach($matchs as $macth): ?>
                    <h3>
                        <a href="#"><?php echo $match["MAT_CODE"]; ?></a>
                    </h3>
                    <p class="lead">
                        by <a href="<?php echo base_url('index.php/Actualites/index');?>"><?php echo $match["CPT_PSEUDO"]; ?></a>
                    </p>
                    <p>&nbsp;Edited on&nbsp;:&nbsp;<span class="glyphicon"></span><?php echo $match["MAT_SITUATION"]; ?></p>
                    <hr>
                    <p><?php echo $match["ACT_DESCRIPTION"]; ?></p>
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
                    <form class="form-horizontal" action="<?php echo site_url("matchs/display_match");?>"  method="post">
                            <input type="text" class="form-control" name="mat_code" placeholder="Enter a match code" autofocus>
                            <span class="input-group-btn">
                                <hr/>
                                <button class="btn btn-success" name="code_submit" type="submit">
                                    PLAY <span class="glyphicon"></span>
                                </button>
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

   

