<?php 
    $bad_word = $_GET['bad_word'];
    $my_text = $_GET['my_text'];
    $my_new_text = str_replace($bad_word, '***', $my_text)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container">
        <div class="row my-4">
            <div class="col-6">
                <h3>Il tuo testo:</h3>
                <?php echo $my_text ?>
                <h4>Lunghezza del testo:</h4>
                <?php echo strlen($my_text); ?> caratteri.
            </div>
            <div class="col-6">
                <h3>Il tuo testo censurato:</h3>
                <?php echo $my_new_text ?>
                <h4>Lunghezza del testo censurato:</h4>
                <?php echo strlen($my_new_text); ?> caratteri.
            </div>
        </div>
    </div>
</body>
</html>