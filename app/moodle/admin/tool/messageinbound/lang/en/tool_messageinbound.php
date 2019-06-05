<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_messageinbound', language 'en'
 *
 * @package    tool_messageinbound
 * @copyright  2014 Andrew Nicols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['classname'] = 'Class name';
$string['component'] = 'Component';
$string['configmessageinboundhost'] = 'The address of the server that Moodle should check mail against. To specify a non-default port, use [server]:[port], for example mail.example.com:587. If a port isn\'t specified, the default port for the type of mail server will be used.';
$string['defaultexpiration'] = 'Default address expiry period';
$string['defaultexpiration_help'] = 'When an email address is generated by the handler, it can be set to automatically expire after a period of time, so that it can no longer be used. It is advisable to set an expiry period.';
$string['description'] = 'Description';
$string['domain'] = 'Email domain';
$string['edit'] = 'Edit';
$string['edithandler'] = 'Edit settings for the {$a} handler';
$string['editinghandler'] = 'Editing {$a}';
$string['enabled'] = 'Enabled';
$string['fixedvalidateaddress'] = 'Validate sender address';
$string['fixedvalidateaddress_help'] = 'You cannot change the address validation for this handler. This may be because the handler requires a specific setting.';
$string['fixedenabled_help'] = 'You cannot change the state of this handler. This may be because the handler is required by other handlers.';
$string['handlerdisabled'] = 'The email handler you tried to contact has been disabled. Unable to process message at this time.';
$string['incomingmailconfiguration'] = 'Incoming mail configuration';
$string['incomingmailserversettings'] = 'Incoming mail server settings';
$string['incomingmailserversettings_desc'] = 'Moodle is capable of connecting to appropriately configured IMAP servers. You can specify the settings used to connect to your IMAP server here.';
$string['invalid_recipient_handler'] = 'If a valid message is received but the sender cannot be authenticated, the message is stored on the email server and the user is contacted using the email address in their user profile. The user is given the chance to reply to confirm the authenticity of the original message.

This handler processes those replies.

It is not possible to disable sender verification of this handler because the user may reply from an incorrect email address if their email client configuration is incorrect.';
$string['invalid_recipient_handler_name'] = 'Invalid recipient handler';
$string['invalidrecipientdescription'] = 'The message "{$a->subject}" could not be authenticated, since it was sent from a different email address than in your user profile. For the message to be authenticated, you need to reply to this message.';
$string['invalidrecipientdescriptionhtml'] = 'The message "{$a->subject}" could not be authenticated, since it was sent from a different email address than in your user profile. For the message to be authenticated, you need to reply to this message.';
$string['invalidrecipientfinal'] = 'The message "{$a->subject}" could not be authenticated. Please check that you are sending your message from the same email address as in your profile.';
$string['mailbox'] = 'Mailbox name';
$string['mailboxconfiguration'] = 'Mailbox configuration';
$string['mailboxdescription'] = '[mailbox]+subaddress@[domain]';
$string['mailsettings'] = 'Mail settings';
$string['message_handlers'] = 'Message handlers';
$string['messageprocessingerror'] = 'You recently sent an email "{$a->subject}" but unfortunately it could not be processed.

The details of the error are shown below.

{$a->error}';
$string['messageprocessingerrorhtml'] = '<p>You recently sent an email "{$a->subject}" but unfortunately it could not be processed.</p>
<p>The details of the error are shown below.</p>
<p>{$a->error}</p>';
$string['messageprocessingfailed'] = 'The email "{$a->subject}" could not be processed. The error is as follows: "{$a->message}".';
$string['messageprocessingfailedunknown'] = 'The email "{$a->subject}" could not be processed. Contact your administrator for further information.';
$string['messageprocessingsuccess'] = '{$a->plain}

