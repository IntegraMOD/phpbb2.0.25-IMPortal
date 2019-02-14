<!-- mod : categories hierarchy v 2 -->

<form method="post" action="{S_POST_DAYS_ACTION}">



  <div class="container-fluid">
    <div class="row"> 
      <div class="col pl-0">
        <span class="nav"><a href="{U_INDEX}">{L_INDEX}</a>{NAV_CAT_DESC}</span>
      </div>
    </div>
  </div> 

{BOARD_INDEX}

  <div class="container-fluid pl-0">
    <div class="row"> 
      <div class="col-2 nw py-1 text-left"><a class="postbtn" href="{U_POST_NEW_TOPIC}">{L_BUTTON_TOPIC_NEW}</a></div>
      <div class="col px-0"><span class="gensmall"><b>{L_MODERATOR}: {MODERATORS}<br />{LOGGED_IN_USER_LIST}</b></span></div>
      <div class="col-3 px-0 mb-0 text-right align-text-bottom"><span class="gensmall"><b>{PAGINATION}</b><br /><a href="{U_MARK_READ}">{L_MARK_TOPICS_READ}</a></span></div>
    </div>
  </div>

  <div class="container-fluid forumline mx-0">
    <div class="row th"> 
      <div class="col-6 p-0 py-1 pl-2 thCornerL">{L_TOPICS}</div>
      <div class="col-1 p-0 py-1 ctr thTop mx-auto">{L_REPLIES}</div>
      <div class="col-1 p-0 py-1 ctr thTop mx-auto">{L_AUTHOR}</div>
      <div class="col-1 p-0 py-1 ctr thTop mx-auto">{L_VIEWS}</div>
      <div class="col-3 p-0 py-1 pl-2 thCornerR mx-auto">{L_LASTPOST}</div>
	</div>
	<!-- BEGIN topicrow -->
    <div class="row"> 
      <div class="col-1 px-0 pt-1 row1 ctr align-middle"><img src="{topicrow.TOPIC_FOLDER_IMG}" width="19" height="18" alt="{topicrow.L_TOPIC_FOLDER_ALT}" title="{topicrow.L_TOPIC_FOLDER_ALT}" /></div>
      <div class="col-5 pr-0 pt-1 row1"><span class="topictitle">{topicrow.NEWEST_POST_IMG}{topicrow.TOPIC_TYPE}<a href="{topicrow.U_VIEW_TOPIC}" class="topictitle">{topicrow.TOPIC_TITLE}</a></span><span class="gensmall"><br />{topicrow.GOTO_PAGE}</span></div>
      <div class="col-1 px-0 pt-1 row2 ctr postdetails">{topicrow.REPLIES}</div>
      <div class="col-1 px-0 pt-1 row3 ctr name">{topicrow.TOPIC_AUTHOR}</div>
      <div class="col-1 px-0 pt-1 row2 ctr postdetails">{topicrow.VIEWS}</div>
      <div class="col-3 px-0 pt-1 row3Right ctr postdetails">{topicrow.LAST_POST_TIME}<br />{topicrow.LAST_POST_AUTHOR} {topicrow.LAST_POST_IMG}</div>
      <hr class=" w-100 p-0 m-0">
	</div>
 	<!-- END topicrow -->
	<!-- BEGIN switch_no_topics -->
    <div class="row"> 
      <div class="col row1 gen py-4">{L_NO_TOPICS}</div> 
	</div>
	<!-- END switch_no_topics -->

    <div class="row catBottom"> 
      <div class="col genmed ctr align-middle pt-1">{L_DISPLAY_TOPICS}:&nbsp;{S_SELECT_TOPIC_DAYS}&nbsp;<input type="submit" class="liteoption" value="{L_GO}" name="submit" /></div>
	</div>
  </div>

  <div class="container-fluid pl-0">
    <div class="row"> 
      <div class="col-2 pt-2"><div class="nw py-1 text-left"><a class="postbtn" href="{U_POST_NEW_TOPIC}">{L_BUTTON_TOPIC_NEW}</a></div></div>
 	  <div class=""></div>
      <div class="col mb-0 pr-0 text-right gensmall"><b>{PAGINATION}</b><br />{S_TIMEZONE}</div>
    </div>
    <div class="row"> 
      <div class="col pl-3 my-auto nav"><a href="{U_INDEX}">{L_INDEX}</a>{NAV_CAT_DESC}</div>
    </div>
    <div class="row"> 
      <div class="col">{PAGE_NUMBER}</div>
    </div>
  </div>
</form>

  <div class="container-fluid pr-0">
    <div class="row"> 
      <div class="col pr-0 gen text-right">{JUMPBOX}</div>
	</div>
  </div>
 
  <div class="container-fluid m-0 p-0">
    <div class="row">

	  <div class="col-7">
	    <div class="row nw"> 
	      <div class="col"><img src="{FOLDER_ANNOUNCE_IMG}" alt="{L_ANNOUNCEMENT}" width="19" height="18" />&nbsp;{L_ANNOUNCEMENT}</div>
	      <div class="col"><img src="{FOLDER_STICKY_IMG}" alt="{L_STICKY}" width="19" height="18" />&nbsp;{L_STICKY}</div>
		</div>
	
	    <div class="row nw"> 
	      <div class="col"><img src="{FOLDER_NEW_IMG}" alt="{L_NEW_POSTS}" width="19" height="18" />&nbsp;{L_NEW_POSTS}</div>
	      <div class="col"><img src="{FOLDER_IMG}" alt="{L_NO_NEW_POSTS}" width="19" height="18" />&nbsp;{L_NO_NEW_POSTS}</div>
		</div>
	    <div class="row nw"> 
	      <div class="col"><img src="{FOLDER_HOT_NEW_IMG}" alt="{L_NEW_POSTS_HOT}" width="19" height="18" />&nbsp;{L_NEW_POSTS_HOT}</div>
	      <div class="col"><img src="{FOLDER_HOT_IMG}" alt="{L_NO_NEW_POSTS_HOT}" width="19" height="18" />&nbsp;{L_NO_NEW_POSTS_HOT}</div>
		</div>
	    <div class="row nw"> 
	      <div class="col"><img src="{FOLDER_LOCKED_NEW_IMG}" alt="{L_NEW_POSTS_LOCKED}" width="19" height="18" />&nbsp;{L_NEW_POSTS_LOCKED}</div>
	      <div class="col"><img src="{FOLDER_LOCKED_IMG}" alt="{L_NO_NEW_POSTS_LOCKED}" width="19" height="18" />&nbsp;{L_NO_NEW_POSTS_LOCKED}</div>
		</div>
  	  </div>
      <div class="col-5 gensmall text-right">{S_AUTH_LIST}</div>
    </div>
  </div>