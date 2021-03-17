<?php
class Level{
    public $lvl;
    public $lvlHead;
    public $type;
    public $question;
    public $bgImg;
    public $color;
    public $fontweight;
    public $fontsize;
    public $key;
    public $questionImg;
    public $class = "prevent_sel";
}


$lvl1 = new Level();
$lvl1->lvlHead = "Level 1: The Journey Begins";
$lvl1->lvl = "1";
$lvl1->type = "image";
$lvl1->question = "Solve the puzzle and find the hidden word using the highlighted boxes-";
$lvl1->bgImg = "url('assets/img/qbg1.jpg')";
$lvl1->key = "bitesys";
$lvl1->questionImg = array("Q1.jpeg");
$lvl1->color = "black";
$lvl1->fontweight = "800";
$lvl1->fontsize = "20px";


$lvl2 = new Level();
$lvl2->lvlHead = "Level 2";
$lvl2->lvl = "2";
$lvl2->type = "image";
$lvl2->question = "Denken!!";
$lvl2->bgImg = "url('assets/img/qbg28.jpg')";
$lvl2->key = "university of southern california";
$lvl2->questionImg = array("q2.jpeg");
$lvl2->color = "white";

$lvl3 = new Level();
$lvl3->lvlHead = "Level 3";
$lvl3->lvl = "3";
$lvl3->type = "basic";
$lvl3->question = "I can bend it like Beckham with my left foot but I always get left back in the squad. Guess the player?";
$lvl3->bgImg = "url('assets/img/qbg28.jpg')";
$lvl3->key = "roberto carlos";
$lvl3->questionImg =  null;
$lvl3->color = "white";

// 4
$lvl4 = new Level();
$lvl4->lvlHead = "Level 4";
$lvl4->lvl = "4";
$lvl4->type = "image";
$lvl4->question = "Find the sports personality.";
$lvl4->bgImg = "url('assets/img/qbg10.png')";
$lvl4->key = "roger federer";
$lvl4->questionImg = array("q101.PNG","q102.PNG","q103.PNG");
$lvl4->color = "black";

$lvl5 = new Level();
$lvl5->lvlHead = "Level 5";
$lvl5->lvl = "5";
$lvl5->type = "basic";
$lvl5->question = "Our women are as efficient as our men at soccer. Guess the country?";
$lvl5->bgImg = "url('assets/img/qbg30.jpg')";
$lvl5->key = "germany";
$lvl5->questionImg = null;
$lvl5->color = "white";

$lvl6 = new Level();
$lvl6->lvlHead = "Level 6 ";
$lvl6->lvl = "6";
$lvl6->type = "basic";
$lvl6->question = "I have long legs and neck. There was a movie about me a few years ago and another one will be out soon. When a German is surprised, they ask someone to fry me. Who am I?";
$lvl6->bgImg = "url('assets/img/qbg6.jpg')";
$lvl6->key = "stork";
$lvl6->questionImg = null;
$lvl6->color = "black";
$lvl6->class = "";

$lvl7 = new Level();
$lvl7->lvlHead = "Level 7 ";
$lvl7->lvl = "7";
$lvl7->type = "basic";
$lvl7->question = "I am the possessor of power but often fought someone who always said 'Power'. Taz devil and I have something in common. Many kids loved me and had my face tattooed on themselves. You might have missed me all these years but you will soon be able to see my three dimensional self. Who am I?";
$lvl7->bgImg = "url('assets/img/qbg7.jpg')";
$lvl7->key = "shaktimaan";
$lvl7->questionImg = null;
$lvl7->color = "white";

$lvl8 = new Level();
$lvl8->lvlHead = "Level 8";
$lvl8->lvl = "8";
$lvl8->type = "image";
$lvl8->question = "Verbinden!!";
$lvl8->bgImg = "url('assets/img/qbg08.jpg')";
$lvl8->key = "rock bands";
$lvl8->questionImg = array("q081.png","q082.png","q083.png","q084.png");
$lvl8->color = "white";



// $lvl8 = new Level();
// $lvl8->lvl = "8";
// $lvl8->type = "custom";
// $lvl8->key = "golden key";
// $lvl8->filename = "levels/keys_lvl.php";

