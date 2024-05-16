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
        /* return (new MailMessage)
                    ->greeting('Hey!')
                    ->line('The introduction to the notification.')
                    ->subject('About' . $this->job->title)
                    ->markdown('mail.jobpostednew') 
                    ->view('mail.jobpostednew')
                    
                    ->subject('About ' . $this->job->title)
                    ->action('Notification Action', url('/jobs/'.$this->job->id))
                    ->line('Thank you for using our application!'); */

        $job = $this->job;

        /* $res = (new MailMessage)
                ->subject('About '. $this->job->title)
                ->action('View Job',url('/jobs/'.$this->job->id))
                ->line('Thank You')
                ->level('error');
        
        $res->markdown('vendor.notifications.email'); */

        $res = (new MailMessage)
                ->subject('About '. $job->title)
                ->action('View Job',url('/jobs/'.$job->id))
                ->line('Thank You')
                ->level('error');
        
        /* $res->markdown('vendor.notifications.email', ['job'=>$job]); */

        $res->markdown('vendor.notifications.first', ['job'=>$job]);

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
