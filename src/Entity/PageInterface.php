<?php

namespace Qamar\SyliusCmsPlugin\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

interface PageInterface extends ResourceInterface
{
    public function getTitle(): ?string;

    public function setTitle(?string $title): self;

    public function getSlug(): ?string;

    public function setSlug(?string $slug): self;

    public function getContent(): ?string;

    public function setContent(?string $content): self;

    public function getEnabled(): ?bool;

    public function setEnabled(?bool $enabled): self;
}
