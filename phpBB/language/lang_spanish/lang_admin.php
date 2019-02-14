<?php

/***************************************************************************
 *                            lang_admin.php [Spanish]
 *                              -------------------
 *     begin                : Sat Dec 16 2000
 *     copyright            : (C) 2001 The phpBB Group
 *     email                : support@phpbb.com
 *
 *     $Id: lang_admin.php,v 1.35.2.10 2005/02/21 18:38:17 acydburn Exp $
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

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical mistakes
	2005-03-18	Christian Gastrell
		Translated to Argentinian Spanish
	2005-03-27	Juan Manuel Muñoz (huanmanwe@yahoo.es)
		Made the 'oficial' Spanish adaptation
*/

//
// Format is same as lang_main
//

//
// Modules, this replaces the keys used
// in the modules[][] arrays in each module file
//
$lang['General'] = 'Administraci&oacute;n General';
$lang['Users'] = 'Administraci&oacute;n de los Usuarios';
$lang['Groups'] = 'Administraci&oacute;n de los Grupos';
$lang['Forums'] = 'Administraci&oacute;n de los Foros';
$lang['Styles'] = 'Administraci&oacute;n de los Estilos';

$lang['Configuration'] = 'Configuraci&oacute;n';
$lang['Permissions'] = 'Permisos';
$lang['Manage'] = 'Administraci&oacute;n';
$lang['Disallow'] = 'Deshabilitar nombres de usuario';
$lang['Prune'] = 'Purgar (Prune)';
$lang['Mass_Email'] = 'Correo masivo';
$lang['Ranks'] = 'Rangos';
$lang['Smilies'] = 'Emoticonos';
$lang['Ban_Management'] = 'Control de Exclusi&oacute;n';
$lang['Word_Censor'] = 'Palabras Censuradas';
$lang['Export'] = 'Exportar';
$lang['Create_new'] = 'Crear';
$lang['Add_new'] = 'Agregar';
$lang['Backup_DB'] = 'Copia de Seguridad de la Base de Datos';
$lang['Restore_DB'] = 'Restaurar la Base de Datos';


//
// Index
//
$lang['Admin'] = 'Administraci&oacute;n';
$lang['Not_admin'] = 'Usted no est&aacute; autorizado para administrar este foro';
$lang['Welcome_phpBB'] = 'Bienvenido a phpBB';
$lang['Admin_intro'] = 'Gracias por elegir phpBB como la soluci&oacute;n para su foro. Esta pantalla le dar&aacute; una s&iacute;ntesis de las estad&iacute;sticas de su foro. Puede volver a esta pantalla pulsando en el enlace <u>&Iacute;ndice de Administraci&oacute;n</u> en el panel izquierdo. Para volver al &iacute;ndice del foro pulse en el logo de phpBB, tambi&eacute;n en el panel izquierdo. El resto de los enlaces en el panel izquierdo de esta pantalla le permitir&aacute;n controlar todos los aspectos de su foro. Cada pantalla tendr&aacute; instrucciones de c&oacute;mo usar cada herramienta.';
$lang['Main_index'] = '&Iacute;ndice del Foro';
$lang['Forum_stats'] = 'Estad&iacute;sticas del Foro';
$lang['Admin_Index'] = '&Iacute;ndice de Administraci&oacute;n';
$lang['Preview_forum'] = 'Vista previa del Foro';

$lang['Click_return_admin_index'] = 'Pulse %sAqu&iacute;%s para regresar al &Iacute;ndice de Administraci&oacute;n';

$lang['Statistic'] = 'Estad&iacute;stica';
$lang['Value'] = 'Valor'; //var duplicada, buscar mas abajo (duplicated var, search down)
$lang['Number_posts'] = 'Cantidad de env&iacute;os';
$lang['Posts_per_day'] = 'Env&iacute;os por d&iacute;a';
$lang['Number_topics'] = 'Cantidad de temas';
$lang['Topics_per_day'] = 'Temas por d&iacute;a';
$lang['Number_users'] = 'Cantidad de usuarios';
$lang['Users_per_day'] = 'Usuarios por d&iacute;a';
$lang['Board_started'] = 'Fecha de inicio del Foro';
$lang['Avatar_dir_size'] = 'Tama&ntilde;o del directorio de Im&aacute;genes';
$lang['Database_size'] = 'Tama&ntilde;o de la Base de Datos';
$lang['Gzip_compression'] ='Tipo de Compresi&oacute;n Gzip';
$lang['Not_available'] = 'No est&aacute; disponible';

$lang['ON'] = 'ON'; // This is for GZip compression
$lang['OFF'] = 'OFF'; 


//
// DB Utils
//
$lang['Database_Utilities'] = 'Utilidades de la Base de Datos';

$lang['Restore'] = 'Restaurar';
$lang['Backup'] = 'Copia de Seguridad (Backup)';
$lang['Restore_explain'] = 'Esta acci&oacute;n realizar&aacute; una restauraci&oacute;n completa de todas las tablas desde un archivo previamente guardado. Si su servidor lo soporta, puede subir un archivo de texto comprimido con Gzip y autom&aacute;ticamente ser&aacute; descomprimido. <b>ATENCION</b>: Esta acci&oacute;n sobrescribir&aacute; los datos existentes. La restauraci&oacute;n puede llevar un largo tiempo para procesar, dependiendo del tama&ntilde;o de la copia de seguridad (backup), mant&eacute;ngase en esta p&aacute;gina hasta que se complete el proceso.';
$lang['Backup_explain'] = 'Aqu&iacute; puede hacer una copia de seguridad (backup) de todos sus datos relacionados con phpBB. Si tiene tablas adicionales personalizadas en la base de datos junto con las de phpBB y quiere incluirlas, por favor, ingrese sus nombres aqu&iacute; debajo separ&aacute;ndolas con una coma en la caja de texto Tablas Adicionales. Si su servidor lo soporta puede tambi&eacute;n comprimir con Gzip el archivo para reducir su tama&ntilde;o antes de descargarlo.';

$lang['Backup_options'] = 'Opciones de la Copia de Seguridad (Backup)';
$lang['Start_backup'] = 'Iniciar Copia de Seguridad (Backup)';
$lang['Full_backup'] = 'Copia de Seguridad (Backup) completa';
$lang['Structure_backup'] = 'Copia de Seguridad s&oacute;lo de la estructura';
$lang['Data_backup'] = 'Copia de Seguridad s&oacute;lo de los datos';
$lang['Additional_tables'] = 'Tablas Adicionales';
$lang['Gzip_compress'] = 'Archivo comprimido en Gzip';
$lang['Select_file'] = 'Seleccione un archivo';
$lang['Start_Restore'] = 'Iniciar Restauraci&oacute;n';

$lang['Restore_success'] = 'La Base de Datos ha sido Restaurada con &eacute;xito.<br /><br />Su foro deber&iacute;a retornar al estado en que se encontraba cuando se realiz&oacute; el Backup.';
$lang['Backup_download'] = 'La descarga comenzar&aacute; enseguida, por favor, espere un momento.';
$lang['Backups_not_supported'] = 'Disculpe, pero la Copia de Seguridad (Backup) de la Base de Datos no est&aacute; soportada en su sistema de Bases de Datos.';

$lang['Restore_Error_uploading'] = 'Error subiendo el archivo de la Copia de Seguridad (Backup)';
$lang['Restore_Error_filename'] = 'Problema de nombre de archivo. Por favor, intente con otro nombre';
$lang['Restore_Error_decompress'] = 'No se puede descomprimir el archivo GZIP. Por favor, env&iacute;e un archivo de texto simple';
$lang['Restore_Error_no_file'] = 'No se ha podido subir ning&uacute;n archivo';


//
// Auth pages
//
$lang['Select_a_User'] = 'Seleccione un Usuario';
$lang['Select_a_Group'] = 'Seleccione un Grupo';
$lang['Select_a_Forum'] = 'Seleccione un Foro';
$lang['Auth_Control_User'] = 'Control de Permisos de Usuario'; 
$lang['Auth_Control_Group'] = 'Control de Permisos de Grupo'; 
$lang['Auth_Control_Forum'] = 'Control de Permisos de Foro'; 
$lang['Look_up_User'] = 'Observar Usuario'; 
$lang['Look_up_Group'] = 'Observar Grupo'; 
$lang['Look_up_Forum'] = 'Observar Foro'; 

