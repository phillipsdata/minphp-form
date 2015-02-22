<?php
namespace minphp\Form;

use \PHPUnit_Framework_TestCase;

/**
 * @coversDefaultClass \minphp\Form\Form
 */
class FormTest extends PHPUnit_Framework_TestCase
{
    public function testConstruct()
    {
        $this->assertInstanceOf('\minphp\Form\Form', new Form());
    }
}
