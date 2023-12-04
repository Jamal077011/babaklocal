<?php

namespace App\Notifications;

use App\Models\Dashboard\Employer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AddEmployerNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    protected $employer ;

    public function __construct(Employer $employer)
    {
        $this->employer = $employer ;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    public function toBroadcast(object $notifiable)
    {
         return  [
            'subject' => ("a new Employer #{$this->employer->id} has been added"),
            'icon' => 'fas fa-file mr-2',
            'url' => url('/dashboard/employee'),
 
        ];
    }



    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
