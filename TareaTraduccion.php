<?php

// Stack

// LIFO y FIFO
// LIFO ---> Last In First Out -> X
// FIFO ---> First In First Out

//------------------------------ Stack ------------------------------\\

$stack = array("1","2");

function add($value) {
    global $stack;
    array_push($stack, $value);
    print_r($stack);
}

function destroy() {
    global $stack;
    array_pop($stack);
    print_r($stack);
}
echo "========== Normal Stack ==========\n";
print_r($stack);

echo "========== Stack after 'add' function ==========\n";
print_r(add(3));

echo "========== Stack after 'Destroy' function ==========\n";
print_r(destroy());



class Stack {
    public $array = array();

    public function __construct($data) {
        $this->array = $data;
    }

    public function add($value) {
        array_push($this->array, $value);
        print_r($this->array);
    }

    public function destroy() {
        array_pop($this->array);
        print_r($this->array);
    }

}

echo "========== Stack in a Class, after the 'add' function ==========\n";
$array1 = new Stack(array("A", "B", "C"));
$array1->add("D");

echo "========== Stack in a Class, after the 'destroy' function ==========\n";
$array2 = new Stack(array("A", "B", "C"));
$array2->destroy();

//------------------------------ QUEUE ------------------------------\\

class Queue {
    public $array = array();

    public function __construct($data) {
        $this->array = $data;
    }

    public function add($value) {
        array_push($this->array, $value);
        print_r($this->array);
    }

    public function shift() {
        array_shift($this->array);
        print_r($this->array);
    }

    public function size() {
        count($this->array);
        print_r($this->array);
    }

}

echo "========== Queue in a Class, after 'add' function ==========\n";
$array3 = new Queue(array("Z", "Y", "X"));
$array3->add("W");

echo "========== Queue in a Class, after 'shift' function ==========\n";
$array4 = new Queue(array("Z", "Y", "X"));
$array4->shift();

echo "========== Queue in a Class, after the 'size' function ==========\n";
$array5 = new Queue(array("Z", "Y", "X"));
$array5->size();

?>