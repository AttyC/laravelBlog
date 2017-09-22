<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <title></title>
</head>
<body>
   <!--  <ul>
        @foreach($tasks as $task)
    <li>
        {{ $task }}
    </li>
    @endforeach
</ul> -->

<?php foreach ($tasks as $task) : ?>

    <li><?= $task; ?></li>

<?php endforeach ?>



</body>
</html>