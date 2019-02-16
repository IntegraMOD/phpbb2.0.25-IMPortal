<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="{S_CONTENT_DIRECTION}" lang="en" xml:lang="en">
<head>
<meta charset="{S_CONTENT_ENCODING}" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="copyright" content="2001, 2005 phpBB Group" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
{NAV_LINKS}
{META}

<title>{SITENAME} :: {PAGE_TITLE}</title>
<link rel="stylesheet" href="templates/fisubSilver/{T_HEAD_STYLESHEET}" type="text/css">
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="templates/_js/importal.js"></script>
<!-- BEGIN switch_enable_pm_popup -->
<script>
<!--
	if ( {PRIVATE_MESSAGE_NEW_FLAG} )
	{
		window.open('{U_PRIVATEMSGS_POPUP}', '_phpbbprivmsg', 'HEIGHT=225,resizable=yes,WIDTH=400');;
	}
//-->
</script>
<!-- END switch_enable_pm_popup -->

<script>
jQuery(document).ready(function() {
	jQuery('.toggle-nav').click(function(e) {
		jQuery(this).toggleClass('active');
		jQuery('.menu ul').toggleClass('active');

		e.preventDefault();
	});
});
</script>


</head>
<body>
{QBARS}
<a id="top"></a>
<div class="container-fluid">
  <div style="display:none" class="respnav">
    <nav class="menu w-100">
	  <ul class="active pl-0">
		<li>{QMENUS}</li>
	  </ul>
	  <a class="toggle-nav" href="#">&#9776;</a>
    </nav>
  </div>
  <div class="bodyline my-2" style="z-index: 1;">
  <div class="container-fluid">
  <div class="row px-0">
    <div class="col-4 d-inline-block float-lg-left my-2">
      <a href="{U_INDEX}"><img class="img-fluid " src="images/logo/logo_phpBB.gif" alt="{L_INDEX}" /></a>
    </div>
    <div class="col-8 d-inline-block text-center my-auto clearfix">
      <span class="maintitle">{SITENAME}</span><br /><span class="gen">{SITE_DESCRIPTION}<br />&nbsp; </span>
    </div>
  </div>
  </div>
  <div class="row m-1"></div>
  <div class="container-fluid">
  <div class="nav text-center">
	<div class="col mainmenu qb resp"> 
	{QMENUS}  
	</div>
  </div>
  <div class="row my-3"></div>
  </div>


<div class="container-fluid">
  <div class="row align-items-start">
    {PORTAL_HEADER}
    <div class="col-sm pl-0">
      <div class="">