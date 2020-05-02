<?php
$title = 'index';
?>
<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/sites.css" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<body>
    <header><?php include("includes/header.php"); ?></header>
    <div class='index'>
        <div class='description'>
            <h1 class='title'> Hi, thanks for stopping by! </h1>
            <h2 class='index_body'> I'm <a href="about.php">Sophia</a> .<br><br>I'm a <a href="https://www.linkedin.com/in/sophia-oguri/">student</a> that likes to <a href="projects.php">design</a> , <a href="https://medium.com/@tomokosophiaoguri/exploratory-analysis-of-top-songs-and-their-characteristics-98c48a0c3547?source=friends_link&sk=72633feaccba10edfd57692dd15c3f27">analyze</a> , and strives to <a href="https://medium.com/@tomokosophiaoguri/memo-to-uber-technologies-inc-regarding-sustainability-initiatives-2f6e1a810327?source=friends_link&sk=285887eebe540d35d5b3edc0f3d729b6">understand</a> the world around them.</h2>
            <h3 class='index_subbody'> I spend most of my free time <a href="https://www.instagram.com/sophskitchn/">cooking</a> or <a href="https://youtu.be/Niv13ps5BzQ">playing the violin!</a></h3>
        </div>
        <div class='image'>
            <img id='laughing_img' src='images/laughing.png'>
        </div>
    </div>
    <footer><?php include("includes/footer.php"); ?></footer>
</body>

</html>