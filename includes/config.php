<?php
//config.php
define('DEBUG',TRUE); #we want to see all errors

date_default_timezone_set('America/Los_Angeles'); #sets default date/timezone for this website

include 'credentials.php'; //stores database login info
include 'common.php'; //stores all unsightly application functions, etc.
include 'MyAutoLoader.php'; //loads class that autoloads all classes in include folder

/* use the following path settings for placing all code in one application folder */ 
define('VIRTUAL_PATH', 'http://s585285466.onlinehome.us/flairli/retro/'); # Virtual (web) 'root' of application for images, JS & CSS files

define('PHYSICAL_PATH', '/home/u81689187/s585285466.onlinehome.us/flairli/retro/'); # Physical (PHP) 'root' of application for file & upload reference

define('INCLUDE_PATH', PHYSICAL_PATH . 'includes/'); # Path to PHP include files - INSIDE APPLICATION ROOT

ob_start();  #buffers our page to be prevent header errors. Call before INC files or ANY html!
header("Cache-Control: no-cache");header("Expires: -1");#Helps stop browser & proxy caching

//the constant THIS_PAGE identifies the current file name
define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//the switch allows us to create unique content for each page

switch(THIS_PAGE)
{

case'template.php';
        $title='Title tag for the tamplate page';
        $pageID='Template Page';        
        break;

case'daily.php';
        $title='Title tag for the daily page';
        $pageID='Daily Specials!';        
        break;
        
case'contact.php';
        $title='Title tag for the contact page';
        $pageID='Contact us!';        
        break;
        
case'customers.php';
        $title='Title tag for customers page';
        $pageID='Customers';        
        break;
        
    default:
$title=THIS_PAGE;
        $pageID='Welcome to the Retro Diner!';


}//end switch

$nav1['index.php']='Home';
$nav1['template.php']='template';
$nav1['daily.php']='Daily';
$nav1['customers.php']='Customers';
$nav1['contact.php']='Contact';
/*
foreach($nav1 as $link=> $label)
{
echo "the link is $link and the label is $label<br/>";


}
<!--
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a class="active" href="about.html">About</a>
				</li>
				<li>
					<a href="burger.html">Menu</a>
				</li>
				<li>
					<a href="contact.html">Contact</a>
				</li>
				<li>
					<a href="blog.html">Blog</a>
				</li>-->

?*
//echo THIS_PAGE;

//die;
    //will place navigation links on the page
    makeLinks($nav1,'<li>','</li>','<li class="active">')
*/
    function makeLinks($arr,$prefix='',$suffix='',$exception='')
{
$myReturn ='';
    foreach($arr as $link=> $label)
{
        
        if(THIS_PAGE==$link)
        {//current page
            $myReturn.= $exception.'<a href="'.$link.'">'.$label.'</a>'.$suffix;
        
        }else{//all other pages
        
        
        
 $myReturn.= $prefix.'<a href="'.$link.'">'.$label.'</a>'.$suffix;

 }//end if 
}//end foreach()
    
    return $myReturn;

}//end makeLinks()


/*
Allows us to send an email that respects the server domain spoofing polices of 
hosts like DH.

$response = safeEmail($to, $subject, $message, $replyTo,'html');

if($response)
{
    echo 'hopefully HTML email sent!<br />';
}else{
   echo 'Trouble with HTML email!<br />'; 
}

*/