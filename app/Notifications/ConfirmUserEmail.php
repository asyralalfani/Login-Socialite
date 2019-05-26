<?php
namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
class ConfirmUserEmail extends Notification
{
    use Queueable;
    public $token;
    public function __construct($token){
        $this->token = $token;
    }
    public function via($notifiable){
        return ['mail'];
    }
    public function toMail($notifiable){
        return (new MailMessage)
                    ->success()
                    ->line('Almost Done!')
                    ->line('Click Button Below to Verify Your Email Address')
                    ->action('Activate Your Account', route('user.activate', $this->token));
    }
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}