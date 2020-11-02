<?php


class Student 
{
    private string $name;
    private string $email;
    private int $id;
    private int $classId;

    /**
     * Student constructor.
     * @param string $name
     * @param string $email
     * @param int $id
     * @param int $classId
     */
    public function __construct(string $name, string $email, int $id, int $classId)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
        $this->classId = $classId;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getClassId(): int
    {
        return $this->classId;
    }




}