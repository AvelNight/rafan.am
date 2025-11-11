<?php

namespace App\Modules;

use Illuminate\Support\Facades\Mail;

class CMail
{
    private string $mailTo;
    private string $mailFrom;
    private string $mailFromName;
    private string $mailSubject = 'new request in rafan.am';
    private string $messageBody;

    public function __construct(?string $mailTo = null)
    {
        $this->mailTo = $mailTo ?? ENV('MAIL_TO');
        $this->mailFrom = ENV('MAIL_FROM_ADDRESS');
        $this->mailFromName = ENV('MAIL_FROM_NAME');
    }

    public function setBody(array $params): self
    {
        $this->messageBody = "New message from rafan.am:\n\nName: {$params['name']}\nEmail: {$params['email']}\nMessage:{$params['message']}";

        return $this;
    }

    public function send(): void
    {
        if(empty($this->messageBody))
            return;

        Mail::raw($this->messageBody, function ($message) {
            $message->to($this->mailTo)
                ->from($this->mailFrom, $this->mailFromName)
                ->subject($this->mailSubject);
        });
    }
}
