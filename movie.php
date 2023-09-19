<?php
class Movie
{
    public $title;
    public $kind;
    public $date;
    public $description;

    function __construct($_title, $_kind, $_date, $_description)
    {
        $this->title = $_title;
        $this->kind = $_kind;
        $this->date = $_date;
        $this->description = $_description;
    }

    public function getFullInfoMovie()
    {
        return $this->title . ' ' . $this->kind . ' ' . $this->date;
    }
}
