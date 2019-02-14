<?php

function chmodlist()
{
// -------- FILES TO PROCESS ------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------------
// The original script has been modified here
// Arrays are used to enable the use of more than one function on them
// The CHMOD mode has been changed to 3 numbers, because that's the way it works for the FTP method
// For the normal method '0' will be added by the chmod_routine function
// --------------------------------------------------------------------------------------------------------------------------------
// --------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------
// Chmod Settings array for pre-install and installed  ----------------------------------------------------------------------------
global $relpath, $preinstall_list, $afterinstall_list;
//---------------------------------------------------------------------------------------------------------------------------------
$file_list = array(
  "../includes/cache_tpls" => 777 , 
  "../includes/def_auth.php" => 666 ,
  "../includes/def_birthday.php" => 666 ,
  "../includes/def_qbar.php" => 666 ,
  "../includes/def_ranks.php" => 666 ,
  "../includes/def_smilies.php" => 666 ,
  "../includes/def_themes.php" => 666 ,
  "../includes/def_tree.php" => 666 ,
  "../includes/def_words.php" => 666 ,
  "../language/lang_english/lang_extend.php" => 666 ,
  "../language/lang_english/lang_extend_categories_hierarchy.php" => 666 ,
  "../language/lang_english/lang_extend_lang_extend.php" => 666 ,
  "../language/lang_english/lang_extend_mods_settings.php" => 666 ,
  "../language/lang_english/lang_extend_qbar.php" => 666 ,
  "../language/lang_spanish/lang_extend.php" => 666 ,
  "../language/lang_spanish/lang_extend_categories_hierarchy.php" => 666 ,
  "../language/lang_spanish/lang_extend_lang_extend.php" => 666 ,
  "../language/lang_spanish/lang_extend_mods_settings.php" => 666 ,
  "../language/lang_spanish/lang_extend_qbar.php" => 666 ,

  "../var_cache" => 777
);

//---------------------------------------------------------------------------------------------------------------------------------
// Chmod Settings array for Pre-install package ONLY
$preinstall_only_list = array(
  "../config.php" => '666'
);

//---------------------------------------------------------------------------------------------------------------------------------
// Chmod Settings array for Completely Installed package ONLY
$installed_only_list = array(
  "../config.php" => '644'
);



$preinstall_list = $file_list + $preinstall_only_list;
$afterinstall_list = $file_list + $installed_only_list;


}
?>