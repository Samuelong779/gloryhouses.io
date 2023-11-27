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
    <title>Understanding Mortgage Options: A Comprehensive Guide</title>
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
                    h3 {
                        color: #515151;
                        font-size: 1.1em;
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
                        font-size: 14px;
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

                    .subtitle2 {
                        font-family: 'Inter', sans-serif;
                        font-size: 18px;
                        color: darkgreen;
                        text-shadow: 4px 4px 6px rgba(140, 232, 132, 0.7);
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
            <h1 class="title">Understanding Mortgage Options: A Comprehensive Guide</h1>
        </header>
    
        <main>
            <img class="imgb" src="news_images/buyinghouseimages2.jpg" alt="Buying News Image 2">

            <p class="article-meta">Published on <span class="published-date">July 10, 2023</span></p>

            <div style="margin-top: 10px;"></div>

            <p class="explaination">The journey to homeownership is an exciting and significant milestone, but it often involves navigating a complex landscape of mortgage options. Understanding the various mortgage types, terms, and considerations is crucial for making informed decisions that align with your financial goals. In this comprehensive guide, we will explore the key aspects of mortgages to empower you in the homebuying process.</p>

            <h2 class="subtitle">1. Types of Mortgages</h2>

            <h3 class="subtitle2">1.1 Fixed-Rate Mortgages</h3>
            <p class="explaination">A fixed-rate mortgage offers stability with a consistent interest rate throughout the loan term. This makes budgeting predictable and is ideal for those who value financial security.</p>

            <h3 class="subtitle2">1.2 Adjustable-Rate Mortgages (ARMs)</h3>
            <p class="explaination">ARMs have interest rates that may change periodically based on market conditions. While initial rates may be lower, borrowers should be aware of potential rate adjustments.</p>

            <h3 class="subtitle2">1.3 Government-Backed Mortgages</h3>
            <p class="explaination">Government-backed mortgages, such as FHA, VA, and USDA loans, provide support to specific groups of borrowers, such as first-time homebuyers or veterans.</p>

            <h2 class="subtitle">2. Mortgage Terms and Components</h2>

            <h3 class="subtitle2">2.1 Principal and Interest</h3>
            <p class="explaination">Understanding how your monthly payment is divided between principal and interest is crucial for building equity over time.</p>

            <h3 class="subtitle2">2.2 Down Payment</h3>
            <p class="explaination">The down payment is an upfront payment made when purchasing a home. Different mortgage programs have varying down payment requirements.</p>

            <h3 class="subtitle2">2.3 Private Mortgage Insurance (PMI)</h3>
            <p>PMI is often required for borrowers with a down payment less than 20%. Understanding PMI and its implications is essential for budgeting.</p>

            <h3 class="subtitle2">2.4 Closing Costs</h3>
            <p class="explaination">Closing costs include various fees associated with finalizing a mortgage. Being aware of these costs ensures you are financially prepared for the closing process.</p>

            <h2 class="subtitle">3. Credit Scores and Mortgage Approval</h2>

            <h3 class="subtitle2">3.1 The Importance of Credit Scores</h3>
            <p class="explaination">Your credit score plays a significant role in mortgage approval and determines the interest rate you qualify for.</p>

            <h3 class="subtitle2">3.2 Improving Your Credit Score</h3>
            <p class="explaination">Tips for improving your credit score, such as timely bill payments and reducing outstanding debts.</p>

            <h2 class="subtitle">4. Pre-Approval and Pre-Qualification</h2>

            <h3 class="subtitle2">4.1 Getting Pre-Qualified</h3>
            <p class="explaination">Pre-qualification provides an estimate of how much you may be able to borrow based on your financial information.</p>

            <h3 class="subtitle2">4.2 Getting Pre-Approved</h3>
            <p class="explaination">Pre-approval involves a more in-depth review of your financial situation and provides a conditional commitment from the lender.</p>

            <h2 class="subtitle">5. Choosing the Right Mortgage for You</h2>

            <h3 class="subtitle2">5.1 Assessing Your Financial Situation</h3>
            <p class="explaination">Evaluate your income, expenses, and financial goals to determine the mortgage that aligns with your needs.</p>

            <h3 class="subtitle2">5.2 Long-Term vs. Short-Term Goals</h3>
            <p class="explaination">Consider your long-term homeownership goals when selecting a mortgage, taking into account potential lifestyle changes.</p>

            <h3 class="subtitle2">5.3 Consultation with Mortgage Professionals</h3>
            <p class="explaination">Seek advice from mortgage professionals to gain insights into the current market and receive personalized recommendations.</p>

            <h2 class="subtitle">6. The Mortgage Application Process</h2>

            <h3 class="subtitle2">6.1 Document Preparation</h3>
            <p class="explaination">Organize necessary documents, such as income statements and tax returns, to streamline the application process.</p>

            <h3 class="subtitle2">6.2 Submission and Review</h3>
            <p class="explaination">Submit your mortgage application, and the lender will review your financial history, credit score, and other relevant information.</p>

            <h3 class="subtitle2">6.3 Underwriting</h3>
            <p class="explaination">Underwriting involves a detailed analysis of your financial profile to determine if you meet the lender's criteria.</p>

            <h2 class="subtitle">7. Closing on Your Mortgage</h2>

            <h3 class="subtitle2">7.1 Finalizing the Details</h3>
            <p class="explaination">Review and sign the closing documents, ensuring you understand the terms and conditions of your mortgage.</p>

            <h3 class="subtitle2">7.2 The Closing Day</h3>
            <p class="explaination">Complete the home purchase by officially transferring ownership and receiving the keys to your new home.</p>

            <h2 class="subtitle">8. Mortgage Repayment Strategies</h2>

            <h3 class="subtitle2">8.1 Making Extra Payments</h3>
            <p class="explaination">Explore the benefits of making extra payments to reduce the overall interest paid and shorten the loan term.</p>

            <h3 class="subtitle2">8.2 Refinancing Options</h3>
            <p class="explaination">Consider refinancing as a strategy to adjust your mortgage terms, potentially securing a lower interest rate or changing the loan duration.</p>

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
                    <p class="explaination">Peter: Good.</p>
                </div>
    
                <div class="comment">
                    <img src="news_images/profile1.jpg" alt="User">
                    <p class="explaination">Peter: Thanks.</p>
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