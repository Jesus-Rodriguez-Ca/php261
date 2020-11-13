<?php





define('THIS_PAGE',  basename($_SERVER['PHP_SELF']));
switch (THIS_PAGE){
    case 'index.php':
        $title = 'Home page';
        $body_class = 'home';
        break;
        
    case 'daily.php':
        $title = 'Daily page';
        $body_class = 'daily';
        break;
    
    case 'index.php':
        $title = 'Home page';
        $body_class = 'home';
        break;
}

if (isset($_GET['today'])){
    
    $today = $_GET['today'];
}else{
    $today = date('l');
    
}

switch($today){
    case 'Sunday' : 
        $quote = 'Quote of Sunday';
        $pic = 'sunday.png';
        $alt = 'Sunday quote about the truth';
        $content = 'Sometimes the truth,
we are tempted to hide.
Due to our guilt,
or just simple pride.

An exaggeration,
may lead to a lie.
Those that affected,
may break down and cry.

When honesty,
we try to avoid.
Relationships,
are often destroyed.

Our intentions,
are not to distress.
The only solution,
is to genuinely confess.

If we continue these ways,
we shall never gain trust.
For healthy relationships,
it’s an absolute must.

When we have done wrong,
we should be honest and frank.
People will appreciate,
in the end they will thank.

- tree.cards';
        break;
    case 'Monday' : 
        $quote = 'Quote of Monday';
        $pic = 'monday.png';
        $alt = 'Quote of monday about new days';
        $content = 'When tomorrow comes this day will be gone forever,
but I shall hold something which I have traded for it.

It may be no more than a memory,
but if it is a worthy one I shall not regret the price.

I want it to be gain not loss, good not evil, success not failure.';
        break;
    case 'Tuesday' : 
        $quote = 'Quote of Tuesday';
        $pic = 'tuesday.png';
        $alt = 'Quote of tuesday about a new world';
        $content = 'Not like the brazen giant of Greek fame,
With conquering limbs astride from land to land;
Here at our sea-washed, sunset gates shall stand
A mighty woman with a torch, whose flame
Is the imprisoned lightning, and her name
Mother of Exiles. From her beacon-hand
Glows world-wide welcome; her mild eyes command
The air-bridged harbor that twin cities frame.
“Keep, ancient lands, your storied pomp!” cries she
With silent lips. “Give me your tired, your poor,
Your huddled masses yearning to breathe free,
The wretched refuse of your teeming shore.
Send these, the homeless, tempest-tost to me,
I lift my lamp beside the golden door! - Emma Lazarus';
        break;
    case 'Wednesday' : 
        $quote = ' Quote of Wednesday';
        $pic = 'wednesday.png';
        $alt = 'Quote of wednesday about working hard';
        $content ='Life is a lesson
full of adventures to ride
it is a product of achievement and joy,
suffer and pain
but there are a lot of test
that you will take
some challenges
to test your patience
and perseverance
plus
hardwork that you should try
but after all, you’ll still
get through all of these zigzag lines
to the path that you will never know
what consesus would it bring into you.
Whether you labor it in
each continental parts
of living the success in life.
your choice is your destiny,
your will is what makes you.
& so you create what you become
and you become what you think
simple, but people always
choose the easy route
rather than the hard route
that will only makes them
overwhelmed and uncomfortable.
though uncomfortable things
will only let you G-R-O-W
once you give it a G-O-
To C-H-A-N-G-E
is a M-U-S-T
and so is to be a better self.
because to be a better person
means to suffer
to be a better person
means to change
and to be a better person
means to be kind and to be grateful for.


quotational marks that you carried in you
all along the way,
it will guide you
to reach your dreams and goals
in life.

this is the presentation
to make an impact to the world. -Jerelii';
        break;
    case 'Thursday' : 
        $quote = 'Quote of Thursday';
        $pic = 'thursday.png';
        $alt = 'Quote of Thursdau about livinf life';
        $content = 'I read of a man who stood to speak at the funeral of a friend.
He referred to the dates on the tombstone from the beginning… to the end.
He noted that first came the date of birth and spoke of the following date with tears,
but he said what mattered most of all was the dash between those years.
For that dash represents all the time they spent alive on earth
and now only those who loved them know what that little line is worth.
For it matters not, how much we own, the cars… the house… the cash.
What matters is how we live and love and how we spend our dash.
So think about this long and hard; are there things you’d like to change?
For you never know how much time is left that still can be rearranged.
To be less quick to anger and show appreciation more
and love the people in our lives like we’ve never loved before.
If we treat each other with respect and more often wear a smile…
remembering that this special dash might only last a little while.
So when your eulogy is being read, with your life’s actions to rehash,
would you be proud of the things they say about how you lived your dash?
— By Linda Elli';
        break;
    case 'Friday' : 
        $quote = 'Quote of Friday';
        $pic = 'friday.png';
        $alt = 'Fridays quote';
        $content = "Seriously, if you always put limits on what you can do, physical or anything else; it wll spread over into the rest of your life. It will spread into your work, into your morality, into your entire being... There are NO limits. There are plateus, but you must not stay there, you must go beyond them. If it kills you, it kills you. A man must constantly exceed his level.
― Bruce Lee";
        break;
    case 'Saturday' : 
        $quote = 'Quote of Saturday';
        $pic = 'saturday.png';
        $alt = 'Quote of saturday about perseverance';
        $content = 'Keep Your Focus

You developed your goals and now have a plan
You know deep in your heart that you can
You may feel at times that you have failed
But by persevering you will fill your sail.

Continue to take it step by step
The goals you set are your prep
When progress is slow and you are feeling down
Keep moving forward and hold your ground.

When obstacles are around every turn
You must stay focused on what you yearn
You see success you will find
When you persevere and focus clear in your mind.

The mountain may seem overwhelming
Your dreams out of sight
But determination brings on a great might
Persevere and keep moving forward
Never doubt that the day will come
When all your efforts will be achieved and then some.
 - Catherine Pulsifer';
        break;
}


?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <title> <?php echo $title; ?> </title>
  <meta charset="utf-8" />
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://kit.fontawesome.com/796ef3a32a.js" crossorigin="anonymous"></script>
  
 </head>
      <body class="<?php echo $body_class; ?>">

    <header>
     <h1 class="logo">DAILY QUOTES</h1>
       <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav> 
            <ul>
                
                <li><a href="index.php" class="active"><i class="fas fa-laptop"></i> Today is <?php echo $today; ?></a></li>
                         
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
          <span></span>
        </label>
     </header>
    <div id="wrapper">
         <img class="desktop" src="images/<?php echo $pic; ?>" alt="<?php echo $alt; ?>" />
    <h1><?php echo $quote; ?></h1>
            <p><?php echo $content;  ?></p>
        <p>Click below to see all he quotes!</p>
        
        <ul>
        <li><a href="index.php?today=Sunday">Sunday</a></li>
        <li><a href="index.php?today=Monday">Monday</a></li>
        <li><a href="index.php?today=Tuesday">Tuesday</a></li>
        <li><a href="index.php?today=Wednesday">Wednesday</a></li>
        <li><a href="index.php?today=Thursday">Thursday</a></li>
        <li><a href="index.php?today=Friday">Friday</a></li>
        <li><a href="index.php?today=Saturday">Saturday</a></li>
        </ul>

            </div>
        
         
     <footer>
           
                <p><small>&copy; Copyright, <?php 
                echo date('Y');
                ?> by Jesus Rodriguez, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
    
        </footer>   
     </body>
      
</html>