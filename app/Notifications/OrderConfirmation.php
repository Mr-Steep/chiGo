<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\URL;

class OrderConfirmation extends Notification
{
    use Queueable;
    protected $order;

    public function __construct($order)
    {
        $this->order = $order;
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
    {    $order = $this->order;

        $url = URL::temporarySignedRoute(
            'confirm_order',
            now()->addMinutes(30),
            ['order' => $order->id]
        );
        return (new MailMessage)
            ->subject('Подтверждение заказа')
            ->line('Пожалуйста, подтвердите ваш заказ.')
            ->action('Подтвердить заказ',$url)
            ->line('Спасибо за покупку!');
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
