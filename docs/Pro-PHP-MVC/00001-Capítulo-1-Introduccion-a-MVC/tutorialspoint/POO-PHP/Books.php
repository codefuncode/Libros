<?php
class Books
{
    /* Member variables */
    public $price;
    public $title;

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

class Novel extends Books
{
    public $publisher;

    public function setPublisher($par)
    {
        $this->publisher = $par;
    }

    public function getPublisher()
    {
        echo $this->publisher . "<br />";
    }
}

$physics   = new Books;
$maths     = new Books;
$chemistry = new Books;

$physics->setTitle("Physics for High School");
$chemistry->setTitle("Advanced Chemistry");
$maths->setTitle("Algebra");

$physics->setPrice(10);
$chemistry->setPrice(15);
$maths->setPrice(7);

$physics->getTitle();
$chemistry->getTitle();
$maths->getTitle();
$physics->getPrice();
$chemistry->getPrice();
$maths->getPrice();

// ===================================

$physics2   = new Novel;
$maths2     = new Novel;
$chemistry2 = new Novel;

$physics2->setTitle("Physics for High School");
$chemistry2->setTitle("Advanced Chemistry");
$maths2->setTitle("Algebra");

$physics2->setPrice(10);
$chemistry2->setPrice(15);
$maths2->setPrice(7);

$physics2->setPublisher("Physics2");
$chemistry2->setPublisher("Chemistry2");
$maths2->setPublisher("Maths2");

$physics2->getTitle();
$chemistry2->getTitle();
$maths2->getTitle();

$physics2->getPrice();
$chemistry2->getPrice();
$maths2->getPrice();

$physics2->getPublisher();
$chemistry2->getPublisher();
$maths2->getPublisher();
