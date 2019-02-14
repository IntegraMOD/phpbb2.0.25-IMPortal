<div class="row">
  <div class="col row1 gensmall font-weight-bold">{POLL_QUESTION}</div>
</div>
<!-- BEGIN poll_option -->
<div class="row">
  <div class="col row1">
    <div class="container-fluid px-0 mx-0">
	  <div class="row">
        <div class="col-8 row1 gensmall text-left">{poll_option.POLL_OPTION_CAPTION}</div>
        <div class="col-4 row1 gensmall nowrap">[ {poll_option.POLL_OPTION_RESULT} ]</div>
      </div>
	  <div class="row">
        <div class="col-8 row1 text-left"><img src="{POLL_OPTION_IMG_L}" width="4" alt="" height="12" /><img src="{poll_option.POLL_OPTION_IMG}" width="{poll_option.POLL_OPTION_IMG_WIDTH}" height="12" alt="{poll_option.POLL_OPTION_PERCENT}" /><img src="{POLL_OPTION_IMG_R}" width="4" alt="" height="12" /></div>
        <div class="col-4 row1 gensmall nowrap">{poll_option.POLL_OPTION_PERCENT}</div>
      </div>
    </div>
  </div>
</div>
<!-- END poll_option -->
<div class="row">
  <div class="col row1 gensmall font-weight-bold">{L_TOTAL_VOTES} : {TOTAL_VOTES}</div>
</div>
<div class="row">
  <div class="col row1 gensmall font-weight-bold"><a href="{U_VIEW_RESULTS}">{L_VIEW_RESULTS}</a></div>
</div>