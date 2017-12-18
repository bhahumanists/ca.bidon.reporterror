<?php

/*
 * Settings metadata file
 */
return [
  'reporterror_noreferer_handle' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_noreferer_handle',
    'type' => 'Integer',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Enable transparent redirection of contribution page errors without a referer?',
    'help_text' => '',
  ],
  'reporterror_noreferer_pageid' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_noreferer_pageid',
    'type' => 'Integer',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Redirect contribution pages errors with no referer to a specific page',
    'help_text' => '',
  ],
  'reporterror_noreferer_sendreport' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_noreferer_sendreport',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Send a report for contribution pages errors without a referer?',
    'help_text' => '',
  ],
  'reporterror_noreferer_handle_event' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_noreferer_handle_event',
    'type' => 'Integer',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Enable transparent redirection of event page errors without a referer?',
    'help_text' => '',
  ],
  'reporterror_noreferer_handle_eventid' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_noreferer_handle_eventid',
    'type' => 'Integer',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Redirect event pages errors with no referer to a specific event',
    'help_text' => '',
  ],
  'reporterror_noreferer_sendreport_event' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_noreferer_sendreport_event',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Send a report for event pages errors without a referer?',
    'help_text' => '',
  ],
  'reporterror_handle_profile' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_handle_profile',
    'type' => 'Integer',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Enable transparent redirection of profile page errors?',
    'help_text' => '',
  ],
  'reporterror_sendreport_profile' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_sendreport_profile',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Send a report for profile pages errors?',
    'help_text' => '',
  ],
  'reporterror_mailto' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_mailto',
    'type' => 'String',
    'default' => '',
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Error Report recipient e-mail address',
    'help_text' => '',
  ],
  'reporterror_show_full_backtrace' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_show_full_backtrace',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Display a full backtrace in e-mails?',
    'help_text' => '',
  ],
  'reporterror_show_post_data' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_show_post_data',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Display POST data in Report Error e-mails?',
    'help_text' => '',
  ],
  'reporterror_show_session_data' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_show_session_data',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Display session data in Report Error e-mails?',
    'help_text' => '',
  ],
  'reporterror_bots_sendreport' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_bots_sendreport',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Send error reports for errors caused by bots?',
    'help_text' => '',
  ],
  'reporterror_bots_404' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_bots_404',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Respond with a 404 page not found error?',
    'help_text' => '',
  ],
  'reporterror_bots_regexp' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_bots_regexp',
    'type' => 'String',
    'default' => '(Googlebot|bingbot|python|Baiduspider|Yandex)',
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Bot user-agents to ignore',
    'help_text' => '',
  ],
  'reporterror_smartgroups_autodisable' => [
    'group_name' => 'domain',
    'group' => 'reporterror',
    'name' => 'reporterror_smartgroups_autodisable',
    'type' => 'Boolean',
    'default' => 0,
    'add' => '1.0',
    'is_domain' => 1,
    'is_contact' => 0,
    'description' => 'Automatically disable invalid smartgroups',
    'help_text' => '',
  ],
];
