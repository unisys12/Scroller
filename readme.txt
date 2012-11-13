/* Scroller Readme */

** 2012-11-11 **
This is an attempt for me to create a scrolling marquee type of thing for no other reason that to see if I can. I would like to get this project to the point were I can not only pull info into the marquee from a database, which is what I have right now, but also include other sources from say Tweeter, Facebook, Google+... you get the idea. 

I am still really new to web development (about two years at the time of this writing), so from time to time I come up with these ideas and wonder if I can do it. I know this is not a new idea or anything, just sometimes I see stuff on a page and say to myself, "Self! I wonder if you can figure out how to do that? Without looking at their code!!" This is one of those experiments. 

First I created a decent sized text area to display the data. I am still not sure if this is the best method, but we will see. Now that I think about it, I might be better off with just a div. Maybe give the background a gradient gray background with a div with a white background, surrounded by maybe a box-shadow just to add some depth. Yeah, I think that would work better. 

The "Submit a Request" button takes you to the form that allows the user to submit a request. Upon submission, we submit the data to a MySQL database. This is pretty much the point I am at right now. 

** 2012-11-12 **
Well, I applied the styling that I suggested above and added animation with keyframes for animation, as of now. 

** 2012-11-13 **
--TO DO LIST --
Let's get the easy stuff out of the way first
1) Add form validation to the scroller_view.php for the scroller-form
2) Work with the styling... GOD! I suck at styling, so I wont spend too much time there.
3) Recheck my HTML and make sure everything is as it should be
4) Map out the file structure within this readme. Since I am using Codeigniter, this could be confusing as crap to someone that has never used CI.
5) Move the query, for the requests, out of the controller and into the view... as they should be. Sorry, I was lazy and we all know that lazy equals really bad code. 

For the hairier stuff
*1) Use jQuery to adjust offset of scroll dynamically. I would guess by counting the number of lines in the UL? Counting LI's will not work, since each list item could be a different height or number of lines. Not sure how to go about that yet. 
2) Read up on the Twitter API and others to see how to go about acccessing their content. Might have to go back through jQuery in 30 Days by Jeffery Way. He covers twitter there, but a lot may have changed since then. 
 
Later that same night....

Welp! I got the jquery figured out. Took me most of the day to nail it down, but I did. Only thing left there is the speed. If you limit the returns to seven, with a duration of 8 secs, it looks fine. Moves by at a nice smooth pace. But if you open up the flood gates and let everything through at once (return everything from the table) the speed is so fast! That is normal, because it is trying to display more records in the same amount of time. All I have to do now is figure out the math to dynamically adjust the duration based on the height of the UL. 

I did tidy up the HTML a bit, but nothing worth mentioning. But I did comment out the @keyframes and animation calls in the CSS. Didn't work on really anything else today except getting the jQuery working close to how I wanted it. Will work on the rest in the morning... 