<?php

namespace Qamar\SyliusCmsPlugin\EventListener;

use Qamar\SyliusCmsPlugin\Entity\Page;
use Symfony\Component\String\Slugger\SluggerInterface;

class PageSlugFormater
{
    public function __construct(private SluggerInterface $slugger)
    {
    }

    public function preFlush(Page $page): void
    {
        $slug = strtolower($this->slugger->slug($page->getTitle()));
        $page->setSlug($slug);
        $page->setEnabled(true);
    }
}
