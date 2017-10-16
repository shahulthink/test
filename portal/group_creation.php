
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Realitindia</title>

    <link rel="shortcut icon" href="images/favicon.png">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-light_blue.min.css">
    <link rel="stylesheet" href="">
   
  </head>

  <style>
  .mdl-layout__drawer-button .material-icons{
    margin-top:15px;
  }
  .xdtfF{
  box-sizing: border-box;
background-color: #fff;
height: 250px;
padding-top: 75px;
color: white;
border-radius: 8px;
position: relative;
  }
  .xdtfF p{
    color: #000;
  }
.xss .groupName{
  color: #fff;
}

.xdtfF::before{
  content: '';
    position: absolute;
    width: 20px;
    height: 6px;
    background: #4cc6f4;
    top: -7px;
    left: -1px;
}

.xss1{
   background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
 box-sizing: border-box;
background-color: #fff;
height: 250px;
padding-top: 75px;
color: white;
border-radius: 8px;
}
.xss{
   background-image: url("https://pbs.twimg.com/profile_banners/50988711/1384539792/600x200");
 box-sizing: border-box;
background-color: #fff;
height: 250px;
padding-top: 75px;
color: white;
border-radius: 8px;
    width: 221px;
    float: left;
}
.goupAdd{
  display: flex;
  justify-content: center;
border: 2px solid rgb(255, 255, 255);

}
  .groupName{
    color: #4285f4;
display: flex;
justify-content: center;
padding-top: 10px;
  }
  #view-source{

    margin-bottom: 40px;
z-index: 900;
    justify-content: center;
position: absolute;
display: flex;
  }


.demo-grid .mdl-cell {
    box-sizing: border-box;
    background-color: #BDBDBD;
    height: 200px;
    padding-left: 8px;
    padding-top: 4px;
    color: white;
}

  </style>
  <body style="background-color: rgb(236, 239, 241);">
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <img style="background-color: rgb(255, 255, 255);" src="img/realitindia_logo.png">
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>

        
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Realitindia</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">
        <div style="margin: 16px 16px 16px 60px;" class="mdl-grid">
          <div class="xdtfF mdl-cell mdl-cell--2-col mdl-shadow--2dp">
              <button onclick="myFunction()" class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored goupAdd">
                <i class="material-icons">add</i>
                </button>
          <div class="groupName" >Create Group</div>
          </div>



          <a href="groupWizard.php" target="_blank"><div class="xss mdl-cell mdl-cell--2-col mdl-shadow--2dp">
            <div class="groupName" >New Group</div>
            <br>
              <button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored goupAdd">
                <i class="material-icons">mood</i>
                </button>
          
          </div></a>
           <div id="container"></div>
           
        </div>


    </div>
  </main>
</div>
  
    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
      
      function myFunction() {
      //  $('.xss').show();
        
        $('#container').append('<a href="groupWizard.php"> <div class="xss mdl-cell mdl-cell--2-col mdl-shadow--2dp">'+
            '<div class="groupName">New Group</div></br>'+
              '<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--mini-fab mdl-button--colored goupAdd">'+
                '<i class="material-icons">mood</i></button></div></a>');
      }
    </script>

  </body>
</html>
