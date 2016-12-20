<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>Project 1- Regional Foods</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">
  <link rel="stylesheet" href="sss/sss.css">
  <link rel="stylesheet" href="css/custom.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/">

</head>
<body>
	<div class="container">

    <header>
    	<h1>Regional Foods</h1>
    </header>
    
	   <nav class="horizontal-nav">

   
     <ul>
        <li id="icon">
      <a href="javascript:void(0);" onclick="mobileFriend()">&#9776;</a>
    </li>
        <li> 
        	<a class="button" href="index.php">Home</a></li>

        <li> 
        	<a class="button" href="chinese-foods.php">Chinese Food</a></li>
        <li> 
        	<a class="button" href="italian-foods.php">Italian Food</a></li>
        <li> 
        	<a class="button" href="north-american-foods.php">North American Food</a></li>
	<li class="currentpage"> 
		<a class="button" href="colophon.php">Colophon</a></li>
  <!-- nav - ham -->
    
      </ul>

      <script type="text/javascript">
      var pulledDown = false;
      function mobileFriend () {
        
        if(!pulledDown){
           document.getElementsByTagName('li')[1].style.display = "inline";
          document.getElementsByTagName('li')[2].style.display = "inline";
          document.getElementsByTagName('li')[3].style.display = "inline";
          document.getElementsByTagName('li')[4].style.display = "inline";
          pulledDown = !pulledDown;
        } else {
          document.getElementsByTagName('li')[1].style.display = "none";
          document.getElementsByTagName('li')[2].style.display = "none";
          document.getElementsByTagName('li')[3].style.display = "none";
          document.getElementsByTagName('li')[4].style.display = "none";
          pulledDown = !pulledDown;p
        }
       
      }
      </script>
      

    </nav>
		<article>
			<h2>Team Roles and Responsibilities</h2>

			<br>

			<section class="table">

			<table>
				<tr> 
					<th> Position </th>
					<th> Student </th>
					<th> Tasks Completed </th>
				</tr>

				<tr>

					<td> The Architect </td>
					<td> Miranda Lakis</td>
					<td>Set up the initial repository, select a framework and help the Framework Wrangler to use it and decide how the pages will be split up into PHP includes.</td>

				</tr> 

				<tr>
					<td> The Framework Wrangler </td>
					<td> Meichuanzi Shi</td>
					<td>Install the framework, get the layout from the Content Master and Designer and code the pages.</td>
				</tr>

				<tr>
					<td> The Content Master and Designer </td>
					<td> Lerong Wang</td>
					<td> Responsible for writing and structuring the HTML. Also resonsible for the appearance, usability, and responsiveness of the website. </td>

			
				</tr>

				<tr>
					<td> The CSS Artist </td>
					<td> Tiffany White</td>
					<td> Extend the framework and created customized CSS that overrides most of the look and feel of the framework while maintaining usability. </td>


				</tr> 
					
					<tr>
					
					
					<td> The JavaScript Coder </td>

					<td> Luka Sherman </td>

					<td> Create the homepage slideshow and responsible for implementing all JavaScript functionality on the website. </td>



			</table>


		</article>

		<aside>

			<h3>Technology Used</h3>

				<ul>
				<li>HTML</li>
				<li>PHP</li>
				<li>CSS: Skeleton Framework</li>
				<li>JavaScript</li>
				<li>GitHub</li>
				<li>Text Editors: Sublime, Atom</li>
				<li>MAMP</li>
				</ul>

		</aside>

		<section class="Citations">


			<h5>Sources of the content</h5>
			     <ul>
                         <li>Chinese cuisine. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Chinese_cuisine">https://en.wikipedia.org/wiki/Chinese_cuisine</a></li>
                         
                         <li>Chinese regional cuisine. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Chinese_regional_cuisine">https://en.wikipedia.org/wiki/Chinese_regional_cuisine</a> </li>
                         <li>C., L., A., Mash, L., C., S., . . . D. (2006). Tiramisu II Recipe. Retrieved October 09, 2016, from<a href="https://en.wikipedia.org/wiki/Tiramisu">https://en.wikipedia.org/wiki/Tiramisu</a> </li>

                         <li>Italian cuisine. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Italian_cuisine">https://en.wikipedia.org/wiki/Italian_cuisine</a></li>
                         
                         <li>Minestrone. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Minestrone">https://en.wikipedia.org/wiki/Minestrone</a> </li>

                         <li>Pizza. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Pizza">https://en.wikipedia.org/wiki/Pizza</a> </li>

                         <li>Risotto. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Risotto">https://en.wikipedia.org/wiki/Risotto</a> </li>

                         <li>Tiramisu. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Tiramisu">https://en.wikipedia.org/wiki/Tiramisu</a> </li>

                         <li>American Food - American Cuisine. (n.d.). Retrieved October 09, 2016, from <a href="http://www.worldwidewebawards.net/Food/North_America.html">http://www.worldwidewebawards.net/Food/North_America.html</a></li>

                         <li>Cuisine of the United States. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Cuisine_of_the_United_States">https://en.wikipedia.org/wiki/Cuisine_of_the_United_States</a></li>
                         
                         <li>Recipe courtesy of Alton Brown SHOW: Good Eats EPISODE: American Classics VIII: Tacos. (n.d.). All American Beef Taco : Alton Brown : Food Network. Retrieved October 09, 2016, from <a href="http://www.foodnetwork.com/recipes/alton-brown/all-american-beef-taco-recipe.html">http://www.foodnetwork.com/recipes/alton-brown/all-american-beef-taco-recipe.html</a> </li>

                         <li>Mexican cuisine. (n.d.). Retrieved October 09, 2016, from <a href="https://en.wikipedia.org/wiki/Mexican_cuisine">https://en.wikipedia.org/wiki/Mexican_cuisine</a></li>

                 </ul>

             </section>

          


	<footer>
			<p>Webpage created by Miranda Lakis, Luka Sherman, Meichuanzi Shi, Lerong Wang and Tiffany White</p>

</footer>
	</div><!--.container-->
		
</body>
</html>