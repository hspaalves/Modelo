<?php
namespace App\View;

class View
{
    /**
     * @return string
     * Teste de retorno html
     */
    public function html()
    {
        return '
            <html>
            <head>
                <title>
                    JavaScript Libraries - Opinion Poll
                </title>
            </head>
            
            <body>
                <h2>JavaScript Libraries - Opinion Poll</h2>
                <p><b>What is your favorite JavaScript Library?</b></p>
                <form method="POST" action="index.php">
                    <p>
                        <input type="radio" name="vote" value="1" /> JQuery
                        <br />
                        <input type="radio" name="vote" value="2" /> MooTools
                        <br />
                        <input type="radio" name="vote" value="3" /> YUI Library
                        <br />
                        <input type="radio" name="vote" value="4" /> Glow </p>
                    <p>
                        <input type="submit" name="submitbutton" value="OK" />
                    </p>
                </form>
            </body>
            </html>
        
        ';
    }
}