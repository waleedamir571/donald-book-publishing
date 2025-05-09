<?php
error_reporting(E_ALL);

// start country block code
// Get user IP address
// $ip = $_SERVER['REMOTE_ADDR'];
// // Using the API to get information about this IP
// $details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
// // City
// $city = $details->geoplugin_city;
// // Using geoplugin to get the continent for this IP
// $continent = $details->geoplugin_continentCode;
// // And for the country
// $country = $details->geoplugin_countryCode;
// // Blocked countries
// $blocked_countries = array("PK", "IN", "CN", "NGA");
// // Check if the country is in the blocked list
// if (in_array($country, $blocked_countries)) {
//     header("Location: https://hancockpublishers.com/country-block.php");
//     exit;D
// }
// end country block code

// $functions = basename($_SERVER['PHP_SELF']); 

$baseUrl = "https://donaldsbookpublishing.com/";
$functions = basename($_SERVER['PHP_SELF']); // Get just the filename

switch ($functions) {
    case "index.php";
        $title_name = "Donald’s Book Publishing | Top Book Publishing Company in USA";
        $description = "Get your book published with the best book publishing services in USA. Trusted by authors for editing, design, and global distribution.";
         $keywords = "Best Book Publishing Company in the USA, Professional Book Publishing Company in the USA, Book Publishing Company";
       
       
        break;
    case "about.php";
        $title_name = "About Donald’s Book Publishing | Empowering Independent Authors";
        $description = "Learn about Donald’s Book Publishing—your trusted partner in self-publishing, editing, and marketing books. We help authors bring their stories to life.";
           $keywords = "Donald’s Book Publishing, about book publisher, publishing support for authors";
       
        break;
    case "book-editing-services";
        $title_name = "Professional Book Editing Services| Donald’s Book Publishing";
        $description = "Get professional Book Editing Services in USA to perfect your manuscript. Trusted by authors for clarity, flow, and publishing-ready quality.";
        $keywords = "Book Editing Services, Book Editing Services in USA, Professional Book Editing Services in USA";
        break;

    case "book-publishing-services.php";
        $title_name = "Book Publishing Services in USA for Authors | Donald's Book Publishing";
        $description = "Trusted book publishing services in the USA. From editing to publishing, we help authors bring their stories to life—professionally and seamlessly.";
          $keywords = "Book Publishing Services in USA, Self-Publishing USA, Professional Publishing for Authors, Publish Your Book in USA, Online Book Publishing USA";
       
        // $form_heading1 = "Contact Us";
        // $form_heading2 = "Pitch Your Book Idea";
        // $indexfollow = "index, follow";
        // $url = $baseUrl . "services";
        // $keywordwords = "Hancock Publisher Services";
        break;
    case "book-marketing-services.php";
        $title_name = "Book Marketing Services in USA | Donald's Publishing";
        $description = "Boost your book’s visibility with expert Book Marketing Services in USA. From Amazon to social media, we help authors grow their audience. ";
          $keywords = "Book Marketing Services in USA, Book Marketing Services, Author Marketing Services, Book Promotion USA, Amazon Book Marketing";
      
        break;
    case "book-illustration-services.php";
        $title_name = "Book Illustration Services in USA | Donald's Book Publishing";
        $description = " Professional book illustration services in the USA for authors and publishers. Bring your story to life with custom, high-quality illustrations. ";
         $keywords = "Book Illustration Services in USA, Book Illustration Services, Author Illustration Services ";

      
        break;
    case "book-writing-services.php";
        $title_name = "Top Book Writing Services in USA | Donald’s Book Publishing";
        $description = "Get expert book writing services in the USA. From concept to publishing, Donald’s Book Publishing helps bring your story to life professionally.";
          $keywords = "Book Writing Services in USA, Book Writing Services, Author Book Writing Services. ";
     
        break;
  
  
}


// $chatbutton = 'javascript:$zopim.livechat.window.show()';


// start body google tag manager 
// $bodyGoogleTag = '

// ';
// end body google tag manager 