$lang['Group_auth_explain'] = 'Desde aqu&iacute; podr&aacute; cambiar los permisos y el estado de moderaci&oacute;n asignados a cada grupo. No olvide que cuando cambia permisos de grupo, los permisos individuales de usuario pueden seguir permitiendo que alguien se conecte a un foro en particular al cual no deber&iacute;a tener acceso. Ser&aacute; advertido si esto sucede.';
$lang['User_auth_explain'] = 'Desde aqu&iacute; podr&aacute; cambiar los permisos y el estado de moderaci&oacute;n asignado a cada usuario. No olvide que cuando cambia permisos de usuarios, los permisos de grupo pueden seguir permitiendo que alguien se conecte a un foro en particular al cual no deber&iacute;a tener acceso. Ser&aacute; advertido si esto sucede.';
$lang['Forum_auth_explain'] = 'Desde aqu&iacute; podr&aacute; cambiar los niveles de autorizaci&oacute;n para cada foro. Tiene dos maneras de hacer esto: modo avanzado y modo simple; el modo avanzado ofrece mayor control sobre las operaciones permitidas en cada foro. Recuerde que cambiar los niveles de permisos para los foros afectar&aacute; sobre qu&eacute; usuarios pueden ejecutar qu&eacute; opciones sobre ellos.';

$lang['Simple_mode'] = 'Modo Simple';
$lang['Advanced_mode'] = 'Modo Avanzado';
$lang['Moderator_status'] = 'Estado del Moderador';

$lang['Allowed_Access'] = 'Acceso Permitido';
$lang['Disallowed_Access'] = 'Acceso Denegado';
$lang['Is_Moderator'] = 'Es Moderador';
$lang['Not_Moderator'] = 'No Moderador';

$lang['Conflict_warning'] = 'Advertencia de Conflicto de Autorizaciones';
$lang['Conflict_access_userauth'] = 'Este usuario todav&iacute;a tiene acceso a este foro por medio de los permisos de grupo al que pertenece. Tal vez deba cambiar los permisos de grupo o borrar este usuario de su grupo para prevenir que este tenga acceso. Los grupos que permiten acceso (y los foros involucrados) est&aacute;n listados abajo.';
$lang['Conflict_mod_userauth'] = 'Este usuario todav&iacute;a tiene derechos de moderador a este foro por medio de los permisos de grupo al que pertenece. Tal vez deba cambiar los permisos de grupo o borrar este usuario de su grupo para prevenir que este tenga acceso de moderador. Los grupos que permiten acceso (y los foros involucrados) est&aacute;n listados abajo.';

$lang['Conflict_access_groupauth'] = 'El siguiente usuario (o usuarios) todav&iacute;a tiene(n) acceso a este foro por medio de sus permisos individuales de usuario. Tal vez deber&iacute;a cambiar los permisos individuales para prevenir el acceso. Los usuarios con acceso (y los foros involucrados) est&aacute;n listados abajo.';
$lang['Conflict_mod_groupauth'] = 'El siguiente usuario (o usuarios) todav&iacute;a tiene(n) permisos de moderaci&oacute;n en este foro por medio de sus permisos de usuario. Tal vez deber&iacute;a cambiar los permisos individuales para prevenir que tenga(n) derechos de moderaci&oacute;n. Los usuarios con acceso (y los foros involucrados) est&aacute;n listados abajo.';

$lang['Public'] = 'P&uacute;blico';
$lang['Private'] = 'Privado';
$lang['Registered'] = 'Registrados';
$lang['Administrators'] = 'Administradores';
$lang['Hidden'] = 'Oculto';

// These are displayed in the drop down boxes for advanced
// mode forum auth, try and keep them short!
$lang['Forum_ALL'] = 'TODOS';
$lang['Forum_REG'] = 'REGs';
$lang['Forum_PRIVATE'] = 'PRIVADOS';
$lang['Forum_MOD'] = 'MODs';
$lang['Forum_ADMIN'] = 'ADMINs';

$lang['View'] = 'Ver';
$lang['Read'] = 'Leer';
$lang['Post'] = 'Env&iacute;o';
$lang['Reply'] = 'Responder';
$lang['Edit'] = 'Modificar';
$lang['Delete'] = 'Borrar';
$lang['Sticky'] = 'Fijo (Post It)';
$lang['Announce'] = 'Hacer Anuncios'; 
$lang['Vote'] = 'Votar';
$lang['Pollcreate'] = 'Crear una Encuesta';

$lang['Permissions'] = 'Permisos';
$lang['Simple_Permission'] = 'Permisos Simples';

$lang['User_Level'] = 'Nivel de Usuario'; 
$lang['Auth_User'] = 'Usuario';
$lang['Auth_Admin'] = 'Administrador';
$lang['Group_memberships'] = 'Grupos de Usuarios';
$lang['Usergroup_members'] = 'Este grupo tiene los siguientes miembros';

$lang['Forum_auth_updated'] = 'Permisos de Foro actualizados';
$lang['User_auth_updated'] = 'Permisos de Usuario actualizados';
$lang['Group_auth_updated'] = 'Permisos de Grupo actualizados';

$lang['Auth_updated'] = 'Los permisos han sido actualizados';
$lang['Click_return_userauth'] = 'Pulse %sAqu&iacute;%s para volver a los Permisos de los Usuarios';
$lang['Click_return_groupauth'] = 'Pulse %sAqu&iacute;%s para volver a los Permisos del Grupo';
$lang['Click_return_forumauth'] = 'Pulse %sAqu&iacute;%s para volver a los Permisos del Foro';


//
// Banning
//
$lang['Ban_control'] = 'Control de Exclusi&oacute;n';
$lang['Ban_explain'] = 'Desde aqu&iacute; usted puede controlar la Exclusi&oacute;n de usuarios. Puede hacer esto expulsando un usuario, una direcci&oacute;n IP o un rango de direcciones IP o nombres de host, o ambos. Estos m&eacute;todos previenen que un usuario pueda acceder a la p&aacute;gina principal de su foro. Para prevenir que un usuario vuelva a registrarse puede inhibir su direcci&oacute;n de correo electr&oacute;nico (e-mail). Por favor, note que inhibiendo s&oacute;lo la direcci&oacute;n de mail no prevendr&aacute; que ese usuario se conecte y publique mensajes. Debe usar uno de los m&eacute;todos descritos m&aacute;s arriba.';
$lang['Ban_explain_warn'] = 'Tenga en cuenta que colocando un RANGO de direcciones IP usted excluye de acceso al foro a todas las direcciones que se encuentran dentro del Rango de la lista de exclu&iacute;dos.  Si realmente debe utilizar un rango intente utilizar uno peque&ntilde;o para as&iacute; no excluir a otros usuarios.';

$lang['Select_username'] = 'Seleccione un Usuario';
$lang['Select_ip'] = 'Seleccione una direcci&oacute;n IP';
$lang['Select_email'] = 'Seleccione una direcci&oacute;n de correo electr&oacute;nico (e-mail)';

$lang['Ban_username'] = 'Excluir uno o m&aacute;s usuarios';
$lang['Ban_username_explain'] = 'Puede excluir m&uacute;ltiples usuarios en un solo movimiento usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador';

$lang['Ban_IP'] = 'Excluir una o m&aacute;s direcciones IP o nombres de dominio (hosts)';
$lang['IP_hostname'] = 'Direcciones IP o nombres de dominio (hosts)';
$lang['Ban_IP_explain'] = 'Para especificar varias direcciones IP o nombres de dominio (hosts) sep&aacute;relos con una coma. Para especificar un rango de direcciones IP separe el inicio y el final con un gui&oacute;n (-); para especificar un comod&iacute;n use el asterisco (*).';

