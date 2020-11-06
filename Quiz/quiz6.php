<?php
/**
 * q6.txt
 *
 * Quiz 6 Objects!
 *
 * @category    OOP
 * @package     Quiz 6
 * @author      YOUR NAME <YOUREMAIL@hfcc.edu>
 * @version     2020.11.05
 * @grade
 */

// 1. (4pts) Define a simple class called Order.
// Your class should have a standard construct function, but it doesn't need to do anything yet.
// It should also have at least 3 private properties, one being order_id
class order {
    private $order_id;
    private $phone;
    private $name;

    function __construct()
    {
        $this->order_id = '';
        $this->phone = '';
        $this->name = '';
    }



// 2. (4pts) Add a get and set function for one of your classes properties above (any one is fine, order_id recommended).
// Hint: A get function returns a property, a set function saves data into it.
    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrderId($order_id)
    {
        $this->order_id = $order_id;
    }


}

// 3. (2pt) In a $myTransaction variable, create an instance of the class you created above.
    $order = new order();
    $myTransaction = new $order();

// B. (1pt) Explain how someone could use an object like this.
// Could you use something like this in your project?
//yes we can use it for the login page.