$lvl9 = new Level();
$lvl9->lvlHead = "Level 9";
$lvl9->lvl = "9";
$lvl9->type = "basic";
$lvl9->question = 'X and Y played the lead roles in a TV series after having played the role of pilots in a film.  Name the TV series. (Clue: This film was a parody of a feature film that was released in 1986)';
$lvl9->bgImg = "url('assets/img/qbg42.jpg')";
$lvl9->key = "two and a half men";
$lvl9->questionImg = null;
$lvl9->color = "white";

// $lvl9 = new Level();
// $lvl9->lvl = "9";
// $lvl9->type = "custom";
// $lvl9->key = "death";
// $lvl9->filename = "levels/shadowHidden_lvl.php";

$lvl10 = new Level();
$lvl10->lvlHead = "Level 10";
$lvl10->lvl = "10";
$lvl10->type = "image";
$lvl10->question = "This was the final blow to the losing team in a high voltage game played between 2 neighbours. Who scored this goal?";
$lvl10->bgImg = "url('assets/img/qbg56.jpg')";
$lvl10->key = "hector castro";
$lvl10->questionImg = array("q56.png");
$lvl10->color = "black";

// $lvl10 = new Level();
// $lvl10->lvl = "10";
// $lvl10->type = "custom";
// $lvl10->key = "s vyfo iye";
// $lvl10->filename = "levels/title_lvl.php";

$lvl11 = new Level();
$lvl11->lvlHead = "Level 11";
$lvl11->lvl = "11";
$lvl11->type = "image";
$lvl11->question = "Find the TV show";
$lvl11->bgImg = "url('assets/img/qbg11.png')";
$lvl11->key = "the simpsons";
$lvl11->questionImg = array("q111.PNG","q112.PNG","q113.PNG","q114.PNG","q115.PNG");
$lvl11->color = "black";

$lvl11_1 = new Level();
$lvl11_1->lvlHead = "Level 12";
$lvl11_1->lvl = "12";
$lvl11_1->type = "image";
$lvl11_1->question = "Find the movie";
$lvl11_1->bgImg = "url('assets/img/qbg12.jpg')";
$lvl11_1->key = "cast away";
$lvl11_1->questionImg = array("q121.PNG","q122.jpg","q123.PNG");
$lvl11_1->color = "white";

$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = 'Childhood memories...';
$lvl11_2->bgImg = "url('assets/img/qbg49.jpg')";
$lvl11_2->key = "need for speed";
$lvl11_2->questionImg = array("q491.jpg","q492.jpg","q493.jpg","q494.jpg");
$lvl11_2->color = "white";

/*$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13: Valley of Images - 3rd FLoor";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = "Connect the images and find the personality";
$lvl11_2->bgImg = "url('assets/img/whitebg.jpg')";
$lvl11_2->key = "larry page";
$lvl11_2->questionImg = array("kitty.jpg","102.jpg","103.jpg","aero.jpg");
$lvl11_2->color = "black";*/

$lvl11_3 = new Level();
$lvl11_3->lvlHead = "Level 14";
$lvl11_3->lvl = "14";
$lvl11_3->type = "basic";
$lvl11_3->question = 'This show was created by twin brothers and the music was composed by two members of an electronic band that was formed in Texas.  Name the band.';
$lvl11_3->bgImg = "url('assets/img/qbg46.jpg')";
$lvl11_3->key = "survive";
$lvl11_3->questionImg = null;
$lvl11_3->color = "white";

$lvl12 = new Level();
$lvl12->lvlHead = "Level 15";
$lvl12->lvl = "15";
$lvl12->type = "basic";
$lvl12->question = "I’m a phrase. One part of me represents guest appearance, another part a city. Name the character which mentions me.";
$lvl12->bgImg = "url('assets/img/qbg15.jpg')";
$lvl12->key = "sherlock holmes";
$lvl12->questionImg = null;
$lvl12->color = "white";

$lvl13 = new Level();
$lvl13->lvlHead = "Level 16";
$lvl13->lvl = "16";
$lvl13->type = "basic";
$lvl13->question = "A 10 digit number where the 1st digit represents the number of 0’s in the number, 
2nd digit represents 1’s in the number and so on till 10th digit that represents the number of 9’s in the number. What is the number?";
$lvl13->bgImg = "url('assets/img/qbg29.jpg')";
$lvl13->key = "6210001000";
$lvl13->questionImg = null;
$lvl13->color = "black";

