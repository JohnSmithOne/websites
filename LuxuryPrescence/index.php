<!DOCTYPE html>
<html>

<head>
<meta charset ="UTF-8">
<meta name = "viewport" content = "width-device-width, initial-scale=1.0">

<!-- FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!-- Karla Font -->
<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Karla:ital,wght@0,200..800;1,200..800&family=Lilita+One&family=Londrina+Outline&family=Rowdies:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Aldrich&family=Karla:ital,wght@0,200..800;1,200..800&family=Lilita+One&family=Londrina+Outline&family=Noticia+Text:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Rowdies:wght@300&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel = "stylesheet"  href = "style.css">
</head>

<title>Services | Pleasanton Real Estate | Julie Hansen Partnership</title>
<body>
<div class="bookingScreen-hidden" id = "bookingScreen">  
  <div class = "bookAppointmentTitle">
    BOOK AN APPOINTMENT
  </div>
  <div class="contact-us-container">

    <div class="phone-container">
      <img style="height:2rem;"src="img/vector/jhIconGold.png" alt="">
      <i class="lp-i lp-i--tty icon-class"></i>
      <p><a href="tel:(925) 553-6707" class="">(925) 553-6707</a></p>
      <i class="lp-i--envelope icon-class"></i>
      <p><a href="mailto:luxuryhomesinwc@icloud.com" class="">luxuryhomesinwc@icloud.com</a></p>
      <i class="lp-i lp-i--map-marked icon-class"></i>
      <p>4337 Chabot Drive, Pleasanton, CA 94588Julie Hansen-Orvis | CA DRE# 00934447</p>
    </div>
          
    <div class="message-container">
       <h2 class="headline">Submit A Message</h2>
          <form class="form-content" data-type="contact-form">
            <div class="h-pot">
              <label for="-middleName">Middle Name</label>
              <input id="-middleName" name="middleName" value="" autocomplete="off" tabindex="-1">
            </div>
            <input type="text" placeholder="Name" name="name" class="" value="">
            <input type="text" placeholder="Phone" name="phoneNumber" class="" value="">
            <input type="text" placeholder="Email" name="email" class="" value="">
            <input type="text" placeholder="Message" name="message" class="" value="">
            <div class="lp-disclaimer">
              <label class="lp-tcr-content">
                <span class="lp-tcr-checkbox">
                  <input type="checkbox" name="termsAccepted" 
                    oninvalid="this.setCustomValidity('Please accept the terms and conditions')" 
                    oninput="this.setCustomValidity('')" required="">
                    </span>
                      <span class="lp-tcr-message">
                        By providing Julie Hansen Partnership
                        your contact information, you acknowledge and agree to our
                        <a href="/terms-and-conditions" target="_blank">Privacy Policy</a> and consent to receiving marketing communications,
                        including through automated calls, texts, and emails, some of which may use artificial or prerecorded voices.
                        This consent isn’t necessary for purchasing any products or services and you may opt out at any time.
                        To opt out from texts, you can reply, ‘stop’ at any time. To opt out from emails, you can click on the unsubscribe
                        link in the emails. Message and data rates may apply.
                      </span>
                </label>
              </div>
              <input style="display:none" type="text" name="source" value="CONTACT_INQUIRY">
              <input type="submit" value="Send" class="button-component ">
            </form>
            
          </div>
  </div>
  <div class="exitButton">
      <button onclick = "bookingExit()" class = "bookingClose">
        <div class="backwardsSlantedLine"></div>
        <div class="forwardsSlantedLine"></div>
      </button>
  </div>
</div>
 
