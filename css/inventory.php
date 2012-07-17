<?php
	require_once( '../db.inc.php' );
	header("Content-type: text/css");
?>


/* Reset All Broswers to Nothing */
@import url('reset.css');

html {
	font-family: helvetica,arial;
	font-size: .833em;
	padding-left: .9em;
	padding-right: .9em;
}
select {padding: .05em;}
fieldset table, table {border: 1px solid grey;}
textarea {white-space: pre;word-wrap: break-word;}

[readonly],[disabled] {
	background-color: #dcdcdc;
	border: 1px dotted grey;
	padding: 1px;
	color: #000000;
	cursor: default;
} 

/* css for timepicker */
.ui-timepicker-div .ui-widget-header {margin-bottom: 8px;}
.ui-timepicker-div dl {text-align: left;}
.ui-timepicker-div dl dt {height: 25px; margin-bottom: -25px;}
.ui-timepicker-div dl dd {margin: 0 10px 10px 65px;}
.ui-timepicker-div td {font-size: 90%;}
.ui-tpicker-grid-label {background: none; border: none; margin: 0; padding: 0;}

/*  Header/logo */
#header{
	padding:5px 0;
	background:<?php echo $config->ParameterArray['HeaderColor']; ?> url(../images/<?php echo $config->ParameterArray['PDFLogoFile']; ?>) no-repeat center center;
	height:66px;
}

/* Configuration Page */
div.cp { position: relative;}
.miniColors-trigger { position: absolute; top: 0; right: 0;}
.config .center input { width: 95%; }

/* index */
.index .table, .index .table .title {background-color: white;}
.index .table .title {font-weight: bold; font-size: 1.25em;}
.index .table div {padding: 3px;}
.rackrequest div:first-child div {background-color: gray;text-align: center;color: white;font-weight: bold;}
.overdue {background-color:#FFE6F4;}
.soon {background-color:#FFFFAA;}
.clear {background-color:white;}

/* Datacenter Stats */
.dcstats .heading > div{width: 89%;display: inline-block;vertical-align: middle;}
.dcstats .heading > div + div {width: 10%;}
.dcstats .heading > div + div button {display: block;width: 100%;}
.dcstats .table, .dcstats .table .title { background-color: white; }
.dcstats .table .title { font-weight: bold; font-size: 1.25em; }
.dcstats .table div {padding: 3px;}
div#dcstats { display: table;}
div#dcstats > div{ width: 100%;}
div#dcstats .table + .table > div > div + div{white-space: pre; text-align: right;}
.canvas {position: relative; margin-top: 2em;}
.canvas img {position: absolute; top: 0; left: 0;}

/* Storage Room */
.storage .table, .storage .table #title { background: white; }
.storage .table #title {filter: none;}
.storage .table .title { font-weight: bold; font-size: 1.25em; }
.storage .table div {padding: 3px;}
.storage .table {min-width: 400px; max-width: 600px; margin-top: 2em;}

/* Sidebar Menu */
#sidebar {
	position: relative;
	min-width: 200px;
	width: 210px;
	display: inline-block;
	vertical-align: top;
}
#sidebar input, #sidebar textarea {
	height: 27px;
	width: 170px;
	margin: 0;
	vertical-align: text-bottom;
	clear: left;
	display: inline-block;
	white-space: nowrap;
	word-wrap: normal;
	padding: 5px;
}
#sidebar textarea {
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
	border-style: solid none solid solid;
	border-width: 1px 0 1px 1px;
	border-color: black;
}
#sidebar input + button, #sidebar .text-core + button, button.iebug, #sidebar textarea + button {
	height: 27px;
	padding: 0px;
	margin: 0px;
	display: inline-block;
	vertical-align: top;
	clear: right;
	border-left: 0px solid;
	-webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
	-moz-box-sizing: border-box;    /* Firefox, other Gecko */
	box-sizing: border-box;         /* Opera/IE 8+ */
	-moz-border-radius: 0px;
	-moz-box-shadow: 0px;
	-webkit-border-radius: 0px;
	border-radius: 0px;
}
#sidebar input + button img, #sidebar .text-core + button img, #sidebar textarea + button img {height: 27px;}
#sidebar div.text-core {width: 150px; height: 27px;}
#sidebar div.text-core textarea{ width: 151px; height: 27px;}
.text-core { display: inline-block; }

