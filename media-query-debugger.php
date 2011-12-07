<!DOCTYPE html> 
<html> 
<head> 
	<meta charset=utf-8 /> 
	
	<title>Simple Media Queries Debugger</title> 
	
	<meta name="description" content="Simple Media Queries Tester" /> 
	<meta name="author" content="Frank Bueltge - http://bueltge.de" /> 
	
	<style type="text/css" media="screen">
		body, aside, img { transition:all .2s linear;-o-transition:all .2s linear;-moz-transition:all .2s linear;-webkit-transition:all .2s linear; }
		body { background:#fff;font-family:Arial,Helvetica,sans-serif;font-size:100%;margin:40px; }
		h1 { margin-top:0; }
		img[src*="cloudfront.net"]{ position:absolute;top:0;left:0;border:0;z-index:9999; }
		a { text-decoration:none;color:#ba0100; }
		a:hover { color:#333; }
		header { margin-top:7em; }
		aside {width:20%;padding:0 20px 50px 20px;margin:0 0 5% 2%;float:right;/* Firefox 3.6+ */background:-moz-linear-gradient(100% 100% 90deg, #fff, #ccc);/* Safari 4-5, Chrome 1-9 *//* -webkit-gradient(<type>, <point> [, <radius>]?, <point> [, <radius>]? [, <stop>]*) */background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#ccc), to(#fff));/* Safari 5.1+, Chrome 10+ */background:-webkit-linear-gradient(#ccc, #fff);/* Opera 11.10+ */background:-o-linear-gradient(#ccc, #fff);
		}
		body div[title="Resize the window"] { font:900 4em/.7em Helvetica,sans-serif;color:#ba0100;position:fixed;top:0;right:0;z-index:200; }
		aside ul { list-style:none;list-style-type:none;margin-left:-40px; }
		aside img { background:#fff;border:1px solid #333;padding:2px;margin-bottom:20px;width:80px;box-shadow:3px 3px 5px rgba(0, 0, 0, 0.5); }
		aside li a[href*="bueltge.de"] { background: url( 'http://bueltge.de/favicon.ico' ) 0 0 no-repeat;padding-left: 20px; }
		aside li a[href*="about.me"] { background: url( 'http://wac.2659.edgecastcdn.net/802659/production80/images/assets/me_16x16_rounded.png' ) 0 0 no-repeat;padding-left: 20px; }
		aside li a[href*="twitter"] { background: url( 'http://twitter.com/favicon.ico' ) 0 0 no-repeat;padding-left: 20px; }
		aside li a[href*="xing"] { background: url( 'https://www.xing.com/favicon.ico' ) 0 0 no-repeat;padding-left: 20px; }
		aside li a[href$="github.com/bueltge"]{ background: url( 'https://github.com/favicon.ico' ) 0 0 no-repeat;padding: 0 0 4em 20px; }
		footer { display:block;clear:both;color:#333;border:2px solid #ba0100;background:#fff;padding:5px 15px;-moz-border-radius:20px;-webkit-border-radius:20px;-khtml-border-radius:20px;border-radius:20px; }
		@media all and (min-width: 981px) {
			hr { display:none; }
		}
		@media all and (min-width:601px) and (max-width: 980px) {
			hr { display:none; } aside h2 { font-size:0.8em; } aside img { width:40px; margin:0; } aside li { font-size:.85em; margin-bottom: 5px; }
		}
		@media all and (min-width: 480px) and (max-width: 600px) {
			aside { width:100%; padding:5px; margin-left:0; float: none; } aside h2 { display:none; } aside img { float:right; margin-right:15px; } aside ul { margin-left:-20px; }
		}
		@media all and (max-width: 479px) {
			aside { width:100%; padding:1px 5px 15px 15px; margin-left:0; float:none; } aside h2 { display:none; } aside img { float:right; width:40px; margin:0 15px 0 0; } aside li { font-size:.85em; margin-bottom:5px; } aside li a[href] { background:none; padding-left:0; }	
		}
	</style>
	
	<link rel="stylesheet" type="text/css" href="debug.css" />
	
</head> 
<body>
	<div title="Resize the window">&lArr;&rArr;</div>
	<a href="https://github.com/bueltge/Simple-Media-Queries-Debugging"><img src="https://d3nwyuy0nl342s.cloudfront.net/img/5d21241b64dc708fcbb701f68f72f41e9f1fadd6/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f7265645f6161303030302e706e67" alt="Fork me on GitHub"></a> 
	<?php
		$path_parts = explode('/', $_SERVER['PHP_SELF']);
		if ('test' === $path_parts[1])
			$path_parts = '<a href="http://bueltge.de">bueltge.de</a> &raquo; <a href="http://bueltge.de/' . $path_parts[1] . '/">' . $path_parts[1] . '</a> &raquo;';
		?>
	<header>
		<nav><small>Du bist hier: <?php echo $path_parts; ?></small></nav>
		<h1><a href="http://bueltge.de/" title="to the weblog of the author">Simple Media Queries Debugging</a></h1> 
	</header>
	
	<aside>
		
		<h2>The Sidebar</h2>
		<p><img src="http://www.gravatar.com/avatar/ba546bf447a6ae200f0e93968e7eada8?s=80" alt="Gravatar"/></p>
		<ul> 
			<li><a href="http://bueltge.de">Personal blog</a></li>
			<li><a href="http://about.me/frankbueltge">About.me</a></li>
			<li><a href="http://twitter.com/#!/bueltge">Personal twitter</a></li>
			<li><a href="http://www.xing.com/profile/Frank_Bueltge">Xing</a></li>
			<li><a href="https://github.com/bueltge">github</a></li>
		</ul>
	</aside>
	<hr>
	<section>
		<h2>The Content</h2>
		<p><strong>Deutsch</strong> Media Queries sind dabei sich zu etablieren, Vor- und Nachteile seien hier kein Thema. Definitiv ist das &bdquo;Debuggen&rdquo; nicht immer einfach und die Layouterstellung kann schnell komplex werden. Diese L&ouml;sung stellt die Umsetzung einer Idee dar, um den jeweiligen Viewport zu kennen, da im obersten Bereich der Seite dargestellt wird. Durch diese Werte kann auf die verschiedenen Weiten (<code>width</code>) eingegangen werden. </p>
		<p><strong>English</strong> Media Queries are going to establish, the pros and cons are not an issue here. "Debugging" is not easy and creating layouts can be quickly complex. This solution is an idea to know the viewport, since it shows in the upper area of the page. Via these values you can use it for different width.</p>
		<p><strong>The Source</strong> of the stylesheet to see viewport on top. You can also include this; <a href="https://github.com/bueltge/Simple-Media-Queries-Debugging">download the file on Github</a>.<br>
		<p>You can also use a <strong><a href="http://fhemberger.github.com/mediaquery-bookmarklet/">simple bookmarklet</a> solution</strong> to display typical device dimensions for media query testing. This solution is developed by F.Hemberger and based in this project.</p>
		<?php highlight_file('debug.css'); ?>
		</p>
		
		<p>i: See also my <a href="http://bueltge.de/test/media-query-tester.php" title="see the Media Queries tester live">Simple Media Queries Tester</a></p>
	</section>
	
	<footer> 
		<p> 
		&copy; 2010 - 2011 <a href="http://bueltge.de/">bueltge.de</a> &middot; <a href="http://bueltge.de/impressum/">Imprint / Impressum</a> &middot; Blogpost about the Simple Media Queries Tester <a href="http://bueltge.de/simple-media-queries-debugging/1286/">german</a>
		</p> 
	</footer>
	
	<script src="http://bueltge.de/mv/?js"></script>
	
</body>
</html>
