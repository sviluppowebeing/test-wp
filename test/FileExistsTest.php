<?php
use PHPUnit\Framework\TestCase;

class FileExistsTest extends TestCase
{
    public function testFileExists()
    {
        $this->assertFileExists('web/wp/wp-content/themes/moesia/footer.php');
    }
}
?>