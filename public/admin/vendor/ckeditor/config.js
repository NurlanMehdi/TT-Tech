/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// config.enterMode = CKEDITOR.ENTER_DIV;
	// config.shiftEnterMode = CKEDITOR.ENTER_BR;
	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		{ name: 'about', groups: [ 'about' ] }
	];
	config.format_tags = 'p;h2;h3;pre;div';

	CKEDITOR.dtd.$editable.span = 1;
	CKEDITOR.dtd.$editable.a = 1;

	config.plugins = 'dialogui,dialog,about,a11yhelp,dialogadvtab,basicstyles,bidi,blockquote,notification,button,toolbar,clipboard,panelbutton,panel,floatpanel,colorbutton,colordialog,templates,menu,contextmenu,copyformatting,div,editorplaceholder,resize,elementspath,enterkey,entities,exportpdf,popup,filetools,filebrowser,find,fakeobjects,flash,floatingspace,listblock,richcombo,font,forms,format,horizontalrule,htmlwriter,iframe,wysiwygarea,image,indent,indentblock,indentlist,smiley,justify,menubutton,language,link,list,liststyle,magicline,maximize,newpage,pagebreak,pastetext,xml,ajax,pastetools,pastefromgdocs,pastefromlibreoffice,pastefromword,preview,print,removeformat,save,selectall,showblocks,showborders,sourcearea,specialchar,scayt,stylescombo,tab,table,tabletools,tableselection,undo,lineutils,widgetselection,widget,notificationaggregator,uploadwidget,uploadimage';
	config.skin = 'office2013';
	config.uiColor = '#f00000';
	config.height = 'calc(100vh - 200px)';
	config.resize_minHeight = 300;
	config.removePlugins = 'resize';
	config.resize_enabled = false;
	config.extraPlugins = 'video, extraformattributes, label, html5video';
	config.language = 'az';
	config.defaultLanguage = 'az';
	config.templates_replaceContent = false;

	// config.removeButtons = 'Styles,Format,Font,FontSize,TextColor,BGColor,About,Flash,HorizontalRule,Smiley,Language,CopyFormatting,RemoveFormat,Bold,Italic,Underline,Strike,Subscript,Superscript,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField';
	config.contentsCss = ['/views/css/main.css', 'assets/css/fonts.css', 'assets/vendor/bootstrap/css/bootstrap.css'];
	config.font_names ="Segoe UI" + config.font_names;
};
