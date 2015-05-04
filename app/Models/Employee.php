<?php
namespace App\Models;

class Employee implements \JsonSerializable
{
    protected $firstName;
    protected $lastName;
    protected $name;
    protected $title;

    public function __construct($firstName, $lastName, $title = '')
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->computeName();
        $this->setTitle($title);
    }

    public function jsonSerialize()
    {
        return array(
            'name' => $this->name,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'title' => $this->title,
        );
    }

    public function setTitle($title = '')
    {
        if (empty($title)) {
            $title = null;
        }

        $this->title = $title;
    }

    protected function computeName()
    {
        $name = array_filter(array($this->firstName, $this->lastName));
        $this->name = implode(' ', $name);
    }
}
