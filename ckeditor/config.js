/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {

	config.skin = 'office2013';
	config.filebrowserBrowseUrl = 'http://localhost/JDN/ckeditor/plugins/fileman/index.html';
	config.filebrowserImageBrowseUrl = "http://localhost/JDN/ckeditor/plugins/fileman/index.html?type=image";
	config.removeDialogTabs = "link:upload;image:upload";
	config.toolbar = [
		{ name: 'document', items : ['Source']},
		{ name: 'clipboard'},
		{ name: 'editing'},
		{ name: 'forms' },
		{ name: 'basicstyles', items: ['Bold', 'Italic']},
		{ name: 'paragraph', items: [ 'NumberedList','BulletedList', '-', 'Outdent', 'Indent']},
		{ name: 'links', items: [ 'Link', 'Unlink', 'Anchor']},
		{ name: 'insert', items: [ 'Image', 'SpecialChar' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'tools' },
		{ name: 'others' },
		{ name: 'about', items : [ 'About' ] }
	];

	// The default plugins included in the basic setup define some buttons that
	// are not needed in a basic editor. They are removed here.
	config.removeButtons = 'Cut,Copy,Paste,Undo,Redo,Anchor,Underline,Strike,Subscript,Superscript';

	// Dialog windows are also simplified.
	config.removeDialogTabs = 'link:advanced';
};
