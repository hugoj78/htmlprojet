<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <!-- Link -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style-main.css">


        <!-- Fin Link -->

        <title>Website</title>

    </head>
    <body>
        <div class="container-fluid">
            <!-- HEADER -->
            <header>
                <nav>
                    <img class="deco img-responsive" src="images/logo.png">
                    <ul class="deco2">
                        <li class="deco2">
                            <a href="#eventpartner" class="js-scrollTo">PARTNER</a>
                        </li>
                        <li class="deco2">
                            <a href="#schedule" class="js-scrollTo">SCHEDULE</a>

                        </li>
                        <li class="deco2">
                            <a href="#speakers" class="js-scrollTo">SPEAKERS</a>
                        </li>
                        <li class="deco2">
                            <a href="#lefts" class="js-scrollTo">ABOUT</a>
                        </li>
                    </ul>
                    <section>
                        <p> 25 APRIL, 2015/ TOWNHALL CALIFORNIA</p>
                        <p class="deco3">FREELANCER CONFERENCE 2015</p>
                        <p class="deco4">FIRST & LARGEST CONFERENCE</p>
                        <input type="submit" name="submit2" class="btn btn-simple" value="REGISTER NOW">
                    </section>
                </nav>
            </header>

            <!-- FIN HEADER -->

            <!-- ABOUT US ET WHAT IS YOUR GOAL -->	
            <div class="row">
                <div id="lefts" class="col-md-6">
                    <h2>ABOUT US</h2>
                    <p id="color-grey">You've insipired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing forced to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing.</p>
                    <img class='about-us' src="images/about-us.jpg">
                </div>

                <div class="col-md-6">
                    <h2>WHAT IS OUR GOAL ?</h2>
                    <p id="color-grey">You've insipired new consumer, racked up click-thru's, blown-up brand enes. We can't give you back the weekends you worked, or erase the pain ebeing forced to make the logo bigger. But if you submit your best work we ajusts might be able to give the chance to show you best digital marketing.</p>
                    <ul id="list">
                        <li>Learn from the best Social Media Experts & Case Studies</li>
                        <li>Have dedicated 2-to-1 meeting with the experts</li>
                        <li>Reach more consumers for less by learning new digital media skills</li>
                        <li>Save money when spending in online advertising</li>
                    </ul>
                </div>
            </div>
            <!-- FIN ABOUT US ET WHAT IS YOUR GOAL -->
            <br>
            <!-- PETIT LOGO -->
            <div class="img1 div1">
                <div class="row">
                    <div class="offset-2"></div>
                    <div class="col-md-2"><img src="images/calendar.png"><br><br>2015<br>June 25</div>
                    <div class="col-md-2"><img src="images/location.png"><br><br>California<br>USA</div>
                    <div class="col-md-2"><img src="images/tickets.png"><br><br>150<br>Tickets</div>
                    <div class="col-md-2"><img src="images/speakers.png"><br><br>06<br>Speakers</div>
                </div>		
            </div>
            <!-- FIN PETIT LOGO -->

            <!-- SPEAKERS -->
            <div class="row">
                <div id="speakers" class="col-md-12 titre1">Speakers</div>
            </div>
            <div class="row">
                <div class="col-md-4"><img class="img-responsive" src="images/speaker-1.jpg"><br><br><strong>JOHN SMITH</strong><br>CEO OF PEREN</div>
                <div class="col-md-4"><img class="img-responsive" src="images/speaker-2.jpg"><br><br><strong>JOHN SMITH</strong><br>CEO OF PEREN</div>
                <div class="col-md-4"><img class="img-responsive" src="images/speaker-5.jpg"><br><br><strong>JOHN SMITH</strong><br>CEO OF PEREN</div>
            </div>

            <!-- FIN SPEAKERS -->

            <!-- REGISTRATION AND PRICING -->
            <div class="div3 img3">
                <div class="row">
                    <div class="titre3">Registration &amp; pricing</div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input class = "form-control" type="text" name="login" value="First Name"/>
                    </div>
                    <div class="col-md-6">
                        <input class = "form-control" type="text" name="login" value="Address"/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <input class = "form-control" type="text" name="login" value="Last Name"/>
                    </div>
                    <div class="col-md-6">
                        <input class = "form-control" type="text" name="login" value="Zip code"/>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <input class = "form-control" type="text" name="login" value="Email"/>
                    </div>
                    <div class="col-md-6">
                        <select name="choice" id="langues">
                            <option selected="selected" value="choice1">City</option>
                            <option value="choice3">Paris</option>
                            <option value="choice4">Lyon</option>
                            <option value="choice5">Bordeaux</option>
                            <option value="choice6">Nantes</option>
                            <option value="choice7">Nice</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">	
                    <div class="col-md-6">
                        <input class = "form-control" type="text" name="login" value="Phone"/></div>
                    <div class="col-md-6">
                        <select name="choice" id="langues">
                            <option selected="selected" value="choice1">Select Your Programme</option>
                            <option value="choice3">Film</option>
                            <option value="choice4">Serie</option>
                            <option value="choice5">Manga</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row justify-content-md-center">
                    <div class="col-md-offset-5 col-md-3">
                        <input type="submit" class="align-center btn" style="background: black; color: white;" value="Submit">
                    </div>
                </div>
            </div>
            <br>
            <!-- FIN REGISTRATION PRICING -->

            <!-- SUBMIT YOUR CONTRIBUTION WORK -->

            <div id="partie6">
                <div id="shadow"></div>
                <div id="text-partie6">
                    <h2>SUBMIT YOUR CONTRIBUTION WORK</h2>
                    <p>You've inspired new consumer, racked up click-thru's, blown up brand awareness. We can't give you back the weekends you worked, or erase the pain of being forced to make the logo bigger. But if you submit your best work.</p>
                    <input class = "form-control" type="submit" name="submit2" value="SUBMIT">

                </div>
            </div>

            <!-- FIN SUBMIT YOUR CONTRIBUTION WORK -->

            <!-- EVENT SCHEDULE -->
            <div class="container" id="schedule">
                <div class="row">
                    <div class="titre1">EVENT SCHEDULE</div>
                </div>
            </div>

            <div class="container">
                <div class="row placement">
                    <div class="col-md-4">
                        <div class="carre">
                            <div class="text">
                                <p class="heure">9:00 am : 10:00 am</p>
                                <p class="titre">Welcome and intro</p>
                                <p class="lieu">Mustafizur Khan, SD Asia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="carre">
                            <div class="text">
                                <p class="heure">10:00 am : 12:00 am</p>
                                <p class="titre">Tips and share</p>
                                <p class="lieu">Mustafizur Khan, SD Asia</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="carre col-md-12">
                            <div class="text">
                                <p class="heure">14:00 am : 16:00 am</p>
                                <p class="titre">View from the top</p>
                                <p class="lieu">Mustafizur Khan, SD Asia</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FIN EVENT SCHEDULE -->

            <!-- EVENT PARTNER -->
            <div class="fond">
                <div class="container">
                    <div class="row">
                        <div class="titre1" id="eventpartner">EVENT partner</div></div>

                    <div class="row partMargin partOpa">
                        <div class="col-md-3"><img src="images/partner-1.png"></div>
                        <div class="col-md-3"><img src="images/partner-2.png"></div>
                        <div class="col-md-3"><img src="images/partner-3.png"></div>
                        <div class="col-md-3"><img src="images/partner-4.png"></div>
                    </div>
                    <div class="row partOpa">
                        <div class="col-md-3"><img src="images/partner-5.png"></div>
                        <div class="col-md-3"><img src="images/partner-6.png"></div>
                        <div class="col-md-3"><img src="images/partner-7.png"></div>
                        <div class="col-md-3"><img src="images/partner-8.png"></div>
                    </div>
                    <div class="videgris"></div>
                </div>
            </div>

            <!-- FIN EVENT PARTNER -->

            <!-- EVENT LOCATION -->
            <div class="row">
                <div class="col-md-3">
                    <p class="titre1">EVENT LOCATION</p>
                    <p class="texteGris">
                        Eardenia<br>
                        The Grand Hall<br>
                        House # 08, Road #52, Street<br>
                        Phone: +1159t3764<br></p>
                    <p class="texte">
                        Email: contact@mail.com</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2370.5724925508243!2d2.2067270862502335!3d48.901498873005224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sgoogle+map!5e0!3m2!1sfr!2sfr!4v1512551979943" width="675" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>

            <!-- FIN EVENT LOCATION -->

            <!-- FOOTER -->

            <footer>
                <div id="text-footer">
                    Designed and 
                    <br> 
                    Developped by Technext Limited 
                    <br>
                    <div id="sprites-footer">
                        <a href="https://www.twitter.com/" target="_blank"><div class="twitter"></div></a>
                        <a href="https://www.facebook.com/" target="_blank"><div class="facebook"></div></a>
                        <a href="https://www.linkedin.com/" target="_blank"><div class="linkedin"></div></a>
                        <a href="https://www.googleplus.com/" target="_blank"><div class="googleplus"></div></a>

                    </div>
                </div>
            </footer>
        </div>

        <!-- FIN FOOTER -->

        <!-- SCRIPT JAVASCRIPT -->

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <script type="text/javascript" src="js/script.js"></script>

        <!-- FIN SCRIPT JAVASCRIPT -->

    </body>
</html>
