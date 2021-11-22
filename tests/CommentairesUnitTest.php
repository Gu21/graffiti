<?php

namespace App\Tests;

use App\Entity\BlogPosts;
use App\Entity\Commentaires;
use App\Entity\Oeuvres;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class CommentairesUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $commentaire = new Commentaires();
        $oeuvre = new Oeuvres();
        $blogpost = new BlogPosts();
        $dateTime = new DateTimeImmutable();


        $commentaire->setAuteur('auteur')
            ->setEmail('true@test.com')
            ->setContenu('contenu')
            ->setCreatedAt($dateTime)
            ->setBlogPost($blogpost)
            ->setOeuvre($oeuvre);





        $this->assertTrue($commentaire->getAuteur() === 'auteur');
        $this->assertTrue($commentaire->getEmail() === 'true@test.com');
        $this->assertTrue($commentaire->getContenu() === 'contenu');
        $this->assertTrue($commentaire->getCreatedAt() === $dateTime);
        $this->assertTrue($commentaire->getBlogPost() === $blogpost);
        $this->assertTrue($commentaire->getOeuvre() === $oeuvre);
    }

    public function testIsFalse()
    {
        $commentaire = new Commentaires();
        $oeuvre = new Oeuvres();
        $blogpost = new BlogPosts();
        $dateTime = new DateTimeImmutable();



        $commentaire->setAuteur('auteur')
            ->setEmail('true@test.com')
            ->setContenu('contenu')
            ->setCreatedAt($dateTime)
            ->setBlogPost($blogpost)
            ->setOeuvre($oeuvre);




        $this->assertFalse($commentaire->getAuteur() === 'false');
        $this->assertFalse($commentaire->getEmail() === 'false@test.com');
        $this->assertFalse($commentaire->getContenu() === 'false');
        $this->assertFalse($commentaire->getCreatedAt() === new DateTimeImmutable());
        $this->assertFalse($commentaire->getBlogPost() === new BlogPosts());
        $this->assertFalse($commentaire->getOeuvre() === new Oeuvres());
    }

    public function testIsEmpty()
    {
        $commentaire = new Commentaires();


        $this->assertEmpty($commentaire->getAuteur());
        $this->assertEmpty($commentaire->getEmail());
        $this->assertEmpty($commentaire->getContenu());
        $this->assertEmpty($commentaire->getCreatedAt());
        $this->assertEmpty($commentaire->getBlogPost());
        $this->assertEmpty($commentaire->getOeuvre());
    }
}