$lvl14 = new Level();
$lvl14->lvlHead = "Level 17";
$lvl14->lvl = "17";
$lvl14->type = "image";
$lvl14->question = "I have played along with the following players! Find me";
$lvl14->bgImg = "url('assets/img/qbg17.jpg')";
$lvl14->key = "diego forlan";
$lvl14->questionImg = array("q171.jpg","q172.jpg","q173.jpg","q174.jpg");
$lvl14->color = "black";

$lvl15 = new Level();
$lvl15->lvlHead = "Level 18";
$lvl15->lvl = "18";
$lvl15->type = "image";
$lvl15->question = "Find me";
$lvl15->bgImg = "url('assets/img/qbg4.jpg')";
$lvl15->key = "fidel castro";
$lvl15->questionImg = array("q41.PNG","q42.jpg");
$lvl15->color = "white";

$lvl16 = new Level();
$lvl16->lvlHead = "Level 19";
$lvl16->lvl = "19";
$lvl16->type = "basic";
$lvl16->question = "I am a kid from a state in US which educated a guy who later won the Nobel Prize in Physiology.
Unfortunately, I died while I was riding my bicycle.
Who am I??";
$lvl16->bgImg = "url('assets/img/qbg19.jpg')";
$lvl16->key = "nicky hayden";
$lvl16->questionImg = null;
$lvl16->color = "white";

$lvl17 = new Level();
$lvl17->lvlHead = "Level 20";
$lvl17->lvl = "20";
$lvl17->type = "image";
$lvl17->question = "What do the following share in common?";
$lvl17->bgImg = "url('assets/img/qbg52.jpg')";
$lvl17->key = "brazil border";
$lvl17->questionImg = array("q521.png","q522.png","q523.png","q524.png");
$lvl17->color = "black";



/*$lvl17 = new Level();
$lvl17->lvlHead = "Level 19: Valley of Images - 9th Floor";
$lvl17->lvl = "20";
$lvl17->type = "endFinal";
$lvl17->question = "Connect the images<br>Hint: Tangle";
$lvl17->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl17->key = "";
$lvl17->questionImg = null;
$lvl17->color = "black";*/

$lvl18 = new Level();
$lvl18->lvlHead = "Level 21";
$lvl18->lvl = "21";
$lvl18->type = "basic";
$lvl18->question = "This world famous bar is situated at the southern end mostly at the bridge. Tension at the place depends on how people handle it.";
$lvl18->bgImg = "url('assets/img/qbg21.jpg')";
$lvl18->key = "whammy bar";
$lvl18->questionImg = null;
$lvl18->color = "white";

/*$lvl18 = new Level();
$lvl18->lvlHead = "Level 21: Valley of Images - 11th Floor";
$lvl18->lvl = "21";
$lvl18->type = "image";
$lvl18->question = "Connect the images";
$lvl18->bgImg = "url('assets/img/whiteBG.jpg')";
$lvl18->key = "oneplus5t";
$lvl18->questionImg = array("18_a.jpg","18_b.jpg","18_c.jpg");
$lvl18->color = "black";*/

$lvl19 = new Level();
$lvl19->lvlHead = "Level 22";
$lvl19->lvl = "22";
$lvl19->type = "basic";
$lvl19->question = "This state (region) which existed for 74 years was formed with the help of an alliance consisting of 2 people, in order to liberate itself from the dominion of another realm that lasted a little over 6 centuries. This state formed a base for the creation of a country which is currently existing and also is relatively new – founded after the first world war. Travel and Tourism is an integral part of this country which is amongst the leading economies. The Prime Minister of this country is closely related to its founder who in turn is related to the founder of the state. Name the state!";
$lvl19->bgImg = "url('assets/img/qbg22.jpg')";
$lvl19->key = "diriyah";
$lvl19->questionImg = null;
$lvl19->color = "white";

