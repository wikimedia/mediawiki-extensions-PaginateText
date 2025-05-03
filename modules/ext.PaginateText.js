( document ).ready( ( $ ) => {
	$.ready( '#paginate-text' ).textpager( {
		controlArrows: '.controls',
		controlPages: '.controls .tp-pager',
		controlPagesContent: 'li'
	}
	);
} );
