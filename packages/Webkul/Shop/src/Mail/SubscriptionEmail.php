<?php

namespace Webkul\Shop\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SubscriptionEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a mailable instance
     *
     * @param  array  $subscriptionData
     */
    public function __construct(public $subscriptionData)
    {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(core()->getSenderEmailDetails()['email'], core()->getSenderEmailDetails()['name'])
            ->to($this->subscriptionData['email'])
            ->subject(trans('shop::app.mail.customer.subscription.subject'))
            ->view('shop::emails.customer.subscription-email')
            ->with('data', [
                'content' => 'You Are Subscribed',
                'token'   => $this->subscriptionData['token'],
            ]);
    }
}
