<?php
echo "<h1>Browse All Websites</h1>";

if ($handle = opendir('.')) {

    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {
				if($entry != "images"){
            echo "<a href=$entry>$entry</a>\n <br>";
				}
        }
    }

    closedir($handle);
}

?>