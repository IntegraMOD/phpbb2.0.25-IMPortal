<form method="post" action="{S_MODE_ACTION}">

  <div class="container-fluid">
    <div class="row my-auto"> 
      <div class="col-4 nav pl-0"><a href="{U_INDEX}">{L_INDEX}</a></div>
      <div class="col pl-0 mb-0 pr-0 text-right genmed">{L_SELECT_SORT_METHOD}:&nbsp;{S_MODE_SELECT}&nbsp;&nbsp;{L_ORDER}&nbsp;{S_ORDER_SELECT}&nbsp;&nbsp;<input type="submit" name="submit" value="{L_SUBMIT}" class="liteoption" /></div>
    </div>
  </div>
 
  <div class="container-fluid forumline mx-0">
    <div class="row th"> 
      <div class="col-1 p-0 py-1 pl-2 thCornerL nowrap">#</div>
      <div class="col-1 px-0 py-1 thTop mx-auto">&nbsp;</div>
      <div class="col text-left pl-0 py-1 thTop mx-auto">{L_USERNAME}</div>
      <div class="col p-0 py-1 ctr thTop mx-auto">{L_EMAIL}</div>
      <div class="col p-0 py-1 ctr thTop mx-auto">{L_FROM}</div>
      <div class="col p-0 py-1 ctr thTop mx-auto">{L_JOINED}</div>
      <div class="col p-0 py-1 ctr thTop mx-auto">{L_POSTS}</div>
      <div class="col p-0 py-1 pl-2 thCornerR mx-auto">{L_WEBSITE}</div>
	</div>
	<!-- BEGIN memberrow -->
    <div class="row"> 
      <div class="col-1 {memberrow.ROW_CLASS} gen p-0 py-1 pl-2 thCornerL nowrap">{memberrow.ROW_NUMBER}</div>
      <div class="col-1 {memberrow.ROW_CLASS} px-0 py-1 thTop mx-auto">{memberrow.PM_IMG}</div>
      <div class="col {memberrow.ROW_CLASS} text-left gen pl-0 py-1 thTop mx-auto"><a href="{memberrow.U_VIEWPROFILE}" class="gen">{memberrow.USERNAME}</a></div>
      <div class="col {memberrow.ROW_CLASS} p-0 py-1 ctr thTop mx-auto">{memberrow.EMAIL_IMG}</div>
      <div class="col {memberrow.ROW_CLASS} gen p-0 py-1 ctr thTop mx-auto">{memberrow.FROM}</div>
      <div class="col {memberrow.ROW_CLASS} gensmall p-0 py-1 ctr thTop mx-auto">{memberrow.JOINED}</div>
      <div class="col {memberrow.ROW_CLASS} gen p-0 py-1 ctr thTop mx-auto">{memberrow.POSTS}</div>
      <div class="col {memberrow.ROW_CLASS} p-0 py-1 pl-2 thCornerR mx-auto">{memberrow.WWW_IMG}</div>
	</div>
    <!-- END memberrow -->
    <div class="row catBottom"> 
      <div class="col">&nbsp;</div>
	</div>
  </div>

  <div class="container-fluid mx-0 pr-0">
    <div class="row">
      <div class="col-7 nav">{PAGE_NUMBER}</div>
      <div class="col-5 gensmall text-right">{S_TIMEZONE}<br /><span class="nav">{PAGINATION}</span></div>
    </div>
    <div class="row">
      <div class="col gen pr-0 text-right">{JUMPBOX}</div>
    </div>
  </div>

</form>