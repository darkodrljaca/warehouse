<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPasswordNotification extends Notification
{
    public $token;

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Измена шифре')
            ->line('Добили сте овај имејл зато што смо добили захтев за измену шифре.')
            ->action('Измена шифре', url('password/reset', $this->token))
            ->line('Ако нисте захтевали измену шифре, даља акција није потребна.');
    }
}