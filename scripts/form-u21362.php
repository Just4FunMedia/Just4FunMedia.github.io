<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2015.2.1.352
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Drone Services copy Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'Danno@Just4FunMedia.ca',
		'to' => 'Danno@Just4FunMedia.ca'
	),
	'fields' => array(
		'custom_U21400' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U21396' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U21363' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Phone',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U21392' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Custom',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U21388' => array(
			'order' => 5,
			'type' => 'checkbox',
			'label' => 'Prefered Method of Contact',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U21372' => array(
			'order' => 6,
			'type' => 'checkboxgroup',
			'label' => 'Concerning',
			'required' => true,
			'optionItems' => array(
				'Drone Services',
				'Photography',
				'Videography',
				'Other'
			),
			'errors' => array(
				'required' => 'Field \'Concerning\' is required.',
				'format' => 'Field \'Concerning\' has an invalid value.'
			)
		)
	)
);

process_form($form);
?>
