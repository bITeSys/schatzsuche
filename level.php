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
$lvl1->question = "If not 6, what is it?";
$lvl1->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl1->key = "r";
$lvl1->questionImg = array("1.jpg");
$lvl1->color = "white";
$lvl1->fontweight = "800";
$lvl1->fontsize = "20px";


$lvl2 = new Level();
$lvl2->lvlHead = "Level 2";
$lvl2->lvl = "2";
$lvl2->type = "image";
$lvl2->question = "Eye on the score...";
$lvl2->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl2->key = "moneyball";
$lvl2->questionImg = array("2.png");
$lvl2->color = "white";

$lvl3 = new Level();
$lvl3->lvlHead = "Level 3";
$lvl3->lvl = "3";
$lvl3->type = "image";
$lvl3->question = "Guess the tool";
$lvl3->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl3->key = "power bi";
$lvl3->questionImg = array("3.png");
$lvl3->color = "white";

// 4
$lvl4 = new Level();
$lvl4->lvlHead = "Level 4";
$lvl4->lvl = "4";
$lvl4->type = "image";
$lvl4->question = "Who is the artist referred here?";
$lvl4->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl4->key = "taylor swift";
$lvl4->questionImg = array("4.png");
$lvl4->color = "white";

$lvl5 = new Level();
$lvl5->lvlHead = "Level 5";
$lvl5->lvl = "5";
$lvl5->type = "image";
$lvl5->question = "Guess the movie";
$lvl5->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl5->key = "the social network";
$lvl5->questionImg = array("5.png");
$lvl5->color = "white";

$lvl6 = new Level();
$lvl6->lvlHead = "Level 6 ";
$lvl6->lvl = "6";
$lvl6->type = "image";
$lvl6->question = "Must Watch 101";
$lvl6->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl6->key = "parasite";
$lvl6->questionImg = array("6.png");
$lvl6->color = "white";
$lvl6->class = "";

$lvl7 = new Level();
$lvl7->lvlHead = "Level 7 ";
$lvl7->lvl = "7";
$lvl7->type = "image";
$lvl7->question = "Know your Bs";
$lvl7->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl7->key = "whitney wolfe herd";
$lvl7->questionImg = array("7.png");
$lvl7->color = "white";

$lvl8 = new Level();
$lvl8->lvlHead = "Level 8";
$lvl8->lvl = "8";
$lvl8->type = "image";
$lvl8->question = "Make ______ SMLR";
$lvl8->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl8->key = "audios";
$lvl8->questionImg = array("8.png");
$lvl8->color = "white";



// $lvl8 = new Level();
// $lvl8->lvl = "8";
// $lvl8->type = "custom";
// $lvl8->key = "golden key";
// $lvl8->filename = "levels/keys_lvl.php";

$lvl9 = new Level();
$lvl9->lvlHead = "Level 9";
$lvl9->lvl = "9";
$lvl9->type = "image";
$lvl9->question = "Easy peasy, before we crank it up a notch,";
$lvl9->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl9->key = "nikola tesla";
$lvl9->questionImg = array("9.png");
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
$lvl10->question = "...";
$lvl10->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl10->key = "kessler syndrome";
$lvl10->questionImg = array("10.png");
$lvl10->color = "white";

// $lvl10 = new Level();
// $lvl10->lvl = "10";
// $lvl10->type = "custom";
// $lvl10->key = "s vyfo iye";
// $lvl10->filename = "levels/title_lvl.php";

$lvl11 = new Level();
$lvl11->lvlHead = "Level 11";
$lvl11->lvl = "11";
$lvl11->type = "image";
$lvl11->question = "WFH Hyphen Virus";
$lvl11->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl11->key = "covid-19";
$lvl11->questionImg = array("11.png");
$lvl11->color = "white";

$lvl11_1 = new Level();
$lvl11_1->lvlHead = "Level 12";
$lvl11_1->lvl = "12";
$lvl11_1->type = "image";
$lvl11_1->question = "a+b+c+d+e = ?";
$lvl11_1->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl11_1->key = "32";
$lvl11_1->questionImg = array("12.png");
$lvl11_1->color = "white";

$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = "Name of the Rocket (One Word)";
$lvl11_2->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl11_2->key = "starship";
$lvl11_2->questionImg = array("13.png");
$lvl11_2->color = "white";

