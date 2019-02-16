<!-- mod : categories hierarchy v 2 -->
<div class="container-fluid">
	<!-- BEGIN switch_user_logged_in -->
	<div class="row">
	  <div class="p-0 flex-fill gensmall">{LAST_VISIT_DATE}</div>
	  <div class="p-0 flex-fill text-right"><a href="{U_SEARCH_NEW}" class="gensmall">{L_SEARCH_NEW}</a></div>
	</div>
	<!-- END switch_user_logged_in -->
	
	<div class="row">
	  <div class="p-0 flex-fill gensmall">{CURRENT_TIME}</div>
	<!-- BEGIN switch_user_logged_in -->
	  <div class="p-0 flex-fill text-right"><a href="{U_SEARCH_SELF}" class="gensmall">{L_SEARCH_SELF}</a></div>
	<!-- END switch_user_logged_in -->
	<!-- BEGIN switch_user_logged_out -->
	  <div class="p-0 flex-fill text-right"><a href="#" class="gensmall"></a></div>
	<!-- END switch_user_logged_out -->
	 
	</div>
	
	<div class="row">
	  <div class="p-0 flex-fill text-nowrap"><a href="{U_INDEX}" class="nav">{L_INDEX}</a>{NAV_CAT_DESC}</div>
	  <div class="p-0 flex-fill text-right"><a href="{U_SEARCH_UNANSWERED}" class="gensmall">{L_SEARCH_UNANSWERED}</a></div>
	</div>
</div>
<div class="row m-1"></div>

{BOARD_INDEX}

<div class="container-fluid">
	<div class="d-flex">
	  <div class="p-0 flex-fill">
 	<!-- BEGIN switch_user_logged_in -->
 		<a href="{U_MARK_READ}" class="gensmall">{L_MARK_FORUMS_READ}</a>
 	<!-- END switch_user_logged_in -->
	  </div>
	  <div class="p-0 flex-fill text-right gensmall">{S_TIMEZONE}</div>
	</div>
</div>
<div class="row m-1"></div>
<!-- BEGIN disable_viewonline -->
<div class="container-fluid forumline">
  <div class="row catHead">
    <div class="col cattitle pt-1"><a href="{U_VIEWONLINE}">{L_WHO_IS_ONLINE}</a></div>
  </div>
  <div class="row row1">
	<div class="col-1 pt-4 resp">
	  <img src="templates/fisubSilver/images/whosonline.gif" alt="{L_WHO_IS_ONLINE}" />
	</div>
	<div class="col-11">
	    <div class="row ml-1">
	        <div class=""><span class="gensmall">{TOTAL_POSTS}<br />{TOTAL_USERS}<br />{NEWEST_USER}</span></div>
	    </div>
	    <div class="row ml-1">
             <div class=""><span class="gensmall">{TOTAL_USERS_ONLINE} &nbsp; [ {L_WHOSONLINE_ADMIN} ] &nbsp; [ {L_WHOSONLINE_MOD} ]<br />{RECORD_USERS}<br />{LOGGED_IN_USER_LIST}</span></div>
	    </div>
	</div>
  </div>
</div>
<div class="row m-1"></div>
<!-- END disable_viewonline -->

<!-- BEGIN switch_user_logged_out -->
<div class="row m-1"></div>
<form method="post" action="{S_LOGIN_ACTION}">
<div class="container-fluid forumline">
  <div class="row catHead">
    <div class="col cattitle align-middle"><a id="login"></a>{L_LOGIN_LOGOUT}</div>
  </div>
  <div class="row">
	<div class="col-12">
      <div class="cell row1">
		<span class="gensmall">{L_USERNAME}: 
		<input class="post" type="text" name="username" size="10" />
		&nbsp;&nbsp;&nbsp;{L_PASSWORD}: 
		<input class="post" type="password" name="password" size="10" maxlength="32" />
		<!-- BEGIN switch_allow_autologin -->
		&nbsp;&nbsp; &nbsp;&nbsp;{L_AUTO_LOGIN} 
		<input class="text" type="checkbox" name="autologin" />
		<!-- END switch_allow_autologin -->
		&nbsp;&nbsp;&nbsp; 
		{S_HIDDEN_FIELDS}<input type="submit" class="mainoption" name="login" value="{L_LOGIN}" />
		</span>
      </div>
	</div>
  </div>
  <div class="row m-1"></div>
</div>
</form>
<!-- END switch_user_logged_out -->

<div class="row m-1"></div>

<div class="container-fluid">
  <div class="nav d-lg-flex py-2 text-center">
    <div class="p-0 flex-fill"><img class="mx-1" src="templates/fisubSilver/images/folder_new_big.gif" alt="{L_NEW_POSTS}"/>{L_NEW_POSTS}</div>
	<div class="p-0 flex-fill"><img class="mx-1" src="templates/fisubSilver/images/folder_big.gif" alt="{L_NO_NEW_POSTS}" />{L_NO_NEW_POSTS}</div>
	<div class="p-0 flex-fill"><img class="mx-1" src="templates/fisubSilver/images/folder_locked_big.gif" alt="{L_FORUM_LOCKED}" />{L_NO_NEW_POSTS}</div>
  </div>
</div>