$lvl20 = new Level();
$lvl20->lvlHead = "Level 23";
$lvl20->lvl = "23";
$lvl20->type = "image";
$lvl20->question ="Find the similarity between these 4 players!";
$lvl20->key = "jose mourinho";
$lvl20->bgImg = "url('assets/img/whitebg.jpg')";
$lvl20->questionImg = array("q23.png","q234.png","q232.png","q233.png");
$lvl20->color = "black";

$lvl21_1 = new Level();
$lvl21_1->lvlHead = "Level 24";
$lvl21_1->lvl = "24";
$lvl21_1->type = "image";
$lvl21_1->question = "I am a football player. I am a defender capable of playing in 433 as well as 352 formations. During my tenure in a European club, my club’s captain retired who later took up the role of Vice President of the same club. Within a year of winning the Copa America, I scored in a European competition for a team whose partial logo is given below.
Who am I??";
$lvl21_1->bgImg = "url('assets/img/qbg24.jpg')";
$lvl21_1->key = "alvaro pereira";
$lvl21_1->questionImg = array("q24.png");
$lvl21_1->color = "white";

$lvl22_2 = new Level();
$lvl22_2->lvlHead = "Level 25";
$lvl22_2->lvl = "25";
$lvl22_2->type = "basic";
$lvl22_2->question = 'I am a Greek. I witnessed the fall of the city of Persepolis right in front of my eyes. I also starred in the movie directed by Terry Gilliam. I always have a large white star on my head.
Name Me!!';
$lvl22_2->bgImg = "url('assets/img/qbg25.jpg')";
$lvl22_2->key = "bucephalus";
$lvl22_2->questionImg = null;
$lvl22_2->color = "black";


$lvl21 = new Level();
$lvl21->lvlHead = "Level 26";
$lvl21->lvl = "26";
$lvl21->type = "image";
$lvl21->question = "Identify the character.";
$lvl21->bgImg = "url('assets/img/qbg26.jpg')";
$lvl21->key = "kaguya";
$lvl21->questionImg =  array("q261.jpg","q262.jpeg","q263.jpg","q264.jpeg");
$lvl21->color = "white";

$lvl22 = new Level();
$lvl22->lvlHead = "Level 27";
$lvl22->lvl = "27";
$lvl22->type = "basic";
$lvl22->question = "Guess the player who “offered” SAF a slice of pizza back in 2004? ";
$lvl22->bgImg = "url('assets/img/qbg27.jpg')";
$lvl22->key = "cesc fabregas";
$lvl22->questionImg =  null;
$lvl22->color = "white";

$lvl23 = new Level();
$lvl23->lvlHead = "Level 28 ";
$lvl23->lvl = "28";
$lvl23->type = "basic";
$lvl23->question = "I’m a cricketer. A part of my name is a famous cartoon character. One of my actions resulted in changing a sport by law. What was the act?";
$lvl23->bgImg = "url('assets/img/qbg3.jpg')";
$lvl23->key = "aluminium bat";
$lvl23->questionImg = null;
$lvl23->color = "white";



// $lvl24 = new Level();
// $lvl24->lvlHead = "Level 29";
// $lvl24->lvl = "29";
// $lvl24->type = "image";
// $lvl24->question = "Identify the link between these two pictures?";
// $lvl24->bgImg = "url('assets/img/whitebg.jpg')";
// $lvl24->key = "april bowlby";
// $lvl24->questionImg = null;
// $lvl24->color = "black";


$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Find the movie";
$lvl24->bgImg = "url('assets/img/qbg14.jpg')";
$lvl24->key = "minsara kanna";
$lvl24->questionImg = array("q141.PNG","q142.jpg","q143.PNG","q144.PNG");
$lvl24->color = "black";


/*$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Its not like the others";
$lvl24->bgImg = "url('assets/img/whitebg.jpg')";
$lvl24->key = "i luv encryption";
$lvl24->questionImg = array("29a.jpg","29c.PNG");
$lvl24->color = "black";*/

$lvl29 = new Level();
$lvl29->lvlHead = "Level 30";
$lvl29->lvl = "30";
$lvl29->type = "basic";
$lvl29->question = "I was going to change my present career and was about to start a new one as a driver, but my mom prevented and insisted me to continue in my present career.";
$lvl29->bgImg = "url('assets/img/qbg5.jpg')";
$lvl29->key = "a r rahman";
$lvl29->questionImg = null;
$lvl29->color = "white";



