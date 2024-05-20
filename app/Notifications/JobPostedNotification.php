<?php

namespace App\Notifications;

use App\Models\Phones\SmartPhone;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

class JobPostedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    protected $job;

    /**
     * Create a new notification instance.
     */
    public function __construct(Job $job)
    {   
      $this->job = $job;
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
        $job = $this->job;
        
        $res = (new MailMessage)
                ->subject('About '. $job->title)
                ->action('View Job',url('/jobs/'.$job->id))
                ->theme('try-styles')
                /* ->line('Thank You')
                ->level('error')*/;

        $res->markdown('vendor.notifications.try', ['job'=>$job]);

        return $res;
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
