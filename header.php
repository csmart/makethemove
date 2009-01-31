<?php
	function changelocale($locale)
	{
		switch (str_replace(" ", "", strtolower($locale))) {
                case 'en':
			setlocale(LC_ALL, 'en_AU.utf8');
                        break;
                case 'ar':
			setlocale(LC_ALL, 'ar_SA.utf8');
                        break;
                case 'da':
			setlocale(LC_ALL, 'da_DK.utf8');
                        break;
                case 'de':
			setlocale(LC_ALL, 'de_DE.utf8');
                        break;
                case 'es':
                        setlocale(LC_ALL, 'es_ES.utf8');
                        break;
		case 'fr':
                        setlocale(LC_ALL, 'fr_FR.utf8');
                        break;
		case 'mk':
                        setlocale(LC_ALL, 'mk_MK.utf8');
                        break;
                //Norwegian Options
                case 'nb':
                        setlocale(LC_ALL, 'nb_NO.utf8');
                        break;
                case 'no':
                        setlocale(LC_ALL, 'nb_NO.utf8');
                        break;
                //End Norwegian options
                case 'pt-br':
                        setlocale(LC_ALL, 'pt_BR.utf8');
                        break;
                case 'sr':
                        setlocale(LC_ALL, 'sr_YU.utf8');
                        break;
                case 'sr-c':
                        setlocale(LC_ALL, 'sr_YU.utf8@cyrillic');
                        break;
                default:
                        $locale='NONE';
                        break;
                        }
		if ($locale == 'NONE')
		{
			return false;
		}
		else
		{
			return true;
		}
	
	}

	function checklocales($locales)
	{
		$langs = split(',',$locales);
		$done = 0;
		$i = 0;
		$result = "";
		while (($done == 0) && ($i < count($langs)))
		{
			$locale = $langs[$i];
			if (strpos($locale,';') > 0)
			{
				$tmp = split(';',$locale);
				$locale = $tmp[0];
			}

			$res = changelocale($locale);

			//Check to see if it was not found.
			if ($res == false)
			{
				$recheck = false;
				if ( strpos($locale,'-') > 0 )
				{
					$tmp = split('-',$locale);
					$locale = $tmp[0];
					$recheck = true;	
				}
				elseif (strpos($locale,'_') > 0)
				{
					$tmp = split('_',$locale);
					$locale = $tmp[0];
					$recheck = true;
				}

				if ($recheck == true)
				{
					$res = changelocale($locale);
					if ($res == true)
					{
						$result = $locale;
						$done = 1;
					}
				}
			}
			else
			{
				$done = 1;	
				$result = $locale;
			}
	
			$i++;
		}
		if ($done == 1)
		{
			return $result;
		}
		else
			return "en";
		
	}

	if (isset($_POST['theme'])) {
		$style = $_POST['theme'] . '.css';
		setcookie('theme', $_POST['theme'], time()+60*60*24*30*6);
		$theme = $_POST['theme'];
		}
	elseif (isset($_COOKIE['theme'])) {
		$style = $_COOKIE['theme'] . '.css';
		$theme = $_COOKIE['theme'];
		}
	else {
		$style = 'crystal.css';
		$theme = 'crystal';
	}
	
	if (isset($_POST['locale'])) {
		$locale = $_POST['locale'];
		setcookie('locale', $_POST['locale'], 0);
		}
	elseif (isset($_COOKIE['locale'])) {
		$locale = $_COOKIE['locale'];
		}
	else {
		$locale = checklocales($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
		}
	changelocale($locale);
	bindtextdomain('makethemove', './locale');
	textdomain('makethemove');
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<link rel="icon" type="image/png" href="favicon.ico" />
		<link rel="shortcut icon" type="image/png" href="favicon.ico" />
		<title><?php echo _('We welcome you to \'Make The Move\''); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

		<?php
		if ($locale == 'ar'){
			echo '<link rel="stylesheet" type="text/css" href="rtl.css" />';
		}
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') === FALSE) {
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$style}\" />";
		}
		elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7')) {
			echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"{$style}\" />";
		}
		else {
			echo '<link rel="stylesheet" type="text/css" href="crystal.css" />';
			}
		?>
		<script type="text/javascript">
		function submitTheme()
		{
		document.getElementById("theme_select").submit()
		}
		function submitLocale()
		{
		document.getElementById("locale").submit()
		}
		</script>

	</head>
	
	<body <?php if ($page != 'index.php') { echo 'style="background: none;"'; } ?> >

	<div id="banner">
		</div>
		<div id="masthead">
			</div>
			<div id="css-choose">
				<form id="theme_select" action="" method="post"><p style="<?php if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE 7')) { } elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) { echo ' display: none;'; } ?> margin: 0px;">
					<img src="images/crystal/theme.png" alt="" />
					<select style="width: 120px;" name="theme" onchange="submitTheme()">
						<option value="crystal" <?php if($theme=='crystal'){echo 'selected="selected"';} ?>>Crystal</option>
						<option value="tango" <?php if($theme=='tango'){echo 'selected="selected"';} ?>>Tango!</option>
					</select>
				</p></form>			
			</div>
			<div id="css-locale">
                                <form id="locale" action="" method="post"><p style="margin: 0px;">
                                        <img src="images/crystal/locale.png" alt="" />
					<select style="width: 120px;" name="locale" onchange="submitLocale()">

						<option value="sr-c" <?php if(setlocale(LC_ALL, "0")=='sr_YU.utf8@cyrillic') {echo 'selected="selected"';} ?>>Српски</option>
						<option value="da"  <?php if(setlocale(LC_ALL, "0")=='da_DK.utf8') {echo 'selected="selected"';} ?>>Dansk</option>
						<option value="de"  <?php if(setlocale(LC_ALL, "0")=='de_DE.utf8') {echo 'selected="selected"';} ?>>Deutsch</option>
						<option value="en"  <?php if(setlocale(LC_ALL, "0")=='en_AU.utf8') {echo 'selected="selected"';} ?>>English</option>
						<option value="es"  <?php if(setlocale(LC_ALL, "0")=='es_ES.utf8') {echo 'selected="selected"';} ?>>Español</option>
						<option value="fr"  <?php if(setlocale(LC_ALL, "0")=='fr_FR.utf8') {echo 'selected="selected"';} ?>>Français</option>
						<option value="mk"  <?php if(setlocale(LC_ALL, "0")=='mk_MK.utf8') {echo 'selected="selected"';} ?>>Македонски</option>
						<option value="nb"  <?php if(setlocale(LC_ALL, "0")=='nb_NO.utf8') {echo 'selected="selected"';} ?>>Norsk bokmål</option>
						<option value="pt-br"  <?php if(setlocale(LC_ALL, "0")=='pt_BR.utf8') {echo 'selected="selected"';} ?>>Português do Brasil</option>
						<option value="sr"  <?php if(setlocale(LC_ALL, "0")=='sr_YU.utf8') {echo 'selected="selected"';} ?>>Srpski</option>
						<option value="ar" <?php if(setlocale(LC_ALL, "0")=='ar_SA.utf8') {echo 'selected="selected"';} ?>>العربية</option>
                                        </select>
                                </p></form>
                        </div>
<div style="padding-bottom: 3em;" id="content">
