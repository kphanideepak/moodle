/***
 *** General styles (scope: all of lesson)
 ***/
 
.mod-lesson .contents {
    text-align: left;
}

.mod-lesson .addlinks {
    font-size: .8em;
}

.mod-lesson .userinfotable .cell,
.mod-lesson .userinfotable .userpicture {
    vertical-align: middle;
}

/***
 *** Style for view.php
 ***/

#mod-lesson-view .password-form {
    text-align: center;
    margin-top: 20px;
}

#mod-lesson-view .password-form .submitbutton {
    display: inline;
}

/***
 *** Style for essay.php
 ***/

#mod-lesson-essay .graded {
    color:#DF041E;
}

#mod-lesson-essay .sent {
    color:#006600;
}

#mod-lesson-essay .ungraded {
    color:#999999;
}

#mod-lesson-essay .gradetable {
    margin-bottom: 20px;
}

#mod-lesson-essay .buttons {
    text-align: center;
}

/***
 *** Style for responses
 ***/

/* .response style is applied for both .correct and .incorrect */
.mod-lesson .response {
    padding-top: 10px;
}

/* for correct responses (can override .response) */
.mod-lesson .correct {
    /*color: green;*/
}

/* for incorrect responses (can override .response) */
.mod-lesson .incorrect {
    /*color: red;*/
}

/* for highlighting matches in responses for short answer regular expression (can override .incorrect) */
.mod-lesson .matches {
    /*color: red;*/
}

/***
 *** Slide show Style
 ***/

/* NOTE: background color, height and width are set in the lesson settings */
.mod-lesson .slideshow {  
    overflow: auto;
    padding-right: 16px; /* for the benefit of macIE5 only */ 
    /* \ commented backslash hack - recover from macIE5 workarounds, it will ignore the following rule */
    padding-right: 0;
    padding: 15px;
}

/***
 *** Left Menu Styles
 ***/

.mod-lesson .leftmenu_container {
  width:170px;
  height:400px;
  overflow:auto;
  vertical-align:top;
  padding-bottom: 15px;  /* for the sake of MacIE5 only */
}
.mod-lesson .leftmenu_title {
}
.mod-lesson .leftmenu_courselink {
    font-size:.9em;
}
.mod-lesson .leftmenu_links {
    font-size:.85em;
    font-style: normal;
}
.mod-lesson .leftmenu_links ul {
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    padding-top: 5px;
    padding-left: 10px;
}

.mod-lesson .leftmenu_selected_link {
}

.mod-lesson .leftmenu_not_selected_link {
}

.mod-lesson .skip {
    position: absolute;
    left: -1000em;
    width: 20em;
}


/***
 *** Lesson Buttons
 ***/

.mod-lesson .lessonbutton a {
  padding-left:1em;
  padding-right:1em;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited, 
.mod-lesson .lessonbutton a:hover {
    color: #000;
    text-decoration: none;
}

.mod-lesson .lessonbutton a:link,
.mod-lesson .lessonbutton a:visited {
  border-top: 1px solid #cecece;
  border-bottom: 2px solid #4a4a4a;
  border-left: 1px solid #cecece;
  border-right: 2px solid #4a4a4a;
}

.mod-lesson .lessonbutton a:hover {
  border-bottom: 1px solid #cecece;
  border-top: 2px solid #4a4a4a;
  border-right: 1px solid #cecece;
  border-left: 2px solid #4a4a4a;
}


/***
 ***  Use these to override lessonbutton class
 ***  Or just comment out all of lessonbutton class definitions and start from scratch below
 ***/

/* for previous branch buttons only */
.mod-lesson .previousbutton {
}

/* for next branch buttons only */
.mod-lesson .nextbutton {
}

/* All other branch buttons */
.mod-lesson .standardbutton {
}

/* Next classes are for branch table buttons when displayed horizontally */
.mod-lesson .prevhorizontal,
.mod-lesson .prevhorizontal .lessonbutton,
.mod-lesson .nexthorizontal,
.mod-lesson .nexthorizontal .lessonbutton,
.mod-lesson .standardhorizontal,
.mod-lesson .standardhorizontal .lessonbutton {
    display: inline;
}

/* Next classes are for branch table buttons when displayed vertically */
.mod-lesson .prevvertical .lessonbutton,
.mod-lesson .nextvertical .lessonbutton,
.mod-lesson .standardvertical .lessonbutton {
    padding: 5px;
}

/*  branchbuttoncontainer wraps around branch table buttons */
.mod-lesson .branchbuttoncontainer {
    text-align: center;
    padding: 13px 3px 3px 3px;
}

.mod-lesson .branchbuttoncontainer form {
    display: inline;
}

/***
 *** Lesson Progress Bar
 ***    Default styles for this are very basic right now.
 ***    User is supposed to configure this to their liking (like using pictures)
 ***/

.mod-lesson .progress_bar {
    padding: 20px;
}

.mod-lesson .progress_bar_table {
    width: 80%;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_completed {
    /*  Example Use of Image
    background-image: url(<?php echo $CFG->wwwroot ?>/mod/lesson/completed.gif);
    background-position: center;
    background-repeat: repeat-x;
    */
    background-color: green;
    padding: 0px;
    margin: 0px;    
}

.mod-lesson .progress_bar_todo {
    /*  Example Use of Image
    background-image: url(<?php echo $CFG->wwwroot ?>/mod/lesson/todo.gif);
    background-repeat: repeat-x;
    background-position: center;
    */
    background-color: red;
    text-align: left;
    padding: 0px;
    margin: 0px;
}

.mod-lesson .progress_bar_token {
    /*  Example Use of Image
    background-image: url(<?php echo $CFG->wwwroot ?>/mod/lesson/token.gif);
    background-repeat: repeat-none;
    */
    background-color: #000000;
    height: 20px;
    width: 5px;
    padding: 0px;
    margin: 0px;
}