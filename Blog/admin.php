<head>
    <title>Admin</title>
    <link rel="stylesheet" href="blog.css">
    <link rel="stylesheet" href="blog-responsive.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
<div id="write-article-container">
                <div id="article-header-container">
                    <h2 style="color: #fff; width: 50%; float: left;">WRITE ARTICLE</h2>
                    <div id="write-article-cross" onclick="hideWriteArticle();"></div>
                </div>
            
                <form method="post" action="upload-articles.php" enctype="multipart/form-data">
                    <div id="write-container">
                        <textarea class="textareaStyle" id="contentData" name="content" placeholder="Write and publish an article about this subject." maxlength="10000" required></textarea>
                    </div>
                    <div id="article-settings-container">
                        <input class="inputStyle-header" type="text" id="magazine_header" name="magazine_header" placeholder="Article Header"required>
                        <input class="inputStyle-tag" type="text" id="author" name="author" placeholder="Author"required>
                        <input class="magazine" type="hidden" id="magazine" name="magazine" value="sailing" readonly="readonly">
                        <h3 style="color: #333; margin-top: 130px; width: 100%; text-align: center;" >Upload Article Image:</h3>
                        <h5 style="color: #333; width: 100%; text-align: center; border-bottom: 1px solid #ccc; padding-bottom: 5px;" >Uploaded image must be over 500 x 900 px and not larger than 50mb.</h5>
                        <input style="width: 100%;" type="file" name="fileToUpload" id="fileToUpload" class="inputStyle-file"required>
                    </div>
                    <div id="article-footer">
                        <input id="articleSubmit" type="submit" name="submit" value="Publish" onclick="multipleFunctions();">
                    </div>
                </form>
            </div>
    
</body>