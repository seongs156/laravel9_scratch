<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
<video autoplay controls>
    <source src="{{asset('storage/media/bri.mp4')}}" type="video/mp4">
</video>
</body>
</html>
<script>
    function handleFirstPlay() {
        document.querySelector("#video").play();
    }
    handleFirstPlay();
</script>
