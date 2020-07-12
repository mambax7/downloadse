<?php
// $Id: modinfo.php,v 1.4 2003/02/03 23:34:25 w4z004 Exp $
// Module Info

// The name of this module
define("_MI_DOWNLOADSE_NAME","Down-se");

// A brief description of this module
define("_MI_DOWNLOADSE_DESC","Kloon van de download module");

// Names of blocks for this module (Not all module has blocks)
define("_MI_DOWNLOADSE_BNAME1","Recente Down-se");
define("_MI_DOWNLOADSE_BNAME2","Top Down-se");

// Sub menu titles
define("_MI_DOWNLOADSE_SMNAME1","Verstuur");
define("_MI_DOWNLOADSE_SMNAME2","Populair");
define("_MI_DOWNLOADSE_SMNAME3","Top Noteringen");

// Names of admin menu items
define("_MI_DOWNLOADSE_ADMENU2","Toevoegen/Veranderen Downloads");
define("_MI_DOWNLOADSE_ADMENU3","Ingestuurde Downloads");
define("_MI_DOWNLOADSE_ADMENU4","Gebroken Downloads");
define("_MI_DOWNLOADSE_ADMENU5","Aangepaste Downloads");

// Title of config items
define('_MI_DOWNLOADSE_POPULAR', 'Hits om populair te zijn');
define('_MI_DOWNLOADSE_NEWDLS', 'Aantal downloads als nieuw op Top pagina');
define('_MI_DOWNLOADSE_PERPAGE', 'Aantal downloads per Pagina');
define('_MI_DOWNLOADSE_USESHOTS', 'Gebruik screenshots?');
define('_MI_DOWNLOADSE_SHOTWIDTH', 'Screenshot afb. breedte');
define('_MI_DOWNLOADSE_CHECKHOST', 'Beperk leeching?');
define('_MI_DOWNLOADSE_REFERERS', 'Sites die toegang hebben om downloadbestanden te linken');
define("_MI_DOWNLOADSE_ANONPOST","Anonieme gebruikers toelaten van downloads toe te voegen?");
define('_MI_DOWNLOADSE_AUTOAPPROVE','Automatisch downloads goedkeuren?');

// Description of each config items
define('_MI_DOWNLOADSE_POPULARDSC', 'Aantal hits download voor toekenning populair');
define('_MI_DOWNLOADSE_NEWDLSDSC', 'Aantal hits nieuwe download voor toekenning op Top page');
define('_MI_DOWNLOADSE_PERPAGEDSC', 'Aantal downloads tonen per pagina?');
define('_MI_DOWNLOADSE_USESHOTSDSC', 'Selecteer Ja voor tonen van screenshot afbeelding voor iedere download item');
define('_MI_DOWNLOADSE_SHOTWIDTHDSC', 'Maximum breedte van screenshot afbeelding');
define('_MI_DOWNLOADSE_REFERERSDSC', 'Deze Websites mogen een directe link maken naar jouw downloadfiles <br />Separeer iedere site d.m.v. een | ');

// Text for notifications

define('_MI_DOWNLOADSE_GLOBAL_NOTIFY', 'Globaal');
define('_MI_DOWNLOADSE_GLOBAL_NOTIFYDSC', 'Globale notificatie opties.');

define('_MI_DOWNLOADSE_CATEGORY_NOTIFY', 'Categorie');
define('_MI_DOWNLOADSE_CATEGORY_NOTIFYDSC', 'Notificatie opties toepassend op de huidige categorie.');

define('_MI_DOWNLOADSE_FILE_NOTIFY', 'File');
define('_MI_DOWNLOADSE_FILE_NOTIFYDSC', 'Notificatie opties voor het huidige bestand.');

define('_MI_DOWNLOADSE_GLOBAL_NEWCATEGORY_NOTIFY', 'Nieuw Categorie');
define('_MI_DOWNLOADSE_GLOBAL_NEWCATEGORY_NOTIFYCAP', 'Verwittig me wanneer een nieuwe download categorie is gecreëerd.');
define('_MI_DOWNLOADSE_GLOBAL_NEWCATEGORY_NOTIFYDSC', 'Ontvang verwittigingen wanneer nieuwe download categorieën gecreëerd is.');
define('_MI_DOWNLOADSE_GLOBAL_NEWCATEGORY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Nieuwe bestand categorie');                              

