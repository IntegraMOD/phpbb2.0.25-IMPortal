#
# Basic DB data for phpBB2 devel
#
# $Id: mysql_basic.sql 8367 2008-02-02 15:05:23Z acydburn $

# -- Config
INSERT INTO phpbb_config (config_name, config_value) VALUES ('config_id','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_disable','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('sitename','yourdomain.com');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('site_desc','A _little_ text to describe your forum');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_name','phpbb2mysql');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_path','/');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_domain','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('cookie_secure','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('session_length','3600');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_html','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_html_tags','b,i,u,pre');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_bbcode','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_smilies','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_sig','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_namechange','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_theme_create','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_avatar_local','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_avatar_remote','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_avatar_upload','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('enable_confirm', '1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('allow_autologin','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_autologin_time','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('override_user_style','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('posts_per_page','15');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('topics_per_page','50');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('hot_threshold','25');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_poll_options','10');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_sig_chars','255');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_inbox_privmsgs','50');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_sentbox_privmsgs','25');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_savebox_privmsgs','50');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_email_sig','Thanks, The Management');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_email','youraddress@yourdomain.com');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_delivery','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_host','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_username','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smtp_password','');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('sendmail_fix','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('require_activation','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('flood_interval','15');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('search_flood_interval','15');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('search_min_chars','3');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('max_login_attempts', '5');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('login_reset_time', '30');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_email_form','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_filesize','6144');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_max_width','80');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_max_height','80');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_path','images/avatars');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('avatar_gallery_path','images/avatars/gallery');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('smilies_path','images/smiles');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('default_style','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('default_dateformat','D M d, Y g:i a');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('board_timezone','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('prune_enable','1');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('privmsg_disable','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('gzip_compress','0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('coppa_fax', '');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('coppa_mail', '');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('record_online_users', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('record_online_date', '0');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('server_name', 'www.myserver.tld');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('server_port', '80');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('script_path', '/phpBB2/');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('version', '.0.25');
INSERT INTO phpbb_config (config_name, config_value) VALUES ('rand_seed', '0');


# -- Categories
INSERT INTO phpbb_categories (cat_id, cat_title, cat_order, cat_main_type, cat_main, cat_desc, icon) VALUES(1, 'Test category 1', 10, 'c', 0, '', '');

# -- Forums
INSERT INTO phpbb_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, forum_link, forum_link_internal, forum_link_hit_count, forum_link_hit, icon, main_type) VALUES(1, 0, 'Test Forum 1', 'This is just a test forum.', 0, 20, 1, 1, 1, NULL, 0, 0, 0, 1, 1, 1, 1, 3, 3, 1, 1, 3, '', 0, 0, 0, 'images/forumicons/star.png', 'c');
INSERT INTO phpbb_forums (forum_id, cat_id, forum_name, forum_desc, forum_status, forum_order, forum_posts, forum_topics, forum_last_post_id, prune_next, prune_enable, auth_view, auth_read, auth_post, auth_reply, auth_edit, auth_delete, auth_sticky, auth_announce, auth_vote, auth_pollcreate, auth_attachments, forum_link, forum_link_internal, forum_link_hit_count, forum_link_hit, icon, main_type) VALUES(2, 1, 'Test Sub Forum', 'This is just a test sub-forum.', 0, 30, 0, 0, 0, 1550203693, 1, 0, 0, 1, 1, 1, 1, 3, 3, 1, 1, 0, '', 0, 0, 0, 'images/forumicons/idea.png', 'f');

# -- Users
INSERT INTO phpbb_users (user_id, username, user_level, user_regdate, user_password, user_email, user_website, user_occ, user_from, user_interests, user_sig, user_viewemail, user_style, user_fb, user_ig, user_pt, user_skp, user_posts, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_pm, user_notify_pm, user_allow_viewonline, user_rank, user_avatar, user_lang, user_timezone, user_dateformat, user_actkey, user_newpasswd, user_notify, user_active) VALUES ( -1, 'Anonymous', 0, 0, '', '', '', '', '', '', '', 0, NULL, '', '', '', '', 0, 0, 1, 1, 1, 0, 1, 1, NULL, '', '', 0, '', '', '', 0, 0);

# -- username: admin    password: admin (change this or remove it once everything is working!)
INSERT INTO phpbb_users (user_id, username, user_level, user_regdate, user_password, user_email, user_website, user_occ, user_from, user_interests, user_sig, user_viewemail, user_style, user_fb, user_ig, user_pt, user_skp, user_posts, user_attachsig, user_allowsmile, user_allowhtml, user_allowbbcode, user_allow_pm, user_notify_pm, user_popup_pm, user_allow_viewonline, user_rank, user_avatar, user_lang, user_timezone, user_dateformat, user_actkey, user_newpasswd, user_notify, user_active) VALUES ( 2, 'Admin', 1, 0, '21232f297a57a5a743894a0e4a801fc3', 'admin@yourdomain.com', '', '', '', '', '', 1, 1, '', '', '', '', 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, '', 'english', 0, 'd M Y h:i a', '', '', 0, 1);


# -- Ranks
INSERT INTO phpbb_ranks (rank_id, rank_title, rank_min, rank_special, rank_image) VALUES ( 1, 'Site Admin', -1, 1, NULL);


# -- Groups
INSERT INTO phpbb_groups (group_id, group_name, group_description, group_single_user) VALUES (1, 'Anonymous', 'Personal User', 1);
INSERT INTO phpbb_groups (group_id, group_name, group_description, group_single_user) VALUES (2, 'Admin', 'Personal User', 1);


# -- User -> Group
INSERT INTO phpbb_user_group (group_id, user_id, user_pending) VALUES (1, -1, 0);
INSERT INTO phpbb_user_group (group_id, user_id, user_pending) VALUES (2, 2, 0);


# -- Demo Topic
INSERT INTO phpbb_topics (topic_id, topic_title, topic_poster, topic_time, topic_views, topic_replies, forum_id, topic_status, topic_type, topic_vote, topic_first_post_id, topic_last_post_id) VALUES (1, 'Welcome to phpBB 2', 2, '972086460', 0, 0, 1, 0, 0, 0, 1, 1);


# -- Demo Post
INSERT INTO phpbb_posts (post_id, topic_id, forum_id, poster_id, post_time, post_username, poster_ip) VALUES (1, 1, 1, 2, 972086460, NULL, '7F000001');
INSERT INTO phpbb_posts_text (post_id, post_subject, post_text) VALUES (1, NULL, 'This is an example post in your phpBB 2 installation. You may delete this post, this topic and even this forum if you like since everything seems to be working!');


# -- Themes
INSERT INTO phpbb_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES (1, 'fisubSilver', 'FI subSilver', 'css/stylesheet.css', '', 'E5E5E5', '000000', '006699', '5493B4', '', 'DD6900', 'EFEFEF', 'DEE3E7', 'D1D7DC', '', '', '', '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, ''Courier New'', sans-serif', 10, 11, 12, '444444', '006600', 'FFA34F', '', '', '', '', '');
INSERT INTO phpbb_themes (themes_id, template_name, style_name, head_stylesheet, body_background, body_bgcolor, body_text, body_link, body_vlink, body_alink, body_hlink, tr_color1, tr_color2, tr_color3, tr_class1, tr_class2, tr_class3, th_color1, th_color2, th_color3, th_class1, th_class2, th_class3, td_color1, td_color2, td_color3, td_class1, td_class2, td_class3, fontface1, fontface2, fontface3, fontsize1, fontsize2, fontsize3, fontcolor1, fontcolor2, fontcolor3, span_class1, span_class2, span_class3, img_size_poll, img_size_privmsg) VALUES (2, 'subSilver', 'subSilver', 'subSilver.css', '', 'E5E5E5', '000000', '006699', '5493B4', '', 'DD6900', 'EFEFEF', 'DEE3E7', 'D1D7DC', '', '', '', '98AAB1', '006699', 'FFFFFF', 'cellpic1.gif', 'cellpic3.gif', 'cellpic2.jpg', 'FAFAFA', 'FFFFFF', '', 'row1', 'row2', '', 'Verdana, Arial, Helvetica, sans-serif', 'Trebuchet MS', 'Courier, ''Courier New'', sans-serif', 10, 11, 12, '444444', '006600', 'FFA34F', '', '', '', '', '');

INSERT INTO phpbb_themes_name (themes_id, tr_color1_name, tr_color2_name, tr_color3_name, tr_class1_name, tr_class2_name, tr_class3_name, th_color1_name, th_color2_name, th_color3_name, th_class1_name, th_class2_name, th_class3_name, td_color1_name, td_color2_name, td_color3_name, td_class1_name, td_class2_name, td_class3_name, fontface1_name, fontface2_name, fontface3_name, fontsize1_name, fontsize2_name, fontsize3_name, fontcolor1_name, fontcolor2_name, fontcolor3_name, span_class1_name, span_class2_name, span_class3_name) VALUES (1, 'The lightest row colour', 'The medium row color', 'The darkest row colour', '', '', '', 'Border round the whole page', 'Outer table border', 'Inner table border', 'Silver gradient picture', 'Blue gradient picture', 'Fade-out gradient on index', 'Background for quote boxes', 'All white areas', '', 'Background for topic posts', '2nd background for topic posts', '', 'Main fonts', 'Additional topic title font', 'Form fonts', 'Smallest font size', 'Medium font size', 'Normal font size (post body etc)', 'Quote & copyright text', 'Code text colour', 'Main table header text colour', '', '', '');


# -- Smilies
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 1, ':D', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 2, ':-D', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 3, ':grin:', 'icon_biggrin.gif', 'Very Happy');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 4, ':)', 'icon_smile.gif', 'Smile');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 5, ':-)', 'icon_smile.gif', 'Smile');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 6, ':smile:', 'icon_smile.gif', 'Smile');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 7, ':(', 'icon_sad.gif', 'Sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 8, ':-(', 'icon_sad.gif', 'Sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 9, ':sad:', 'icon_sad.gif', 'Sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 10, ':o', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 11, ':-o', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 12, ':eek:', 'icon_surprised.gif', 'Surprised');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 13, ':shock:', 'icon_eek.gif', 'Shocked');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 14, ':?', 'icon_confused.gif', 'Confused');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 15, ':-?', 'icon_confused.gif', 'Confused');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 16, ':???:', 'icon_confused.gif', 'Confused');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 17, '8)', 'icon_cool.gif', 'Cool');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 18, '8-)', 'icon_cool.gif', 'Cool');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 19, ':cool:', 'icon_cool.gif', 'Cool');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 20, ':lol:', 'icon_lol.gif', 'Laughing');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 21, ':x', 'icon_mad.gif', 'Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 22, ':-x', 'icon_mad.gif', 'Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 23, ':mad:', 'icon_mad.gif', 'Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 24, ':P', 'icon_razz.gif', 'Razz');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 25, ':-P', 'icon_razz.gif', 'Razz');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 26, ':razz:', 'icon_razz.gif', 'Razz');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 27, ':oops:', 'icon_redface.gif', 'Embarassed');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 28, ':cry:', 'icon_cry.gif', 'Crying or Very sad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 29, ':evil:', 'icon_evil.gif', 'Evil or Very Mad');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 30, ':twisted:', 'icon_twisted.gif', 'Twisted Evil');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 31, ':roll:', 'icon_rolleyes.gif', 'Rolling Eyes');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 32, ':wink:', 'icon_wink.gif', 'Wink');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 33, ';)', 'icon_wink.gif', 'Wink');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 34, ';-)', 'icon_wink.gif', 'Wink');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 35, ':!:', 'icon_exclaim.gif', 'Exclamation');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 36, ':?:', 'icon_question.gif', 'Question');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 37, ':idea:', 'icon_idea.gif', 'Idea');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 38, ':arrow:', 'icon_arrow.gif', 'Arrow');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 39, ':|', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 40, ':-|', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 41, ':neutral:', 'icon_neutral.gif', 'Neutral');
INSERT INTO phpbb_smilies (smilies_id, code, smile_url, emoticon) VALUES ( 42, ':mrgreen:', 'icon_mrgreen.gif', 'Mr. Green');


