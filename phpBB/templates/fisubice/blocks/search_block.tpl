<script>
<!--
function checkSearch()
{
if (document.search_block.search_engine.value == 'google')
{
window.open('http://www.google.com/search?q=' + document.search_block.search_keywords.value, '_google', '');
return false;
}
else
{
return true;
}
}
//-->
</script>
<form name="search_block" method="post" action="{U_SEARCH}" onsubmit="return checkSearch()">
<div class="container-fluid px-0">
  <div class="row px-0 py-2"> 
    <div class="col ctr"><input class="post" type="text" name="search_keywords" size="15" /></div>
  </div>
  <div class="row"> 
    <div class="col ctr">
	  <select class="post" name="search_engine">
	    <option value="site">{L_FORUM_OPTION}</option>
	    <option value="google">Google</option>
	  </select>
    </div>
  </div>
  <div class="row"> 
    <div class="col ctr py-2"><input class="mainoption" type="submit" value="{L_SEARCH}" /></div>
  </div>
  <div class="row"> 
    <div class="col ctr"><a href="{U_SEARCH}" class="gensmall">{L_ADVANCED_SEARCH}</a></div>
  </div>
</div>
<input type="hidden" name="search_fields" value="all" />
<input type="hidden" name="show_results" value="topics" />
</form>