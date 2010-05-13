<?php
function ks_header($ks_info) {
	echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
	<title>'When We Were One with the Code'".$ks_info['title']."</title>
	<link rel=\"stylesheet\" type=\"text/css\" media=\"screen, print\" href=\"css/reset.css\" />
	<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/screen.css\" />
	<!--[if lte IE 7>
	<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"css/screen-ie.css\" />
	<![endif]-->
	<link rel=\"stylesheet\" type=\"text/css\" media=\"print\" href=\"css/print.css\" />
	<!--
		Mootools JavaScript Library (core):
	-->
	<script type=\"text/javascript\" src=\"js/mootools/mootools-core.js\"></script>
	<script type=\"text/javascript\" src=\"/js/site.js\"></script>
</head>
<body class=\"".$ks_info['bodyclass']."\">
<div id=\"page\">
\n";
}
function ks_navigation() {
	echo "	<ul id=\"navigation\">
		<li><a href=\"index.htm\">Home</a></li>
		<li><a href=\"about.htm\">About</a></li>
	</ul>\n";
}
function ks_footer($ks_info) {
	echo "	<div id=\"footer\">
		<p class=\"copyright\">
			Copyright Karl Stolley. Licensed under a <a rel=\"license\" href=\"http://creativecommons.org/licenses/by/3.0/us/\">Creative Commons Attribution 3.0 United States License</a>.
		</p>
		<p class=\"warning\">
			This is a development version of an academic webtext. It has not yet been peer reviewed, so caution should be used when citing.
		</p>
		<ul class=\"validators\">
			<li><a href=\"http://validator.w3.org/check?uri=referer\" title=\"Validate this page's XHTML\">XHTML</a></li>
			<li><a href=\"http://jigsaw.w3.org/css-validator/check/referer\" title=\"Validate this page's CSS\">CSS</a></li>
		</ul>
	</div>
</div>
</body>
</html>\n";
}
