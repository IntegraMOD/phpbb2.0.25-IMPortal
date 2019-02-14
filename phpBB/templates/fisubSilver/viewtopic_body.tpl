<div class="container-fluid">
  <div class="row"> 
    <div class="col-9">
      <a class="maintitle" href="{U_VIEW_TOPIC}">{TOPIC_TITLE}</a>
    </div>
    <div class="col-3">
      <span class="font-weight-bold">{PAGINATION}</span>
    </div>
  </div>

  <div class="row pl-2 pb-2">
    <div class="col-4 p-0">
      <div class="nav"><div class="nw py-1"><a class="postbtn" href="{U_POST_NEW_TOPIC}">{L_BUTTON_TOPIC_NEW}</a></div>&nbsp;<div class="nw py-1"><a class="postbtn" href="{U_POST_REPLY_TOPIC}">{L_BUTTON_TOPIC_REPLY}</a></div></div>
    </div>
    <div class="col-8 p-1 my-auto">
      <span class="nav gensmall">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}">{L_INDEX}</a>{NAV_CAT_DESC}</span>
    </div>
  </div>


<div class="container-fluid forumline">
  <div class="row catHead">
    <div class="col pt-1">
      <span class="nav genmed float-right"><a href="{U_VIEW_OLDER_TOPIC}" class="nav">{L_VIEW_PREVIOUS_TOPIC}</a>&nbsp::&nbsp;<a href="{U_VIEW_NEWER_TOPIC}" class="nav">{L_VIEW_NEXT_TOPIC}</a> &nbsp;</span>
    </div>
  </div>
  <div class="row">
    <div class="col12">
      {POLL_DISPLAY}
    </div>
  </div>

  <div class="row th font-weight-bold">
    <div class="col-2 py-1 d-inline-block mx-auto">
      {L_AUTHOR}
    </div>
    <div class="col-10 py-1 d-inline-block mx-auto">
      {L_MESSAGE}
    </div>
  </div>
<!-- BEGIN postrow -->

  <div class="row">
    <div class="col-2 {postrow.ROW_CLASS} py-1">
      <span class="name"><a name="{postrow.U_POST_ID}"></a><b>{postrow.POSTER_NAME}</b></span><br /><span class="postdetails">{postrow.POSTER_RANK}<br />{postrow.RANK_IMAGE}<span class="resp">{postrow.POSTER_AVATAR}<br /></span><br />{postrow.POSTER_JOINED}<br />{postrow.POSTER_POSTS}<br />{postrow.POSTER_FROM}</span><br />
    </div>

    <div class="col-10 {postrow.ROW_CLASS} py-1">
      	<div class="row">
			<div class="col-8"><a href="{postrow.U_MINI_POST}"><img src="{postrow.MINI_POST_IMG}" width="12" height="9" alt="{postrow.L_MINI_POST_ALT}" title="{postrow.L_MINI_POST_ALT}"  /></a><span class="postdetails">{L_POSTED}: {postrow.POST_DATE}<span class="gen">&nbsp;</span>&nbsp; &nbsp;{L_POST_SUBJECT}: {postrow.POST_SUBJECT}</span></div>
			<div class="col-4 text-right">{postrow.QUOTE_IMG} {postrow.EDIT_IMG} {postrow.DELETE_IMG} {postrow.IP_IMG}</div>
		</div>
      	<div class="row hr my-2"></div>
      	<div class="row p-2">
			<span class="postbody">{postrow.MESSAGE}{postrow.SIGNATURE}</span><span class="gensmall">{postrow.EDITED_MESSAGE}</span>
		</div>
    </div>
  </div>
  <div class="row">
    <div class="col {postrow.ROW_CLASS}">
      	<div class="row">
			<div class="col-2"><span class="nav"><a href="#top" class="nav fa fa-arrow-circle-up" title="{L_BACK_TO_TOP}">&nbsp;</a></span></div>
			<div class="col-10 d-inline-block">{postrow.PROFILE_IMG} {postrow.PM_IMG} {postrow.EMAIL_IMG} {postrow.WWW_IMG} {postrow.FB_IMG} {postrow.IG_IMG} {postrow.PT_IMG} {postrow.SKP_IMG}</div>
		</div>
      	<div class="row py-1"></div>
    </div>
  </div>
  <div class="row row3">
    <div class="col">&nbsp;</div>
  </div>
<!-- END postrow -->
  <div class="row catBottom">
    <div class="col my-auto text-center"><form method="post" action="{S_POST_DAYS_ACTION}"><span class="gensmall">{L_DISPLAY_POSTS}: {S_SELECT_POST_DAYS}&nbsp;{S_SELECT_POST_ORDER}&nbsp;<input type="submit" value="{L_GO}" class="liteoption" name="submit" /></span></form></div>
  </div>
</div>


  <div class="row  pl-2 pb-2">
    <div class="col-4 p-0">
      <div class="nav"><div class="nw py-1"><a class="postbtn" href="{U_POST_NEW_TOPIC}">{L_BUTTON_TOPIC_NEW}</a></div>&nbsp;<div class="nw py-1"><a class="postbtn" href="{U_POST_REPLY_TOPIC}">{L_BUTTON_TOPIC_REPLY}</a></div></div>
    </div>
    <div class="col-8 py-1 d-inline-block mx-auto">
      <span class="nav gensmall">&nbsp;&nbsp;&nbsp;<a href="{U_INDEX}">{L_INDEX}</a>{NAV_CAT_DESC}</span>
    </div>
  </div>
  <div class="row">
    <div class="col-7 nav">{PAGE_NUMBER}</div>
    <div class="col-5 gensmall text-right">{S_TIMEZONE}</div>
  </div>
  <div class="row">
    <div class="col gen text-right">{JUMPBOX}</div>
  </div>
  <div class="row">
    <div class="col-7">{S_WATCH_TOPIC_IMG}&nbsp;{S_TOPIC_ADMIN}</div>
    <div class="col-5 gensmall text-right">{S_AUTH_LIST}</div>
  </div>
</div>
