<?php

namespace App\Entity;

use App\Repository\SoumissionRessourceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass="App\Repository\SoumissionRessourceRepository")
*/
class Ressource
{
/**
* @ORM\Id()
* @ORM\GeneratedValue()
* @ORM\Column(type="integer")
*/
private $id;
/**
* @ORM\Column(type="string", length=255)
*/
private $nom_ressource;
/**
* @ORM\Column(type="string", length=255)
*/
private $categorie_ressource;
/**
* @ORM\Column(type="string", length=255)
*/
private $lien_ressource;
/**
* @ORM\Column(type="string", length=255)
*/
private $description_ressource;
/**
* @ORM\Column(type="string", length=800)
*/
private $contenu_ressource;