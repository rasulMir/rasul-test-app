<?php

namespace App\Notifications;

use App\Models\Share;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;

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
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'name' => $this->share->name,
            'title' => $this->share->title,
            'description' => $this->share->description,
            'discount' => $this->share->discount,
        ];
    }
}
