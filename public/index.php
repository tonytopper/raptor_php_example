<?php
	$raptor_optimizer_output = json_decode(file_get_contents(__DIR__ . '/j/template_test-html.json'));
?>
<html>
    <head>
        <title>Raptor Testing</title>
    </head>
    <body>
        <h1>Raptor Testing</h1>
        <div id="raptor-container"></div>
        <?php echo $raptor_optimizer_output->body; ?>
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