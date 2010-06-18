<?php

// open this directory
$myDirectory = opendir(".");

// get each entry
while($entryName = readdir($myDirectory)) {
        $dirArray[] = $entryName;
}

// close directory
closedir($myDirectory);

//      count elements in array
$indexCount     = count($dirArray);

// sort 'em
sort($dirArray);

// print 'em
print("<TABLE border=0 cellpadding=5 cellspacing=0 class=whitelinks>\n");
print("<TR><TH>Önceki yıllarda yapılan  şenliklerimiz</TH></TR>\n");
// loop through the array of files and print them all
for($index=0; $index < $indexCount; $index++) {
        if (substr("$dirArray[$index]", 0, 1) != "."){ // don't list hidden files

                $dosyaTuru =  filetype($dirArray[$index]);
                if($dosyaTuru == "file") continue;
		if($dirArray[$index]=="images" || $dirArray[$index]=="stats") continue;


                print("<TR><TD><a href=\"$dirArray[$index]\">$dirArray[$index]</a></td>");
                print("<TR><TD><a href=\"$dirArray[$index]\"><img src=\"images/banners/{$dirArray[$index]}.gif\" border=\"0\"/></a></td>");
                print("</TR>\n");

        }
}
print("</TABLE>\n");

?>

