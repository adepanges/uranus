<?php

// HEADER SECTOIN
echo $_header;

// CONTENT SECTOIN
if(is_array($_content))
{
    foreach ($_content as $c)
    {
        echo $c;
    }
}
else
{
    echo $_content;
}

// FOOTER SECTOIN
echo $_footer;
?>
