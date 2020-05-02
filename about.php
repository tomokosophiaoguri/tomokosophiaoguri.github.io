<?php
$title = 'about';
?>
<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="styles/sites.css" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<body>
    <header><?php include("includes/header.php"); ?></header>
    <div class="index">
        <div class="about_image"><img id="profile_img" src="images\profile.png"></div>
        <div class="about_description">
            <p class="title">Hello!</p>
            <div class="about">
                <p class='about_info'><strong>Name:</strong> Tomoko Sophia Oguri, but I go by Sophia!</p>
                <p class='about_info'><strong>Graduation Year:</strong> 2022</p>
                <p class='about_info'><strong>Major:</strong> Operations Research and Information Engineering</p>
                <p class='about_info'><strong>Minors:</strong> Computer Science and Business</p>
                <p class='about_info'><strong>School:</strong> Cornell University, College of Engineering</p>
                <p class='about_info'><strong>Interests:</strong> Data analysis, prediction, market trends</p>
                <p class='about_info'><strong>Hobbies:</strong> Cooking, playing the violin, making graphics on Illustrator, playing with my dog, fermentation (not as weird as it sounds, I promise), and hiking.</p>
                <p class='about_info'><strong>What I'm Reading Right Now:</strong> The Signal and the Noise by Nate Silver</p>
                <p class='about_info'><strong>What I'm Watching Right Now:</strong> Westworld, Money Heist</p>

                <p class='about_info'><strong>A Little More: </strong> My academic focuses lie in data science and optimization but I hope to take these tools outside of the classroom and apply them through a design lens to stretch our limits of prediction, building our understanding of underlying human behavior.
                    Since I was little, I have always been fascinated by the idea of efficiency and how human behavior can easily be manipulated with constant areas of inefficiency. Definitely an odd process for a small child to be interested in and similarly, a very strange concept to be intrigued by.
                    However, I somehow was. While I was learning the violin, I would constantly think of the most efficient way to memorize a piece. Was it by continuously playing it over in large chunks or small sections? While I was cooking with my mom, I would brainstorm the ways to multi-task and stagger the start times of multiple recipes. I was fascinated by numbers, processes, and how we, humans interact with them.
                    Now, as I've dived into my major, I've started to get a grasp on the intricacies of numerical analysis while getting to know the improvisation of human behavior through my own personal growth. I want to expand on this understanding in the future and find an answer to the question: to what extent is human behavior predictable?
                </p>
            </div>
        </div>
    </div>

    <footer><?php include("includes/footer.php"); ?></footer>
</body>

</html>