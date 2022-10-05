<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Multipage Blog Website</title>
    <!-- CUSTOM STYLESHEET -->
    <link rel="stylesheet" href="./style.css">
    <!-- ICONSCOUT CDN -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <!-- GOOGLE FONT (MONTSERRAT) -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
    <nav>
        <div class="container nav__container">
            <a href="index.html" class="nav__logo">Marks Blog</a>
            <ul class="nav__items">
                <li><a href="blog.html">Blog</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="contact.html">Contact</a></li>
                <!-- <li><a href="signin.html">Signin</a></li> -->
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="./images/avatar1.jpg">
                    </div>
                    <ul>
                        <li><a href="dashboard.html">Dashboard</a></li>
                        <li><a href="logout.html">Logout</a></li>
                    </ul>
                </li>
            </ul>

            <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
            <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
        </div>
    </nav>
    <!--====================== END OF NAV ====================-->





    <section class="singlepost">
        <div class="container singlepost__container">
            <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, dicta.</h2>
            <div class="post__author">
                <div class="post__author-avatar">
                    <img src="./images/avatar1.jpg">
                </div>
                <div class="post__author-info">
                    <h5>By: Jane Doe</h5>
                    <small>June 10, 2022 - 07:23</small>
                </div>
            </div>
            <div class="singlepost__thumbnail">
                <img src="./images/blog33.jpg">
            </div>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquam harum aspernatur tenetur, veritatis eaque explicabo consequuntur hic odit veniam nisi quo neque deleniti similique. Sit sed iste, quo excepturi porro, blanditiis dicta amet, temporibus necessitatibus nihil doloremque eos fuga!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquam harum aspernatur tenetur, veritatis eaque explicabo consequuntur hic odit veniam nisi quo neque deleniti similique. Sit sed iste, quo excepturi porro, blanditiis dicta amet, temporibus necessitatibus nihil doloremque eos fuga!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ullam veritatis labore qui voluptatum error expedita temporibus rem voluptate recusandae cupiditate soluta! Aperiam incidunt quos labore modi sequi tempora amet debitis porro architecto consequatur. Quod dolore beatae amet voluptas quia. Voluptatem modi iste minima laboriosam labore adipisci quod, inventore eaque culpa, reiciendis quo aut perferendis consequuntur sunt! Explicabo, maxime reprehenderit.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. In aliquam harum aspernatur tenetur, veritatis eaque explicabo consequuntur hic odit veniam nisi quo neque deleniti similique. Sit sed iste, quo excepturi porro, blanditiis dicta amet, temporibus necessitatibus nihil doloremque eos fuga!
            </p>
        </div>
    </section>
    <!--====================== END OF SINGLE POST ====================-->






    <footer>
        <div class="footer__socials">
            <a href="https://youtube.com/egatortutorials" target="_blank"><i class="uil uil-youtube"></i></a>
            <a href="https://facebook.com" target="_blank"><i class="uil uil-facebook-f"></i></a>
            <a href="https://instagram.com" target="_blank"><i class="uil uil-instagram-alt"></i></a>
            <a href="https://linkedin.com" target="_blank"><i class="uil uil-linkedin"></i></a>
            <a href="https://twitter.com" target="_blank"><i class="uil uil-twitter"></i></a>
        </div>
        <div class="container footer__container">
            <article>
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Art</a></li>
                    <li><a href="">Wild Life</a></li>
                    <li><a href="">Travel</a></li>
                    <li><a href="">Music</a></li>
                    <li><a href="">Science & Technology</a></li>
                    <li><a href="">Food</a></li>
                </ul>
            </article>
            <article>
                <h4>Support</h4>
                <ul>
                    <li><a href="">Online Support</a></li>
                    <li><a href="">Call Numbers</a></li>
                    <li><a href="">Emails</a></li>
                    <li><a href="">Social Support</a></li>
                    <li><a href="">Location</a></li>
                </ul>
            </article>
            <article>
                <h4>Blog</h4>
                <ul>
                    <li><a href="">Safety</a></li>
                    <li><a href="">Repair</a></li>
                    <li><a href="">Recent</a></li>
                    <li><a href="">Popular</a></li>
                    <li><a href="">Categories</a></li>
                </ul>
            </article>
            <article>
                <h4>Permalinks</h4>
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Services</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </article>
        </div>
        <div class="footer__copyright">
            <small>Copyright &copy; 2022 Marks Blog</small>
        </div>
    </footer>


    <script src="./main.js"></script>
</body>
</html>