$lang['Ban_email'] = 'Excluir una o m&aacute;s direcciones de correo electr&oacute;nico (e-mail)';
$lang['Ban_email_explain'] = 'Para especificar m&aacute;s de una direcci&oacute;n de correo electr&oacute;nico (e-mail) sep&aacute;relas con una coma. Para especificar un comod&iacute;n, use * como en *@hotmail.com';

$lang['Unban_username'] = 'Quitar exclusi&oacute;n a uno o m&aacute;s usuarios';
$lang['Unban_username_explain'] = 'Puede quitar la exclusi&oacute;n a m&uacute;ltiples usuarios en un solo movimiento usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador';

$lang['Unban_IP'] = 'Desinhibir una o m&aacute;s direcciones IP o nombres de dominio (hosts)';
$lang['Unban_IP_explain'] = 'Puede quitar la exclusi&oacute;n a m&uacute;ltiples direcciones IP o nombres de dominio (hosts) en un solo movimiento usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador';

$lang['Unban_email'] = 'Desinhibir una o m&aacute;s direcciones de correo electr&oacute;nico (e-mail)';
$lang['Unban_email_explain'] = 'Puede quitar la exclusi&oacute;n a m&uacute;ltiples direcciones de correo electr&oacute;nico (e-mail) en un solo movimiento usando la combinaci&oacute;n apropiada de rat&oacute;n y teclado seg&uacute;n su navegador';

$lang['No_banned_users'] = 'No hay usuarios exclu&iacute;dos';
$lang['No_banned_ip'] = 'No hay direcciones IP exclu&iacute;das';
$lang['No_banned_email'] = 'No hay direcciones de correo electr&oacute;nico (e-mail) exclu&iacute;das';

$lang['Ban_update_sucessful'] = 'La lista de exclu&iacute;dos ha sido actualizada con &eacute;xito';
$lang['Click_return_banadmin'] = 'Pulse %sAqu&iacute;%s para volver al Control de exclusiones';


//
// Configuration
//
$lang['General_Config'] = 'Configuraci&oacute;n General';
$lang['Config_explain'] = 'El siguiente formulario le permitir&aacute; personalizar todas las opciones generales de su foro. Para configurar Usuarios y Foros use los enlaces correspondientes en el panel de la izquierda.';

$lang['Click_return_config'] = 'Pulse %sAqu&iacute;%s para volver a la Configuraci&oacute;n General';

$lang['General_settings'] = 'Configuraci&oacute;n General del Foro';
$lang['Server_name'] = 'Nombre de Dominio';
$lang['Server_name_explain'] = 'El nombre de dominio desde donde funciona el foro';
$lang['Script_path'] = 'Ubicaci&oacute;n de Scripts';
$lang['Script_path_explain'] = 'La ubicaci&oacute;n donde se halla instalado phpBB2 en relaci&oacute;n al nombre de dominio';
$lang['Server_port'] = 'Puerto del servidor';
$lang['Server_port_explain'] = 'El puerto en el que funciona el servidor, generalmente 80. C&aacute;mbielo s&oacute;lo si es diferente';
$lang['Site_name'] = 'Nombre del Sitio';
$lang['Site_desc'] = 'Descripci&oacute;n del Sitio';
$lang['Board_disable'] = 'Desactivar foro';
$lang['Board_disable_explain'] = 'Esto har&aacute; que el foro no est&eacute; disponible a los usuarios. NO desconecte su nombre de usuario mientras el foro est&eacute; desactivado o no podr&aacute; conectarse de nuevo. Los Administradores pueden acceder el Panel de Administraci&oacute;n mientras el foro est&aacute; deshabilitado.';
$lang['Acct_activation'] = 'Habilitar activaci&oacute;n de cuenta';
$lang['Acc_None'] = 'Ninguna'; // These three entries are the type of activation
$lang['Acc_User'] = 'Usuario';
$lang['Acc_Admin'] = 'Administrador';

$lang['Abilities_settings'] = 'Configuraci&oacute;n B&aacute;sica de Usuarios y Foros';
$lang['Max_poll_options'] = 'N&uacute;mero m&aacute;ximo de opciones para encuestas';
$lang['Flood_Interval'] = 'Intervalo entre env&iacute;os (Flood)';
$lang['Flood_Interval_explain'] = 'Cantidad de segundos que un usuario debe esperar antes de poder hacer otro env&iacute;o'; 
$lang['Board_email_form'] = 'Enviar correo electr&oacute;nico a trav&eacute;s del foro';
$lang['Board_email_form_explain'] = 'Los usuarios env&iacute;an correo electr&oacute;nico unos a otros a trav&eacute;s del foro';
$lang['Topics_per_page'] = 'Temas por p&aacute;gina';
$lang['Posts_per_page'] = 'Respuestas por p&aacute;gina';
$lang['Hot_threshold'] = 'Respuestas necesarias para ser considerado Popular';
$lang['Default_style'] = 'Estilo por defecto';
$lang['Override_style'] = 'Ignorar el estilo del Usuario';
$lang['Override_style_explain'] = 'Reemplazar el estilo del usuario por el estilo por defecto';
$lang['Default_language'] = 'Lenguaje por defecto';
$lang['Date_format'] = 'Formato de fecha';
$lang['System_timezone'] = 'Zona horaria del sistema';
$lang['Enable_gzip'] = 'Habilitar compresi&oacute;n GZip';
$lang['Enable_prune'] = 'Habilitar vencimiento (Pruning) de los Foros';
$lang['Allow_HTML'] = 'Permitir HTML';
$lang['Allow_BBCode'] = 'Permitir BBCode';
$lang['Allowed_tags'] = 'Etiquetas HTML permitidas';
$lang['Allowed_tags_explain'] = 'Separe las etiquetas con comas';
$lang['Allow_smilies'] = 'Permitir Emoticonos';
$lang['Smilies_path'] = 'Ubicaci&oacute;n de los Emoticonos';
$lang['Smilies_path_explain'] = 'Ruta desde el directorio phpBB , por ejemplo: images/smilies';
$lang['Allow_sig'] = 'Permitir Firmas';
$lang['Max_sig_length'] = 'M&aacute;xima longitud de firmas';
$lang['Max_sig_length_explain'] = 'El m&aacute;ximo de caracteres que puede tener una firma';
$lang['Allow_name_change'] = 'Permitir cambiar de Nombre de Usuario';

$lang['Avatar_settings'] = 'Configuraciones de Avatares';
$lang['Allow_local'] = 'Habilitar galer&iacute;a de Avatares';
$lang['Allow_remote'] = 'Habilitar Avatares Remotos';
$lang['Allow_remote_explain'] = 'Avatares vinculados desde otros sitios';
$lang['Allow_upload'] = 'Habilitar subir Avatar';
$lang['Max_filesize'] = 'Tama&ntilde;o m&aacute;ximo de archivo de Avatar';
$lang['Max_filesize_explain'] = 'Para los Avatares que se suben al servidor';
$lang['Max_avatar_size'] = 'Dimensiones m&aacute;ximas para los Avatares';
$lang['Max_avatar_size_explain'] = '(Alto x Ancho en p&iacute;xeles)';
$lang['Avatar_storage_path'] = 'Ubicaci&oacute;n de los Avatares';
$lang['Avatar_storage_path_explain'] = 'La ubicaci&oacute;n donde se encuentran los avatares, por ej. images/avatars';
$lang['Avatar_gallery_path'] = 'Ubicaci&oacute;n de la galer&iacute;a de Avatares';
$lang['Avatar_gallery_path_explain'] = 'La ubicaci&oacute;n donde se encuentra(n) la(s) galer&iacute;a(s) de Avatares, por ej. images/avatars/gallery';

$lang['COPPA_settings'] = 'Configuraciones COPPA';
$lang['COPPA_fax'] = 'N&uacute;mero de Fax COPPA';
$lang['COPPA_mail'] = 'Direcci&oacute;n de correo de COPPA';
$lang['COPPA_mail_explain'] = '&Eacute;sta es la direcci&oacute;n a donde los padres o tutores legales enviar&aacute;n los formularios de COPPA';

