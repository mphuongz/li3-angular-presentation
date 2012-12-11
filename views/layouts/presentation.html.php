<!doctype html>
<html>
<head>
	<?=$this->html->charset(); ?>
	<title>Phuong Pham&#x27;s resume</title>
	<?=$this->html->style(array(
		'oswald',
		'reveal.js/reveal',
		'/lib/reveal.js/css/zenburn'
		// '/lib/jasmine-1.2.0/jasmine'
	)); ?>
	<?=$this->html->style('theme/resume.css?_nocache=1', array('id' => 'theme')); ?>

	<?=$this->html->script(array(
		'jquery.min'
		// 'angular.min',
		// 'angular-resource-1.0.1.min.js',
		// 'jquery-syntaxhighlighter/prettify.min',
		// 'jquery.syntaxhighlighter.min',
		// '/lib/jasmine-1.2.0/jasmine',
		// '/lib/jasmine-1.2.0/jasmine-html',
	)); ?>

	<?=$this->scripts(); ?>
	<?=$this->html->link('Icon', null, array('type' => 'icon')); ?>
</head>
<body>

	<div class="reveal">
		<?=$this->content(); ?>
	</div>

	<?=$this->html->script(array('/lib/reveal.js/js/head.min.js', 'reveal.js/reveal.js')); ?>

	<script type="text/javascript">
		Reveal.initialize({
			controls: true,
			progress: true,
			history: true,
			keyboard: true,
			rollingLinks: false,
			transition: 'default',
			
			dependencies: [
				{ src: '/lib/reveal.js/js/highlight.js', async: true, callback: function() { window.hljs.initHighlightingOnLoad(); } },
				{ src: '/lib/reveal.js/js/classList.js', condition: function() { return !document.body.classList; } },
				{ src: '/lib/reveal.js/js/showdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
				{ src: '/lib/reveal.js/js/data-markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } }
			]
		});

	</script>

</body>
</html>