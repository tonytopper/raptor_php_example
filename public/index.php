<?php
	$raptor_optimizer_output = array(
		json_decode(file_get_contents(__DIR__ . '/j/raptor_raptor-templating-html.json')), //Base Raptor JavaScript
		json_decode(file_get_contents(__DIR__ . '/j/template_test-html.json')) //Template JavaScript
	);
?>
<html>
    <head>
        <title>Raptor Testing</title>
    </head>
    <body>
        <h1>Raptor Testing</h1>
        <div id="raptor-container"></div>
        <?php foreach($raptor_optimizer_output as $script): ?>
        	<?php echo $script->body; ?>
        <?php endforeach; ?>
        <script type="text/javascript">
            var templating = require('raptor/templating');
            var data = {
                name: 'Tony',
                count: 5
            }

            document.getElementById('raptor-container').innerHTML = templating.renderToString('template_test', data);    
        </script>
    </body>
</html>