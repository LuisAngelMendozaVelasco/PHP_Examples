<html>
    <head>
        <title>PHP Examples</title>

        <script>
            function examplesList(topic, numberExamples) {
                var txt = "";
                txt +=  '<h2>' + topic + '</h2>\n' + 
                        '<details>\n' + 
                            '<summary>Examples</summary>\n';

                for (var i = 1; i <= numberExamples; i++) {
                    txt += '<li type="square"><a href="./' + topic.replace(/\s/g, "") + '/Example_' + i + '.php">Example'+ i + '</a></li>\n';
                }

                txt += '</details>\n';
                document.getElementById(topic).innerHTML = txt;
            }
        </script>  
    </head>
    <body>  
        <h1 style="text-align: center;">PHP Examples</h1>

        <p id="PHP Syntax"></p>
        <script>examplesList('PHP Syntax', 3);</script>

        <p id="PHP Comments"></p>
        <script>examplesList('PHP Comments', 3);</script>

        <p id="PHP Variables"></p>
        <script>examplesList('PHP Variables', 6);</script>

        <p id="PHP Echo And Print"></p>
        <script>examplesList('PHP Echo And Print', 4);</script>

        <p id="PHP Data Types"></p>
        <script>examplesList('PHP Data Types', 6);</script>
     
        <p id="PHP Strings"></p>
        <script>examplesList('PHP Strings', 5);</script>

        <p id="PHP Numbers"></p>
        <script>examplesList('PHP Numbers', 6);</script>

        <p id="PHP Math"></p>
        <script>examplesList('PHP Math', 7);</script>

        <p id="PHP Constants"></p>
        <script>examplesList('PHP Constants', 4);</script>

        <p id="PHP Operators"></p>
        <script>examplesList('PHP Operators', 41);</script>

        <p id="PHP If-Else And Switch Statements"></p>
        <script>examplesList('PHP If-Else And Switch Statements', 4);</script>

        <p id="PHP While And For Loops"></p>
        <script>examplesList('PHP While And For Loops', 7);</script>

        <p id="PHP Functions"></p>
        <script>examplesList('PHP Functions', 7);</script>

        <p id="PHP Arrays"></p>
        <script>examplesList('PHP Arrays', 5);</script>

        <p id="PHP Multidimensional Arrays"></p>
        <script>examplesList('PHP Multidimensional Arrays', 2);</script>

        <p id="PHP Sorting Arrays"></p>
        <script>examplesList('PHP Sorting Arrays', 8);</script>
    </body>
</html>