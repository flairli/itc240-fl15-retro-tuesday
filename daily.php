<?php
//daily.php

if(isset($_GET['myDay']))

{
$myDay = $_GET['myDay'];

}else{

$myDay = date('l');

}

switch($myDay)

{
case 'Monday';
$backgroundColor="#FF7518";
$img='images/pumpkin-spice-latte.jpg';
$altTag="Our Pumpkin Spice Latte tastes great on a Fall Day!";
$coffee="Pumpkin Spice Latte";
$content="Our signature espresso and milk are highlighted by flavor notes of pumpkin, cinnamon, nutmeg and clove to create this incredible beverage that's a fall favorite. Enjoy it topped with whipped cream and real pumpkin pie spices.";

break;
case 'Tuesday';
$backgroundColor="yellow";
$img='images/caremel machiato.jpg';
$altTag="Our caremel machiato is one of the cutsomers'favorites!";
$coffee="caremel machiato";
$content="Freshly steamed milk with vanilla-flavored syrup is marked with espresso and topped with caramel drizzle for an oh-so-sweet finish.";

break;
case 'Wednesday';
$backgroundColor="red";
$img='images/breakfast.jpg';
$altTag="Engjoy the varity of our delicous morning pastries!";
$coffee="breakfast";
$content="Since the acquisition of La Boulange in 2012, Starbucks has continued to enhance its food offerings, and this continues today with the introduction of four new breakfast sandwiches thoughtfully crafted from premium ingredients:

New Slow-Roasted Ham & Swiss: Italian-style slow-roasted ham served on a warm, buttery croissant bun with a perfectly cooked egg and melted Swiss cheese.
New Vegetable & Fontiago: Spinach, flavorful sundried tomatoes and sweet caramelized onions melted together with aged Fontiago cheese served on a warm, multigrain ciabatta bun.
New Egg & Cheddar: Buttery grilled cheese with melted cheddar atop a perfectly cooked fluffy egg, served on hearty multigrain toast.
New and improved Reduced Fat Turkey Bacon: Reduced fat turkey bacon, cage-free egg whites and melted reduced-fat white cheddar cheese served warm on an organic wheat English muffin.";

break;
case 'Thursday';
$backgroundColor="grey";
$img='images/frrappuccino.jpg';
$altTag="Our frrappuccino comes with a varity of flavors";
$coffee="frrappuccino";
$content="a trademark for a line of frozen coffee beverages sold by Starbucks. It consists of coffee or other base ingredient (e.g., strawberries and cream), blended with ice and other various ingredients, usually topped with whipped cream.";

break;
case 'Friday';
$backgroundColor="pink";
$img='images/hazelnut latte.jpg';
$altTag="Our hazelnut latte is back this Fall!";
$coffee="hazelnut latte";
$content="Coffee blended with toffee nut syrup, milk and ice. Topped with hazelnut drizzle.";

break;
case 'Saturday';
$backgroundColor="green";
$img='images/icedlatte.jpg';
$altTag="Our icedlatte is great throughout the year!";
$coffee="icedlatte";
$content="Cool coffee is perfect in the summer. And now you can take it to the next level of perfection with your choice of syrup. Vanilla? Hazelnut? Caramel? Mocha? Cinnamon Dolce? Each one is sweet, tasty and absolutely perfect on a steamy summer’s day.";

break;

case 'Sunday';
$backgroundColor="purple";
$img='images/salted caramel mocha.jpg';
$altTag="Our salted caramel mocha is a must try for this winter!";
$coffee="salted caramel mocha";
$content="Mocha sauce and toffee nut syrup are combined with coffee and milk, then topped with sweetened whipped cream, caramel drizzle and a blend of turbinado sugar and sea salt. Enjoy the flavors of fall in every sip.";

break;

}


?>



<?php include'includes/config.php';?>
<?php include'includes/header.php';?>
<h1><?=$pageID?></h1>
<img src="<?=$img?>" alt="<?=$altTag?>" id="coffee" />
            <strong class="feature"><?=$myDay?>'s Coffee Special:</strong> <?=$myDay?>'s daily coffee special is <strong class="feature"><?=$coffee?></strong>, which makes us wish it was always Fall, as this is one of our top sellers!</p>
<p><a href="daily.php?myDay=Sunday">Sunday</a></p>
<p><a href="daily.php?myDay=Thursday">Thursday</a></p>
<p><a href="daily.php?myDay=Monday">Monday</a></p>







<?php include 'includes/footer.php';?>