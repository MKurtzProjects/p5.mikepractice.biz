


<head>
    <title>Rate Problems</title>
    <link rel="stylesheet" href="/css/numbers.css" type="text/css">
    <link href="css/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-ui-1.10.3.custom.js"></script>
</head>

<body>
<!--
        <ul class="menu">
            <li><a id = "train" href="#">Rate Problems</a></li>
            <li><a id = "wash" href="#">Rate Problem 2</a></li>
            <li><a id = "linear_mult" href="#">Algebra Multiplication</a></li>
            <li><a id = "linear_mult" href="#">Algebra Division</a></li>
            <li><a id = "water_percent" href="#">Percent</a></li>
        </ul>
-->


<div id="accordion">
  <h3>Rate problems</h3>
  <div>


    <p>
    The key to solving rate problems is the equation: 
    </br></br> 
    Distance = Rate * Time 
    </br></br> Some rate problems don't involve distance, but instead work.  Solve these problems with the equation: 
    </br></br> Work = Rate * Time
    </p>
            <li><a id = "train" href="#">Distance Problem</a></li>
            <li><a id = "wash" href="#">Rate Problem</a></li>
  </div>
  <h3>Algebra</h3>
  <div>
    Algebra has you find the value of an unknown value by manipulating an equation. To solve a problem like x * 3 = 30, divide 30 by 3 to get x.  To solve x / 10 = 3, multiply 3 by 10.
<li><a id = "linear_multiplication" href="#">Multiplication Problem</a></li>
            <li><a id = "linear_division" href="#">Division Problem</a></li>
  </div>
  <h3>Percents</h3>
  <div>
    <p>
    Percents are just ratio problems. To solve a percent problem, convert the percenage to the ratio. E.g. 5% is converted to 5/100.
    </p>

  </div>
</div>


    <div id='problem'>
    <h2> <span id='equation'></span> 
        <span id='answer'></span> </h2>  
        <div id='check_section'>
            <input type='text' id='answer_input' maxlength="14">
            <span id="check"> <button id="button">Check Answer</button> </span>    
            <p><span id='validation'></span></p>
        </div>

</div>







<script src="neverendingtextbook.js"></script>
 
</body>
</html>