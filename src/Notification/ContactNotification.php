<?php

namespace App\Notification;

use Twig\Environment;
use App\Entity\Contact;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

class ContactNotification {

    private MailerInterface $mailer;
    private Environment $renderer;

    public function __construct(MailerInterface $mailer, Environment $renderer)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
    }

    public function notify(Contact $contact): void {
        $email = (new Email())
            ->from('noreply@agence.fr')
            ->to('contact@agence.fr')
            ->replyTo($contact->getEmailAddress())
            ->subject('Agence : ' . $contact->getProperty()->getTitle())
            ->html($this->renderer->render('emails/contact.html.twig', [
                'contact' => $contact
            ]));
        $this->mailer->send($email);
    }
}
