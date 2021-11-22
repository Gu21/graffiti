<?php

namespace App\Tests;


use App\Entity\User;
use App\Entity\Oeuvres;
use App\Entity\Categorie;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;

class OeuvresUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $oeuvre = new Oeuvres();
        $user = new User();
        $categorie = new Categorie();
        $dateTime = new DateTimeImmutable();


        $oeuvre->setNom('nom')
            ->setPays('pays')
            ->setAuteur('auteur')
            ->setDateRealisation($dateTime)
            ->setCreatedAt($dateTime)
            ->setDescription('description')
            ->setPortfolio(true)
            ->setSlug('slug')
            ->setFile('file')
            ->addCategorie($categorie)
            ->setUser($user);



        $this->assertTrue($oeuvre->getNom() === 'nom');
        $this->assertTrue($oeuvre->getPays() === 'pays');
        $this->assertTrue($oeuvre->getAuteur() === 'auteur');
        $this->assertTrue($oeuvre->getDateRealisation() === $dateTime);
        $this->assertTrue($oeuvre->getCreatedAt() === $dateTime);
        $this->assertTrue($oeuvre->getDescription() === 'description');
        $this->assertTrue($oeuvre->getPortfolio() === true);
        $this->assertTrue($oeuvre->getSlug() === 'slug');
        $this->assertTrue($oeuvre->getFile() === 'file');
        $this->assertContains($categorie, $oeuvre->getCategorie());
        $this->assertTrue($oeuvre->getUser() === $user);
    }

    public function testIsFalse()
    {
        $oeuvre = new Oeuvres();
        $user = new User();
        $categorie = new Categorie();
        $dateTime = new DateTimeImmutable();


        $oeuvre->setNom('nom')
            ->setPays('pays')
            ->setAuteur('auteur')
            ->setDateRealisation($dateTime)
            ->setCreatedAt($dateTime)
            ->setDescription('description')
            ->setPortfolio(true)
            ->setSlug('slug')
            ->setFile('file')
            ->addCategorie($categorie)
            ->setUser($user);



        $this->assertFalse($oeuvre->getNom() === 'false');
        $this->assertFalse($oeuvre->getPays() === 'false');
        $this->assertFalse($oeuvre->getAuteur() === 'false');
        $this->assertFalse($oeuvre->getDateRealisation() ===  new DateTimeImmutable());
        $this->assertFalse($oeuvre->getCreatedAt() ===  new DateTimeImmutable());
        $this->assertFalse($oeuvre->getDescription() === 'false');
        $this->assertFalse($oeuvre->getPortfolio() === false);
        $this->assertFalse($oeuvre->getSlug() === 'false');
        $this->assertFalse($oeuvre->getFile() === 'false');
        $this->assertFalse($oeuvre->getCategorie() === $categorie);
        $this->assertFalse($oeuvre->getUser() === new User());
    }

    public function testIsEmpty()
    {
        $oeuvre = new Oeuvres();


        $this->assertEmpty($oeuvre->getNom());
        $this->assertEmpty($oeuvre->getPays());
        $this->assertEmpty($oeuvre->getAuteur());
        $this->assertEmpty($oeuvre->getDateRealisation());
        $this->assertEmpty($oeuvre->getCreatedAt());
        $this->assertEmpty($oeuvre->getDescription());
        $this->assertEmpty($oeuvre->getPortfolio());
        $this->assertEmpty($oeuvre->getSlug());
        $this->assertEmpty($oeuvre->getFile());
        $this->assertEmpty($oeuvre->getCategorie());
        $this->assertEmpty($oeuvre->getUser());
    }
}
