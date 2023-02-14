<h1>
    {{$username}}
    <br>
    ----------------------------------------------------
</h1>

<?php

if ($username == "Ahmed E") {
    echo 'admin';
} else {
    echo 'user';
}

?>

<br>
<br>
<br>


<!--
    using Blade system
-->
@if($username=="Ahmed E")
Admin
@else
user
@endif