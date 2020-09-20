<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'New Form Submission',
    'email_message' => 'You have a new form submission',
    'success_redirect' => '',
    'email' => array(
        'from' => 'houseofhandsomes@gmail.com',
        'to' => 'support@hohd.in'
    ),
    'fields' => array(
        'name' => array(
            'order' => 1,
            'type' => 'string',
            'label' => 'Name',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Name\' is required.'
            )
        ),
        'email' => array(
            'order' => 2,
            'type' => 'email',
            'label' => 'Email',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Email\' is required.'
            )
        ),
        'phone' => array(
            'order' => 3,
            'type' => 'tel',
            'label' => 'Phone',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Phone\' is required.'
            )
        ),
        'message' => array(
            'order' => 4,
            'type' => 'string',
            'label' => 'Address',
            'required' => true,
            'errors' => array(
                'required' => 'Field \'Address\' is required.'
            )
        ),
    )
);

$processor = new FormProcessor();
$processor->process($form);

?>