<div class = "navContainer">
    <div class = "blackGradient">
    <img src = "img/jhsereno-light.webp" class = "mainlogo" id = "mainlogo" >
    <div class = "navbar">
            <div class ="undrline"></div><div class ="undrline"></div><div class ="undrline"></div>
            <h1 class = "titlecard" id = "titlecard1">MEET THE TEAM</h1>
            <h1 class = "titlecard" id = "titlecard2">SEARCH FOR HOMES</h1>
            <h1 class = "titlecard" id = "titlecard3">OUR COMMUNITIES</h1>
            <h1 class = "titlecard" id = "titlecard4">HOME VALUATION</h1>
            <h1 class = "maintitlecard" id = "titlecard5">SERVICES</h1>
            <h1 class = "longtitlecard" id = "titlecard6">HOMES ACROSS AMERICA</h1>
            <h1 class = "titlecard" id = "titlecard7">TESTIMONIALS</h1>
            <h1 class = "titlecard" id = "titlecard8">CONTACT US</h1>
            <div class ="undrline"></div><div class ="undrline"></div><div class ="undrline"></div>

<div class ="optionscontainer">
<div class = "elegantbrace">
<img src = "img/icon/left-curly-braces_7206316.png" class = "leftcurlybrace">
<img src = "img/icon/right-curly-braces_7206316.png" class = "rightcurlybrace">
</div>
<div class = "navOptions"> 
    <p class ="option"></p>
    <p class ="option" id = "mtt">MEET THE TEAM</p>
    <p class ="option" id = "sfh" >SEARCH FOR HOMES</p>
    <p class ="option" id = "oc" >OUR COMMUNITIES</p>
    <p class ="option" id = "hv" >HOME VALUATION</p>
    <p class ="option" id = "services">SERVICES</p>
    <p class ="option" id = "haa">HOMES ACROSS AMERICA</p>
    <p class ="option" id = "testimonials">TESTIMONIALS</p>
    <p class ="option" id = "contactUs">CONTACT US</p>
    <p class ="option"></p>
</div>
</div>
</div>
</div>
</div>

<div class = "searchbar" id = "searcbar"> 
  <div id = "jhserenoLogo"></div>
  <div id = "fillerLines" class = "undrlineContainer fillerLines" style = " position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);z-index:-1;">
    <a href = "#">
      <div class ="undrline"></div>
      <div class ="undrline"></div>
      <div class ="undrline"></div>
    </a>
  </div>
    
  <div class = "search-booking">
    <form>
      <input class = "searchInput" id = "searchInput" type="search" name="search" pattern=".*\S.*" required>
      <button class="searchButton" id="searchButton" type="submit">
        <img class = "navIcon1"src = "img/vector/find.png">
      </button>
    </form>
    <button onclick = "bookingOpen()" class = "bookingButton" id = "bookingButton">
      <img class = "navIcon2"src = "img/vector/booking.png">
    </button>
  </div>
</div>

<div class = "servicesContent">
<!-- <div class = "y-line"></div>
<div class = "x-line"> </div> -->

<div class = "fixedPositionedButtons">
    <a class = "phone" id = "phone" href = "tel:(925) 553 -6707">
    <svg xmlns='http://www.w3.org/2000/svg' viewBox='-75 -80 700 600'><path d='m493.4 24.6-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4' fill = "white"/></svg>
    </a>
    <a class = "mail" id = "mail" href = "mailto:luxuryhomesinwc@icloud.com">
    <svg xmlns='http://www.w3.org/2000/svg' viewBox='-75 -60 650 560'><path d='M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4l217.6 163.2c11.4 8.5 27 8.5 38.4 0l217.6-163.2c12.1-9.1 19.2-23.3 19.2-38.4 0-26.5-21.5-48-48-48zM0 176v208c0 35.3 28.7 64 64 64h384c35.3 0 64-28.7 64-64V176L294.4 339.2a63.9 63.9 0 0 1-76.8 0z'fill = "white"/></svg>
    </a>
    <a  href = "#" class= "backtoTop" id = "backtoTop">
      <img src="img/vector/arrowUp.png" alt="">
    </a>
</div>

