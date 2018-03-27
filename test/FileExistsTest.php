<?php
use PHPUnit\Framework\TestCase;

class FileExistsTest extends TestCase
{
    public function testFileExists()
    {
        $this->assertFileExists('/wp/wp-content/themes/moesia/footer.php');
    }
}
?>