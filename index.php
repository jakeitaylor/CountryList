<?php require "functions.php"; ?>
<html>

    <head>
        <title>Country List</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <?php $countries = getListOfCountries(); ?>
    </head>

    <body>
        <center><h1>Country List</h1></center>
        <br />

        <div class="row">

        <?php  
            foreach ($countries as $country) {
        ?>
            <div class="col-2">
                <div class="card mb-4">
                    <div class="card-header">
                        <img width=50 height=32 src="<?php echo $country->flag; ?>">
                        <?php echo $country->name; ?>
                    </div>
                    <div class="card-body">
                        <b>Capital:</b> <?php echo $country->capital; ?><br />
                        <b>Population:</b> <?php echo number_format($country->population); ?><br />
                        <b>Region:</b> <?php echo $country->region; ?><br />
                        <b>Native Name:</b> <?php echo $country->nativeName; ?><br />
                    </div>
                </div>
            </div>
        <?php } ?>

        </div>

    </body>

</html>