<?php
for ($i = 1; $i <= 10; $i++) {
    echo "$i<br>";
}

//foreach loop ----------------

$programmingLanguages=['PHP', 'JavaScript', 'Java', 'C#', 'C++', 'Perl'];
foreach ($programmingLanguages as $key => $language) {
    echo $key.'. '."$language<br>";
}