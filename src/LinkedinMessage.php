<?php

namespace NotificationChannels\LinkedinChannel;

use Illuminate\Support\Arr;

class LinkedinMessage
{
    private function $comment;

    private $apiEndpoint = 'v1/people/~/shares';

    public function __construct($comment)
    {
        $this->comment = $comment;
    }
    public function getRequestBody()
    {
      $options = array('json'=>
    array(
        'comment' => $this->comment,
        'visibility' => array(
            'code' => 'anyone'
        )
    )
);
        return $options;
    }
}