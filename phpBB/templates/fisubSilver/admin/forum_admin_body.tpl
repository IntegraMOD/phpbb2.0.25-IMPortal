
<h1>{L_FORUM_TITLE}</h1>

<p>{L_FORUM_EXPLAIN}</p>

<form method="post" action="{S_FORUM_ACTION}">
<table width="100%" cellpadding="4" cellspacing="1" border="0" class="forumline" align="center">
	<tr>
		<th class="thHead" colspan="7">{L_FORUM_TITLE}</th>
	</tr>
	<!-- BEGIN catrow -->
	<tr>
		<td class="catLeft"><span class="cattitle"><b><a href="{catrow.U_VIEWCAT}">{catrow.CAT_DESC}</a></b></span></td>
		<td class="cat" align="center" valign="middle"><span class="genmed">{L_TOPICS}</span></td>
		<td class="cat" align="center" valign="middle"><span class="genmed">{L_POSTS}</span></td>

		<td class="cat" align="center" valign="middle"><span class="gen"><a class="fa fa-edit" aria-hidden="true" href="{catrow.U_CAT_EDIT}" title="{L_EDIT}">&nbsp;</a></span></td>
		<td class="cat" align="center" valign="middle"><span class="gen"><a class="fa fa-trash" aria-hidden="true" href="{catrow.U_CAT_DELETE}" title="{L_DELETE}">&nbsp;</a></span></td>
		<td class="cat" align="center" valign="middle" nowrap="nowrap"><span class="gen"><a class="fa fa-sort-up" aria-hidden="true" href="{catrow.U_CAT_MOVE_UP}" title="{L_MOVE_UP}">&nbsp;</a> <a class="fa fa-sort-down" aria-hidden="true" href="{catrow.U_CAT_MOVE_DOWN}" title="{L_MOVE_DOWN}">&nbsp;</a></span></td>
		<td class="catRight" align="center" valign="middle"><span class="gen">&nbsp;</span></td>
	</tr>
	<!-- BEGIN forumrow -->
	<tr> 
		<td class="row2"><span class="gen"><a href="{catrow.forumrow.U_VIEWFORUM}" target="_new">{catrow.forumrow.FORUM_NAME}</a></span><br /><span class="gensmall">{catrow.forumrow.FORUM_DESC}</span></td>
		<td class="row1" align="center" valign="middle"><span class="gen">{catrow.forumrow.NUM_TOPICS}</span></td>
		<td class="row2" align="center" valign="middle"><span class="gen">{catrow.forumrow.NUM_POSTS}</span></td>
		<td class="row1" align="center" valign="middle"><span class="gen"><a class="fa fa-edit" aria-hidden="true" href="{catrow.forumrow.U_FORUM_EDIT}" title="{L_EDIT}">&nbsp;</a></span></td>
		<td class="row2" align="center" valign="middle"><span class="gen"><a class="fa fa-trash" aria-hidden="true" href="{catrow.forumrow.U_FORUM_DELETE}" title="{L_DELETE}">&nbsp;</a></span></td>
		<td class="row1" align="center" valign="middle"><span class="gen"><a class="fa fa-sort-up" aria-hidden="true" href="{catrow.forumrow.U_FORUM_MOVE_UP}" title="{L_MOVE_UP}">&nbsp;</a> <br /> <a class="fa fa-sort-down" aria-hidden="true" href="{catrow.forumrow.U_FORUM_MOVE_DOWN}" title="{L_MOVE_DOWN}">&nbsp;</a></span></td>
		<td class="row2" align="center" valign="middle"><span class="gen"><a class="fa fa-refresh" aria-hidden="true" href="{catrow.forumrow.U_FORUM_RESYNC}" title="{L_RESYNC}">&nbsp;</a></span></td>
	</tr>
	<!-- END forumrow -->
	<tr>
		<td colspan="7" class="row2"><input class="post" type="text" name="{catrow.S_ADD_FORUM_NAME}" /> <input type="submit" class="liteoption"  name="{catrow.S_ADD_FORUM_SUBMIT}" value="{L_CREATE_FORUM}" /></td>
	</tr>
	<tr>
		<td colspan="7" height="1" class="spaceRow"><img src="../templates/fisubSilver/images/spacer.gif" alt="" width="1" height="1" /></td>
	</tr>
	<!-- END catrow -->
	<tr>
		<td colspan="7" class="catBottom"><input class="post" type="text" name="categoryname" /> <input type="submit" class="liteoption"  name="addcategory" value="{L_CREATE_CATEGORY}" /></td>
	</tr>
</table>
</form>
