

    <!-- Page Content -->
    <div class="container">

        <div class="row row-centered">
            <div class="col-lg-12 col-centered text-center">
                <?php echo $display_block; ?>
            </div>
            <div class="col-lg-4 col-centered text-center">
                <form method="POST" action="index.php">
                    <h2 class="text-center">Player 1</h2>
                    <ul class="text-left">
                        <li><input type="radio" name="p1" value="1" checked="checked"> <span class="bigThis "><i class="fa fa-hand-rock-o"></i> Rock</span></li>
                        <li><input type="radio" name="p1" value="2"> <span class="bigThis "><i class="fa fa-hand-paper-o"></i> Paper</span></li>
                        <li><input type="radio" name="p1" value="3"> <span class="bigThis "><i class="fa fa-hand-scissors-o"></i> Scissors</span></li>
                    </ul>         
                        <button class="btn btn-success btn-block" type="submit" name="startBTN">START</button>       
                </form>

            </div>
            <div class="col-lg-4 col-centered score">
                <h2 class="text-center">Scores</h2>
                    <?php 
                    if(isset($_SESSION['score'])){
                        echo '<ol>';

                        echo '</ol>';
                    }else{
                        echo '<p class="lead text-center text-muted"><i>Score system to be added later</i></p>';
                    }
                    ?>

            </div>
            
        </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->