/* Mapmaker */
.mapmaker > div{width: 77%;display: inline-block;vertical-align: middle;}
.mapmaker > div + div {width: 19%;}
.mapmaker .table .table {margin-left: auto;}
.mapmaker + .center div{position: relative;width: 100%;}
.mapmaker + .center > div > div.container {position: absolute;top: 0px;left: 0px;}

/* Basic Page Layout */
.page {position: relative;min-width: 1030px;width: 100%;}
.clear {clear: both;}
p, h2, h3, h1 {margin-top: 1em;margin-bottom: 1em;}
h2 {font-size: 1.5em;text-align: center;}
h3 {font-size: 1.16em;text-align: center;}
h3 + h3 {color: red;font-weight: bold;}
a:link, a:hover, a:visited:hover {color:<?php echo $config->ParameterArray['LinkColor']; ?>;}
a:visited {color: <?php echo $config->ParameterArray['VisitedLinkColor']; ?>;}

div.main {
	position: relative;
	display: inline-block;
	vertical-align: top;
	min-height: 500px;
	min-width: 800px;
	margin-left: 0px;
	margin-right: auto;
	background-color: <?php echo $config->ParameterArray['BodyColor']; ?>;
	border: 1px dotted #333;
	padding: 5px;
}
div.center > div {display: inline-block;text-align: left;}
.center {text-align: center;min-height: 400px;}
.centermargin {margin-left: auto;margin-right: auto;}

.table {display: table;text-align: left;border-collapse: collapse;}
.caption {caption-side: bottom; text-align: center; display: table-caption !important;}
.title {caption-side: top; text-align: center; display: table-caption !important;}
div.table > div {display: table-row;}
div.table > div > div {display: table-cell;vertical-align: middle; /* padding-bottom: .75em; */}
div.table > div > div span {display: block;font-size: 0.75em;}
.table label{width:130px;}
.whiteborder, .whiteborder div {border: 1px solid white;}
.border, .border div {border: 1px solid gray;}

/* Search Results */
.search .center {text-align: left;}
.search ol, .search ul{list-style-type: none;margin-left: 1em;}
.search ol {margin-top: .35em;}
.search ol li {margin-bottom: .35em;}
.search ol ul li {margin-left: 1em;margin-bottom: 0em;}
.search ol ul li div, .search ol li.cabinet div {display: inline;}
.search ol ul li div img, .search ol li.cabinet div img {vertical-align: middle;height: 1em;margin-right: .25em;}

/* User Rights */
.rights > div:nth-last-child(2) div {text-align: center;padding-top: .75em;padding-bottom: .75em;}
div.table > div + div + div + div > div + div label {float: none;}

/* Inventory Reports */
.reports fieldset {margin-right: 20px;}
#reports > div {display: inline-block;vertical-align: top;}
#reports > div a {display: block;}

/* PDU Info */
.pdu .center > div + div > .table > div > div{padding: 3px;}

/* Power Panels */
div.center > div + div {vertical-align: top;padding-left: 1em;}
div.center > div + div div.table {background-color: white;}
div.center div table {
	background-color: white;
	border-collapse: collapse;
	margin-left: auto;
	margin-right: auto;
	max-width: 400px;
}
div.center div table table{min-width: 150px;}
div.center div table, div.center div tr, div.center div td {border: 1px solid gray;}
div.center div td:first-child, .panelmgr .polenumber {padding: 0.25em 0.5em;text-align: center;}
.panelmgr .polelabel {
	min-width: 150px;
	max-width: 400px;
	padding: 0.25em 0.5em 0.25em 1em;
	vertical-align: middle;
}
.polelabel a {display: block;margin-bottom: 0.35em;}
td#oddeven {padding: 0px;text-align: left;width: 150px;}
.caption h3 {margin-bottom: 0px;font-size: 1.25em;}
#powerinfo {margin-top: 0em;}
#powerinfo .table {background-color: white;}
#powerinfo .caption {border: 0px !important;}
div.error {margin-top: 2em;margin-bottom: 2em;border: 1px dotted gray;}
.error legend {color: red;font-weight: bold;}
.error > div > div {width: 200px;vertical-align: top !important;}
.error > div > div + div {font-style: italic;}

/* Department Administration */
#groupadmin {
	overflow: hidden;
	min-width: 580px;
	min-height: 150px;
	display: none;
	margin-top: 20px;
	border: 1px solid gray;
}
#deptgroup {background-color: <?php echo $config->ParameterArray['BodyColor']; ?>;}
#deptgroup > div {padding: 5px 10px;width: 580px;}
#deptgroup > div h3 {margin-top: 0;margin-bottom: 10px;}
#deptgroup > div div {display: inline-block;max-width: 200px;vertical-align: middle;}
#deptgroup h3 + div {margin-left: 42.5px;}
#deptgroup h3 + div + div {text-align: center;}
#deptgroup select {width: 200px;}
#displaynone {display: none !important;}

