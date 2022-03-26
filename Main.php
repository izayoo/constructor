<?php

class Constructor
{
    private $sortable;

    public function __construct(array $sortable)
    {
        $this->sortable = $sortable;
        $this->median = $this->getMedian();
        $this->largestVal = $this->getLargestVal();
    }

    private function getMedian()
    {
        $array = $this->sort();
        $length = count($array);
        $medianIndex = floor($length/2);
        return $array[$medianIndex];
    }

    private function getLargestVal()
    {
        return end($this->sort());
    }

    private function sort()
    {
        $array = $this->sortable;
        sort($array);
        return $array;
    }
}

class Main
{
    public function main(array $array)
    {
        $array = new Constructor($array);
        echo "The median of the array is " . $array->median;
        echo "<br>"  . "The largest number in the array is " . $array->largestVal;
    }
}

$exec = new Main();
$exec->main([5,2,66,27,18,43,39]);
