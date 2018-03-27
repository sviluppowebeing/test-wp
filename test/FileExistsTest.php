<?php
use PHPUnit\Framework\TestCase;

class FileExistsTest extends TestCase
{
    public function testFileExists()
    {
        $this->assertFileExists('web/app/themes/moesia/footer.php');
    }
}
?>