<?php

return array(
	'administration tool desc test_mail_settings' => 'Use this simple tool to send test emails to check if '.product_name().' mailer is well configured',
	'config category desc general' => 'General '.product_name().' settings.',
	'config category desc mailing' => 'Use these settings to set up how '.product_name().' should handle email sending. You can use configuration options provided in your php.ini or set it so it uses any other SMTP server.',
    'config category desc modules' => 'Use these settings to enable or disable '.product_name().' modules. Disabling a module only hides it from the graphical interface. It doesn\'t remove permissions from users to create or edit content objects.',
    'config option desc theme' => 'Using themes you can change the default look and feel of '.product_name().'. Need to refresh for it to take effect.',
    'config option desc upgrade_check_enabled' => 'If Yes system will once a day check if there are new versions of '.product_name().' available for download',
    'cron events info' => 'Cron events let you execute tasks in '.product_name().' periodically, without having to login to the system. To enable cron events you need to configure a cron job to periodically execute the \'cron.php\' file, located at the root of '.product_name().'. The periodicity at which you run the cron job will determine the granularity at which you can run these cron events. For example, if you configure a cron job to run every five minutes, and you configure the cron event to check for upgrades every one minute, it will only be able to check for upgrades every five minutes. To learn about how to configure a cron job ask your system administrator or hosting provider.',
    'cron event desc check_upgrade' => 'This cron event will check for new versions of '.product_name().'.',
  	'cron event desc send_notifications_through_cron' => 'If this event is enabled email notifications will be sent through cron and not when generated by '.product_name().'.',
  	'cron event name export_google_calendar' => 'Export '.product_name().'',
  	'cron event desc export_google_calendar' => 'This cron event will look for events in '.product_name().' to export to Google Calendar.',
  	'manual upgrade desc' => 'To manually upgrade '.product_name().' you have to download the new version of '.product_name().', extract it to the root of your installation and then go to <a href=\'public/upgrade\'>\'public/upgrade\'</a> in your browser to run the upgrade process.',
  	'user config option desc root_dimensions' => 'Check each box to have the tree-widget for each dimension displayed when you access '.product_name().'.',
  	'config option name sent_mails_sync' => 'Enable IMAP synchronization when sending emails from '.product_name().'',
	
	'click sincronizar' => 'Click here if you want '.product_name().' to synchronize events with Google Calendar',
	'feng calendar' => ''.product_name().' Calendar - {0}',
	'sync event feng' => 'Synchronize all events from '.product_name().'',

	'your account created' => 'Your new '.product_name().' account has been created',
    'user created your account' => '{0} created a new '.product_name().' account for you',
    'view object and comments' => 'View {0} and all comments on '.product_name().'',

	'will this person use feng office?' => 'Will this person use '.product_name().'?',

	'add ticket desc' => 'To get personalized help about '.product_name().'',

	'system error message' => 'We are sorry, but a fatal error prevented '.product_name().' from executing your request. An Error Report has been sent to the administrator.',
    'execute action error message' => 'We are sorry, but '.product_name().' is not currently able to execute your request. An Error Report has been sent to the administrator.',
    
	'new feng office version available' => 'New version of '.product_name().' is available. <a class=\'internalLink\' href=\'{0}\' onclick=\'{1}\'>More details</a>.',
	'upgrade is not available' => 'There are no new versions of '.product_name().' available for download',
	'welcome to new account info' => 'From now on you can access your account on {0} ( We recommend you bookmark this link ).<br/> Start using '.product_name().' by following these steps:',
	'mark as read mails from server' => 'Mark emails as read in the email server when receiving them in '.product_name().'',
	'get read state from server' => 'Preserve emails state (read, unread) when receiving them in '.product_name().'',
	'reset password' => ''.product_name().' new password',

	'back to fengoffice' => 'Back to '.product_name().'',
	'upgrade fengoffice' => 'Upgrade '.product_name().'',
	'upgrade your fengoffice installation' => 'Upgrade your '.product_name().' installation',
	'learn about and manage your Feng Office' => 'Learn about and manage your '.product_name().'',
		
	'system module documents-panel hint' => product_name().' allows you to store and share all types of documents.',
	'system module mails-panel hint' => product_name().' e-mail is a fully-functional, fully-integrated e-mail client. Like your traditional e-mail, but with the advantages of being inside '.product_name().'.',
);