$lang['Email_settings'] = 'Configuraciones de E-mail';
$lang['Admin_email'] = 'Direcci&oacute;n de E-mail del Administrador';
$lang['Email_sig'] = 'Firma del E-mail';
$lang['Email_sig_explain'] = 'Este texto ser&aacute; adosado a todos los correos que env&iacute;e el foro';
$lang['Use_SMTP'] = 'Usar servidor SMTP para el correo';
$lang['Use_SMTP_explain'] = 'Marque el "S&Iacute;" si desea enviar e-mails a trav&eacute;s de un servidor externo, en vez de la funci&oacute;n local de env&iacute;o';
$lang['SMTP_server'] = 'Direcci&oacute;n del Servidor SMTP';
$lang['SMTP_username'] = 'Usuario SMTP';
$lang['SMTP_username_explain'] = 'Ingrese un nombre de usuario s&oacute;lo si su servidor SMTP lo requiere';
$lang['SMTP_password'] = 'Clave SMTP';
$lang['SMTP_password_explain'] = 'Ingrese una clave solo si su servidor SMTP lo requiere';

$lang['Disable_privmsg'] = 'Mensaje Privado';
$lang['Inbox_limits'] = 'Cantidad M&aacute;xima de Mensajes en la Bandeja de Entrada';
$lang['Sentbox_limits'] = 'Cantidad M&aacute;xima de Mensajes en la Carpeta de Enviados';
$lang['Savebox_limits'] = 'Cantidad M&aacute;xima de Mensajes en la Carpeta de Guardados';

$lang['Cookie_settings'] = 'Configuraci&oacute;n de las Cookies'; 
$lang['Cookie_settings_explain'] = 'Estos detalles definen c&oacute;mo las cookies son enviadas a sus usuarios a trav&eacute;s de su Navegador. En la mayor&iacute;a de los casos la configuraci&oacute;n por defecto deber&iacute;a bastar, pero si necesita cambiarla h&aacute;galo con cuidado -- una configuraci&oacute;n incorrecta podr&iacute;a ocasionar que sus usuarios no pudiesen Ingresar en el Foro';
$lang['Cookie_domain'] = 'Dominio de la Cookie';
$lang['Cookie_name'] = 'Nombre de la Cookie';
$lang['Cookie_path'] = 'Ruta de la Cookie';
$lang['Cookie_secure'] = 'Cookie segura [ https ]';
$lang['Cookie_secure_explain'] = 'Si su servidor permite SSL, active esta opci&oacute;n, si no, d&eacute;jela desactivada';
$lang['Session_length'] = 'Duraci&oacute;n de la Sesi&oacute;n [ segundos ]';

// Visual Confirmation
$lang['Visual_confirm'] = 'Activar Confirmaci&oacute;n Visual';
$lang['Visual_confirm_explain'] = 'Requiere que los usuarios ingresen un c&oacute;digo definido por una imagen cuando se registran.';

// Autologin Keys - added 2.0.18
$lang['Allow_autologin'] = 'Permite conexi&oacute;n autom&aacute;tica';
$lang['Allow_autologin_explain'] = 'Determina que a los usuarios se les permitir&aacute; elegir si quieren ser conectados autom&aacute;ticamente en el foro.';
$lang['Autologin_time'] = 'Expirado de la clave de conexi&oacute;n autom&aacute;tica';
$lang['Autologin_time_explain'] = 'Cu&aacute;nto tiempo dura, en d&iacute;as, la clave de conexi&oacute;n si el usuario no visita el foro. Poner cero para desactivar el expirado.';

// Search Flood Control - added 2.0.20
$lang['Search_Flood_Interval'] = 'Intervalo de Flood en la busqueda';
$lang['Search_Flood_Interval_explain'] = 'Numero de segundos que debe esperar un usuario entre las peticiones de busqueda';

//
// Forum Management
//
$lang['Forum_admin'] = 'Administraci&oacute;n de Foros';
$lang['Forum_admin_explain'] = 'Desde este panel puede agregar, borrar, modificar, reordenar y resincronizar categor&iacute;as y foros';
$lang['Edit_forum'] = 'Editar foro';
$lang['Create_forum'] = 'Crear nuevo foro';
$lang['Create_category'] = 'Crear nueva categor&iacute;a';
$lang['Remove'] = 'Quitar';
$lang['Action'] = 'Acci&oacute;n';
$lang['Update_order'] = 'Actualizar Orden';
$lang['Config_updated'] = 'Configuraci&oacute;n de Foro Actualizada con &Eacute;xito';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Borrar';
$lang['Move_up'] = 'Subir';
$lang['Move_down'] = 'Bajar';
$lang['Resync'] = 'Sincronizar';
$lang['No_mode'] = 'No se especific&oacute; ning&uacute;n modo';
$lang['Forum_edit_delete_explain'] = 'El siguiente formulario le permitir&aacute; personalizar todas las opciones generales de su foro. Para configurar Usuarios y Foros use los enlaces correspondientes en el panel de la izquierda';

$lang['Move_contents'] = 'Mover todo el contenido';
$lang['Forum_delete'] = 'Borrar Foro';
$lang['Forum_delete_explain'] = 'El siguiente formulario le permitir&aacute; borrar un foro (o categor&iacute;a) y decidir d&oacute;nde quiere ubicar todos los temas (o foros) que conten&iacute;a.';

$lang['Status_locked'] = 'Bloqueado';
$lang['Status_unlocked'] = 'Desbloqueado';
$lang['Forum_settings'] = 'Configuraci&oacute;n General de Foro';
$lang['Forum_name'] = 'Nombre del Foro';
$lang['Forum_desc'] = 'Descripci&oacute;n';
$lang['Forum_status'] = 'Estado del Foro';
$lang['Forum_pruning'] = 'Auto-vencimiento (pruning)';

$lang['prune_freq'] = 'Verificar antigüedad de temas cada';
$lang['prune_days'] = 'Eliminar temas que no han recibido respuestas por espacio de';
$lang['Set_prune_data'] = 'Ha activado auto-vencimiento (pruning) para este foro pero no ha indicado la cantidad de d&iacute;as para el vencimiento. Por favor, regrese e ind&iacute;quelo.';

$lang['Move_and_Delete'] = 'Mover y Borrar';

$lang['Delete_all_posts'] = 'Borrar todos los ingresos';
$lang['Nowhere_to_move'] = 'No ha especificado un destino';

$lang['Edit_Category'] = 'Modificar Categor&iacute;a';
$lang['Edit_Category_explain'] = 'Use este formulario para modificar el nombre de una categor&iacute;a.';

$lang['Forums_updated'] = 'Informaci&oacute;n de Foro y Categor&iacute;a actualizada con &eacute;xito';

$lang['Must_delete_forums'] = 'Necesita borrar todos los foros para poder borrar esta categor&iacute;a';

$lang['Click_return_forumadmin'] = 'Pulse %sAqu&iacute;%s para volver a la Administraci&oacute;n de Foros';


//
// Smiley Management
//
$lang['smiley_title'] = 'Utilidad de Modificaci&oacute;n de Emoticonos (Smileys)';
$lang['smile_desc'] = 'Desde esta p&aacute;gina usted puede agregar, borrar y modificar los emoticonos (o smileys) que los usuarios pueden usar en sus mensajes, tanto p&uacute;blicos como privados.';

$lang['smiley_config'] = 'Configuraci&oacute;n de Emoticono';
$lang['smiley_code'] = 'C&oacute;digo de Emoticono';
$lang['smiley_url'] = 'Archivo de Imagen de Emoticono';
$lang['smiley_emot'] = 'Emoci&oacute;n de Emoticono';
$lang['smile_add'] = 'Agregar nuevo Emoticono';
$lang['Smile'] = 'Emoticono';
$lang['Emotion'] = 'Emoci&oacute;n';

