<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <title>Contact</title>
    <link href="../../Css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="form.css" >
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../../Accueil.html">Muller Jimmy</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a>
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../Projets_Realises/index.html">Projets réalisés</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../A_Propos/index.html">A propos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="form-main">
      <div id="form-div">
        <form class="montform" method="post" id="reused_form"  >
          <p class="name">
          	<input name="nom" type="text" class="feedback-input" required placeholder="Nom" id="nom" />
          </p>
          <p class="email">
            <input name="mail" type="email" required  class="feedback-input" id="email" placeholder="Email" />
          </p>
          <p class="text">
            <textarea name="message" class="feedback-input" id="message" placeholder="Message"></textarea>
          </p>
                <div class="submit">
            <button type="submit" class="button-blue" name="mailform">Envoyer</button>
            <div class="ease"></div>
          </div>
        </form>
        </div>
    </div>

<?php
if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					</div>
			</body>
		</html>
		';

		mail("jimmymullerguirdin@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}

}
?>
		<?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
  </body>
</html>
