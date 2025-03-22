<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8" />
 <title>Mon super site</title>
 <style>
    body main header{
        margin-top: 50px
    }
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   /* background-color: #03b5af*/
}

main {
    box-shadow: 30px 0px 40px rgb(37, 37, 37), -30px 0px 30px rgb(38, 37, 37);
    margin: auto;
    max-width: 900px;
}

.srkl {
    display: flex;
    justify-content: space-between;
    margin-top: 25px;
    background-color: white;
    /*width: 100%;*/
}
header {
    height: 160px;
    padding-top: 10px;
    color: white;
    background-color: orange;
}

.photo {
    margin-left: 7%;
    border-radius: 50%;
    width: 130px;
    height: 130px;
    overflow: hidden;
}
.des{
    margin-left: 25%;
    margin-top: -10%;
}   
h3{
    color: #feffff;
    font-weight: bold;
    letter-spacing: .1rem;
    font-size: 20px;
}
.post{
    color: rgb(253, 255, 253);
    font-weight: bold;
    letter-spacing: .1rem;
}
.right{
    padding: 0;
    margin: 5px;
    margin-top: -10%;
}
.right p{
   margin-left: 600px;
   letter-spacing: .1rem;    
}
.info{
    width: 20px;
    height: 20px;
}
.section-left{
    margin-left: 0px
    background-color: beige;
    float: left;
    width: 400px;
}
.section-right{
    margin-left: 0px
    background-color: beige;
    float: right;
    width: 400px;
}
 h4{
    margin-left: 10%;
    color: #13c3ba;
    letter-spacing: .1rem;
    font-size: 18px;
}
hr.light{
 border-top: 2px solid #13c3ba;
 width: 90%;
 margin-top: .8rem;
 margin-bottom: 1rem;
}
.atouts{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    margin-left: 10%;
    position: relative;
}
.div{
    margin-left: 10%;
}

.skls {
    padding: 0px;
    width: 40%;
    margin-left: 10%
}
.cool {
    background-color: #fff;
    border: 2px solid #ccc;
    width: 300px;
    height: 7px;
}

.po {
    margin-top: 20px;
}
strong{
    color: #13c3ba;
    text-decoration: none; 
}
.inner {
    height: 100%;
    background-color:  rgb(10, 245, 69);
}
.interet{
    margin-left: 10%;
}
span{
    margin-left: 10px;
}

.entete{
    width: 100%;
    position: fixed;
    margin-top: -49px;
    margin-bottom: 49px;
}



 </style>
 </head>
  <!-- Le menu -->
  <div class="entete">
  <?php include("menu.php");?>
  </div>
 <!-- Le corps -->
 <body>


    <main>
       <header>
                <div class="photo">
                    <img src="images/Screenshot_20220506-225832.jpg" width="100%" height="100%" alt="">
                </div>
              <div class="des">
                    <h3>Gnoumou Clement</h3>
                    <p class="post">Etudiant en première année d'Informatique  </p>
                </div>
                
                </div> 
       </header>
<section class="section-left">
    <h5>Contacts</h5>
    <p>+22607986361/+2250749121295</p>
    <hr class="light">
     <div class="atouts">
         <div>Travail d'équipe</div>
         
         <div>Adaptabilité/flexibilité</div>
         
     </div>
     <hr class="light">
     <h4>Diplômes</h4>
       <div class="div">
           <div><b>BEPC Brevet d'etude du Premier cicle</b><strong> <br> College de lassale</strong> <br>2018
           </div>
           <div><b> BAC Baccaleaureat</b>
            <br><strong>College de lassale</strong><br>2021
           </div>
       </div>
    
       <hr class="light">
    <h4>Expériences </h4>
        <div class="div">
          <p><b>Stagiaire Développeur web</b> <strong>(DEV), Bobo Dioulasso</strong><br>
             2023<br>
             <p><b>Une bonne maitrisse en WORD,EXECL,PHOTOSHOP </b><strong></strong></p>.
          </p>
         
          <p><b>Stagiaire en infographie</b>(Bobo Dioulasso)<br>
             ( 2021)<br>
         </p>  
         <P> Cliquez sur ce lien suivant pour voir là ou je me forme en Html Css
            <a href="W3schools.com" title="Merci de bien vouloir regarder!">W3schools</a></P>
        <hr>
          
        </div>
</section>

<section class="section-right">
    <h4>Competences</h4>
    <hr class="light">
      <div class="skls">

                <div class="po">
                    <p>html, css, </p>
                    <div class="cool">
                        <div style="width:80%" class="inner"></div>
                    </div>
                </div>

                <div class="po">
                    <p>Word,EXECL ,POWERPOINT</p>
                    <div class="cool">
                        <div style="width:96%" class="inner"> </div>
                    </div>
                </div>

                <div class="po">
                    <p>Illustrator</p>
                    <div class="cool">
                        <div style="width:50%" class="inner"> </div>
                    </div>
                    <div class="po">
                        <p>Photoshop</p>
                        <div class="cool">
                            <div style="width:80%" class="inner"> </div>
                        </div>
                </div>
     <h4>Langues</h4>
     <hr class="light">
     <div class="skls">
         <div class="po">
                    <p>Français</p>
                    <div class="cool">
                        <div style="width:90%" class="inner"> </div>
                    </div>
                </div>
                <div class="po">
                    <p>Anglais</p>
                    <div class="cool">
                        <div style="width:50%" class="inner"> </div>
                    </div>
                    <div class="po">
                    <p>Dioula</p>
                    <div class="cool">
                        <div style="width:80%" class="inner"> </div>
                    </div>
                </div>
                <div class="po">
                    <p>Mooré</p>
                    <div class="cool">
                        <div style="width:95%" class="inner"> </div>
                    </div>
                    <hr>
                <hr>
      </div>
 
 <!-- Le pied de page -->

 <?php include("pieddepage.php");?>
 </body>
</html>