$lang['Select_pak'] = 'Seleccionar un archivo Pack (.pak)';
$lang['replace_existing'] = 'Reemplazar Emoticonos Existentes';
$lang['keep_existing'] = 'Mantener Emoticonos Existentes';
$lang['smiley_import_inst'] = 'Debe descomprimir el paquete de Emoticonos y subir todos los archivos en el directorio de Smileys para as&iacute; lograr su correcta instalaci&oacute;n. Luego seleccione la informaci&oacute;n correcta desde este formulario para poder importar los Emoticonos';
$lang['smiley_import'] = 'Importar un Paquete de Emoticonos';
$lang['choose_smile_pak'] = 'Seleccione un Paquete de Emoticonos .pak';
$lang['import'] = 'Importar Emoticonos (Smileys)';
$lang['smile_conflicts'] = 'Qu&eacute; deber&iacute;a hacerse en caso de conflictos';
$lang['del_existing_smileys'] = 'Borrar los Emoticonos existentes antes de importar';
$lang['import_smile_pack'] = 'Importar Paquete de Emoticonos';
$lang['export_smile_pack'] = 'Crear Paquete de Emoticonos';
$lang['export_smiles'] = 'Para crear un Paquete de Emoticonos a partir de sus actuales Emoticonos instalados, pulse %sAqu&iacute;%s para descargar el archivo smiles.pak. Renombre este archivo apropiadamente pero aseg&uacute;rese de que se mantenga la extensi&oacute;n .pak. Luego cree un archivo .zip conteniendo todas las im&aacute;genes de Emoticonos y agr&eacute;guele este archivo de configuraci&oacute;n .pak.';

$lang['smiley_add_success'] = 'El Emoticono fue agregado con &eacute;xito';
$lang['smiley_edit_success'] = 'El Emoticono fue actualizado con &eacute;xito';
$lang['smiley_import_success'] = 'El Paquete de Emoticonos fue importado con &eacute;xito!';
$lang['smiley_del_success'] = 'El Emoticono fue eliminado con &eacute;xito';
$lang['Click_return_smileadmin'] = 'Pulse %sAqu&iacute;%s para volver a la Administraci&oacute;n de Emoticonos';
$lang['Confirm_delete_smiley'] = '&iquest;Esta usted seguro de querer eliminar este Emoticono?';

//
// User Management
//
$lang['User_admin'] = 'Administraci&oacute;n de Usuarios';
$lang['User_admin_explain'] = 'Desde aqu&iacute; puede cambiar la informaci&oacute;n de sus usuarios y ciertas opciones. Para modificar los permisos de usuario, por favor, use el sistema de permisos de usuarios y grupos.';

$lang['Look_up_user'] = 'Observar usuario';

$lang['Admin_user_fail'] = 'No se pudo actualizar el perfil del usuario.';
$lang['Admin_user_updated'] = 'El perfil del usuario fue actualizado con &eacute;xito.';
$lang['Click_return_useradmin'] = 'Pulse %sAqu&iacute;%s para volver al Panel de Administraci&oacute;n de Usuarios';

$lang['User_delete'] = 'Borrar este usuario';
$lang['User_delete_explain'] = 'Pulse aqu&iacute; para borrar este usuario. Tenga en cuenta que luego no podr&aacute; restaurarlo.';
$lang['User_deleted'] = 'El usuario fue borrado con &eacute;xito.';

$lang['User_status'] = 'Usuario activo';
$lang['User_allowpm'] = 'Puede enviar mensajes privados';
$lang['User_allowavatar'] = 'Puede mostrar su avatar';

$lang['Admin_avatar_explain'] = 'Desde aqu&iacute; puede ver y borrar el avatar actual del usuario.';

$lang['User_special'] = 'Campos s&oacute;lo para administraci&oacute;n';
$lang['User_special_explain'] = 'Estos campos no pueden ser modificados por los usuarios. Desde aqu&iacute; puede configurar el estado y otras opciones que est&aacute;n ocultas a los usuarios.';


//
// Group Management
//
$lang['Group_administration'] = 'Administraci&oacute;n de Grupos';
$lang['Group_admin_explain'] = 'Desde este panel usted puede administrar todos sus Grupos de usuarios. Puede borrar, crear y modificar Grupos. Puede asignar moderadores, abrir o cerrar grupos y cambiar sus nombres y descripciones';
$lang['Error_updating_groups'] = 'Ha habido un error mientras se actualizaban los grupos';
$lang['Updated_group'] = 'El Grupo fue actualizado con &eacute;xito';
$lang['Added_new_group'] = 'El nuevo Grupo fue creado con &eacute;xito';
$lang['Deleted_group'] = 'El Grupo fue borrado con &eacute;xito';
$lang['New_group'] = 'Crear nuevo Grupo';
$lang['Edit_group'] = 'Editar Grupo';
$lang['group_name'] = 'Nombre del Grupo';
$lang['group_description'] = 'Descripci&oacute;n del Grupo';
$lang['group_moderator'] = 'Moderador del Grupo';
$lang['group_status'] = 'Estado del Grupo';
$lang['group_open'] = 'Grupo abierto';
$lang['group_closed'] = 'Grupo cerrado';
$lang['group_hidden'] = 'Grupo oculto';
$lang['group_delete'] = 'Borrar Grupo';
$lang['group_delete_check'] = 'Borrar este Grupo';
$lang['submit_group_changes'] = 'Enviar cambios';
$lang['reset_group_changes'] = 'Cancelar cambios';
$lang['No_group_name'] = 'Debe especificar un Nombre para este Grupo';
$lang['No_group_moderator'] = 'Debe especificar un Moderador para este Grupo';
$lang['No_group_mode'] = 'Debe especificar un modo para este Grupo, Abierto o Cerrado';
$lang['No_group_action'] = 'No se especific&oacute; una acci&oacute;n';
$lang['delete_group_moderator'] = '&iquest;Borrar el antiguo moderador del Grupo?';
$lang['delete_moderator_explain'] = 'Si est&aacute; cambiando el moderador del Grupo, active esta casilla para borrar el antiguo moderador del Grupo. Si no, no la active, y el usuario se convertir&aacute; en un usuario normal del Grupo.';
$lang['Click_return_groupsadmin'] = 'Pulse %sAqu&iacute;%s para volver a Administraci&oacute;n de Grupos.';
$lang['Select_group'] = 'Seleccione un Grupo';
$lang['Look_up_group'] = 'Observar Grupo';


//
// Prune Administration
//
$lang['Forum_Prune'] = 'Vencimiento (Prune) de Foros';
$lang['Forum_Prune_explain'] = 'Este proceso eliminar&aacute; los temas que no tengan mensajes nuevos en la cantidad de d&iacute;as especificados. Si no ingresa un n&uacute;mero entonces se borrar&aacute;n TODOS los temas. No se remover&aacute;n temas donde haya encuestas activas ni anuncios. Necesitar&aacute; remover estos temas de manera manual.';
$lang['Do_Prune'] = 'Ejecutar vencimientos';
$lang['All_Forums'] = 'Todos los foros';
$lang['Prune_topics_not_posted'] = 'Borrar temas sin respuestas en esta cantidad de d&iacute;as';
$lang['Topics_pruned'] = 'Temas borrados';
$lang['Posts_pruned'] = 'Mensajes borrados';
$lang['Prune_success'] = 'El proceso de vencimiento (Pruning) de foros fue &eacute;xitoso';


//
// Word censor
//
$lang['Words_title'] = 'Control de Palabras Censuradas';
$lang['Words_explain'] = 'Desde este panel puede agregar, modificar o remover palabras que ser&aacute;n autom&aacute;ticamente censuradas en sus foros. Adem&aacute;s, los usuarios no podr&aacute;n registrar nombres que contengan estas palabras. Los comodines (*) son aceptados en el campo de palabras. Por ejemplo, *pito* coincidir&aacute; con sapitos, pito* coincidir&aacute; con pitos, *pito coincidir&aacute; con compito.';
$lang['Word'] = 'Palabra';
$lang['Edit_word_censor'] = 'Editar el Censor de Palabras';
$lang['Replacement'] = 'Reemplazar';
$lang['Add_new_word'] = 'Agregar nueva palabra';
$lang['Update_word'] = 'Actualizar censor de palabras';

$lang['Must_enter_word'] = 'Debe ingresar una palabra y otra palabra para reemplazarla';
$lang['No_word_selected'] = 'No seleccion&oacute; ninguna palabra para modificar';

