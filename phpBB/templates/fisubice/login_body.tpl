<div class="container-fluid">
  <div class="row">
    <div class="col"><span class="nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></span></div>
  </div>
<form method="post" action="{S_LOGIN_ACTION}">
  <div class="container-fluid forumline text-center">
    <div class="row catHead">
      <div class="col cattitle pt-1">{L_ENTER_PASSWORD}</div>
    </div>
    <div class="row row1">
      <div class="col">
        <div class="">{L_USERNAME}:<input class="post" type="text" name="username" size="10" /></div>
		<div class="">{L_PASSWORD}:<input class="post" type="password" name="password" size="10" maxlength="32" /></div>
		<!-- BEGIN switch_allow_autologin -->
		<div class="">{L_AUTO_LOGIN}<input class="text" type="checkbox" name="autologin" /></div>
		<!-- END switch_allow_autologin -->
		<div class="">{S_HIDDEN_FIELDS}<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" /></div>
		<div class=""><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></div>
	  </div>
    </div>
    <div class="row catBottom">
      <div class="col">&nbsp;</div>
    </div>
  </div>
</form>
</div>
<br clear="all" />