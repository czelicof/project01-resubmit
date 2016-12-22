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
  <link href="https://fonts.googleapis.com/css?family=Gentium+Book+Basic:400,400i,700,700i|Open+Sans:400,400i,700,700i" rel="stylesheet" type="text/css">

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
        <li class="currentpage"> 
        	<a class="button" href="index.php">Home</a></li>

        <li> 
        	<a class="button" href="chinese-foods.php">Chinese Food</a></li>
        <li> 
        	<a class="button" href="italian-foods.php">Italian Food</a></li>
        <li> 
        	<a class="button" href="north-american-foods.php">North American Food</a></li>
	<li> 
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
          document.getElementsByTagName('li')[5].style.display = "inline";
          pulledDown = !pulledDown;
        } else {
          document.getElementsByTagName('li')[1].style.display = "none";
          document.getElementsByTagName('li')[2].style.display = "none";
          document.getElementsByTagName('li')[3].style.display = "none";
          document.getElementsByTagName('li')[4].style.display = "none";
          document.getElementsByTagName('li')[5].style.display = "none";
          pulledDown = !pulledDown;p
        }
       
      }
      </script>
      

    </nav>
		<div class="hero-container">
				<div class="slider">
					<img src="images/soup.jpg" alt="Soup">
					<img src="images/arabic.jpg" alt="Arabic food">
					<img src="images/tomatoes.jpg" alt="Tomatoes">
					<img src="images/sandwich.jpg" alt="Sandwich">
					<img src="images/paella.jpg" alt="Paella">
				</div>
			</div>

		<div class="section values">
		    <div class="container">
		      <div class="row">
		        <div class="column-value1">
		          <h2 id="value-multiplier1">North American Foods</h2>
		          <h5 class="value-heading1"></h5>
		          <p class="value-description">North American food consists of ingredients coming from four areas: Canada, the United States, Mexico, and Central America. The food in North America began with the Native Americans. The three main crops, also called the "Three Sisters", were beans, squash, and maize. The Native Americans also used salmon, berries, deer, rabbit, and mushrooms in their dishes. When Christopher Columbus came to North America, rum became quite popular in this region. Canada's cuisine was influenced by the French and English cuisines. Asian, Scandinavian, and Slavic immigrants also brought new foods with them. These cuisines were fused to make new and unique North American recipes.</p>

		          <a href="north-american-foods.php">Click here to read more about North American Foods</a>
		        </div>

		        <div class="column-value2">
		          <h2 class="value-multiplier">Chinese Foods</h2>
		          <h5 class="value-heading"></h5>
		         <p class="value-description">Chinese cuisine includes styles originating from the diverse regions of China, as well as from Chinese people in other parts of the world including most Asian nations. The history of Chinese cuisine in China stretches back for thousands of years and has changed from period to period and in each region according to climate, imperial fashions, and local preferences. Over time, techniques and ingredients from the cuisines of other cultures were integrated into the cuisine of the Chinese people due both to imperial expansion and from the trade with nearby regions in pre-modern times, and from Europe and the New World in the modern period. The "Eight Culinary Cuisines" of China are Anhui, Cantonese, Fujian, Hunan, Jiangsu, Shandong, Sichuan, and Zhejiang cuisines.</p>

		          <a href="chinese-foods.php">Click here to read more about Chinese Foods</a>
		        </div>

		        <div class="column-value3">
		          <h2 class="value-multiplier">Italian Foods</h2>
		          <h5 class="value-heading"></h5>
		          <p class="value-description">Italian cuisine (Italian: cucina italiana [kuˈtʃiːna itaˈljaːna]) has developed through centuries of social and political changes, with roots stretching to antiquity. Significant changes occurred with the discovery of the New World and the introduction of potatoes, tomatoes, bell peppers and maize, now central to the cuisine but not introduced in quantity until the 18th century.[1][2] Italian cuisine is noted for its regional diversity,[3][4][5] abundance of difference in taste, and it is probably the most popular in the world,[6][7] with influences abroad.[8] Italian cuisine is characterized by its simplicity, with many dishes having only four to eight ingredients.[9] Italian cooks rely chiefly on the quality of the ingredients rather than on elaborate preparation.[10] Ingredients and dishes vary by region. Many dishes that were once regional, however, have proliferated with variations throughout the country.</p>

		          <a href="italian-foods.php">Click here to read more about Italian Foods</a>
		        </div>
		      </div>
		    </div>
		  </div>


<footer>
			<p>Webpage created by Miranda Lakis, Luka Sherman, Meichuanzi Shi, Lerong Wang and Tiffany White</p>

</footer>

	

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="sss/sss.min.js"></script>
		<script>
			$('.slider').sss();
		</script>

		</div><!--.container-->

	</body>
</html>