/*$lvl29 = new Level();
$lvl29->lvl = "30";
$lvl29->type = "custom";
$lvl29->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl29->filename = "levels/puzzle_lvl.php";*/

$lvl30 = new Level();
$lvl30->lvlHead = "Level 31";
$lvl30->lvl = "31";
$lvl30->type = "basic";
$lvl30->question = "The host of this famous talk show divorced her spouse and they have an age difference of 15 years.  Name the show.";
$lvl30->bgImg = "url('assets/img/whitebg.jpg')";
$lvl30->key = "the ellen degeneres show";
$lvl30->questionImg = null;
$lvl30->color = "black";


/*$lvl30 = new Level();
$lvl30->lvl = "31";
$lvl30->type = "custom";
$lvl30->key = "";
$lvl30->filename = "levels/auth_lvl.php";*/

$lvlz = new Level();
$lvlz->lvlHead = "Level 32: Valley of Sounds: Find the musical instrument";
$lvlz->lvl = "32";
$lvlz->type = "basic";
$lvlz->question = "<audio controls=''>
<source src='assets/img/20b.mp3' type='audio/mpeg'/>
</audio>";
$lvlz->bgImg = "url('assets/img/qbg32.jpg')";
$lvlz->key = "theremin";
$lvlz->questionImg = null;
$lvlz->color = "white";

// $lvlz = new Level();
// $lvlz->lvlHead = "Level 32 : Valley of Sounds";
// $lvlz->lvl = "32";
// $lvlz->type = "basic";
// $lvlz->question = "25.5788|91.8933";
// $lvlz->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlz->key = "shillong";
// $lvlz->questionImg = null;
// $lvlz->color = "white";

$lvla = new Level();
$lvla->lvlHead = "Level 33 ";
$lvla->lvl = "33";
$lvla->type = "image";
$lvla->question = "Find the show";
$lvla->bgImg = "url('assets/img/qbg8.jpg')";
$lvla->key = "boruto";
$lvla->questionImg = array("q81.jpeg","q82.jpeg","q83.jpeg");
$lvla->color = "white";

$lvlb = new Level();
$lvlb->lvlHead = "Level 34";
$lvlb->lvl = "34";
$lvlb->type = "basic";
$lvlb->question = "The lead characters from these two series are addicted to narcotics, solve cases and love music.  One is based on the other, who would that be?";
$lvlb->bgImg = "url('assets/img/qbg33.jpg')";
$lvlb->key = "gregory house";
$lvlb->questionImg = null;
$lvlb->color = "white";


// $lvlb = new Level();
// $lvlb->lvlHead = "Level 34";
// $lvlb->lvl = "34";
// $lvlb->type = "basic";
// $lvlb->question = ".-- .... ---<br>Hint: Someone related to it";
// $lvlb->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlb->key = "tedros adhanom";
// $lvlb->questionImg = null;
// $lvlb->color = "white";

$lvlc = new Level();
$lvlc->lvlHead = "Level 35";
$lvlc->lvl = "35";
$lvlc->type = "image";
$lvlc->question = 'Identify the movie';
$lvlc->bgImg = "url('assets/img/qbg48.jpg')";
$lvlc->key = "moulin rouge";
$lvlc->questionImg = array("q481.jpg","q482.png","q483.jpg","q484.jpg");
$lvlc->color = "white";

$lvld = new Level();
$lvld->lvlHead = "Level 36";
$lvld->lvl = "36";
$lvld->type = "image";
$lvld->question = "What’s missing among the following?";
$lvld->bgImg = "url('assets/img/qbg51.jpg')";
$lvld->key = "e";
$lvld->questionImg = array("q511.png","q512.png","q513.png","q514.png");
$lvld->color = "black";

$lvle = new Level();
$lvle->lvlHead = "Level 37";
$lvle->lvl = "37";
$lvle->type = "basic";
$lvle->question = "Originally invented by professor heylens, this is a positioning technique based on Jungian archetypes and freadian ego-id theory.";
$lvle->bgImg = "url('assets/img/qbg37.jpg')";
$lvle->key = "needscope";
$lvle->questionImg = null;
$lvle->color = "white";


