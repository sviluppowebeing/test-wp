<?php
/**
 * Class SampleTest
 *
 * @package Moesia
 */

/**
 * Sample test case.
 */
class SampleTest extends WP_UnitTestCase {

	/**
	 * A single example test.
	 */
	function testBasic() {
		// Replace this with some actual testing code.
        $user_id = $this->factory->user->create( array( 'user_login' => 'test', 'role' => 'administrator' ) );
        $user_id_array = $this->factory->user->create_many( 4 );

		$this->assertTrue( true );
	}
}
