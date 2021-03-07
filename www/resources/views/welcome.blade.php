<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Example Laravel Service Pattern</title>
    </head>
    <body>
        @php echo "<pre>" @endphp
            @php print_r(json_decode($distritos))  @endphp
        @php echo "</pre>" @endphp
    </body>
</html>
