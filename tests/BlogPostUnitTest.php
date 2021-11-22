<?php

namespace App\Tests;

use App\Entity\BlogPosts;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class BlogPostUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $blogpost = new BlogPosts();
        $dateTime = new DateTimeImmutable();

        $blogpost->setTitre('titre')
            ->setContenu('contenu')
            ->setImage('image')
            ->setSlug('slug')
            ->setCreatedAt($dateTime);


        $this->assertTrue($blogpost->getTitre() === 'titre');
        $this->assertTrue($blogpost->getContenu() === 'contenu');
        $this->assertTrue($blogpost->getImage() === 'image');
        $this->assertTrue($blogpost->getSlug() === 'slug');
        $this->assertTrue($blogpost->getCreatedAt() === $dateTime);
    }


    public function testIsFalse()
    {
        $blogpost = new BlogPosts();
        $dateTime = new DateTimeImmutable();

        $blogpost->setTitre('titre')
            ->setContenu('contenu')
            ->setImage('image')
            ->setSlug('slug')
            ->setCreatedAt($dateTime);


        $this->assertFalse($blogpost->getTitre() === 'false');
        $this->assertFalse($blogpost->getContenu() === 'false');
        $this->assertFalse($blogpost->getImage() === 'false');
        $this->assertFalse($blogpost->getSlug() === 'false');
        $this->assertFalse($blogpost->getImage() === new DateTimeImmutable());
    }

    public function testIsEmpty()
    {
        $blogpost = new BlogPosts();


        $this->assertEmpty($blogpost->getTitre());
        $this->assertEmpty($blogpost->getContenu());
        $this->assertEmpty($blogpost->getImage());
        $this->assertEmpty($blogpost->getSlug());
        $this->assertEmpty($blogpost->getImage());
    }
}
