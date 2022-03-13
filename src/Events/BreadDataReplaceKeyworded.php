<?php

namespace Joy\ReplaceKeyword\Events;

use Illuminate\Queue\SerializesModels;

class ReplaceKeyworded
{
    use SerializesModels;

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }
}
