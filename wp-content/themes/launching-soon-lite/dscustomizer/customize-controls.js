( function( api ) {

	// Extends our custom "section-pro" section.
	api.sectionConstructor['launching-soon-lite-section-pro'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
