<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="team-section">

        <div class="team-member">
            <img src="C:\Users\jankr\Source\Repos\itstep000\-1-ASSESSMENT-INTPROG\images\background-img.png" alt="programmer">
            <h1>TEAM<br>MEMBER</h1>
        </div>

        <div class="team-member">
            <img src="C:\Users\jankr\Source\Repos\itstep000\-1-ASSESSMENT-INTPROG\images\badet.png" alt="Bernadette Anover">
            <h3>BERNADETTE ANOVER</h3>
            <p>Web Developer</p>
            <a onclick="openModal('anoverModal')">view profile</a>
        </div>

        <div class="team-member">
            <img src="C:\Users\jankr\Source\Repos\itstep000\-1-ASSESSMENT-INTPROG\images\step.png" alt="Stephanie Aringo">
            <h3>STEPHANIE ARINGO</h3>
            <p>Project Manager</p>
            <a onclick="openModal('stephanieModal')">view profile</a>
        </div>

        <div class="team-member">
            <img src="C:\Users\jankr\Source\Repos\itstep000\-1-ASSESSMENT-INTPROG\images\kyla.png" alt="Kyla Gonzaga">
            <h3>KYLA GONZAGA</h3>
            <p>Web Developer</p>
            <a onclick="openModal('kylaModal')">view profile</a>
        </div>

        <div class="team-member">
            <img src="C:\Users\jankr\Source\Repos\itstep000\-1-ASSESSMENT-INTPROG\images\rem.png" alt="Remelyn Musa">
            <h3>REMELYN MUSA</h3>
            <p>Web Designer</p>
            <a onclick="openModal('remModal')">view profile</a>
        </div>

        <div class="team-member">
            <img src="C:\Users\jankr\Source\Repos\itstep000\-1-ASSESSMENT-INTPROG\images\lars.png" alt="Larry Silva">
            <h3>LARRY SILVA</h3>
            <p>Web Designer</p>
            <a onclick="openModal('larryModal')">view profile</a>
        </div>
    </div>

    <div id="anoverModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('anoverModal')">&times;</span>
            <h2>Bernadette Anover<br>AKA: Badette</h2>
            <p>A Pamantasan Lungsod ng Muntinlupa IT Student, is eager to learn new abilities and improve her skills in programming</p>
            <p><i>anoverbernadette01@gmail.com</i></p>
            <p><i>Hit me up on my <a href="https://www.linkedin.com/me?trk=p_mwlite_profile_self-secondary_nav"><u>LINKEDIN</u></a> or <a href="https://github.com/bernadette026"><u>GITHUB</u></a></i></p>

        </div>

    </div>

    <div id="stephanieModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('stephanieModal')">&times;</span>
            <h2>Stephanie Aringo<br>AKA: Teptep</h2>
            <p>The hardworking future programmer of Mutinlupa who enjoys beating the hell out of deadlines, one task at a time.</p>
            <p><i>stephaniearingo15@gmail.com</i></p>
            <p><i>Hit me up on my <a href="https://www.linkedin.com/in/stephanie-aringo-610b16322/"><u>LINKEDIN</u></a> or <a href="https://github.com/itstep000"><u>GITHUB</u></a></i></p>
        </div>
    </div>

    <div id="kylaModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('kylaModal')">&times;</span>
            <h2>Kyla Gonzaga<br>AKA: Kyla</h2>
            <p>An IT student at Pamantasan ng Lungsod ng Muntinlupa, focusing on programming. Interested in learning new things to expand my knowledge and widen my perspective. Her special skills in Canva and expertise in creating infographics, she produces clear and engaging visual aids for her reports.    </p>
            <p><i>kylagonzaga1121@gmail.com</i></p>
            <p><i>Hit me up on my <a href="https://www.linkedin.com/in/kyla-gonzaga-1bb6b0322/"><u>LINKEDIN</u></a> or <a href="https://github.com/Kylagonzaga21"><u>GITHUB</u></a></i></p>

        </div>

    </div>


    <div id="remModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('remModal')">&times;</span>
            <h2>Remelyn Musa<br>AKA: Kyla</h2>
            <p>Skilled photo editor with a keen eye for detail and a passion for visual in Adobe Photoshop, Lightroom, and other editing software. Editing adobe photoshop is my passion, taking pictures and designing in digital arts like canva.</p>
            <p><i>musaremelyn039@gmail.com</i></p>
            <p><i>Hit me up on my <a href="https://www.linkedin.com/in/remelyn-musa-522b15322/"><u>LINKEDIN</u></a> or <a href="https://www.linkedin.com/in/remelyn-musa-522b15322/"><u>GITHUB</u></a></i></p>

        </div>
    </div>


    <div id="larryModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('larryModal')">&times;</span>
            <h2>Larry Silva<br>AKA: Lars</h2>
            <p>A hardworking and very collaborative cutie pie man who enjoys solving problems. Very Artistic Person, love to do the work in a most beautiful way.</p>
            <p><i>larrygrande71@gmail.com</i></p>
            <p><i>Hit me up on my <a href="https://www.linkedin.com/in/larry-silva-8646b1322/"><u>LINKEDIN</u></a> or <a href="https://github.com/larsiepatutie"><u>GITHUB</u></a></i></p>
        </div>
    </div>

    <script src="index.js" ></script>

</body>
</html>
