<?php
/***************************************************************************
 *                            lang_main.php [Spanish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   
 *   traducción al español : Christian Gastrell [CG_ar] (traducción y versión argentina)
 *                           Juan Manuel Mu&ntilde;oz [HuanManwe] (corrección y versión española) 
 *			     Este último ayudándose puntualmente en el trabajo previo de: 
 *			     Alexis Bellido Medina (alexis@ventanazul.com)
 *                           Mariano Martene (pacha@maestrosdelweb.com)
 *                           Angelika Lautz (alautz@promis.net)
 *                           Patricio Marin (pmarin@hotmail.com)
 *
 *
 *     $Id: lang_main.php,v 1.85.2.15 2003/06/10 00:31:19 psotfx Exp $
 *
 ****************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

//
// CONTRIBUTORS:
//	 Add your details here if wanted, e.g. Name, username, email address, website
// 2002-08-27  Philip M. White        - fixed many grammar problems
// 2005-03-18  Christian Gastrell		Translated to Argentinian Spanish
// 2005-04-10  Juan Manuel Muñoz		Fixed and adapted to official Spanish

//
// The format of this file is ---> $lang['message'] = 'text';
//
// You should also try to set a locale and a character encoding (plus direction). The encoding and direction
// will be sent to the template. The locale may or may not work, it's dependent on OS support and the syntax
// varies ... give it your best guess!
//

$lang['ENCODING'] = 'utf-8';
$lang['DIRECTION'] = 'ltr';
$lang['LEFT'] = 'left';
$lang['RIGHT'] = 'right';
$lang['DATE_FORMAT'] =  'd M Y'; // This should be changed to the default date format for your language, php date() format
$lang['TRANSLATION_INFO'] = '';

// This is optional, if you would like a _SHORT_ message output
// along with our copyright message indicating you are the translator
// please add it here.
// $lang['TRANSLATION'] = '';

//
// Common, these terms are used
// extensively on several pages
//
$lang['Forum'] = 'Foro';
$lang['Category'] = 'Categor&iacute;a';
$lang['Topic'] = 'Tema';
$lang['Topics'] = 'Temas';
$lang['Replies'] = 'Respuestas';
$lang['Views'] = 'Lecturas';
$lang['Post'] = 'Mensaje';
$lang['Posts'] = 'Mensajes';
$lang['Posted'] = 'Publicado';
$lang['Username'] = 'Nombre de Usuario';
$lang['Password'] = 'Contrase&ntilde;a';
$lang['Email'] = 'Email';
$lang['Poster'] = 'Autor';
$lang['Author'] = 'Autor';
$lang['Time'] = 'Hora';
$lang['Hours'] = 'Horas';
$lang['Message'] = 'Mensaje';

$lang['1_Day'] = '1 D&iacute;a';
$lang['7_Days'] = '7 D&iacute;as';
$lang['2_Weeks'] = '2 Semanas';
$lang['1_Month'] = '1 Mes';
$lang['3_Months'] = '3 Meses';
$lang['6_Months'] = '6 Meses';
$lang['1_Year'] = '1 A&ntilde;o';

$lang['Go'] = 'Ir';
$lang['Jump_to'] = 'Saltar a';
$lang['Submit'] = 'Enviar';
$lang['Reset'] = 'Restablecer';
$lang['Cancel'] = 'Cancelar';
$lang['Preview'] = 'Vista Previa';
$lang['Confirm'] = 'Confirmar';
$lang['Spellcheck'] = 'Ortograf&iacute;a';
$lang['Yes'] = 'S&iacute;';
$lang['No'] = 'No';
$lang['Enabled'] = 'Habilitado';
$lang['Disabled'] = 'Deshabilitado';
$lang['Error'] = 'Error';

$lang['Next'] = 'Siguiente';
$lang['Previous'] = 'Anterior';
$lang['Goto_page'] = 'Ir a p&aacute;gina';
$lang['Joined'] = 'Registrado';
$lang['IP_Address'] = 'Direcci&oacute;n IP';

$lang['Select_forum'] = 'Seleccione un foro';
$lang['View_latest_post'] = 'Ver &uacute;ltimo mensaje';
$lang['View_newest_post'] = 'Ver mensaje m&aacute;s reciente';
$lang['Page_of'] = 'P&aacute;gina <b>%d</b> de <b>%d</b>'; // Replaces with: Page 1 of 2 for example

$lang['FB'] = 'Facebook';
$lang['IG'] = 'Instagram';
$lang['PT'] = 'Pinterest';

$lang['Forum_Index'] = '&Iacute;ndice del Foro';  // eg. sitename Forum Index, %s can be removed if you prefer

$lang['Post_new_topic'] = 'Publicar Nuevo Tema';
$lang['Reply_to_topic'] = 'Responder al Tema';
$lang['Reply_with_quote'] = 'Responder citando';

$lang['Click_return_topic'] = 'Pulse %sAqu&iacute;%s para volver al tema'; // %s's here are for uris, do not remove!
$lang['Click_return_login'] = 'Pulse %sAqu&iacute;%s para intentar de nuevo';
$lang['Click_return_forum'] = 'Pulse %sAqu&iacute;%s para volver al foro';
$lang['Click_view_message'] = 'Pulse %sAqu&iacute;%s para ver su mensaje';
$lang['Click_return_modcp'] = 'Pulse %sAqu&iacute;%s para volver al Panel de Control del Moderador';
$lang['Click_return_group'] = 'Pulse %sAqu&iacute;%s para volver a la Informaci&oacute;n de Grupo';

$lang['Admin_panel'] = 'Ir al Panel de Administraci&oacute;n';

$lang['Board_disable'] = 'Lo sentimos, pero este foro est&aacute; momentaneamente deshabilitado. Por favor, intente ingresar de nuevo pasados unos minutos.';


//
// Global Header strings
//
$lang['Registered_users'] = 'Usuarios Registrados conectados:';
$lang['Browsing_forum'] = 'Usuarios viendo este foro:';
$lang['Online_users_zero_total'] = 'En total hay <b>0</b> usuarios conectados :: ';
$lang['Online_users_total'] = 'En total hay <b>%d</b> usuarios conectados :: ';
$lang['Online_user_total'] = 'En total hay <b>%d</b> usuario conectado :: ';
$lang['Reg_users_zero_total'] = '0 Registrados, ';
$lang['Reg_users_total'] = '%d Registrados, ';
$lang['Reg_user_total'] = '%d Registrado, ';
$lang['Hidden_users_zero_total'] = '0 Ocultos y ';
$lang['Hidden_user_total'] = '%d Oculto y ';
$lang['Hidden_users_total'] = '%d Ocultos y ';
$lang['Guest_users_zero_total'] = '0 Invitados';
$lang['Guest_users_total'] = '%d Invitados';
$lang['Guest_user_total'] = '%d Invitado';
$lang['Record_online_users'] = 'El n&ordm; m&aacute;ximo de usuarios conectados a la vez fue de <b>%s</b> el %s'; // first %s = number of users, second %s is the date.

$lang['Admin_online_color'] = '%sAdministrador%s';
$lang['Mod_online_color'] = '%sModerador%s';

$lang['You_last_visit'] = 'Su &uacute;ltima visita fue el %s'; // %s replaced by date/time
$lang['Current_time'] = 'Fecha y hora actual: %s'; // %s replaced by time

$lang['Search_new'] = 'Ver mensajes desde su &uacute;ltima visita';
$lang['Search_your_posts'] = 'Ver sus mensajes';
$lang['Search_unanswered'] = 'Ver mensajes sin respuestas';

$lang['Register'] = 'Reg&iacute;strese';
$lang['Profile'] = 'Perfil';
$lang['Edit_profile'] = 'Editar su perfil';
$lang['Search'] = 'Buscar';
$lang['Memberlist'] = 'Lista de Miembros';
$lang['FAQ'] = 'F.A.Q.';
$lang['BBCode_guide'] = 'Gu&iacute;a de BBCode';
$lang['Usergroups'] = 'Grupos de Usuarios';
$lang['Last_Post'] = '&Uacute;ltimo Mensaje';
$lang['Moderator'] = 'Moderador';
$lang['Moderators'] = 'Moderadores';

$lang['fa_Home'] = '<i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home';
$lang['fa_Forum'] = '<i class="fa fa-list" aria-hidden="true"></i>&nbsp;Foros';
$lang['fa_Admin'] = '<i class="fa fa-cog" aria-hidden="true"></i>&nbsp;ACP';
$lang['fa_Register'] = '<i class="fa fa-check-circle-o" aria-hidden="true"></i>&nbsp;Reg&iacute;strese';
$lang['fa_Profile'] = '<i class="fa fa-user" aria-hidden="true"></i>&nbsp;Perfil';
$lang['fa_Search'] = '<i class="fa fa-search" aria-hidden="true"></i>&nbsp;Buscar';
$lang['fa_Memberlist'] = '<i class="fa fa-list-ul" aria-hidden="true"></i>&nbsp;Lista de Miembros';
$lang['fa_FAQ'] = '<i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp;F.A.Q.';
$lang['fa_Usergroups'] = '<i class="fa fa-users" aria-hidden="true"></i>&nbsp;Grupos de Usuarios';
$lang['fa_Login'] = '<i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;Conectarse';
$lang['fa_Logout'] = '<i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Desconectarse';
$lang['fa_Private_Messages'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Mensajes Privados';
$lang['fa_Login_check_pm'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Con&eacute;ctese para revisar sus mensajes';
$lang['fa_New_pms'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Tiene %d mensajes nuevos'; // You have 2 new messages
$lang['fa_New_pm'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Tiene %d mensaje nuevo'; // You have 1 new message
$lang['fa_No_new_pm'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;No tiene mensajes privados nuevos';
$lang['fa_Unread_pms'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Tiene %d mensajes privados no le&iacute;dos';
$lang['fa_Unread_pm'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Tiene %d mensaje privado no le&iacute;do';
$lang['fa_No_unread_pm'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;No tiene mensajes no le&iacute;dos';


//
// Stats block text
//
$lang['Posted_articles_zero_total'] = 'Nuestros usuarios han publicado en total <b>0</b> mensajes'; // Number of posts
$lang['Posted_articles_total'] = 'Nuestros usuarios han publicado en total <b>%d</b> mensajes'; // Number of posts
$lang['Posted_article_total'] = 'Nuestros usuarios han publicado en total <b>%d</b> mensaje'; // Number of posts
$lang['Registered_users_zero_total'] = 'Tenemos <b>0</b> usuarios registrados'; // # registered users
$lang['Registered_users_total'] = 'Tenemos <b>%d</b> usuarios registrados'; // # registered users
$lang['Registered_user_total'] = 'Tenemos <b>%d</b> usuario registrado'; // # registered users
$lang['Newest_user'] = 'El &uacute;ltimo usuario registrado es <b>%s%s%s</b>'; // a href, username, /a 

$lang['No_new_posts_last_visit'] = 'No hay mensajes nuevos desde su &uacute;ltima visita';
$lang['No_new_posts'] = 'No hay mensajes nuevos';
$lang['New_posts'] = 'Mensajes nuevos';
$lang['New_post'] = 'Mensaje nuevo';
$lang['No_new_posts_hot'] = 'No hay mensajes nuevos [ Popular ]';
$lang['New_posts_hot'] = 'Mensajes nuevos [ Popular ]';
$lang['No_new_posts_locked'] = 'No hay mensajes nuevos [ Bloqueado ]';
$lang['New_posts_locked'] = 'Mensajes nuevos [ Bloqueado ]';
$lang['Forum_is_locked'] = 'Foro bloqueado';


//
// Login
//
$lang['Enter_password'] = 'Por favor, ingrese su nombre de usuario y contrase&ntilde;a para conectarse.';
$lang['Login'] = 'Conectarse';
$lang['LoggedIn'] = 'Conectado';
$lang['Logout'] = 'Desconectarse';

$lang['Forgotten_password'] = 'He olvidado mi contrase&ntilde;a';

$lang['Log_me_in'] = 'Conectarme autom&aacute;ticamente en cada visita';

$lang['Error_login'] = 'Ha ingresado un nombre de usuario incorrecto o deshabilitado, o una contrase&ntilde;a no v&aacute;lida.';


//
// Index page
//
$lang['Index'] = '&Iacute;ndice';
$lang['No_Posts'] = 'No hay mensajes';
$lang['No_forums'] = 'No hay foros';

$lang['Private_Message'] = 'Mensaje Privado';
$lang['Private_Messages'] = 'Mensajes Privados';
$lang['Who_is_Online'] = 'Qui&eacute;n est&aacute; conectado';

$lang['Mark_all_forums'] = 'Marcar todos los foros como le&iacute;dos';
$lang['Forums_marked_read'] = 'Todos los foros han sido marcados como le&iacute;dos';


//
// Viewforum
//
$lang['View_forum'] = 'Ver Foro';

$lang['Forum_not_exist'] = 'El foro que ha seleccionado no existe.';
$lang['Reached_on_error'] = 'Ha llegado a esta p&aacute;gina debido a un error.';

$lang['Display_topics'] = 'Mostrar temas anteriores';
$lang['All_Topics'] = 'Todos los temas';

$lang['Topic_Announcement'] = '<b>Anuncio:</b>';
$lang['Topic_Sticky'] = '<b>Fijo (PostIt):</b>';
$lang['Topic_Moved'] = '<b>Movido:</b>';
$lang['Topic_Poll'] = '<b>[ Encuesta ]</b>';

$lang['Mark_all_topics'] = 'Marcar todos los temas como le&iacute;dos';
$lang['Topics_marked_read'] = 'Todos los temas de este foro han sido marcados como le&iacute;dos';

$lang['Rules_post_can'] = '<b>Puede</b> crear mensajes';
$lang['Rules_post_cannot'] = '<b>No puede</b> crear mensajes';
$lang['Rules_reply_can'] = '<b>Puede</b> responder temas';
$lang['Rules_reply_cannot'] = '<b>No puede</b> responder temas';
$lang['Rules_edit_can'] = '<b>Puede</b> editar sus mensajes';
$lang['Rules_edit_cannot'] = '<b>No puede</b> editar sus mensajes';
$lang['Rules_delete_can'] = '<b>Puede</b> borrar sus mensajes';
$lang['Rules_delete_cannot'] = '<b>No puede</b> borrar sus mensajes';
$lang['Rules_vote_can'] = '<b>Puede</b> votar en encuestas';
$lang['Rules_vote_cannot'] = '<b>No puede</b> votar en encuestas';
$lang['Rules_moderate'] = '<b>Puede</b> %smoderar este foro%s'; // %s replaced by a href links, do not remove! 

$lang['No_topics_post_one'] = 'No hay mensajes en este foro.<br />Pulse en <b>Publicar Nuevo Tema</b> en esta p&aacute;gina para crear uno.';


//
// Viewtopic
//
$lang['View_topic'] = 'Ver tema';

$lang['Guest'] = 'Invitado';
$lang['Post_subject'] = '<b>T&iacute;tulo del mensaje</b>';
$lang['View_next_topic'] = 'Ver siguiente tema';
$lang['View_previous_topic'] = 'Ver tema anterior';
$lang['Submit_vote'] = 'Enviar voto';
$lang['View_results'] = 'Ver Resultados';

$lang['No_newer_topics'] = 'No hay temas m&aacute;s nuevos en este foro';
$lang['No_older_topics'] = 'No hay temas anteriores en este foro';
$lang['Topic_post_not_exist'] = 'El tema o mensaje solicitado no existe';
$lang['No_posts_topic'] = 'Este tema no tiene mensajes';

$lang['Display_posts'] = 'Mostrar mensajes anteriores';
$lang['All_Posts'] = 'Todos los mensajes';
$lang['Newest_First'] = 'El m&aacute;s reciente primero';
$lang['Oldest_First'] = 'El m&aacute;s antiguo primero';

$lang['Back_to_top'] = 'Volver arriba';

$lang['Read_profile'] = 'Ver perfil del usuario'; 
$lang['Visit_website'] = 'Visitar sitio web del autor';
$lang['ICQ_status'] = 'Estado de ICQ';
$lang['Edit_delete_post'] = 'Editar/Borrar este mensaje';
$lang['View_IP'] = 'Ver direcci&oacute;n IP del autor';
$lang['Delete_post'] = 'Borrar este mensaje';

$lang['wrote'] = 'escribi&oacute;'; // proceeds the username and is followed by the quoted text
$lang['Quote'] = 'Cita'; // comes before bbcode quote output.
$lang['Code'] = 'C&oacute;digo'; // comes before bbcode code output.
$lang['Priv_Img'] = 'Visualizaci�n de imagen desactivada'; // Explanation for missing images in the ModCP.

$lang['Edited_time_total'] = 'Ultima edici&oacute;n por %s el %s; editado %d vez'; // Last edited by me on 12 Oct 2001; edited 1 time in total
$lang['Edited_times_total'] = 'Ultima edici&oacute;n por %s el %s; editado %d veces'; // Last edited by me on 12 Oct 2001; edited 2 times in total

$lang['Lock_topic'] = 'Bloquear este tema';
$lang['Unlock_topic'] = 'Desbloquear este tema';
$lang['Move_topic'] = 'Mover este tema';
$lang['Delete_topic'] = 'Borrar este tema';
$lang['Split_topic'] = 'Separar este tema';

$lang['Stop_watching_topic'] = 'Dejar de observar este Tema';
$lang['Start_watching_topic'] = 'Observar este Tema por respuestas';
$lang['No_longer_watching'] = 'Ya no se le notificar&aacute; de nuevas respuestas a este tema';
$lang['You_are_watching'] = 'A partir de ahora se le notificar&aacute; de nuevas respuestas en este tema';

$lang['Total_votes'] = 'Total de votos';

//
// Posting/Replying (Not private messaging!)
//
$lang['Message_body'] = 'Cuerpo del mensaje';
$lang['Topic_review'] = 'Revisar el tema';

$lang['No_post_mode'] = 'No se especific&oacute; un modo de mensaje'; // If posting.php is called without a mode (newtopic/reply/delete/etc, shouldn't be shown normaly)

$lang['Post_a_new_topic'] = 'Publicar un nuevo tema';
$lang['Post_a_reply'] = 'Publicar una respuesta';
$lang['Post_topic_as'] = 'Publicar tema como';
$lang['Edit_Post'] = 'Editar mensaje';
$lang['Options'] = 'Opciones';

$lang['Post_Announcement'] = 'Anuncio';
$lang['Post_Sticky'] = 'Fijo (Post It)';
$lang['Post_Normal'] = 'Normal';

$lang['Confirm_delete'] = '&iquest;Est&aacute; seguro de que quiere borrar este mensaje?';
$lang['Confirm_delete_poll'] = '&iquest;Est&aacute; seguro de que quiere borrar esta encuesta?';

$lang['Flood_Error'] = 'No puede publicar otro tema tan r&aacute;pido despu&eacute;s del &uacute;ltimo. Intente nuevamente en unos momentos.';
$lang['Empty_subject'] = 'Debe especificar un asunto cuando cree un nuevo tema.';
$lang['Empty_message'] = 'Debe escribir un texto al crear un mensaje.';
$lang['Forum_locked'] = 'Este foro est&aacute; bloqueado: no se puede publicar, responder, ni editar mensajes en este tema.';
$lang['Topic_locked'] = 'El tema est&aacute; bloqueado: no pueden editarse ni agregar mensajes.';
$lang['No_post_id'] = 'Debe elegir un mensaje para modificar';
$lang['No_topic_id'] = 'Debe elegir un tema para agregar una respuesta';
$lang['No_valid_mode'] = 'S&oacute;lo puede ingresar, responder, editar o citar mensajes. Por favor, vuelva e int&eacute;ntelo nuevamente.';
$lang['No_such_post'] = 'No existe el mensaje. Por favor, vuelva e intente nuevamente.';
$lang['Edit_own_posts'] = 'Lo sentimos, pero s&oacute;lo puede editar sus propios mensajes.';
$lang['Delete_own_posts'] = 'Lo sentimos, pero s&oacute;lo puede borrar sus propios mensajes.';
$lang['Cannot_delete_replied'] = 'Lo sentimos, pero no puede borrar mensajes que han sido respondidos.';
$lang['Cannot_delete_poll'] = 'Lo sentimos, pero no puede borrar encuestas activas.';
$lang['Empty_poll_title'] = 'Debe crear un t&iacute;tulo para su encuesta.';
$lang['To_few_poll_options'] = 'Debe crear al menos 2 opciones en la encuesta.';
$lang['To_many_poll_options'] = 'Ha excedido la cantidad posible de opciones de encuesta.';
$lang['Post_has_no_poll'] = 'Este mensaje no tiene encuesta.';
$lang['Already_voted'] = 'Ya ha votado en esta encuesta.';
$lang['No_vote_option'] = 'Debe elegir una opci&oacute;n cuando vota.';

$lang['Add_poll'] = 'Agregar encuesta';
$lang['Add_poll_explain'] = 'Si no desea agregar una encuesta a su tema, deje este campo en blanco.';
$lang['Poll_question'] = 'Pregunta de la Encuesta';
$lang['Poll_option'] = 'Opci&oacute;n de la Encuesta';
$lang['Add_option'] = 'Agregar opci&oacute;n';
$lang['Update'] = 'Actualizar';
$lang['Delete'] = 'Borrar';
$lang['Poll_for'] = 'Ejecutar encuesta durante';
$lang['Days'] = 'D&iacute;as'; // This is used for the Run poll for ... Days + in admin_forums for pruning
$lang['Poll_for_explain'] = '[ Escriba 0 &oacute; deje en blanco para que la encuesta nunca termine ]';
$lang['Delete_poll'] = 'Borrar encuesta';

$lang['Disable_HTML_post'] = 'Deshabilitar HTML en este mensaje';
$lang['Disable_BBCode_post'] = 'Deshabilitar BBCode en este mensaje';
$lang['Disable_Smilies_post'] = 'Deshabilitar Emoticonos en este mensaje';

$lang['HTML_is_ON'] = 'HTML est&aacute; <u>ON</u>';
$lang['HTML_is_OFF'] = 'HTML est&aacute; <u>OFF</u>';
$lang['BBCode_is_ON'] = '%sBBCode%s est&aacute; <u>ON</u>'; // %s are replaced with URI pointing to FAQ
$lang['BBCode_is_OFF'] = '%sBBCode%s est&aacute; <u>OFF</u>';
$lang['Smilies_are_ON'] = 'Emoticonos est&aacute;n <u>ON</u>';
$lang['Smilies_are_OFF'] = 'Emoticonos est&aacute;n <u>OFF</u>';

$lang['Attach_signature'] = 'Adjuntar firma (la firma se puede cambiar en el perfil)';
$lang['Notify'] = 'Notificarme cuando se publique una respuesta';

$lang['Stored'] = 'Su mensaje ha sido publicado con &eacute;xito';
$lang['Deleted'] = 'Su mensaje ha sido borrado con &eacute;xito';
$lang['Poll_delete'] = 'Su encuesta ha sido borrada con &eacute;xito';
$lang['Vote_cast'] = 'Su voto ha sido publicado';

$lang['Topic_reply_notification'] = 'Notificaci&oacute;n de Respuesta al Tema';

$lang['bbcode_b_help'] = 'Negrita: [b]texto[/b]  (alt+b)';
$lang['bbcode_i_help'] = 'Itálica: [i]texto[/i]  (alt+i)';
$lang['bbcode_u_help'] = 'Subrayado: [u]texto[/u]  (alt+u)';
$lang['bbcode_q_help'] = 'Cita: [quote]texto[/quote]  (alt+q)';
$lang['bbcode_c_help'] = 'Código: [code]código[/code]  (alt+c)';
$lang['bbcode_l_help'] = 'Lista: [list]texto[/list] (alt+l)';
$lang['bbcode_o_help'] = 'Lista ordenada: [list=]texto[/list]  (alt+o)';
$lang['bbcode_p_help'] = 'Insertar imagen: [img]http://url_imagen[/img]  (alt+p)';
$lang['bbcode_w_help'] = 'Insertar URL: [url]http://url[/url] o [url=http://url]texto URL[/url]  (alt+w)';
$lang['bbcode_a_help'] = 'Cerrar todos los marcadores de bbCode abiertos';
$lang['bbcode_s_help'] = 'Color: [color=red]texto[/color]  Nota: también puede usarse color=#FF0000';
$lang['bbcode_f_help'] = 'Tamaño: [size=x-small]texto pequeño[/size]';

$lang['Emoticons'] = 'Emoticonos';
$lang['More_emoticons'] = 'Ver m&aacute;s Emoticonos';

$lang['Font_color'] = 'Color de texto';
$lang['color_default'] = 'Predeterminado';
$lang['color_dark_red'] = 'Rojo oscuro';
$lang['color_red'] = 'Rojo';
$lang['color_orange'] = 'Naranja';
$lang['color_brown'] = 'Marr&oacute;n';
$lang['color_yellow'] = 'Amarillo';
$lang['color_green'] = 'Verde';
$lang['color_olive'] = 'Oliva';
$lang['color_cyan'] = 'Cyan';
$lang['color_blue'] = 'Azul';
$lang['color_dark_blue'] = 'Azul oscuro';
$lang['color_indigo'] = 'Indigo';
$lang['color_violet'] = 'Violeta';
$lang['color_white'] = 'Blanco';
$lang['color_black'] = 'Negro';

$lang['Font_size'] = 'Tama&ntilde;o de texto';
$lang['font_tiny'] = 'Diminuto';
$lang['font_small'] = 'Peque&ntilde;o';
$lang['font_normal'] = 'Normal';
$lang['font_large'] = 'Grande';
$lang['font_huge'] = 'Enorme';

$lang['Close_Tags'] = 'Cerrar marcadores';
$lang['Styles_tip'] = 'Nota: Se pueden aplicar r&aacute;pidamente estilos al texto seleccionado.';


//
// Private Messaging
//
$lang['Private_Messaging'] = 'Mensajes Privados';

$lang['Login_check_pm'] = 'Con&eacute;ctese para revisar sus mensajes';
$lang['New_pms'] = 'Tiene %d mensajes nuevos'; // You have 2 new messages
$lang['New_pm'] = 'Tiene %d mensaje nuevo'; // You have 1 new message
$lang['No_new_pm'] = 'No tiene mensajes privados nuevos';
$lang['Unread_pms'] = 'Tiene %d mensajes privados no le&iacute;dos';
$lang['Unread_pm'] = 'Tiene %d mensaje privado no le&iacute;do';
$lang['No_unread_pm'] = 'No tiene mensajes no le&iacute;dos';
$lang['You_new_pm'] = 'Tiene un nuevo mensaje privado en la bandeja de entrada';
$lang['You_new_pms'] = 'Tiene nuevos mensajes privados en la bandeja de entrada';
$lang['You_no_new_pm'] = 'No tiene mensajes privados nuevos';

$lang['Unread_message'] = 'Mensaje no le&iacute;do';
$lang['Read_message'] = 'Leer mensaje';

$lang['Read_pm'] = 'Leer mensaje';
$lang['Post_new_pm'] = 'Enviar mensaje';
$lang['Post_reply_pm'] = 'Responder mensaje';
$lang['Post_quote_pm'] = 'Citar mensaje';
$lang['Edit_pm'] = 'Modificar mensaje';

$lang['Inbox'] = 'Bandeja de Entrada';
$lang['Outbox'] = 'Bandeja de salida';
$lang['Savebox'] = 'Bandeja de guardados';
$lang['Sentbox'] = 'Bandeja de enviados';
$lang['Flag'] = '*';
$lang['Subject'] = 'Asunto';
$lang['From'] = 'De';
$lang['To'] = 'Para';
$lang['Date'] = 'Fecha';
$lang['Mark'] = 'Seleccionar';
$lang['Sent'] = 'Enviado';
$lang['Saved'] = 'Guardado';
$lang['Delete_marked'] = 'Borrar seleccionados';
$lang['Delete_all'] = 'Borrar todos';
$lang['Save_marked'] = 'Guardar seleccionados'; 
$lang['Save_message'] = 'Guardar mensaje';
$lang['Delete_message'] = 'Borrar mensaje';

$lang['Display_messages'] = 'Mostrar mensajes de los anteriores'; // Followed by number of days/weeks/months
$lang['All_Messages'] = 'Todos los mensajes';

$lang['No_messages_folder'] = 'No tiene mensajes en esta carpeta';

$lang['PM_disabled'] = 'Se han desactivado los Mensajes Privados en este Foro';
$lang['Cannot_send_privmsg'] = 'Lo sentimos, pero el administrador le ha desactivado la opci&oacute;n de enviar mensajes privados.';
$lang['No_to_user'] = 'Debe especificar un nombre de usuario a quien mandar este mensaje.';
$lang['No_such_user'] = 'Lo sentimos, pero no existe ese usuario.';

$lang['Disable_HTML_pm'] = 'Deshabilitar HTML en este mensaje';
$lang['Disable_BBCode_pm'] = 'Deshabilitar BBCode en este mensaje';
$lang['Disable_Smilies_pm'] = 'Deshabilitar Emoticonos en este mensaje';

$lang['Message_sent'] = 'Su mensaje ha sido enviado';

$lang['Click_return_inbox'] = 'Pulse %sAQU&Iacute;%s para volver a su Bandeja de Entrada';
$lang['Click_return_index'] = 'Pulse %sAQU&Iacute;%s para volver al &Iacute;ndice';

$lang['Send_a_new_message'] = 'Enviar un nuevo mensaje privado';
$lang['Send_a_reply'] = 'Responder a un mensaje privado';
$lang['Edit_message'] = 'Editar mensaje privado';

$lang['Notification_subject'] = '&iexcl;Ha recibido un nuevo mensaje privado!';

$lang['Find_username'] = 'Buscar un usuario';
$lang['Find'] = 'Buscar';
$lang['No_match'] = 'No se hallaron coincidencias.';

$lang['No_post_id'] = 'No se especific&oacute; un ID de mensaje';
$lang['No_such_folder'] = 'La carpeta no existe';
$lang['No_folder'] = 'No se especific&oacute; una carpeta';

$lang['Mark_all'] = 'Marcar todos';
$lang['Unmark_all'] = 'Desmarcar todos';

$lang['Confirm_delete_pm'] = '&iquest;Est&aacute; seguro de que desea borrar este mensaje?';
$lang['Confirm_delete_pms'] = '&iquest;Est&aacute; seguro de que desea borrar estos mensajes?';

$lang['Inbox_size'] = 'Su Bandeja de Entrada est&aacute; %d%% llena'; // eg. Your Inbox is 50% full
$lang['Sentbox_size'] = 'Su Bandeja de enviados est&aacute; %d%% llena'; 
$lang['Savebox_size'] = 'Su Bandeja de guardados est&aacute; %d%% llena'; 

$lang['Click_view_privmsg'] = 'Pulse %sAqu&iacute;%s para ver su Bandeja de Entrada';


//
// Profiles/Registration
//
$lang['Viewing_user_profile'] = 'Viendo perfil :: %s'; // %s is username 
$lang['About_user'] = 'Todo sobre %s'; // %s is username

$lang['Preferences'] = 'Preferencias';
$lang['Items_required'] = 'Los campos marcados con * son obligatorios a menos que se especifique lo contrario.';
$lang['Registration_info'] = 'Informaci&oacute;n de Registro';
$lang['Profile_info'] = 'Informaci&oacute;n de Perfil';
$lang['Profile_info_warn'] = 'Esta informaci&oacute;n ser&aacute; visible a todos';
$lang['Avatar_panel'] = 'Panel de Control de Avatar';
$lang['Avatar_gallery'] = 'Galer&iacute;a de Avatares';

$lang['Website'] = 'Sitio Web';
$lang['Location'] = 'Ubicaci&oacute;n';
$lang['Contact'] = 'Contactar con';
$lang['Email_address'] = 'Direcci&oacute;n de E-mail';
$lang['Send_private_message'] = 'Enviar mensaje privado';
$lang['Hidden_email'] = '[ Oculto ]';
$lang['Interests'] = 'Intereses';
$lang['Occupation'] = 'Ocupaci&oacute;n'; 
$lang['Poster_rank'] = 'Rango del Autor';

$lang['Total_posts'] = 'Cantidad Total de mensajes';
$lang['User_post_pct_stats'] = '%.2f%% del total'; // 1.25% of total
$lang['User_post_day_stats'] = '%.2f mensajes por d&iacute;a'; // 1.5 posts per day
$lang['Search_user_posts'] = 'Buscar todos los mensajes de %s'; // Find all posts by username

$lang['No_user_id_specified'] = 'Lo sentimos, pero ese usuario no existe.';
$lang['Wrong_Profile'] = 'No puede modificar un perfil que no sea el suyo.';

$lang['Only_one_avatar'] = 'S&oacute;lo se puede especificar un tipo de avatar';
$lang['File_no_data'] = 'El archivo en la URL que ha proporcionado no contiene informaci&oacute;n (vac&iacute;o)';
$lang['No_connection_URL'] = 'No se pudo conectar con la URL proporcionada';
$lang['Incomplete_URL'] = 'La URL ingresada no es v&aacute;lida';
$lang['Wrong_remote_avatar_format'] = 'La URL del avatar remoto no es v&aacute;lida';
$lang['No_send_account_inactive'] = 'Lo sentimos, pero actualmente no se le puede enviar su contrase&ntilde;a ya que su cuenta est&aacute; desactivada. Por favor, contacte con el administrador para m&aacute;s informaci&oacute;n.';

$lang['Always_smile'] = 'Siempre habilitar Emoticonos';
$lang['Always_html'] = 'Siempre permitir HTML';
$lang['Always_bbcode'] = 'Siempre permitir BBCode';
$lang['Always_add_sig'] = 'Siempre adjuntar mi firma';
$lang['Always_notify'] = 'Siempre notificarme de respuestas';
$lang['Always_notify_explain'] = 'Env&iacute;a un correo electr&oacute;nico cuando alguien responde a un Tema en que ha participado. Esta opci&oacute;n puede ser cambiada individualmente en cada mensaje desde la opci&oacute;n correspondiente en el formulario de publicaci&oacute;n del mensaje.';

$lang['Board_style'] = 'Estilo del foro';
$lang['Board_lang'] = 'Idioma del foro';
$lang['No_themes'] = 'No hay estilos disponibles';
$lang['Timezone'] = 'Zona horaria';
$lang['Date_format'] = 'Formato de fecha';
$lang['Date_format_explain'] = 'La sint&aacute;xis es id&eacute;ntica a la funci&oacute;n de PHP 
<a href=\%27http:/www.php.net/date\%27 target=\'_other\'>date()</a>.';
$lang['Signature'] = 'Firma';
$lang['Signature_explain'] = 'Este es un bloque de texto que se puede agregar a los mensajes que publique. Hay un l&iacute;mite de %d caracteres';
$lang['Public_view_email'] = 'Mostrar siempre mi direcci&oacute;n de mail';

$lang['Current_password'] = 'Contrase&ntilde;a actual';
$lang['New_password'] = 'Nueva contrase&ntilde;a';
$lang['Confirm_password'] = 'Confirmar nueva contrase&ntilde;a';
$lang['Confirm_password_explain'] = 'Debe confirmar su contrase&ntilde;a actual si quiere cambiar &eacute;sta o su correo electr&oacute;nico';
$lang['password_if_changed'] = 'Ingrese su contrase&ntilde;a s&oacute;lo si desea cambiarla';
$lang['password_confirm_if_changed'] = 'Confirme su contrase&ntilde;a s&oacute;lo si est&aacute; cambi&aacute;ndola';

$lang['Avatar'] = 'Avatar';
$lang['Avatar_explain'] = 'Muestra una peque&ntilde;a imagen bajo sus detalles en los mensajes. S&oacute;lo puede mostrarse una imagen, su ancho no puede ser mayor de %d p&iacute;xeles, su altura no puede superar los %d p&iacute;xeles, y el tama&ntilde;o del archivo no puede exceder los %d KB.';
$lang['Upload_Avatar_file'] = 'Subir un Avatar desde su PC';
$lang['Upload_Avatar_URL'] = 'Subir un Avatar desde una URL';
$lang['Upload_Avatar_URL_explain'] = 'Ingrese la URL del Avatar, &eacute;ste ser&aacute; copiado a este sitio.';
$lang['Pick_local_Avatar'] = 'Elegir un Avatar de la galer&iacute;a';
$lang['Link_remote_Avatar'] = 'Vincular a un Avatar fuera de este sitio';
$lang['Link_remote_Avatar_explain'] = 'Ingrese la URL donde se haya el Avatar.';
$lang['Avatar_URL'] = 'URL de la imagen del Avatar';
$lang['Select_from_gallery'] = 'Elegir Avatar de la galer&iacute;a';
$lang['View_avatar_gallery'] = 'Ver galer&iacute;a';

$lang['Select_avatar'] = 'Elegir Avatar';
$lang['Return_profile'] = 'Cancelar avatar';
$lang['Select_category'] = 'Elegir categor&iacute;a';

$lang['Delete_Image'] = 'Borrar Imagen';
$lang['Current_Image'] = 'Imagen actual';

$lang['Notify_on_privmsg'] = 'Notificar de nuevos Mensajes Privados';
$lang['Popup_on_privmsg'] = 'Desplegar nueva ventana cuando haya Mesaje Privado nuevo'; 
$lang['Popup_on_privmsg_explain'] = 'Algunas plantillas pueden tratar de abrir una ventana nueva para informarle de un nuevo mensaje.';
$lang['Hide_user'] = 'Ocultar mi estado de conexi&oacute;n (Conectado/Oculto)';

$lang['Profile_updated'] = 'Su perfil ha sido actualizado';
$lang['Profile_updated_inactive'] = 'Su perfil ha sido actualizado. Sin embargo ha cambiado informaci&oacute;n vital y su cuenta est&aacute; ahora desactivada. Revise su correo para saber c&oacute;mo reactivarla o, si se necesita que un administrador la reactive, espere y ser&aacute; notificado.';

$lang['Password_mismatch'] = 'Las contrase&ntilde;as ingresadas no coinciden.';
$lang['Current_password_mismatch'] = 'La contrase&ntilde;a que ha ingresado no coincide con la que est&aacute; almacenada en la base de datos.';
$lang['Password_long'] = 'Su contrase&ntilde;a no puede exceder los 32 caracteres.';
$lang['Username_taken'] = 'Lo sentimos, pero ese nombre de usuario ya est&aacute; en uso.';
$lang['Username_invalid'] = 'Lo sentimos, pero ese nombre de usuario contiene caracteres no v&aacute;lidos.';
$lang['Username_disallowed'] = 'Lo sentimos, pero ese nombre de usuario ha sido prohibido.';
$lang['Email_taken'] = 'Lo sentimos, pero esa direcci&oacute;n de e-mail ya se encuentra registrada por otro usuario.';
$lang['Email_banned'] = 'Lo sentimos, pero esa direcci&oacute;n de e-mail ha sido inhibida.';
$lang['Email_invalid'] = 'Lo sentimos, pero esa direcci&oacute;n de e-mail es inv&aacute;lida.';
$lang['Signature_too_long'] = 'Su firma es muy larga.';
$lang['Fields_empty'] = 'Debe completar los campos requeridos.';
$lang['Avatar_filetype'] = 'El tipo de imagen del avatar debe ser .jpg, .gif o .png';
$lang['Avatar_filesize'] = 'El tama&ntilde;o de la imagen del avatar debe ser menor a %d KB'; // The avatar image file size must be less than 6 KB
$lang['Avatar_imagesize'] = 'La imagen del avatar debe tener menos de %d p&iacute;xeles de ancho y %d p&iacute;xeles de alto.'; 

$lang['Welcome_subject'] = 'Bienvenido al Foro de %s'; // Welcome to my.com forums
$lang['New_account_subject'] = 'Nueva cuenta de usuario';
$lang['Account_activated_subject'] = 'Cuenta Activada';

$lang['Account_added'] = 'Gracias por registrarse. Su cuenta ha sido creada. Ahora puede conectarse con su nombre de usuario y contrase&ntilde;a';
$lang['Account_inactive'] = 'Su cuenta fue creada. Sin embargo, este foro requiere que active su cuenta. Una clave de activaci&oacute;n ha sido enviada a su correo. Rev&iacute;selo para m&aacute;s informaci&oacute;n sobre c&oacute;mo completar la activaci&oacute;n.';
$lang['Account_inactive_admin'] = 'Su cuenta fue creada. Sin embargo, este foro requiere que un administrador active su cuenta. Se ha enviado un correo para notificar al administrador. Se le enviar&aacute; un correo cuando &eacute;ste la active.';
$lang['Account_active'] = 'Su cuenta ha sido activada. Gracias por registrarse.';
$lang['Account_active_admin'] = 'La cuenta ha sido activada.';
$lang['Reactivate'] = 'Reactive su cuenta!';
$lang['Already_activated'] = 'Ya ha activado su cuenta.';
$lang['COPPA'] = 'Su cuenta ha sido creada pero debe ser aprobada. Por favor, revise su correo para m&aacute;s detalles.';

$lang['Registration'] = 'Condiciones de Registro';
$lang['Reg_agreement'] = 'Si bien los administradores y moderadores de este foro tratar&aacute;n de eliminar o modificar cualquier material cuestionable lo m&aacute;s r&aacute;pido que puedan, es imposible revisar todos los mensajes. Por lo tanto Usted es consciente de que los mensajes en este foro son las opiniones y expresiones de sus autores y no de los administradores y moderadores (con excepci&oacute;n de los mensajes de estas personas).<br /><br />Usted est&aacute; de acuerdo con no enviar mensajes que puedan ser abusivos, obscenos, vulgares, amenazantes, de &iacute;ndole sexual o cualquier otro material que de alguna forma viole leyes vigentes en su territorio. Si publicase material de esa &iacute;ndole su cuenta de acceso al foro ser&aacute; cancelada y su proveedor de Acceso a Internet ser&aacute; informado. La direcci&oacute;n IP de todos los mensajes es guardada para ayudar a cumplir estas normas. Usted est&aacute; de acuerdo en que los administradores y moderadores de este foro tienen el derecho de modificar, cerrar, bloquear, mover y/o borrar cualquier tema o mensaje seg&uacute;n ellos lo consideren necesario. Como usuario Ud. permite que toda la informaci&oacute;n ingresada sea almacenada en una base de datos. Si bien esta informaci&oacute;n no ser&aacute; entregada ni distribuida a terceros, los administradores y moderadores no son responsables por cualquier mensaje no convencional que exponga esa informaci&oacute;n y tampoco pueden responsabilizarse por intentos de hackers que puedan llevar a que esta informaci&oacute;n confidencial.<br /><br />Este foro usa "cookies" para almacenar informaci&oacute;n en su ordenador. Estas "cookies" no contienen ninguno de sus datos personales; s&oacute;lo sirven para mejorar su interfaz. La direcci&oacute;n de mail s&oacute;lo se usa para confirmar sus detalles de registro y contrase&ntilde;a (y para enviarle su nueva contrase&ntilde;a en caso de que la olvide).<br /><br />Pulsando en el enlace para registrarse usted muestra su conformidad con estos t&eacute;rminos y condiciones.';

$lang['Agree_under_13'] = 'Estoy de acuerdo con estos t&eacute;rminos y condiciones y tengo <b>menos de</b> 13 a&ntilde;os de edad';
$lang['Agree_over_13'] = 'Estoy de acuerdo con estos t&eacute;rminos y condiciones y tengo <b>m&aacute;s de</b> o <b>exactamente</b> 13 de edad';
$lang['Agree_not'] = 'No estoy de acuerdo con estos t&eacute;rminos y condiciones';

$lang['Wrong_activation'] = 'La clave de activaci&oacute;n no coincide con ninguna cuenta de la base de datos.';
$lang['Send_password'] = 'Env&iacute;enme una nueva contrase&ntilde;a'; 
$lang['Password_updated'] = 'Se ha creado una nueva contrase&ntilde;a; por favor, revise su correo para m&aacute;s detalles sobre c&oacute;mo activarla.';
$lang['No_email_match'] = 'La direcci&oacute;n de correo electr&oacute;nico que ha ingresado no coincide con ninguna cuenta de usuario de nuestra base de datos.';
$lang['New_password_activation'] = 'Activaci&oacute;n de nueva contrase&ntilde;a';
$lang['Password_activated'] = 'Su cuenta ha sido reactivada. Para conectarse, por favor, use la contrase&ntilde;a provista en el correo que ha recibido.';

$lang['Send_email_msg'] = 'Enviar un correo electr&oacute;nico';
$lang['No_user_specified'] = 'No ha especificado un usuario';
$lang['User_prevent_email'] = 'Este usuario no desea recibir correo. Trate de enviarle un Mensaje Privado.';
$lang['User_not_exist'] = 'El usuario especificado no existe';
$lang['CC_email'] = 'Enviar una copia de este correo a Usted mismo';
$lang['Email_message_desc'] = 'Este mensaje se enviar&aacute; como texto simple, as&iacute; que no incluya c&oacute;digo HTML o BBCode. La respuesta para este mensaje llegar&aacute; a su direcci&oacute;n de correo electr&oacute;nico registrado.';
$lang['Flood_email_limit'] = 'No puede enviar otro correo en este momento. Intente de nuevo m&aacute;s tarde.';
$lang['Recipient'] = 'Destinatario';
$lang['Email_sent'] = 'El correo ha sido enviado.';
$lang['Send_email'] = 'Enviar correo';
$lang['Empty_subject_email'] = 'Debe especificar un Asunto para el correo.';
$lang['Empty_message_email'] = 'Debe ingresar un mensaje para que el correo pueda ser enviado.';


//
// Visual confirmation system strings
//
$lang['Confirm_code_wrong'] = 'El c&oacute;digo de confirmaci&oacute;n que ha ingresado es incorrecto.';
$lang['Too_many_registers'] = 'Ha excedido el n&uacute;mero de intentos de registro. Int&eacute;ntelo m&aacute;s tarde.';
$lang['Confirm_code_impaired'] = 'Si tiene problemas para leer este c&oacute;digo, contacte con el %sAdministrator%s para asistencia.';
$lang['Confirm_code'] = 'C&oacute;digo de confirmaci&oacute;n';
$lang['Confirm_code_explain'] = 'Ingrese el c&oacute;digo exactamente como lo ve. El c&oacute;digo es sensible a may&uacute;sculas y min&uacute;sculas; los ceros tienen una l&iacute;nea diagonal que los cruza.';



//
// Memberslist
//
$lang['Select_sort_method'] = 'Elija un m&eacute;todo para ordenar';
$lang['Sort'] = 'Ordenar';
$lang['Sort_Top_Ten'] = 'Los 10 usuarios que m&aacute;s escriben';
$lang['Sort_Joined'] = 'Fecha de registro';
$lang['Sort_Username'] = 'Nombre de Usuario';
$lang['Sort_Location'] = 'Ubicaci&oacute;n';
$lang['Sort_Posts'] = 'Cantidad de mensajes';
$lang['Sort_Email'] = 'Correo electr&oacute;nico';
$lang['Sort_Website'] = 'Sitio Web';
$lang['Sort_Ascending'] = 'Ascendente';
$lang['Sort_Descending'] = 'Descendente';
$lang['Order'] = 'Orden';


//
// Group control panel
//
$lang['Group_Control_Panel'] = 'Panel de Control de Grupos';
$lang['Group_member_details'] = 'Detalles de Membres&iacute;a de Grupo';
$lang['Group_member_join'] = 'Unirse a un Grupo';

$lang['Group_Information'] = 'Informaci&oacute;n de Grupo';
$lang['Group_name'] = 'Nombre del Grupo';
$lang['Group_description'] = 'Descripci&oacute;n del Grupo';
$lang['Group_membership'] = 'Membres&iacute;a del Grupo';
$lang['Group_Members'] = 'Miembros del Grupo';
$lang['Group_Moderator'] = 'Moderador del Grupo';
$lang['Pending_members'] = 'Miembros Pendientes';

$lang['Group_type'] = 'Tipo de Grupo';
$lang['Group_open'] = 'Grupo Abierto';
$lang['Group_closed'] = 'Grupo Cerrado';
$lang['Group_hidden'] = 'Grupo Oculto';

$lang['Current_memberships'] = 'Miembros actuales';
$lang['Non_member_groups'] = 'Grupos donde no es miembro';
$lang['Memberships_pending'] = 'Membres&iacute;as Pendientes';

$lang['No_groups_exist'] = 'No existen Grupos';
$lang['Group_not_exist'] = 'No existe ese Grupo';

$lang['Join_group'] = 'Unirse a Grupo';
$lang['No_group_members'] = 'Este Grupo no tiene componentes';
$lang['Group_hidden_members'] = 'Este Grupo est&aacute; oculto; no puede ver sus componentes';
$lang['No_pending_group_members'] = 'Este grupo no tiene miembros pendientes';
$lang['Group_joined'] = 'Se ha subscripto &eacute;xitosamente a este Grupo.<br />Ser&aacute; notificado cuando su subscripci&oacute;n sea aprobada por el moderador del Grupo.';
$lang['Group_request'] = 'Se ha realizado una petici&oacute;n para unirse al Grupo';
$lang['Group_approved'] = 'Su petici&oacute;n ha sido aprobada.';
$lang['Group_added'] = 'Ud. ha sido agregado a este Grupo.'; 
$lang['Already_member_group'] = 'Usted ya es miembro de este grupo';
$lang['User_is_member_group'] = 'El usuario ya es miembro de este grupo';
$lang['Group_type_updated'] = 'Se ha actualizado con &eacute;xito el tipo de grupo';

$lang['Could_not_add_user'] = 'El usuario seleccionado no existe';
$lang['Could_not_anon_user'] = 'No puede unirse an&oacute;nimamente a un grupo';

$lang['Confirm_unsub'] = '&iquest;Est&aacute; seguro de que quiere cancelar su suscripci&oacute;n a este grupo?';
$lang['Confirm_unsub_pending'] = 'Su suscripci&oacute;n a este grupo no ha sido aprobada todav&iacute;a; &iquest;Est&aacute; seguro de que desea cancelar la suscripci&oacute;n?';

$lang['Unsub_success'] = 'Su suscripci&oacute;n a este grupo ha sido cancelada';

$lang['Approve_selected'] = 'Aprobar los seleccionados';
$lang['Deny_selected'] = 'Denegar los seleccionados';
$lang['Not_logged_in'] = 'Debe estar conectado para unirse a un grupo';
$lang['Remove_selected'] = 'Borrar los seleccionados';
$lang['Add_member'] = 'Agregar Miembro';
$lang['Not_group_moderator'] = 'Usted no es el moderador de este Grupo, por lo que no puede ejecutar esta acci&oacute;n.';

$lang['Login_to_join'] = 'Con&eacute;ctese para administrar las membres&iacute;as del grupo';
$lang['This_open_group'] = 'Este es un grupo abierto: pulse aqu&iacute; para pedir unirse';
$lang['This_closed_group'] = 'Este es un grupo cerrado: no se aceptan m&aacute;s usuarios';
$lang['This_hidden_group'] = 'Este es un grupo oculto: no se permite agregar autom&aacute;ticamente usuarios';
$lang['Member_this_group'] = 'Usted es miembro de este grupo';
$lang['Pending_this_group'] = 'Su membres&iacute;a a este grupo est&aacute; endiente';
$lang['Are_group_moderator'] = 'Usted es el moderador de este grupo';
$lang['None'] = 'Ninguno';

$lang['Subscribe'] = 'Suscribirse';
$lang['Unsubscribe'] = 'Cancelar Suscripci&oacute;n';
$lang['View_Information'] = 'Ver Informaci&oacute;n';


//
// Search
//
$lang['Search_query'] = 'B&uacute;squeda';
$lang['Search_options'] = 'Opciones de b&uacute;squeda';

$lang['Search_keywords'] = 'Buscar por palabras clave';
$lang['Search_keywords_explain'] = 'Puede usar <u>AND</u> para definir palabras que deben estar en los resultados, <u>OR</u> para definir palabras que podr&iacute;an estar en los resultados y <u>NOT</u> para definir palabras que NO deber&iacute;an estar en los resultados. Use * como comod&iacute;n para b&uacute;scar partes de una palabra';
$lang['Search_author'] = 'Buscar por Autor';
$lang['Search_author_explain'] = 'Use * como comod&iacute;n para b&uacute;scar partes de una palabra';

$lang['Search_for_any'] = 'Buscar cualquiera de los t&eacute;rminos o usar la b&uacute;squeda tal cual se escribi&oacute;';
$lang['Search_for_all'] = 'Buscar todas las palabras';
$lang['Search_title_msg'] = 'Buscar en t&iacute;tulos y texto de los mensajes';
$lang['Search_msg_only'] = 'Buscar s&oacute;lo en el texto de los mensajes';

$lang['Return_first'] = 'Mostrar los primeros'; // followed by xxx characters in a select box
$lang['characters_posts'] = 'Caracteres de los mensajes';

$lang['Search_previous'] = 'Buscar los anteriores'; // followed by days, weeks, months, year, all in a select box

$lang['Sort_by'] = 'Ordenar por';
$lang['Sort_Time'] = 'Fecha de publicaci&oacute;n';
$lang['Sort_Post_Subject'] = 'Asunto del Mensaje';
$lang['Sort_Topic_Title'] = 'T&iacute;tulo del Tema';
$lang['Sort_Author'] = 'Autor';
$lang['Sort_Forum'] = 'Foro';

$lang['Display_results'] = 'Mostrar resultados como';
$lang['All_available'] = 'Todos los disponibles';
$lang['No_searchable_forums'] = 'No tiene permisos para realizar b&uacute;squedas en este foro.';

$lang['No_search_match'] = 'No hay temas ni mensajes que coincidan con su criterio de b&uacute;squeda';
$lang['Found_search_match'] = 'Se encontr&oacute; %d resultado'; // eg. Search found 1 match
$lang['Found_search_matches'] = 'Se encontraron %d resultados'; // eg. Search found 24 matches
$lang['Search_Flood_Error'] = 'Usted no puede crear otra busqueda tan pronto tras la ultima realizada; por favor intentelo de nuevo tras unos segundos.';

$lang['Close_window'] = 'Cerrar Ventana';


//
// Auth related entries
//
// Note the %s will be replaced with one of the following 'user' arrays
$lang['Sorry_auth_announce'] = 'Lo sentimos, pero s&oacute;lo %s pueden publicar anuncios en este foro.';
$lang['Sorry_auth_sticky'] = 'Lo sentimos, pero s&oacute;lo %s pueden publicar mensajes permanentes en este foro.'; 
$lang['Sorry_auth_read'] = 'Lo sentimos, pero s&oacute;lo %s pueden leer temas en este foro.'; 
$lang['Sorry_auth_post'] = 'Lo sentimos, pero s&oacute;lo %s pueden publicar temas en este foro.'; 
$lang['Sorry_auth_reply'] = 'Lo sentimos, pero s&oacute;lo %s pueden responder mensajes en este foro.';
$lang['Sorry_auth_edit'] = 'Lo sentimos, pero s&oacute;lo %s pueden modificar mensajes en este foro.'; 
$lang['Sorry_auth_delete'] = 'Lo sentimos, pero s&oacute;lo %s pueden borrar mensajes en este foro.';
$lang['Sorry_auth_vote'] = 'Lo sentimos, pero s&oacute;lo %s pueden votar en encuestas en este foro.';

// These replace the %s in the above strings
$lang['Auth_Anonymous_Users'] = '<b>usuarios an&oacute;nimos</b>';
$lang['Auth_Registered_Users'] = '<b>usuarios registrados</b>';
$lang['Auth_Users_granted_access'] = '<b>usuarios con permisos especiales</b>';
$lang['Auth_Moderators'] = '<b>moderadores</b>';
$lang['Auth_Administrators'] = '<b>administradores</b>';

$lang['Not_Moderator'] = 'Usted no es moderador de este foro.';
$lang['Not_Authorised'] = 'No Autorizado';

$lang['You_been_banned'] = 'Se le ha denegado el acceso a este foro.<br />Por favor, contacte con el administrador o un moderador para m&aacute;s informaci&oacute;n.';


//
// Viewonline
//
$lang['Reg_users_zero_online'] = 'Hay 0 Usuarios Registrados y '; // There are 5 Registered and
$lang['Reg_users_online'] = 'Hay %d Usuarios Registrados y '; // There are 5 Registered and
$lang['Reg_user_online'] = 'Hay %d Usuario Registrado y '; // There is 1 Registered and
$lang['Hidden_users_zero_online'] = '0 Ocultos conectados'; // 6 Hidden users online
$lang['Hidden_users_online'] = '%d Ocultos conectados'; // 6 Hidden users online
$lang['Hidden_user_online'] = '%d Oculto conectado'; // 6 Hidden users online
$lang['Guest_users_online'] = 'Hay %d Usuarios An&oacute;nimos conectados'; // There are 10 Guest users online
$lang['Guest_users_zero_online'] = 'Hay 0 Usuarios An&oacute;nimos conectados'; // There are 10 Guest users online
$lang['Guest_user_online'] = 'Hay %d Usuario An&oacute;nimo conectado'; // There is 1 Guest user online
$lang['No_users_browsing'] = 'No hay usuarios viendo el foro en este momento';

$lang['Online_explain'] = 'Estos datos est&aacute;n basados en la actividad de usuarios de los &uacute;ltimos 5 minutos';

$lang['Forum_Location'] = 'Ubicaci&oacute;n en el Foro';
$lang['Last_updated'] = '&Uacute;ltima Actualizaci&oacute;n';

$lang['Forum_index'] = '&Iacute;ndice del Foro'; //cuando admin esta en Indice de Administracion se muestra como si estuviera aca (when admin is in Admin Index it is shown as if he was here)
$lang['Logging_on'] = 'Conect&aacute;ndose';
$lang['Posting_message'] = 'Publicando un mensaje';
$lang['Searching_forums'] = 'Buscando en los Foros';
$lang['Viewing_profile'] = 'Viendo el perfil';
$lang['Viewing_online'] = 'Viendo qui&eacute;n est&aacute; conectado';
$lang['Viewing_member_list'] = 'Viendo la lista de usuarios';
$lang['Viewing_priv_msgs'] = 'Viendo mensajes privados';
$lang['Viewing_FAQ'] = 'Viendo las Preguntas Frecuentes';


//
// Moderator Control Panel
//
$lang['Mod_CP'] = 'Panel de Control del Moderador';
$lang['Mod_CP_explain'] = 'Usando el formulario siguiente puede ejecutar operaciones masivas de moderaci&oacute;n en este foro. Puede bloquear, desbloquear, mover o eliminar cualquier n&uacute;mero de temas.';

$lang['Select'] = 'Seleccionar';
$lang['Delete'] = 'Borrar';
$lang['Move'] = 'Mover';
$lang['Lock'] = 'Bloquear';
$lang['Unlock'] = 'Desbloquear';

$lang['Topics_Removed'] = 'Los temas seleccionados han sido borrados con &eacute;xito.';
$lang['Topics_Locked'] = 'Los temas seleccionados han sido cerrados.';
$lang['Topics_Moved'] = 'Los temas seleccionados han sido movidos.';
$lang['Topics_Unlocked'] = 'Los temas seleccionados han sido desbloqueados.';
$lang['No_Topics_Moved'] = 'No se ha movido ning&uacute;n tema.';

$lang['Confirm_delete_topic'] = '&iquest;Est&aacute; seguro de que quiere borrar el/los tema(s) seleccionado(s)?';
$lang['Confirm_lock_topic'] = '&iquest;Est&aacute; seguro de que quiere cerrar el/los tema(s) seleccionado(s)?';
$lang['Confirm_unlock_topic'] = '&iquest;Est&aacute; seguro de que quiere desbloquear el/los tema(s) seleccionado(s)?';
$lang['Confirm_move_topic'] = '&iquest;Est&aacute; seguro de que quiere mover el/los tema(s) seleccionado(s)?';

$lang['Move_to_forum'] = 'Mover al foro';
$lang['Leave_shadow_topic'] = 'Dejar enlace de referencia sombreado en el foro anterior.';

$lang['Split_Topic'] = 'Panel de Control para Divisi&oacute;n de Temas';
$lang['Split_Topic_explain'] = 'Usando el siguiente formulario puede separar un tema en dos, ya sea seleccionando los mensajes individualmente o separ&aacute;ndolos a partir de determinado mensaje';
$lang['Split_title'] = 'T&iacute;tulo del nuevo tema';
$lang['Split_forum'] = 'Foro donde colocar el tema nuevo';
$lang['Split_posts'] = 'Separar los mensajes seleccionados';
$lang['Split_after'] = 'Separar a partir del mensaje seleccionado';
$lang['Topic_split'] = 'El tema seleccionado ha sido separado con &eacute;xito';

$lang['Too_many_error'] = 'Ha seleccionado m&aacute;s de un mensaje. S&oacute;lo puede seleccionar un mensaje para separar el tema a partir de &eacute;l';

$lang['None_selected'] = 'No ha seleccionado ning&uacute;n tema donde aplicar esta acci&oacute;n. Por favor, vuelva atr&aacute;s y seleccione por lo menos uno.';
$lang['New_forum'] = 'Nuevo foro';

$lang['This_posts_IP'] = 'Direcci&oacute;n IP para este mensaje';
$lang['Other_IP_this_user'] = 'Otras direcciones IP que este usuario ha usado para crear mensajes';
$lang['Users_this_IP'] = 'Usuarios publicando mensajes desde esta direcci&oacute;n IP';
$lang['IP_info'] = 'Informaci&oacute;n IP';
$lang['Lookup_IP'] = 'Buscar direcci&oacute;n IP';


//
// Timezones ... for display on each page
//
$lang['All_times'] = 'Todas las horas est&aacute;n en %s'; // eg. All times are GMT - 12 Hours (times from next block)

$lang['-12'] = 'GMT - 12 Horas';
$lang['-11'] = 'GMT - 11 Horas';
$lang['-10'] = 'GMT - 10 Horas';
$lang['-9'] = 'GMT - 9 Horas';
$lang['-8'] = 'GMT - 8 Horas';
$lang['-7'] = 'GMT - 7 Horas';
$lang['-6'] = 'GMT - 6 Horas';
$lang['-5'] = 'GMT - 5 Horas';
$lang['-4'] = 'GMT - 4 Horas';
$lang['-3.5'] = 'GMT - 3.5 Horas';
$lang['-3'] = 'GMT - 3 Horas';
$lang['-2'] = 'GMT - 2 Horas';
$lang['-1'] = 'GMT - 1 Horas';
$lang['0'] = 'GMT';
$lang['1'] = 'GMT + 1 Hora';
$lang['2'] = 'GMT + 2 Horas';
$lang['3'] = 'GMT + 3 Horas';
$lang['3.5'] = 'GMT + 3.5 Horas';
$lang['4'] = 'GMT + 4 Horas';
$lang['4.5'] = 'GMT + 4.5 Horas';
$lang['5'] = 'GMT + 5 Horas';
$lang['5.5'] = 'GMT + 5.5 Horas';
$lang['6'] = 'GMT + 6 Horas';
$lang['6.5'] = 'GMT + 6.5 Horas';
$lang['7'] = 'GMT + 7 Horas';
$lang['8'] = 'GMT + 8 Horas';
$lang['9'] = 'GMT + 9 Horas';
$lang['9.5'] = 'GMT + 9.5 Horas';
$lang['10'] = 'GMT + 10 Horas';
$lang['11'] = 'GMT + 11 Horas';
$lang['12'] = 'GMT + 12 Horas';
$lang['13'] = 'GMT + 13 Horas';

// These are displayed in the timezone select box
$lang['tz']['-12'] = 'GMT - 12 Horas';
$lang['tz']['-11'] = 'GMT - 11 Horas';
$lang['tz']['-10'] = 'GMT - 10 Horas';
$lang['tz']['-9'] = 'GMT - 9 Horas';
$lang['tz']['-8'] = 'GMT - 8 Horas';
$lang['tz']['-7'] = 'GMT - 7 Horas';
$lang['tz']['-6'] = 'GMT - 6 Horas';
$lang['tz']['-5'] = 'GMT - 5 Horas';
$lang['tz']['-4'] = 'GMT - 4 Horas';
$lang['tz']['-3.5'] = 'GMT - 3.5 Horas';
$lang['tz']['-3'] = 'GMT - 3 Horas';
$lang['tz']['-2'] = 'GMT - 2 Horas';
$lang['tz']['-1'] = 'GMT - 1 Horas';
$lang['tz']['0'] = 'GMT';
$lang['tz']['1'] = 'GMT + 1 Hora';
$lang['tz']['2'] = 'GMT + 2 Horas';
$lang['tz']['3'] = 'GMT + 3 Horas';
$lang['tz']['3.5'] = 'GMT + 3.5 Horas';
$lang['tz']['4'] = 'GMT + 4 Horas';
$lang['tz']['4.5'] = 'GMT + 4.5 Horas';
$lang['tz']['5'] = 'GMT + 5 Horas';
$lang['tz']['5.5'] = 'GMT + 5.5 Horas';
$lang['tz']['6'] = 'GMT + 6 Horas';
$lang['tz']['6.5'] = 'GMT + 6.5 Horas';
$lang['tz']['7'] = 'GMT + 7 Horas';
$lang['tz']['8'] = 'GMT + 8 Horas';
$lang['tz']['9'] = 'GMT + 9 Horas';
$lang['tz']['9.5'] = 'GMT + 9.5 Horas';
$lang['tz']['10'] = 'GMT + 10 Horas';
$lang['tz']['11'] = 'GMT + 11 Horas';
$lang['tz']['12'] = 'GMT + 12 Horas';
$lang['tz']['13'] = 'GMT + 13 Horas';

$lang['datetime']['Sunday'] = 'Domingo';
$lang['datetime']['Monday'] = 'Lunes';
$lang['datetime']['Tuesday'] = 'Martes';
$lang['datetime']['Wednesday'] = 'Mi&eacute;rcoles';
$lang['datetime']['Thursday'] = 'Jueves';
$lang['datetime']['Friday'] = 'Viernes';
$lang['datetime']['Saturday'] = 'S&aacute;bado';
$lang['datetime']['Sun'] = 'Dom';
$lang['datetime']['Mon'] = 'Lun';
$lang['datetime']['Tue'] = 'Mar';
$lang['datetime']['Wed'] = 'Mie';
$lang['datetime']['Thu'] = 'Jue';
$lang['datetime']['Fri'] = 'Vie';
$lang['datetime']['Sat'] = 'Sab';
$lang['datetime']['January'] = 'Enero';
$lang['datetime']['February'] = 'Febrero';
$lang['datetime']['March'] = 'Marzo';
$lang['datetime']['April'] = 'Abril';
$lang['datetime']['May'] = 'Mayo';
$lang['datetime']['June'] = 'Junio';
$lang['datetime']['July'] = 'Julio';
$lang['datetime']['August'] = 'Agosto';
$lang['datetime']['September'] = 'Septiembre';
$lang['datetime']['October'] = 'Octubre';
$lang['datetime']['November'] = 'Noviembre';
$lang['datetime']['December'] = 'Diciembre';
$lang['datetime']['Jan'] = 'Ene';
$lang['datetime']['Feb'] = 'Feb';
$lang['datetime']['Mar'] = 'Mar';
$lang['datetime']['Apr'] = 'Abr';
$lang['datetime']['May'] = 'May';
$lang['datetime']['Jun'] = 'Jun';
$lang['datetime']['Jul'] = 'Jul';
$lang['datetime']['Aug'] = 'Ago';
$lang['datetime']['Sep'] = 'Sep';
$lang['datetime']['Oct'] = 'Oct';
$lang['datetime']['Nov'] = 'Nov';
$lang['datetime']['Dec'] = 'Dic';

//
// Errors (not related to a
// specific failure on a page)
//
$lang['Information'] = 'Informaci&oacute;n';
$lang['Critical_Information'] = 'Informaci&oacute;n Cr&iacute;tica';

$lang['General_Error'] = 'Error general';
$lang['Critical_Error'] = 'Error Cr&iacute;tico';
$lang['An_error_occured'] = 'Ha ocurrido un Error';
$lang['A_critical_error'] = 'Ha ocurrido un Error Cr&iacute;tico';

$lang['Admin_reauthenticate'] = 'Para acceder al Panel de Administraci&oacute;n debes volver a identificarte.';
$lang['Login_attempts_exceeded'] = 'El n&uacute;mero m&aacute;ximo de intentos de conexi&oacute;n de %s se ha excedido.  Por lo que no se le permite la conexi&oacute;n durante los pr&oacute;ximos %s minutos.';
$lang['Please_remove_install_contrib'] = 'Por favor asegurese de que los directorios install/ y contrib/ han sido borrados';
$lang['Session_invalid'] = 'Sesi&oacute;n invalida. Por favor vuelva a enviar el formulario.';

//
// language buttons
//
$lang['button_pm_new'] = 'Nuevo<div class="bld">mensaje privado</div>';
$lang['button_pm_reply'] = 'Enviar<div class="bld">Respuesta</div>';
$lang['button_topic_locked'] = '<div class="bld">Bloqueado</div>';
$lang['button_topic_new'] = 'Nuevo<div class="bld">Tema</div>';
$lang['button_topic_reply'] = 'Escribir<div class="bld">Respuesta</div>';
$lang['icon_post_edit'] = '<div class="sml bld">Editar</div>';
$lang['icon_post_quote'] = '<div class="sml bld">Citar</div>';

//
// IM Portal http://www.integramod.com
//
$lang['Home'] = 'Home';
$lang['Forums'] = 'Foros';

//
// That's all, Folks!
// -------------------------------------------------

?>