<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Demo</title>
    <link href="//maxcdn.bootstrapcdn.com/bootswatch/3.2.0/cerulean/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
              Bootstrap Demo
          </a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav " role="">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Elsewhere</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Files <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
<?php
	$dir ='.';
    $dh = opendir($dir);
	while (($file = readdir($dh)) !== false)
	{
		if (substr($file, 0, 1) == '.') {
			continue;
		}
		echo "<li><a href=\"$file\">$file</a></li>";
	}
	closedir($dh);
?>
                </ul>
              </li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <div class="container">
      <h1>REST API Demo</h1>
      <p>Following are articles from reddit.com/HuntsvilleAlabama</p>
		
<?php
$url = 'http://www.reddit.com/r/HuntsvilleAlabama/new.json';
$json = file_get_contents($url);
$data = json_decode($json);
foreach ($data->data->children as $article)
{
		echo '<h6><a href="'.$article->data->url.'">'.
			$article->data->title.'</a></h6>';
	/*
	print_r($article);
	*/
}

?>

    </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

  </body>
</html>
