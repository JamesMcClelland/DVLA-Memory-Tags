# DVLA Memory Tags

DVLA Memory Tag list is in `dvla-memory-tag-list.csv`

DVLA Memory Tag list but with the area and postal area as well is in `dvla-memory-tag-detailed.csv`


### Why

For a side project I found myself needing a list of all the potential codes for DVLA registrations. I made this because 
there isn't a source online where the data is nicely formatted. So hopefully someone else can also find use for this.

If you don't have PHP locally you can use docker to create the lists, in the event you want to change how the data is 
exported:

    docker run -it --rm --name my-running-script -v "$PWD":/usr/src/parser -w /usr/src/parser php:7.4-cli php parse.php
    
