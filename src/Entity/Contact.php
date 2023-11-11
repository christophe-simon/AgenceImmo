<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Contact {

    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $firstName = null;

    #[Assert\NotBlank]
    #[Assert\Length(min: 2, max: 100)]
    private ?string $lastName = null;

    #[Assert\NotBlank]
    #[Assert\Regex(pattern: "/[0-9]{10}/")]
    private ?string $phoneNumber = null;

    #[Assert\NotBlank]
    #[Assert\Email]
    private ?string $emailAddress = null;

    #[Assert\NotBlank]
    #[Assert\Length(min: 10)]
    private ?string $message = null;

    private ?Property $property = null;

    public function getFirstname(): ?string
    {
        return $this->firstName;
    }

    public function setFirstname(?string $firstName): static
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): static
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(?string $phoneNumber): static
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    public function getEmailAddress(): ?string
    {
        return $this->emailAddress;
    }

    public function setEmailAddress(?string $emailAddress): static
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): static
    {
        $this->message = $message;
        return $this;
    }

    public function getProperty(): ?Property
    {
        return $this->property;
    }

    public function setProperty(?Property $property): static
    {
        $this->property = $property;
        return $this;
    }

}