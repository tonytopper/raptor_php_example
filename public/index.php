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
            var html = templating.renderToString(
                'template_test', 
                {
                    name: 'Tony',
                    count: 5
                });
            
            // Without jQuery
            document.getElementById('raptor-container').innerHTML = html;    
        </script>
    </body>
</html>