<div class = "section4">
  <div class = "undrlineContainer">
    <div class ="undrline"></div>
    <div class ="undrline"></div>
    <div class ="undrline"></div>
  </div>
  <div class="posters">
  <div class = "posterContainer">
      <div class = "posterImage">
        
      <div class = "hover" style = "padding-left:2rem;display:flex; justify-content:space-between;">
        <h1 style = 'font-family:"PoiretOne";'>hover</h1>
        </div>
        <h1 class = "remarks">something</br> we're proud of</h1>
        <div class = "imgContainer">
          <img class = "img" src = "img/edit-page-11r2.webp">
        </div>
        <div class = "posterTitleContainer">
          <h1 class = "posterTitle">Over 33 Years of Real Estate Success</h1> 
        </div>
        </div>
      <div class = "posterText">
        <div class = "undrlineContainer">
          <div class ="undrline"></div>
          <div class ="undrline"></div>
          <div class ="undrline"></div>
        </div>
        <img style = "height:2rem;"src="img/vector/jhIconGold.png" alt="jh">
      <p>We provide every one of our clients with a level of service they won’t find anywhere else. 
        We give them what they need, often before they know they need it. ​​​​​​​In real estate, 
        almost everything can be negotiated. When you choose Hansen Partners It is experience is 100% nonnegotiable.
        ​​​​​​​ ​​​​​​​And it’s an experience like no other.</p>
        <div class = "undrlineContainer">
          <div class ="undrline"></div>
          <div class ="undrline"></div>
        </div>
    </div>
  </div>

  <div class = "posterContainer">
    <div class = "posterImage">
    <div class = "hover" style = "padding-left:2rem; display:flex; justify-content:space-between;">
        <h1 style = 'font-family:"PoiretOne";'>hover</h1>
        </div>
      <div class = "imgContainer">
        <img style = "height:90%;"src = "img/edited-p-12.webp">
      </div>
      <h1 class = "remarks">flexible and experienced</h1>
      <div class = "posterTitleContainer">
      <h1 class = "posterTitle" style = "font-size:1.8rem;">
         We Want To Create An Unforgettable Experience For You
      </h1>
    </div>

    </div>
    <div class = "posterText">
    <div class = "undrlineContainer">
          <div class ="undrline"></div>
          <div class ="undrline"></div>
          <div class ="undrline"></div>
        </div>
        <img style = "height:2rem;"src="img/vector/jhIconGold.png" alt="jh">
      <p>
      We combine data gained from your home’s Comparative Market Analysis with local market research 
      to create a marketing plan designed to help you meet your selling goals. Your home’s carefully 
      designed plan will include a range of online, print, and other marketing tools targeted to the 
      best-qualified pool of buyers. ​​​​​​​ Successfully marketing a home in today’s real estate environment 
      requires a firm with experience and flexibility. Hansen Partners provides both.
      </p>
      <div class = "undrlineContainer">
          <div class ="undrline"></div>
          <div class ="undrline"></div>
        </div>
    </div>
  </div>
  </div>
  

</div>


<div class = "section1">
    <div class = "item-1">
    <img class = "sectionFrame" src = "img/vector/marketingBG.png">
    <p> COMPREHENSIVE MARKETING PLAN</p>
    </div> 
    <div class = "qualities">
        <div>
          <p class = "indexMark">responsive</p>
          <div class = container>
          <img src = "img/vector/mailIcon.png">
            <div class = title> <h1>Responsive</h1> </div>
            <p>I am always available via phone, text, or email.</p>
          </div>
        </div>
        
        <div>
        <p class = "indexMark">syndication</p>
          <div class="container">
            <img src = "img/vector/flagIcon.png">
            <div class = title><h1>Syndication</h1></div>
            <p>I market your property locally, nationally, and internationally</p>
            </div>  
          </div>
        <div>
        <p class = "indexMark">virtual tour</p>
          <div class="container">
        <img src = "img/vector/locationIcon.png">
            <h1>Virtual Tour</h1>
            <p>Let's make your home stand out with a high quality virtual tour.</p>
        </div>
        </div>
        <div>
        <p class = "indexMark">photography</p>
          <div class="container">
        <img src = "img/vector/landscapeIcon.png">
            <h1>Photography</h1>
            <p>Beautiful, high-end photography is a central part of our marketing plan for your property.</p>
        </div>
        </div>
    </div>
</div>

