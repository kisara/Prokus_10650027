<?php
session_start();
include "config/konek.php";
?>
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1"/>
<meta name="description" content="description"/>
<meta name="keywords" content="keywords"/> 
<meta name="author" content="author"/> 
<link rel="stylesheet" type="text/css" href="css/default.css" media="screen"/>
<title>AsuransiKU.com</title>
</head>

<body>

<div class="top">
				
	<div class="header">

		<div class="left">
			Asuransi Jiwa
		</div>
		
		<div class="right">

			<h2>We offers</h2>
			
			<p>heal you back from every bad thing in your life</p>

		</div>

	</div>	

</div>

<div class="container">	

	<div class="navigation">
		<a href="Home.php">Home</a>
		<a href="Produk.php">Produk</a>
		<a href="Ketentuan.php">Ketentuan</a>
		<a href="Informasi.php">Informasi</a>
		<a href="kontak.php">Contact</a>
		<div class="clearer"><span></span></div>
	</div>

	<div class="main">	
		<div class="content">

			<h1>Judul</h1>
			<div class="descr">Maret, 2013 by Sanc</div>

			<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, <a href="index.html">nunc eget pretium</a> porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est.</p>

			<blockquote><p>Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus.</p></blockquote>
			
			<p>Aliquam risus justo, mollis in, laoreet a, consectetuer nec, risus. Nunc blandit sodales lacus. Nam luctus semper mi. In eu diam.</p>

			<ul>
				<li>Tristique</li>
				<li>Aenean</li>
				<li>Pretium</li>
			</ul>

			<p>In hac habitasse platea dictumst. Duis porttitor. Sed vulputate elementum nisl. Vivamus et mi at arcu mattis iaculis. Nullam posuere tristique tortor. In bibendum. Aenean ornare, nunc eget pretium porttitor, sem est pretium leo, non euismod nulla dui non diam. Pellentesque dictum faucibus leo. Vestibulum ac ante. Sed in est. Sed sodales nisl sit amet augue. Donec ultrices, augue ullamcorper posuere laoreet, turpis massa tristique justo, sed egestas metus magna sed purus. Fusce eleifend, dui ut posuere auctor, justo elit posuere sapien, at blandit enim quam fringilla mi.</p>

			<code>margin-bottom: 12px;
font: normal 1.1em "Lucida Sans Unicode",serif;
background: url(img/quote.gif) no-repeat;
padding-left: 28px;
color: #555;</code>

			<p>Eget feugiat est leo tempor quam. Ut quis neque convallis magna consequat molestie.</p>

		</div>
		
		<div class="sidenav">

			<h2>Something</h2>
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="Produk.php">Produk</a></li>
				<li><a href="Ketentuan.php">Ketentuan</a></li>
				<li><a href="info.php">Informasi</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>

			<h2>Another thing</h2>
			<ul>
				<li><a href="index.html">A</a></li>
				<li><a href="index.html">B</a></li>
				<li><a href="index.html">C</a></li>
				<li><a href="index.html">D</a></li>
			</ul>

			<h2>Third and last</h2>
            <?php include "session/log in.php" ; ?>

		</div>

		<div class="clearer"><span></span></div>

	</div>

	<div class="footer">&copy; 2013 <a href="index.html">AsuransiKu.com</a>. Valid <a href="#">CSS</a> &amp; <a href="#">XHTML</a>. Template design edited by <a href="#">Agus</a>
	</div>

</div>

</body>

</html>