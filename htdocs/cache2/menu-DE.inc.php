<?php
global $menuitem;

if (!defined('MNU_START')) define('MNU_START', 1);
if (!defined('MNU_START_ABOUTGC')) define('MNU_START_ABOUTGC', 2);
if (!defined('MNU_START_REGISTER')) define('MNU_START_REGISTER', 3);
if (!defined('MNU_START_NEWS')) define('MNU_START_NEWS', 4);
if (!defined('MNU_START_NEWCACHES')) define('MNU_START_NEWCACHES', 5);
if (!defined('MNU_START_NEWLOGS')) define('MNU_START_NEWLOGS', 7);
if (!defined('MNU_START_IMPRINT')) define('MNU_START_IMPRINT', 8);
if (!defined('MNU_MYPROFILE')) define('MNU_MYPROFILE', 9);
if (!defined('MNU_CACHES')) define('MNU_CACHES', 10);
if (!defined('MNU_ADMIN')) define('MNU_ADMIN', 12);
if (!defined('MNU_CACHES_SEARCH')) define('MNU_CACHES_SEARCH', 20);
if (!defined('MNU_CACHES_HIDE')) define('MNU_CACHES_HIDE', 21);
if (!defined('MNU_CACHES_HIDE_DESCRIPTION')) define('MNU_CACHES_HIDE_DESCRIPTION', 22);
if (!defined('MNU_CACHES_HIDE_HTMLTAGS')) define('MNU_CACHES_HIDE_HTMLTAGS', 23);
if (!defined('MNU_ADMIN_MENU_NEWITEM')) define('MNU_ADMIN_MENU_NEWITEM', 24);
if (!defined('MNU_CACHES_TOPS')) define('MNU_CACHES_TOPS', 25);
if (!defined('MNU_START_CONTACT')) define('MNU_START_CONTACT', 27);
if (!defined('MNU_START_PRIVACY')) define('MNU_START_PRIVACY', 28);
if (!defined('MNU_START_REGISTER_ACTIVATION')) define('MNU_START_REGISTER_ACTIVATION', 29);
if (!defined('MNU_CACHES_USERPROFILE')) define('MNU_CACHES_USERPROFILE', 30);
if (!defined('MNU_LOGIN')) define('MNU_LOGIN', 32);
if (!defined('MNU_CACHES_USERTOPS')) define('MNU_CACHES_USERTOPS', 33);
if (!defined('MNU_ERROR')) define('MNU_ERROR', 34);
if (!defined('MNU_ADMIN_TRANSLATE')) define('MNU_ADMIN_TRANSLATE', 35);
if (!defined('MNU_MYPROFILE_OVERVIEW')) define('MNU_MYPROFILE_OVERVIEW', 36);
if (!defined('MNU_MYPROFILE_DATA')) define('MNU_MYPROFILE_DATA', 37);
if (!defined('MNU_MYPROFILE_QUERIES')) define('MNU_MYPROFILE_QUERIES', 38);
if (!defined('MNU_MYPROFILE_WATCHES')) define('MNU_MYPROFILE_WATCHES', 39);
if (!defined('MNU_MYPROFILE_IGNORES')) define('MNU_MYPROFILE_IGNORES', 40);
if (!defined('MNU_MYPROFILE_RECOMMENDATIONS')) define('MNU_MYPROFILE_RECOMMENDATIONS', 41);
if (!defined('MNU_MYPROFILE_WATCHES_EDIT')) define('MNU_MYPROFILE_WATCHES_EDIT', 42);
if (!defined('MNU_MYPROFILE_DATA_PASSWORD')) define('MNU_MYPROFILE_DATA_PASSWORD', 45);
if (!defined('MNU_MYPROFILE_DATA_STATPIC')) define('MNU_MYPROFILE_DATA_STATPIC', 46);
if (!defined('MNU_CACHES_VIEWLOGS')) define('MNU_CACHES_VIEWLOGS', 47);
if (!defined('MNU_LOGIN_NEWPW')) define('MNU_LOGIN_NEWPW', 48);
if (!defined('MNU_LOGIN_REMINDEMAIL')) define('MNU_LOGIN_REMINDEMAIL', 49);
if (!defined('MNU_CACHES_SEARCH_RECOMMENDATIONS')) define('MNU_CACHES_SEARCH_RECOMMENDATIONS', 50);
if (!defined('MNU_SITEMAP')) define('MNU_SITEMAP', 51);
if (!defined('MNU_ADMIN_DBMAINTAIN')) define('MNU_ADMIN_DBMAINTAIN', 52);
if (!defined('MNU_USER')) define('MNU_USER', 53);
if (!defined('MNU_USER_MAILTO')) define('MNU_USER_MAILTO', 54);
if (!defined('MNU_CACHES_SEARCH_VIEWCACHE')) define('MNU_CACHES_SEARCH_VIEWCACHE', 55);
if (!defined('MNU_CACHES_PICTURE')) define('MNU_CACHES_PICTURE', 56);
if (!defined('MNU_ADMIN_REPORTS')) define('MNU_ADMIN_REPORTS', 58);
if (!defined('MNU_CACHES_REPORT')) define('MNU_CACHES_REPORT', 59);
if (!defined('MNU_MYPROFILE_DETAILS')) define('MNU_MYPROFILE_DETAILS', 60);
if (!defined('MNU_CACHES_USERDETAILS')) define('MNU_CACHES_USERDETAILS', 62);
if (!defined('MNU_MYPROFILE_ADOPT')) define('MNU_MYPROFILE_ADOPT', 63);
if (!defined('MNU_CACHES_ADOPT')) define('MNU_CACHES_ADOPT', 64);
if (!defined('MNU_ADMIN_USER')) define('MNU_ADMIN_USER', 65);
if (!defined('MNU_START_DONATE')) define('MNU_START_DONATE', 67);
if (!defined('MNU_START_TOS')) define('MNU_START_TOS', 68);
if (!defined('MNU_START_TEAM')) define('MNU_START_TEAM', 69);
if (!defined('MNU_MAP')) define('MNU_MAP', 70);
if (!defined('MNU_CACHES_LOG')) define('MNU_CACHES_LOG', 85);
if (!defined('MNU_START_CHANGELOG')) define('MNU_START_CHANGELOG', 86);
if (!defined('MNU_START_OPERATOR')) define('MNU_START_OPERATOR', 87);
if (!defined('MNU_VERIFY_EMAIL')) define('MNU_VERIFY_EMAIL', 88);
if (!defined('MNU_ADMIN_ADMINS')) define('MNU_ADMIN_ADMINS', 89);
if (!defined('MNU_START_NEWLOGPICS')) define('MNU_START_NEWLOGPICS', 90);
if (!defined('MNU_START_OPENCACHING')) define('MNU_START_OPENCACHING', 91);
if (!defined('MNU_MYPROFILE_PUBLIC')) define('MNU_MYPROFILE_PUBLIC', 92);
if (!defined('MNU_ADMIN_RESTORE')) define('MNU_ADMIN_RESTORE', 93);
if (!defined('MNU_MYPROFILE_OKAPI')) define('MNU_MYPROFILE_OKAPI', 95);
if (!defined('MNU_ADMIN_HISTORY')) define('MNU_ADMIN_HISTORY', 96);
if (!defined('MNU_CACHES_SEARCH_SELECT_CITY')) define('MNU_CACHES_SEARCH_SELECT_CITY', 97);
if (!defined('MNU_CACHES_SEARCH_RESULT')) define('MNU_CACHES_SEARCH_RESULT', 98);
if (!defined('MNU_CACHES_MY')) define('MNU_CACHES_MY', 99);
if (!defined('MNU_START_OCMENU')) define('MNU_START_OCMENU', 100);
if (!defined('MNU_START_WIKINEWS')) define('MNU_START_WIKINEWS', 101);
if (!defined('MNU_START_NEWFEATURES')) define('MNU_START_NEWFEATURES', 102);
if (!defined('MNU_MYPROFILE_OWNERLOGS')) define('MNU_MYPROFILE_OWNERLOGS', 103);
if (!defined('MNU_MYPROFILE_OWNLOGS')) define('MNU_MYPROFILE_OWNLOGS', 104);
if (!defined('MNU_CACHES_OCONLY81')) define('MNU_CACHES_OCONLY81', 105);
if (!defined('MNU_CACHES_ADDTOLIST')) define('MNU_CACHES_ADDTOLIST', 106);
if (!defined('MNU_CACHES_LISTS')) define('MNU_CACHES_LISTS', 107);
if (!defined('MNU_MYPROFILE_LISTS')) define('MNU_MYPROFILE_LISTS', 108);


