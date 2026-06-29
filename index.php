<?php
$name = "Rashee Vijay";
$resume = "Resume_1.pdf";   // Put your resume PDF in the same folder
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $name; ?> | Portfolio</title>

<style>
body{
    font-family:Arial,sans-serif;
    background:#111;
    color:#fff;
    margin:0;
}
header{
    background:#222;
    padding:20px;
    text-align:center;
}
nav{
    text-align:center;
    background:#333;
    padding:10px;
}
nav a{
    color:white;
    text-decoration:none;
    margin:15px;
}
section{
    padding:40px;
}
.btn{
    background:#7c3aed;
    color:white;
    padding:12px 25px;
    text-decoration:none;
    border-radius:5px;
}
.gallery{
    display:flex;
    flex-wrap:wrap;
    gap:15px;
}
.gallery img{
    width:180px;
    border-radius:8px;
}
footer{
    background:#222;
    text-align:center;
    padding:20px;
    margin-top:30px;
}
</style>
</head>

<body>

<header>
<h1><?php echo $name; ?></h1>
<p>MCA Student | Web Developer</p>
</header>

<nav>
<a href="#about">About</a>
<a href="#gallery">Gallery</a>
<a href="#resume">Resume</a>
<a href="#contact">Contact</a>
</nav>

<section id="about">
<h2>About Me</h2>
<p>
I am an MCA student passionate about Web Development, PHP, Java,
MySQL and Cyber Security.
</p>
</section>

<section id="gallery">
<h2>Photo Gallery</h2>

<div class="gallery">

<?php
$images = glob("photos/*.{jpg,jpeg,png,gif}", GLOB_BRACE);

if($images){
    foreach($images as $img){
        echo "<img src='$img'>";
    }
}else{
    echo "<p>No images found.</p>";
}
?>

</div>

</section>

<section id="resume">

<h2>My Resume</h2>

<a class="btn" href="<?php echo $resume; ?>" download>
Download Resume
</a>

</section>

<section id="contact">

<h2>Contact</h2>

<p>Email: rashee@example.com</p>

</section>

<footer>
© <?php echo date("Y"); ?> <?php echo $name; ?>
</footer>

</body>
</html>