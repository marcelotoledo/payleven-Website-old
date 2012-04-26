<?php

function addEmail($email)
{
  $link = mysql_connect('zenpaywwwprod.ciboiymlb7sj.us-east-1.rds.amazonaws.com', 'root', 'rocketinfra');
  if (!$link) {
    return false;
  }

  if (!mysql_select_db('zenpaywww', $link)) {
    return false;
  }

  $query = "insert into user (email) values ('$email')";
  $res = mysql_query($query, $link);
  if (!$res) {
    return false;
  }
  
  mysql_close($link);
}

$email_sent = false;
if ($_POST["email"]) {
  addEmail($_POST["email"]);
  $email_sent = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>ZENPAY</title>
 	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script type="text/javascript" src="javascript/head.js"></script>
	<script type="text/javascript">head.js(
		'http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js',
		'javascript/extras.js?v=1',
		'javascript/scripts.js?v=1'
	);</script>
	<link rel="stylesheet" type="text/css" href="styles/screen.css?v=1" media="screen" />
	<link rel="stylesheet" type="text/css" href="styles/print.css?v=1" media="print" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
</head>
<body>

<div id="root">
	<header id="top">
		<h1 id="logo"><a href="./" accesskey="h">ZENPAY</a></h1>
		<nav id="skips">
			<ul>
				<li><a href="#nav" accesskey="n">Skip to navigation [n]</a></li>
				<li><a href="#content" accesskey="c">Skip to content [c]</a></li>
				<li><a href="#footer" accesskey="f">Skip to footer [f]</a></li>
			</ul>
		</nav>
	</header><!-- #top -->
	<section id="content">
		<article class="story-a">
			<h1>Aceite cartões de crédito!</h1>
			<ul>
				<li>Sem mensalidades</li>
				<li>4.99% por transação</li>
				<li>Aceita: <img src="images/cards-a.png" width="234" height="29" alt="Cards"/></li>
			</ul>
			<div class="box-a">
				<h2>Cadastre-se e receba nosso kit gratuitamente</h2>
				<form class="form-a content" action="index.php" method="post">
					<p class="field">
                                                <?php if ($email_sent == true) { ?>
					            <p class="correct">Seu E-Mail Foi Cadastrado Com Sucesso, Em Breve Entraremos Em Contato.</p>
                                                <?php } ?>
						<label for="email">Email</label>
						<input type="text" id="email" name="email">
					</p>
					<p class="action"><button type="submit">Enviar</button></p>
				</form>
			</div>
		</article>
	</section><!-- #content -->
</div><!-- #root -->

</body>
</html>