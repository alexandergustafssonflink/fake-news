# Fake News Project

<img src="http://giphygifs.s3.amazonaws.com/media/12OOqKXAALhAkM/giphy.gif" width="100%"> 

## Installing

Clone or Fork the repository
Open index.php from the *public* folder in your local server, ex localhost:8888

## Built With

* PHP
* HTML
* CSS

## Contributing

You are most welcome to clone or fork, but since this a school project I'd like to keep my own code until it's time to turn the assignment in, which is the 1th of November. 

## Authors

Alexander Gustafsson Flink

* **Alexander Gustafsson Flink** - *Initial work* - [Alexander](https://alexandergustafssonflink.github.io/)

## Testers
* Mikaela Lundsgård
* Victor Ljungblad


## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details

## Acknowledgments

* N/A
* N/A

## Comments from classmate Daniel Thorsen
index.php
1) Consider not having a blank space in your HTML tags when you are echo:ing out data inside of them. For example the title, publishdate, image in the post title have a blank space that serves no purpose. For example check lines 18-21.
2) You have forgotten to close the paragraph tag on content on line #20 in index.php
3) Consider to use alt-tags on images so blind people and search engine understands what the image are about.
4) You have forgotten to close the image tag at line 23. Therefor you can't style the paragraph with the amount of likes that you might want to align center at the Y-axis?
footer.php
1) Almost empty. Consider to remove the linex: 1,2,3 that are empty rows.
2) Consider moving the enclosing body-tag in index.php to footer.php and you don't have to add it if you create more pages and you will get a better view with less code in index.php
 header.php 
 1) Consider changing meta-titel that describe you page. 
 2) Could also consider to move lines 11-14 from index.php to header.php and you have them reusable if you want to add more pages.
 functions.php
 1) Wow! <3 comments!
 style.css
 1) article {
    margin-left: 100px; 
    margin-right: 100px; 
    margin-top: 50px;
    margin-bottom: 50px; 
    }
    You can write all of this with this shorthand line "margin: 50 100px;" ie. "margin: top/bottom left/right;"
2) 


YRGO 2019

