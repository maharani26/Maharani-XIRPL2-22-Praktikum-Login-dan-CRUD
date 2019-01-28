<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style media="screen">
  body
  {
    background-image: url("<?=base_url()?>assets/abc.jpg");
    background-position: center;
    background-size: cover;
    width: 100%
  }
  .wrapper
  {
    width: 75%;
    margin: 0 auto;
    color: white;
  }
  #showcase
  {
    padding: 200px 0;
    background-position: center;
    background-size: cover;
    width: 100%;
    margin-right: 60px;
  }
  .main{
    color: #F4A460;
    font-family: sans-serif;
    font-weight: bold;
    font-size: 40px;
    padding-top: 200px;
  }
  .main p {
    font-size: 40px;
    font-family: sans-serif;
  }
  .wrapper button {
    width: 200px;
    height: 70px;
    font-size: 25px;
    font-family: sans-serif;
    background: transparent;
    border: 3px solid ;
    box-sizing: border-box;
    cursor: pointer;
    line-height: 1;
    margin: 10px;
    padding: 10px 20px;
    text-decoration: none;
    display: inline-block;
    outline: none;
    position: relative;
    color: purple;
  }
  .wrapper button:hover{
    background: rgba(255, 255, 255, 0.5);
    color: purple;
    transition: 0.8s;
  }
  .wrapper a{
    text-decoration: none;
    color : #F4A460;
    font-weight: bold;
  }
  .sidenav a {
    text-decoration: none;
    color: white;
    float: right;
    padding: 25px;
    font-family: sans-serif;
    font-size: 18px;
  }
  .sidenav a:hover {
    color: black;
    transition: 0.9s;
    background-color: white;
  }
  .sidenav {
    list-style: none;
    background: black;
    position: fixed;
    width: 105%;
    height: 100px;
    overflow: hidden;
  }

  </style>
  <body>
      <div class="main" id="home">
        <center>WELCOME TO OUR OFFICIAL WEBSITE</center>
    <center>  <p>CREATING THE FUTURE</p></center>
      </header>
    <section id="showcase">
    <div class="wrapper">
    <center><button style="margin-left:440px;" type="button" name="button"><a href="../index.php/datadiri/index">Learn More</a></button>
    </div>
    </section>
  </body>
</html>