$menuitem = unserialize("a:78:{i:0;a:1:{s:8:\"subitems\";a:10:{i:0;s:2:\"88\";i:1;s:1:\"1\";i:2;s:1:\"9\";i:3;s:2:\"10\";i:4;s:2:\"70\";i:5;s:2:\"53\";i:6;s:2:\"12\";i:7;s:2:\"32\";i:8;s:2:\"34\";i:9;s:2:\"51\";}}i:1;a:9:{s:5:\"title\";s:0:\"\";s:10:\"menustring\";s:10:\"Startseite\";s:9:\"authlevel\";i:0;s:4:\"href\";s:9:\"index.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#D5D9FF\";s:8:\"subitems\";a:17:{i:0;s:1:\"4\";i:1;s:1:\"5\";i:2;s:1:\"7\";i:3;s:3:\"101\";i:4;s:2:\"86\";i:5;s:3:\"102\";i:6;s:3:\"100\";i:7;s:1:\"2\";i:8;s:2:\"91\";i:9;s:1:\"3\";i:10;s:2:\"67\";i:11;s:2:\"69\";i:12;s:2:\"87\";i:13;s:2:\"68\";i:14;s:1:\"8\";i:15;s:2:\"27\";i:16;s:2:\"28\";}}i:2;a:8:{s:5:\"title\";s:16:\"Über Geocaching\";s:10:\"menustring\";s:16:\"Über Geocaching\";s:9:\"authlevel\";i:0;s:4:\"href\";s:28:\"articles.php?page=geocaching\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:3;a:9:{s:5:\"title\";s:12:\"Registrieren\";s:10:\"menustring\";s:12:\"Registrieren\";s:9:\"authlevel\";i:0;s:4:\"href\";s:12:\"register.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"2\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";s:8:\"subitems\";a:1:{i:0;s:2:\"29\";}}i:4;a:8:{s:5:\"title\";s:9:\"Aktuelles\";s:10:\"menustring\";s:9:\"Aktuelles\";s:9:\"authlevel\";i:0;s:4:\"href\";s:8:\"news.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:5;a:8:{s:5:\"title\";s:14:\"Neueste Caches\";s:10:\"menustring\";s:14:\"Neueste Caches\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"newcaches.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:7;a:9:{s:5:\"title\";s:12:\"Neueste Logs\";s:10:\"menustring\";s:12:\"Neueste Logs\";s:9:\"authlevel\";i:0;s:4:\"href\";s:11:\"newlogs.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";s:8:\"subitems\";a:1:{i:0;s:2:\"90\";}}i:8;a:8:{s:5:\"title\";s:9:\"Impressum\";s:10:\"menustring\";s:9:\"Impressum\";s:9:\"authlevel\";i:0;s:4:\"href\";s:27:\"articles.php?page=impressum\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:9;a:9:{s:5:\"title\";s:11:\"Mein Profil\";s:10:\"menustring\";s:11:\"Mein Profil\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"myhome.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#E8DDE4\";s:8:\"subitems\";a:12:{i:0;s:2:\"36\";i:1;s:2:\"92\";i:2;s:2:\"37\";i:3;s:2:\"38\";i:4;s:2:\"39\";i:5;s:2:\"40\";i:6;s:3:\"108\";i:7;s:2:\"41\";i:8;s:2:\"63\";i:9;s:2:\"95\";i:10;s:3:\"103\";i:11;s:3:\"104\";}}i:10;a:9:{s:5:\"title\";s:6:\"Caches\";s:10:\"menustring\";s:6:\"Caches\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"search.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#FFFFC5\";s:8:\"subitems\";a:15:{i:0;s:2:\"20\";i:1;s:2:\"21\";i:2;s:2:\"99\";i:3;s:2:\"25\";i:4;s:2:\"30\";i:5;s:2:\"62\";i:6;s:2:\"33\";i:7;s:3:\"107\";i:8;s:2:\"47\";i:9;s:2:\"56\";i:10;s:3:\"105\";i:11;s:2:\"59\";i:12;s:2:\"64\";i:13;s:2:\"85\";i:14;s:3:\"106\";}}i:12;a:9:{s:5:\"title\";s:5:\"Admin\";s:10:\"menustring\";s:5:\"Admin\";s:9:\"authlevel\";s:1:\"2\";s:4:\"href\";s:13:\"translate.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#E8DDE4\";s:8:\"subitems\";a:7:{i:0;s:2:\"35\";i:1;s:2:\"52\";i:2;s:2:\"58\";i:3;s:2:\"96\";i:4;s:2:\"65\";i:5;s:2:\"93\";i:6;s:2:\"89\";}}i:20;a:9:{s:5:\"title\";s:6:\"Suchen\";s:10:\"menustring\";s:6:\"Suchen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"search.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";s:8:\"subitems\";a:4:{i:0;s:2:\"50\";i:1;s:2:\"55\";i:2;s:2:\"97\";i:3;s:2:\"98\";}}i:21;a:9:{s:5:\"title\";s:10:\"Verstecken\";s:10:\"menustring\";s:10:\"Verstecken\";s:9:\"authlevel\";i:0;s:4:\"href\";s:12:\"newcache.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";s:8:\"subitems\";a:2:{i:0;s:2:\"22\";i:1;s:2:\"23\";}}i:22;a:8:{s:5:\"title\";s:12:\"Beschreibung\";s:10:\"menustring\";s:12:\"Beschreibung\";s:9:\"authlevel\";i:0;s:4:\"href\";s:27:\"articles.php?page=cacheinfo\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"21\";}i:23;a:8:{s:5:\"title\";s:18:\"Erlaubte HTML-Tags\";s:10:\"menustring\";s:18:\"Erlaubte HTML-Tags\";s:9:\"authlevel\";i:0;s:4:\"href\";s:26:\"articles.php?page=htmltags\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"21\";}i:24;a:8:{s:5:\"title\";s:13:\"Neuer Eintrag\";s:10:\"menustring\";s:13:\"Neuer Eintrag\";s:9:\"authlevel\";i:0;s:4:\"href\";s:11:\"newitem.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"13\";}i:25;a:8:{s:5:\"title\";s:17:\"Empfohlene Caches\";s:10:\"menustring\";s:17:\"Empfohlene Caches\";s:9:\"authlevel\";i:0;s:4:\"href\";s:8:\"tops.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:27;a:8:{s:5:\"title\";s:7:\"Kontakt\";s:10:\"menustring\";s:7:\"Kontakt\";s:9:\"authlevel\";i:0;s:4:\"href\";s:25:\"articles.php?page=contact\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:28;a:8:{s:5:\"title\";s:21:\"Datenschutzerklärung\";s:10:\"menustring\";s:21:\"Datenschutzerklärung\";s:9:\"authlevel\";i:0;s:4:\"href\";s:21:\"articles.php?page=dsb\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:29;a:8:{s:5:\"title\";s:11:\"Aktivierung\";s:10:\"menustring\";s:11:\"Aktivierung\";s:9:\"authlevel\";i:0;s:4:\"href\";s:14:\"activation.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:1:\"3\";}i:30;a:8:{s:5:\"title\";s:14:\"Benutzerprofil\";s:10:\"menustring\";s:14:\"Benutzerprofil\";s:9:\"authlevel\";i:0;s:4:\"href\";s:15:\"viewprofile.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:32;a:9:{s:5:\"title\";s:8:\"Anmelden\";s:10:\"menustring\";s:8:\"Anmelden\";s:9:\"authlevel\";i:0;s:4:\"href\";s:9:\"login.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#D5D9FF\";s:8:\"subitems\";a:2:{i:0;s:2:\"48\";i:1;s:2:\"49\";}}i:33;a:8:{s:5:\"title\";s:21:\"Empfehlungen anzeigen\";s:10:\"menustring\";s:21:\"Empfehlungen anzeigen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:12:\"usertops.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:34;a:8:{s:5:\"title\";s:13:\"Fehlermeldung\";s:10:\"menustring\";s:13:\"Fehlermeldung\";s:9:\"authlevel\";i:0;s:4:\"href\";s:0:\"\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#D5D9FF\";}i:35;a:8:{s:5:\"title\";s:12:\"Übersetzung\";s:10:\"menustring\";s:12:\"Übersetzung\";s:9:\"authlevel\";s:1:\"2\";s:4:\"href\";s:13:\"translate.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:36;a:8:{s:5:\"title\";s:11:\"Mein Profil\";s:10:\"menustring\";s:10:\"Übersicht\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"myhome.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:37;a:9:{s:5:\"title\";s:11:\"Profildaten\";s:10:\"menustring\";s:11:\"Profildaten\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"myprofile.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";s:8:\"subitems\";a:3:{i:0;s:2:\"60\";i:1;s:2:\"46\";i:2;s:2:\"45\";}}i:38;a:8:{s:5:\"title\";s:19:\"Gespeicherte Suchen\";s:10:\"menustring\";s:19:\"Gespeicherte Suchen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:9:\"query.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:39;a:9:{s:5:\"title\";s:18:\"Beobachtete Caches\";s:10:\"menustring\";s:18:\"Beobachtete Caches\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"mywatches.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";s:8:\"subitems\";a:1:{i:0;s:2:\"42\";}}i:40;a:8:{s:5:\"title\";s:17:\"Ignorierte Caches\";s:10:\"menustring\";s:17:\"Ignorierte Caches\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"myignores.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:41;a:8:{s:5:\"title\";s:12:\"Empfehlungen\";s:10:\"menustring\";s:12:\"Empfehlungen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"mytop5.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:42;a:8:{s:5:\"title\";s:13:\"Einstellungen\";s:10:\"menustring\";s:13:\"Einstellungen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:25:\"mywatches.php?action=edit\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"39\";}i:45;a:8:{s:5:\"title\";s:16:\"Passwort ändern\";s:10:\"menustring\";s:16:\"Passwort ändern\";s:9:\"authlevel\";i:0;s:4:\"href\";s:9:\"newpw.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"37\";}i:46;a:8:{s:5:\"title\";s:13:\"Statistikbild\";s:10:\"menustring\";s:13:\"Statistikbild\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"mystatpic.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"37\";}i:47;a:8:{s:5:\"title\";s:21:\"Logeinträge anzeigen\";s:10:\"menustring\";s:21:\"Logeinträge anzeigen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:12:\"viewlogs.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:48;a:8:{s:5:\"title\";s:16:\"Passwort ändern\";s:10:\"menustring\";s:16:\"Passwort ändern\";s:9:\"authlevel\";i:0;s:4:\"href\";s:9:\"newpw.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"32\";}i:49;a:8:{s:5:\"title\";s:24:\"E-Mail-Addresse erinnern\";s:10:\"menustring\";s:24:\"E-Mail-Addresse erinnern\";s:9:\"authlevel\";i:0;s:4:\"href\";s:15:\"remindemail.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"32\";}i:50;a:8:{s:5:\"title\";s:12:\"Empfehlungen\";s:10:\"menustring\";s:12:\"Empfehlungen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:19:\"recommendations.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"20\";}i:51;a:8:{s:5:\"title\";s:7:\"Sitemap\";s:10:\"menustring\";s:7:\"Sitemap\";s:9:\"authlevel\";i:0;s:4:\"href\";s:11:\"sitemap.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#D5D9FF\";}i:52;a:8:{s:5:\"title\";s:16:\"Datenbankwartung\";s:10:\"menustring\";s:16:\"Datenbankwartung\";s:9:\"authlevel\";s:1:\"2\";s:4:\"href\";s:14:\"dbmaintain.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:53;a:9:{s:5:\"title\";s:8:\"Benutzer\";s:10:\"menustring\";s:8:\"Benutzer\";s:9:\"authlevel\";i:0;s:4:\"href\";s:0:\"\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#FFFFC5\";s:8:\"subitems\";a:1:{i:0;s:2:\"54\";}}i:54;a:8:{s:5:\"title\";s:13:\"E-Mail senden\";s:10:\"menustring\";s:13:\"E-Mail senden\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"mailto.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"53\";}i:55;a:8:{s:5:\"title\";s:17:\"Geocache anzeigen\";s:10:\"menustring\";s:17:\"Geocache anzeigen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"viewcache.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"20\";}i:56;a:8:{s:5:\"title\";s:15:\"Bild bearbeiten\";s:10:\"menustring\";s:15:\"Bild bearbeiten\";s:9:\"authlevel\";i:0;s:4:\"href\";s:11:\"picture.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:58;a:8:{s:5:\"title\";s:19:\"Gemeldete Geocaches\";s:10:\"menustring\";s:19:\"Gemeldete Geocaches\";s:9:\"authlevel\";s:1:\"2\";s:4:\"href\";s:16:\"adminreports.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:59;a:8:{s:5:\"title\";s:12:\"Cache melden\";s:10:\"menustring\";s:12:\"Cache melden\";s:9:\"authlevel\";i:0;s:4:\"href\";s:15:\"reportcache.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:60;a:8:{s:5:\"title\";s:7:\"Details\";s:10:\"menustring\";s:7:\"Details\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"mydetails.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"37\";}i:62;a:8:{s:5:\"title\";s:15:\"Benutzerdetails\";s:10:\"menustring\";s:15:\"Benutzerdetails\";s:9:\"authlevel\";i:0;s:4:\"href\";s:19:\"viewuserdetails.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:63;a:8:{s:5:\"title\";s:10:\"Adoptieren\";s:10:\"menustring\";s:10:\"Adoptieren\";s:9:\"authlevel\";i:0;s:4:\"href\";s:14:\"adoptcache.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:64;a:8:{s:5:\"title\";s:10:\"Adoptieren\";s:10:\"menustring\";s:10:\"Adoptieren\";s:9:\"authlevel\";i:0;s:4:\"href\";s:14:\"adoptcache.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:65;a:8:{s:5:\"title\";s:18:\"Benutzer verwalten\";s:10:\"menustring\";s:18:\"Benutzer verwalten\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"adminuser.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:67;a:8:{s:5:\"title\";s:7:\"Spenden\";s:10:\"menustring\";s:7:\"Spenden\";s:9:\"authlevel\";i:0;s:4:\"href\";s:27:\"articles.php?page=donations\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:68;a:8:{s:5:\"title\";s:19:\"Nutzungsbedingungen\";s:10:\"menustring\";s:19:\"Nutzungsbedingungen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:31:\"articles.php?page=impressum#tos\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:69;a:8:{s:5:\"title\";s:10:\"Unser Team\";s:10:\"menustring\";s:10:\"Unser Team\";s:9:\"authlevel\";i:0;s:4:\"href\";s:22:\"articles.php?page=team\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:70;a:8:{s:5:\"title\";s:5:\"Karte\";s:10:\"menustring\";s:5:\"Karte\";s:9:\"authlevel\";i:0;s:4:\"href\";s:8:\"map2.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:0;s:5:\"color\";s:7:\"#FFFFC5\";}i:85;a:8:{s:5:\"title\";s:16:\"Neuer Logeintrag\";s:10:\"menustring\";s:16:\"Neuer Logeintrag\";s:9:\"authlevel\";i:0;s:4:\"href\";s:8:\"log2.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:86;a:8:{s:5:\"title\";s:18:\"Versionsgeschichte\";s:10:\"menustring\";s:18:\"Versionsgeschichte\";s:9:\"authlevel\";i:0;s:4:\"href\";s:27:\"articles.php?page=changelog\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:87;a:8:{s:5:\"title\";s:6:\"Verein\";s:10:\"menustring\";s:6:\"Verein\";s:9:\"authlevel\";i:0;s:4:\"href\";s:24:\"articles.php?page=verein\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:88;a:7:{s:5:\"title\";s:26:\"E-Mail-Adresse bestätigen\";s:10:\"menustring\";s:26:\"E-Mail-Adresse bestätigen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:15:\"verifyemail.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:0;}i:89;a:8:{s:5:\"title\";s:6:\"Admins\";s:10:\"menustring\";s:6:\"Admins\";s:9:\"authlevel\";s:1:\"2\";s:4:\"href\";s:10:\"admins.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:90;a:8:{s:5:\"title\";s:14:\"Logbildgalerie\";s:10:\"menustring\";s:14:\"Logbildgalerie\";s:9:\"authlevel\";i:0;s:4:\"href\";s:14:\"newlogpics.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:1:\"7\";}i:91;a:8:{s:5:\"title\";s:17:\"Über Opencaching\";s:10:\"menustring\";s:17:\"Über Opencaching\";s:9:\"authlevel\";i:0;s:4:\"href\";s:34:\"articles.php?page=opencaching&wiki\";s:6:\"target\";s:15:\"target=\"_blank\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:92;a:8:{s:5:\"title\";s:20:\"Öffentliches Profil\";s:10:\"menustring\";s:20:\"Öffentliches Profil\";s:9:\"authlevel\";i:0;s:4:\"href\";s:15:\"viewprofile.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:93;a:8:{s:5:\"title\";s:11:\"Vandalismus\";s:10:\"menustring\";s:11:\"Vandalismus\";s:9:\"authlevel\";i:0;s:4:\"href\";s:17:\"restorecaches.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:95;a:8:{s:5:\"title\";s:15:\"API-Anwendungen\";s:10:\"menustring\";s:15:\"API-Anwendungen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:23:\"okapi/apps/?langpref=de\";s:6:\"target\";s:15:\"target=\"_blank\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:96;a:8:{s:5:\"title\";s:14:\"Cache-Historie\";s:10:\"menustring\";s:14:\"Cache-Historie\";s:9:\"authlevel\";s:1:\"2\";s:4:\"href\";s:16:\"adminhistory.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"12\";}i:97;a:8:{s:5:\"title\";s:20:\"Ortschaft auswählen\";s:10:\"menustring\";s:20:\"Ortschaft auswählen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"search.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"20\";}i:98;a:8:{s:5:\"title\";s:21:\"Suchergebnis anzeigen\";s:10:\"menustring\";s:8:\"Ergebnis\";s:9:\"authlevel\";i:0;s:4:\"href\";s:10:\"search.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:2;s:6:\"parent\";s:2:\"20\";}i:99;a:8:{s:5:\"title\";s:12:\"Meine Caches\";s:10:\"menustring\";s:12:\"Meine Caches\";s:9:\"authlevel\";i:0;s:4:\"href\";s:19:\"myhome.php#mycaches\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:100;a:8:{s:5:\"title\";s:11:\"Opencaching\";s:10:\"menustring\";s:11:\"Opencaching\";s:9:\"authlevel\";i:0;s:4:\"href\";s:0:\"\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:101;a:8:{s:5:\"title\";s:17:\"Neue Wiki-Artikel\";s:10:\"menustring\";s:17:\"Neue Wiki-Artikel\";s:9:\"authlevel\";i:0;s:4:\"href\";s:31:\"articles.php?page=wikinews&wiki\";s:6:\"target\";s:15:\"target=\"_blank\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:102;a:8:{s:5:\"title\";s:13:\"Neue Features\";s:10:\"menustring\";s:13:\"Neue Features\";s:9:\"authlevel\";i:0;s:4:\"href\";s:27:\"articles.php?page=changelog\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"1\";}i:103;a:8:{s:5:\"title\";s:11:\"Loghistorie\";s:10:\"menustring\";s:11:\"Loghistorie\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"ownerlogs.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:104;a:8:{s:5:\"title\";s:11:\"Loghistorie\";s:10:\"menustring\";s:11:\"Loghistorie\";s:9:\"authlevel\";i:0;s:4:\"href\";s:11:\"ownlogs.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}i:105;a:8:{s:5:\"title\";s:9:\"OConly-81\";s:10:\"menustring\";s:9:\"OConly-81\";s:9:\"authlevel\";i:0;s:4:\"href\";s:12:\"oconly81.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:106;a:8:{s:5:\"title\";s:29:\"Geocache zu Liste hinzufügen\";s:10:\"menustring\";s:29:\"Geocache zu Liste hinzufügen\";s:9:\"authlevel\";i:0;s:4:\"href\";s:13:\"addtolist.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"0\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:107;a:8:{s:5:\"title\";s:11:\"Cachelisten\";s:10:\"menustring\";s:11:\"Cachelisten\";s:9:\"authlevel\";i:0;s:4:\"href\";s:14:\"cachelists.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:2:\"10\";}i:108;a:8:{s:5:\"title\";s:17:\"Meine Cachelisten\";s:10:\"menustring\";s:17:\"Meine Cachelisten\";s:9:\"authlevel\";i:0;s:4:\"href\";s:11:\"mylists.php\";s:6:\"target\";s:0:\"\";s:7:\"visible\";s:1:\"1\";s:8:\"sublevel\";i:1;s:6:\"parent\";s:1:\"9\";}}");
?>