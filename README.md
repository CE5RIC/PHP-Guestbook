PHP Guestbook

Learning objectives
Storing data in files
Converting complex constructs (array/objects) to string representation.
Deliver a project under a strict deadline

The Mission
It is time for our first php Consolidation challenge! Let's remember the internet of the 1990, and create a classic widget that every site in that decade had: a guestbook.

Any visitor on te page can leave a message on your page that are then saved and showed (last message on top) for everybody who visits the page.

How to store the messages?
You can store the messages in a file on your system. You can use the brother of file_get_contents() for this: file_put_contents() .

You can either use json_encode() or serialize() to convert your array to a string to store.

Must-have features
Posts must have the following attributes:

Title
Date
Content
Author name
Use at least 2 classes: PostLoader & Post

The messages are sorted from new (top) to old (bottom).

Make sure the script can handle site defacement attacks: use htmlspecialchars()

Only show the latest 20 posts.

Nice to have features
Profanity filter: at the top of your script create an array of "bad" words. If somebody tries to enter a message with those words, their messages gets rejected.

When the user enters uses a "smily" like ":-)", ";-)", ":-(" replace it with an image of such a smily.

Have an input field where the user can enter how many message he wants to see displayed.
