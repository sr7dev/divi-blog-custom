<?php

class EHBL_HelloWorld extends ET_Builder_Module {

	public $slug       = 'ehbl_hello_world';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => '',
		'author'     => 'Bojana',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Hello World', 'ehbl-ehq-blog' );
	}

	public function get_fields() {
		return array(
			'content' => array(
				'label'           => esc_html__( 'Content', 'ehbl-ehq-blog' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'ehbl-ehq-blog' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new EHBL_HelloWorld;
