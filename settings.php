<?php
 
/**
 * Settings for the buttons theme
 */
 
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
 
// Logo file setting
$name = 'theme_buttons/logo';
$title = get_string('logo','theme_buttons');
$description = get_string('logodesc', 'theme_buttons');
$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
$setting->set_updatedcallback('theme_reset_all_caches');
$settings->add($setting);
 
// Block region width
$name = 'theme_buttons/regionwidth';
$title = get_string('regionwidth','theme_buttons');
$description = get_string('regionwidthdesc', 'theme_buttons');
$default = 240;
$choices = array(200=>'200px', 240=>'240px', 290=>'290px', 350=>'350px', 420=>'420px');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$setting->set_updatedcallback('theme_reset_all_caches');
$settings->add($setting);
 
// Foot note setting
$name = 'theme_buttons/footnote';
$title = get_string('footnote','theme_buttons');
$description = get_string('footnotedesc', 'theme_buttons');
$setting = new admin_setting_confightmleditor($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$settings->add($setting);
 
// Custom CSS file
$name = 'theme_buttons/customcss';
$title = get_string('customcss','theme_buttons');
$description = get_string('customcssdesc', 'theme_buttons');
$setting = new admin_setting_configtextarea($name, $title, $description, '');
$setting->set_updatedcallback('theme_reset_all_caches');
$settings->add($setting);
 
// Add our page to the structure of the admin tree


}
?>