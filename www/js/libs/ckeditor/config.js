/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';


    //config.filebrowserBrowseUrl = 'http://' + document.domain + '/cabinet/browse_image';
    //config.filebrowserUploadUrl = 'http://' + document.domain ;

    config.filebrowserBrowseUrl = 'http://' + document.domain + '/js/fmanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=';
    config.filebrowserUploadUrl = 'http://' + document.domain + '/js/fmanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=';
    config.filebrowserImageBrowseUrl = 'http://' + document.domain + '/js/fmanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=';
};
