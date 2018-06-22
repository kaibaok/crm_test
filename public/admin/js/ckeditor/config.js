/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

	link_url = 'http://dev.crm.com/public/admin/js/ckeditor/ckfinder/';
	config.filebrowserBrowseUrl = link_url+'ckfinder.html';
	config.filebrowserImageBrowseUrl = link_url+'ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = link_url+'ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = link_url+'core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = link_url+'core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = link_url+'core/connector/php/connector.php?command=QuickUpload&type=Flash';
	config.allowedContent = true;
};