<div class = "section2">
  <div class = "decorGuidance">
      <div class = "gallery">

      <div class="galleryIMGContainer">
      <img src = "img/interiorDesign.webp">
      </div>
      <div class="galleryIMGContainer">
      <img src = "img/image-023.webp">
      </div>

      <div>
      <div class = "indexMark">my staging expertise</div>
          <div class = "textcard">
          <p>Neatly arrange drawers and cabinets</p>
          <small>My Staging Expertise</small>
          </div>
      </div>
      <div>
          <div class = "indexMark">my staging expertise</div>
          <div class = "textcard">
            <p>Unclutter and organize your home</p>
            <small>My Staging Expertise</small>          
          </div>
        </div>
      </div>
    <div class = "titleDivision"> 
        <img class = "sectionFrame" src = "img/vector/decorGuidanceFrame.png">
        <h1>
          <img style = "height:3rem;" src = "img/vector/fleurdelis.png">
          DECOR GUIDANCE
        </h1>
   </div>
  </div>

    <div class = "intentionalLayout">
    <div class = "titleDivision"> 
        <img class = "sectionFrame" src = "img/vector/intLayoutFrame.png">
        <div class = "red"> <div class = "green"></div></div>
        <h1>
          <img style = "height:3rem;" src = "img/vector/fleurdelis.png">
          INTENTIONAL LAYOUT
        </h1>
   </div>
    <div class = "gallery">
    <div class="galleryIMGContainer">
    <img class = "galleryIMG1" src = "img/image-024.webp">
    </div>
    <div class="galleryIMGContainer">
      <img class = "galleryIMG2" src = "img/image-022.webp">
    </div>
      <div>
      <div class = "indexMark">my staging expertise</div>
      <div class = "textcard">
      <p>Keep pets outdoors or off the premise</p>
      <small>My Staging Expertise</small>
      </div>
      </div>
      <div>
      <div class = "indexMark">my staging expertise</div>
      <div class = "textcard">
      <p>Play soft music</p>
      <small>My Staging Expertise</small>
      </div>
      </div>
    </div>
    </div>
</div>

<div class = "section3">  
    <div style = "flex-wrap: wrap-reverse;">
        <div class = "stepsContainer">
          <div class = "steps step1"> <h1>1</h1> <p>Initial Consultation & Planning</p> </div>
          <div class = "steps step2"> <h1>2</h1> <p>Devise & Execute Marketing Plan</p> </div>
          <div class = "steps step3"> <h1>3</h1> <p>Devise & Execute Marketing Plan</p></div>
          <div class = "steps step4"> <h1>4</h1> <p>Complete Transaction Process</p></div>
          <div class = "steps step5"> <h1>5</h1> <p>After - Sale Service</p></div>
        </div>
        <div class = "theProcess">
          <div>
          <img style = " height:90%; position:absolute; top:1rem; left:1em; z-index: 5;"class = "theProcessBanner" src = "img/vector/processBanner.png" >
          <div class = "theProcessImage"></div>
          </div>
          <div style  = "display:flex; flex-direction:column; padding-left:3rem; justify-content:center; align-items:center;">
           <h3>The</h3> 
           <h3 style = "font-size: 3rem;">SELLING</h3>
           <h3>Process</h3> 
          </div>
        </div>
    </div>

    <div >
    <div class = "theProcess"> 
      <div class = "theProcessImage"></div>
      <img style = "height:90%; position:absolute; top:1rem; right:1rem; z-index: 2; transform: scaleX(-1);"class = "theProcessBanner" src = "img/vector/processBanner.png" >
          <div style = "display:flex; flex-direction:column; padding-right:3rem; justify-content:center; align-items:center;">
          <h3>The</h3>
          <h3 style = "font-size: 3rem;">BUYING </h3>
          <h3>Process </h3> 
          </div>
      </div>
      <div class = "stepsContainer">
          <div class = "steps step1"> <h1>1</h1> <p>Initial Consultation & Planning</p></div>
          <div class = "steps step2"> <h1>2</h1> <p>Search for a Home & Get Pre-Approved</p></div>
          <div class = "steps step3"> <h1>3</h1> <p>Submit an Offer</p></div>
          <div class = "steps step4"> <h1>4</h1> <p> Settlement Process</p></div>
      </div>
      
    </div>
