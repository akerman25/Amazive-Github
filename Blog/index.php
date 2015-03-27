<html>
    <head>
        <title>Amazive - Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="blog.css">
        <link rel="stylesheet" media="(max-width: 1000px)" href="blog-responsive.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
</html>

<body>
    
    <!-- header-->
    <div id="header">
        <h2 style="color: #e5e5e5;float: right; text-align: right; margin-right: 10px;">BLOG</h2>
        <a href="http://www.amazive.com"><div id="header-go-back"><h4 style="color: #fff;">Back to Amazive</h4></div></a>
    </div>
    
    <div class="wrap"> 
        <!-- Load articles -->
        <?php include('load-articles.php'); ?>
    </div>
</body>