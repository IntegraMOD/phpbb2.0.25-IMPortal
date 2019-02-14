<!-- BEGIN switch_user_logged_in -->
<div class="container-fluid px-0">
  <div class="row row1 py-1"> 
    <div class="col gensmall">{AVATAR_IMG}</div>
  </div>
  <div class="row row1"> 
    <div class="col name">{U_NAME_LINK}</div>
  </div>
  <div class="row row1"> 
    <div class="col gensmall">{LAST_VISIT_DATE}</div>
  </div>
  <div class="row row1">
    <div class="col gensmall">{CURRENT_TIME}</div>
  </div>
  <div class="row row1"> 
    <div class="col gensmall"><a href="{U_SEARCH_NEW}">{L_NEW_SEARCH}</a></div>
  </div>
  <div class="row row1"> 
    <div class="col gensmall"><a href="{U_SEARCH_UNANSWERED}">{L_SEARCH_UNANSWERED}</a></div>
  </div>
  <div class="row row1"> 
    <div class="col gensmall"><a href="{U_SEARCH_SELF}">{L_SEARCH_SELF}</a></div>
  </div>
</div>
<!-- END switch_user_logged_in -->
<!-- BEGIN switch_user_logged_out -->
<form method="post" action="{S_LOGIN_ACTION}">
  <div class="container-fluid text-center">
    <div class="row pb-2">
      <div class="col cattitle pt-1">{L_LOGIN}</div>
    </div>
    <div class="row row1">
      <div class="col ctr px-0 genmed">
        <div class="">{L_USERNAME}:<input class="post" type="text" name="username" size="10" /></div>
		<div class="">{L_PASSWORD}:<input class="post" type="password" name="password" size="10" /></div>
		<!-- BEGIN switch_allow_autologin -->
		<div class="">{L_AUTO_LOGIN}<input class="text" type="checkbox" name="autologin" /></div>
		<!-- END switch_allow_autologin -->
		<div class="">{S_HIDDEN_FIELDS}<input type="submit" class="mainoption gen" name="login" value="{L_LOGIN}" /></div>
		<div class="pt-2"><a href="{U_SEND_PASSWORD}" class="gensmall">{L_SEND_PASSWORD}</a></div>
	  </div>
    </div>
  </div>
</form>
<!-- END switch_user_logged_out -->