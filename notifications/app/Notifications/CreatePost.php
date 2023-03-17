<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;

    private $postId;
    private $postTitle;
    private $user;
    /**
     * Create a new notification instance.
     */
    public function __construct($postId, $postTitle, $user)
    {
        $this->postId = $postId;
        $this->user = $user;
        $this->postTitle = $postTitle;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }



    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'post_id' => $this->postId,
            'post_title' => $this->postTitle,
            'user_created' => $this->user,
        ];
    }
}
