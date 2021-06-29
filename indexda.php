<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>B. Jhansi Durga Devi</title>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" >
    <link rel="stylesheet" href="index.css">
</head>
<body>
    
    <div id="magnify">
        <h1 onclick="closemagnify()"><i class="fas fa-times"></i></h1>
        <div id="img_here"></div>
    </div>
    <header id="header" class="animated slideInDown" style="animation-delay:1.8s;">
        <table>
            <tr>
                <td id="logo">Jhansi</td>
                <td id="navigation">
                    
                    <a href="#bio">about</a>
                    <a href="#work">work</a>
                    <a href="#intrests">Intrests</a>
                    <a href="#contact">contact</a>
                </td>
            </tr>
        </table>
    </header>
    <table id="top_part">
        <tr>
            <td id="about" class="animated slideInLeft" style="animation-delay:2s;">
                <h1>B.Jhansi Durga Devi</h1>
                    I am currently pursuing my graduation from VIT,Vellore. I am 
                    enthusiastic to learn and explore.
                    <button class="btn_one"><a href="#bio">Find Out More</a></button><br>
                
               
            </td>
            <td id="rightImage" class="animated jackInTheBox" style="animation-delay:2.2s;"></td>
        </tr>
    </table>
    
    <div id="bio">
        <h1>about</h1>
        <p>
            A Tech Enthusiastic with excellent managerial skills and an unquenchable enthusiasm to learn and explore. I am second year student at VIT,Vellore majoring in Integrated Mtech Software Engineering. 
        </p>
        <p>
            My skills are Self-learning Communicative Organization skills Teamwork.
        </p>
    </div>
<div id="work">
        <h1>works.</h1>

        <div class="project">
        <h2>Project-1: MEDrone</h2>
        <div>Modern implementation of online Medical system, where patient can login to the web app and navigate easily. Can check the covid live stats, book an appointment with doctor, He/She can also maintain diet and for girls our personal asssistant can help them regarding mensurational problems, can find more about our doctors and connect to our doctors ,and can pledge the form to be a organ donar and can book the prescrition medicines at discounted rates and there is home delivery option where we deliver medicines from sky through fully functional drone.</div>
        <button class="btn_two"><a href="https://github.com/jhansi16/MeDrone" target="_blank">visit project</a></button>
       </div>

       <div class="project">
        <h2>Project-2: Hangman Game</h2>
        <div>Select a letter to figure out a hidden word in a set amount of chances.
            Its Specifications are:
        Display hangman pole and figure using SVG
        Generate a random word
        Display word in UI with correct letters
        Display wrong letters
        Show notification when select a letter twice
        Show popup on win or lose
        Play again button to reset game
        </div>
        <button class="btn_two"><a href="https://github.com/jhansi16/Hangman" target="_blank">visit project</a></button>
        
       </div><br><br><br>
       <div id="intrests">
           <div class="books">
           <h1>Intrests.</h1>
           <div><h2>Books I have read</h2></div>
           <div>List of all books with their Amazon links.</div>
           <button class="btn_two"><a href="books.html">See All Books</a></button><br>
        </div>
        <div class="shows">
            <h2>TV Shows</h2>
            <div>List of all TV shows with their IMDB links.</div>
            <button class="btn_two"><a href="tvshows.html">See All Shows</a></button><br>
        </div>
        <div class="movies">
            <h2>Movies</h2>
            <div>List of all movies with their IMDB links.</div>
            <button class="btn_two"><a href="movies1.html">See All Movies</a></button><br>
        </div>
</div>

    
    <div id="contact">
        <h1>contact</h1>
            <table>
                <tr>
                    <td>
                        <div id="inner_div">
                            <table id="inner_table">
                                <tr>
                                    <td><i class="fas fa-phone"></i> &nbsp; 6281663429</td>
                                </tr>
                                <tr>
                                    <td><i class="fas fa-at"></i> &nbsp; jhansireddybirru@gmail.com</td>
                                </tr>
                                 
                                <tr>
                                    <td><i class="fas fa-map-marker-alt"></i>
                                    <div id="address">
                                        Street 123,<br>
                                        Kurnool city,<br>
                                        Andhra Pradesh, India.
                                    </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="social"><i class="fab fa-facebook"></i></a>
                                        <a class="social"><i class="fab fa-linkedin"></i></a>
                                        <a class="social"><i class="fab fa-instagram"></i></a>
                                        <a class="social"><i class="fab fa-medium"></i></a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td>
                        <form action="contactus.php" method="POST">
                            <input type="text" name="name" placeholder="name" required>
                            <input type="email" name="email" placeholder="email" required><br>
                            <textarea placeholder="your message" name="text" required rows="5"></textarea><br>
                            <button class="btn_one" type="submit" name="submit">send</button>
                        </form> 
                    </td>
                </tr>
            </table>
    </div>
    
    <script src="index.js" type="text/javascript"></script>
</body>
</html>