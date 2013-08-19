A Moodle 2.5 theme containing a renderer which will display category and subcategory names as buttons whenever an image is uploaded for that category.

Images for the buttons should be 220 x 86 pixels and named after the categoryid, ie: for categoryid=90, name the image "90.png". Upload the images to the pix/catimg folder. Currently this folder contains the images from the Hartpury site, for reference only. Please delete them.

In Moodle settings choose Site Administration -> Front Page -> Front Page Settings ->

Front page: List of Categories

Front Page items when logged in: List of Categories

Maximum Category Depth: 1

The text box on the button will expand to cover the full name of the category, regardless of how long it is. However, the buttons are stacked using div {float:left;} so a long category name in the middle of the row will prevent the next row from aligning correctly. As the number of buttons in a row varies depending on the screen width, this can cause some display problems.

If you have some categories displayed with buttons and some without the text display will always start on a new line. If you have categories 1, 2 and 3, but only categories 1 and 3 have images uploaded, I recommend you reorder your categories in Moodle so that 1 and 3 are adjacent to allow the buttons to stack.

Alicia (awelearning@gmail.com)
