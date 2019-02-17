  <div class="container">
    <div class="row mx-4">
      <div class="col nw">{INBOX_IMG}&nbsp;{INBOX}</div>
      <div class="col nw">{SENTBOX_IMG}&nbsp;{SENTBOX}</div>
      <div class="col nw">{OUTBOX_IMG}&nbsp;{OUTBOX}</div>
      <div class="col nw">{SAVEBOX_IMG}&nbsp;{SAVEBOX}</div>
    </div>
  </div>
  <br clear="all" />

  <form method="post" action="{S_PRIVMSGS_ACTION}">
  <div class="container-fluid">
    <div class="row"> 
      <div class="col-3 nav py-1 pl-0 nw">{REPLY_PM}</div>
      <div class="col pl-0 mb-0 pr-0 text-right nav"><a href="{U_INDEX}" class="nav">{L_INDEX}</a></div>
    </div>




  <div class="container-fluid forumline">
    <div class="row th">
      <div class="col ctr">{BOX_NAME} :: {L_MESSAGE}</div>
    </div>
    <div class="row genmed row2">
      <div class="col-2">{L_FROM}:</div>
      <div class="col">{MESSAGE_FROM}</div>
    </div>
    <div class="row genmed row2">
      <div class="col-2">{L_TO}:</div>
      <div class="col">{MESSAGE_TO}</div>
    </div>
    <div class="row genmed row2">
      <div class="col-2">{L_POSTED}:</div>
      <div class="col">{POST_DATE}</div>
    </div>
    <div class="row genmed row2">
      <div class="col-2 pb-1">{L_SUBJECT}:</div>
      <div class="col pb-1">{POST_SUBJECT}</div>
	  <div class="col pb-1 text-right">{QUOTE_PM_IMG} {EDIT_PM_IMG}</div>

    </div>
    <div class="row row1 mt-1 py-1">
      <div class="col postbody">{MESSAGE}</div>
    </div>
    <br clear="all" />
    <div class="row row1 mt-1 pt-1"><div class="col text-right">{PROFILE_IMG}&nbsp;{PM_IMG}&nbsp;{EMAIL_IMG}&nbsp;{WWW_IMG}&nbsp;{FB_IMG}&nbsp;{IG_IMG}&nbsp;{PT_IMG}&nbsp;{SKP_IMG}</div></div>
    <div class="row catBottom">{S_HIDDEN_FIELDS} 
      <div class="col-2">&nbsp;</div>
      <div class="col pt-1 ctr"><input type="submit" name="save" value="{L_SAVE_MSG}" class="liteoption" /></div>
      <div class="col pt-1 ctr"><input type="submit" name="delete" value="{L_DELETE_MSG}" class="liteoption" /></div>
      <div class="col-2">&nbsp;</div>
 	</div>
  </div>
  <br clear="all" />
    <div class="row"> 
      <div class="col-3 nav py-1 pl-0 nw">{REPLY_PM}</div>
      <div class="col pl-0 mb-0 text-right gensmall">{S_TIMEZONE}</div>
    </div>
  </div>
  </form>
  <div class="container-fluid">
    <div class="row">
      <div class="col gen pr-0 text-right">{JUMPBOX}</div>
    </div>
  </div>