<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hosting panel</title>
    <link href="../css/layout.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../js/script.js"></script>
</head>

<body>
    <div id='cssmenu' class="inner">
        <ul>
            <li>
                <img src="../images/WeBeHosting.png" class="logo">
            </li>
            <li class='kop'>
                <a href='../index.php'><img src="../images/home.jpg" class="nav-img"><span class="hidden-xs menu-text">Dashboard</span>
                </a>
            </li>
            <li class='kop'>
                <a href='#'><img src="../images/.jpg" class="nav-img"><span class="hidden-xs menu-text ">Domeinen</span></a>
            </li>
            <li class='kop auto-email-kopdown'>
                <a href='#'><img src="../images/mail.png" class="nav-img"><span class="hidden-xs menu-text auto-email-kopdownn active">E-mail</span></a>
                <ul class="auto-email-subdown">
                    <li><a href='#' class="subkop">Mail Account</a></li>
                    <li><a href='#' class="subkop">Forward Mail</a></li>
                    <li><a href='#' class="active subkop">Autoresponders</a></li>
                    <li><a href='#' class="subkop">Aliasses</a></li>
                </ul>
            </li>
            <li class='kop auto-databases-kopdown'>
                <a href='#'><img src="../images/dedicated.png" class="nav-img"><span class="hidden-xs menu-text auto-databases-kopdownn">Databases</span></a>
                <ul class="auto-databases-subdown">
                    <li><a href='#' class="subkop">Subkop</a></li>
                </ul>
            </li>
            <li class='kop'>
                <a href='#'><img src="../images/cloud.jpg" class="nav-img"><span class="hidden-xs menu-text">Server</span></a>
            </li>
            <li class='kop'>
                <a href='#'><img src="../images/account.png" class="nav-img"><span class="hidden-xs menu-text">Mijn account</span></a>
            </li>
            <li class='kop'>
                <a href='#'><img src="../images/logout.jpg" class="nav-img"><span class="hidden-xs menu-text">Uitloggen</span></a>
            </li>
        </ul>
    </div>
    <div id="nav" class="inner line-color">
    </div>
    <div class="content">
        <p class="red">
            <img src="../images/kruis-red.png" class="red-icon"> CRITICAL EVENTS
        </p>
        <p class="green">
            <img src="../images/green-vink.png" class="green-icon"> ACTIVE TICKET
        </p>
        <p class="orange">
            <img src="../images/orange-server.png" class="orange-icon"> DEDICATED SERVER
        </p>
        <p class="blue">
            <img src="../images/blue-cloud.png" class="blue-icon"> CLOUD SERVER
        </p>

        <div id="tabs-container">
            <ul class="tabs-menu">
                <li class="current"><a href="#tab-1">Autoresponders</a></li>
                <li><a href="#tab-2">Add Responder</a></li>
            </ul>
            <div class="tab">
                <div id="tab-1" class="tab-content">
                    <h2>Current Autoresponders</h2>
                    <p class="eleven">Lorem Ipsum on yksinkertaisesti testausteksti, jota tulostus- ja ladontateollisuudet käyttävät. Lorem Ipsum on ollut teollisuuden normaali testausteksti jo 1500-luvulta asti.</p>
                    <input type='text' placeholder='Search' id='search-text-input' />
                    <div id='button-holder'>
                        <img src='../images/search.png' />
                    </div>
                    <table class="auto">
                        <tr>
                            <th class="th">
                                <p class="eleven-table">E-mail</p>
                            </th>
                            <th class="th">
                                <p class="eleven-table">Subject</p>
                            </th>
                            <th class="th">
                                <p class="eleven-table">Action</p>
                            </th>
                        </tr>
                        <tr>
                            <td class="nine padding-elf">There are no autoresponders yet.</td>
                            <td></td>
                            <td></td>
                        </tr>
                    </table>
                </div>

                <div id="tab-2" class="tab-content">
                    <div class="div">
                        <h3>Character</h3>
                        <select class="background-grey">
                            <option value="">UTF-8</option>
                        </select>
                        <p class="nine">je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem </p>
                        <h3>Interval</h3>
                        <select class="background-white">
                            <option value="" type="ee">Hours</option>
                        </select>
                        <p class="nine">je fiktívny text, používaný pri návrhu tlačovín a typografie. Lorem </p>
                        <h3>E-mail</h3>
                        <input type="email" name="email" placeholder="Email@example.com" class="input">
                        <h3>Domein</h3>
                        <select class="background-grey">
                            <option value="">Nildomain</option>
                        </select>
                        <h3>From</h3>
                        <input type="text" name="from" placeholder="Abraham Lincoln" class="input">
                        <h3>Subject</h3>
                        <input type="text" name="subject" placeholder="The White House" class="input">
                    </div>
                    <div class="div" style="position: absolute;">
                        <h3>Body</h3>
                        <textarea type="text" name="subject" placeholder="Type hier u notitie"></textarea>
                        <h3>Start</h3>
                        <form action="" class="subtext">
                            <input type="radio" name="start" value="immidiatly" checked> Immidiatly
                            <br>
                            <input type="radio" name="start" value="custom"> Custom
                        </form>
                        <h3>Stop</h3>
                        <form action="" class="subtext">
                            <input type="radio" name="stop" value="immidiatly" checked> Immidiatly
                            <br>
                            <input type="radio" name="stop" value="custom"> Custom
                        </form>
                        <button class="blue-button">Create / Modify</button>
                    </div>
                </div>
            </div>
        </div>



    </div>

</body>

</html>