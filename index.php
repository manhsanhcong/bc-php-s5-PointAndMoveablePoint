<!DOCTYPE html>
<html>
<body>
<?php
   class Point
   {
       public $x;
       public $y;
       public function __construct($x, $y)
       {
           $this->x = $x;
           $this->y = $y;
       }
       public function getX()
       {
           return $this->x;
       }
       public function getY()
       {
           return $this->y;
       }
       public function setX()
       {
           return $this->x;
       }
       public function setY()
       {
           return $this->y;
       }
       public function getXY()
       {
           return [$this->x, $this->y];
       }
       public function setXY()
       {
           $this->x;
           $this->y;
       }
       public function toString()
       {
           echo $this->x . '</br>' . $this->y;
       }
   }

   class MovablePoint extends Point
   {
       public $xSpeed;
       public $ySpeed;
       public function __construct($x, $y, $xSpeed, $ySpeed)
       {
           parent::__construct($x, $y);
           $this->xSpeed = $xSpeed;
           $this->ySpeed = $ySpeed;
       }
       public function getXSpeed()
       {
           return $this->xSpeed;
       }
       public function getYSpeed()
       {
           return $this->ySpeed;
       }
       public function setXSpeed()
       {
           $this->xSpeed;
       }
       public function setYSpeed()
       {
           $this->ySpeed;
       }
       public function getSpeed()
       {
           return [$this->xSpeed, $this->ySpeed];
       }
       public function setSpeed()
       {
           $this->xSpeed;
           $this->ySpeed;
       }
       public function toString()
       {
           echo $this->x . '</br>' . $this->y . '</br>' . $this->xSpeed . '</br>' . $this->ySpeed;
       }

       public function move()
       {
           $this->x += $this->xSpeed;
           $this->y += $this->ySpeed;
           return [$this->x, $this->y];
       }
   }
$point = new Point(6,9);
$point->toString()."</br>";
$movablePoint = new MovablePoint(4,9,4,21);
$movablePoint->toString()."</br>";
$movablePoint->move();
?>
</body>
</html>