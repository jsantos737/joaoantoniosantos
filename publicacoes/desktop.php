<!DOCTYPE html>
<html lang=pt>
    <head>
        <meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<meta name="author" content="Joao Antonio Santos">
    	<link rel="icon" href="../img/favicon.png">
    	<title>Joao Antonio</title>
    	<!-- Bootstrap core CSS -->
    	<link href="../css/bootstrap.min.css" rel="stylesheet">
    	<!-- Custom styles for this template -->
  		<link href="../navbar-top-fixed.css" rel="stylesheet">
		<!-- Documentation extras -->
		<link href="../css/docs.min.css" rel="stylesheet">
    </head>
	<body>
        <?php include '../menu.php'; ?>
		<div class="site-wrapper">
            <div class="col-sm-8 blog-main">
                <?php
                    //$mysqli = new mysqli('localhost', 'root', '', 'impactotransportes');
                    $mysqli = new MySQLi('joaoantoniosantos.com.br','joaoa870_joao','joaoantonio2012','joaoa870_site');
                    $query  = "SELECT * FROM publicacoes ORDER BY id DESC";
                    if ($result = $mysqli->query($query)) {
                        while ($row = $result->fetch_assoc()) {
                            $id=$row['id'];
                            $titulo=$row['titulo'];
                            $conteudo=$row['conteudo'];
                            $data=$row['data'];
                            echo "
                                <div class='blog-post'>
                                                <h2 class='blog-post-title'> $titulo </h2>
                                                <p class='blog-post-meta'> $data by <a href='http://joaoantoniosantos.com.br'>Joao A.</a></p>
                                    <p> $conteudo </p>
                                </div>";
                        }
                    }
                    //<div class="blog-post">
                    //<h2 class="blog-post-title">Another blog post</h2>
                    //<p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                    //<blockquote>
                    //	<p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    //</blockquote>
	    	    ?>
		    </div>
        <!-- Bootstrap core JavaScript ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../js/jquery.min.js"><\/script>')</script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="../js/bootstrap.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="../js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>