# -- wordlist
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 1, 'example', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 2, 'post', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 3, 'phpbb', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 4, 'installation', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 5, 'delete', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 6, 'topic', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 7, 'forum', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 8, 'since', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 9, 'everything', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 10, 'seems', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 11, 'working', 0 );
INSERT INTO phpbb_search_wordlist (word_id, word_text, word_common) VALUES ( 12, 'welcome', 0 );


# -- wordmatch
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 1, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 2, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 3, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 4, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 5, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 6, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 7, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 8, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 9, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 10, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 11, 1, 0 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 12, 1, 1 );
INSERT INTO phpbb_search_wordmatch (word_id, post_id, title_match) VALUES ( 3, 1, 1 );

# -- IM Portal  https://integramod.com
# -- blocks
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (1, 'Board Navigation', '', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php\">Home</a><br />\r\n<a href=\"index.php\">Forum</a><br />\r\n<a href=\"memberlist.php\">Memberlist</a><br />\r\n<a href=\"faq.php\">FAQ</a><br />\r\n<a href=\"search.php\">Search</a><br /><br />\r\n<a href=\"portal.php?page=2\">Layout 1</a>\r\n\r\n</span></td>\r\n</tr>\r\n</table>', '@', 1, 1, '', 0, 0, 0, 0, '', 0, 1, 1, 0, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (2, 'Statistics', '', '', 'r', 3, 1, 'blocks_imp_statistics', 0, 1, 1, 43200, '', 1, 1, 1, 1, 1, 0, '5');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (3, 'Links', '', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td class=\"row1\" align=\"center\"><a href=\"http://phpbbintegramod.sourceforge.net\" target=\"_blank\" class=\"gen\">IntegraMOD</a></td>\r\n</tr>\r\n</table>', 'r', 2, 1, '', 0, 1, 0, 0, '', 0, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (4, 'Welcome to IM Portal', '', '<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n<tr>\r\n<td align=\"center\"><span class=\"gen\">\r\nWelcome to IM Portal<br /><br />For questions, comments and suggestions, please visit <a href=\"http://www.integramod.com\">IntegraMOD</a>\r\n</span>\r\n</td>\r\n</tr>\r\n</table>', 'c', 1, 1, '', 0, 1, 0, 0, '', 0, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (5, 'News', '', '', 'c', 3, 1, 'blocks_imp_forum', 0, 1, 0, 0, '', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (6, 'User Block', '', '', '@', 2, 1, 'blocks_imp_user_block', 0, 0, 0, 0, '', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (7, 'Who is Online', '', '', '@', 3, 1, 'blocks_imp_online_users', 0, 0, 1, 300, '', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (8, 'Poll', '', 'hkghk', 'r', 4, 1, 'blocks_imp_poll', 0, 1, 0, 0, '', 0, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (9, 'Recent Topics', '', '', 'r', 1, 1, 'blocks_imp_recent_topics', 0, 1, 1, 300, '', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (10, 'Search', '', '', '@', 4, 1, 'blocks_imp_search', 0, 0, 1, 1000000000, '', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (11, 'sample block', '', '[size=12:bf3f1f9aa1][b:bf3f1f9aa1][color=red:bf3f1f9aa1]This is just a sample block[/color:bf3f1f9aa1][/b:bf3f1f9aa1] showing the capabilities of [b:bf3f1f9aa1][color=green:bf3f1f9aa1]IM Portal[/color:bf3f1f9aa1][/b:bf3f1f9aa1] with the use of BBCodes.[/size:bf3f1f9aa1] \r\n\r\n :lol:  8)  :o  :( \r\n[quote:bf3f1f9aa1]This version of IM Portal uses a multi-page feature to create more than one page for your portal.  Try visiting this address: [b:bf3f1f9aa1]http://www.myforum.com/portal.php?page=2[/b:bf3f1f9aa1]. Replace www.myforum.com with the correct location[/quote:bf3f1f9aa1]The block below (Welcome to IM Portal) is an example of a block using HTML.', 'c', 2, 1, '', 0, 1, 0, 0, 'bf3f1f9aa1', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (12, 'Sample 1', '', 'This page shows an example of the multi-page feature of IM Portal.  This page also displays the forum-wide blocks.\r\n\r\n[code:1:82bdfbd9b5]Try to visit&#58; http&#58;//www.myforum.com/portal.php?page=3[/code:1:82bdfbd9b5]', 'c', 1, 1, '', 0, 2, 0, 0, '82bdfbd9b5', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (13, 'Sample 6', '', 'This block also shows the [b:0c6a883c90][color=orange:0c6a883c90]multi-page feature of IM Portal[/color:0c6a883c90][/b:0c6a883c90].  But this time, it does not display the forum-wide blocks.\r\n\r\nYou can now proceed to the [b:0c6a883c90][color=blue:0c6a883c90]ACP[/color:0c6a883c90][/b:0c6a883c90] and delete the sample layouts/pages in the layout management page.', 'c', 1, 1, '', 0, 3, 0, 0, '0c6a883c90', 1, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (14, 'News', '', '', 'c', 4, 1, 'blocks_imp_forum', 0, 3, 0, 0, '', 0, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (15, 'Sample 2', '', 'This is the new feature of IM Portal which enables a block with the following options:[list:2377d30f6a][*:2377d30f6a]with or without titlebar\r\n[*:2377d30f6a]with or without border\r\n[*:2377d30f6a]with or without background[/list:u:2377d30f6a]\r\nThis block is without a titlebar, border and background', 'c', 2, 1, '', 0, 2, 0, 0, '2377d30f6a', 1, 0, 0, 0, 0, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (16, 'Sample 3', '', 'Without titlebar only  :o', 'c', 3, 1, '', 0, 2, 0, 0, '7e13fbbacc', 1, 1, 0, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (17, 'Sample 4', '', 'Without background only  :wink:', 'c', 4, 1, '', 0, 2, 0, 0, '5b8176554c', 1, 1, 1, 1, 0, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (18, 'Sample 5', '', 'Without border  :arrow:  :idea:  :arrow:', 'c', 5, 1, '', 0, 2, 0, 0, 'ed31156971', 1, 0, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (19, 'Sample 7', '', 'Take note that pages and blocks can have different permissions.  There are 2 kinds of permissions to set, per user level and per usergroups.  It is allowed to mix permissions but it is wise to set the user level to registered when usergroups are used (e.g. making a page only accessible for a specific usergroup)  :wink:', 'c', 2, 1, '', 0, 3, 0, 0, '16703bc74c', 1, 1, 0, 1, 0, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (20, 'Sample 8', '', 'To support localization for IM Portal, titlebars can also be localized so titles being displayed, instead of being retrieved from the database will be retrieved from the language files.  This only applies for those blocks which has a language file.  :shock:  8)', 'c', 3, 1, '', 0, 3, 0, 0, '48d2dd24ac', 1, 0, 1, 1, 0, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (21, 'Sample 9', '', 'This is a sample block with the open/close button feature switched off\r\n\r\n :D  8)  8)  :lol:  :wink:', 'c', 5, 1, '', 0, 3, 0, 0, 'edaa61b06b', 1, 1, 1, 0, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (23, 'Board Navigation', '', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php\">Home</a><br />\r\n<a href=\"index.php\">Forum</a><br />\r\n<a href=\"memberlist.php\">Memberlist</a><br />\r\n<a href=\"faq.php\">FAQ</a><br />\r\n<a href=\"search.php\">Search</a><br /><br />\r\n<a href=\"portal.php?page=2\">Layout 1</a>\r\n\r\n</span></td>\r\n</tr>\r\n</table>', 'l', 1, 1, '', 0, 4, 0, 0, '', 0, 1, 1, 1, 1, 1, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (24, 'Welcome to IM Portal', '', '<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n<tr>\r\n<td align=\"center\"><span class=\"gen\">\r\nWelcome to IM Portal<br /><br />For questions, comments and suggestions, please visit <a href=\"http://www.integramod.com\">IntegraMOD</a>\r\n</span>\r\n</td>\r\n</tr>\r\n</table>', 'c', 1, 1, '', 0, 4, 0, 0, '', 0, 1, 1, 1, 1, 1, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (25, 'Stats', '', '', 'r', 1, 1, 'blocks_imp_statistics', 0, 4, 0, 0, '', 0, 1, 1, 1, 1, 1, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (26, 'Board Navigation', '', '<table width=\"100%\" cellpadding=\"0\" cellspacing=\"1\" border=\"0\">\r\n<tr>\r\n<td align=\"left\"><span class=\"genmed\" style=\"line-height: 150%\">\r\n<a href=\"portal.php\">Home</a><br />\r\n<a href=\"index.php\">Forum</a><br />\r\n<a href=\"memberlist.php\">Memberlist</a><br />\r\n<a href=\"faq.php\">FAQ</a><br />\r\n<a href=\"search.php\">Search</a><br /><br />\r\n<a href=\"portal.php?page=2\">Layout 1</a>\r\n\r\n</span></td>\r\n</tr>\r\n</table>', 'l', 1, 1, '', 0, 5, 1, 0, '', 0, 1, 1, 0, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (27, 'Welcome to IM Portal', '', '<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\r\n<tr>\r\n<td align=\"center\"><span class=\"gen\">\r\nWelcome to IM Portal<br /><br />For questions, comments and suggestions, please visit <a href=\"http://www.integramod.com\">IntegraMOD</a>\r\n</span>\r\n</td>\r\n</tr>\r\n</table>', 'c', 1, 1, '', 0, 5, 0, 0, '', 0, 1, 1, 1, 1, 0, '');
INSERT INTO phpbb_blocks (bid, title, title_image, content, bposition, weight, active, blockfile, view, layout, cache, cache_time, block_bbcode_uid, type, border, titlebar, openclose, background, local, groups) VALUES (28, 'Stats', '', '', 'r', 1, 1, 'blocks_imp_statistics', 0, 5, 0, 0, '', 0, 1, 1, 1, 1, 1, '');

# -- block_position
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (1, 'header', '@', 0);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (2, 'footer', '*', 0);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (5, 'center', 'c', 2);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (22, 'right', 'r', 1);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (21, 'center', 'c', 1);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (24, 'center', 'c', 3);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (30, 'right', 'r', 4);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (29, 'center', 'c', 4);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (28, 'left', 'l', 4);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (36, 'right', 'r', 5);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (35, 'center', 'c', 5);
INSERT INTO phpbb_block_position (bpid, pkey, bposition, layout) VALUES (34, 'left', 'l', 5);


# -- block_variable
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (1, 'Number of news on portal', '', 'md_num_news', '', '', 1, 'forum');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (2, 'Length of news', 'Number of characters displayed', 'md_news_length', '', '', 1, 'forum');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (3, 'Poll Bar Length', 'decrease/increase the value for 1 vote bar length', 'md_poll_bar_length', '', '', 1, 'poll');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (4, 'News Forum ID(s)', 'comma delimited', 'md_news_forum_id', '', '', 1, 'forum');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (5, 'Poll Forum ID(s)', 'comma delimited', 'md_poll_forum_id', '', '', 1, 'poll');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (6, 'Number of recent topics', 'number of topics displayed', 'md_num_recent_topics', '', '', 1, 'recent_topics');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (7, 'Approve MOD installed?', 'tick if Approve MOD is installed', 'md_approve_mod_installed', '', '', 4, 'recent_topics');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (8, 'Recent Topics Style', 'choose static display or scrolling display', 'md_recent_topics_style', 'Scroll,Static', '1,0', 3, 'recent_topics');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (9, 'Search option text', 'Text displayed as the default option', 'md_search_option_text', '', '', 1, 'search');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (10, 'Header width', 'Width of forum-wide left column in pixels', 'header_width', '', '', 1, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (11, 'Footer width', 'Width of forum-wide right column in pixels', 'footer_width', '', '', 1, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (12, 'Cache File Locking', 'can avoid cache corruption under bad circumstances', 'md_cache_file_locking', '', '', 4, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (13, 'Cache Write Control', 'detect some corrupt cache files', 'md_cache_write_control', '', '', 4, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (14, 'Cache Read Control', 'a control key is embeded in cache file', 'md_cache_read_control', '', '', 4, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (15, 'Cache Read Control Type', 'Type of read control (only if read control is enabled)', 'md_cache_read_type', 'md5 hash control, crc32 hash control, length only test', 'md5,crc32,strlen', 2, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (16, 'Cache File Name Protection', '', 'md_cache_filename_protect', '', '', 4, '@Portal Config');
INSERT INTO phpbb_block_variable (bvid, label, sub_label, config_name, field_options, field_values, type, block) VALUES (17, 'Cache Automatic Serialization', 'Enable / disable automatic serialization', 'md_cache_serialize', '', '', 4, '@Portal Config');


# -- layout
INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (1, 'IM Portal Default', 'portal_body.tpl', 1, 1, 0, '', 'IM Portal Default');
INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (2, 'Sample 1', 'layout1.tpl', 1, 1, 0, '', 'Sample 1');
INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (3, 'Sample 2', 'layout1.tpl', 0, 1, 0, '', 'Sample 2');
INSERT INTO phpbb_layout (lid, name, template, forum_wide, page_collapse, view, groups, pagetitle) VALUES (4, '3 column', '3_column.tpl', 0, 1, 0, '', '3 Column');


# -- portal_config
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (1, 'default_portal', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (2, 'portal_header', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (3, 'portal_tail', '0');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (4, 'cache_enabled', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (5, 'md_news_length', '250');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (6, 'md_news_forum_id', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (7, 'md_num_news', '5');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (8, 'md_search_option_text', 'IM Portal');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (9, 'md_num_recent_topics', '5');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (10, 'md_approve_mod_installed', '0');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (11, 'md_recent_topics_style', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (12, 'md_poll_bar_length', '40');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (13, 'md_poll_forum_id', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (14, 'header_width', '150');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (15, 'footer_width', '150');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (16, 'md_cache_file_locking', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (17, 'md_cache_write_control', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (18, 'md_cache_read_control', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (19, 'md_cache_read_type', 'md5');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (20, 'md_cache_filename_protect', '0');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (21, 'md_cache_serialize', '1');
INSERT INTO phpbb_portal_config (id, config_name, config_value) VALUES (22, 'collapse_layout', '1');