$lang['Word_updated'] = 'La censura de palabra fue actualizada con &eacute;xito';
$lang['Word_added'] = 'La censura de palabra fue agregada con &eacute;xito';
$lang['Word_removed'] = 'La censura de palabra fue eliminada con &eacute;xito';

$lang['Click_return_wordadmin'] = 'Pulse %sAqu&iacute;%s para volver a Administraci&oacute;n del Censor de Palabras';
//
// Acronyms
//
$lang['Acronyms_title'] = 'Administrar Acr&oacute;nimos';
$lang['Acronyms_explain'] = 'Desde este panel de control usted puede a&ntilde;adir, editar y borrar acr&oacute;nimos que ser&aacute;n a&ntilde;adidos autom&aacute;ticamente en los mensajes de su foro.';
$lang['Acronym'] = 'Acr&oacute;nimo';
$lang['Acronyms'] = 'Acr&oacute;nimos';
$lang['Edit_acronym'] = 'Editar Acr&oacute;nimo';
$lang['Description'] = 'Descripci&oacute;n';
$lang['Add_new_acronym'] = 'A&ntilde;adir nuevo acr&oacute;nimo';
$lang['Update_acronym'] = 'Actualizar acr&oacute;nimo';

$lang['Must_enter_acronym'] = 'Debe introducir el acr&oacute;nimo y su descripci&oacute;n';
$lang['No_acronym_selected'] = 'No ha seleccionado ning&uacute;n acr&oacute;nimo para editar';

$lang['Acronym_updated'] = 'El acr&oacute;nimo seleccionado ha sido actualizado satisfactoriamente';
$lang['Acronym_added'] = 'El acr&oacute;nimo ha sido a&ntilde;adido satisfactoriamente';
$lang['Acronym_removed'] = 'El acr&oacute;nimo seleccionado ha sido borrado satisfactoriamente';

$lang['Click_return_acronymadmin'] = 'Pulse %sAqu&iacute;%s para volver a la Administraci&oacute;n de Acr&oacute;nimos';

$lang['Confirm_delete_word'] = '&iquest;Esta usted seguro de querer eliminar esta palabra censurada?';

//
// Mass Email
//
$lang['Mass_email_explain'] = 'Aqu&iacute; puede enviar un correo a todos sus usuarios o a usuarios de alg&uacute;n grupo espec&iacute;fico. Para esto, se enviar&aacute; un correo a la direcci&oacute;n de administraci&oacute;n suministrada, con una Copia Oculta a todos los destinatarios. Si est&aacute; enviando correo a una gran cantidad de personas por favor sea paciente despu&eacute;s de enviarlo y no detenga la p&aacute;gina a mitad de proceso. Es normal que un env&iacute;o masivo de correo tome tiempo y ser&aacute; notificado cuando haya terminado';
$lang['Compose'] = 'Escribir'; 

$lang['Recipients'] = 'Destinatarios'; 
$lang['All_users'] = 'Todos los usuarios';

$lang['Email_successfull'] = 'Su mensaje ha sido enviado';
$lang['Click_return_massemail'] = 'Pulse %sAqu&iacute;%s para volver al Panel de Correo Masivo';


//
// Ranks admin
//
$lang['Ranks_title'] = 'Administraci&oacute;n de Rangos';
$lang['Ranks_explain'] = 'Usando este formulario puede agregar, borrar, ver o modificar rangos. Tambi&eacute;n puede crear rangos especiales que pueden ser asignados a usuarios particulares usando la administraci&oacute;n de usuarios';

$lang['Add_new_rank'] = 'Agregar nuevo rango';

$lang['Rank_title'] = 'T&iacute;tulo del rango';
$lang['Rank_special'] = 'Marcar como rango especial';
$lang['Rank_minimum'] = 'Cantidad m&iacute;nima de mensajes';
$lang['Rank_maximum'] = 'Cantidad m&aacute;xima de mensajes';
$lang['Rank_image'] = 'Imagen del rango (tenga en cuenta la ruta raiz del foro)';
$lang['Rank_image_explain'] = 'Use esto para definir una peque&ntilde;a imagen asociada al rango';

$lang['Must_select_rank'] = 'Debe elegir un rango';
$lang['No_assigned_rank'] = 'No se asignaron rangos especiales';

$lang['Rank_updated'] = 'El rango fue actualizado con &eacute;xito';
$lang['Rank_added'] = 'El rango fue agregado con &eacute;xito';
$lang['Rank_removed'] = 'El rango fue borrado con &eacute;xito';
$lang['No_update_ranks'] = 'El rango fue borrado con &eacute;xito. Sin embargo, las cuentas de usuario con este rango no han sido actualizadas. Tendr&aacute; que hacerlo de manera manual en estas cuentas';

$lang['Click_return_rankadmin'] = 'Pulse %sAqu&iacute;%s para volver al Panel de Administraci&oacute;n de Rangos';
$lang['Confirm_delete_rank'] = '&iquest;Esta usted seguro de querer borrar este rango?';

//
// Disallow Username Admin
//
$lang['Disallow_control'] = 'Control de Nombres Prohibidos';
$lang['Disallow_explain'] = 'Desde aqu&iacute; puede especificar nombres de usuarios que no se permitir&aacute;n. Se pueden usar comodines (*). No podr&aacute; agregar nombres que YA est&eacute;n registrados. Debe primero borrar esos usuarios para deshabilitarlos/prohibirlos.';

$lang['Delete_disallow'] = 'Borrar';
$lang['Delete_disallow_title'] = 'Borrar nombre prohibido';
$lang['Delete_disallow_explain'] = 'Puede borrar un nombre prohibido seleccion&aacute;ndolo de esta lista y pulsando en Enviar';

$lang['Add_disallow'] = 'Agregar';
$lang['Add_disallow_title'] = 'Agregar un nombre prohibido';
$lang['Add_disallow_explain'] = 'Puede deshabilitar un nombre de usuario usando caracteres comod&iacute;n (*) para que coincidan con cualquier ocurrencia';

$lang['No_disallowed'] = 'No hay nombres prohibidos';

$lang['Disallowed_deleted'] = 'El nombre prohibido se ha borrado con &eacute;xito';
$lang['Disallow_successful'] = 'El nombre prohibido se ha agregado con &eacute;xito';
$lang['Disallowed_already'] = 'El nombre que usted ingres&oacute; no pudo ser deshabilitado. O bien ya existe en la lista, o existe en la censura de palabras, o existe un usuario con ese nombre.';

$lang['Click_return_disallowadmin'] = 'Pulse %sAqu&iacute;%s para volver al Panel de Administraci&oacute;n de Nombres de Usuario';


//
// Styles Admin
//
$lang['Styles_admin'] = 'Administraci&oacute;n de Estilos';
$lang['Styles_explain'] = 'Mediante este panel puede agregar, quitar y administrar estilos (plantillas y temas) disponibles para sus usuarios';
$lang['Styles_addnew_explain'] = 'La lista siguiente contiene todos los estilos disponibles para su foro. Los items en esta lista no han sido todav&iacute;a instalados en la base de datos de phpBB. Para instalar un estilo, simplemente pulse en el enlace "instalar" al lado de alguno de los estilos.';

$lang['Select_template'] = 'Seleccione un estilo';

$lang['Style'] = 'Estilo';
$lang['Template'] = 'Plantilla (Template)';
$lang['Install'] = 'Instalar';
$lang['Download'] = 'Descargar';

$lang['Edit_theme'] = 'Modificar Estilo';
$lang['Edit_theme_explain'] = 'En el siguiente formulario puede modificar la configuraci&oacute;n del estilo seleccionado';

$lang['Create_theme'] = 'Crear Estilo';
$lang['Create_theme_explain'] = 'Use el siguiente formulario para crear un estilo nuevo en base a una plantilla. Cuando ingresa colores (para los cuales debe usar el valor hexadecimal) no debe incluir el # inicial, ej. CCCCCC es v&aacute;lido, #CCCCCC no lo es';

