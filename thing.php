<!DOCTYPE html>
<html>
<head>
    <title>Things!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/images/x.ico" type="image/x-icon" />
    <link href='//fonts.googleapis.com/css?family=Raleway:300,500,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php
        $t = $_GET ['t'];
        $p = $t - 1;
        $n = $t + 1;
    ?>
</head>
<body>
    <header><h1><a href="index.php"><span style="color: #777; position: relative; top: -1px;">&#x25c0;</span> The thing!</a></h1></header>
    <section>
        <?php echo "<h3>Thing " . $t . " is:</h3>"; ?>
        <div id="theThing">
        <?php if ($t == 1) { ?>
            <img src="img/thing1.jpg" alt="Thing 1" title="text from mom" />
            <p class="finePrint"><strike>more</strike> miss &ndash; sorry for typos :/</p>
        <?php } elseif ($t == 2) { ?>
            <p>Alas, I was running late this morning, and you'll have to pickup the car from Carr's instead of its usual location. My most sincere apologies for the inconvenience.</p>
            <img src="img/car-carrs.png" alt="Thing 2" title="car location" />
        <?php } elseif ($t == 3) { ?>
            <p>The payment to AK card still hasn't processed, so we have $20.60 available on there. Maybe just get $20 of gas on AK, and get flowers or whatever else on Ally until the payment clears.</p>
        <?php } elseif ($t == 777) { ?>
            <p>...more than much.</p>
            <p class="finePrint">Assumes girl. has read things 4-776 prior to reading thing 777.</p>
        <?php } else { ?>
            <p>I love you. &lt;3</p>
        <?php }; ?>
        </div>
        <nav id="pnThings">
            <?php if ($t > 1) { ?>
            <a href="thing.php?t=<?php echo $p; ?>">&#x25c0; Previous Thing</a> &nbsp; | &nbsp;
            <?php }
            if ($t < 777) { ?>
               <a href="thing.php?t=<?php echo $n; ?>"> Next Thing &#x25b6;</a>
            <?php } ?>
        </nav>
    </section>
    <footer>
        <p>bo.y likes girl.</p>
    </footer>
</body>
</html>