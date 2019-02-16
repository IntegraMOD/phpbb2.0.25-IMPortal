<div class="row">
  <div class="col row1">
    <div class="container-fluid px-0 mx-0">
	<form method="POST" action="{S_POLL_ACTION}">
	  <div class="row">
        <div class="col row1 gensmall font-weight-bold">{POLL_QUESTION}</div>
      </div>
      <!-- BEGIN poll_option -->
      <div class="row px-0">
        <div class="col-1 row1 pl-1 text-left"><input type="radio" name="vote_id" value="{poll_option.POLL_OPTION_ID}" /></div>
        <div class="col row1 pl-1 pr-0 text-left gensmall">{poll_option.POLL_OPTION_CAPTION}</div>
      </div>
      <!-- END poll_option -->
      <div class="row">
        <div class="col row1 gensmall font-weight-bold">
		<!-- BEGIN switch_user_logged_in -->
		<input type="submit" name="submit" value="{L_SUBMIT_VOTE}" class="liteoption" />
		<!-- END switch_user_logged_in -->		
		<!-- BEGIN switch_user_logged_out -->
		{LOGIN_TO_VOTE}
		<!-- END switch_user_logged_out -->
        </div>
      </div>
      {S_HIDDEN_FIELDS}
	</form>
    </div>
  </div>
</div>