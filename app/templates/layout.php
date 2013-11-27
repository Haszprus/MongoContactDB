<!DOCTYPE html>
<html id="<?=$layoutId?>" data-controller="<?=$controllerName?>">
<head>
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/class.js"></script>
    <script type="text/javascript" src="js/js.js"></script>
    <?php App::getJavascripts() ?>
    <title></title>
</head>

<body>


<div id="container">

    <header>
        <h1><a href='.'>mongo contact db</a></h1>

        <ul id="notifications">
            <li><a href="?r=fields">Fields</a>
            <li><a href="?r=contacts">Contacts</a>
        </ul>
        <div class="clear"></div>
    </header>

    <div id="content">

        <?=$content?>
    </div>

    <footer>
        mongo contact db 2012 | <a href="http://blog.haszprus.hu">Haszprus</a>
    </footer>


</div>

</body>
</html>