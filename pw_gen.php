<?php

function gen_password($pwlen)
{
	$pw = ""; 
    for ($i = 0; $i < $pwlen; $i++)
    {
        $pw .= chr(rand(33, 126));
    }
	return $pw;
}
 
echo gen_password(50);

?>