/* Rack Content */
#infopanel {
		position: relative;
		display: inline-block;
		min-width: 200px;
}
#infopanel fieldset, .reports fieldset {
		background-color: white;
		border: 1px solid grey;
		padding: 10px;
		margin-bottom: 8px;
}
#infopanel fieldset button, #infopanel fieldset input[type=submit], #infopanel fieldset input[type=button],.reports fieldset button, .reports fieldset input[type=submit], .reports fieldset input[type=button] {width: 100%;}
#infopanel legend, .device legend, .reports legend {border: 1px <?php echo $config->ParameterArray['HeaderColor']; ?> solid;background-color: white;}
#infopanel fieldset > p > span + span {
	display: inline-block;
	vertical-align: middle;
	height: 1.1em;
	width: 150px;
	overflow: hidden;
}
div.cabinet {
	display: inline-block;
	vertical-align: top;
	min-width: 200px;
	max-width: 250px;
	margin-right: 20px;
}
.cabinet td + td {vertical-align: middle;padding: 0.25em 0.5em;width: 90%;}
.cabinet th{font-size: 1.5em;padding: 0.25em;text-align: center;}
#zerou a{display: block;}

/* devices.php  Device Detail */
div.page.device {
	min-width: 1350px; /* 1030 */
}
.device fieldset {
	display: inline-block;
	vertical-align: top;
	margin-bottom: 1.5em;
	margin-top: 1em;
	background-color: white;
	border: 1px dotted gray;
	padding: 0.25em;
}
.device div.left, .device div.right {
	max-width: 485px;
	margin-bottom: 1.5em;
	display: inline-block;
	vertical-align: top;
	text-align: left;
}
.device .table {width: 100%;}
.device .table.style > div:nth-child(2n+1) > div {border-top: 1px solid grey;vertical-align: top;}
.device .table.style > div:nth-child(2n+1) > div:first-child {background-color: lightGray;border-left: 1px solid grey;}
.device .table > div > div {min-width: 100px;}
.device .caption {margin-top: 3em;}
.device .table .table .table, .right .table + .table {background-color: white;width: 100%;}
.device .table .table .table > div > div {padding: 3px;}
.right .table + .table {margin-top: 1em;}

/* Button code primarily from http://somadesign.ca */
/* Button */
.button, input[type=button], input[type=submit], button {
	text-decoration: none;
	border-color:#888;
	border-color:rgba(0, 0, 0, 0.56);
	cursor: pointer;
	outline: none;
	color:#111;
	display:inline-block;
	vertical-align:top;
	position:relative;
	font-size:12px;
	text-align:center;
	background-color:#aaa;
	background-image:url(gradient.png);
	background-image: -moz-linear-gradient(top, rgba(255,255,255,.75), rgba(255,255,255,0));
	background-image: -o-linear-gradient(top, rgba(255,255,255,.75), rgba(255,255,255,0));
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,.75)), to(rgba(255,255,255,0)));
	background-image: linear-gradient(top, rgba(255,255,255,.75), rgba(255,255,255,0));
	background-repeat:repeat-x;
	text-shadow:1px 1px 0 rgba(255,255,255,.67); 
	line-height:2;
	height:2em;
	-moz-box-shadow:1px 1px 0 rgba(255,255,255,.5) inset, -1px -1px 0 rgba(255,255,255,.5) inset;
	-webkit-box-shadow:1px 1px 0 rgba(255,255,255,.5) inset, -1px -1px 0 rgba(255,255,255,.5) inset;
	box-shadow:1px 1px 0 rgba(255,255,255,.5) inset, -1px -1px 0 rgba(255,255,255,.5) inset;
	-webkit-transition: background .185s linear;
	-moz-transition: all .185s linear;
	-o-transition: all .185s linear;
	transition: all .185s linear;
	/** Make the text unselectable **/
	-moz-user-select: none;
	-webkit-user-select: none;
}
.button, .button:after, button, button:after, input[type=submit], input[type=button], ul.nav li {
	-moz-border-radius:4px;
	-webkit-border-radius:4px;
	border-radius:4px;
	border-width:1px;
	border-style:solid;
}
.button:after, button:after {
	display:block;
	position:absolute;
	width:100%;
	height:100%;
	border-color: transparent transparent #ccc;
	border-color: transparent transparent rgba(255, 255, 255, 0.67);
	bottom:-2px;
	left:-1px;
}
.button:hover, .button:focus, button:hover, button:focus, input[type=button]:hover, input[type=button]:focus, input[type=submit]:hover, input[type=submit]:focus {
	background-color:#a8c0cb;
}
.button:active, button:active, input[type=submit]:active, input[type=button]:active {
	line-height:2.2;
	-moz-box-shadow:0 .33em 1em rgba(0,0,0,.67) inset,1px 1px 0 rgba(255,255,255,.25) inset,-1px -1px 0 rgba(255,255,255,.25) inset;
	-webkit-box-shadow:0 .33em 2em rgba(0,0,0,.67) inset,1px 1px 0 rgba(255,255,255,.25) inset,-1px -1px 0 rgba(255,255,255,.25) inset;
	box-shadow:0 .33em 2em rgba(0,0,0,.67) inset,1px 1px 0 rgba(255,255,255,.25) inset,-1px -1px 0 rgba(255,255,255,.25) inset;
	-webkit-transition: line-height .1s linear;
	-moz-transition: all .1s linear;
	-o-transition: all .1s linear;
	transition: all .1s linear;
}
.button.bg, .button.bg:hover, .button.bg:focus, ul.nav li {
	background-image:url(gradient.png);
	background-image: -moz-linear-gradient(top, rgba(255,255,255,.75), rgba(255,255,255,0));
	background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(rgba(255,255,255,.75)), to(rgba(255,255,255,0)));
}

