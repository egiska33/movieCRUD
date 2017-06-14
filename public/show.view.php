<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h2><?php echo $result['title'] ?></h2>
            <div>
                <img src="<?php echo $result['image']  ?>">
            </div>
            <div>
                <p>metai: <?php echo $result['year'] ?></p>
                <p>Trukme: <?php  echo $result['length']?></p>
            </div>
            <a href="index.php" class="btn btn-default">Atgal</a>
            <a href="edit2.php?id=<? echo $result['id'] ?>" class="btn btn-default">Redaguoti</a>
            <a href="delete.php?id=<? echo $result['id'] ?>" class="btn btn-danger">Trinti</a>

        </div>
    </div>
</div>

<?php  include 'footer.php';?>