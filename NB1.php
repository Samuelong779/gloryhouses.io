<?php
    include("connect.php");

    session_start();
    if (!isset($_SESSION["client_name"])) {
        header("location: signIn.php");
        exit();
    }

    $loggedIn = isset($_SESSION['client_name']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tips for Buying Property in a Competitive Market</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" 
    integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Karma&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kameron&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="news_buying.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

            
            <body>
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container">
                        <a class="navbar-brand mx-auto" href="home.php">
                            <img src="logo.png" alt="Image Alt Text"> Glory House
                        </a>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="Help.php">Help</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="News.php">News</a>
                            </li>
                            <?php if ($loggedIn): ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                            </li>
                            <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="signIn.php">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="register.php">New Register</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </nav>
                <nav class="navbar navbar-below">
                    <div class="container">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="news_buying.php">BUYING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news_selling.php">SELLING</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news_finance.php">FINANCE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news_newsandtrends.php">NEWS & TRENDS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="news_video.php">VIDEO</a>
                            </li>
                        </ul>
                       
                    </div>
                </nav>

                <style>
                    header {
                    text-align: center;
                    }
        
                    h1 {
                        margin-bottom: 20px;
                        font-size: 2.5em;
                    }
        
                    main {
                        max-width: 800px;
                        margin: auto;
                        padding: 20px;
                        background-color: #fff;
                        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
                        margin-top: 20px;
                        border-radius: 8px;
                        font-size: 1.1em;
                        line-height: 1.6;
                        color: #333;
                    }
        
                    h2 {
                        color: #007bff;
                        margin-bottom: 20px;
                        font-size: 1.8em;
                    }
        
                    ul {
                        list-style-type: decimal;
                        margin-bottom: 20px;
                    }
        
                    p{
                        margin-bottom: 15px;
                    }
                    .imgb {
                        max-width: 50%;
                        height: auto;
                        margin-top: 20px;
                        display: block;
                        margin-left: auto;
                        margin-right: auto;
                    }
                    .article-meta {
                        font-size: 14px;
                        color: #6c757d;
                        margin-bottom: 10px;
                        font-family: 'Inter', sans-serif;
                        font-weight: 600;
                    }

                    .published-date {
                        font-size: 15px;
                        color: #585858;
                        font-family: 'Inter', sans-serif;
                        font-weight: 600;
                    }

                    .title {
                        font-family: 'Karma', sans-serif;
                        font-size: 28px;
                        color: #000000;
                        font-weight: bold;
                        text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.7);
                    }

                    .title2 {
                        font-family: 'Karma', sans-serif;
                        font-size: 28px;
                        font-weight: bold;
                        text-shadow: 4px 4px 6px rgba(233, 142, 15, 0.7);
                    }

                    .explaination {
                        font-family: 'Inter', sans-serif;
                        font-size: 14px;
                        color: #000000;
                    }

                    .subtitle {
                        font-family: 'Inter', sans-serif;
                        font-size: 22px;
                        color: darkblue;
                        text-shadow: 4px 4px 6px rgba(182, 222, 230, 0.7);
                        transition: text-shadow 0.5s;
                        font-weight: bold;
                    }

                    .button {
                        background-color: lightgrey;
                        height: 35;
                        width: 60px;
                    }

                    .button:hover {
                        background-color: lightgrey;
                    }

                    .test {
                        font-family: 'Inter', sans-serif;
                        font-size: 14px;
                        text-decoration: none;
                        text-shadow: none;
                    }
                </style>

    <div style="margin-top: 20px;"></div>
    <body>
        <header>
            <h1 class="title">Tips for Buying Property in a Competitive Market</h1>
        </header>
    
        <main>
            <img class="imgb" src="news_images/buyinghouseimages1.jpg" alt="Buying News Image 1">

            <p class="article-meta">Published on <span class="published-date">Jun 06, 2023</span></p>

            <div style="margin-top: 10px;"></div>

            <p class="explaination">The real estate market can be fiercely competitive, especially in areas where demand outweighs the available housing supply. If you're navigating a seller's market, where properties receive multiple offers and sell quickly, it's essential to approach the home-buying process strategically. Here are some valuable tips to help you secure the property you want in a competitive market.</p>
    
            <h2 class="subtitle">1. Get Pre-Approved for a Mortgage</h2>
            <p class="explaination">Before you start house hunting, get pre-approved for a mortgage. This step not only gives you a clear understanding of your budget but also shows sellers that you are a serious and qualified buyer. In a competitive market, having a pre-approval can give you an edge over other potential buyers.</p>
    
            <h2 class="subtitle">2. Work with a Local Real Estate Agent</h2>
            <p class="explaination">A knowledgeable local real estate agent can provide invaluable insights into the market conditions, property values, and potential negotiation strategies. They often have access to off-market listings and can guide you through the complexities of a competitive market.</p>
    
            <h2 class="subtitle">3. Act Quickly but Thoughtfully</h2>
            <p class="explaination">Properties in a competitive market tend to move swiftly. Stay proactive and be prepared to act promptly when you find a home that meets your criteria. However, don't rush to the point of overlooking crucial details. Conduct thorough due diligence, ensuring the property aligns with your long-term goals.</p>
    
            <h2 class="subtitle">4. Understand the Seller's Priorities</h2>
            <p class="explaination">Try to learn about the seller's priorities and preferences. If you can meet their specific needs, such as a flexible closing date or a quick, hassle-free transaction, your offer may stand out among others.</p>
    
            <h2 class="subtitle">5. Make a Strong, Competitive Offer</h2>
            <p class="explaination">In a seller's market, making a strong and competitive offer is crucial. Your real estate agent can help you determine the right offer price based on comparable sales and the property's value. Consider adding a personal touch to your offer letter, expressing why you love the home and why you're the ideal buyer.</p>
    
            <h2 class="subtitle">6. Limit Contingencies</h2>
            <p class="explaination">While contingencies are a standard part of real estate transactions, minimizing them in a competitive market can make your offer more appealing. However, be cautious not to eliminate essential contingencies that protect your interests.</p>
    
            <h2 class="subtitle">7. Consider Off-Peak Buying Times</h2>
            <p class="explaination">Timing can play a significant role in a competitive market. Consider house hunting during off-peak seasons when there may be less competition. Sellers might be more willing to negotiate when there are fewer buyers in the market.</p>
    
            <h2 class="subtitle">8. Be Flexible and Patient</h2>
            <p class="explaination">Flexibility and patience are virtues in a competitive real estate market. Be open to compromises, consider properties that may need cosmetic updates, and don't get discouraged if your first few offers are not accepted. The right opportunity will come.</p>
    
            <h2 class="subtitle">9. Stay Informed About the Market</h2>
            <p class="explaination">Stay informed about market trends, recent sales, and new listings. The more knowledge you have, the better equipped you'll be to make informed decisions and identify opportunities quickly.</p>
    
            <h2 class="subtitle">10. Have a Backup Plan</h2>
            <p class="explaination">In a competitive market, it's wise to have a backup plan. Identify alternative properties and be ready to pivot if your first-choice falls through. Having options reduces the pressure and stress associated with a highly competitive market.</p>
    
            <p class="explaination">Buying a property in a competitive market requires a strategic approach, perseverance, and the guidance of experienced professionals. By staying informed, being proactive, and making thoughtful decisions, you can increase your chances of securing the home of your dreams even in a challenging real estate landscape.</p>
        
            <p class="explaination"><a href="news_buying.php" style="text-decoration: none; color: darkblue; font-weight: bold;">Back to News Buying</a></p>
        
        </main>

        <div style="margin-top: 20px;"></div>

    </div>

    <div class="additional-features">


        <div class="feature-section social-media-sharing">
            <h4 class="title2" style="color: orange;">Share on Social Media:</h4>
            <a href="https://twitter.com/share?url=your-article-url&text=Check out this article" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on Twitter">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://www.facebook.com/people/Glory-House/61553811544755/" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on Facebook">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.linkedin.com/shareArticle?url=your-article-url&title=Article Title" class="button text-center" style="border: 1px solid lightgrey;" target="_blank" data-tooltip="Share on LinkedIn">
                <i class="fab fa-linkedin"></i>
            </a>
        </div>

        
        <div class="feature-section comments-section">
            <h4 class="subtitle" style="font-family: 'Inter', sans-serif; font-size: 20px; color: deepskyblue;">Comments:</h4>
            <div id="comments-container">
                <div class="comment">
                    <img src="news_images/profile1.jpg" alt="User">
                    <p class="explaination">Peter: Great idea.</p>
                </div>
    
                <div class="comment">
                    <img src="news_images/profile1.jpg" alt="User">
                    <p class="explaination">John: Thanks.</p>
                </div>
    
            </div>
            <textarea id="commentInput" placeholder="Leave your comment" class="explaination" style="font-family: 'Inter', sans-serif; font-size: 14px; color: #000000;"></textarea>
            <button type="button" data-tooltip="Send Comment" onclick="addComment()" style="font-family: 'Inter', sans-serif; font-size: 14px; color: #000000;">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