/*$lvl11_2 = new Level();
$lvl11_2->lvlHead = "Level 13: Valley of Images - 3rd FLoor";
$lvl11_2->lvl = "13";
$lvl11_2->type = "image";
$lvl11_2->question = "Connect the images and find the personality";
$lvl11_2->bgImg = "url('assets/img/whitebg.png')";
$lvl11_2->key = "larry page";
$lvl11_2->questionImg = array("kitty.png","102.png","103.png","aero.png");
$lvl11_2->color = "black";*/

$lvl11_3 = new Level();
$lvl11_3->lvlHead = "Level 14";
$lvl11_3->lvl = "14";
$lvl11_3->type = "image";
$lvl11_3->question = "Alt + ?";
$lvl11_3->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl11_3->key = "bitesys";
$lvl11_3->questionImg = array("14.png");
$lvl11_3->color = "white";

$lvl12 = new Level();
$lvl12->lvlHead = "Level 15";
$lvl12->lvl = "15";
$lvl12->type = "image";
$lvl12->question = "Who is the person referred here?";
$lvl12->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl12->key = "sourav ganguly";
$lvl12->questionImg = array("15.png");
$lvl12->color = "white";

$lvl13 = new Level();
$lvl13->lvlHead = "Level 16";
$lvl13->lvl = "16";
$lvl13->type = "image";
$lvl13->question = "What is the new promotional tool?";
$lvl13->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl13->key = "marquee";
$lvl13->questionImg = array("16.png");
$lvl13->color = "white";

$lvl14 = new Level();
$lvl14->lvlHead = "Level 17";
$lvl14->lvl = "17";
$lvl14->type = "image";
$lvl14->question = "Who is the person referred here?";
$lvl14->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl14->key = "rohit sharma";
$lvl14->questionImg = array("17.png");
$lvl14->color = "white";

$lvl15 = new Level();
$lvl15->lvlHead = "Level 18";
$lvl15->lvl = "18";
$lvl15->type = "image";
$lvl15->question = "Cross Training.";
$lvl15->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl15->key = "everyone has his day and some days last longer than others.";
$lvl15->questionImg = array("18.png");
$lvl15->color = "white";

$lvl16 = new Level();
$lvl16->lvlHead = "Level 19";
$lvl16->lvl = "19";
$lvl16->type = "image";
$lvl16->question = "Guess. Solve. Conquer.";
$lvl16->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl16->key = "deep blue";
$lvl16->questionImg = array("19.png");
$lvl16->color = "white";

$lvl17 = new Level();
$lvl17->lvlHead = "Level 20";
$lvl17->lvl = "20";
$lvl17->type = "image";
$lvl17->question = "Guess. Solve. Conquer.";
$lvl17->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl17->key = "goal-line technology";
$lvl17->questionImg = array("20.png");
$lvl17->color = "white";



/*$lvl17 = new Level();
$lvl17->lvlHead = "Level 19: Valley of Images - 9th Floor";
$lvl17->lvl = "20";
$lvl17->type = "endFinal";
$lvl17->question = "Connect the images<br>Hint: Tangle";
$lvl17->bgImg = "url('assets/img/whiteBG.png')";
$lvl17->key = "";
$lvl17->questionImg = array(".png");
$lvl17->color = "black";*/

$lvl18 = new Level();
$lvl18->lvlHead = "Level 21";
$lvl18->lvl = "21";
$lvl18->type = "image";
$lvl18->question = "Guess. Solve. Conquer.";
$lvl18->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl18->key = "alphazero";
$lvl18->questionImg = array("21.png");
$lvl18->color = "white";

/*$lvl18 = new Level();
$lvl18->lvlHead = "Level 21: Valley of Images - 11th Floor";
$lvl18->lvl = "21";
$lvl18->type = "image";
$lvl18->question = "Connect the images";
$lvl18->bgImg = "url('assets/img/whiteBG.png')";
$lvl18->key = "oneplus5t";
$lvl18->questionImg = array("18_a.png","18_b.png","18_c.png");
$lvl18->color = "black";*/

$lvl19 = new Level();
$lvl19->lvlHead = "Level 22";
$lvl19->lvl = "22";
$lvl19->type = "image";
$lvl19->question = "Guess. Solve. Conquer.";
$lvl19->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl19->key = "adobe xd";
$lvl19->questionImg = array("22.png");
$lvl19->color = "white";

