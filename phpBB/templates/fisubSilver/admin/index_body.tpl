
<h1>{L_WELCOME}</h1>

<p class="genmed">{L_ADMIN_INTRO}</p>

<h1>{L_FORUM_STATS}</h1>

<div class="container-fluid forumline">
  <div class="row th thH">
    <div class="col-3">{L_STATISTIC}</div>
    <div class="col-3">{L_VALUE}</div>
    <div class="col-3">{L_STATISTIC}</div>
    <div class="col-3">{L_VALUE}</div>
  </div>

  <div class="row thH">
    <div class="col-3 row1">{L_NUMBER_POSTS}:</div>
    <div class="col-3 row2"><b>{NUMBER_OF_POSTS}</b></div>
    <div class="col-3 row1">{L_POSTS_PER_DAY}:</div>
    <div class="col-3 row2"><b>{POSTS_PER_DAY}</b></div>
  </div>
  <div class="row thH">
    <div class="col-3 row1">{L_NUMBER_TOPICS}:</div>
    <div class="col-3 row2"><b>{NUMBER_OF_TOPICS}</b></div>
    <div class="col-3 row1">{L_TOPICS_PER_DAY}:</div>
    <div class="col-3 row2"><b>{TOPICS_PER_DAY}</b></div>
  </div>
  <div class="row thH">
    <div class="col-3 row1">{L_NUMBER_USERS}:</div>
    <div class="col-3 row2"><b>{NUMBER_OF_USERS}</b></div>
    <div class="col-3 row1">{L_USERS_PER_DAY}:</div>
    <div class="col-3 row2"><b>{USERS_PER_DAY}</b></div>
  </div>
  <div class="row thH">
    <div class="col-3 row1">{L_BOARD_STARTED}:</div>
    <div class="col-3 row2 gensmall"><b>{START_DATE}</b></div>
    <div class="col-3 row1">{L_AVATAR_DIR_SIZE}:</div>
    <div class="col-3 row2"><b>{AVATAR_DIR_SIZE}</b></div>
  </div>
  <div class="row thH">
    <div class="col-3 row1">{L_DB_SIZE}:</div>
    <div class="col-3 row2"><b>{DB_SIZE}</b></div>
    <div class="col-3 row1">{L_GZIP_COMPRESSION}:</div>
    <div class="col-3 row2"><b>{GZIP_COMPRESSION}</b></div>
  </div>
  <div class="row thH">
    <div class="col-3 row1">{L_PHP_VERSION}:</div>
    <div class="col-3 row2"><b>{PHP_VERSION}</b></div>
    <div class="col-3 row1">{L_MYSQL_VERSION}:</div>
    <div class="col-3 row2"><b>{MYSQL_VERSION}</b></div>
  </div>
</div>

<h1>{L_VERSION_INFORMATION}</h1>

{VERSION_INFO}

<br />

<h1>{L_WHO_IS_ONLINE}</h1>


<div class="container-fluid forumline">
  <div class="row th thH">
    <div class="col-2">{L_USERNAME}</div>
    <div class="col-3">{L_STARTED}</div>
    <div class="col-3">{L_LAST_UPDATE}</div>
    <div class="col-2">{L_FORUM_LOCATION}</div>
    <div class="col-2">{L_IP_ADDRESS}</div>
  </div>
  <!-- BEGIN reg_user_row -->
  <div class="row thH">
    <div class="col-2 {reg_user_row.ROW_CLASS} gen"><a href="{reg_user_row.U_USER_PROFILE}" class="gen">{reg_user_row.USERNAME}</a></div>
    <div class="col-3 {reg_user_row.ROW_CLASS} gensmall">{reg_user_row.STARTED}</div>
    <div class="col-3 {reg_user_row.ROW_CLASS} gensmall">{reg_user_row.LASTUPDATE}</div>
    <div class="col-2 {reg_user_row.ROW_CLASS} gensmall"><a href="{reg_user_row.U_FORUM_LOCATION}" class="gen">{reg_user_row.FORUM_LOCATION}</a></div>
    <div class="col-2 {reg_user_row.ROW_CLASS} gensmall"><a href="{reg_user_row.U_WHOIS_IP}" class="gen" target="_phpbbwhois">{reg_user_row.IP_ADDRESS}</a></div>
  </div>
  <!-- END reg_user_row -->
  <div class="row py-1"></div>
  <!-- BEGIN guest_user_row -->
  <div class="row thH">
    <div class="col-3 {guest_user_row.ROW_CLASS} gen">{guest_user_row.USERNAME}</div>
    <div class="col-3 {guest_user_row.ROW_CLASS} gensmall">{guest_user_row.STARTED}</div>
    <div class="col-2 {guest_user_row.ROW_CLASS} gensmall">{guest_user_row.LASTUPDATE}</div>
    <div class="col-2 {guest_user_row.ROW_CLASS} gensmall"><a href="{guest_user_row.U_FORUM_LOCATION}" class="gen">{guest_user_row.FORUM_LOCATION}</a></div>
    <div class="col-2 {guest_user_row.ROW_CLASS} gensmall"><a href="{guest_user_row.U_WHOIS_IP}" target="_phpbbwhois">{guest_user_row.IP_ADDRESS}</a></div>
  </div>
  <!-- END guest_user_row -->
</div>
<br />