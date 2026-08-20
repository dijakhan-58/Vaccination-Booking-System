<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentNotify extends Notification
{
    use Queueable;


    public function __construct(public $booking) {}

    public function via(object $notifiable): array
    {
        return ["database"];
    }


    public function toDatabase($notifiable)
    {
        return [
            "booking_id" => $this->booking->id,
            "status" => $this->booking->status,
            "message" => "you appointment is booked and your appointment will be" . $this->booking->status
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
