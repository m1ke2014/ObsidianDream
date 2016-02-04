<?php
	session_start();
	if(isset($_SESSION['userid']) == false)
	{	header("Location: login.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="Obsidian Dream Home page"/>
<meta name="keywords" content="Obsidian Dream Global Clothing Services"/>
<meta name="author" content="nas1" />
<link rel="stylesheet" type="text/css" href="default.css" media="screen"/>
<title>Obsidian Dream Global Clothing Services</title>
</head>

<body>

<div class="container">

	<div class="top">
		<span>
		<a href="index.php">Home</a> <img src="img/star.gif" />
		<a href="help.php">Help</a> <img src="img/star.gif" />
		<a href="feedback.php">Feedback</a> <img src="img/star.gif" />
		<a href="blog.php">Blog</a> <img src="img/star.gif" />
		<a href="affiliates.php">Affiliate Sites</a> <img src="img/star.gif" />
		<a href="logout.php">Logout</a>
		</span>
	</div>

	<div class="header"></div>

	<div class="main">

		<div class="item">

			<div class="date">
				<div>OCT</div>
				<span>10</span>
			</div>

			<div class="content">

				<h1>News: Main updates for today</h1>

				<div class="body">
<figure>
  <img src="img/ID-100126763.jpg"
 alt="Image courtesy of foto76 at FreeDigitalPhotos.net">
  <figcaption>
Image courtesy of foto76 at FreeDigitalPhotos.net<br /><br />
</figcaption>
</figure>

					<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, <a href="index.html">nunc eget pretium</a> porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>

					<blockquote><p>Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus.</p></blockquote>

					<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam.</p>

					<p>Fusce porta pede nec eros. Maecenas ipsum sem, interdum non, aliquam vitae, interdum nec, metus. Maecenas ornare lobortis risus. Etiam placerat varius mauris. Maecenas viverra. Sed feugiat. Donec mattis <a href="index.html">quam aliquam</a> risus. Nulla non felis sollicitudin urna blandit egestas. Integer et libero varius pede tristique ultricies. Cras nisl. Proin quis massa semper felis euismod ultricies.
					</p>

				</div>

			</div>

		</div>
	</div>

	<div class="navigation">

		<h1>Corporate News</h1>
		<ul>
			<li><a href="news.php">Cotton crop trends</a></li>
			<li><a href="news.php">Bleach - a medical view</a></li>
			<li><a href="news.php">Loom safety tips</a></li>
			<li><a href="news.php">Design consultancy wins</a></li>
		</ul>

		<h1>User Blogs</h1>
		<ul>
			<li><a href="blog.php">In India - and loving it</a></li>
			<li><a href="blog.php">Weft and Warp</a></li>
			<li><a href="blog.php">CTO's view and updates</a></li>
			<li><a href="blog.php">Most Popular Blogs</a></li>
		</ul>

		<h1>Opportunities</h1>
		<ul>
			<li><a href="opportunity.php">Recruiting - Shenzhen</a></li>
			<li><a href="opportunity.php">Guandong mills</a></li>
			<li><a href="opportunity.php">South Africa - posts</a></li>
			<li><a href="opportunity.php">IT in Canada and the USA</a></li>
		</ul>

	</div>

	<div class="clearer"><span></span></div>

	<div class="footer">

		<span class="left">&copy; 2010-2014 <a href="index.html">www.ObsidianDreamPLC.com</a>. Valid <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a> &amp; <a href="http://validator.w3.org/check?uri=referer">XHTML</a></span>

		<span class="right"><a href="http://templates.arcsin.se/">Website template</a> by <a href="http://arcsin.se/">Arcsin</a></span>

		<div class="clearer"><span></span></div>

	</div>

</div>

</body>

</html>