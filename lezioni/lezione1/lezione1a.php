<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <?php echo "<h1 class=\"text-center display-1\">Questo è il mio titolo</h1>"; ?>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <?php echo "<p>prima<br>seconda</p>"; ?>
            </div>
        </div>
    </div>
    <?php echo "<h2 class=\"display-4 text-center\">Sottotitolo in stile Display 2</h2>"; ?>
    <?php
        //lettura da database
        $email = "docentemaurocasadei@gmail.com";
        $messaggio_precedente = "messaggio precedente";
        $label_email = "Indirizzo Email:"; // letto da traduzione
        $label_messaggio = "Messaggio"; //letto da traduzione
        $form = <<<DATA
        <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">$label_email</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="name@example.com" value="$email">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">$label_email</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">$messaggio_precedente</textarea>
                </div>
            </div>
        </div>
    </div>
DATA;
    print $form;
    ?>

    <?php 
        $risultato = 10 - 5;
      ?>
    <input type="text" value="<?= $risultato; ?>">
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>