$lvlf = new Level();
$lvlf->lvlHead = "Level 38";
$lvlf->lvl = "38";
$lvlf->type = "basic";
$lvlf->question = "<audio controls=''>
<source src='assets/img/audio.mp3' type='audio/mpeg'/>
</audio> Identify the breed of dog that is featured in this show";
$lvlf->bgImg = "url('assets/img/qbg38.jpg')";
$lvlf->key = "australian cobberdog";
$lvlf->questionImg = null;
$lvlf->color = "white";

// $lvlf = new Level();
// $lvlf->lvlHead = "Level 38";
// $lvlf->lvl = "38";
// $lvlf->type = "basic";
// $lvlf->question = ": ( ) {  : | :  &  } ; :     :'I ran here 1st'";
// $lvlf->bgImg = "url('assets/img/whitebg.jpg')";
// $lvlf->key = "ibm system 360";
// $lvlf->questionImg = null;
// $lvlf->color = "black";

$lvlg = new Level();
$lvlg->lvlHead = "Level 39";
$lvlg->lvl = "39";
$lvlg->type = "basic";
$lvlg->question = 'The two creators of X found the inspiration of the name from creatures called “X” out of Jonathan Swift’s, “Gulliver’s Travels.”';
$lvlg->bgImg = "url('assets/img/qbg39.jpg')";
$lvlg->key = "yahoo";
$lvlg->questionImg = null;
$lvlg->color = "white";

$lvlh = new Level();
$lvlh->lvlHead = "Level 40";
$lvlh->lvl = "40";
$lvlh->type = "basic";
$lvlh->question = "My great grandfather was a famous Indian personality who also wrote a lot, and his collected works have more than 50000 pages. Being the great-grandson of this personality, I’ve acted a movie a few decades back. Find me and the movie.";
$lvlh->bgImg = "url('assets/img/qbg2.jpg')";
$lvlh->key = "tushar gandhi hey ram";
$lvlh->questionImg =  null;
$lvlh->color = "white";

$lvlEnd = new Level();
$lvlEnd->lvlHead = "Level 41";
$lvlEnd->lvl = "41";
$lvlEnd->type = "image";
$lvlEnd->question = "Find the director";
$lvlEnd->bgImg = "url('assets/img/whitebg.jpg')";
$lvlEnd->key = "vetrimaaran";
$lvlEnd->questionImg = array("q411.PNG","q412.PNG","q413.PNG","q414.PNG");
$lvlEnd->color = "black";

$lvli = new Level();
$lvli->lvlHead = "Level 42 ";
$lvli->lvl = "42";
$lvli->type = "image";
$lvli->question = "Find the product";
$lvli->bgImg = "url('assets/img/qbg9.jpg')";
$lvli->key = "samsung galaxy s10";
$lvli->questionImg = array("q91.PNG","q92.PNG","q93.PNG","q94.PNG");
$lvli->color = "white";



$lvlj = new Level();
$lvlj->lvlHead = "Level 43";
$lvlj->lvl = "43";
$lvlj->type = "image";
$lvlj->question = "Decode!!";
$lvlj->bgImg = "url('assets/img/qbg43.jpg')";
$lvlj->key = "byte";
$lvlj->questionImg =  array("q431.PNG","q432.PNG","q433.PNG","q434.PNG");
$lvlj->color = "white";

$lvlk = new Level();
$lvlk->lvlHead = "Level 44";
$lvlk->lvl = "44";
$lvlk->type = "basic";
$lvlk->question = 'I once survived brutal thrashing by warriors to secure the antidote in order to save a 16th century Anatomist who is related to this expression 43 47↑11 15→
Who am I??';
$lvlk->bgImg = "url('assets/img/qbg18.jpg')";
$lvlk->key = "girolamo riario";
$lvlk->questionImg = null;
$lvlk->color = "white";

$lvln = new Level();
$lvln->lvlHead = "Level 45";
$lvln->lvl = "45";
$lvln->type = "image";
$lvln->question = "What common thing did the following win?";
$lvln->bgImg = "url('assets/img/qbg50.png')";
$lvln->key = "popular vote";
$lvln->questionImg = array("q501.png","q502.png","q503.png","q504.png");
$lvln->color = "black";

