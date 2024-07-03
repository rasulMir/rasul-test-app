<?php

namespace App\Notifications;

use App\Models\Share;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class SendSharesToClient extends Notification implements ShouldQueue
{
    use Queueable;
    private $share;

    /**
     * Create a new notification instance.
     */
    public function __construct(Share $share)
    {
        $this->onConnection('redis');
        $this->share = $share;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

        /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        dd($this);
        return (new MailMessage)
            ->subject('Акций и Скидки от UZINFOCOM')
            ->greeting('Вас приветсвует UZINFOCOM!')
            ->line($this->share->name)
            ->line($this->share->description)
            ->line($this->share->title);
    }
}
