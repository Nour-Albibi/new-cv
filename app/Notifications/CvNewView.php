<?php

namespace App\Notifications;

use App\Models\View;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CvNewView extends Notification implements ShouldBroadcast
{
    use Queueable;
    public $view_cv;
    public  $message;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(View $view_cv)
    {
        $this->view_cv = $view_cv;
        $this->message = __('Your CV has been viewed');
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'message' => $this->message,
            'view_cv' => $this->view_cv,
            'company_name'=>$this->view_cv->company->company_name
        ];
    }
    public function toBroadcast($notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            // 'message' => "$this->message (User $notifiable->id)"
            'message' => $this->message,
            'view_cv' => $this->view_cv,
            'company_name'=>$this->view_cv->company->company_name
        ]);
    }
}
