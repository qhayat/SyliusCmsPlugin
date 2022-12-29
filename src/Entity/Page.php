<?php

namespace Qamar\SyliusCmsPlugin\Entity;

use Doctrine\ORM\Mapping\MappedSuperclass;
use Doctrine\ORM\Mapping as ORM;
use Qamar\SyliusCmsBundle\Repository\PageRepository;

/**
 * @MappedSuperclass
 * @ORM\Entity
 */
class Page implements PageInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column
     */
    private ?int $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private ?string $title;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private ?string $slug;

    /**
     * @ORM\Column(type="text", nullable=false)
     */
    private ?string $content;

    /**
     * @ORM\Column(type="boolean", nullable=false)
     */
    private ?bool $enabled;

    public function getId()
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
