<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File as FileFile;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;


/**
 * @ORM\Entity(repositoryClass="App\Repository\PictureRepository")
 * @Vich\Uploadable()
 */
class Picture
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var FileFile
     * @Assert\Image(
     *  mimeTypes="image/jpeg"
     * )
     * @Vich\UploadableField(mapping="property_image", fileNameProperty="filename")
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Property", inversedBy="pictures")
     * @ORM\JoinColumn(nullable=false)
     */
    private $property;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(?string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getProperty(): ?Property
    {
        return $this->property;
    }

    public function setProperty(?Property $property): self
    {
        $this->property = $property;

        return $this;
    }

    /**
     * @return null|FileFile
     */
    public function getImageFile(): ?FileFile
    {
        return $this->imageFile;
    }

    /**
     * @param null|FileFile $imageFile
     * @return Property
     */
    public function setImageFile(?FileFile $imageFile): self
    {
        $this->imageFile = $imageFile;
        // if ($this->imageFile instanceof UploadedFile) {
        //     $this->updated_at = new \DateTime('now');
        // }
        return $this;
    }
}
