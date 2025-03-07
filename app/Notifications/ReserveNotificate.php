<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReserveNotificate extends Notification
{
    use Queueable;

    protected $reservation;

    /**
     * Create a new notification instance.
     */
    public function __construct($reservation)
    {
        $this->reservation = $reservation;
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

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Bonjour ' . $this->reservation->touriste->getFullNameAttribute())
            ->line('Merci pour votre réservation.')
            ->line('Voici les détails de votre réservation :')
            ->line('Référence de réservation : ' . $this->reservation->reference)
            ->line('Date de réservation : ' . $this->reservation->created_at)
            ->line('Hébergement : ' . $this->reservation->annonce->title)
            ->line('Durée : ' . $this->reservation->formatDate($this->reservation->start_date, 'F j') . ' - ' . $this->reservation->formatDate($this->reservation->end_date, 'F j') . ', 2030')
            ->line('Emplacement : ' . $this->reservation->annonce->location . ', ' . $this->reservation->annonce->Country )
            ->line('Montant payé : ' . $this->reservation->prix_totale . 'MAD')
            ->line('Merci de votre confiance !')
            // ->action('Voir votre réservation', url('/reservations/' . $this->reservation->id))
            ;
    }

    public function toOwnerMail($owner)
    {
        return (new MailMessage)
            ->greeting('Bonjour ' . $owner->getFullNameAttribute())
            ->line('Un touriste a réservé votre annonce.')
            ->line('Voici les détails de la réservation :')
            ->line('Référence de réservation : ' . $this->reservation->reference)
            ->line('Nom du touriste : ' . $this->reservation->touriste->getFullNameAttribute())
            ->line('Hébergement : ' . $this->reservation->annonce->title)
            ->line('Durée : ' . $this->reservation->formatDate($this->reservation->start_date, 'F j') . ' - ' . $this->reservation->formatDate($this->reservation->end_date, 'F j') . ', 2030')
            ->line('Emplacement : ' . $this->reservation->annonce->location . ', ' . $this->reservation->annonce->Country )
            ->line('Montant payé : ' . $this->reservation->prix_totale)
            ->line('Merci de suivre cette réservation.')
            // ->action('Voir les réservations', url('/proprietaire/reservations/' . $this->reservation->id))
            ;
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