/* Put this inside a @media qualifier so Netscape 4 ignores it */
@media screen, print { 
	/* Turn off list bullets */
	ul.mktree  li { list-style: none; } 
	/* Control how "spaced out" the tree is */
	ul.mktree, ul.mktree ul , ul.mktree li { margin-left:10px; padding:0px; }
	/* Provide space for our own "bullet" inside the LI */
	ul.mktree  li           .bullet { padding-left: 15px; }
	/* Show "bullets" in the links, depending on the class of the LI that the link's in */
	ul.mktree  li.liOpen    .bullet { cursor: pointer; background: url(minus.gif)  center left no-repeat; }
	ul.mktree  li.liClosed  .bullet { cursor: pointer; background: url(plus.gif)   center left no-repeat; }
	ul.mktree  li.liBullet  .bullet { cursor: default; background: url(bullet.gif) center left no-repeat; }
	/* Sublists are visible or not based on class of parent LI */
	ul.mktree  li.liOpen    ul { display: block; }
	ul.mktree  li.liClosed  ul { display: none; }
	/* Format menu items differently depending on what level of the tree they are in */
	ul.mktree  li { font-family: arial, helvetica; font-size: 12pt; }
	ul.mktree  li ul li { font-family: arial, helvetica; font-size: 10pt; }
	ul.mktree  li ul li ul li { font-family: arial, helvetica; font-size: 8pt; }
	ul.mktree  li ul li ul li ul li { font-family: arial, helvetica; font-size: 6pt; }
}
.meter-wrap{position: relative;}
.meter-wrap, .meter-value, .meter-text {width: 155px; height: 30px;}
.meter-text {
    position: absolute;
    top:0; left:0;
    padding-top: 5px;
    color: #000;
    text-align: center;
    width: 100%;
}

/* Installer */
.installer ul li, ul.nav li{
	display: block;
	padding: 1.5em;
	background-color: lightGray;
	border: 0px dashed darkGray;
}
.installer ul li{border: 1px dashed darkGray;}
.installer #sidebar a, #sidebar .nav a {text-decoration: none;}
.installer #sidebar a:hover li, #sidebar .nav a:hover li {background-color: darkGray;border-color: lightGray;}
.installer #sidebar a:hover li.active, #sidebar .nav a:hover li.active {background-color: white;border-color: lightGray;}
.installer .active, .nav .active {background-color: white;border: 1px solid darkGray;}
.installer .active:after, .nav .active:after {content:">>";float: right;}
.installer div.table > div > div + div {width: 300px;}
.installer .rights > div:nth-last-child(2) div {padding-top: 0;padding-bottom: 2em;text-align: left;}
.installer .center input {width: 97%;}

/* Menu */
ul.nav li {padding: .5em;}
.nav a:visited {color: #000000;}