$lvl20 = new Level();
$lvl20->lvlHead = "Level 23";
$lvl20->lvl = "23";
$lvl20->type = "image";
$lvl20->question = "Guess. Solve. Conquer.";
$lvl20->key = "journey to the centre of the earth";
$lvl20->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl20->questionImg = array("23.png");
$lvl20->color = "white";

$lvl21_1 = new Level();
$lvl21_1->lvlHead = "Level 24";
$lvl21_1->lvl = "24";
$lvl21_1->type = "image";
$lvl21_1->question = "Guess. Solve. Conquer.";
$lvl21_1->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl21_1->key = "john carreyrou";
$lvl21_1->questionImg = array("24.png");
$lvl21_1->color = "white";

$lvl22_2 = new Level();
$lvl22_2->lvlHead = "Level 25";
$lvl22_2->lvl = "25";
$lvl22_2->type = "image";
$lvl22_2->question = "Which film?";
$lvl22_2->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl22_2->key = "the social dilemma";
$lvl22_2->questionImg = array("25.png");
$lvl22_2->color = "white";


$lvl21 = new Level();
$lvl21->lvlHead = "Level 26";
$lvl21->lvl = "26";
$lvl21->type = "image";
$lvl21->question = "Guess. Solve. Conquer.";
$lvl21->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl21->key = "the imitation game";
$lvl21->questionImg =  array("26.png");
$lvl21->color = "white";

$lvl22 = new Level();
$lvl22->lvlHead = "Level 27";
$lvl22->lvl = "27";
$lvl22->type = "image";
$lvl22->question = "Which film? ";
$lvl22->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl22->key = "her";
$lvl22->questionImg = array("27.png");
$lvl22->color = "white";

$lvl23 = new Level();
$lvl23->lvlHead = "Level 28 ";
$lvl23->lvl = "28";
$lvl23->type = "basic";
$lvl23->question = "At one time  I belonged  to an organization called the pious circle. Its members were of both sexes. One of them , who  had been  engaged  to another  and had thought better  of it , sent her as  a parting gift a ring. The message on the gift has an ulterior significance . What is that? The gift had the following inscription: 
For a girl I loved contrived. By nature tough, her heart survived.";
$lvl23->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl23->key = "pi";
$lvl23->questionImg = null;
$lvl23->color = "white";



// $lvl24 = new Level();
// $lvl24->lvlHead = "Level 29";
// $lvl24->lvl = "29";
// $lvl24->type = "image";
// $lvl24->question = "Guess. Solve. Conquer.";Identify the link between these two pictures?";
// $lvl24->bgImg = "url('assets/img/whitebg.png')";
// $lvl24->key = "april bowlby";
// $lvl24->questionImg = array(".png");
// $lvl24->color = "black";


$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Which analytical tool?";
$lvl24->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl24->key = "umpire decision review system";
$lvl24->questionImg = array("29.png");
$lvl24->color = "white";


/*$lvl24 = new Level();
$lvl24->lvlHead = "Level 29";
$lvl24->lvl = "29";
$lvl24->type = "image";
$lvl24->question = "Guess. Solve. Conquer.";Its not like the others";
$lvl24->bgImg = "url('assets/img/whitebg.png')";
$lvl24->key = "i luv encryption";
$lvl24->questionImg = array("29a.png","29c.PNG");
$lvl24->color = "black";*/

$lvl29 = new Level();
$lvl29->lvlHead = "Level 30";
$lvl29->lvl = "30";
$lvl29->type = "image";
$lvl29->question = "Which tool is it referred as?";
$lvl29->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl29->key = "kaizala";
$lvl29->questionImg = array("30.png");
$lvl29->color = "white";



/*$lvl29 = new Level();
$lvl29->lvl = "30";
$lvl29->type = "custom";
$lvl29->key = "voidimg15img14img13img12img11img10img9img8img7img6img5img4img3img2img1";
$lvl29->filename = "levels/puzzle_lvl.php";*/

$lvl30 = new Level();
$lvl30->lvlHead = "Level 31";
$lvl30->lvl = "31";
$lvl30->type = "image";
$lvl30->question = "Guess. Solve. Conquer.";
$lvl30->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl30->key = "semi structured data";
$lvl30->questionImg = array("31.png");
$lvl30->color = "white";