$lvlaa = new Level();
$lvlaa->lvlHead = "Level 46";
$lvlaa->lvl = "46";
$lvlaa->type = "image";
$lvlaa->question = "die Meister!!";
$lvlaa->bgImg = "url('assets/img/qbg16.jpg')";
$lvlaa->key = "benson and hedges world championship 1985";
$lvlaa->questionImg = array("q161.jpeg","q162.jpeg","q163.jpeg","q164.jpeg");
$lvlaa->color = "white";
 

$lvl48 = new Level();
$lvl48->lvlHead = "Level 47";
$lvl48->lvl = "47";
$lvl48->type = "basic";
$lvl48->question = "<audio controls=''>
<source src='assets/img/48_audio.mp3' type='audio/mpeg'/>
</audio> <br> Identify the actor in the audio clip";
$lvl48->bgImg = "url('assets/img/qbg47.jpg')";
$lvl48->key = "tim baltz";
$lvl48->questionImg = null;
$lvl48->color = "white";

$lvlaaa = new Level();
$lvlaaa->lvlHead = "Level 48";
$lvlaaa->lvl = "48";
$lvlaaa->type = "basic";
$lvlaaa->question = "What links these symbols- Ω, و , 위 , วิ , ವಿ , И , ཝི ?";
$lvlaaa->bgImg = "url('assets/img/qbg53.jpg')";
$lvlaaa->key = "wikipedia";
$lvlaaa->questionImg = null;
$lvlaaa->color = "white";

$lvl_49 = new Level();
$lvl_49->lvlHead = "Level 49";
$lvl_49->lvl = "49";
$lvl_49->type = "basic";
$lvl_49->question = "X, who retired from screen acting a few years ago, had appeared in a television series in which his/her character portrayal was partially inspired by the portrayal of a film character Y that was considered deliciously creepy perversity by some. Find X and Y.";
$lvl_49->bgImg = "url('assets/img/qbg13.jpg')";
$lvl_49->key = "jack gleeson commodus";
$lvl_49->questionImg = null;
$lvl_49->color = "white";

$lvl50 = new Level();
$lvl50->lvlHead = "Level 50";
$lvl50->lvl = "50";
$lvl50->type = "image";
$lvl50->question = "What’s common among the following?";
$lvl50->bgImg = "url('assets/img/qbg54.jpg')";
$lvl50->key = "teenage mutant ninja turtles";
$lvl50->questionImg = array("q541.png","q542.png","q543.png","q544.png");
$lvl50->color = "black";

$lvl51 = new Level();
$lvl51->lvlHead = "Level 51";
$lvl51->lvl = "51";
$lvl51->type = "basic";
$lvl51->question = "I have been/am a teammate of Cristiano Ronaldo, Lionel Messi, Radamel Falcao, Mesut Ozil and David Luiz.";
$lvl51->bgImg = "url('assets/img/qbg57.jpg')";
$lvl51->key = "angel di maria";
$lvl51->questionImg = null;
$lvl51->color = "black";

$lvl52 = new Level();
$lvl52->lvlHead = "Level 52";
$lvl52->lvl = "52";
$lvl52->type = "basic";
$lvl52->question = "I have played with Adebayor, Messi, Didier Deschamps and Zidane. Identify the player";
$lvl52->bgImg = "url('assets/img/qbg58.jpg')";
$lvl52->key = "thierry henry";
$lvl52->questionImg = null;
$lvl52->color = "white";

$lvl53 = new Level();
$lvl53->lvlHead = "Level 53";
$lvl53->lvl = "53";
$lvl53->type = "basic";
$lvl53->question = "X was born after India got its independence and got elected as the 997th leader of a group. X was also a part of an action thriller film directed by a software engineer whose short film has received an award. Name X, the short film and the action thriller.";
$lvl53->bgImg = "url('assets/img/qbg35.jpg')";
$lvl53->key = "james ronald gordon copeland mbe kaatchipizhai jagamae thandhiram";
$lvl53->questionImg = null;
$lvl53->color = "white";