</div>





<div class = "section5">
  <div class = "commsTabletContainer">
    <div class = "tabletBenefits">
      <h1>Benefits</h1>
        <ul>
          <li>Review all documents and sign in the comfort of your home or anywhere.</li>
          <li>Stay up to date on all marketing activities, review materials, photos, etc. in real time.</li>
          <li>Meet with us face to face on our Gotomeeting.com platform to go over and discuss the events of the week.</li>
          <li>You have your own email assigned just for you and your common space to quickly write a note, or quickly send a
            video message to us for fast communication using our Bomb bomb video messaging system.</li>
        </ul>
    </div>

    <div  class = "section5text">
        <div class ="shapeDecorations">
          <div class = "circle"></div>
          <div class = "circle"></div>
          <div class = "x-line"></div>
          <div class = "y-line"></div>
        </div>
        <p class ="message">
        We believe that transparency and guiding you and your family through the process is key to having the best experience. 
        During these uncertain times. It is a good feeling to know you have some one with a proven track record you can count on.
        We will be here to handle your needs during the Real Estate process.  We think of it before a need even arises. Because, 
        that is just what we do.  Who you work with does matter! 
        </p>
    </div>
</div>

<div class = "titleCommsTablet">
  <div class = "blackGradient">
    <div class = "title">
      <div class = "undrlineContainer">
        <div class ="undrline"></div>
        <div class ="undrline"></div>
        <div class ="undrline"></div>
      </div>

      <div class = "text">
        <h1 style = "font-size: 2rem;">The HANSEN </h1>
        <h1 style = "font-size:2.4rem;">PARTNERS </h1>
        <h1 style = "font-size:1.5rem; color: #bc9b6a; ">Communications Tablet</h1>
      </div>

      <div class = "undrlineContainer">
        <div class ="undrline"></div>
        <div class ="undrline"></div>
        <div class ="undrline"></div>
      </div>
    </div>
    <div class = "section5text">
      <div class = "message">
          <p >We have created this as a wonderful tool so that we can communicate with you daily, provide 
           you with updates on what is happening with your home. We are available at the with a click of your tablet.
          </p>
      </div>
    <div class ="shapeDecorations">
      <div class = "x-line"></div>
      <div class = "y-line"></div>
    </div>
    </div>
  </div>
</div>
</div>


<div class = "section6">
  <div class = "marketYourHometoTheWorld">
        <div class = "titleWeMarketYourHometoTheWorld">
          <img style = "height:3rem;" src="img/vector/fleurdelis.png" alt="">
        <h1>We Market Your Home to The World</h1>
        </div>
  
    <div class = "subText">
        <h2>Our Online Marketing Strategy</h2>
        <p>​​​​​​​The Bay Area remains one of the world's most sought-after regions to live in, and when looking to sell, it is vital that your 
        home be marketed online to audiences locally, nationally, and internationally.</p>
    </div>

  </div>

  <div class = "exposures">
      <div class = "exposure">
        <div class="indexMark">local exposure</div>
        <div class = "exposure-text">
          <h1>Local Exposure</h1>
          <p>Through our partnership with Nextdoor, the private online social network now used in over 80% of U.S. neighborhoods and virtually 
            all Bay Area neighborhoods, we make sure your home receives targeted local exposure. When you list your home with Hansen Partners 
            it will automatically appear on Nextdoor in your neighborhood.</p>
        </div>
      </div>

      <div class = "exposure">
          <div class="indexMark">national exposure</div>
          <div class = "exposure-text">
          <h1>National Exposure</h1>
          <p>We secure strategic positioning and enhancement on Realtor.com, Trulia, and Zillow, driving more consumers to your home and 
            increasing exposure. We  will receive every inquiry about your property directly.</p>
        </div>
      </div>

      <div class = "exposure">
          <div class="indexMark">international exposure</div>
          <div class = "exposure-text">
          <h1>International Exposure</h1>
          <p>To expose your luxury listing to millions of potential homebuyers worldwide, we promote on prominent international 
            real estate portals, including: Wall Street Journal, LuxuryPortfolio.com, LuxuryRealEstate.com, LeadingRE.com, UniqueHomes.com, 
            China.apr.com, Caimeiju, Juwai, Country Life UK</p>
        </div>
      </div>
  </div>