define('_MI_DOWNLOADSE_GLOBAL_FILEMODIFY_NOTIFY', 'Wijziging Bestand Aangevraagd');
define('_MI_DOWNLOADSE_GLOBAL_FILEMODIFY_NOTIFYCAP', 'Verwittig me van elke bestand wijzigings aanvraag.');
define('_MI_DOWNLOADSE_GLOBAL_FILEMODIFY_NOTIFYDSC', 'Ontvang verwittigingen wanneer een aanvraag tot bestands wijziging is ingestuurd.');
define('_MI_DOWNLOADSE_GLOBAL_FILEMODIFY_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Bestand Wijziging Insturing');

define('_MI_DOWNLOADSE_GLOBAL_FILEBROKEN_NOTIFY', 'Gebroken Download Melding');
define('_MI_DOWNLOADSE_GLOBAL_FILEBROKEN_NOTIFYCAP', 'Verwittig me van elke gebroken bestand report.');
define('_MI_DOWNLOADSE_GLOBAL_FILEBROKEN_NOTIFYDSC', 'Ontvang verwittigingen wanneer een gebroken bestands report is ingestuurd.');
define('_MI_DOWNLOADSE_GLOBAL_FILEBROKEN_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Broken File Reported');

define('_MI_DOWNLOADSE_GLOBAL_FILESUBMIT_NOTIFY', 'Bestand Ingestuurd');
define('_MI_DOWNLOADSE_GLOBAL_FILESUBMIT_NOTIFYCAP', 'Verwittig me van elke bestand insturing (wachtend op goedkeuring).');
define('_MI_DOWNLOADSE_GLOBAL_FILESUBMIT_NOTIFYDSC', 'Ontvang verwittigingen wanneer een bestand is ingestuurd (wachtend op goedkeuring).');
define('_MI_DOWNLOADSE_GLOBAL_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Nieuw bestand Ingestuurd');

define('_MI_DOWNLOADSE_GLOBAL_NEWFILE_NOTIFY', 'Nieuw Bestand');
define('_MI_DOWNLOADSE_GLOBAL_NEWFILE_NOTIFYCAP', 'Verwittig me van elk nieuw bestand dat wordt toegevoegd.');
define('_MI_DOWNLOADSE_GLOBAL_NEWFILE_NOTIFYDSC', 'Ontvang verwittigingen wanneer er een nieuw bestand wordt toegevoegd.');
define('_MI_DOWNLOADSE_GLOBAL_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Nieuw bestand');

define('_MI_DOWNLOADSE_CATEGORY_FILESUBMIT_NOTIFY', 'Bestand Insturing');
define('_MI_DOWNLOADSE_CATEGORY_FILESUBMIT_NOTIFYCAP', 'Verwittig me van elke bestand insturing (wachtend op goedkeuring) voor de huidige categorie.');   
define('_MI_DOWNLOADSE_CATEGORY_FILESUBMIT_NOTIFYDSC', 'Ontvang verwittigingen wanneer een bestand is ingestuurd (wachtend op goedkeuring) voor de huidige categorie.');      
define('_MI_DOWNLOADSE_CATEGORY_FILESUBMIT_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Nieuw bestand ingestuurd in categorie'); 

define('_MI_DOWNLOADSE_CATEGORY_NEWFILE_NOTIFY', 'Nieuw Bestand');
define('_MI_DOWNLOADSE_CATEGORY_NEWFILE_NOTIFYCAP', 'Verwittig me van elk nieuw bestand dat wordt toegevoegd voor de huidige categorie.');   
define('_MI_DOWNLOADSE_CATEGORY_NEWFILE_NOTIFYDSC', 'Ontvang verwittigingen wanneer er een nieuw bestand is toegevoegd voor de huidige categorie.');      
define('_MI_DOWNLOADSE_CATEGORY_NEWFILE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittiging : Nieuw bestand in categorie'); 

define('_MI_DOWNLOADSE_FILE_APPROVE_NOTIFY', 'Verwittiging Goedkeuring');
define('_MI_DOWNLOADSE_FILE_APPROVE_NOTIFYCAP', 'Verwittig me wanneer dit bestand is toegelaten.');
define('_MI_DOWNLOADSE_FILE_APPROVE_NOTIFYDSC', 'Ontvang verwittigingen wanneer dit bestand is toegelaten.');
define('_MI_DOWNLOADSE_FILE_APPROVE_NOTIFYSBJ', '[{X_SITENAME}] {X_MODULE} auto-verwittigingy : Bestand Goedgekeurd');
?>