$lvl54 = new Level();
$lvl54->lvlHead = "Level 54";
$lvl54->lvl = "54";
$lvl54->type = "image";
$lvl54->question = "Find the connection! Hint: NOT BIRD!!";
$lvl54->bgImg = "url('assets/img/qbg054.jpeg')";
$lvl54->key = "english football clubs";
$lvl54->questionImg = array("q0541.png","q0542.png","q0543.png","q0544.png");
$lvl54->color = "black";

$lvl55 = new Level();
$lvl55->lvlHead = "Level 55";
$lvl55->lvl = "55";
$lvl55->type = "image";
$lvl55->question = "Find the connection!";
$lvl55->bgImg = "url('assets/img/qbg053.jpeg')";
$lvl55->key = "birds";
$lvl55->questionImg = array("q0531.png","q0532.png","q0533.png","q0534.png");
$lvl55->color = "white";

$lvl56 = new Level();
$lvl56->lvl = "56";
$lvl56->type = "custom";
$lvl56->bgImg = "url('assets/img/whitebg.jpg')";
$lvl56->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl56->filename = "levels/puzzle_lvl.php";


$lvl57 = new Level();
$lvl57->lvlHead = "Level 57";
$lvl57->lvl = "57";
$lvl57->type = "image";
$lvl57->question = "What is common among the following?";
$lvl57->bgImg = "url('assets/img/qbg55.jpg')";
$lvl57->key = "sherlock holmes";
$lvl57->questionImg = array("q551.png","q552.png","q553.png");
$lvl57->color = "white";

$lvl58 = new Level();
$lvl58->lvlHead = "Level 58";
$lvl58->lvl = "58";
$lvl58->type = "basic";
$lvl58->question = "gimlwp pn mfdgsutxamf bxgzlgmwzc<br>cipher";
$lvl58->bgImg = "url('assets/img/qbg34.jpg')";
$lvl58->key = "claude elwood shannon";
$lvl58->questionImg = null;
$lvl58->color = "black";

$lvl59 = new Level();
$lvl59->lvlHead = "Level 59";
$lvl59->lvl = "59";
$lvl59->type = "basic";
$lvl59->question = "This character played the role of a bisexual in a series and later acted in another series where he/she was referred using a number.  
Guess the actor’s name.";
$lvl59->bgImg = "url('assets/img/qbg36.jpg')";
$lvl59->key = "olivia wilde";
$lvl59->questionImg = null;
$lvl59->color = "white";

$lvl60 = new Level();
$lvl60->lvlHead = "Level 60";
$lvl60->lvl = "60";
$lvl60->type = "image";
$lvl60->question = 'Find the link between the numbers:';
$lvl60->bgImg = "url('assets/img/qbg31.jpg')";
$lvl60->key = "m a chidambaram stadium";
$lvl60->questionImg = array("q31.PNG");
$lvl60->color = "white";


$lvl61 = new Level();
$lvl61->lvlHead = "Level 61";
$lvl61->lvl = "61";
$lvl61->type = "basic";
$lvl61->question = "Play fair. Honesty is the key to perseverance";
$lvl61->bgImg = "url('assets/img/qbg20.jpg')";
$lvl61->key = "qnkzoxsqnwbs";
$lvl61->questionImg = null;
$lvl61->color = "white";

$endFinal = new Level();
$endFinal->lvl = "62";
$endFinal->type = "endFinal";
$endFinal->key = "qwe";
$endFinal->color = "white";






$levels = array("",$lvl1,$lvl2,$lvl3,$lvl4,$lvl5,$lvl6,$lvl7,$lvl8,$lvl9,$lvl10,$lvl11,$lvl11_1,$lvl11_2,$lvl11_3,
$lvl12,$lvl13,$lvl14,$lvl15,$lvl16,$lvl17,$lvl18,$lvl19,$lvl20,$lvl21_1,$lvl22_2,$lvl21,$lvl22,$lvl23,$lvl24,$lvl29,$lvl30,$lvlz,$lvla,$lvlb,$lvlc,$lvld,$lvle,$lvlf,
$lvlg,$lvlh,$lvlEnd,$lvli,$lvlj,$lvlk,$lvln,$lvlaa, $lvl48, $lvlaaa,$lvl_49,$lvl50,$lvl51,$lvl52,$lvl53,$lvl54,$lvl55,$lvl56,$lvl57,$lvl58,$lvl59,$lvl60,$lvl61, $endFinal);

?>