/*$lvl30 = new Level();
$lvl30->lvl = "31";
$lvl30->type = "custom";
$lvl30->key = "";
$lvl30->filename = "levels/auth_lvl.php";*/

$lvlz = new Level();
$lvlz->lvlHead = "Level 32";
$lvlz->lvl = "32";
$lvlz->type = "image";
$lvlz->question = "Guess. Solve. Conquer.";
$lvlz->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlz->key = "dyson sphere";
$lvlz->questionImg = array("32.png");
$lvlz->color = "white";

// $lvlz = new Level();
// $lvlz->lvlHead = "Level 32 : Valley of Sounds";
// $lvlz->lvl = "32";
// $lvlz->type = "image";
// $lvlz->question = "Guess. Solve. Conquer.";25.5788|91.8933";
// $lvlz->bgImg = "url('assets/img/whitebg.png')";
// $lvlz->key = "shillong";
// $lvlz->questionImg = array(".png");
// $lvlz->color = "white";

$lvla = new Level();
$lvla->lvlHead = "Level 33 ";
$lvla->lvl = "33";
$lvla->type = "image";
$lvla->question = "Guess. Solve. Conquer.";
$lvla->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvla->key = "ripple,dogecoin";
$lvla->questionImg = array("33.png");
$lvla->color = "white";

$lvlb = new Level();
$lvlb->lvlHead = "Level 34";
$lvlb->lvl = "34";
$lvlb->type = "image";
$lvlb->question = "Guess. Solve. Conquer.";
$lvlb->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlb->key = "enigma";
$lvlb->questionImg = array("34.png");
$lvlb->color = "white";


// $lvlb = new Level();
// $lvlb->lvlHead = "Level 34";
// $lvlb->lvl = "34";
// $lvlb->type = "image";
// $lvlb->question = "Guess. Solve. Conquer.";.-- .... ---<br>Hint: Someone related to it";
// $lvlb->bgImg = "url('assets/img/whitebg.png')";
// $lvlb->key = "tedros adhanom";
// $lvlb->questionImg = array(".png");
// $lvlb->color = "white";

$lvlc = new Level();
$lvlc->lvlHead = "Level 35";
$lvlc->lvl = "35";
$lvlc->type = "image";
$lvlc->question = 'Enter Comma Separated Values, No Space';
$lvlc->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlc->key = "2,4,6";
$lvlc->questionImg = array("35.png");
$lvlc->color = "white";

$lvld = new Level();
$lvld->lvlHead = "Level 36";
$lvld->lvl = "36";
$lvld->type = "image";
$lvld->question = "Guess. Solve. Conquer.";
$lvld->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvld->key = "sanjeev bikhchandani";
$lvld->questionImg = array("36.png");
$lvld->color = "white";

$lvle = new Level();
$lvle->lvlHead = "Level 37";
$lvle->lvl = "37";
$lvle->type = "image";
$lvle->question = "Guess. Solve. Conquer.";
$lvle->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvle->key = "cambridge analytica";
$lvle->questionImg = array("37.png");
$lvle->color = "white";


$lvlf = new Level();
$lvlf->lvlHead = "Level 38";
$lvlf->lvl = "38";
$lvlf->type = "image";
$lvlf->question = "Transformed into what?";
$lvlf->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlf->key = "microsoft azure";
$lvlf->questionImg = array("38.png");
$lvlf->color = "white";

// $lvlf = new Level();
// $lvlf->lvlHead = "Level 38";
// $lvlf->lvl = "38";
// $lvlf->type = "image";
// $lvlf->question = "Guess. Solve. Conquer.";: ( ) {  : | :  &  } ; :     :'I ran here 1st'";
// $lvlf->bgImg = "url('assets/img/whitebg.png')";
// $lvlf->key = "ibm system 360";
// $lvlf->questionImg = array(".png");
// $lvlf->color = "black";

$lvlg = new Level();
$lvlg->lvlHead = "Level 39";
$lvlg->lvl = "39";
$lvlg->type = "image";
$lvlg->question = "What is this approach referred here?";
$lvlg->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlg->key = "freemium marketing";
$lvlg->questionImg = array("39.png");
$lvlg->color = "white";

$lvlh = new Level();
$lvlh->lvlHead = "Level 40";
$lvlh->lvl = "40";
$lvlh->type = "image";
$lvlh->question = "Guess. Solve. Conquer.";
$lvlh->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlh->key = "margin call";
$lvlh->questionImg = array("40.png");
$lvlh->color = "white";

