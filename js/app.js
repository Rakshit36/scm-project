
//variables for the interactive book within the application 

//Front face of the page of the book
var front_page = document.querySelector('.front-page');

//back face of the page of the  book
var back_page = document.querySelector('.back-page');

//variable for the flip for the book content to allow the book to look like a book appearance
var flip_page = document.querySelector('.book-content');

//load the .book class to the variable page
var page = document.querySelectorAll('.book');

//create a cover for the book to show when it is open and closed
var cover = document.querySelectorAll('#cover');

//create a zindex of 2 
var common_Zindex = 2;

//create a zindex of 1
var cust_Zindex = 1;

//for loop which will run for the length of the pages to ensure that the pages which are visible will be viewable within the page. 
for(var i = 0; i< page.length; i++){
    page[i].style.zIndex = cust_Zindex;
    cust_Zindex--;
    
    //listen for when the page of the book has been clicked so that it will open so that the user would be able to read the information which is stored within the book. 
    page[i].addEventListener('click', function(e){
        var target = e.target;
        var Current_Page = this;
        
        //allow the page to be visible within the page. 
        Current_Page.style.zIndex = common_Zindex;
        common_Zindex++;
        
        //conditional statement which looks for the class face-front this will mean that this would be the visible page of the book and hide the back page if needed.
        if(target.getAttribute('class')== 'front-page'){
            Current_Page.style.zIndex = common_Zindex;
            common_Zindex += 20;
            //the animation to move the page to make it look as though the book is actually opening like a book would within the page. 
            setTimeout(function(){
                Current_Page.style.transform = 'rotateY(-180deg)';
            }, 500);
        }
        //conditional statement which will look for the back face and when this is not visiblr it will be hidden from view. 
        if(target.getAttribute("class") == 'back-page'){
            Current_Page.style.zIdex = common_Zindex;
            common_Zindex += 20;
            //animation to make it look like a book when this page has been displayed. 
            setTimeout(function(){
                Current_Page.style.transform = 'rotateY(0deg)';
            }, 500);
        }
        //conditional statement to look for the cover of the book. knows when the book is at the beginning or the end so it can be reset. 
        if(target.getAttribute('id') == 'cover'){
            flip_page.classList.remove("trnsfrm-reset");
            flip_page.classList.add("trnsfrm");  
        }
        if(target.getAttribute('id') == 'trnsfrm'){
            flip_page.classList.remove("trnsfrm"); 
            flip_page.classList.add("trnsfrm-reset");
             
        }
    });
}