</div>





<div class="section7">
  <div class="partnerLogos">
    <!-- <img src="img/image-057.webp" alt=""> -->
    <img src="img/icon/realtorLogo.png" alt="">
    <img src="img/icon/truliaLogo.png" alt="Trulia, HD Png Download@kindpng.com">
    <img src="img/icon/zillowLogo.png" alt="">
  </div>
  
  <div class = "aboutPartners">
        <div class = "partnersText">
       
            <div class = "realEstateIcons">
              <img src= "img/vector/partnersLogo1-white.png">
              <img src= "img/vector/partnersLogo2-white.png">
              <img src=  "img/vector/partnersLogo3-white.png">
            </div>

            <div class="textContent">
            <h2>
              Leading Real Estate Companies of The World® & Luxury Portfolio International
            </h2>
            </br>
            <div class = "p">
              
                <p>JRockcliff is a founding member of Luxury Portfolio International
                ®, the luxury division of Leading Real Estate Companies of the
                World®. With more than 500 member firms around the world, 
                Our luxury listings are exposed to a vast global audience and 
                reach potential buyers and investors in over 50 countries.
                </p>
            </div>
            
           <h2> Who's Who in Luxury Real Estate</h2>
            </br>
            <p>Who’s Who in Luxury Real Estate is a global collection of 
            luxury real estate brokers.
            </p>
            </div>
          
        </div>

        <img class = "mainIMG"src="img/edited-p-19.webp" alt="">

        <img class ="mainIMG"src="img/edited-page-20.webp" alt="">
          
          
          <div class = "partnersText">
            <div class="textContent">
          <p>
          Through our international affiliations, we have a strong presence in over 50 countries. Our luxury listings are sent to prominent international real estate sites, reaching over 70 million potential buyers and investors worldwide through our relationships with:
          </p>
          </div>
          <div class = "realEstateIcons">
          <img src= "img/vector/partnersLogo1-white.png">
            <img src= "img/vector/partnersLogo2-white.png">
            <img src=  "img/vector/partnersLogo3-white.png">
          </div>
          <div class="textContent">
          <p>
          We also have several well-positioned affiliate offices in China, providing our clients with access to buyers in Hong Kong, Shanghai, and Beijing. 
          </p>
          </div>
          </div>
        
    </div>
</div>






<div class="section8">

    <!-- <div class = "tablet">
    <img src="img/edited-p25.png" alt="lmao">
    </div>  -->
    <div class = "qualities">
  
          <div class = container>
          <img src = "img/vector/mailIcon-white.png">
            <div class = title> <h1>Responsive</h1> </div>
            <p>I am always available via phone, text, or email.</p>
          </div>

          <div class="container">
            <img src = "img/vector/flagIcon-white.png">
            <div class = title><h1>Syndication</h1></div>
            <p>I market your property locally, nationally, and internationally</p>
            </div>  

        <div class="container">
          <img src = "img/vector/locationIcon-white.png">
            <h1>Virtual Tour</h1>
            <p>Let's make your home stand out with a high quality virtual tour.</p>
        </div>

        <div class="container">
          <img src = "img/vector/dronePhotography-white.png">
          <h1>Drone Photography</h1>
          <p>Beautiful, high-end photography is a central part of our marketing plan for your property.</p>
      </div>
        
    </div>

</div>


<div class="section9">
	<div class="container">
			<h2>Work With Us</h2>
		  <p>With decades of experience in luxurious Tri Valley real estate, our team is here to ensure that your dreams are a reality. Let us guide you through your home buying journey, contact us today!</p>
		    <div class="btn-container">
          <a role="button" data-type="CONTACT_US">
             CONTACT US
          </a>
    </div>
	</div>
