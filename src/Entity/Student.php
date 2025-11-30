<?php

namespace App\Entity;

use App\Enum\Gender;
use App\Enum\Religion;
use App\Enum\StudentStatus;
use App\Repository\StudentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StudentRepository::class)]
class Student
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 30)]
    private ?string $firstName = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $middleName = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $lastName = null;

    #[ORM\Column(enumType: Gender::class)]
    private ?Gender $gender = null;

    #[ORM\Column(length: 10)]
    private ?string $nisn = null;

    #[ORM\Column(length: 5)]
    private ?string $nis = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $birthPlace = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTime $birthDate = null;

    #[ORM\Column(enumType: Religion::class)]
    private ?Religion $religion = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $address = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $fatherName = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $motherName = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $mobile = null;

    #[ORM\Column(length: 15, nullable: true)]
    private ?string $parentMobile = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $email = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $parentEmail = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $fatherJob = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $motherJob = null;

    #[ORM\Column(length: 20, nullable: true)]
    private ?string $parentIncome = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $photo = null;

    #[ORM\Column(enumType: StudentStatus::class)]
    private ?StudentStatus $status = null;

    #[ORM\OneToOne(inversedBy: 'student', cascade: ['persist', 'remove'])]
    private ?User $userId = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    public function setMiddleName(?string $middleName): static
    {
        $this->middleName = $middleName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getGender(): ?Gender
    {
        return $this->gender;
    }

    public function setGender(Gender $gender): static
    {
        $this->gender = $gender;

        return $this;
    }

    public function getNisn(): ?string
    {
        return $this->nisn;
    }

    public function setNisn(string $nisn): static
    {
        $this->nisn = $nisn;

        return $this;
    }

    public function getNis(): ?string
    {
        return $this->nis;
    }

    public function setNis(string $nis): static
    {
        $this->nis = $nis;

        return $this;
    }

    public function getBirthPlace(): ?string
    {
        return $this->birthPlace;
    }

    public function setBirthPlace(string $birthPlace): static
    {
        $this->birthPlace = $birthPlace;

        return $this;
    }

    public function getBirthDate(): ?\DateTime
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTime $birthDate): static
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    public function getReligion(): ?Religion
    {
        return $this->religion;
    }

    public function setReligion(Religion $religion): static
    {
        $this->religion = $religion;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getFatherName(): ?string
    {
        return $this->fatherName;
    }

    public function setFatherName(string $fatherName): static
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    public function getMotherName(): ?string
    {
        return $this->motherName;
    }

    public function setMotherName(?string $motherName): static
    {
        $this->motherName = $motherName;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): static
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getParentMobile(): ?string
    {
        return $this->parentMobile;
    }

    public function setParentMobile(?string $parentMobile): static
    {
        $this->parentMobile = $parentMobile;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }

    public function getParentEmail(): ?string
    {
        return $this->parentEmail;
    }

    public function setParentEmail(?string $parentEmail): static
    {
        $this->parentEmail = $parentEmail;

        return $this;
    }

    public function getFatherJob(): ?string
    {
        return $this->fatherJob;
    }

    public function setFatherJob(?string $fatherJob): static
    {
        $this->fatherJob = $fatherJob;

        return $this;
    }

    public function getMotherJob(): ?string
    {
        return $this->motherJob;
    }

    public function setMotherJob(?string $motherJob): static
    {
        $this->motherJob = $motherJob;

        return $this;
    }

    public function getParentIncome(): ?string
    {
        return $this->parentIncome;
    }

    public function setParentIncome(?string $parentIncome): static
    {
        $this->parentIncome = $parentIncome;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): static
    {
        $this->photo = $photo;

        return $this;
    }

    public function getStatus(): ?StudentStatus
    {
        return $this->status;
    }

    public function setStatus(StudentStatus $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->userId;
    }

    public function setUserId(?User $userId): static
    {
        $this->userId = $userId;

        return $this;
    }
}
