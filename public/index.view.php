<?php include 'header.php'?>
<main class="container">
    <section class="movies" id="movies">
        <h2>Featured Movies</h2>
        <div class="row">
            <?php
            foreach ($result as $index => $value):?>

            <div class="col-lg-3 col-md-4 col-sm-6 ">
                <article class="card">
                    <header class="title-header">
                        <h3><?php echo $value['title'] ?></h3>
                    </header>
                    <div class="card-block">
                        <div class="img-card">
                            <img src="<?php echo $value['image'] ?>" alt="Movie" class=" img-responsive " style="height: 200px" />
                        </div>
                        <p class="tagline card-text text-xs-center">Metai: <?php echo $value['year']   ?></p>
                        <p class="tagline card-text text-xs-center">Trukme: <?php echo $value['length']   ?></p>
                        <a href="show.php?id=<?php  echo $value['id'] ?>" class="btn btn-primary btn-block"><i class="fa fa-eye"></i> Perziura</a>
                    </div>
                </article>
            </div>

<?php endforeach ?>
            <div class="row">
                <div class="col-md-12 text-center">
                 <a href="edit.php" class="btn btn-primary">Ivesti filma</a>
                </div>
            </div>
        </div>

    </section>
</main>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<?php include 'footer.php'?>