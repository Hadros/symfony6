<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $word_eng = null;

    #[ORM\Column(length: 255)]
    private ?string $word_ru = null;

    #[ORM\Column(length: 1024)]
    private ?string $sentence_eng = null;

    #[ORM\Column(length: 1024)]
    private ?string $sentence_ru = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWordEng(): ?string
    {
        return $this->word_eng;
    }

    public function setWordEng(string $word_eng): self
    {
        $this->word_eng = $word_eng;

        return $this;
    }

    public function getWordRu(): ?string
    {
        return $this->word_ru;
    }

    public function setWordRu(string $word_ru): self
    {
        $this->word_ru = $word_ru;

        return $this;
    }

    public function getSentenceEng(): ?string
    {
        return $this->sentence_eng;
    }

    public function setSentenceEng(string $sentence_eng): self
    {
        $this->sentence_eng = $sentence_eng;

        return $this;
    }

    public function getSentenceRu(): ?string
    {
        return $this->sentence_ru;
    }

    public function setSentenceRu(string $sentence_ru): self
    {
        $this->sentence_ru = $sentence_ru;

        return $this;
    }
}
