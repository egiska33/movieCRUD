<form  action="create.php" method="post" class="form-horizontal">
    <fieldset>

        <!-- Form Name -->
        <legend>Naujo filmo ivedimas</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="title">Filmo pavadinimas</label>
            <div class="col-md-4">
                <input value="<?php echo $result['title'] ?>" name="title" type="text" placeholder="Filmo pavadinimas" class="form-control input-md">

            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="image">Nuoroda i pvaeiksleli</label>
            <div class="col-md-4">
                <input value="<?php echo $result['image'] ?>" name="image" type="url" placeholder="Nuoroda i paveiksleli" class="form-control input-md">

            </div>
        </div>



        <!-- Select Basic -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="year">Isleidimo metai</label>
            <div class="col-md-4">
                <select  name="year" class="form-control">
                <?php for($i= date("Y") ; $i > 1945 ; $i-- ): ?>
                    <option value="<?echo $i ?>"><?php echo $i ?></option>
                <?php endfor;?>
                </select>
            </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="length">Filmo trukme </label>
            <div class="col-md-4">
                <input value="<?php echo $result['length'] ?>" name="length" type="number" placeholder="" class="form-control input-md">

            </div>
        </div>



        <!-- Button (Double) -->
        <div class="form-group">
            <label class="col-md-4 control-label" for="button1id">Filmo ikelimas</label>
            <div class="col-md-8">
                <button  type="submit" value="submit" class="btn btn-success">Ikelimas</button>
<!--                <button id="button2id" name="button2id" class="btn btn-default">Remove</button>-->
            </div>
        </div>

    </fieldset>
</form>
