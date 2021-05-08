<?php
class Books
{
    /* Member variables */
    public $price;
    public $title;

    public function __construct($par1, $par2)
    {
        $this->title = $par1;
        $this->price = $par2;
    }

    /* Member functions */
    public function setPrice($par)
    {
        $this->price = $par;
    }

    public function getPrice()
    {
        echo $this->price . "<br/>";
    }

    public function setTitle($par)
    {
        $this->title = $par;
    }

    public function getTitle()
    {
        echo $this->title . " <br/>";
    }
}
$physics   = new Books("Physics for High School", 10);
$maths     = new Books("Advanced Chemistry", 15);
$chemistry = new Books("Algebra", 7);

/* Get those set values */
$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();

$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();
