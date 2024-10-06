<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Project/style/course.css">
</head>
<body>
<header>
        <nav>
            <h1 class="logo"><a href="home.html">The Circle</a></h1>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="course.php">Courses</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- carousel -->
    <div class="carousel">
        <!-- list item -->
        <div class="list">
            <div class="item">
                <img src="/Project/Asset/python.jpeg">
                
                <div class="content">
                    <div class="age">18 and above</div>
                    <div class="title">PYTHON COURSE</div>
                    <div class="topic">PYTHON</div>
                    <div class="des">
                        This course offers a comprehensive introduction to Python programming. It covers basic to advanced topics and provides hands-on experience through projects. The course is priced at RS 4999 and has a duration of 2 months.
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/Project/Asset/java.jpeg">
                <div class="content">
                    <div class="age">18 and above</div>
                    <div class="title">JAVA COURSE</div>
                    <div class="topic">JAVA</div>
                    <div class="des">
                        This course covers Java programming fundamentals and advanced concepts. Learn to develop applications and software using Java. The course is priced at RS 4999 and has a duration of 3 months.
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/Project/Asset/c++.jpeg">
                <div class="content">
                    <div class="age">18 and above</div>
                    <div class="title">C++ COURSE</div>
                    <div class="topic">C++</div>
                    <div class="des">
                        This course provides an in-depth exploration of C++ programming, including object-oriented principles and application development. The course is priced at RS 4999 and has a duration of 3 months.
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/Project/Asset/webDev.jpeg">
                <div class="content">
                    <div class="age">18 and above</div>
                    <div class="title">WEB DEVELOPMENT COURSE</div>
                    <div class="topic">WEB DEVELOPMENT</div>
                    <div class="des">
                        This course covers front-end and back-end web development using HTML, CSS, JavaScript, and frameworks like React and Node.js. The course is priced at RS 4999 and has a duration of 4 months.
                    </div>
                    <div class="buttons">
                        <button>SEE MORE</button>
                        <button>SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- list thumnail -->
        <div class="thumbnail">
            <!-- Thumbnails can be adjusted similarly to match respective courses -->
            <div class="item">
                <img src="/Project/Asset/python.jpeg">
                <div class="content">
                    <div class="title">
                        Python
                    </div>
                    <div class="description">
                        Python Programming Course
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/Project/Asset/java.jpeg">
                <div class="content">
                    <div class="title">
                        Java
                    </div>
                    <div class="description">
                        Java Programming Course
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/Project/Asset/c++.jpeg">
                <div class="content">
                    <div class="title">
                        C++
                    </div>
                    <div class="description">
                        C++ Programming Course
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="/Project/Asset/webDev.jpeg">
                <div class="content">
                    <div class="title">
                        Web Dev
                    </div>
                    <div class="description">
                        Web Development Course
                    </div>
                </div>
            </div>
        </div>
        <!-- arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- time running -->
        <div class="time"></div>
    </div>

    <script src="/Project/script/course.js"></script>
</body>
</html>