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

    public function setUp() {
        parent::setUp();
    }

    public function tearDown() {
        parent::tearDown();
    }

    /**
	 * Test user insertion
	 */
	function testBasic() {

		// Replace this with some actual testing code.
        $user_id = $this->factory->user->create( array( 'user_login' => 'test', 'role' => 'administrator' ) );
        $user_id_array = $this->factory->user->create_many( 4 );

        $count = count_users()['total_users'];

        $this->go_to( '/' );
        $this->assertQueryTrue ( 'is_home', 'is_front_page' );

        $this->go_to( '/?p=123456789' );
        $this->assertQueryTrue( 'is_404' );

        global $user_ID;
        $page = array(
            'post_type' => 'page',
            'post_title' => 'test page',
            'post_content' => 'test page',
            'post_status' => 'publish',
            'post_author' => $user_ID
        );

        $pageId = wp_insert_post( $page );

        $this->go_to( '/?p='.$pageId );


        $post = get_post($pageId);
        //global $wp_query;
        //var_dump($wp_query);

        var_dump("--------------");
        var_dump(get_permalink($pageId));
        var_dump("--------------");
        var_dump($post->post_content);

        //$this->assertQueryTrue('is_single');

		$this->assertTrue( $count==6 );

	}
}