</div>
<footer class="footer">
        <p class="test"> Contact Us: 
            <a href="mailto:gloryhouse072@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a> | 
            <a href="https://mail.google.com/mail/?view=cm&fs=1&to=gloryhouse072@gmail.com" target="_blank"><i class="fab fa-google"></i></a> | 
            <a href="https://compose.mail.yahoo.com/?to=gloryhouse072@gmail.com" target="_blank"><i class="fab fa-yahoo"></i></a> | 
            <i class="fas fa-phone"></i> +60 (198193527)
        </p>
        <div>
            <a href="home.php" class="test">Home</a>
            <a href="About.php" class="test">About Us</a>
            <a href="Terms of Service.php" class="test">Terms of Service</a>
            <a href="Privacy.php" class="test">Privacy Policy</a>
        </div>
        <div>
            <a href="https://www.facebook.com/people/Glory-House/61553811544755/" target="_blank"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/gloryhouse072/" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p class="test">&copy; 2023 Glory House. All rights reserved.</p>
    </footer>

        <script>
             const socialMediaLinks = document.querySelectorAll('.social-media-sharing a');
                socialMediaLinks.forEach(link => {
                    link.addEventListener('mouseover', function () {
                        const tooltip = document.createElement('div');
                        tooltip.className = 'tooltip';
                        tooltip.textContent = link.getAttribute('data-tooltip');
                        document.body.appendChild(tooltip);

                        const linkRect = link.getBoundingClientRect();
                        const tooltipRect = tooltip.getBoundingClientRect();

                        tooltip.style.top = `${linkRect.top - tooltipRect.height - 10}px`;
                        tooltip.style.left = `${linkRect.left + linkRect.width / 2 - tooltipRect.width / 2}px`;

                        link.addEventListener('mouseout', function () {
                            tooltip.remove();
                        });
                    });
                });
            function addComment() {
                const users = [
                    { name: "You", profilePic: "news_images/profile1.jpg" },
                ];
    
                const commentInput = document.getElementById("commentInput");
                const commentText = commentInput.value;
    
                const commentsContainer = document.getElementById("comments-container");
                const commentDiv = document.createElement("div");
                commentDiv.classList.add("comment");
    
                const randomUser = users[Math.floor(Math.random() * users.length)];
    
                const profilePic = document.createElement("img");
                profilePic.src = randomUser.profilePic;
                profilePic.alt = "Profile Picture";
                commentDiv.appendChild(profilePic);
    
                const commentTextElement = document.createElement("p");
                commentTextElement.textContent = `${randomUser.name}: ${commentText}`;
                commentDiv.appendChild(commentTextElement);
    
                if (randomUser.name === "You") {
                    const deleteButton = document.createElement("button");
                    deleteButton.classList.add("delete-button");
                    deleteButton.dataset.tooltip = "Delete Comment";
                    deleteButton.onclick = function () {
                        deleteComment(this);
                    };
                    const trashIcon = document.createElement("i");
                    trashIcon.classList.add("fas", "fa-trash");
                    deleteButton.appendChild(trashIcon);
                    commentDiv.appendChild(deleteButton);
                }
    
                commentsContainer.appendChild(commentDiv);
    
                commentInput.value = "";
            }
    
            function deleteComment(button) {
                const commentDiv = button.closest(".comment");
                commentDiv.remove();
            }
        </script>
</body>
</html>