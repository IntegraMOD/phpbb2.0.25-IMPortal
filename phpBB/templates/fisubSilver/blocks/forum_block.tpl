<!-- BEGIN fetchpost_row -->
<div class="container-fluid px-0">
  <div class="row catHead"> 
    <div class="col genmed"><b>{L_ANNOUNCEMENT}: {fetchpost_row.TITLE}</b></div>
  </div>
  <div class="row row2"> 
    <div class="col gensmall text-left">{L_POSTED}: <b>{fetchpost_row.POSTER}</b> @ {fetchpost_row.TIME}</div>
  </div>
  <div class="row row1"> 
    <div class="col gensmall text-left" style="line-height:150%">{fetchpost_row.TEXT}<br /><br />{fetchpost_row.OPEN}<a href="{fetchpost_row.U_READ_FULL}">{fetchpost_row.L_READ_FULL}</a>{fetchpost_row.CLOSE}</div>
  </div>
  <div class="row row3"> 
    <div class="col gensmall text-left">{L_COMMENTS}: {fetchpost_row.REPLIES} :: <a href="{fetchpost_row.U_VIEW_COMMENTS}">{L_VIEW_COMMENTS}</a> (<a href="{fetchpost_row.U_POST_COMMENT}">{L_POST_COMMENT}</a>)</div>
  </div>
</div>
<!-- END fetch_post_row -->
