<?php 
class Five {

    public $tree = [];

    function __construct($x) {
        $this->tree[] = $this->createNode($x);
    }

    function insertNode($x) {
        $x = $this->createNode($x);
        $y = &$this->tree[0];
        while ($y) {
            if ($y[1] == $x[1])
                break;
            if ($y[1] > $x[1]) {
                if ($y[0] == null) {
                    $y[0] = $x;
                    break;
                } else {
                    $y = &$y[0];
                    continue;
                }
            } else {
                if ($y[2] == null) {
                    $y[2] = $x;
                    break;
                } else {
                    $y = &$y[2];
                    continue;
                }
            }
        }
    }

    function createNode($x) {
        return [null, $x, null];
    }

}

$five = new Five(5);
$five->insertNode(6);
$five->insertNode(4);
$five->insertNode(7);
$five->insertNode(5.5);
$five->insertNode(5.2);
$five->insertNode(5.3);
$five->insertNode(9);
$five->insertNode(10);
$five->insertNode(2);
$five->insertNode(3);

print_r($five->tree);