If you do not wish to receive these notifications in the future, you can edit your personal messaging preferences by opening {$a->messagepreferencesurl} in your browser.';
$string['messageprocessingsuccesshtml'] = '{$a->html}
<p>If you do not wish to receive these notifications in the future, you can <a href="{$a->messagepreferencesurl}">edit your personal messaging preferences</a>.</p>';
$string['messageinbound'] = 'Message Inbound';
$string['messageinboundenabled'] = 'Enable incoming mail processing';
$string['messageinboundenabled_desc'] = 'Incoming mail processing must be enabled in order for messages to be sent with the appropriate information.';
$string['messageinboundgeneralconfiguration'] = 'General configuration';
$string['messageinboundgeneralconfiguration_desc'] = 'Inbound message processing allows you to receive and process email within Moodle. This has applications such as sending email replies to forum posts or adding files to a user\'s private files.';
$string['messageinboundhost'] = 'Incoming Mail Server';
$string['messageinboundhostpass'] = 'Password';
$string['messageinboundhostpass_desc'] = 'This is the password your service provider will have provided to log in to your email account with.';
$string['messageinboundhostssl'] = 'Use SSL';
$string['messageinboundhostssl_desc'] = 'Some mail servers support an additional level of security by encrypting communication between Moodle and your server. We recommend using this SSL encryption if your server supports it.';
$string['messageinboundhosttype'] = 'Server type';
$string['messageinboundhostuser'] = 'Username';
$string['messageinboundhostuser_desc'] = 'This is the username your service provider will have provided to log in to your email account with.';
$string['messageinboundmailboxconfiguration_desc'] = 'When messages are sent out, they fit into the format address+data@example.com. To reliably generate addresses from Moodle, please specify the address that you would normally use before the @ sign, and the domain after the @ sign separately. For example, the Mailbox name in the example would be "address", and the E-mail domain would be "example.com". You should use a dedicated e-mail account for this purpose.';
$string['messageprovider:invalidrecipienthandler'] = 'Message to confirm that an inbound message came from you';
$string['messageprovider:messageprocessingerror'] = 'Warning when an inbound message could not be processed';
$string['messageprovider:messageprocessingsuccess'] = 'Confirmation that a message was successfully processed';
$string['noencryption'] = 'Off - No encryption';
$string['noexpiry'] = 'No expiry';
$string['oldmessagenotfound'] = 'You tried to manually authenticate a message, but the message could not be found. This could be because it has already been processed, or because the message expired.';
$string['oneday'] = 'One day';
$string['onehour'] = 'One hour';
$string['oneweek'] = 'One week';
$string['oneyear'] = 'One year';
$string['pluginname'] = 'Inbound message configuration';
$string['privacy:metadata:coreuserkey'] = 'User\'s keys to validate the email received';
$string['privacy:metadata:messagelist'] = 'A list of message identifiers which failed validation and requires further authorisation';
$string['privacy:metadata:messagelist:address'] = 'The address at which the email was sent';
$string['privacy:metadata:messagelist:messageid'] = 'The message ID';
$string['privacy:metadata:messagelist:timecreated'] = 'The time at which the record was made';
$string['privacy:metadata:messagelist:userid'] = 'The ID of user who need to approve the message';
$string['replysubjectprefix'] = 'Re:';
$string['requirevalidation'] = 'Validate sender address';
$string['name'] = 'Name';
$string['ssl'] = 'SSL (Auto-detect SSL version)';
$string['sslv2'] = 'SSLv2 (Force SSL Version 2)';
$string['sslv3'] = 'SSLv2 (Force SSL Version 3)';
$string['taskcleanup'] = 'Cleanup of unverified incoming email';
$string['taskpickup'] = 'Incoming email pickup';
$string['tls'] = 'TLS (TLS; started via protocol-level negotiation over unencrypted channel; RECOMMENDED way of initiating secure connection)';
$string['tlsv1'] = 'TLSv1 (TLS direct version 1.x connection to server)';
$string['validateaddress'] = 'Validate sender email address';
$string['validateaddress_help'] = 'When a message is received from a user, Moodle attempts to validate the message by comparing the email address of the sender with the email address in their user profile.

If the sender does not match, then the user is sent a notification to confirm that they really did send the email.

If this setting is disabled, then the email address of the sender is not checked at all.';