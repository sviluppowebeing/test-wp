<?php
use PHPUnit\Framework\TestCase;

use PHPUnit\Framework\PHPUnit_Framework_ExpectationFailedException;

class FileExistsTest extends TestCase
{
    public function testFilesExists()
    {
        $this->assertFileExists('web/app/themes/moesia/footer.php');
    }

    public function testMustBeTrue()
    {
        $this->assertTrue(true);
    }

    

}

?>