</div>



<div class="sectionFinal">
  <div class ="companyContacts">
    <div>
    <h1>Julie Hansen Partnership</h1>
    <p>An elite group of the East Bay’s most talented and 
      visionary real estate professionals believed buyers and 
      sellers deserved more from their real estate company. 
      More service. More resources. 
      More integrity. More global reach. 
      In a word, more of everything people should expect when 
      they buy or sell their homes.
    </p>
    </div>

    <div class = "contacts">
      <div>
        <h2>ADDRESS</h2>
        <p>4733 Chabot Drive #100
        </br>Pleasanton, CA 94588
        </br>  ​​Julie Hansen-Orvis | CA DRE# 00934447
        </p>
      </div>
      <div>
        <h2>CONTACT INFORMATION</h2>
        <a href="tel:(925) 980-4925" data-cke-saved-href="tel:(925) 980-4925">(925) 553-6707</a>
        <p>luxuryhomesinwc@icloud.com</p>
      </div>
    </div>
  </div>
  <div class = "newsLetter">
      <h1>Newsletter</h1>
      <p>Subscribe to our Newsletter 
      </br>for latest news and updates. Stay tuned! 
      </p>
      <form class="newsletter__subscribe" data-type="contact-form">
    
          <input class = "emailInput" required="" placeholder="Email Address" name="email" type="email">
          </break>
          <div class="lp-disclaimer">
            <label class="lp-tcr-content">
              <span class="lp-tcr-checkbox">
                <input type="checkbox" name="termsAccepted" 
                  oninvalid="this.setCustomValidity('Please accept the terms and conditions')" 
                  oninput="this.setCustomValidity('')" required="">
                  </span>
                    <span class="lp-tcr-message">
                      By providing Julie Hansen Partnership
                      your contact information, you acknowledge and agree to our
                      <a href="/terms-and-conditions" target="_blank">Privacy Policy</a> and consent to receiving marketing communications,
                      including through automated calls, texts, and emails, some of which may use artificial or prerecorded voices.
                      This consent isn’t necessary for purchasing any products or services and you may opt out at any time.
                      To opt out from texts, you can reply, ‘stop’ at any time. To opt out from emails, you can click on the unsubscribe
                      link in the emails. Message and data rates may apply.
                    </span>
              </label>
            </div>
            <input type="submit" value="SUBSCRIBE" class="btn btn--subscribe button-style-1">
            <p class="successHide">Email Submitted!</p>
      </form>
  </div>

  <div class="otherSocials">
    <div class="footerIcons">
      <div class="setA">
        <svg class = "icons" xmlns='http://www.w3.org/2000/svg' viewBox='0 -60 320 630'><path d='M80 299.3V512h116V299.3h86.5l18-97.8H196v-34.6c0-51.7 20.3-71.5 72.7-71.5 16.3 0 29.4.4 37 1.2V7.9C291.4 4 256.4 0 236.2 0 129.3 0 80 50.5 80 159.4v42.1H14v97.8z' fill="#3e3e3e"/></svg>
        <svg class = "icons" xmlns='http://www.w3.org/2000/svg' viewBox='0 -60 448 630'><path d='M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3M447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z' fill="#3e3e3e"/></svg>
      </div>

      <div class="setB">
        <img src="img/vector/equalHousingLogo.png" alt="logo1">
        <img src="img/vector/realtorLogo.png" alt="logo2">
      </div>
    </div>
    
    <div class="copyright-and-developer">
      <h2>
        Website Designed &amp; Developed by 
        <a href="https://www.luxurypresence.com/" target="_blank" class="luxury-link hyperlink-style-1">
          Luxury Presence
        </a>
      </h2>   
      
      <h2>
        Copyright <span class="auto-year-update">2025</span> | <a href="/terms-and-conditions" class="hyperlink-style-1">Privacy Policy</a>
      </h2>
    </div>
    
  </div>
</div>




</div>
</div>
</body>
<script src="app.js" defer></script>
</html>
