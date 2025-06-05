<?php

namespace App\Entity;

use App\Repository\CalendarRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CalendarRepository::class)]
class Calendar
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $entryId = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTime $date = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTime $time = null;

    #[ORM\Column(length: 255)]
    private ?string $MeetingTitle = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEntryId(): ?int
    {
        return $this->entryId;
    }

    public function setEntryId(int $entryId): static
    {
        $this->entryId = $entryId;

        return $this;
    }

    public function getDate(): ?\DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): static
    {
        $this->date = $date;

        return $this;
    }

    public function getTime(): ?\DateTime
    {
        return $this->time;
    }

    public function setTime(\DateTime $time): static
    {
        $this->time = $time;

        return $this;
    }

    public function getMeetingTitle(): ?string
    {
        return $this->MeetingTitle;
    }

    public function setMeetingTitle(string $MeetingTitle): static
    {
        $this->MeetingTitle = $MeetingTitle;

        return $this;
    }
}
