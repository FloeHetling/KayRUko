<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author		Varun Shoor
 *
 * @package		SWIFT
 * @copyright	Copyright (c) 2001-2012, Kayako
 * @license		http://www.kayako.com/license
 * @link		http://www.kayako.com
 *
 * ###############################################
 */

$__LANG = array (
	// ======= BEGIN v4 LOCALES =======
	'insertbreakline' => 'Insert Breakline',
	'editbreakline' => 'Edit Breakline',
	'emailqueues' => 'Email Queues',
	'winviewparserlog' => 'View Parser Log',
	'close' => 'Close',
	'titleparserlogdel' => 'Email parser log entries deleted (%d)',
	'msgparserlogdel' => 'The following email parser log entries were deleted:',

	'breaklines' => 'Breaklines',
	'desc_breaklines' => '',
	'sortorder' => 'Execution order',
	'desc_sortorder' => 'Breaklines are executed according to their execution order number, smallest to largest.',
	'wineditbreakline' => 'Edit Breakline',
	'breaklinetitle' => 'Breakline text to truncate at',
	'desc_breaklinetitle' => 'All incoming email will be truncated from this breakline onwards, to keep things tidy.',
	'isregexp' => 'Pattern match',
	'desc_isregexp' => 'If enabled, you can specify a regular expression pattern in place of the breakline text above for more flexible breakline matching.',
	'titleinsertbreakline' => 'Breakline created',
	'msginsertbreakline' => 'The new breakline was created successfully.',
	'titleupdatebreakline' => 'Breakline updated',
	'msgupdatebreakline' => 'The breakline was updated successfully.',
	'titledelbreakline' => 'Breaklines deleted (%d)',
	'msgdelbreakline' => 'The following breaklines were deleted:',
	'invalidbreakline' => 'A problem was encountered (invalid breakline - make sure the breakline exists in the database)',

	'tabsettings' => 'Settings',
	'forcequeue' => 'Ignore recipient addresses and force into queue',
	'desc_forcequeue' => 'If enabled, all email fetched from this queue will follow this queue\'s routing options, even if the <strong>To:</strong> address in the emails fetched from this queue matches another queue in the helpdesk.<br/><br/>For example, if your queue address is <em>support@acme.com</em> and an email sent to <em>sales@acme.com</em> is in that queue (perhaps as an email alias), if this setting is enabled then this email will be fetched as if it was sent to <em>support@acme.com</em>.<br/><br/>If this setting is disabled and there is no email queue for <em>sales@acme.com</em>, the email will be rejected. If this setting is disabled and there is an email queue for <em>sales@acme.com</em>, the email will be captured into that email queue.',
	'leavecopyonserver' => 'Leave email on the server after fetching',
	'desc_leavecopyonserver' => 'This option is only applicable to IMAP mailboxes. When enabled, the helpdesk will leave a copy of the email fetched into the helpdesk on the server.',
	'nonssl' => 'Non SSL',
	'tls' => 'TLS',
	'ssl' => 'SSL',
	'sslv2' => 'SSL v2',
	'sslv3' => 'SSL v3',
	'usequeuesmtp' => 'Use the same mailserver to send email',
	'desc_usequeuesmtp' => 'Enable this setting to use the mailserver specified above as an SMTP server for sending as well as fetching email (such as ticket notifications for tickets associated with this email queue).',
	'smtptype' => 'SMTP connection type',
	'desc_smtptype' => 'Select the connection type of your SMTP server. If you don\'t know, your network administrator will.',
	'next' => 'Next',
	'back' => 'Back',
	'wineditemailqueue' => 'Edit Email Queue',
	'tabticketsettings' => 'Ticket Options',
	'tabpop3imap' => 'POP3/IMAP',
	'queueisenabled' => 'Email queue is enabled',
	'desc_queueisenabled' => 'If the email queue is disabled, it will no longer fetch email into the helpdesk. If this is a \'pipe\' email queue type, email will be silently rejected.',
	'titlequeueinsert' => 'Email queue created',
	'msgqueueinsert' => 'The email queue %s was created successfully.',
	'titlequeueupdate' =>'Email queue updated',
	'msgqueueupdate' => 'The email queue %s was updated successfully.',
	'titledelqueues' => 'Email queues deleted (%d)',
	'msgdelqueues' => 'The following email queues were deleted:',
	'titlestaffemail' => 'Email address already in use',
	'msgstaffemail' => 'The email address is already being used by a staff user %s, and cannot be used as an email queue address at the same time (it may cause email loops, because your staff user would be replying from the same email address as the helpdesk is fetching email from).',
	'verifyconnection' => 'Verify Connection',
	'vcvariablesanity' => 'Checking the email queue mailserver information',
	'vcimapnotcompiled' => 'Your web server\'s PHP installation does not include IMAP support. *nix users should recompile their PHP with the \'--with-imap\' flag; Windows users can simply uncomment the extension=\'php_imap.dll\' line in their php.ini file',
	'vcimapcompiled' => 'IMAP support on your web server detected',
	'vcattemptconnection' => 'Attempting to connect to the mailserver',
	'vcconnectionsuccess' => 'Woohoo, connection successful',
	'vctotalmessages' => 'Total messages in the mailbox: %d',
	'vcconnectionfailed' => 'Oh dear, the mailbox could not be reached:<BR />%s',
	'erremailqueuesame' => 'Email rejected as the source email address is the same as an email queue address in the helpdesk',

	'errloopcontrol' => 'This email was rejected because loop control is in effect.',
	'errtoobig' => 'The maxumum allowed message size of %s was exceeded; message size: %s',

	'mailparser' => 'Email Parser',
	'desc_mailparser' => '',
	'queuelist' => 'Email Queue List',

	'insertemailqueue' => 'Insert Email Queue',
	'insertqueue' => 'Insert Queue',
	'queuenextstep' => 'Next &raquo;',
	'emailgeneralfields' => 'Email Queue Settings',
	'emailimapfields' => 'Mailserver Settings (only for POP3/IMAP mailboxes)',
	'emailaddress' => 'Email queue address',
	'desc_emailaddress' => 'The email queue will handle the email sent to this address, for example, <em>sales@acme.com</em>.',
	'emailtype' => 'Queue type',
	'desc_emailtype' => '',
	'emailfetchtype' => 'Mailbox type',
	'desc_emailfetchtype' => 'The type of mailbox this email queue will connect to and download email from.',
	'fetchpipe' => 'Pipe',
	'fetchpop3' => 'POP3',
	'fetchpop3ssl' => 'POP3 SSL',
	'fetchimap' => 'IMAP',
	'fetchimapssl' => 'IMAP SSL',
	'emailhost' => 'Mailserver hostname',
	'desc_emailhost' => 'The mailserver hostname may be an IP address or domain name. For example, <em>imap.gmail.com</em>.',
	'emailport' => 'Port number',
	'desc_emailport' => 'Mailservers usually use a standard port, already specified here. Contact your network administrator to confirm.',
	'emailusername' => 'Username',
	'desc_emailusername' => 'The username that this email queue will use to connect to this mailserver.',
	'emailpassword' => 'Password',
	'desc_emailpassword' => 'The password to go with the username, above.',

	'queueoverrides' => 'Queue Overrides (Optional)',
	'queuefromname' => 'From name',
	'desc_queuefromname' => 'All outgoing email associated with this queue will use this from name, for example: <em>Acme Inc Sales</em>.',
	'queuefromemail' => 'From email address',
	'desc_queuefromemail' => 'All outgoing email associated with this queue will use this from email address.',

	'queuesettings' => 'Queue Settings',
	'templategroup' => 'Queue template group',
	'desc_templategroup' => 'Select which template group should be used for email associated with this queue.',
	'queuesignature' => 'Queue signature (optional)',
	'desc_queuesignature' => 'If set, all outgoing email associated with this queue will be sent with this signatue.',
	'registrationrequired' => 'Registration required',
	'desc_registrationrequired' => 'Only email from registered users with an existing user account will be accepted by this email queue.',
	'issueautoresponder' => 'Send new ticket autoresponder',
	'desc_issueautoresponder' => 'The helpdesk will send an autoresponder confirming receipt of email into the helpdesk, if enabled.',
	'replyautoresponder' => 'Send reply autoresponder',
	'desc_replyautoresponder' => 'The helpdesk will send an autoresponder confirming receipt of a new reply by email, if enabled.',

	'ticketfields' => 'Ticket Properties',
	'queuedepartment' => 'Department',
	'desc_queuedepartment' => 'New tickets created from email sent to this queue will be created in this department.',
	'queuetickettype' => 'Ticket type',
	'desc_queuetickettype' => 'This ticket type will be used for new tickets created from email sent to this queue.',
	'queueticketstatus' => 'Status',
	'desc_queueticketstatus' => 'New tickets created from email sent to this queue will be set to this status.',
	'queuepriority' => 'Priority',
	'desc_queuepriority' => 'New tickets created from email sent to this queue will be set to this priority. This is not related to email priority.',
	'editemailqueue' => 'Edit Email Queue',
	'emailqueues' => 'Email Queues',


	'queueprefix' => 'Queue email subject prefix (optional)',
	'desc_queueprefix' => 'All outgoing email associated with this queue will be prefixed with this value. For example, if <em>SUPPORT</em> is the prefix then the email subject will look like <em>[SUPPORT #ABC-12345]: Email subject</em>.',
	'titleinvalidqueueprefix' => 'There is something wrong with the subject prefix',
	'msginvalidqueueprefix' => 'Only alphanumeric characters can be used for subject prefixes. Please try again.',

	'titleenablequeues' => 'Email queues enabled (%d)',
	'msgenablequeues' => 'The following email queues have been enabled:',
	'titledisablequeues' => 'Email queues disabled (%d)',
	'msgdisablequeues' => 'The following email queues have been disabled:',

	// View Parser Log
	'viewparserlog' => 'View Parser Log',
	'generalinformation' => 'General Information',
	'mimedata' => 'MIME Data',
	'ppticketid' => 'Ticket ID: ',
	'ppticketmaskid' => 'Ticket mask ID: ',
	'ppdate' => 'Date: ',
	'pptimeline' => 'Timeline: ',
	'ppemailqueue' => 'Email queue: ',
	'ppstatus' => 'Process status: ',
	'ppsubject' => 'Subject: ',
	'ppfromemail' => 'From email address: ',
	'pptoemail' => 'Destination email address: ',
	'ppsize' => 'Size: ',
	'pptimetaken' => 'Time taken to parse: ',
	'ppdesc' => 'Description: ',
	'ppresult' => 'Result',
	'pparserlogid' => 'Email parser log ID: ',
	'parserlog' => 'Email Parser Log',
	'emailsubject' => 'Email Subject',
	'emailsubjectresult' => 'Email subject and result',
	'emailsubresultformat' => '%s<br /><strong>Result:</strong> %s',
	'emailparsetime' => 'Parse time',
	'emailto' => '"To:" Email',
	'nosubject' => '(No Subject)',

	// Parser Errors
	'errnoqueues' => 'The helpdesk has no email queues for the email recipients',
	'errfloodprotection' => 'Helpdesk flood protection triggered',
	'scccreatedticket' => 'Created ticket #%s',
	'scccreatedreply' => 'Created reply #%s to ticket #%s',
	'sctcreatedreply' => 'Created reply from third party #%s to ticket #%s',
	'scccreatedstaffreply' => 'Created staff reply #%s to ticket #%s',
	'errusernotreg' => 'The sender %s is not a registered user. This email queue cannot process email from non-registered users.',
	'erremailbanned' => 'Sender\'s email address is banned',
	'actionrepprefix' => 'Re: ',

	// Misc
	'reprocessemail' => 'Reprocess Email',

	// Loop Cutter
	'pr_mangelooprules' => 'Loop Blocker Rules',
	'pr_manageloopblockages' => 'Loop Blockages',
	'pr_loopblockages' => 'Loop Blockages',
	'pr_insert_new_loopcutter_rule_title' => 'Insert Loop Blocker Rule',
	'pr_edit_new_loopcutter_rule_title' => 'Edit Loop Blocker Rule',
	'pr_threshhold_grid_timeframe_title' => 'Timeframe',
	'pr_threshhold_grid_maxhits_title' => 'Max hits',
	'pr_threshhold_grid_restoreafter_title' => 'Unblocks after',
	'pr_threshhold_grid_address_title' => 'Email address',
	'pr_newloopcontrolwatchlength_title' => 'Timeframe',
	'pr_newloopcontrolwatchlength_desc' => 'The window of time that the loop blocker watches for potential loops, following the receipt of an email.',
	'pr_newloopcontrolmaxcontacts_title' => 'Maximum emails within timeframe',
	'pr_newloopcontrolmaxcontacts_desc' => 'This number of emails will trigger a loop blockage, and no more autoresponders will be sent for subsequent emails.',
	'pr_newloopcontrolrestoreafter_title' => 'Remove loop blockage after',
	'pr_newloopcontrolrestoreafter_desc' => 'The amount of time in seconds after which a loop blockage will be unblocked.',
	'wineditloopcutterrule' => 'Edit Loop Blocker Rule',
	'pr_threshhold_grid_title' => 'Rule title',
	'thresholdruletitle' => 'Rule title',
	'desc_thresholdruletitle' => 'A title for the loop blocker rule.',
	'titledelloopblock' => 'Loop blockages deleted (%s)',
	'msgdelloopblock' => 'The following loop blockages were deleted:',
	'titledellooprule' => 'Loop blocker rules deleted (%d)',
	'msgdellooprule' => 'The following rules were deleted:',
	'titleinsertlooprule' => 'Loop blocker rule created',
	'msginsertlooprule' => 'A new loop blocker rule was created successfully:',
	'titleupdatelooprule' => 'Loop blocker rule updated',
	'msgupdatelooprule' => 'The loop blocker rule was updated successfully:',
	'titlelooprulemasterdel' => 'Loop blocker rules could not be deleted',
	'msglooprulemasterdel' => 'The following master loop blocker rules could not be deleted:',

	// Potentialy unused phrases in emailparser.php
	'titlefailedtocreatequeue' => 'Failed to create queue',
	'msgfailedtocreatequeue' => 'Unable to create a queue. Please check your database configuration and connectivity settings.',
	'queue_id_label' => 'ID',
	'managemailqueue' => 'Manage Email Queues',
	'invalidqueueaddress' => 'You must enter a valid email address for the queue.',
	'fetchpop3tls' => 'POP3 TLS',
	'fetchimaptls' => 'IMAP TLS',
	'errorlockfilefound' => '[ERROR]: Lock file found! (./files/parser.lockfile). A lock file has been found preventing further execution. If it is from a stale instance of cron then please delete the file in order to continue. To remove the file manually <a href="%s">click here</a>',
	'lockfileexpired' => '[WARNING]: Expired lock file (./files/parser.lockfile) from previous instance of cron found; automatically deleting...',
	'autorespondernotsent' => ' (Autoresponder not sent due to settings in effect)',
	'queuedetails' => 'Queue Details',
	'failedtocreatequeue' => 'ERROR: Failed to create email queue',
	'redirect_queueinsert' => 'Email queue inserted successfully.',
	'queueinsertconfirm' => 'Email queue "%s" inserted successfully',
	'depdeleteconfirm' => 'Email queue "%s" deleted successfully',
	'invalidemailqueue' => 'Invalid email queue specified',
	'queueupdconfirm' => 'Email queue "%s" updated successfully',
	'invalidparserlog' => 'Invalid parser log entry. Make sure that the parser log entry exists in the database and has not been deleted.',
	'desc_parserlog' => 'The mail parser logs all incoming email under the log with useful information to help debug any problems. To disable the logging of email or change other settings, navigate to <i>Settings > Mail Parser</i>.',
	'invalidqueueprefix' => 'Invalid queue prefix; only alphanumeric characters (e.g. A-Z, 0-9) and spaces are allowed.',
	'parserlogentry' => 'Parser Log #%s',
	'parserlogs' => 'Email Parser Logs',
	'emailstatus' => 'Status',
	'emailfrom' => '"From:" Email',
	'emaildescription' => 'Description',
	'emailticketid' => 'Ticket/Bug ID',
	'emailticketmaskid' => 'Ticket Mask ID',
	'emailcontents' => 'Email Contents',
	'breaklinelist' => 'Breakline List',
	'breakline' => 'Breakline',
	'desc_breakline' => 'Enter the contents of the breakline you wish to insert.<BR /><BR />Note: To use regular expressions, prepend your breakline with "regex:"<BR />Example: <i>"regex:@[-=]{4,}[^-=]+[-=]{4,}@"</i>',
	'breaklinedelconfirm' => 'Breakline deleted successfully',
	'breaklineinsertconfirm' => 'Breakline inserted successfully',
	'errnorecipients' => 'No recipients found',
	'errnofromemail' => 'No from email specified',
	'clearedduelimit' => '-- MIME data cleared due to the size limit under Settings > Parser --',
	'pr_loopcutter_prevents_autoresponder_desc' => ' (Autoresponder not sent due to loop control)',
	'pr_loopcontrolrules' => 'Loop Control Rules',
	'pr_new_loop_control_header_text' => 'New Loop Control',
	'pr_new_loop_control_rule_added_desc' => 'New loop control rule added.',
	'pr_desc_loopblockages_filler' => 'Below is a list of active loop blockages. The addresses listed here triggered one or more loop control rules (<i>Mail Parser >> Manage Loop Rules</i>).  Depending on the active settings (<i>Settings >> Mail Parser >> Loop Control Settings</i>), incoming email from these addresses may be completely ignored by Kayako and an autoresponder message may not be sent.  These settings will be in effect for each blockage until it expires.',
	'pr_desc_looprules_filler' => 'Below is a list of loop control rules.  These rules prevent autoresponder loops or other email flood situations and all incoming email messages are subjected to them.  If a rule is triggered, the settings (<i>Settings >> Mail Parser >> Loop Control Settings</i>) are applied.  This allows Kayako to completely ignore the message and/or not reply with an autoresponder message.  Blockages created by these rules are automatically removed after the specified timeframe.',
	'pr_loop_rule_deleted' => 'Rule deleted.',
	'pr_loop_block_deleted' => 'Blockage deleted.',
	'invalidlooprule' => 'Invalid Loop Cutter Rule. Please make sure the record exists in the database.',
	'notapplicable' => '-- NA --',

);
?>