<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Spa</title>
    <link rel="stylesheet" href="./css/app.css">

</head>
<body>
<div id="app">

    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <router-link to="/" class="navbar-brand">Vue-Spa</router-link>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <router-link to="about" tag="li">
                    <a>About-Page</a>
                </router-link>
            </ul>
        </div>

    </nav>
    <router-view></router-view>
</div>
<script src="./js/app.js"></script>
</body>
</html>