$lvlEnd = new Level();
$lvlEnd->lvlHead = "Level 41";
$lvlEnd->lvl = "41";
$lvlEnd->type = "image";
$lvlEnd->question = "What analytical measure is this?";
$lvlEnd->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlEnd->key = "pay per click";
$lvlEnd->questionImg = array("41.png");
$lvlEnd->color = "white";

$lvli = new Level();
$lvli->lvlHead = "Level 42 ";
$lvli->lvl = "42";
$lvli->type = "image";
$lvli->question = "Guess. Solve. Conquer.";
$lvli->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvli->key = "apple ibm 5150 alan turing 8085";
$lvli->questionImg = array("42.png");
$lvli->color = "white";



$lvlj = new Level();
$lvlj->lvlHead = "Level 43";
$lvlj->lvl = "43";
$lvlj->type = "image";
$lvlj->question = "Guess. Solve. Conquer.";
$lvlj->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlj->key = "issac asimov";
$lvlj->questionImg =  array("43.png");
$lvlj->color = "white";


$lvlk = new Level();
$lvlk->lvlHead = "Level 44";
$lvlk->lvl = "44";
$lvlk->type = "image";
$lvlk->question = "Solve.";
$lvlk->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlk->key = "21280";
$lvlk->questionImg = array("44.png");
$lvlk->color = "white";

$lvln = new Level();
$lvln->lvlHead = "Level 45";
$lvln->lvl = "45";
$lvln->type = "image";
$lvln->question = "Guess. Solve. Conquer.";
$lvln->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvln->key = "cryptojacking";
$lvln->questionImg = array("45.png");
$lvln->color = "white";

$lvlaa = new Level();
$lvlaa->lvlHead = "Level 46";
$lvlaa->lvl = "46";
$lvlaa->type = "image";
$lvlaa->question = "Guess. Solve. Conquer.";
$lvlaa->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlaa->key = "acoustic mirror";
$lvlaa->questionImg = array("46.png");
$lvlaa->color = "white";
 

$lvl48 = new Level();
$lvl48->lvlHead = "Level 47";
$lvl48->lvl = "47";
$lvl48->type = "image";
$lvl48->question = "Guess. Solve. Conquer.";
$lvl48->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl48->key = "busy beaver";
$lvl48->questionImg = array("47.png");
$lvl48->color = "white";

$lvlaaa = new Level();
$lvlaaa->lvlHead = "Level 48";
$lvlaaa->lvl = "48";
$lvlaaa->type = "image";
$lvlaaa->question = "Guess. Solve. Conquer.";
$lvlaaa->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvlaaa->key = "matrioshka brain";
$lvlaaa->questionImg = array("48.png");
$lvlaaa->color = "white";

$lvl_49 = new Level();
$lvl_49->lvlHead = "Level 49";
$lvl_49->lvl = "49";
$lvl_49->type = "image";
$lvl_49->question = "Guess. Solve. Conquer.";
$lvl_49->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl_49->key = "hamblin glasses";
$lvl_49->questionImg = array("49.png");
$lvl_49->color = "white";

$lvl50 = new Level();
$lvl50->lvlHead = "Level 50";
$lvl50->lvl = "50";
$lvl50->type = "image";
$lvl50->question = "Show me the information!  How to see the information?";
$lvl50->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl50->key = "qr code";
$lvl50->questionImg = array("50.png");
$lvl50->color = "white";

$lvl51 = new Level();
$lvl51->lvlHead = "Level 51";
$lvl51->lvl = "51";
$lvl51->type = "image";
$lvl51->question = "Which new analytical software is this built by a giant?";
$lvl51->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl51->key = "microsoft mesh";
$lvl51->questionImg = array("51.png");
$lvl51->color = "white";

$lvl52 = new Level();
$lvl52->lvlHead = "Level 52";
$lvl52->lvl = "52";
$lvl52->type = "image";
$lvl52->question = "Guess. Solve. Conquer.";
$lvl52->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl52->key = "impulsoria";
$lvl52->questionImg = array("52.png");
$lvl52->color = "white";

$lvl53 = new Level();
$lvl53->lvlHead = "Level 53";
$lvl53->lvl = "53";
$lvl53->type = "image";
$lvl53->question = "Guess. Solve. Conquer.";
$lvl53->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl53->key = "messier87";
$lvl53->questionImg = array("53.png");
$lvl53->color = "white";

