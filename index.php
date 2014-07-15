<!DOCTYPE html>
<html>
  <head>
    <title>Things!</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/images/x.ico" type="image/x-icon" />
    <link href='//fonts.googleapis.com/css?family=Raleway:300,500,700' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </head>
  <body>
    <header>
      <h1>Things my girl. may want to know</h1>
    </header>
    <section id="thingButtons">
        <h3>Pick a thing</h3>
        <nav id="allThings">
          <ul>
            <?php
              for($i = 1; $i < 778; $i++) {
                echo '<li class="thing"><a href="thing.php?t=' . $i . '">' . $i . '</a></li>';
              }
            ?>
          </ul>
        </nav>
    </section>
    <footer>
        <p>bo.y likes girl.</p>
    </footer>
    <script type="text/javascript">
        var cw = $('.thing').width();
        $('.thing').css({'height':cw+'px'});
    </script>
  </body>
</html>
