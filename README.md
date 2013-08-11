UnPS-Short
==========

Link Shortener for UnPS-GAMATechnologies - located at http://unps.us

This is a complete rewrite of shortv3 (which can be found at https://github.com/alopexc0de/GAMA-Site/tree/master/short), codenamed shortv4-2.

Shortv4 was an effort to design a new front end, add a few features, and move from the depreciated mysql_* functions to mysqli_*
It was ultimatly scrapped due to a very poor interface design and I was generally displeased with it.

On July 18th, 2013 I started a new project, the UnPSAPI (https://github.com/alopexc0de/UnPS-API) and the next day I pushed that to github
The api is being designed to handle the main functions of my services (existing and planned) and still needs a lot of work before production.
The api does have a few functions that were meticulously coded and tested constantly that are ready, and that is the shortv4 code.

UnPS-Short (Shortv4-2, the 2 signifying it was rewritten again with almost exact backend code) is using a local, watered down version of the UnPSAPI to get around the fact that the api is currently not active.

I coded this for simplicity (and it also gave me a great learning experiance with jQuery).

USAGE:
  - If you want to shorten a link, simply put a link in the form and click shorten. You will be given two things: a clickable short link, and a password. The password is used to delete the link later if you choose
  - If you want to delete a link, put the whole link there (http://unps.us/?l=link) and click the delete link radio button located directly under the box. You will now have a place to put the password and click Delete. It will respond: "Deleted: [LINKID]"
  - If you want to report a link (This can be for several acceptable reasons outlined below) enter the whole link and click the report link radio button located directly under the box, to the right of the delete link button. You now have a text area to enter your complaint and click Report. It will respond: "Reported [LINK]. Please check back in a day or two"
  
Reporting Links:
  - There can be several reasons for reporting a link and these have to be manually sorted through and unacceptable reasons are simply rejected.
  - Also be aware, that you won't recieve a notification of what happened with the report (this might change with the addition of user accounts)
  - Acceptable reasons:
    - You're a website owner and you don't appreciate people using link shorteners to direct to your site - Please give some way to verify this
    - The link is dead, either on the site it redirects to, or on the shortener itself
    - The link redirects to something against our TOS
    - The link contains viruses, malware, other bad stuff
    - The link is used to attempt to, or suceed in hacking any website (including ours)
    - Something not in the list below (This is on a per reason basis and can be rejected)
  - Unacceptable reasons:
    - You don't like the owner of the site it redirects to
    - You don't like me
    - You don't like my friends
    - You don't like my coding style/design
    - Profanity - Just be civil please
     You don't like the content of the site, but it doesn't violate our TOS
    - Attempts to exploit any services we offer
    - Any language other than English (Sorry I just don't understand anything else)
    