$lvl54 = new Level();
$lvl54->lvlHead = "Level 54";
$lvl54->lvl = "54";
$lvl54->type = "image";
$lvl54->question = "What is this digital object referred here?";
$lvl54->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl54->key = "non-fungible tokens";
$lvl54->questionImg = array("54.png");
$lvl54->color = "white";

$lvl55 = new Level();
$lvl55->lvlHead = "Level 55";
$lvl55->lvl = "55";
$lvl55->type = "image";
$lvl55->question = "Guess. Solve. Conquer.";
$lvl55->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl55->key = "propulsive landing";
$lvl55->questionImg = array("55.png");
$lvl55->color = "white";

$lvl56 = new Level();
$lvl56->lvlHead = "Level 56";
$lvl56->lvl = "56";
$lvl56->type = "image";
$lvl56->question = "Guess. Solve. Conquer.";
$lvl56->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl56->key = "dynasphere";
$lvl56->questionImg = array("56.png");
$lvl56->color = "white";


$lvl57 = new Level();
$lvl57->lvlHead = "Level 57";
$lvl57->lvl = "57";
$lvl57->type = "image";
$lvl57->question = "Guess. Solve. Conquer.";
$lvl57->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl57->key = "biomimicry";
$lvl57->questionImg = array("57.png");
$lvl57->color = "white";

$lvl58 = new Level();
$lvl58->lvlHead = "Level 58";
$lvl58->lvl = "58";
$lvl58->type = "image";
$lvl58->question = "Guess. Solve. Conquer.";
$lvl58->bgImg = "url('assets/img2021/bg_img.jpg')";
$lvl58->key = "neuromorphic computing";
$lvl58->questionImg = array("58.png");
$lvl58->color = "white";

//$lvl59 = new Level();
//$lvl59->lvlHead = "Level 59";
//$lvl59->lvl = "59";
//$lvl59->type = "image";
//$lvl59->question = "Guess. Solve. Conquer.";This character played the role of a bisexual in a series and later acted in another series where he/she was referred using a number.  
//Guess the actor’s name.";
//$lvl59->bgImg = "url('assets/img/qbg36.png')";
//$lvl59->key = "olivia wilde";
//$lvl59->questionImg = array(".png");
//$lvl59->color = "white";

//$lvl60 = new Level();
//$lvl60->lvlHead = "Level 60";
//$lvl60->lvl = "60";
//$lvl60->type = "image";
//$lvl60->question = 'Find the link between the numbers:';
//$lvl60->bgImg = "url('assets/img/qbg31.png')";
//$lvl60->key = "m a chidambaram stadium";
//$lvl60->questionImg = array("q31.PNG");
//$lvl60->color = "white";


//$lvl61 = new Level();
//$lvl61->lvlHead = "Level 61";
//$lvl61->lvl = "61";
//$lvl61->type = "image";
//$lvl61->question = "Guess. Solve. Conquer.";Play fair. Honesty is the key to perseverance";
//$lvl61->bgImg = "url('assets/img/qbg20.png')";
//$lvl61->key = "qnkzoxsqnwbs";
//$lvl61->questionImg = array(".png");
//$lvl61->color = "white";

$endFinal = new Level();
$endFinal->lvl = "59";
$endFinal->type = "endFinal";
$endFinal->key = "qwe";
$endFinal->color = "white";






$levels = array("",$lvl1,$lvl2,$lvl3,$lvl4,$lvl5,$lvl6,$lvl7,$lvl8,$lvl9,$lvl10,$lvl11,$lvl11_1,$lvl11_2,$lvl11_3,
$lvl12,$lvl13,$lvl14,$lvl15,$lvl16,$lvl17,$lvl18,$lvl19,$lvl20,$lvl21_1,$lvl22_2,$lvl21,$lvl22,$lvl23,$lvl24,$lvl29,$lvl30,$lvlz,$lvla,$lvlb,$lvlc,$lvld,$lvle,$lvlf,
$lvlg,$lvlh,$lvlEnd,$lvli,$lvlj,$lvlk,$lvln,$lvlaa, $lvl48, $lvlaaa,$lvl_49,$lvl50,$lvl51,$lvl52,$lvl53,$lvl54,$lvl55,$lvl56,$lvl57,$lvl58, $endFinal);

?>
