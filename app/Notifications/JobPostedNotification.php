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

        $url = url('https://www.bntpro.com/');

        // Verification Email

        /* $res = (new MailMessage)
            ->subject('About '. $job->title)

            ->theme('verify-styles');

        $res->markdown('vendor.notifications.verify', [
            'job' => $job,
            'url' => $url,
            
        ]);  */
        

        // Licences That Expire Table

        $res = (new MailMessage)
        ->subject('Licences That Will Expire Soon') 
        /* ->theme('mail-styles') */;

        /*  $res->markdown('vendor.notifications.license-that-expire', [
            'job' => $job,
            'url' => $url,

        ]);  */

        $res->markdown('vendor.notifications.def', [
            'job' => $job,
            'url' => $url,
        ]); 
        
        return $res;

        /* $res = (new MailMessage)
        ->subject('Licences That Will Expire Soon')  */
        /* ->theme('mail-styles') */;

        /*  $res->markdown('vendor.notifications.license-that-expire', [
            'job' => $job,
            'url' => $url,

        ]);  */

        /* $res->markdown('vendor.notifications.abc', [
            'job' => $job,
            'url' => $url,
        ]); 
        
        return $res;  */

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
