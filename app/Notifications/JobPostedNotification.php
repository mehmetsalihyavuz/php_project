<?php

namespace App\Notifications;

use App\Models\Phones\SmartPhone;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Collection;
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
    /* public function __construct(Job $job)
    {
        $this->job = $job;
    } */

    public function __construct(Collection $job)
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
        
        /* $res = (new MailMessage)
        ->subject('Licences That Expire Table') 
        ->theme('table-styles');

        $res->markdown('vendor.notifications.may11', [
            'job' => $job,
            'url' => $url,
        ]); 
        
        return $res; */


         // Licenses That Expire Blue Table

        
        /* $res = (new MailMessage)
        ->subject('Licences That Expire Table') 
        ->theme('blue-table-styles');

        $res->markdown('vendor.notifications.may12', [
            'job' => $job,
            'url' => $url,
        ]); 
        
        return $res; */


        //7 Gün İçinde Sertifikası Sona Erecek Internal Sertifikalar

       /*  $res = (new MailMessage)
        ->subject('Licenses That Expire Table')
        ->theme('licensetable-styles');
        
        $res->markdown('vendor.notifications.deneme2', [
            'job' => $job,
        ]); 
        
        return $res; */


        // Certificate Manager Table

        $res = (new MailMessage)
        ->subject('CM Table')
        ->theme('certificatemanager-styles');
        
        $res->markdown('vendor.notifications.certificatemanager', [
            'job' => $job,
        ]); 
        
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
