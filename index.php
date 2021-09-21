
<?php 

    $paragraph = "First off, fuck your bitch and the click you claim
                Westside when we ride come equipped with game
                You claim to be a player but I fucked your wife
                We bust on Bad Boy niggaz fucked for life
                Plus Puffy tryin' ta see me weak hearts I rip
                Biggie Smalls and Junior M.A.F.I.A. Some mark-ass bitches
                We keep on comin' while we runnin' for yo' jewels
                Steady gunnin, keep on bustin at them fools, you know the rules
                Lil' Ceaser, go ask ya homie how I leave ya
                Cut your young ass up, leave you in pieces, now be deceased
                Lil' Kim, don't fuck around with real G's
                Quick to snatch yo' ugly ass off the streets, so fuck peace
                I let them niggaz know it's on for life
                So let the Westside ride tonight
                Bad Boy murdered on wax and killed
                Fuck wit' me and get yo' caps peeled, you know, see";

    $word = $_GET['word'];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <!--Get user word-->
        <form method="GET" action="index.php" >
            <input type="text" name="word" placeholder="Censor a Word" class="my-form p-4">
        </form>
        <h1 class="mt-2">Tupac Hit Em Up</h1>
        <p class="mt-4">
            <?php 
            //string replace to change a userword
            $censoredParagraph = str_replace($word, '****', $paragraph);
            echo $censoredParagraph
            ?>
        </p>
    </div>
    
</body>
</html>