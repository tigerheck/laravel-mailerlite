<?php
namespace TigerHeck\MailerLite;

use Illuminate\Support\Facades\Http;
use MailerLite\MailerLite as CoreMailerLite;
 
class MailerLiteService extends CoreMailerLite {

    public function __construct(array $options = [], ?MailerLiteHttpLayer $httpLayer = null) {
        parent::__construct($options, $httpLayer); // Calling parent constructor
    }
}