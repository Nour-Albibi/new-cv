<?php

namespace App\Notifications;

use App\Models\LiveChatMessage;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCompanyMessage extends Notification implements ShouldBroadcast
{
//    use Queueable;
    public $company_message;
    public string $message;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(LiveChatMessage $message)
    {
        $this->company_message=$message;
        $this->message = __('You have a new message from company '.$this->company_message->companyList->company_name);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
//        return ['mail'];
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
            'message'=>$this->message,
            'company_message'=>$this->company_message
        ];
    }
    public function toBroadcast($notifiable): BroadcastMessage
    {
        return new BroadcastMessage([
            // 'message' => "$this->message (User $notifiable->id)"
            'message' => $this->message,
            'company_message' => $this->company_message,
        ]);
    }
}