$lang['Export_themes'] = 'Exportar Estilos';
$lang['Export_explain'] = 'En este panel podr&aacute; exportar un estilo para una plantilla en particular. Seleccione la plantilla de la lista y el programa (script) crear&aacute; el archivo de configuraci&oacute;n y tratar&aacute; de grabarlo en la carpeta correspondiente. Si no puede grabar el archivo le dar&aacute; la opci&oacute;n de descargarlo. Para que el programa pueda grabar el archivo debe darle permisos de escritura a la carpeta de plantillas (template) en el ftp de tu foro. Para m&aacute;s informaci&oacute;n vea la Gu&iacute;a de phpBB2.';

$lang['Theme_installed'] = 'El estilo seleccionado fue instalado con &eacute;xito';
$lang['Style_removed'] = 'El estilo seleccionado ha sido borrado de la base de datos. Para eliminarlo completamente debe borrar la carpeta correspondiente al estilo, en el ftp de su foro.';
$lang['Theme_info_saved'] = 'La informaci&oacute;n de estilo para la plantilla seleccionada ha sido guardada. Deber&iacute;a volver los permisos sobre la carpeta del estilo y el theme_info.cfg a S&oacute;lo Lectura';
$lang['Theme_updated'] = 'El estilo seleccionado ha sido actualizado. Ahora deber&iacute;a exportarlo';
$lang['Theme_created'] = 'Estilo creado. Ahora deber&iacute;a exportarlo al archivo de configuraci&oacute;n para poder usarlo en otros sitios';

$lang['Confirm_delete_style'] = '&iquest;Est&aacute; seguro de que quiere borrar este estilo?';

$lang['Download_theme_cfg'] = 'El exportador no pudo escribir la informaci&oacute;n de configuraci&oacute;n del estilo. Pulse en el bot&oacute;n de abajo para descargar el archivo con su navegador. Una vez descargado podr&aacute; transferirlo a la carpeta (templates) que contiene la plantilla. Luego podr&aacute; hacer un paquete de distribuci&oacute;n o usarlo en otros sitios';
$lang['No_themes'] = 'La plantilla seleccionada no tiene estilos adjuntos. Para crear un nuevo estilo pulse en Crear Estilo en el panel izquierdo';
$lang['No_template_dir'] = 'No se puede abrir la carpeta de la plantilla. Puede que el servidor no tenga acceso al no tener habilitados los permisos de Escritura o que no exista';
$lang['Cannot_remove_style'] = 'No puede eliminar el estilo seleccionado ya que es el por defecto del foro. Por favor, cambie el estilo por defecto del foro y vuelva a intentarlo.';
$lang['Style_exists'] = 'El nombre de estilo seleccionado ya existe, por favor, vuelva atr&aacute;s y elija un nombre diferente.';

$lang['Click_return_styleadmin'] = 'Pulse %sAqu&iacute;%s para volver al Panel de Administraci&oacute;n de Estilos';

$lang['Theme_settings'] = 'Configuraci&oacute;n de Estilos';
$lang['Theme_element'] = 'Elemento de Estilos';
$lang['Simple_name'] = 'Nombre simple';
$lang['Value'] = 'Valor';
$lang['Save_Settings'] = 'Guardar configuraci&oacute;n';

$lang['Stylesheet'] = 'CSS Stylesheet';
$lang['Stylesheet_explain'] = 'Nombre del archivo CSS a usar para esta plantilla.';
$lang['Background_image'] = 'Imagen de Fondo';
$lang['Background_color'] = 'Color de Fondo';
$lang['Theme_name'] = 'Nombre del Estilo';
$lang['Link_color'] = 'Color de Enlace';
$lang['Text_color'] = 'Color de Texto';
$lang['VLink_color'] = 'Color de Enlace visitado';
$lang['ALink_color'] = 'Color de Enlace activo';
$lang['HLink_color'] = 'Color de Enlace con el puntero del rat&oacute;n encima';
$lang['Tr_color1'] = 'Color de Fila de Tabla 1';
$lang['Tr_color2'] = 'Color de Fila de Tabla 2';
$lang['Tr_color3'] = 'Color de Fila de Tabla 3';
$lang['Tr_class1'] = 'Classe de Fila de Tabla 1';
$lang['Tr_class2'] = 'Classe de Fila de Tabla 2';
$lang['Tr_class3'] = 'Classe de Fila de Tabla 3';
$lang['Th_color1'] = 'Color de encabezado de Tabla 1';
$lang['Th_color2'] = 'Color de encabezado de Tabla 2';
$lang['Th_color3'] = 'Color de encabezado de Tabla 3';
$lang['Th_class1'] = 'Clase de encabezado de Tabla 1';
$lang['Th_class2'] = 'Clase de encabezado de Tabla 2';
$lang['Th_class3'] = 'Clase de encabezado de Tabla 3';
$lang['Td_color1'] = 'Color de Celda de Tabla 1';
$lang['Td_color2'] = 'Color de Celda de Tabla 2';
$lang['Td_color3'] = 'Color de Celda de Tabla 3';
$lang['Td_class1'] = 'Clase de Celda de Tabla 1';
$lang['Td_class2'] = 'Clase de Celda de Tabla 2';
$lang['Td_class3'] = 'Clase de Celda de Tabla3';
$lang['fontface1'] = 'Fuente 1';
$lang['fontface2'] = 'Fuente 2';
$lang['fontface3'] = 'Fuente 3';
$lang['fontsize1'] = 'Tama&ntilde;o de Fuente 1';
$lang['fontsize2'] = 'Tama&ntilde;o de Fuente 2';
$lang['fontsize3'] = 'Tama&ntilde;o de Fuente 3';
$lang['fontcolor1'] = 'Color de Fuente 1';
$lang['fontcolor2'] = 'Color de Fuente 2';
$lang['fontcolor3'] = 'Color de Fuente 3';
$lang['span_class1'] = 'Espacio Clase 1';
$lang['span_class2'] = 'Espacio Clase 2';
$lang['span_class3'] = 'Espacio Clase 3';
$lang['img_poll_size'] = 'Tama&ntilde;o de la imagen de la Encuesta [px]';
$lang['img_pm_size'] = 'Tama&ntilde;o de estado de Mensaje Privado [px]';


//
// Install Process
//
$lang['Welcome_install'] = 'Bienvenido a la instalaci&oacute;n de los foros phpBB 2';
$lang['Initial_config'] = 'Configuraci&oacute;n B&aacute;sica';
$lang['DB_config'] = 'Configuraci&oacute;n de la Base de Datos';
$lang['Admin_config'] = 'Configuraci&oacute;n del Administrador';
$lang['continue_upgrade'] = 'Una vez que haya descargado el archivo de configuraci&oacute;n a su disco duro puede pulsar en "Continuar Actualizaci&oacute;n" para seguir el proceso de actualizaci&oacute;n. Por favor, espere que se suba el archivo de configuraci&oacute;n hasta que el proceso de actualizaci&oacute;n haya terminado.';
$lang['upgrade_submit'] = 'Continuar Actualizaci&oacute;n';
$lang['Install2'] = 'Si usted puede leer esto parece que se esta instalando con &eacute;xito su nuevo Foro con <b>Phpbb2 Reborned</b>. Una versi&oacute;n de <b>Phpbb2</b> editada por <b>Phosphorus Moscu</b>';
$lang['Install1'] = 'A futuro este sistema de foros sera una muy buena eleci&oacute;n para usted ya que su simplicidad hace no nesesario ser tecnico de cohetes para aprobecharlo.';
$lang['Galeria2'] = 'Este es el indice del panel de administraci&oacute;n cuando se conecta.	';
$lang['Galeria1'] = 'Los perfiles tomarian plantillas parecidas a estas, obviamente </br> se podra personalizar, a&ntilde;adiendo campos  o estilos.';
$lang[''] = '';
$lang[''] = '';

$lang['Installer_Error'] = 'Ha ocurrido un error durante la instalaci&oacute;n';
$lang['Previous_Install'] = 'Se ha detectado una instalaci&oacute;n previa';
$lang['Install_db_error'] = 'Ha ocurrido un error tratando de actualizar la Base de Datos';

