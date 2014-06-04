<html lang="en">
    <head>
        <meta charset="utf-8">
        
        <title>A&amp;O Productions</title>      
        <meta name="description" content="A&amp;O Productions has been providing Concerts, Films and Speakers for the Northwestern Community since 1969." />
        <meta name="keywords" content="Northwestern University, Concerts, Films, Speakers, Music" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link rel="stylesheet" href="css/global.css">
        <link rel="stylesheet" href="css/poll.css">
       <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-26804534-1']);
            _gaq.push(['_trackPageview']);

            (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>   
    </head>
    <body>
            <div id="header">       
                <a id="logo" href="index.php"> </a>     
                <div id="tagline">
                    <div id="tagline-textbox">
                        <h5> Entertaining<br>Northwestern since </h5>
                    </div>
                    <div id="nineteensixtynine">
                        <div class="nineteensixtynine-circle">
                            <h5> 1 </h5>
                        </div>
                        <div class="nineteensixtynine-circle">
                            <h5> 9 </h5>
                        </div>
                        <div class="nineteensixtynine-circle">
                            <h5> 6 </h5>
                        </div>
                        <div class="nineteensixtynine-circle">
                            <h5> 9 </h5>
                        </div>
                        <div id="nineteensixtynine-line">
                        </div>                                          
                    </div>
                </div>
            </div>
            <div id="container">
                <h1>A&amp;O Blowout Poll</h1>


          <form id="poll" action="submitExtra.php"  method="post">
                <div id="questions">
                    <h2>A few more questions...</h2>
                    <div class="question">
                        <p>If all of your friends are going to an on campus concert, would you attend said concert even if you did not like the artist?</p>
                        <label><input type="radio" name="attendwithfriends"> Yes</label>
                        <label><input type="radio" name="attendwithfriends"> No</label>
                    </div>

                    <div class="question">
                        <p>If you liked an artist that is coming to campus, but none of your friends want to see said artist, would you still attend the show?</p>
                        <label><input type="radio" name="attendwithnofriends"> Yes</label>
                        <label><input type="radio" name="attendwithnofriends"> No</label>
                    </div>

                    <div class="question">
                        <p>When you find out about an artist coming to campus, do you listen to the artist's music before deciding whether or not to attend the show?</p>
                        <label><input type="radio" name="listenbefore"> Yes</label>
                        <label><input type="radio" name="listenbefore"> No</label>
                    </div>
                    <div class="question">
                        <p>How do you find out about events?</p>
                        <label><input type="checkbox" name="findout" value="socialmedia"> Social Media</label>
                        <label><input type="checkbox" name="findout" value="groundflyers"> Ground Flyers</label>
                        <label><input type="checkbox" name="findout" value="friends">Friends</label>
                        <label><input type="checkbox" name="findout" value="wordofmouth"> Word of mouth</label>
                        <label style="width:100%;max-width: none;">Other (please provide)<input type="text" name="findout"> </label>
                    </div>

                    <div class="question">
                        <p>What factors do you use to decide whether or not you attend a show? (check all that apply)</p>
                         <label><input type="checkbox" name="decision" value="friends">Whether or not your friends are going</label>
                        <label><input type="checkbox" name="decision" value="artist"> Whether or not you like the artist(s) performing</label>
                        <label><input type="checkbox" name="decision" value="venue">The venue</label>
                        <label><input type="checkbox" name="decision" value="event">The event</label>
                       <label style="width:100%;max-width: none;"> Other (please provide)<input type="text" name="decision"> </label>
                    </div>

                    <div class="question">
                        <p>What is your undergraduate school/course of study?</p>
                         <label><input type="checkbox" name="studying" value="comm">School of Communication</label>
                        <label><input type="checkbox" name="studying" value="weinberg-humanities"> Weinberg (humanities)</label>
                        <label><input type="checkbox" name="studying" value="weinberg-sciences">Weinberg (sciences)</label>
                        <label><input type="checkbox" name="studying" value="sesp">SESP</label>
                        <label><input type="checkbox" name="studying" value="bienen">Bienen</label>
                        <label><input type="checkbox" name="studying" value="medill">Medill</label>
                        <label><input type="checkbox" name="studying" value="mccormick">McCormick</label>
                    </div>

                    <div class="question">
                        <p>What is your undergraduate school/course of study?</p>
                         <label><input type="checkbox" name="involvement" value="honorsociety">Academic/Honors Societies</label>
                        <label><input type="checkbox" name="involvement" value="services">Philanthropy/Service Activities</label>
                        <label><input type="checkbox" name="involvement" value="greeklife">Greek Life</label>
                        <label><input type="checkbox" name="involvement" value="multicultural">Multicultural Groups</label>
                        <label><input type="checkbox" name="involvement" value="publications">Campus Publications</label>
                        <label><input type="checkbox" name="involvement" value="research">Research</label>
                        <label><input type="checkbox" name="involvement" value="clubsports">Club Sports or Athletic Groups</label>
                        <label><input type="checkbox" name="involvement" value="varsity">Varsity Athletics</label>
                        <label style="width:100%;max-width: none;"> Other (please provide)<input type="text" name="involvement"> </label>
                    </div>


                </div>



                    <button id="submit" type="submit" value="submit">Submit</button>
                </form>

            </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="/js/poll.js"></script>

    <script>
         var iOS = ( navigator.userAgent.match(/(iPad|iPhone|iPod)/g) ? true : false );
         if (iOS){
            $('html').css('background-image', 'none');            
            $('html').css('background', 'black');
         }
        fillEntries()
    </script>
    </body>
</html>