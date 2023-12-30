<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="project-tb.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- header/navbar start -->
    <header>
        <div class="header-container">
            <div class="header-wrapper">
                <div class="logoBox">
                    <img src="img/instagram.png" alt="logo" />
                </div>
                <div class="fontLogo">
                    <h2>Instapost</h2>
                </div>
                <form class="searchBox">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                </form>
                <div class="iconBox2">
                    <i class="fa-solid fa-circle-plus"></i>
                    <i class="fa-brands fa-facebook-messenger"></i>
                    <i class="fa-solid fa-bell"></i>
                    <label><img src="img/Ellipse 1.png" alt="user" /></label>
                    <i class="fa-solid fa-caret-down"></i>
                </div>
            </div>
        </div>
    </header>

    <!-- profile page -->
    <div class="profile-container">
        <img src="img/cover.jpg" class="cover-img" />
        <div class="profile-details">
            <div class="pd-left">
                <div class="pd-row">
                    <img src="img/Ellipse 1.png" class="pd-image" />
                    <div>
                        <h3>Deviana Dyah</h3>
                        <p>120 Friends - 20 Mutual</p>
                        <img src="images/member-1.png" />
                        <img src="images/member-2.png" />
                        <img src="images/member-3.png" />
                        <img src="images/member-4.png" />
                    </div>
                </div>
            </div>
            <div class="pd-right">
                <button type="button">
                    <img src="images/add-friends.png" alt="" />Friend
                </button>
                <button type="button">
                    <img src="images/message.png" alt="" />Message
                </button>
                <br />
                <a href=""><img src="images/more.png" /></a>
            </div>
        </div>

        <!-- profile post start -->
        <div class="profile-info">
            <div class="info-col"></div>
            <div class="post-col">
                <div class="fb-post1">
                    <div class="fb-post1-container">
                        <div class="fb-p1-main">
                            <div class="post-title">
                                <img src="img/Ellipse 1.png" alt="user picture" />
                                <ul>
                                    <li>
                                        <h3>Deviana Dyah <span> . 1 hours ago</span></h3>
                                    </li>
                                    <li><span>30 december at 12:55 PM</span></li>
                                </ul>
                                <p>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                    Error libero sit natus nam ex repellat magni nulla enim. At
                                    nobis quis optio aperiam dignissimos ducimus harum numquam
                                    illum cum ipsam.
                                </p>
                            </div>

                            <div class="post-images">
                                <div class="post-images1">
                                    <img src="img/Post.jpg" alt="post images 01" />
                                    <img src="img/Post2.jpg" alt="post images 02" />
                                    <img src="img/Post3.jpg" alt="post images 03" />
                                </div>
                                <div class="post-images2">
                                    <img src="img/Post4.jpg" alt="post images 04" />
                                </div>
                            </div>

                            <div class="like-comment">
                                <ul>
                                    <li>
                                        <img src="img/love.png" alt="love" />
                                        <img src="img/like.png" alt="like" />
                                        <span>17k like</span>
                                    </li>
                                    <li>
                                        <i class="fa-regular fa-comment-dots"></i>
                                        <span>911 comments</span>
                                    </li>
                                    <li>
                                        <i class="fa-solid fa-share-from-square"></i>
                                        <span>146 share</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>