$lang['Re_install'] = 'Su instalaci&oacute;n previa est&aacute; todav&iacute;a activa.<br /><br />Si quiere reinstalar phpBB 2 deber&iacute;a pulsar en el bot&oacute;n "S&iacute;". Por favor, sepa que haci&eacute;ndolo se perder&aacute; toda la informaci&oacute;n y &iexcl;no se har&aacute; copia de seguridad (backup)! El nombre y clave de Administrador que ha usado para conectarse al foro ser&aacute;n creados de nuevo despu&eacute;s de reinstalar y no se conservar&aacute;n otras configuraciones.<br /><br />&iexcl;Piense cuidadosamente antes de decir que "S&iacute;"!';

$lang['Inst_Step_0'] = 'Gracias por elegir phpBB 2. Para completar esta instalaci&oacute;n tenga a bien completar la informaci&oacute;n requerida aqu&iacute; debajo. Note que la base de datos donde desea instalar debe existir. Si est&aacute; instalando en una base de datos que usa ODBC, ej. MS Access deber&iacute;a primero crear un DSN para ella antes de continuar.';

$lang['Start_Install'] = 'Iniciar Instalaci&oacute;n';
$lang['Finish_Install'] = 'Terminar Instalaci&oacute;n';

$lang['Default_lang'] = 'Lenguaje del Foro por defecto';
$lang['DB_Host'] = 'Nombre de Servidor de Base de Datos / DSN';
$lang['DB_Name'] = 'Nombre de la Base de Datos';
$lang['DB_Username'] = 'Usuario de la Base de Datos';
$lang['DB_Password'] = 'Contrase&ntilde;a de la Base de Datos';
$lang['Database'] = 'Su Base de Datos';
$lang['Install_lang'] = 'Elija lenguaje de instalaci&oacute;n';
$lang['dbms'] = 'Tipo de Base de Datos';
$lang['Table_Prefix'] = 'Prefijo para las tablas de la Base de Datos';
$lang['Admin_Username'] = 'Nombre de usuario del Administrador';
$lang['Admin_Password'] = 'Clave del Administrador';
$lang['Admin_Password_confirm'] = 'Clave del Administrador [ Confirmar ]';

$lang['Inst_Step_2'] = 'Su usuario Administrador ha sido creado. En este punto la instalaci&oacute;n b&aacute;sica est&aacute; completa. Ahora ser&aacute; llevado a una pantalla donde puede administrar su nueva instalaci&oacute;n. Aseg&uacute;rese de verificar los datos de Configuraci&oacute;n General y hacer los cambios necesarios. Gracias por elegir phpBB 2.';

$lang['Unwriteable_config'] = 'Su configuraci&oacute;n no se puede salvar en este momento (seguramente porque ha mantenido los derechos del archivo config.php como "S&oacute;lo Lectura"). Una copia de la configuraci&oacute;n ser&aacute; descargada a su disco duro cuando pulse en el enlace de abajo. Deber&iacute;a subir este archivo al mismo directorio raiz del phpBB 2. Una vez hecho esto deber&iacute;a conectarse usando su nombre y contrase&ntilde;a de Administrador y acceder al Panel de Configuraci&oacute;n (un enlace aparecer&aacute; a pie de p&aacute;gina una vez que se conecte) para verificar la Configuraci&oacute;n General. Gracias por elegir phpBB 2.';
$lang['Download_config'] = 'Descargar Configuraci&oacute;n';

$lang['ftp_choose'] = 'Elija m&eacute;todo de Descarga';
$lang['ftp_option'] = '<br />Ya que las extensiones de FTP est&aacute;n habilitadas en esta versi&oacute;n de PHP puede tener la opci&oacute;n de intentar enviar autom&aacute;ticamente por FTP el archivo de configuraci&oacute;n al lugar que corresponda.';
$lang['ftp_instructs'] = 'Ha elegido enviar por FTP el archivo que contiene el phpBB 2 a la cuenta especificada autom&aacute;ticamente. Ingrese los datos necesarios para facilitar este proceso. Note que la direcci&oacute;n FTP debe ser exactamente la direcci&oacute;n FTP donde va a instalarse el phpBB 2 como si estuviera usando cualquier cliente de FTP.';
$lang['ftp_info'] = 'Ingrese los datos de su FTP';
$lang['Attempt_ftp'] = 'Intentar subir el archivo de configuraci&oacute;n por FTP';
$lang['Send_file'] = 'Env&iacute;enme el archivo a mi y yo lo enviar&eacute; manualmente';
$lang['ftp_path'] = 'Ruta FTP a phpBB 2';
$lang['ftp_username'] = 'Nombre de Usuario de su FTP';
$lang['ftp_password'] = 'Su Contrase&ntilde;a de FTP';
$lang['Transfer_config'] = 'Iniciar Transferencia';
$lang['NoFTP_config'] = 'El intento de subir el archivo de configuraci&oacute;n via FTP fall&oacute;. Por favor, descargue el archivo de configuraci&oacute;n y s&uacute;balo manualmente a donde corresponda.';

$lang['Install'] = 'Instalar';
$lang['Upgrade'] = 'Actualizar';


$lang['Install_Method'] = 'Elija su m&eacute;todo de instalaci&oacute;n';

$lang['Install_No_Ext'] = 'La configuraci&oacute;n de PHP de su servidor no soporta el tipo de base de datos que usted eligi&oacute;';

$lang['Install_No_PCRE'] = '&iexcl;phpBB2 Requiere el m&oacute;dulo de Expresiones Regulares Compatible con Perl para PHP que su configuraci&oacute;n de PHP no parece soportar!';

//
// Version Check
//
$lang['Version_up_to_date'] = 'Su versi&oacute;n de phpBB es la m&aacute;s actual. No hay actualizaciones de phpBB disponibles para su versi&oacute;n.';
$lang['Version_not_up_to_date'] = 'Su versi&oacute;n de phpBB parece <b>no</b> ser la m&aacute;s actual. Hay actualizaciones disponibles para su versi&oacute;n de phpBB, visite <a href="http://www.phpbb.com/downloads.php" target="_new">http://www.phpbb.com/downloads.php</a> para obtener la &uacute;ltima versi&oacute;n.';
$lang['Latest_version_info'] = 'La &uacute;ltima versi&oacute;n disponible es la <b>phpBB %s</b>.';
$lang['Current_version_info'] = 'usted est&aacute; utilizando <b>phpBB %s</b>.';
$lang['Connect_socket_error'] = 'No se puede abrir una conexi&oacute;n al servidor de phpBB. El mensaje de error remitido es:<br />%s';
$lang['Socket_functions_disabled'] = 'No se pueden usar funciones de socket.';
$lang['Mailing_list_subscribe_reminder'] = 'Para ser informado de las &uacute;ltimas actualizaciones de phpBB, &iquest;porqu&eacute; no se dirige a <a href="http://www.phpbb.com/support/" target="_new">esta direcci&oacute;n</a> para suscribirse a nuestra lista de correo?.';
$lang['Version_information'] = '<a href="#" onclick="toggle_visibility( \'ver\' );" title="Click for more Information">Informaci&oacute;n de Versi&oacute;n</a>';
$lang['Version_of_PHP'] = 'Versi&oacute;n PHP';
$lang['Version_of_MySQL'] = 'Versi&oacute;n MySQL';

//
// Login attempts configuration
//
$lang['Max_login_attempts'] = 'Intentos de identificaci&oacute;n permitidos';
$lang['Max_login_attempts_explain'] = 'El numero de intentos de identificaci&oacute;n permitido en su Foro.';
$lang['Login_reset_time'] = 'Tiempo de identificaci&oacute;n cerrada';
$lang['Login_reset_time_explain'] = 'Tiempo en minutos que el usuario tiene que esperar hasta que se le permita de nuevo la identificaci&oacute;n despu&eacute;s de exceder el n&uacute;mero de intentos permitidos de conexi&oacute;n o identificaci&oacute;n.';

//
// &iexcl;Eso es todo, amigos!
// -------------------------------------------------


?>
