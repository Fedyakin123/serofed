/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';

    // Собственноручно написанные загрузчики
    //config.filebrowserBrowseUrl = 'http://' + document.domain + '/cabinet/browse_image';
    //config.filebrowserUploadUrl = 'http://' + document.domain ;

    //config.skin = 'office2013';

    config.filebrowserBrowseUrl = 'http://' + document.domain + '/js/fmanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=';
    config.filebrowserUploadUrl = 'http://' + document.domain + '/js/fmanager/filemanager/dialog.php?type=2&editor=ckeditor&fldr=';
    config.filebrowserImageBrowseUrl = 'http://' + document.domain + '/js/fmanager/filemanager/dialog.php?type=1&editor=ckeditor&fldr=';

    config.removePlugins = 'elementspath';

    config.toolbar = 'MyConf';
    config.toolbar_MyConf =
        [
            //{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
            { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
            { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
            //{ name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
            //'/',
            { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
            { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote'/*,'CreateDiv'*/,'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
            { name: 'links', items : [ 'Link','Unlink'/*,'Anchor'*/ ] },
            { name: 'insert', items : [ 'Image'/*,'Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' */] },
            //'/',
            { name: 'styles', items : [ /*'Styles','Format',*/'Font','FontSize' ] },
            //{ name: 'colors', items : [ 'TextColor','BGColor' ] },
            { name: 'tools', items : [ 'Maximize'/*, 'ShowBlocks','-','About' */] }
        ];


    // ПОЛНАЯ ВЕРСИЯ КНОПОК
    //config.toolbar_MyConf =
    //    [
    //        { name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },
    //        { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
    //        { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
    //        { name: 'forms', items : [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] },
    //        '/',
    //        { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
    //        { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
    //        { name: 'links', items : [ 'Link','Unlink','Anchor' ] },
    //        { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak' ] },
    //        '/',
    //        { name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
    //        { name: 'colors', items : [ 'TextColor','BGColor' ] },
    //        { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] }
    //    ];

    //ЭКСТРА ЛЕГКАЯ ВЕРСИЯ
    //config.toolbar_MyConf =
    //[
    //    { name: 'document', items : [ 'Undo','Redo'] },
    //    { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Subscript','Superscript','Format' ] },
    //    { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock' ] },
    //    { name: 'links', items : [ 'Link','Unlink' ] },
    //    { name: 'insert', items : [ 'Image','Table','SpecialChar' ] },
    //    { name: 'tools', items : [ 'Maximize','Source'] }
    //];
};
CKEDITOR.on( 'dialogDefinition', function( ev ){
    var dialogName = ev.data.name;
    var dialogDefinition = ev.data.definition;
    if ( dialogName == 'link' ){dialogDefinition.removeContents( 'advanced' );dialogDefinition.removeContents( 'target' );dialogDefinition.removeContents( 'Upload' );}
    if ( dialogName == 'image' ){dialogDefinition.removeContents( 'advanced' );dialogDefinition.removeContents( 'Link' );dialogDefinition.removeContents( 'Upload' );}
});