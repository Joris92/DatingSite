<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script> <!--stylesheets/jqueryUI.css"-->
<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

<title>bla bla bla</title>

<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" >

<script type="text/javascript" src=<? echo base_url("javascript/navigation.js"); ?>></script>
</head>
<body>
<div id="tabs">
<ul>
<li><a href= <? echo $home; ?> >Home</a></li>
<li><a href= <? echo $profile; ?> >Search</a></li>
<li><a href= <? echo $matches; ?> >Matches</a></li>
<li><a href= <? echo $edit; ?> >My profile</a></li>
<li><a href= <? echo $test; ?> >Test</a></li>
</ul>
</div>
</body>
</html>