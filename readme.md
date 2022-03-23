# Java Script library CompactDOM

### Version: 2.1, 2022-01-31

Author: Vladimir Kheifets <kheifets.vladimir@online.de>

Copyright &copy; 2022 Vladimir Kheifets All Rights Reserved  
## Contents  
### 1. Preface  
1.1 About CompactDOM tutorial  
1.2 What is the HTML DOM?  
1.3 What is the CompactDOM?  
1.4 How it works?  
1.5 CompactDOM methods  
1.6 Selectors of DOM elements  
  
### 2. Events handler methods  
2.1 Method on  
2.2 Method blur  
2.3 Method change  
2.4 Method childs  
2.5 Method click  
2.6 Method dblclick  
2.7 Method focus  
2.8 Method keydown  
2.9 Method keypress  
2.10 Method keyup  
2.11 Method load  
2.12 Method mouseenter  
2.13 Method mouseleave  
2.14 Method ready  
2.15 Method resize  
2.16 Method scroll  
2.17 Method submit  
  
### 3. Basic methods  
3.1 Method animate  
3.2 Method attr  
3.3 Method attribute  
3.4 Method checked  
3.5 Method class  
3.6 Method content  
3.7 Method create  
3.8 Method css  
3.9 Method display  
3.10 Method childs  
3.11 Method each  
3.12 Method hide  
3.13 Method ishide  
3.14 Method link  
3.15 Method lock  
3.16 Method modal  
3.17 Method position  
3.18 Method prop  
3.19 Method reload  
3.20 Method script  
3.21 Method selected  
3.22 Method show  
3.23 Method style  
3.24 Method tag  
3.25 Method transition  
3.26 Method val  
3.27 Method value  
  
### 3.28 send method  
3.28.1 About the send method  
3.28.2 Redirect and submit  
3.28.3 POST XMLHttpRequest  
3.28.4 PUT XMLHttpRequest  
3.28.5 GET XMLHttpRequest  
3.28.6 DELETE XMLHttpRequest  
  
### 4. Auxiliary methods  
4.1 Method ads  
4.2 Method env  
4.3 Method esc  
4.4 Method ins  
4.5 Method merge  
4.6 Method sid  
4.7 Method sob  
4.8 Method url  
  
### 4.9 Arraybufer methods  
4.9.1 setToArrBuf  
4.9.2 getArrayType  
4.9.3 getFromArrBuf  
4.9.4 setBlob  
  
### 4.10 Check type methods  
4.10.1 a - array  
4.10.2 b - boolean  
4.10.3 f - function  
4.10.4 n - number  
4.10.5 o - object  
4.10.6 s - string  
4.10.7 u - undefined  
  
### 5. Appendixs  
  
### 5.1 Codes of tutorial  website
5.1.1 index.html  
5.1.2 index.json  
5.1.3 index.js  
5.1.4 index.css  
  
### 5.2 Files from examples
5.2.1 GetResponse.php  
5.2.2 ViewResponse.php  
5.2.3 xml_document.xml  
5.2.4 html_document.html  
5.2.5 content.css  
5.2.6 content.json  
5.2.7 content.txt  
  
### 5.3 CSS  
5.3.1 CSS for scroll method  
5.3.2 CSS for modal method  
5.4 Predefined variables  
  
### 5.5 CompactDOM projects  
5.5.1 CaesarCipher.js  
5.5.2 timeCalculator.js  

## 1. Preface  
## 1.1 About CompactDOM tutorial  
     
You can find tutorial of the Java Script Library CompactDOM on the website:

[https://www.alto-booking.com/developer/CompactDOM/](https://www.alto-booking.com/developer/CompactDOM/)

The open source code of the site is implemented with CompactDOM and demonstrates the  
use of this library.

You can see several projects implemented with CompactDOM:

 [https://www.alto-booking.com/developer/timecalculator/](https://www.alto-booking.com/developer/timecalculator/)

 [https://www.alto-booking.com/developer/caesarcipher/](https://www.alto-booking.com/developer/caesarcipher/)

Compact DOM codes from these projects you can see in appendixs: *CaesarCipher.js*, *timeCalculator.js*.

Below is the *index.html</a>* code of the CompactDOM tutorial website.

```html
<html>
<meta charset=utf-8>
<title>CompactDOM manual</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1,
maximum-scale=1, user-scalable=no, user-scalable=0" >
<meta name="description" content="CompactDOM js library online-tutorial">
<meta name="keywords" content="CompactDOM,javascript,library">
<meta name="author" content="Vladimir Kheifets">
<meta name="robots" content="index,follow" />
<script type="text/javascript" src="sections/CompactDOM.min.js"></script>
<script>
_("head").script("index.js");
</script>
</head>
<body>
<div id="block-setting">
<i id="setting" class="fas fa-cog"></i>
	<div>
	Code highlighting:<br>
	<i id="adj" class="fas fa-adjust"></i> <span id="dark-light" ></span>
	<br>Themes:<br>
	<select id="thema" ></select>
	</div>
</div>
<div class="CLB">
	<div id="Sections"></div>
	<div id="SectionsContent"></div>
</div>
<div class="footer"></div>
</div>
<script src="dist/rainbow.js"></script>
<script src="src/language/generic.js"></script>
<script src="src/language/html.js"></script>
<script src="src/language/css.js"></script>
<script src="src/language/php.js"></script>
<script src="src/language/javascript.js"></script>
<script src="src/language/json.js"></script>
</body>
</html>
```
     
Also in each section there are examples of source codes with a live demonstration.  
This site can be used to represent any software product. Information about the data  
structure is specified in the index.json file.  
See below in appendixs:  
*index.js* (CompactDOM script),  
*index.json*,  
*index.css*  
  
This site uses the Java Script Library Rainbow for highlighting the codes and  
several free icons from Font-Awesome.  
[GitHub, Craig Campbell, Rainbow](https://github.com/ccampbell/rainbow)  
[GitHub, Rob Madole, Font-Awesome](https://github.com/FortAwesome/Font-Awesome)  
I would like to express my gratitude to dear colleagues Craig Campbell and Rob Madole  
for their very useful developments, which this site helped me to implement.  
  
## 1.2 What is the HTML DOM?  
     
> [MDN, Introduction to the DOM](https://developer.mozilla.org/en-US/docs/Web/API/Document_Object_Model/Introduction)

```
	The Document Object Model (DOM) is a programming interface for HTML and XML documents.
It represents the page so that programs can change the document structure, style, and content.
The DOM represents the document as nodes and objects. That way, programming languages 
can connect to the page.

	A Web page is a document. This document can be either displayed in the browser
window or as the HTML source. But it is the same document in both cases. 
The Document Object Model (DOM) represents that same document so it can be manipulated. 
The DOM is an object-oriented representation of the web page, which can be modified with 
a scripting language such as JavaScript.
```
  
     
   The *document object* (DOM) is a tree of nodes, each of which corresponds to an element (tag)  
of an HTML document.   
   DOM element:   
   - is an object and can have properties, attributes and some elements may have text content,     
   - has a parent element and some elements may have children element.  
  
   Note: all browsers support a *window object* that represents the browser window,  
*document object* is a property of the *window object*.  
  
For example, there is an HTML document:  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>HTML Document</title>
</head>
<body>
<div id="content">Hello!</div>
<button>Click Me</button>
</body>
</html>
```

  
  
     
   This example will create a DOM object that represents a DOM tree with   
a root (parent) node and two child nodes:    
  - the "head" representing the "head" tag;   
  - the "body" representing the "body" tag.  
  
The "head" node is the parent of two child nodes:  
 - a "meta" represen the "meta" tag having the attributes  
   http-equiv = "Content-Type" and content = "text/html; charset = utf-8"   
 - the "title", represents the "title" tag having the text content "HTML Document".   
   
The "body" node is the parent of two child nodes:  
 - a "div" represen a "div" tag having the attribute id="content" and text content "Hello!";  
 - a "button" represent a "button" tag having text content "Click Me".  
  
   Java Script has various methods for defining DOM objects and dynamically getting and changing  
their attributes, properties and text content, and it also allows you to handle events related  
to user actions. Also, Java Script provides methods that allow you to get and change the properties   
of the window object and handle events associated with this object.   
  
For example, there is an HTML document with Java Script:   


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
	//window load event handler
	completed = function(){
		alert("Loading HTML document completed successfully!");
		//buttons is HTMLCollection object(NodeList)
		buttonsCollection = document.querySelectorAll("button");	
		//div is a unique object with id = "content"  
		div = document.getElementById("content");	
		//buttons events handler	
		clickButtons = function(){	
			
			//get the text of the button that was clicked 
			buttonText = this.innerHTML;
			
			//set the text to the div
			div.innerHTML = buttonText;
		}
		//sets up the button click event handler function 	
		for (i = 0; i < buttonsCollection.length; i++) {
		  buttonsCollection[i].addEventListener("click", clickButtons);
		}
	}
	
	//sets up the window load event handler function	
	window.addEventListener("load", completed);
	
</script>
<title>HTML Document</title>
</head>
<body>
<div id="content">Hello!</div>
<br>
<button>Click button 1</button>
<button>Click button 2</button>
<button>Click button 3</button>
</body>
</html>
```

  
  
## 1.3 What is the CompactDOM?  
     
   CompactDOM is a Java Script library (CompactDOM object), the functions (methods) of which,  
simplify manipulating DOM elements. One character *_* is alias name *CompactDOM* object.  
The current version of CompactDOM can be downloaded from [GitHub](https://github.com/VladimirKheifets/Java-Script-library-CompactDOM)  
Browser support: Chrome 4.0, Internet Explorer 10.0, Edge,Firefox 3.5, Safari 3.2, Opera 10.0  
Size of the current version (file CompactDOM.min.js) 14Kb  
  
Consider an example of code implemented with CompactDOM   
  


```html
<html>
<head>
<!- Adding Java Script file CompactDOM.min.js into an HTML Document ->
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the _(window).ready CompactDOM method";	
	//set up events handler anonymous function for event type "load"
	_(window).ready(function(){
		document.write(msg);
	});
</script>
</head>
</html>
```

  
     
   In this example, the *ready* method will be applied to the *window* object.  
Some methods have alias names. For example, the *ready* method has an alias name - *load*.  
In some methods, it is allowed not to specify an object for which from can be applied.  
Then, instead of two characters *()*, one character *_* is allowed.   
In this example, the expression:  
*_(window).ready(...)*  
can replace with:  
*_(window).load(...)  
__.load(...)  
__.ready(...)*  
  
For examle __.load(...):  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the __.load CompactDOM method";
	//set up events handler anonymous function for event type "load"
	__.load(function(){
		document.write(msg);
	});
</script>
<title>HTML Document</title>
</head>
</html>
```

  
     
For examle __.ready(...):  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the __.ready CompactDOM method";
	//set up events handler anonymous function for event type "load"
	__.ready(function(){
		document.write(msg);
	});
</script>
</head>
</html>
```

  
  
## 1.4 How it works?  
     
Consider an example of code implemented in native Java Script:  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script>
	//window load event handler
	completed = function(){
		alert("Loading HTML document completed successfully!");
		//buttons is HTMLCollection object(NodeList)
		buttonsCollection = document.querySelectorAll("button");	
		//div is a unique object with id = "content"  
		div = document.getElementById("content");	
		//buttons events handler	
		clickButtons = function(){	
			
			//get the text of the button that was clicked 
			buttonText = this.innerHTML;
			
			//set the text to the div
			div.innerHTML = buttonText;
		}
		//sets up the button click event handler function 	
		for (i = 0; i < buttonsCollection.length; i++) {
		  buttonsCollection[i].addEventListener("click", clickButtons);
		}
	}
	
	//sets up the window load event handler function	
	window.addEventListener("load", completed);	
</script>
<title>HTML Document</title>
</head>
<body>
<div id="content">Hello!</div>
<br>
<button>Click button 1</button>
<button>Click button 2</button>
<button>Click button 3</button>
</body>
</html>
```

  
     
An example for comparison, the same task implemented with CompactDOM.  
This example uses the *ready*, *content* and *click* methods, which will be described below.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
//window load event handler
	completed = function(){
		alert("Loading HTML document completed successfully!");
		//buttons is HTMLCollection object(NodeList)
		buttonsCollection = _("button");	
		//div is a unique object with id = "content"  
		div = _("#content");	
		//buttons events handler	
		clickButtons = function(){				
			//get the text of the button that was clicked 
			buttonText = _(this).content();			
			//set the text to the div
			div.content(buttonText);
		}
		//sets up the button click event handler function 		
		 buttonsCollection.click(clickButtons);		
	}
	__.ready(completed);
</script>
<title>HTML Document</title>
</head>
<body>
<div id="content">Hello!</div>
<br>
<button>Click button 1</button>
<button>Click button 2</button>
<button>Click button 3</button>
</body>
</html>
```

  
  
## 1.5 CompactDOM methods  
     
   The following methods are allowed in CompactDOM:  
  
   - events handler methods;  
   - basic methods;  
   - auxiliary methods.  
  
   Events handler methods for setting an events handler functions for one or some  DOM elements.  
   Basic methods are for manipulating DOM elements. Auxiliary methods are used in basic  
   methods, for data processing, but they can be useful in other cases as well.  
   By default, the methods will be applied to the current HTMLdocument.  
   It is allowed to apply methods to multiple documents.  
   The HTMLdocument or XMLdocument object to which the method is to be applied must be defined  
   when each method is called.  
  
   The following possibilities of using CompactDOM methods are allowed:  
  
- Defining the object to which the method should be applied with a CSS-selector  
   *_(string selector).method name(parameters);*  
   See below example 1.1 and next section "Selectors of DOM elements".  
   or  
   *_(string selector, object HTML/XMLdocument).method name(parameters);*  
   See below example 1.2  
  
- Direct indication of the object to which the method should be applied  
   *_(object element DOM).method name(parameters);*  
   See below example 2.  
  
- Without specifying the object to which the method should be applied  
   *__.method name(parameters);*  
   This is allowed for all auxiliary methods and in some cases for  basic methods,  
   if they provide default object selectors.  
   See below examples 3 and 4.  
           
The compact DOM allows you to access methods and properties of native Java Script DOM objects.  
   *_(selector).d.JS DOM method(parameters);*  
   *_(selector).d.JS DOM property;*  
   See below example 5.  
        
Example 1.1 Basic method *content*  for CSS-selectors of DOM elements  


```html
<html>
<head>
<style>
div{border:1px solid #0000FF;padding:5;margin-top:5}
.c{color:red}
#d + div{border:1px solid #FF0000;}
</style>
<!- Adding Java Script file CompactDOM.min.js into an HTML Document ->
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>
	completed = function(){	
		//Getting content for div element wiht id="d"
		dc=_("#d").content();
		
		//Getting content for div element wiht class="d"
		cc=_(".c").content();
		
		//Creating content for the div element, which is placed 
		//immediately after the div with id = "d" 
		_("#d + div").content(dc+"<br>"+cc);
	}
	__.ready(completed);
</script>
</head>
<body>
<div class="c">Content in div with class="c"</div>
<div id = "d">Content in div with id="d"</div>
<div></div>
</body>
</html>
```

  
  
     
Example 1.2 CompactDOM basic 'send' method loads  *xml_document.xml* file(XMLHttpRequest).  
See below *About the send method*, *GET XMLHttpRequest*  
The 'send' method returns an XMLDocument object in response(resonseType is 'document').  
The '*child*' method is applied to this object and returns the children elements of the 'note' tag (NodeList)  
from XMLDocument. Then the '*each*' method then returns in call back function the name and textContent  
of each child element. The '*content*' method outputs the result to the *div* element (*id = "cont"*) of  
the current HTMLDocument.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div id="cont"></div>
</body>
<script>
myFunction = function(rsp, to, url){
  console.log(rsp);
  childNodesOfnote = _('note', rsp).childs();
  console.log(childNodesOfnote);
  tmp="XML Parent node 'note'  childNodes: ";
  _(childNodesOfnote).each(function(elm){
   tmp += "<br>nodeName: " + elm.name + ", textContent: " + elm.text;
  });
  _(to).content(tmp);
};
obj=
 {
   url:"sections/xml_document.xml",
   method:"get",
   responseType:"document",
   to:"#cont",
   func:myFunction,
   mime:'text/xml',
   debug:true
 }
__.send(obj);
</script>
</html>
```

  
  
     
Example 2.  Basic method *content*  for *this* object,  in this case, is the equivalent  
of *event.target* object. The *ins* method was applied to check the button text (implements the  
"Check marks" symbol switch).  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>
	completed = function(){		
		//buttons is HTMLCollection object
		buttonsCollection = _("button");			
		//buttons events handler	
		clickButtons = function(){			
			//get the text of the button that was clicked 
			bText = _(this).content();			
			NewBText = __.ins("^Click", bText)?"\u2713"+bText:bText.substr(1);
			_(this).content(NewBText);			
		}
		//sets up a function events handler function
		 buttonsCollection.click(clickButtons);	
	}
	__.ready(completed);
</script>
</head>
<body>
<button>Click Me</button>
</body>
</html>
```

  
     
Example 3. Basic method *ready* for *window* object. In this case, it is allowed not   
to specify the object. Default object is *window*.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>
	msg="Loading HTML document completed successfully!";	
	//set up events handler anonymous function for event type "load"
	__.ready(function(){document.write(msg);});					
</script>
</head>
</html>
```

  
     
Example 4. Auxiliary method *ins*.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	str1 = "CompactDOM";
	str2 = "jQuery";					
	pattern = "^C";
	// The ins method executes a search for a match between 
	// a regular expression and a specified string.
	// Returns true or false.
	res1 = __.ins(pattern, str1);
	res2 = __.ins(pattern, str2);
	msg = "pattern: " + pattern + "<br>"; 
	msg += "str1: " + str1 + " res1: "+res1+"<br>";	
	msg += "str2: " + str2 + " res2: "+res2+"<br>";	
	document.write(msg);	
</script>
</head>
</html>
```

  
     
Example 5.  Access to methods and properties of native Java Script DOM.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
</head>
<body>
<button>Click Me</button>
</body>
<script>
msg = "<hr>innerHTML JS property of element button: ";
msg += _("button").d.innerHTML;
msg += "<br>offsetTop JS property of element button: ";
msg += _("button").d.offsetTop;
msg += "<hr>JS remove method of element button<br>";
_("button").d.remove();
msg += "Button element removed: ";
msg += _("button").d;
document.write(msg);
</script>
</html>
```

  
  
## 1.6 Selectors of DOM elements  
     
   DOM element selectors define one or more objects to which native Java Script methods   
or CompactDOM methods should be applied.  
The rules for defining selectors come from the Cascading Style Sheets (CSS) language.  
   Selectors can be identified by id, class, attribute value, or element tag names.   
There are also rules for defining an element by indicating its relationship with parent,  
adjacent or nested elements.    
 If this is not specified in the description of the method, then to  
access each element of the NodeList, you need to use the CompactDOM *each* method,  
which will be described later.  
  
*_(selector).method(Parameters);*  
or  
*_(selector).property;*  
or  
*element =_(selector);  
element.method(Parameters)*  
or  
*element.property;*  
  
For example:  
*_("#id").ready(load);*  
*res = _("#id").exists; // true/false*  
  
The "exists" property allows to check the selector.  
If the selector defines any element or NodeList, the "exists" property is true, otherwise it is false.  
For example:  
*div_id = _("#id");  
if(div_id.exists)  
{  
   div_id.method(Parameters);  
}*  
In all cases, when the element or group defined by the selector does not exist, a message   
is displayed in the browser console:   
For example:  
*CompactDOM Error: The DOM element for the '#id' selector does not exist!*  
  
Example 1. Selector - id of element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<span></span>
<hr>
<div id="d">Content div with id="d"</div>
</body>
<script>
res =_("#id").exists; 
res2 =_("#d").exists;
sp=_("span"); 
sp.content('Selector "#id": _("#id").exists: ' + res);
sp.content(sp.content()+'<br>Selector "#d": _("#d").exists: ' + res2);
res =_("#d").content();
document.write('Selector "#d": _("#d").content(): ' + res);
</script>
</html>
```

  
  
  
     
Example 2. Selector - class of element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div class="c">Content div with class="c"</div>
</body>
<script>
res =_(".c").content();
document.write('Selector ".c"<br>_(".c").content():<br>' + res);
</script>
</html>
```

  
  
  
     
Example 3. Selector - tag name of element, defined one div element.   
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Content tag div</div>
</body>
<script>
res =_("div").content();
document.write('Selector "div" <br>_("div").content():<br>' + res);
</script>
</html>
```

  
  
  
     
Example 4. Selector - tag name of elements, defined several div elements(NodeList)  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Content tag div 1</div>
<div>Content tag div 2</div>
<div>Content tag div 3</div>
</body>
<script>
//This selector defines several div elements.  
//To access each div element used the each method
document.write('<hr>Selector "div"');
_("div").each(function(el){	
	res = el.content();
	document.write('<br>res:<br>' + res);
});
</script>
</html>
```

  
  
  
     
Example 5. Selector - attributes value of elements  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div data-x="div tag">Content div tag </div>
<span data-x="span tag">Content span tag </span>
<p data-x="p tag">Content p tag </p>
</body>
<script>

//Attribute value is 'p tag'
selector1 = "[data-x='p tag']";
res = _(selector1).content();
document.write('<hr>Selector ' + selector1 + '<br>res:<br>'+res);

//Аttribute values start with word 'div'
selector2 = "[data-x^='div']";
res = _(selector2).content();
document.write('<hr>Selector ' + selector2 + '<br>res:<br>'+res);

//Attribute values ends with word 'tag'
//This selector defines several elements.  
//To access each element used the each method
selector3 = "[data-x$='tag']";
document.write('<hr>Selector ' + selector3);
_(selector3).each(function(el){
	res = el.content();
	document.write('<br>res:<br>'+res);
});

//Attribute values contains word 'tag'
//This selector defines several elements.  
//To access each element used the each method
selector4 = "[data-x~='tag']";
document.write('<hr>Selector ' + selector4);
_(selector4).each(function(el){
	res = el.content();
	document.write('<br>res:<br>'+res);
});
</script>
</html>
```

  
  
  
     
Example 6. Selector with indicating its relationship with parent,adjacent or nested elements  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Hello!</div>
<div id="d">
	<div>Content div tag </div>
	<span>Content span tag</span>
	<p>Content p tag </p>
</div>
</body>
<script>

//Selector - first child element div of parent element body.
//(first  element div of document).
selector1 = "body > div";
document.write('<hr>Selector ' + selector1);
res = _(selector1).content();
document.write('<br>res:<br>'+res);

//Selector - element div after first  element div of document.
//(second element div of document)
selector2 = "body > div + div";
document.write('<hr>Selector ' + selector2);
_(selector2).each(function(el){
	res = el.content();
	document.write('<br>res:<br>'+res);
});

//Selector - element p after element span  
selector3 = "span + p";
document.write('<hr>Selector ' + selector3);
res = _(selector3).content();
document.write('<br>res:<br>'+res);

//Selector - child element spap of parent element with id = "d" 
selector4 = "#d span";
document.write('<hr>Selector ' + selector4);
res = _(selector4).content();
document.write('<br>res:<br>'+res);

</script>
</html>
```

  
  
## 2. Events handler methods  
## 2.1 Method on  
     
   This method handles all types of events and is used by other events handler methods.  
*_(selector).on(event type, events handler function);*  
  

```
	If the selector defines several DOM elements (NodeList), then events handler methods,
will be applied to all elements of the NodeList. This also applies to of all event handler methods 
and will not be repeated in their descriptions.
```
  
     
Example 1. Selector - id of element  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="b">Click button with id="b"</button>
<div id="msg"></div>
</body>
<script>	
	EventHandlerFunction = function(){
	msg="<hr>Click element tag name: " + _(this).tag();
	msg+="<br>Content: "  + _(this).content();
	_("#msg").content(msg);		
	};
	EventType = "click";
	_("#b").on(EventType, EventHandlerFunction);
</script>
</html>
```

  
  
     
Example 2. Selector - tag name of elements, defined several div elements(NodeList)  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>Mouseenter button 1</button>
<button>Mouseenter button 2</button>
<button>Mouseenter button 3</button>
<div id="msg"></div>
</body>
<script>
	buttonsCollection = _("button");			
	//buttons events handler	
	EventHandlerFunction = function(){	
	msg="<hr>Mouseenter element tag name: " + _(this).tag();
	msg+="<br>Content: "  + _(this).content();
	_("#msg").content(msg);
	}
	//sets up a function events handler function
	EventType = "mouseenter";
	buttonsCollection.on(EventType,EventHandlerFunction);	
</script>
</html>
```

  
  
## 2.2 Method blur  
     
This method handles the focus event type.  
*_(selector).blur(events handler function);*  
if no event handler function is defined, this method remove focus an  the element.   
*_(selector).blur();*  
  
Example. Method blur for two input elements  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<input name="width" type="text" placeholder="width" autocomplete="off">
<input name="height" type="text" placeholder="height" autocomplete="off">
<div id="msg"></div>
</body>
<script>	
EventHandlerFunction = function(){	
  if(this.value=="")		
    msg = "<hr>Error.The " + this.name + " field is not filled!"; 		
  else
    msg = "";
  _("#msg").content(msg);			
};
//set events handler  function for all input element
_("input").blur(EventHandlerFunction);
//giving focus to the first input element
_("input[name='width']").focus();
//remove focus from the first input element 
_("input[name='width']").blur();
</script>
</html>
```

  
  
## 2.3 Method change  
     
   This method handles changing the state of objects by applying different types of events   
depending on the specified object and parameters.  
   If a window selector is specified or no selector is specified, then the method handles   
the *window resize event* and/or the *window orientationchange event* depending on   
the specified parameters and whether the device supports the orientationchange event type.  
   If the device (tablet or smartphone) supports both types of events, then handler functions   
can be specified for each of the types of events.     
*_(window).change(event resize handler function, event orientationchange handler function );*  
or  
*__.change(event resize handler function, event orientationchange handler function );*     
If the device supports the orientationchange event type, but only one event handler   
function is specified, then the *orientationchange event type* will be applied,   
otherwise the *resize event type* will be applied.      
*_(window).change(events handler function);*  
or  
*__.change(events handler function);*     
If the selector defines an *element input type='text' *, then the *event type input* will   
be set in the event handler, the *change event type* will be set for other element selectors.  
In these cases, one parameter must be specified.  
*_(selector).change(events handler function);*  
  
Examle 1. Method change with one parameter  for window object.  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Try resizing the window or changing the orientation of your device</div> 
<div id="msg"></div>
</body>
<script>
showRes=function(){
 //Applying the enviroment method to get the device and window properties.
  Enviroment = __.env();
  msg = "<hr>Type of event: " + event.type;
  msg += "<br>Width of window: " + Enviroment.wbr;
  msg += "<br>Height of windowt: " + Enviroment.hbr;  
  msg += "<br>devicePixelRatio: " + Enviroment.dpr; 
  _("#msg").content(msg);
}
EventsHandlerFunction = function(){
 	showRes();		
};
__.change(EventsHandlerFunction);
</script>
</html>
```

  
  
     
Examle 2. Method change with two parameter  for window object.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Try resizing the window or changing the orientation of your device</div> 
<div id="msg"></div>
</body>
<script>
showRes=function(){
 //Applying the enviroment method to get the device and window properties.
  Enviroment = __.env();
  msg = "<hr>Type of event: " + event.type;
  msg += "<br>Width of window: " + Enviroment.wbr;
  msg += "<br>Height of windowt: " + Enviroment.hbr;  
  msg += "<br>devicePixelRatio: " + Enviroment.dpr; 
  _("#msg").content(msg);
}

EvResizeHandlerFunction = function(){
 	showRes();		
};

EvOrientationchangeFunction = function(){
//There may be code for mobile devices here.
 	showRes();		
};
__.change( EvResizeHandlerFunction, EvOrientationchangeFunction);
</script>
</html>
```

  
  
     
Examle 3. Method change for element input type='text'.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<input name="width" type="text" placeholder="width" >
<input name="height" type="text" placeholder="height" >
<br>
<div id="msg"></div>
</body>
<script>	
EventHandlerFunction = function(){ 
    msg = "input name: '" + this.name + "' value: " + this.value;
  _("#msg").content(msg);			
};
//set events handler  function for all input element
_("input").change(EventHandlerFunction);
</script>
</html>
```

  
  
     
Examle 4. Method change for select element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<select id="sel">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
<br>
<div id="msg"></div>
</body>
<script>
EventHandlerFunction = function(){ 
  msg = "selected value: " + this.value;
  _("#msg").content(msg);			
};
//set events handler  function for all input element
_("#sel").change(EventHandlerFunction);
</script>
</html>
```

  
  
     
Examle 5. Method change for elements input type="checkbox" .  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<input name="checkbox1" type="checkbox" value="1"> checkbox1<br>
<input name="checkbox2" type="checkbox" value="2"> checkbox2<br>
<input name="checkbox3" type="checkbox" value="3"> checkbox3
<br>
<div id="msg"></div>
</body>
<script>
EventHandlerFunction = function(){ 
  msg = "<hr>Check box name: " + this.name + " checked: " + this.checked;
  _("#msg").content(msg);			
};
//set events handler  function for all input element
_("input").change(EventHandlerFunction);
</script>
</html>
```

  
  
## 2.4 Method childs  
     
This method only applies to one parent element and returns all of its children elements (NodeList-object).  
*_(selector).childs();*  
or  
*_(selector, HTML/XMLdocument).childs();*  
  
The following examples use the '*content*' and '*each*' methods.  
Example 1. The *childs* method applies to the current HTML document.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
body{font-family: arial}
#parentDiv, #parentDiv > div, #cont{
	border:1px solid #0000ff;
	padding: 5;
	margin-top: 5;
	font-size: 12;
}
</style>
</head>
<body>
<h4>Div id="parentDiv":</h4>
<div id="parentDiv">
<div>child div1</div>
<div>child div2</div>
<div>child div3</div>
</div>
<h4>Div id="cont":</h4>
<div id="cont"></div>
</body>
<script>
  childNodes = _("#parentDiv").childs();
  console.log(childNodes);
  tmp="Parent node 'parentDiv'  childNodes: ";
  _(childNodes).each(function(elm){
   tmp += "<br>nodeName: " + elm.name + ", textContent: " + elm.text;
  });
  _("#cont").content(tmp);
</script>
</html>
```

  
     
Example 2. The *childs* method applies to the XMLdocument.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
body{font-family: arial;font-size: 12;}
#xmlStr{display: none}
#doc{border: 1px solid #0000ff;
padding: 5;
margin-top: 10;
display: inline-block}
</style>
</head>
<body>
<h4>XML as text</h4>
<div id="xmlStr"><note>
<from>Oliver</from>
<to>Lucas</to>
<message>Hello!</message>
</note></div>
<textarea id="viewXml" cols="80" rows=5></textarea>
<div id="doc">
parser = new DOMParser();<br>
XMLDocument = parser.parseFromString(xmlStr, "application/xml");<br>
childNodes = _("note", XMLDocument).childs();
</div>
<h4>Div id="cont":</h4>
<div id="cont"></div>
</body>
<script>
xmlStr = _("#xmlStr").content();
_("#viewXml").content(xmlStr);
parser = new DOMParser();
XMLDocument = parser.parseFromString(xmlStr, "application/xml");
childNodes = _("note", XMLDocument).childs();
console.log(childNodes);
tmp="Parent node 'note' of XMLDocument<br>childNodes:";
_(childNodes).each(function(elm){
   tmp += "<div>&emsp;&emsp;|&emsp; nodeName: " + elm.name + ", textContent: " + elm.text+"</div>";
});
_("#cont").content(tmp);
</script>
</html>
```

  
  
## 2.5 Method click  
     
   This method handle type of events click.  
*_(selector).click(events handler function);*     
Example. Selector button element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>Click Me</button>
<div id="msg"></div>
</body>
<script>	
	EventHandlerFunction = function(){
	msg="<hr>Clicked element with content: " + _(this).content();	
	_("#msg").content(msg);		
	};	
	_("button").click(EventHandlerFunction);
</script>
</html>
```

  
  
## 2.6 Method dblclick  
     
   This method handle type of events dblclick (Double-click).  
*_(selector).dblclick(events handler function);*     
Example. Selector button element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>Click Me</button>
<div id="msg"></div>
</body>
<script>	
	EventHandlerFunction = function(){
	msg="<hr>Double-clicked element with content: " + _(this).content();	
	_("#msg").content(msg);		
	};	
	_("button").dblclick(EventHandlerFunction);
</script>
</html>
```

  
  
## 2.7 Method focus  
     
   This method handles the focus event type or to give focus to an element, if an event   
handler function is undefined.   
*_(selector).focus(events handler function);*  
if no event handler function is defined, this method gives focus an  the element.   
*_(selector).focus();*  
  
Example. Method focus for two input elements  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<input name="width" type="text" placeholder="width" autocomplete="off" >
<input name="height" type="text" placeholder="height" autocomplete="off">
<div id="msg"></div>
</body>
<script>	
EventHandlerFunction = function(){	 	
    msg = "<hr>Focus on element: " + this.name;
  _("#msg").content(msg);			
};
//set events handler  function for all input element
_("input").focus(EventHandlerFunction);
//giving focus to the first input element
_("input[name='width']").focus();
</script>
</html>
```

  
  
## 2.8 Method keydown  
     
This method handles the keydown event type.  
*_(selector).keydown(events handler function);*  
  
Example. Method keydown for input element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Please press any key</div>
<input name="width" type="text" placeholder="width" autocomplete="off">
<div id="msg"></div>
</body>
<script>	
EventHandlerFunction = function(){
  code = event.keyCode;
  msg = "<hr> Character: '" + String.fromCharCode(code) +"' Code: "+code ; 	  
  _("#msg").content(msg);			
};
//set events handler function input element
_("input").keydown(EventHandlerFunction);
//giving focus to the input element
_("input").focus();
</script>
</html>
```

  
  
## 2.9 Method keypress  
     
This method handles the keypress event type.  
*_(selector).keypress(events handler function);*  
  
Example. Method keypress for input element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Please press any key</div>
<input name="width" type="text" placeholder="width" autocomplete="off">
<div id="msg"></div>
</body>
<script>	
EventHandlerFunction = function(){
  code = event.keyCode;
  msg = "<hr> Character: '" + String.fromCharCode(code) +"' Code: "+code ; 	  
  _("#msg").content(msg);			
};
//set events handler function input element
_("input").keypress(EventHandlerFunction);
//giving focus to the input element
_("input").focus();
</script>
</html>
```

  
  
## 2.10 Method keyup  
     
This method handles the keyup event type.  
*_(selector).keyup(events handler function);*  
  
Example. Method keyup for input element  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Please press any key</div>
<input name="width" type="text" placeholder="width" autocomplete="off">
<div id="msg"></div>
</body>
<script>	
EventHandlerFunction = function(){
  code = event.keyCode;
  msg = "<hr> Character: '" + String.fromCharCode(code) +"' Code: "+code ; 	  
  _("#msg").content(msg);			
};
//set events handler function input element
_("input").keyup(EventHandlerFunction);
//giving focus to the input element
_("input").focus();
</script>
</html>
```

  
  
## 2.11 Method load  
     
   This method handles the load event type. Method load has alias name is ready.  
*_(selector).load(events handler function);*  
*_(selector).ready(events handler function);*  
If the selector is not specified, then the method is applied to the window object.   
*__.load(events handler function);*  
*__.ready(events handler function);*  
Example 1. Method load for object window  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the _(window).load CompactDOM method";	
	//set up events handler anonymous function for event type "load"
	__.load(function(){
		document.write(msg);
	});
</script>
</head>
</html>
```

  
  
     
Example 2. Method ready for object window  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the _(window).ready CompactDOM method";	
	//set up events handler anonymous function for event type "load"
	__.ready(function(){
		document.write(msg);
	});
</script>
</head>
</html>
```

  
  
  
     
Example 3. Method load for element img  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
</head>
<body>
<img id="im" src="sections/21.jpg" width="120" >
 <span id="msg"></span>
</body>
<script>
img=_("#im");
img.load(function(){	
	msg = "Loading image successfully!<br>";	
	_("#msg").content(msg);		
});
</script>
</html>
```

  
  
## 2.12 Method mouseenter  
     
   This method handles the mouseenter event type.   
*_(selector).mouseenter(events handler function);*  
  
Example. Selector - tag name of elements, defined several button elements(NodeList)  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>Mouseenter button 1</button>
<button>Mouseenter button 2</button>
<button>Mouseenter button 3</button>
<div id="msg"></div>
</body>
<script>
	buttonsCollection = _("button");			
	//buttons events handler	
	EventHandlerFunction = function(){	
	msg="<hr>Mouseenter element tag name: " + _(this).tag();
	msg+="<br>Content: "  + _(this).content();
	_("#msg").content(msg);
	}
	//sets up a function events handler function
	buttonsCollection.mouseenter(EventHandlerFunction);	
</script>
</html>
```

  
  
## 2.13 Method mouseleave  
     
   This method handles the mouseleave event type.   
*_(selector).mouseleave(events handler function);*  
  
Example. Selector - tag name of elements, defined several button elements(NodeList)  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>Mouseleave button 1</button>
<button>Mouseleave button 2</button>
<button>Mouseleave button 3</button>
<div id="msg"></div>
</body>
<script>
	buttonsCollection = _("button");			
	//buttons events handler	
	EventHandlerFunction = function(){	
	msg="<hr>Mouseleave element tag name: " + _(this).tag();
	msg+="<br>Content: "  + _(this).content();
	_("#msg").content(msg);
	}
	//sets up a function events handler function
	buttonsCollection.mouseleave(EventHandlerFunction);	
</script>
</html>
```

  
  
## 2.14 Method ready  
     
   This method handles the load event type. Method load has alias name is ready.  
*_(selector).load(events handler function);*  
*_(selector).ready(events handler function);*  
If the selector is not specified, then the method is applied to the window object.   
*__.load(events handler function);*  
*__.ready(events handler function);*  
Example 1. Method load for object window  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the _(window).load CompactDOM method";	
	//set up events handler anonymous function for event type "load"
	__.load(function(){
		document.write(msg);
	});
</script>
</head>
</html>
```

  
  
     
Example 2. Method ready for object window  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<script>	
	msg = "Loading HTML document completed successfully!<br>";
	msg += 	"This is the result of processing the window load event<br>"; 
	msg +=	"by the _(window).ready CompactDOM method";	
	//set up events handler anonymous function for event type "load"
	__.ready(function(){
		document.write(msg);
	});
</script>
</head>
</html>
```

  
  
  
     
Example 3. Method load for element img  
  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
</head>
<body>
<img id="im" src="sections/21.jpg" width="120" >
 <span id="msg"></span>
</body>
<script>
img=_("#im");
img.load(function(){	
	msg = "Loading image successfully!<br>";	
	_("#msg").content(msg);		
});
</script>
</html>
```

  
  
## 2.15 Method resize  
     
   if parametr is event handler function, then this method handles the resize event type  
for window object, otherwise this method changes the height of the element based on the height  
of the content.   
*_(window).resize(events handler function);*  
or  
*__.resize(events handler function);*  
  
     
   if parametr undefined or parametr is number, then this method changes the height of the   
element based on the height of the content.   
*_(selector).resize();*  
or parameter defines the padding-bottom style attribute in pixels  
*_(selector).resize(number);*  
     
Example 1. Method resize for window object  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div>Try resizing the window </div>
<div id="msg"></div>
</body>
<script>
EventHandlerFunction = function(){		
  //Applying the enviroment method to get the window properties.
  Enviroment = __.env(); 
  msg = "<hr>Width of window: " + Enviroment.wbr;
  msg += "<br>Height of windowt: " + Enviroment.hbr;  
  _("#msg").content(msg);			
};
__.resize(EventHandlerFunction);
</script>
</html>
```

  
  
     
Example 2. Method resize for textarea element  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
textarea{overflow-y:hidden;padding:10px}
</style>
</head>
<body>
<div>Please change the content of the textarea</div>
<textarea rows=3 cols=100>quod ubi caesar resciit quorum per 
fines ierant his uti conquirerent et reducerent si sibi purgati esse
vellent imperavit reductos in hostium numero habuit reliquos omnes 
obsidibus armis perfugis traditis in deditionem accepit helvetios
tulingos latobrigos in fines suos unde erant profecti 
reverti iussit et quod omnibus</textarea>
<div id="msg"></div>
</body>
<script>
tarea=_("body > textarea");	
EventHandlerFunction = function(){	
	tarea.resize();		
    msg = "<hr>Changed the height of the textarea after changing its content";
  _("#msg").content(msg);			
};
//set events handler  function event type change
tarea.change(EventHandlerFunction);
//changed in textarea height and padding-bottom increased by 10 pixels 
tarea.resize(10);
</script>
</html>
```

  
  
## 2.16 Method scroll  
     
   if parametr is event handler function, then this method handles the scroll event type.  
If no selector is defined, then only in this case the default selector is "document".    
*_(selector).scroll( event handler function );*  
or  
*__.scroll( event handler function );*  
  
     
   If one parameter of type number is defined, then the scrolling-Y of the object window  
will take the specified value, but scrolling-X will not change.   
*_(selector).scroll( scrolling-Y );*  
If two parameters of type number are defined, then scrolling-Y and scrolling-X of the object window   
will be changed.   
*_(selector).scroll( scrolling-X, scrolling-Y );*  
In both cases with number parameters, the default selector is window object.  
*__.scroll( scrolling-Y );*   
*__.scroll( scrolling-X, scrolling-Y );*    
  
If the string parameter is set to "up", then the method moves the scrolling to the top position,  
otherwise if the parameter is "down" the method moves the scrolling to the bottom position.  
*__.scroll("up");*    
*__.scroll("down");*  
   
     
   If the parameter is not specified, then the method creates an element div with   
id="scrollup" to control the scrolling.  
   The method handles the scroll event and this element becomes visible,   
if the scrolling height exceeds the browser height.  
   The method handles the click event for this element and sets scroll Y to 0.   
If selector is not defined, then the default selector is "#scrollup".  
See *CSS for scroll method*.  
If you want to use a other id, then you need to change the CSS.  
   You can see a live demonstration of this method on this site.    
*__.scroll();*  
or  
*_("#OtherId").scroll();*  
     
Example. Method scroll for div element  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
#d{
border:1px solid #FF0000;
height:100px;
width:300px;
padding:5px;
overflow:auto}
</style>
</head>
<body>
<div>Try scrolling this div</div>
<div id="d">quod ubi caesar resciit quorum per 
fines ierant his uti conquirerent et reducerent si sibi purgati esse
vellent imperavit reductos in hostium numero habuit reliquos omnes 
obsidibus armis perfugis traditis in deditionem accepit helvetios
tulingos latobrigos in fines suos unde erant profecti 
reverti iussit et quod omnibus</div>
<div id="msg"></div>
</body>
<script>
EventHandlerFunction = function(){
  //Applying the CompctDOM resize method to change the height of the div element 
  _(this).resize();
  msg = "<hr>Scroll height after: " + this.scrollHeight;
  msg += "<br>div height after: " + this.offsetHeight;
  _("#msg").content(msg);  
};
_("#d").scroll(EventHandlerFunction);
//Applying the CompctDOM selector with its native JS offsetHeight property;
//_("# d").d returns an object native JS 
msg = "<hr>div height befor: " + _("#d").d.offsetHeight;
_("#msg").content(msg); 
</script>
</html>
```

  
     
Example 2. Method scroll set scrolling Y for div element  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
#d{
border:1px solid #FF0000;
height:100px;
width:300px;
padding:5px;
margin:20 0 0 0;
overflow:auto
}
</style>
</head>
<body>
<button>Click me to scrolling div</button>
<div id="d">quod ubi caesar resciit quorum per 
fines ierant his uti conquirerent et reducerent si sibi purgati esse
vellent imperavit reductos in hostium numero habuit reliquos omnes 
obsidibus armis perfugis traditis in deditionem accepit helvetios
tulingos latobrigos in fines suos unde erant profecti 
reverti iussit et quod omnibus</div>
</body>
<script>
div = _("#d"); //sector CompactDOM for div element
divD = _("#d").d; //element native JS 
H = divD.scrollHeight; 
_("button").click(function(){
//scroll to Y
Y=divD.scrollTop==0?H:0;
div.scroll(Y);
});
</script>
</html>
```

  
  
## 2.17 Method submit  
     
   if parametr is event handler function, then this method handles the submit event type.  
If there are several forms in the document, then it is necessary to define a selector.  
If no selector is defined, then the default selector is "document.form[0]".  
*_(selector).submit( event handler function );*  
or  
*__.submit( event handler function );*  
  
     
If the parameter is not specified, then the method submits the form.  
*__.submit();*  
     
Example 1. Method submit with event handler function  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<form  action="sections/submit_test.html" >
<input name="width" type="text" placeholder="width"  autocomplete="off" >
<input name="height" type="text" placeholder="height" autocomplete="off">
<input type="submit" value="submit">
</form>
</body>
<script>
EventHandlerFunction = function(){
  if(this.width.value > 0 && this.height.value > 0)
  {
	msg = "Form sent successfully!";
  }
  else
  {
	msg = "Please fill in the form fields!";
	//stop form from submitting
	event.preventDefault();
  }
  alert(msg);
};
__.submit(EventHandlerFunction);
</script>
</html>
```

  
  
     
Example 2. Method submit without parameter  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<form  action="sections/submit_test.html" >
<input name="width" type="text"  value="200">
<input name="height" type="text"  value="100">
<input type="submit" value="submit">
</form>
</body>
<script>
//sent form
__.submit();
</script>
</html>
```

  
  
     
In both examples, form action is "submit_test.html". To obtain data, the *url* method was used,  
which will be described below.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document submit_test.html</title>
</head>
<body>
<div>Data received in submit_test.html:</div>
</body>
</div><hr>
</body>
<script>
//Applying the url method to receive the sent data
GET = __.url(1);
for(name in GET) document.write(name + "=" + GET[name] + "<br>");
</script>
</html>
```

  
  
## 3. Basic methods  
## 3.1 Method animate  
     
   This method creates or stops a transition effect. Method *transition* alias name is *animate*.  
*_(selector).transition(Properties, Duration, TimingFunction);*  
or  
*_(selector).animate(Properties, Duration, TimingFunction);*  
  
The *Properties* parameter can have the following values:   
- *"none"* - method stops the transition effect;   
- *"css property name:property value;... css property name:property value"* -  
    method adds the specified properties to the attribut style of the element and creates  
    properties for the transation effect;    
- *"transation property name,... transation property name"* -  
    method applies the specified properties to the transation effect.  
  
The *Duration* parameter can have the following values:   
- *number* - a value up to 10 is interpreted as seconds,otherwise as milliseconds.   
    For example, the number 4 to "4s", 100 to "100ms";  
- *a string containing the value of property duration*  
    set according to the css-rules - duration with the unit of measurement s/ms,  
    or several values separated by commas. For example, "1s","100ms","100ms,200ms";  
- *a string containing the duration name* - "fast" is equal to "200ms", "slow" is equal to "600 ms".  
    It is allowed to specify several values separated by comma. For example, "slow","fast","slow,fast";         
- *null* - If the duration is not specified, the default value is "600ms"  
  
The *TimingFunction* parameter can be set according to the css-rules:   
*linear, ease, ease-in, ease-out, ease-in-out, step-start, step-end, steps(int,start|end),  
cubic-bezier(n,n,n,n), initial, inherit*.   
If the parameter is not specified, then the default function is applied: *cubic-bezier(.02, .01, .47, 1)*.  
  
Here the examples will use the *css*, *ishide* and *content* methods, which will be described below.  
Example 1. Method animate for div element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<style>
div{background-color:red}
</style>
</head>
<body>
<p>
<button></button>
</p>
<div></div>
</body>
<script>
div = _("div");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
div.animate("opacity:0;width:0;height:0",3,"ease-in-out");
but.click(function(){
	if(div.ishide())
	{
		div.css("opacity:1;width:150;height:150");
		_(this).content(bth);
	}
	else
	{
		div.css("opacity:0;width:0;height:0");
		_(this).content(bts);
	}
});
</script>
</html>
```

  
     
Example 2. Method transition for div element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<style>
div{background-color:red}
</style>
</head>
<body>
<p>
<button></button>
</p>
<div></div>
</body>
<script>
div = _("div");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
div.transition("opacity:0;width:0;height:0",3,"ease-in-out");
but.click(function(){
	if(div.ishide())
	{
		div.css("opacity:1;width:150;height:150");
		_(this).content(bth);
	}	
	else
	{
		div.css("opacity:0;width:0;height:0");
		_(this).content(bts);
	}	
});
</script>
</html>
```

  
     
Example 3. Method animate with only first parameter for div element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<style>
div{background-color:red}
</style>
</head>
<body>
<p>
<button></button>
</p>
<div></div>
</body>
<script>
div = _("div");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
div.animate("opacity:0;width:0;height:0");
but.click(function(){
	if(div.ishide())
	{
		div.css("opacity:1;width:150;height:150");
		_(this).content(bth);
	}	
	else
	{
		div.css("opacity:0;width:0;height:0");
		_(this).content(bts);
	}	
});
</script>
</html>
```

  
     
Example 4. Method animate for element img  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
</head>
<body>
<p>
<button></button>
</p>
<img id="im" src="sections/21.jpg" width="250">
</body>
<script>
img = _("img");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
img.animate("opacity:0",5,"ease-in-out");
but.click(function(){
	if(img.ishide())
	{
		img.css("opacity:1");
		_(this).content(bth);
	}	
	else
	{
		img.css("opacity:0");
		_(this).content(bts);
	}	
});
</script>
</html>
```

  
  
## 3.2 Method attr  
     
   This method allows you to manipulate the attributes of elements. Method *attr* alias name is *attribute*.   
*_(selector).attr( Attribute, Value);*  
or  
*_(selector).attribute( Attribute, Value);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- *both parameters* are defined as *strings* -  in this case, the attribute of   
the element whose name is determined by the first parameter is assigned the value   
specified by the second parameter.   
- Only parameter *Attribute* is defined as *string* -  
    in this case, the method returns the value of the attribute, the name of which is defined   
    by the first parameter;    
- Only parameter *Attribute* is defined as *object* - *{ attrName : attrValue ,..., attrName : attrValue }*  
   In this case, the method sets several attributes. The pseudo-attribute "*rem*" is allowed,   
   the value of which specifies the name of the attribute to be removed.  
   It is allowed to specify the names of several attributes separated by commas.  
   For example Attribute object:
   ```js
   {  
      width : "100",  
      height : "200",  
      rem : "readonly, placeholder"  
   }
   ```
  
Here the examples will use the *css*, *ishide* and *content* methods, which will be described below.  
Example for method attr.


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
button{width:500px;margin:0 0 10 0;text-align:left;padding:1}
</style>
</head>
<body>
<button id="_1">inp.attribute("name","inp1")</button><br>
<button id="_2">inp.attribute(
{
  id:"inp1",
  name:"width",
  type:"text",
  placeholder:"width"
}
)</button><br>
<button id="_3">
inp.attribute(
{ 
 {rem : "readonly,placeholder"}
}
)</button>
<button id="_4">alert(inp.attribute("id"))</button>
<br>
input element:
<p><input></p>
html-code of input element:<br>
<textarea id="msg" cols=80 rows=1></textarea>
</body>
<script>
	inp = _("p > input");
	p = _("p");
	msg = _("#msg");
	buttonsCollection = _("button");			
	//buttons events handler	
	EventHandlerFunction = function(){	
	switch(this.id)
	{
		case "_1":
		inp.attribute("name","inp1");
		break;
		
		case "_2":
		inp.attribute(
		{
			id : "inp1",
			name : "width",
			type : "text",
			placeholder : "width",
			readonly : true
		});	
		break;

		case "_3":
		inp.attribute({ rem : "readonly,placeholder" });
		break;
		
		case "_4":
		alert(inp.attribute("id"));
		return;
		break;
		
	}	
	msg.content(p.content());
	}
	//sets up a function events handler function
	buttonsCollection.click(EventHandlerFunction);
	msg.content(p.content());	
</script>
</html>
```

  
  
  
## 3.3 Method attribute  
     
   This method allows you to manipulate the attributes of elements. Method *attr* alias name is *attribute*.   
*_(selector).attr( Attribute, Value);*  
or  
*_(selector).attribute( Attribute, Value);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- *both parameters* are defined as *strings* -  in this case, the attribute of   
the element whose name is determined by the first parameter is assigned the value   
specified by the second parameter.   
- Only parameter *Attribute* is defined as *string* -  
    in this case, the method returns the value of the attribute, the name of which is defined   
    by the first parameter;    
- Only parameter *Attribute* is defined as *object* - *{ attrName : attrValue ,..., attrName : attrValue }*  
   In this case, the method sets several attributes. The pseudo-attribute "*rem*" is allowed,   
   the value of which specifies the name of the attribute to be removed.  
   It is allowed to specify the names of several attributes separated by commas.  
   For example Attribute object:
  ```js
   {
      width : "100",
      height : "200",
      rem : "readonly, placeholder"
   }
   ```
  
Here the examples will use the *css*, *ishide* and *content* methods, which will be described below.
Example for method attribute.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
button{width:500px;margin:0 0 10 0;text-align:left;padding:1}
</style>
</head>
<body>
<button id="_1">inp.attribute("name","inp1")</button><br>
<button id="_2">inp.attribute(
{
  id:"inp1",
  name:"width",
  type:"text",
  placeholder:"width"
}
)</button><br>
<button id="_3">
inp.attribute(
{
 {rem : "readonly,placeholder"}
}
)</button>
<button id="_4">alert(inp.attribute("id"))</button>
<br>
input element:
<p><input></p>
html-code of input element:<br>
<textarea id="msg" cols=80 rows=1></textarea>
</body>
<script>
	inp = _("p > input");
	p = _("p");
	msg = _("#msg");
	buttonsCollection = _("button");
	//buttons events handler
	EventHandlerFunction = function(){
	switch(this.id)
	{
		case "_1":
		inp.attribute("name","inp1");
		break;

		case "_2":
		inp.attribute(
		{
			id : "inp1",
			name : "width",
			type : "text",
			placeholder : "width",
			readonly : true
		});
		break;

		case "_3":
		inp.attribute({ rem : "readonly,placeholder" });
		break;

		case "_4":
		alert(inp.attribute("id"));
		return;
		break;

	}
	msg.content(p.content());
	}
	//sets up a function events handler function
	buttonsCollection.click(EventHandlerFunction);
	msg.content(p.content());
</script>
</html>
```

  
  
## 3.4 Method checked  
     
This method is applicable only for radiobutton and checkbox elements.  
  
*_(selector).checked(parameter)*;  
  
   Depending on the given selector, the method can be applied to one element or   
to several elements(NodeList). The functionality of the method depends on the specified  
selector and parameter. The following cases are allowed:   
  
- selector defines one *element or NodeList , parameter is boolean true/false* - in this case,  
the parameter value assigns the checked attribute to one or more elements.  
  
- selector defines *NodeList , parameter is integer* - in this case, the parameter value   
must match index of the NodeList. For the element with this index, the value of the *checked*  
attribute will be set to *true*.  
  
- selector defines one *element or NodeList , parameter is undefined* - in case  the Nodelist,  
method returns an array of indexes of the checked elements, or if there are no checked elements,  
then returns *undefined*.   
In the case of one element, the method returns *true*, if the element is checked, otherwise *false*.   
  
Here the examples will use the "content" method, which will be described below.   
Example for method checked.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
button{width:500px;margin:0 0 10 0;text-align:left;padding:1}
#msg{margin-top:10}
</style>
</head>
<body>
<button id="_1">_("input[type='radio']").checked(2)</button><br>
<button id="_2">_("#check_bl input").checked(true)</button><br>
<button id="_3">_("#check_bl input").checked(false)</button><br>
<button id="_4">_("#check_bl input").checked()</button><br>
<div> 
<input name="radio" type="radio" checked value="A">A
<input name="radio" type="radio" value="B">B
<input name="radio" type="radio" value="C">C
</div>
<br>
<input id="allCh" type="checkbox">check all 
<div id="check_bl"> 
<input type="checkbox" checked value="A">A 
<input type="checkbox" value="B">B
<input type="checkbox" value="C">C
</div>
<div id="msg"></div>
</body>
<script>
rb = _("input[type='radio']"); 
ch = _("#check_bl input");
allCh = _("#allCh");
msg = _("#msg");			
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{
		case "_1":
		rb.checked(2);
		rbEventHandlerFunction();	
		break;
			
		case "_2":			
		ch.checked(true);			
		break;

		case "_3":
		ch.checked(false);	
		break;
			
		case "_4":
		chEventHandlerFunction();
		break;			
	}
}

rbEventHandlerFunction = function(){
	ind = rb.checked();
	mcont = "checked radio ind: " + ind;
	msg.content(mcont);
};
	
chEventHandlerFunction = function(){
	out = ch.checked();
	mcont = "checked checbox ind: ";
	if(__.a(out)) 
	  mcont += out.join(", ");
	else if(__.n(out))
	  mcont += out;
	else
	  mcont += "undefined";			
	  msg.content(mcont);
};	
	
allChEventHandlerFunction= function(){
	if(this.checked)
	  ch.checked(true);
	else	
	  ch.checked(false);		
};
//sets up events handler functions
rb.change(rbEventHandlerFunction);
allCh.change(allChEventHandlerFunction);	
ch.change(chEventHandlerFunction);	
_("button").click(EventHandlerFunction);
</script>
</html>
```

  
  
## 3.5 Method class  
     
This method is not applicable  for NodeList.  
  
*_(selector).class(Classes , Set)*;  
  
 The functionality of the method depends on the specified  
parameter. The following cases are allowed:   
  
- parameter *Classes is string*, parameter *Set is boolen - true/false* - in this case,  
the *Classes* parameter can contain one or several identifiers of CSS-classes separated   
by spaces (multi class). If the *Set* parameter is *true*, then the method complements these   
identifiers into the attribute class of the element, otherwise it removes those that were  
previously defined. As a result, the class attribute will contain only unique identifiers  
or may be empty.   
  
- *both parameters are undefined* - in this case, the method returns   
the actual state  of the class attribute.   
  
Here the examples will use the "content" method, which will be described below.   
Example for method class.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
button{width:500px;margin:0 0 10 0;text-align:left;padding:1}
.cl_input{font-family:arial;font-size:12px;padding:5px}
.inp_error{color:red}
.rb{
border:1px solid #aaa;
border-radius:5px
}
</style>
</head>
<body>
<button id="_1">_("#inp1").class("inp_error rb",true)</button><br>
<button id="_2">_("#inp1").class("inp_error rb",false)</button><br>
<button id="_3">_("#inp1").class("rb",true)</button><br>
<button id="_4">_("#inp1").class()</button><br>
<p>
<input id="inp1" type="text" class="cl_input" value=1>
</p>
<div id="msg"></div>
</body>
<script>
msg = _("#msg");
inp=_("#inp1");
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{
		case "_1":
		inp.class("inp_error rb",true);		
		break;
			
		case "_2":			
		inp.class("inp_error rb",false);			
		break;

		case "_3":
		inp.class("rb",true);
		break;
			
		case "_4":		
		break;			
	}
	showClass();
}
showClass=function(){
	cl = inp.class();
	msg.content("input element, class: " + cl);
};
_("button").click(EventHandlerFunction);
</script>
</html>
```

  
  
## 3.6 Method content  
     
This method sets or returns the HTML content of an element.  
Contet method is not applicable  for NodeList.  
  
*_(selector).contet(Content)*;  
  
 The functionality of the method depends on the specified parameter. The following cases are allowed:    
  
- parameter *Content of type string, or any other type that can be converted to a string*, - in this case,  
the method sets the HTML content of the element (also to *iframe*) using the content given by the parameter.  
  
- parameter *Content is object {url: "content url"}*, - in this case, the method sends an AJAX Request  
and sets the received HTML content of an element.   
  
- parameter *Content undefined*, - in this case, the method returns the HTML content of the element.   
  
The example below will use the following files:  
Text file *sections/content.txt*

```html
<p>the method <b>content</b> sends an AJAX Request <b>
sections/content.txt</b> and sets the received HTML
content of an element.</p>
```
  
     
PHP file *sections/content.php*

```php
echo "<p>the method <b>content</b> sends an AJAX Request <b>"
,$_SERVER['SCRIPT_NAME'],"</b> and sets the received HTML
content of an element.</p>";
```
  
     
Example for method content.  
</code>  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
button{width:500px;margin:0 0 10 0;text-align:left;padding:1;padding:5}
.rb{border:1px solid #aaa;border-radius:5px;padding:5;min-height:20px}
</style>
</head>
<body>
<button id="_1">_("#msg").content({url:"sections/content.txt"});</button><br>
<button id="_2">_("#msg").content({url:"sections/content.php"});</button><br>
<button id="_3">_("#msg").content("Hello!")</button><br>
<button id="_4">_("#msg").content(2021)</button><br>
<p>
<p id="msg" class="rb"></p>
</body>
<script>
msg = _("#msg");
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{
		case "_1":
		msg.content({url:"sections/content.txt"}); 	
		break;
			
		case "_2":			
		msg.content({url:"sections/content.php"}); 			
		break;

		case "_3":
		msg.content("Hello!");
		break;
			
		case "_4":
		msg.content(2021); 
		break;			
	}
	showClass();
}
showClass=function(){
	conm = msg.content();
	msg.content(cont);
};
_("button").click(EventHandlerFunction);
</script>
</html>
```

  
  
## 3.7 Method create  
     
   This method allows you to create one or more elements inside,  before or after  
the element for which the method is applied (further, the "*rbs-element*" - element represented by   
the selector).   
   If the selector is not defined, then the created elements will be added inside   
the *document.body* object.   
   The method returns the selector of the created element, to which, if necessary, the create method or   
any other CompactDOM methods can be applied.  
  
*newSelector = _(selector).create( Data, Attributes )*;  
or to create multiple related elements, for example, parent and child elements   
*_(selector).create( Data, Attributes ).create( Data, Attributes )...*;  
   The *Data</i parameter> contains the datas of the created elements or their number. Depending on the   
types of elements to create, this parameter can contain an array or an object.  
If the parameter is an *array*, then the value of each element of the array will be inserted into the content  
of each created html element.  
For example, *Data = ["Apple","Orange","Grape"]* to create three option elements:   

```html<option>Apple</option>
<option>Orange</option>
<option>Grape</option>
```
     
if the parameter is an *object*, then each property of that object will be used to set one of the attributes of the  
element being created, and the property value will be used to set the content of the element.  
For example, *Data = {1:"Apple",2:"Orange",3:"Grape"}* to create three option elements:   

```html<option value="1">Apple</option>
<option value="2">Orange</option>
<option value="3">Grape</option>
```
     
   The *Attributes* parameter contains an object whose properties define the attributes of the  
elements to be created, as well as the special properties *tag*, which defines the name of the tag   
and *add*, which defines where the elements should be created in relation to *rbs-element*.  
   In case of creating several elements, the specified value of the *id* and *name* attributes  
will be supplemented with a unique index.   
For example:  
- *{tag:"div", id:"newDiv", class:"clDiv"}* - creates elements within an rbs-element;  
- *{tag:"div", add:"befor", id:"newDiv", class:"clDiv"}* - create elements before an rbs-element;   
- *{tag:"div", add:"after", id:"newDiv", class:"clDiv"}* - create elements after an rbs-element.  
  
The functionality of the method depends on the rbs-element and the given parameters and in special cases.   
The following cases are allowed:  
  
A. Parent rbs-element  is *select* element. An *option* child elements can be created.   
In this case, the in parameter  *Attributes* property *add* (before/after)" is not allowed,   
the *tag* property may not be set.  
Parent rbs-element is *ol* or *ul* element. An *li* child elements can be created.   
In this case, the in parameter  *Attributes* property *add* (before/after)" is not allowed.   
  
Example A1. Method create for parent elements: *select*, *ol*, *ul* without *Attributes* parametr

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
_("select").create(["Apple","Orange","Grape"])
</button><br>
<button id="_2">
_("select").create({1:"Apple",2:"Orange",3:"Grape"})
</button><br>
<button id="_3">
_("#ul").create(["Apple","Orange","Grape"])
</button><br>
<button id="_4">
_("#ol").create(["Apple","Orange","Grape"])
</button><br>
<div id="html">
<select>
</select>
<ul id="ul">
</ul>
<ol id="ol">
</ol>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
DataArray = ["Apple","Orange","Grape"];
DataOject = {1:"Apple",2:"Orange",3:"Grape"};
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		_("select").content("");
		_("select").create(DataArray);
		break;
			
		case "_2":
		_("select").content("");		
		_("select").create(DataOject)		
		break;

		case "_3":
		_("#ul").content("This is fruit\n");
		_("#ul").create(DataArray);
		break;
			
		case "_4":
		_("#ol").content("This is fruit\n");		
		_("#ol").create(DataArray);
		break;			
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
Example A2. Method create for parent elements: *select*, *ol*, *ul* with *Attributes* parametr 

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
_("select").create(["Apple","Orange","Grape"],{class:"cr"})
</button><br>
<button id="_2">
_("select").create({1:"Apple",2:"Orange",3:"Grape"},{class:"f16"})
</button><br>
<button id="_3">
_("#ul").create(["Apple","Orange","Grape"],{class:"cr",id:"li"})
</button><br>
<button id="_4">
_("#ol").create(["Apple","Orange","Grape"],{class:"cr",id:"li"})
</button><br>
<div id="html">
<select>
</select>
<ul id="ul">
</ul>
<ol id="ol">
</ol>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
DataArray = ["Apple","Orange","Grape"];
DataOject = {1:"Apple",2:"Orange",3:"Grape"};
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		_("select").content("");
		_("select").create(DataArray,{class:"cr"});
		break;
			
		case "_2":
		_("select").content("");		
		_("select").create(DataOject, {class:"f16"})		
		break;

		case "_3":
		_("#ul").content("This is fruit\n");
		_("#ul").create(DataArray,{class:"cr", id:"li"});
		break;
			
		case "_4":
		_("#ol").content("This is fruit\n");		
		_("#ol").create(DataArray,{class:"cr", id:"li"});
		break;			
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
Example A3. Create parent *select* element and childs elements *option* with *Attributes* parametr 

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
select = _("#html").create(1,{tag:"select",id:"sel",class:"cr"})
</button><br>
<button id="_2">
select.create(["Apple","Orange","Grape"],{class:"cr"})
</button><br>
<button id="_3">
select.create({1:"Apple",2:"Orange",3:"Grape"},{class:"f16"})
</button><br>
<button id="_4">
_("#html").create(1,{tag:"select",id:"sel",class:"cr"}).create(
{1:"Apple",2:"Orange",3:"Grape"},{class:"f16"})
</button><br>
<div id="html">
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
var select;
DataArray = ["Apple","Orange","Grape"];
DataOject = {1:"Apple",2:"Orange",3:"Grape"};
msg = "First Click the first button to create a select element!" 
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		html.content("");
		select = html.create(1,{tag:"select",id:"sel",class:"cr"});
		break;
		
		case "_2":		
		if((select))
		{
			select.content("");
			select.create(DataArray,{class:"cr"});
		}
		else html.content(msg);
		break;
			
		case "_3":
		if(select)
		{
			select.content("");		
			select.create(DataOject, {class:"f16"});
		} else alert(msg);
		break;
		
		case "_4":
		html.content("");
		html.create(1,{tag:"select",id:"sel",class:"cr"}).create(
		DataOject, {class:"f16"});		
		break;
		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
B. Method create for *input* or *label input* elements.  
  
   If the *Data* parameter is an array, then the method creates one or more html element.  
The value of each element in the array will be assigned to the value attribute of each created html element.  
For example: *["value of first input", "value of second input",...]*  
     
   If the *Data* parameter is an object, then the method creates one or more *label* parent and input  
child elements.Each property of the object will be assigned the value of the value attribute of each created   
html element. Each *object property* will be inserted into the content of each html *label* element  created.  
For example: *{  
   "value of first input":"label of first input",  
   "value of second input":"label of seconf input",  
   ...  
}*   
   In the *Attribute* parameter, the *type* property is required, but  
*tag* property may not be set (set by default *tag:"input"*)   
For example: *{type:"text"}* or *{type:"radio"}* or *{type:"checkbox"}*  
   
Example B. Method create for *input* or *label input* elements, with *Attributes* parameter

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
_("#html").create(DataObject, { type:"text", id:"fr", name:"fr" })
</button><br>
<button id="_2">
_("#html").create(DataObject, { type:"radio", id:"fr", name:"fr" })
</button><br>
<button id="_3">
_("#html").create(DataObject, { type:"checkbox", id:"fr", name:"fr" })
</button><br>
<button id="_4">
_("#html").create(DataArray, { type:"text", id:"fr", name:"fr", class:"iia" })
</button><br>
<div id="html">
DataObject = {
	"Apple":"Label apple",
	"Orange":"Label orange",
	"Grape":"Label grape"
};
DataArray = ["Apple","Orange","Grape"]; 
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
DataObject = {
	"Apple":"Label apple",
	"Orange":"Label orange",
	"Grape":"Label grape"
	};
DataArray = ["Apple","Orange","Grape"]; 
AttributesT = {type:"text", id:"fr", name:"fr"};
AttributesC = {type:"checkbox", id:"fr", name:"fr"};
AttributesR = {type:"radio", id:"fr", name:"fr"};
AttributesT2 = {type:"text", id:"fr", name:"fr", class:"iia"};
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		html.content("");
		html.create(DataObject, AttributesT);
		break;
			
		case "_2":
		html.content("");		
		html.create(DataObject, AttributesR);		
		break;

		case "_3":
		html.content("");
		html.create(DataObject, AttributesC);
		break;
			
		case "_4":
		html.content("");		
		html.create(DataArray,AttributesT2);
		break;			
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	cont = __.ins("<br>", cont, "\n");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
html.content("");
</script>
</html>
```

  
     
C. Method create for *img* or *a* elements.  
  
C1. The *Data* parameter to create one or more *img* elements must be an array.   
The value of each element in the array will be assigned to the src attribute of each created img element.  
For example: *["src of first element", "src of second element",...]*  
In the *Attribute* parameter, the *tag:"img"* property is required.  
     
C2.   The *Data* parameter to create one or more *a* elements must be an object.  
Each property of the object will be assigned the value of the href attribute of each created   
html element. Each *object property* will be inserted into the content of each html *a* element  created.  
For example: *{  
   "href of first element":"content of first element",  
   "href of second element":"content of second element",  
   ...  
}*   
In the *Attribute* parameter, the *tag:"a"* property is required.  
     
Example C1,C2. Method create for *a* and *img* elements, with *Attributes* parameter

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
_("#html").create(DataObject, { tag:"a", target:"_blank" })
</button><br>
<button id="_2">
_("#html").create(DataArray, { tag:"img",width:"150px" })
</button><br>
<button id="_3">
_("#html").create(1,{tag:"div"}).create(DataObject, 
{ add:"befor",tag:"a", target:"_blank" });
</button><br>
<button id="_4">
_("#html").create(1,{tag:"div"}).create(DataObject, 
{ add:"after",tag:"a", target:"_blank" });	
</button><br>
<div id="html">
DataObject = {
	"https://en.wikipedia.org/wiki/Apple":"About apple",
	"https://simple.wikipedia.org/wiki/Orange_(fruit)":"About orange",
	"https://simple.wikipedia.org/wiki/Grape":"About grape"
};
DataArray = [
"sections/21.jpg",
"sections/375.jpg"
];
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
DataObject = {
	"https://en.wikipedia.org/wiki/Apple":"About apple",
	"https://simple.wikipedia.org/wiki/Orange_(fruit)":"About orange",
	"https://simple.wikipedia.org/wiki/Grape":"About grape"
};
DataArray = [
"sections/21.jpg",
"sections/375.jpg"
];
Attributes1 = {tag:"a", target:"_blank"};
Attributes2 = {tag:"img", width:"150px"};
Attributes3 = {add:"befor", tag:"a", target:"_blank"};
Attributes4 = {add:"after", tag:"a", target:"_blank"};
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		html.content("");
		html.create(DataObject, Attributes1);
		break;
			
		case "_2":
		html.content("");		
		html.create(DataArray, Attributes2);		
		break;

		case "_3":
		html.content("");
		html.create(1,{tag:"div"}).create(DataObject, Attributes3);		
		break;
			
		case "_4":
		html.content("");
		html.create(1,{tag:"div"}).create(DataObject, Attributes4);			
		break;			
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	cont = __.ins("<br>", cont, "\n");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
html.content("");
</script>
</html>
```

  
     
D. Creation of any elements with content.   
  
D1. The *Data* parameter to create one or more empty elements must be a number that   
specifies the number of elements to be created.  
For example, create one empty h1 element:   
*Data=1  
Attribute={tag:"h1"}*  
  
D2. The *Data* parameter to create one or more non-empty elements must be an array.  
The value of each element in the array will be inserted into the content of each created element.  
For example, create 3 div elements  with content - "Apple","Orange","Grape":   
*Data=["Apple","Orange","Grape"]  
Attribute={tag:"div"}*  
  
In both cases, the *Attribute* parameter requires the *tag* property.   
  
Example D. Method create for *div*, *span* and *textarea* elements, with *Attributes* parameter

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
_("#html").create( DataArray, { tag:"div",id:"fr" })
</button><br>
<button id="_2">
_("#html").create( DataArray, { tag:"span",id:"fr" })
</button><br>
<button id="_3">
_("#html").create( DataArray.join("\n"), { tag:"textarea", cols:40, rows:3 });
</button><br>
<div id="html">
DataArray = ["Apple","Orange","Grape"];
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
DataArray = ["Apple","Orange","Grape"];
Attributes1 = {tag:"div",id:"fr"};
Attributes2 = {tag:"span",id:"fr"};
Attributes3 = {tag:"textarea", cols:40, rows:3};
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		html.content("");
		html.create(DataArray, Attributes1);
		break;
			
		case "_2":
		html.content("");		
		html.create(DataArray, Attributes2);		
		break;

		case "_3":
		html.content("");			
		html.create(DataArray.join("\n"), Attributes3);	
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	cont = __.ins("<br>", cont, "\n");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
html.content("");
</script>
</html>
```

  
  
## 3.8 Method css  
     
   This method is useful for manipulating the style attribute of elements. The method alias *style* is *css*.    
*_(selector).css(Value);*  
or  
*_(selector).style(Value);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- The *Value* parameter is defined as *strings* -  in this case, the method changes   
   the value of the attribute style element. The parameter must contain a string that corresponds to the  
   rules of the *CSS* language (Cascading Style Sheets).  
   The method checks if the specified properties match the properties in the element style attribute.  
   If any property match, the property value in the style attribute will be changed to the property  
   value specified in the method parameter.   
   If any property specified in the method parameter is set without a value, then the corresponding   
   property in the style attribute will be removed.   
  
- The *Value* parameter is defined as *boolean false* -  
   in this case, the method completely removes the element's style attribute.   
     
- The *Value* parameter is undefined - in this case, the method returns a string containing  
   the value of the element's style attribute.   
  
Example for *css* method.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
alert( _("#html div").css() )
</button><br>
<button id="_2">
<div>demo 2</div>
_("#html div").css("color;font-weight")
</button><br>
<button id="_3">
<div>demo 3</div>
_("#html div").css("color:violet;font-weight:bold")
</button><br>
<button id="_4">
<div>demo 4</div>
_("#html div").css("border:1px solid blue;<br>
font-weight:bold;<br>
border-radius:3px;<br>
padding:5px;<br>
color:blue")
</button><br>
<div id="html">
<div style="
border:1px solid blue;
font-weight:bold;
border-radius:3px;
padding:5px;
color:blue">
The parameter must contain a string that corresponds to the
rules of the CSS language (Cascading Style Sheets).
</div>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
el=_("#html div");
style=el.css();
//buttons events handler
EventHandlerFunction = function(){
_(this).css("height:30px");
	switch(this.id)
	{
		case "_1":
		alert(el.css());
		break;

		case "_2":
		el.css("color;font-weight")
		break;

		case "_3":
		el.css("color:violet;font-weight:bold")
		break;

		case "_4":
		el.css(style);
		break;			
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
Example for *style* method.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
alert( _("#html div").style() )
</button><br>
<button id="_2">
<div>demo 2</div>
_("#html div").style("color;font-weight")
</button><br>
<button id="_3">
<div>demo 3</div>
_("#html div").style("color:violet;font-weight:bold")
</button><br>
<button id="_4">
<div>demo 4</div>
_("#html div").style("border:1px solid blue;<br>
font-weight:bold;<br>
border-radius:3px;<br>
padding:5px;<br>
color:blue")
</button><br>
<div id="html">
<div style="
border:1px solid blue;
font-weight:bold;
border-radius:3px;
padding:5px;
color:blue">
The parameter must contain a string that corresponds to the
rules of the CSS language (Cascading Style Sheets).
</div>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
el=_("#html div");
style=el.style();
//buttons events handler
EventHandlerFunction = function(){
_(this).style("height:30px");
	switch(this.id)
	{
		case "_1":
		alert(el.style());
		break;

		case "_2":
		el.style("color;font-weight")
		break;

		case "_3":
		el.style("color:violet;font-weight:bold")
		break;

		case "_4":
		el.style(style);
		break;
	}
	showContent();
}
showContent=function(){
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.9 Method display  
     
   This method is useful for manipulating the display property of an style attribute.  
*_(selector).display(Value);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- The *Value* parameter is defined as *strings* - in this case, the method assigns the   
   value specified by the parameter to the value of the *display* property.   
   If the *display* property has  not been defined in the *style* attribute, then the method  
   complements the *display* property and assigns it the specified value.  
     
- The *Value* parameter is undefined - in this case, the method returns a string containing  
   the value of the display property.   
  
Example for method *display*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
alert( _("#html div").display() );
</button><br>
<button id="_2">
_("#html div").display("none"); 
</button><br>
<button id="_3">
_("#html div").display("block"); 
</button><br>
<div id="html">
<div style="
border:1px solid blue;
font-weight:bold;
border-radius:3px;
padding:5px;
color:blue">
The parameter must contain a string that corresponds to the
rules of the CSS language (Cascading Style Sheets).
</div>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
el=_("#html div");
//buttons events handler	
EventHandlerFunction = function(){	
	switch(this.id)
	{		
		case "_1":
		alert(el.display());
		break;
			
		case "_2":
		el.display("none");	
		break;

		case "_3":
		el.display("block"); 
		break;
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.10 Method childs  
     
This method only applies to one parent element and returns all of its children elements (NodeList-object).  
*_(selector).childs();*  
or  
*_(selector, HTML/XMLdocument).childs();*  
  
The following examples use the '*content*' and '*each*' methods.  
Example 1. The *childs* method applies to the current HTML document.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
body{font-family: arial}
#parentDiv, #parentDiv > div, #cont{
	border:1px solid #0000ff;
	padding: 5;
	margin-top: 5;
	font-size: 12;
}
</style>
</head>
<body>
<h4>Div id="parentDiv":</h4>
<div id="parentDiv">
<div>child div1</div>
<div>child div2</div>
<div>child div3</div>
</div>
<h4>Div id="cont":</h4>
<div id="cont"></div>
</body>
<script>
  childNodes = _("#parentDiv").childs();
  console.log(childNodes);
  tmp="Parent node 'parentDiv'  childNodes: ";
  _(childNodes).each(function(elm){
   tmp += "<br>nodeName: " + elm.name + ", textContent: " + elm.text;
  });
  _("#cont").content(tmp);
</script>
</html>
```

  
     
Example 2. The *childs* method applies to the XMLdocument.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
body{font-family: arial;font-size: 12;}
#xmlStr{display: none}
#doc{border: 1px solid #0000ff;
padding: 5;
margin-top: 10;
display: inline-block}
</style>
</head>
<body>
<h4>XML as text</h4>
<div id="xmlStr"><note>
<from>Oliver</from>
<to>Lucas</to>
<message>Hello!</message>
</note></div>
<textarea id="viewXml" cols="80" rows=5></textarea>
<div id="doc">
parser = new DOMParser();<br>
XMLDocument = parser.parseFromString(xmlStr, "application/xml");<br>
childNodes = _("note", XMLDocument).childs();
</div>
<h4>Div id="cont":</h4>
<div id="cont"></div>
</body>
<script>
xmlStr = _("#xmlStr").content();
_("#viewXml").content(xmlStr);
parser = new DOMParser();
XMLDocument = parser.parseFromString(xmlStr, "application/xml");
childNodes = _("note", XMLDocument).childs();
console.log(childNodes);
tmp="Parent node 'note' of XMLDocument<br>childNodes:";
_(childNodes).each(function(elm){
   tmp += "<div>&emsp;&emsp;|&emsp; nodeName: " + elm.name + ", textContent: " + elm.text+"</div>";
});
_("#cont").content(tmp);
</script>
</html>
```

  
  
## 3.11 Method each  
     
   This method allows you to apply several methods to one element, as well as one or more   
methods to several elements (NodeList) in the callback function.  
*_(selector).each(function(Element, IndexOfElement){  
   Element.CompactDOM_metod(...)  
   .....  
   Element.CompactDOM_metod(...)  
   .....  
   Element.d.NativeJS_metod( );  
   Property=Element.d.NativeJS_Property;  
   Element.d.NativeJS_Property=Property;  
   .....  
});*  
Method defines *Element* as an object to which CompactDOM methods can be applied   
in the callback function.  
For this object, the method defines the following readonly properties:  
-  Element.*d* returns native js DOM-Element;  
-  Element.*w* returns width of element;  
-  Element.*h* returns height of element;  
-  Element.*t* returns top of element;  
-  Element.*l* returns left of element.  
-  Element.*name* returns name of element.  
-  Element.*text* returns textContent of element.  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- The *Value* parameter is defined as *strings* - in this case, the method assigns the   
   value specified by the parameter to the value of the *display* property.   
   If the *display* property has  not been defined in the *style* attribute, then the method  
   complements the *display* property and assigns it the specified value.  
     
- The *Value* parameter is undefined - in this case, the method returns a string containing  
   the value of the display property.   
The following example use the '*content*', '*create*', '*css*', '*change*' and '*display*' methods.
Example for method *each* with *callback function(Element)*.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
<style>
.cl{
border:1px solid blue;
font-weight:bold;
border-radius:3px;
padding:5px;
color:blue}
</style>
</head>
<body>
<button id="_1">
<div>demo 1</div>
i=1;
_("#html div").each(function(divEl){<br>
divEl.class("cl",true);<br>
divEl.style("border:1");<br>
divEl.content("content " + i);<br>			
i++;<br>
});
</button><br>
<button id="_2">
<div>demo 2</div>
_("#d1").content("content 21");<br>
_("#d1").each(function(divEl){<br>
divEl.class("cl",false);<br>
divEl.style("padding:5;border:1");<br>
dc = divEl.content();<br>
dc += "offsetHeight: " + divEl.d.offsetHeight;<br>
dc += "height: " + divEl.h;<br>
dc += ", width: " + divEl.w;<br>
dc += "top: " + divEl.t;<br>
dc += ", left: " + divEl.l;<br>
dc += "name: " + divEl.name;<br>
dc += ", textContent: " + divEl.text;<br>
divEl.content(dc);<br>			
});<br> 
</button><br>
<button id="_3">
<div>demo 3</div>
_("#html div").each(function(divEl){<br>
  divEl.display("none");<br>
}); 
</button><br>
<button id="_4">
<div>demo 4</div>
_("#html div").each(function(divEl){<br>
  divEl.display("block");<br>
}); 
</button><br>
<div id="html">
<div id="d1"></div>
<div></div>
<div></div>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
el=_("#html div");
el.each(function(divEl){
	divEl.css("border:0");
});
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":
		i=1;		
		el.each(function(divEl){
			divEl.class("cl",true);
			divEl.style("border:1");
			divEl.content("content " + i);			
			i++;
		});
		break;
			
		case "_2":
		_("#d1").content("content 21");
		_("#d1").each(function(divEl){
			divEl.class("cl",false);
			divEl.style("padding:5;border:1");
			dc = divEl.content();
			dc += "<br>offsetHeight: " + divEl.d.offsetHeight;			
			dc += "<br>height: " + divEl.h;
			dc += ", width: " + divEl.w;
			dc += "<br>top: " + divEl.t;
			dc += ",  left: " + divEl.l;
			dc += "<br>name: " + divEl.name;
			dc += ", textContent: " + divEl.text;
			divEl.content(dc);			
		});
		break;

		case "_3":
		el.each(function(divEl){
			divEl.display("none");		
		});
		break;
			
		case "_4":		
		el.each(function(divEl){
			divEl.display("block");	
		});	
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
Example for method *each* with *callback function(Element, IndexOfElement)*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<div></div>
<div></div>
</body>
<script>
divContent = ["First Div", "Second Div"];
divStyle = ["border:1px solid #FF0000", "border:1px dotted #0000FF;margin-top:10"];
_("div").each(function(elementDiv, iDiv){
  elementDiv.content(divContent[iDiv]);
  elementDiv.style(divStyle[iDiv]);
});
</script>
</html>
```

Example "Color picker" for method *each* with *callback function(Element, IndexOfElement)*.

```html
<html>
<meta charset=utf-8>
<title>Color picker</title>
<head>
<script type="text/javascript" src="sections/CompactDOM.min.js"></script>
<style>
.bgc{
	display: inline-block;
	border: 1px solid #aaa;
	border-radius:5px;
	width: 20px;
	height: 20px;
	margin-left: 20px;
	cursor: pointer;
}
input[type="color"] {
	opacity: 0;
	display: block;
	width: 32px;
	height: 32px;
	border: none;
	cursor: pointer;
}

#color_picker{
	display: inline-block;
	padding: 5 20 5 0;
	background-color: white;
}
</style>
</head>
<body>
<div id="color_picker"></div>
<input name="selbgc" id ="selbgc" type="hidden">
</body>
<script>
_("#color_picker").create(5,{tag:"span", class:"bgc"});
colors = ["FFFFFF","F7F7F7","FFF8F7", "FFFDDE", "F9FEF6"];
_(".bgc").each( (el, ind) => {
	el.css("background-color:#"+colors[ind]);
	inp = el.create(1,{tag:"input", type:"color", value:"#"+colors[ind]});
	inp.change((e)=>{
		color = e.target.value;
		elArr = [el,_("body")];
		for(i in elArr) elArr[i].css("background-color:"+color);
		_("#selbgc").val(color);
	});
});
</script>
</html>
```
  
## 3.12 Method hide  
     
   This method is applicable to only one element. The *hide* method is intended to be used  
in conjunction with the *show* method, which will be described below.  
  
*_(selector).hide(Duration, ChangeWidth);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- Both parameters are undefined - in this case, the method sets the "*display: none*"  
   property in the style attribute.    
     
- The *Duration*  parameter is defined, the *ChangeWidth* parameter is undefined,- in this case,   
   The method determines the height of the element and uses it to create the *data-h* attribute, then sets   
   the properties  "*opacity: 0; height: 0; overflow: hidden*" in the style attribute.   
   The *Duration* parameter is used to create or stop a transition effect.   
   It can have the following values:  
     
   - number - a value greater than 0 and up to 10 is interpreted as seconds,  
     value greater than 10 interpreted as milliseconds.    
     For example, the number 4 to "4s", 100 to "100ms";  
     A value equal to 0 stop a transition effect.  
  
   - a string containing the value of property duration  
     set according to the css-rules - duration with the unit of measurement s/ms,  
     or several values separated by commas. For example, "1s","100ms","100ms,200ms";     
  
   - a string containing the duration name - "fast" is equal to "200ms", "slow" is equal to "600 ms".  
     It is allowed to specify several values separated by comma. For example, "slow","fast","slow,fast";  
   If the value of the *Duration* parameter is not 0, the *duration* property in the style  
   attribute is set or changed, otherwise the "*transition:none*" property is set.    
  
- The *Duration*  parameter is defined and the *ChangeWidth=true*, - in this case,   
   The method determines the height and width of the element and uses them to create the *data-h* and  
   *data-w* attributes, then sets  the properties  "*opacity: 0; height: 0; width: 0; overflow: hidden*"    
   in the style attribute.       
  
Example for method *hide*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
_("#s1").hide();
});
</button><br>
<button id="_2">
<div>demo 2</div>
_("#s2").hide(1);			
});<br> 
</button><br>
<button id="_3">
<div>demo 3</div>
_("#s3").hide(400,true);
}); 
</button><br>
<button id="_4">
<div>demo 4</div>
_("#s4").hide("slow");
}); 
</button><br>
<div id="html">
<span id="s1"><p>demo 1</p></span>
<span id="s2"><p>demo 2</p></span>
<span id="s3"><p>demo 3</p></span>
<span id="s4"><p>demo 4</p></span>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css,sections/css/show.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":
		_("#s1").hide();
		break;
			
		case "_2":		
		_("#s2").hide(1);
		break;

		case "_3":		
		_("#s3").hide(400,true);
		break;
			
		case "_4":		
		_("#s4").hide("slow");
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.13 Method ishide  
     
   This method is applicable to only one element. The *ishide* method allows you to check  
for the presence of the properties "opacity:0", "display:none" or "visibility:hidden" in the style attribute.  
  
*Result  = _(selector).ishide();*  
if one of the above properties is set method returns Result=true,  
otherwise it returns Result=false.  
  
Example for method *ishide*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
<style>
#html span{
border:1px solid blue;
border-radius:3px;
background-color:violet;
width:100px;
padding:40 0 40 0;
display:table-cell;
text-align:center;
float:left;
color:white;
}
</style>
</head>
<body>
<button id="_1">
<div>demo 1</div>
s1=_("#s1");<br>
s1.css("opacity:0")<br>
alert("s1 ishide: " + s1.ishide());
</button><br>
<button id="_2">
<div>demo 2</div>
s2=_("#s2");<br>
s2.css("display:none");<br>
alert("s2 ishide: " + s2.ishide());<br> 
</button><br>
<button id="_3">
<div>demo 3</div>
s3=_("#s3");<br>
s3.css("visibility:hidden");<br>
alert("s3 ishide: " + s3.ishide());<br>		
</button><br>
<button id="_4">
<div>demo 4</div>
s4=_("#s4");<br>
alert("s4 ishide: " + s4.ishide());
</button><br>
<div id="html">
<span id="s1">demo 1</span>
<span id="s2">demo 2</span>
<span id="s3">demo 3</span>
<span id="s4">demo 4</span>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":
		s1=_("#s1");
		s1.css("opacity:0")
		alert("s1 ishide: " + s1.ishide());
		break;
			
		case "_2":
		s2=_("#s2");
		s2.css("display:none")
		alert("s2 ishide: " + s2.ishide());
		break;

		case "_3":	
		s3=_("#s3");
		s3.css("visibility:hidden")
		alert("s3 ishide: " + s3.ishide());		
		break;
			
		case "_4":
		s4=_("#s4");
		alert("s4 ishide: " + s4.ishide());
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.14 Method link  
     
   This method allows one or more link elements to be created within the parent element  
defined by the selector. If the selector is undefined, then the *document.head* selector is applied.  
*_(selector).link(Parameter1, Parameter2);*  
or  
*__.link(Parameter1, Parameter2);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- The *Parameter1* is defined as *string*, the *Parameter2* is undefined - in this case,  
   the *Parameter1* must contain the value of the href attribute. It is allowed to specify several *href* values   
   on one string, separating them with a comma.  
   In this case, the method will create one or more link elements with  the attributes *href = "example.css"*,  
   *rel = "stylesheet"* and *type = "text/css"*.  
For example:

```html
<html>
<script>
__.link("../css/modal.css,../css/button_to_up.css");
</script>
<!-- will be created: -->
<link href="../css/modal.css" rel="stylesheet" type="text/css">
<link href="../css/button_to_up.css" rel="stylesheet" type="text/css">
</html>
```
     
  
- The *Parameter1* is defined as *string*, the *Parameter2* is *boolean false* - in this case,   
   one or more *link* elements containing the *href* attribute, the values of which match those specified in the   
   *Parameter1*, will be removed.  
For example:

```html
<html>
<script>
__.link("../css/modal.css,../css/button_to_up.css", false);	
/*
The two elements with href:"
../css/modal.css,
../css/button_to_up.css" will be removed. 
*/
</script>```
     
  
- The *Parameter1* is defined as *object*, the *Parameter2* is undefined - in this case,   
   one *link* element will be created, the attributes of which will be determined by the object properties.     
For example:

```html
<html>
<script>
__.link(
{
rel:'shortcut icon',
type:'image/x-icon',
href:'iconB32.ico'
});
</script>		
<!-- will be created: --> 
<link rel="shortcut icon" type="image/x-icon" href="iconB32.ico">
</html>
```
     
Example for method *link*.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
hr = "../css/modal.css,";<br>
hr += "../css/button_to_up.css,";<br>
hr += "iconB32.ico";<br>
__.link(hr,false);<br>	
hr = "../css/modal.css,";<br>
hr += "../css/button_to_up.css";<br>
__.link(hr);
</button><br>
<button id="_2">
<div>demo 2</div>
hr = "../css/modal.css,";<br>
hr += "../css/button_to_up.css,";<br>
hr += "iconB32.ico";<br>	
__.link(hr,false); 
</button><br>
<button id="_3">
<div>demo 3</div>
hr = "../css/modal.css,";<br>
hr += "../css/button_to_up.css,";<br>
hr += "iconB32.ico";<br>
__.link(hr,false);<br>	
__.link(<br>
{<br>
 rel:'shortcut icon',<br>
 type:'image/x-icon',<br>
 href:'iconB32.ico'
});	
</button><br>
<button id="_4">
<div>demo 4</div>
__.link("iconB32.ico",false);	
</button><br>
<div id="html">
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":		
		hr = "../css/modal.css,";
		hr += "../css/button_to_up.css,";
		hr += "iconB32.ico";
		__.link(hr,false);	
		hr = "../css/modal.css,";
		hr += "../css/button_to_up.css";
		__.link(hr);
		break;
			
		case "_2":
		hr = "../css/modal.css,";
		hr += "../css/button_to_up.css,";
		hr += "iconB32.ico";	
		__.link(hr,false);	
		break;
			
		case "_3":
		hr = "../css/modal.css,";
		hr += "../css/button_to_up.css,";
		hr += "iconB32.ico";
		__.link(hr,false);	
		__.link(
		{
		 rel:'shortcut icon',
		 type:'image/x-icon',
		 href:'iconB32.ico'
		});	
		break;
			
		case "_4":
		__.link("iconB32.ico",false);	
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = _("head").content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);
	contT.scroll("down");	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.15 Method lock  
     
   This method allows the disabled and readOnly properties to be set on only one element.  
*_(selector).lock(Parameter1, Parameter2);*  
  
- The *Parameter1* can be defined as *number* 1 or as *string* - "*disabled*".     
- The *Parameter1* can be defined as *number* 2 or as *string* - "*readOnly*" or "*readonly*".  
- The *Parameter2* can be defined as *number* 1 or as *boolean* - *true*.  
- The *Parameter2* can be defined as *number* 0 or as *boolean* - *false*.  
- The *Parameter2* may be undefined. In this case, the method returns the value   
   of the property defined in *Parameter1*.  
  
Example 1. Method *lock* with string parameters.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
sel.lock("disabled",true);<br>
alert(msgS + sel.lock("disabled"));	
</button><br>
<button id="_2">
<div>demo 2</div>
sel.lock("disabled", false);<br>
alert(msgS + sel.lock("disabled"));	 
</button><br>
<button id="_3">
<div>demo 3</div>
it.lock("readonly", true);<br>
alert(msgI + it.lock("readonly"));
</button><br>
<button id="_4">
<div>demo 4</div>
it.lock("readOnly", false);<br>
alert(msgI + it.lock("readonly"));
</button><br>
<div id="html">
<p>
<input id="it" type="text" value="Demo lock method">
<select id="sel">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
</p>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
it = _("#it");
sel = _("#sel");
msgS = "disabled property of select element: ";
msgI = "readOnly property of input element: ";
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":				
		sel.lock("disabled",true);
		alert(msgS + sel.lock("disabled"));	
		break;
			
		case "_2":
		sel.lock("disabled",false);
		alert(msgS + sel.lock("disabled"));	
		break;
			
		case "_3":		
		it.lock("readOnly",true);
		alert(msgI + it.lock("readonly"));
		break;
			
		case "_4":
		it.lock("readOnly",false);
		alert(msgI + it.lock("readonly"));	
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
Example 2. Method *lock* with number parameters setting.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>	
<button id="_1">
<div>demo 1</div>
/*<br>
sel.lock("disabled",true);<br>
alert(msgS + sel.lock("disabled"));<br>
Number parameter setting<br> 	
*/<br>
sel.lock(1,1);<br>
alert(msgS + sel.lock(1));	
</button><br>
<button id="_2">
<div>demo 2</div>
/*<br>
sel.lock("disabled",false);<br>
alert(msgS + sel.lock("disabled"));<br>
Number parameter setting<br>	 	
*/<br>	
sel.lock(1,0);<br>	
alert(msgS + sel.lock(1));<br>		 
</button><br>
<button id="_3">
<div>demo 3</div>
/*<br>
it.lock("readOnly", true);<br>
alert(msgI + it.lock("readOnly"));<br>
Number parameter setting<br> 	
*/<br>
it.lock(2, 2);<br>
alert(msgI + it.lock(2));
</button><br>
<button id="_4">
<div>demo 4</div><br>
/*<br>
it.lock("readOnly", false);<br>
alert(msgI + it.lock("readOnly"));<br>
Number parameter setting<br> 	
*/<br>
it.lock(2, 0);<br>
alert(msgI + it.lock(2));
</button><br>
<div id="html">
<p>
<input id="it" type="text" value="Demo lock method">
<select id="sel">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
</p>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
it = _("#it");
sel = _("#sel");
msgS = "disabled property of select element: ";
msgI = "readOnly property of input element: ";
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":
		sel.lock(1,1);
		alert(msgS + sel.lock(1));	
		break;
			
		case "_2":
		sel.lock(1,0);
		alert(msgS + sel.lock(1));	
		break;
			
		case "_3":		
		it.lock(2,1);
		alert(msgI + it.lock(2));
		break;
			
		case "_4":
		it.lock(2,0);
		alert(msgI + it.lock(2));	
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.16 Method modal  
     
   The *modal* method allows to create several elements for a modal window.  
*_(selector).modal(Content);*  
The selector should define the id of the parent div element, defaults to *#modal*.  
To apply the method, need to connect *modal.css* stylesheet. See below *CSS for modal method*.  
  
The functionality of the method depends on the specified parameter. The following cases are allowed:   
- The parameter *Content* is undefined  - in this case, all necessary elements of the modal  
   window will be added to the html body. For each selector, the method should be applied only once.    
For example:  


```html
<html>
<head>
<script>
__.link("css/modal.css");
__.modal();
</script>
<!-- predefinend head content  -->
<!-- will be created:-->
<link href="css/modal.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- predefinend body content  -->
<!-- will be created: -->
<div id="modal" class="modal" style="opacity: 0;
 transition-property: opacity;
 transition-duration: 600ms;
 transition-timing-function: cubic-bezier(0.02, 0.01, 0.47, 1);">
<div class="modal_close">×</div>
<div id="modal_content" class="modal_content"></div>
</div>
<div id="modal_gray_layer" class="modal_gray_layer"></div>
</body>
</html>
```

  
- The parameter *Content* is *string*  - in this case, the method sets the content  
   of the modal window and opens it. For example:

   *_.modal("Your message has been successfully sent")*

- The parameter *Content* is number - in this case, the method closes the modal window.
	The parameter specifies the time in seconds after which the modal will be closed.
  To close the modal window, the *CloseM* function is defined in the method.
  This function can be called in any event handler method. If the function parameter is not defined in the
  *click* method, then the <i>CloseM</i> function will be called by default. For example:

   *_.modal(0)* -  closing  immediately

   *_.modal(5)* - closing after 5 seconds

Example for *modal* method  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<script>
start= function(){
__.link("sections/css/content.css,css/modal.css");
cont = _("#cont");
contT = _("#contT");
html = _("body");
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	if(_("#modal").ElL==0 && __.ins("(2|3|4)",this.id))
	{
	  alert("First you need to create a modal window." + 
	  "\nPlease click the demo 1 button.");
	  return;
	}
	switch(this.id)
	{		
		case "_1":				
		__.modal();
		break;
			
		case "_2":		
		__.modal("Hello!");
		break;

		case "_3":
		content = "Do you really want to continue?<br>";
		content += "<button class='YN'>Yes</button>";
		content += "<button class='YN'>No</button>";
		__.modal(content);
		_(".YN").click((e)=>{
		bContent = _(e.target).content();
		if(__.ins("No", bContent))
			__.modal(0);
		else
			alert("There should be a click event handler\n"
			+ " for the 'Yes' button here.");
		});
		break;
	}
	showContent();
}
showContent=function(){
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);
	contT.scroll("down");
};
_("button").click(EventHandlerFunction);
showContent();
}
__.ready(start);
</script>
</head>
<body>
<button id="_1">
<div>demo 1</div>
__.modal();
</button><br>
<button id="_2">
<div>demo 2</div>
__.modal("Hello!");
</button><br>

<button id="_3">
<div>demo 3</div>
content = "Do you really want to continue?";<br>
...........<br>
...........<br>
__.modal(content);<br>
});
</button><br>

<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
</html>
```
  
## 3.17 Method position  
     
   The method allows you to set the position of the element in the center horizontally  
and/or vertically and get the dimensions of the element and its position - top, left, right  
and bottom. This method is applicable to only one element.  
*_(selector).position(Parametr1,Parametr);*  
or  
*Result  = _(selector).position();*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
-  The *Parameter1* can have the following values: "*center*" - sets horizontal and vertical  
positions, "*center-x*" - only horizontal position and "*center-y*" - only vertical positions.  
The *Predefined variables*: *_pc*, *_pcx* and *_pcy* are defined to set these values.  
For example:  
*_(selector).position("center");*  
or  
*_(selector).position(_pc);*  
  
-  *Parameter2* can be *undefined* or may contain a *string - CSS properties* that  
must be applied after setting the position of the element in accordance with the values of the   
parameter *Parameter1*.  
For example:  
*_(selector).position("center","margin-left:30px");*  
or  
*_(selector).position(_pc, "margin-left:30px" );*  
  
-  If both parameters are not specified, the method returns an object with the following  
properties: *width*, *height*, *top*, *left*, *right* and *bottom*.     
For example:  
*Result = _(selector).position();*  
  
Example for method *position*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
div.position("center");
</button><br>
<button id="_2">
div.position("center-x");
</button><br>
<button id="_3">
div.position("center-y");	
</button><br>
<button id="_4">
div.position("center","margin-left:-200");
</button><br>
<div id="d_1"><p></p></div>
<div id="d_2"><p></p></div>
<div id="d_3"><p></p></div>
<div id="d_4"><p></p></div>
<div class="zero"><p></p></div>
<div  id="pos" class="rb"></div>
</body>
<script>
__.link("sections/css/content.css,sections/css/position.css");
cont = _("#cont");
contT = _("#contT");
html = _("body");
hideDiv = function(idd){	
 _("div[id^='d']").each(function(el)
	{
	  if(idd == el.d.id)
		el.css("display");
	  else
		el.hide();	
	}
 );
}
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");  
	id=this.id;
	idd="d" + id;	
	div =_("#"+idd);
	divP =_("#"+ idd + " > p");
	switch(id)
	{		
		case "_1":
		hideDiv(idd);
		p = "center";
		divP.content(p);
		div.position(p);
		break;
			
		case "_2":
		hideDiv(idd);
		p = "center-x";
		divP.content(p);
		div.position(p);		
		break;

		case "_3":
		hideDiv(idd);
		p = "center-y";
		divP.content(p);
		div.position(p);	
		break;
			
		case "_4":		
		hideDiv(idd);
		p1 = "center";
		p2 = "margin-left:-200";		
		divP.content(p1 + "<br>&<br>" + p2);		
		div.position(p1, p2);		 
		break;		
	}
	showPosition(div);
}
showPosition=function(div){	
	pos=div.position();	
	cont = "pos = div.position()<br>";
	cont += "pos.top="+pos.top+"<br>";
	cont += "pos.left="+pos.left+"<br>";	
	_("#pos").content(cont);		
};
_("button").click(EventHandlerFunction);
showPosition(_("#d_1"));
</script>
</html>
```

  
  
## 3.18 Method prop  
     
   This method allows you to manipulate the proprties of elements.   
*_(selector).prop( Proprties, Value);*  
or  
*_(selector).prop( Proprties, Value);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- *both parameters* are defined as *strings* -  in this case, the Proprties of   
   the element whose name is determined by the first parameter is assigned the value   
   specified by the second parameter.   
   For example Proprties object:  
   *_selector.prop("value", 1);*  
     
- Only parameter *Proprties* is defined as *string* -  
    in this case, the method returns the value of the property, the name of which is defined   
    by the first parameter;  
   For example Proprties object:  
   *_selector.prop("value");*  
     
- Only parameter *Proprties* is defined as *object* - *{ attrName : attrValue ,..., attrName : attrValue }*  
   In this case, the method sets several Proprtiess. The pseudo-Proprties "*rem*" is allowed,   
   the value of which specifies the name of the Proprties to be removed.  
   It is allowed to specify the names of several Proprtiess separated by commas.  
   For example Proprties object:  

```
_selector.prop(
{
	rem : "readonly,disabled",
	value : 1
}
);
```
  
     
Example for prop method.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
sel.prop("disabled",true);<br>
alert(msgS + sel.prop("disabled"));	
</button><br>
<button id="_2">
<div>demo 2</div>
sel.prop("disabled", false);<br>
alert(msgS + sel.prop("disabled"));	 
</button><br>
<button id="_3">
<div>demo 3</div>
it.prop("readonly", true);<br>
alert(msgI + it.prop("readonly"));
</button><br>
<button id="_4">
<div>demo 4</div>
it.prop("readOnly", false);<br>
alert(msgI + it.prop("readonly"));
</button><br>
<div id="html">
<p>
<input id="it" type="text" value="Demo prop method">
<select id="sel">
<option>1</option>
<option>2</option>
<option>3</option>
</select>
</p>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
it = _("#it");
sel = _("#sel");
msgS = "disabled property of select element: ";
msgI = "readOnly property of input element: ";
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":				
		sel.prop("disabled",true);
		alert(msgS + sel.prop("disabled"));	
		break;
			
		case "_2":
		sel.prop("disabled",false);
		alert(msgS + sel.prop("disabled"));	
		break;
			
		case "_3":		
		it.prop("readOnly",true);
		alert(msgI + it.prop("readonly"));
		break;
			
		case "_4":
		it.prop("readOnly",false);
		alert(msgI + it.prop("readonly"));	
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.19 Method reload  
     
   This method reloads the current document. The method is applied without a selector.   
*__.reload();*  
  
Example for method *reload*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
Reload page
</button><br>
</body>
<script>
time = new Date();
document.write("<hr>Now: " + time.toTimeString().substr(0,8));
__.link("sections/css/content.css");
//button events handler	
EventHandlerFunction = function(){ 				
  __.reload();
}	
_("button").click(EventHandlerFunction);
</script>
</html>
```

  
  
## 3.20 Method script  
     
   This method allows one or more link elements to be created within the parent element  
defined by the selector. If the selector is undefined, then the *document.head* selector is applied.  
*_(selector).script(Parameter1, Parameter2);*  
or  
*__.script(Parameter1, Parameter2);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
  
- The *Parameter1* is defined as *string*, the *Parameter2* is undefined - in this case,  
   the *Parameter1* must contain the value of the href attribute. It is allowed to specify several *href* values   
   on one string, separating them with a comma.  
   In this case, the method will create one or more link elements with  the attributes *src = "example.js"*  
   and *type = "text/javascript"*.  
For example:  


```html
<html>
<script>
__.script("../js/example1.js,../js/example2.js");
</script>
<!-- will be created: -->
<script type="text/javascript" src="../js/example1.js"></script>
<script type="text/javascript" src="../js/example2.js"></script>
</html>
```

  
     
  
  
- The *Parameter1* is defined as *string*, the *Parameter2* is *boolean false* - in this case,   
   one or more *script* elements containing the *href* attribute, the values of which match those specified in the   
   *Parameter1*, will be removed.  
For example:  
  


```js<script>
__.script("../js/example1.js,../js/example1.js", false);	
/*
The two elements with src:"
../js/example1.js
../js/example2.js 
will be removed  
*/
</script>
```

  
  
  
     
Example for method *script*.  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
hr = "../js/example1.js,";<br>
hr += "../js/example2.js";<br>
__.script(hr,false);<br>
__.script(hr);
</button><br>
<button id="_2">
<div>demo 2</div>
hr = "../js/example1.js,";<br>
hr += "../js/example2.js";<br>	
__.script(hr,false); 
</button><br>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":		
		hr = "../js/example1.js,";
		hr += "../js/example2.js";		
		__.script(hr,false);		
		__.script(hr);
		break;
			
		case "_2":
		hr = "../js/example1.js,";
		hr += "../js/example2.js";		
		__.script(hr,false);	
		break;
	}
	showContent();
}
showContent=function(){	
	cont = _("head").content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);
	contT.scroll("down");
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.21 Method selected  
     
   This method is applicable only to the *select* element. The method allows   
to set the *selectedIndex* property, the value of which is determined by the parameter,  
or, if the parameter is not defined, to get the value of the  *selectedIndex* property.  
*_(selector).selected(selectedIndex);*  
or  
*selectedIndex = _(selector).selected();*  
The example below will use the *lock* method.  
Example for method *selected*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<p>
<select id="_1">
<option>What would you like?</option>
<option>Fruits</option>
<option>Vegetables</option>
</select>

<select id="_2">
<option>Fruits</option>
<option>Apple</option>
<option>Orange</option>
<option>Grape</option>
</select>

<select id="_3">
<option>Vegetables</option>
<option>Carrot</option>
<option>Potatoes</option>
<option>Cabbage</option>
</select>
</p>
</body>
<script>
__.link("sections/css/content.css");
//buttons events handler	
EventHandlerFunction = function(){
  selInd =_(this).selected();
  if(selInd > 0)
  {
	selIndA = selInd + 1;
	selIndD = selIndA == 2?3:2;	
	selA = _("#_" + selIndA);
	selD = _("#_" + selIndD);
	selA.lock(1,0);
	selA.selected(1);
	selD.lock(1,1);
	selD.selected(0);
  }
  else
    Disabled23();
}
_("#_1").change(EventHandlerFunction);

function Disabled23(){
 [_("#_2"), _("#_3")].forEach(function(sel)
  {
    sel.lock(1,1);
    sel.selected(0);
  }  
 );
};
Disabled23();
</script>
</html>
```

  
  
## 3.22 Method show  
     
   The *show* method is intended to be applied in conjunction with the *hide*
method described above. This method is applicable to only one element.   
  
*_(selector).hide(Duration);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- Both parameters are undefined - in this case, the method remove the "*display*"  
   property in the style attribute.    
     
- The *Duration*  parameter is defined- in this case,   
   The method defines the variables H  and W (height and width of the element) from the   
   *data-h* and *data-w* attributes created by the *hide* method.  
   If both attributes are given, then the method sets,properties   
   *opacity: 1; height: H; width: W; overflow: auto* in the style attribute.  
   If only the *data-h* attribute is specified, then the method sets, properties   
   *opacity: 1; height: H; overflow: auto*  in the style attribute.  
   The method also creates transition properties. If both attributes are specified, then   
   *opacity, height, width*, otherwise *opacity, height*      
     
   The *Duration* parameter is used to create or stop a transition effect.   
   It can have the following values:  
     
   - number - a value greater than 0 and up to 10 is interpreted as seconds,   
     value greater than 10 interpreted as milliseconds.    
     For example, the number 4 to "4s", 100 to "100ms";  
     A value equal to 0 stop a transition effect.      
   - a string containing the value of property duration  
     set according to the css-rules - duration with the unit of measurement s/ms,  
     or several values separated by commas. For example, "1s","100ms","100ms,200ms";     
   - a string containing the duration name - "fast" is equal to "200ms", "slow" is equal to "600 ms".  
     It is allowed to specify several values separated by comma. For example, "slow","fast","slow,fast";  
   If the value of the *Duration* parameter is not 0, the *duration* property in the style  
   attribute is set or changed, otherwise the "*transition:none*" property is set.   
  
Example for methods *show* and *hide*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
if(_("#s1").ishide())<br>
   _("#s1").show();<br>
else<br>
   _("#s1").hide();<br>
</button><br>
<button id="_2">
<div>demo 2</div>
if(_("#s2").ishide())<br>
   _("#s2").show(1);<br>
else<br>
   _("#s2").hide(1);<br>
</button><br>
<button id="_3">
<div>demo 3</div>
_if(_("#s3").ishide())<br>
   _("#s3").show(900);<br>
else	
   _("#s3").hide(900,true);<br>
</button><br>
<button id="_4">
<div>demo 4</div>
if(_("#s4").ishide())<br>
   _("#s4").show("slow");<br>
else<br>	
   _("#s4").hide("slow");<br> 
</button><br>
<div id="html">
<span id="s1"><p>demo 1</p></span>
<span id="s2"><p>demo 2</p></span>
<span id="s3"><p>demo 3</p></span>
<span id="s4"><p>demo 4</p></span>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
__.link("sections/css/content.css,sections/css/show.css");
cont = _("#cont");
contT = _("#contT");
html = _("#html");
//buttons events handler	
EventHandlerFunction = function(){
  _(this).css("height:30px");	
	switch(this.id)
	{		
		case "_1":
		if(_("#s1").ishide())
		   _("#s1").show();
		else
		   _("#s1").hide();
		break;
			
		case "_2":
		if(_("#s2").ishide())
		   _("#s2").show(1);
		else
		   _("#s2").hide(1);
		break;

		case "_3":
		if(_("#s3").ishide())
		   _("#s3").show(900);
		else	
		   _("#s3").hide(900,true);
		break;
			
		case "_4":
		if(_("#s4").ishide())
		   _("#s4").show("slow");
		else
		   _("#s4").hide("slow");
		break;		
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.23 Method style  
     
   This method is useful for manipulating the style attribute of elements. The method alias *style* is *css*.    
*_(selector).css(Value);*  
or  
*_(selector).style(Value);*  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:   
- The *Value* parameter is defined as *strings* -  in this case, the method changes   
   the value of the attribute style element. The parameter must contain a string that corresponds to the  
   rules of the *CSS* language (Cascading Style Sheets).  
   The method checks if the specified properties match the properties in the element style attribute.  
   If any property match, the property value in the style attribute will be changed to the property  
   value specified in the method parameter.   
   If any property specified in the method parameter is set without a value, then the corresponding   
   property in the style attribute will be removed.   
  
- The *Value* parameter is defined as *boolean false* -  
   in this case, the method completely removes the element's style attribute.   
     
- The *Value* parameter is undefined - in this case, the method returns a string containing  
   the value of the element's style attribute.   
  
Example for *css* method.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
alert( _("#html div").css() )
</button><br>
<button id="_2">
<div>demo 2</div>
_("#html div").css("color;font-weight")
</button><br>
<button id="_3">
<div>demo 3</div>
_("#html div").css("color:violet;font-weight:bold")
</button><br>
<button id="_4">
<div>demo 4</div>
_("#html div").css("border:1px solid blue;<br>
font-weight:bold;<br>
border-radius:3px;<br>
padding:5px;<br>
color:blue")
</button><br>
<div id="html">
<div style="
border:1px solid blue;
font-weight:bold;
border-radius:3px;
padding:5px;
color:blue">
The parameter must contain a string that corresponds to the
rules of the CSS language (Cascading Style Sheets).
</div>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
el=_("#html div");
style=el.css();
//buttons events handler
EventHandlerFunction = function(){
_(this).css("height:30px");
	switch(this.id)
	{
		case "_1":
		alert(el.css());
		break;

		case "_2":
		el.css("color;font-weight")
		break;

		case "_3":
		el.css("color:violet;font-weight:bold")
		break;

		case "_4":
		el.css(style);
		break;			
	}
	showContent();
}
showContent=function(){	
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);	
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
     
Example for *style* method.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<link rel="stylesheet" href="sections/css/content.css">
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
alert( _("#html div").style() )
</button><br>
<button id="_2">
<div>demo 2</div>
_("#html div").style("color;font-weight")
</button><br>
<button id="_3">
<div>demo 3</div>
_("#html div").style("color:violet;font-weight:bold")
</button><br>
<button id="_4">
<div>demo 4</div>
_("#html div").style("border:1px solid blue;<br>
font-weight:bold;<br>
border-radius:3px;<br>
padding:5px;<br>
color:blue")
</button><br>
<div id="html">
<div style="
border:1px solid blue;
font-weight:bold;
border-radius:3px;
padding:5px;
color:blue">
The parameter must contain a string that corresponds to the
rules of the CSS language (Cascading Style Sheets).
</div>
</div>
<div class="cont rb">
<textarea id="contT"></textarea>
</div>
</body>
<script>
cont = _("#cont");
contT = _("#contT");
html = _("#html");
el=_("#html div");
style=el.style();
//buttons events handler
EventHandlerFunction = function(){
_(this).style("height:30px");
	switch(this.id)
	{
		case "_1":
		alert(el.style());
		break;

		case "_2":
		el.style("color;font-weight")
		break;

		case "_3":
		el.style("color:violet;font-weight:bold")
		break;

		case "_4":
		el.style(style);
		break;
	}
	showContent();
}
showContent=function(){
	cont = html.content();
	cont = __.ins("><", cont, ">\n<");
	contT.content(cont);
};
_("button").click(EventHandlerFunction);
showContent();
</script>
</html>
```

  
  
## 3.24 Method tag  
     
   This method returns the tag name of the element specified by the selector.  
*_(selector).tag();*  
  
Example for method *tag*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>Cleck me</button>
<div class="RB">Click me too</div>
</body>
<script>
__.link("sections/css/content.css,sections/css/show.css");
EventHandlerFunction = function(){ 				
  tagName =_(this).tag();
  _(this).content("The name of this tag: " + tagName);
}	
_("button").click(EventHandlerFunction);
_("div").click(EventHandlerFunction);
</script>
</html>
```

  
  
## 3.25 Method transition  
     
   This method creates or stops a transition effect. Method *transition* alias name is *animate*.  
*_(selector).transition(Properties, Duration, TimingFunction);*  
or  
*_(selector).animate(Properties, Duration, TimingFunction);*  
  
The *Properties* parameter can have the following values:   
- *"none"* - method stops the transition effect;   
- *"css property name:property value;... css property name:property value"* -  
    method adds the specified properties to the attribut style of the element and creates  
    properties for the transation effect;    
- *"transation property name,... transation property name"* -  
    method applies the specified properties to the transation effect.  
  
The *Duration* parameter can have the following values:   
- *number* - a value up to 10 is interpreted as seconds,otherwise as milliseconds.   
    For example, the number 4 to "4s", 100 to "100ms";  
- *a string containing the value of property duration*  
    set according to the css-rules - duration with the unit of measurement s/ms,  
    or several values separated by commas. For example, "1s","100ms","100ms,200ms";  
- *a string containing the duration name* - "fast" is equal to "200ms", "slow" is equal to "600 ms".  
    It is allowed to specify several values separated by comma. For example, "slow","fast","slow,fast";         
- *null* - If the duration is not specified, the default value is "600ms"  
  
The *TimingFunction* parameter can be set according to the css-rules:   
*linear, ease, ease-in, ease-out, ease-in-out, step-start, step-end, steps(int,start|end),  
cubic-bezier(n,n,n,n), initial, inherit*.   
If the parameter is not specified, then the default function is applied: *cubic-bezier(.02, .01, .47, 1)*.  
  
Here the examples will use the *css*, *ishide* and *content* methods, which will be described below.  
Example 1. Method animate for div element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<style>
div{background-color:red}
</style>
</head>
<body>
<p>
<button></button>
</p>
<div></div>
</body>
<script>
div = _("div");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
div.animate("opacity:0;width:0;height:0",3,"ease-in-out");
but.click(function(){
	if(div.ishide())
	{
		div.css("opacity:1;width:150;height:150");
		_(this).content(bth);
	}
	else
	{
		div.css("opacity:0;width:0;height:0");
		_(this).content(bts);
	}
});
</script>
</html>
```

  
     
Example 2. Method transition for div element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<style>
div{background-color:red}
</style>
</head>
<body>
<p>
<button></button>
</p>
<div></div>
</body>
<script>
div = _("div");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
div.transition("opacity:0;width:0;height:0",3,"ease-in-out");
but.click(function(){
	if(div.ishide())
	{
		div.css("opacity:1;width:150;height:150");
		_(this).content(bth);
	}	
	else
	{
		div.css("opacity:0;width:0;height:0");
		_(this).content(bts);
	}	
});
</script>
</html>
```

  
     
Example 3. Method animate with only first parameter for div element.  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
<style>
div{background-color:red}
</style>
</head>
<body>
<p>
<button></button>
</p>
<div></div>
</body>
<script>
div = _("div");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
div.animate("opacity:0;width:0;height:0");
but.click(function(){
	if(div.ishide())
	{
		div.css("opacity:1;width:150;height:150");
		_(this).content(bth);
	}	
	else
	{
		div.css("opacity:0;width:0;height:0");
		_(this).content(bts);
	}	
});
</script>
</html>
```

  
     
Example 4. Method animate for element img  


```html
<html>
<head>
<script type="text/javascript" src="CompactDOM.min.js"></script>
</head>
<body>
<p>
<button></button>
</p>
<img id="im" src="sections/21.jpg" width="250">
</body>
<script>
img = _("img");
but = _("button");
bts = "Click to show";
bth = "Click to hide";
but.content(bts);
img.animate("opacity:0",5,"ease-in-out");
but.click(function(){
	if(img.ishide())
	{
		img.css("opacity:1");
		_(this).content(bth);
	}	
	else
	{
		img.css("opacity:0");
		_(this).content(bts);
	}	
});
</script>
</html>
```

  
  
## 3.26 Method val  
     
   It is allowed to apply this method only to elements for which the value property is supported.  
The method allows you to set and get the value of the element specified by the selector.   
The *val* method alias is *value*.  
*_(selector).val(Value)*;  
or  
*_(selector).value(Value)*;  
  
For checkboxe or radio elements, the method can be applied to one or more elements (NodeList).  
In other cases, the method can be applied only to a single element . The functionality of the method   
depends on the specified selector and parameter. The following cases are allowed:   
  
- selector defines one *select* element,  - in this case, if *Value* parameter is string  
   the method compares the value of the parameter with the value of option and, if the values are equal,  
   sets the value of the selected property - true, otherwise - false.  
   If *Value* is undefined - in this case,  the method returns selected value.   
  
- selector defines one or several *checkbox*  elements. - in this case, if *Value*   
   parameter is string, the method compares the value of the parameter with the value of checkbox and,  
   if the values are equal,  sets *checked* property to *true*.  
   If *Value* is undefined, method returns strring - the value of one checked *checkbox* or an array  
   of values of several checked *checkbox* elements. If there is no checked *checkbox* ,   
   the method returns undefined.   
  
- selector defines one or several *radio button*  elements. - in this case, if *Value*  
   the parameter is a string, the method compares the parameter value with the radio button value, and,  
   if the values are equal, sets the *checked* property to *true*, otherwise to *false*.  
   If *Value* is not defined, the method returns string - the value of the checked *radio button*.  
   If the *radio button* is not checked, the method returns *undefined*.  
  
 - selector defines one *input text*  elements. - in this case, if *Value* the parameter  
   is a string, the method sets the value property of the element.  
   If *Value* is not defined, the method returns the value of the element.   
  
Example for method *val*  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>#check_bl{margin:0 0 0 40}</style>
</head>
<body>
<button id="_1">
<div>demo 1</div>
_("input[type='radio']").val("Grape")<br>
</button><br>
<button id="_2">
<div>demo 2</div>
_("#check_bl input").val("Grape")<br>
</button><br>
<button id="_3">
<div>demo 3</div>
_("input[type='text']").val("Grape")<br>
</button><br>
<button id="_4">
<div>demo 4</div>
_("#sel").val("Grape")<br>
</button><br>
<div>
<input name="radio" type="radio" checked value="Apple">Apple
<input name="radio" type="radio" value="Orange">Orange
<input name="radio" type="radio" value="Grape">Grape

<span id="check_bl">
<input type="checkbox" checked value="Apple">Apple
<input type="checkbox" value="Orange">Orange
<input type="checkbox" value="Grape">Grape
</span>
</div>
<p>
<input name="Fruits" type="text" value="Apple" autocomplete="off">
</p>
<p>
<select id="sel">
<option>Fruits</option>
<option>Apple</option>
<option>Orange</option>
<option>Grape</option>
</select>
</p>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
rb = _("input[type='radio']");
cb = _("#check_bl input");
it = _("input[type='text']");
se = _("#sel");
cont = _("#cont");
//buttons events handler
EventHandlerFunction = function(){
	switch(this.id)
	{
		case "_1":
		rb.val("Grape");
		break;

		case "_2":
		cb.val("Grape");
		break;

		case "_3":
		it.val("Grape");
		break;

		case "_4":
		se.val("Grape");
		break;
	}
	showValue();
}

_("button").click(EventHandlerFunction);
function cbrbValue(value){
if(__.a(value))
	return value.join(", ");
else
	return value;
}

showValue=function(){
	v = 'Get values of elements';
	v += '<hr>radio button: _("input[type=`radio`]").value()<br>';
	v += cbrbValue(rb.val());
	v += '<hr>checkbox: _("#check_bl input").value()<br>';
	v += cbrbValue(cb.val());
	v += '<hr>input text: _("input[type=`text`]").value()<br>'+it.val();
	v += '<hr>select: _("#sel").value()<br>'+se.val();
	cont.content(v);	
};
//sets up events handler functions
rb.change(showValue);	
cb.change(showValue);
it.change(showValue);
se.change(showValue);
showValue();
</script>
</html>
```

  
     
Example for method *value*  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>#check_bl{margin:0 0 0 40}</style>
</head>
<body>
<button id="_1">
<div>demo 1</div>
_("input[type='radio']").value("Grape")<br>
</button><br>
<button id="_2">
<div>demo 2</div>
_("#check_bl input").value("Grape")<br>
</button><br>
<button id="_3">
<div>demo 3</div>
_("input[type='text']").value("Grape")<br>
</button><br>
<button id="_4">
<div>demo 4</div>
_("#sel").value("Grape")<br>
</button><br>
<div>
<input name="radio" type="radio" checked value="Apple">Apple
<input name="radio" type="radio" value="Orange">Orange
<input name="radio" type="radio" value="Grape">Grape

<span id="check_bl">
<input type="checkbox" checked value="Apple">Apple
<input type="checkbox" value="Orange">Orange
<input type="checkbox" value="Grape">Grape
</span>
</div>
<p>
<input name="Fruits" type="text" value="Apple" autocomplete="off">
</p>
<p>
<select id="sel">
<option>Fruits</option>
<option>Apple</option>
<option>Orange</option>
<option>Grape</option>
</select>
</p>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
rb = _("input[type='radio']");
cb = _("#check_bl input");
it = _("input[type='text']");
se = _("#sel");
cont = _("#cont");
//buttons events handler
EventHandlerFunction = function(){
	switch(this.id)
	{
		case "_1":
		rb.value("Grape");
		break;

		case "_2":
		cb.value("Grape");
		break;

		case "_3":
		it.value("Grape");
		break;

		case "_4":
		se.value("Grape");
		break;
	}
	showValue();
}

_("button").click(EventHandlerFunction);
function cbrbValue(value){
if(__.a(value))
	return value.join(", ");
else
	return value;
}

showValue=function(){
	v = 'Get values of elements';
	v += '<hr>radio button: _("input[type=`radio`]").value()<br>';
	v += cbrbValue(rb.value());
	v += '<hr>checkbox: _("#check_bl input").value()<br>';
	v += cbrbValue(cb.value());
	v += '<hr>input text: _("input[type=`text`]").value()<br>'+it.value();
	v += '<hr>select: _("#sel").value()<br>'+se.value();
	cont.content(v);
};
//sets up events handler functions
rb.change(showValue);
cb.change(showValue);
it.change(showValue);
se.change(showValue);
showValue();
</script>
</html>
```

  
  
## 3.27 Method value  
     
   It is allowed to apply this method only to elements for which the value property is supported.  
The method allows you to set and get the value of the element specified by the selector.   
The *val* method alias is *value*.  
*_(selector).val(Value)*;  
or  
*_(selector).value(Value)*;  
  
For checkboxe or radio elements, the method can be applied to one or more elements (NodeList).  
In other cases, the method can be applied only to a single element . The functionality of the method   
depends on the specified selector and parameter. The following cases are allowed:   
  
- selector defines one *select* element,  - in this case, if *Value* parameter is string  
   the method compares the value of the parameter with the value of option and, if the values are equal,  
   sets the value of the selected property - true, otherwise - false.  
   If *Value* is undefined - in this case,  the method returns selected value.   
  
- selector defines one or several *checkbox*  elements. - in this case, if *Value*   
   parameter is string, the method compares the value of the parameter with the value of checkbox and,  
   if the values are equal,  sets *checked* property to *true*.  
   If *Value* is undefined, method returns strring - the value of one checked *checkbox* or an array  
   of values of several checked *checkbox* elements. If there is no checked *checkbox* ,   
   the method returns undefined.   
  
- selector defines one or several *radio button*  elements. - in this case, if *Value*  
   the parameter is a string, the method compares the parameter value with the radio button value, and,  
   if the values are equal, sets the *checked* property to *true*, otherwise to *false*.  
   If *Value* is not defined, the method returns string - the value of the checked *radio button*.  
   If the *radio button* is not checked, the method returns *undefined*.  
  
 - selector defines one *input text*  elements. - in this case, if *Value* the parameter  
   is a string, the method sets the value property of the element.  
   If *Value* is not defined, the method returns the value of the element.   
  
Example for method *val*  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>#check_bl{margin:0 0 0 40}</style>
</head>
<body>
<button id="_1">
<div>demo 1</div>
_("input[type='radio']").val("Grape")<br>
</button><br>
<button id="_2">
<div>demo 2</div>
_("#check_bl input").val("Grape")<br>
</button><br>
<button id="_3">
<div>demo 3</div>
_("input[type='text']").val("Grape")<br>
</button><br>
<button id="_4">
<div>demo 4</div>
_("#sel").val("Grape")<br>
</button><br>
<div>
<input name="radio" type="radio" checked value="Apple">Apple
<input name="radio" type="radio" value="Orange">Orange
<input name="radio" type="radio" value="Grape">Grape

<span id="check_bl">
<input type="checkbox" checked value="Apple">Apple
<input type="checkbox" value="Orange">Orange
<input type="checkbox" value="Grape">Grape
</span>
</div>
<p>
<input name="Fruits" type="text" value="Apple" autocomplete="off">
</p>
<p>
<select id="sel">
<option>Fruits</option>
<option>Apple</option>
<option>Orange</option>
<option>Grape</option>
</select>
</p>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
rb = _("input[type='radio']");
cb = _("#check_bl input");
it = _("input[type='text']");
se = _("#sel");
cont = _("#cont");
//buttons events handler
EventHandlerFunction = function(){
	switch(this.id)
	{
		case "_1":
		rb.val("Grape");
		break;

		case "_2":
		cb.val("Grape");
		break;

		case "_3":
		it.val("Grape");
		break;

		case "_4":
		se.val("Grape");
		break;
	}
	showValue();
}

_("button").click(EventHandlerFunction);
function cbrbValue(value){
if(__.a(value))
	return value.join(", ");
else
	return value;
}

showValue=function(){
	v = 'Get values of elements';
	v += '<hr>radio button: _("input[type=`radio`]").value()<br>';
	v += cbrbValue(rb.val());
	v += '<hr>checkbox: _("#check_bl input").value()<br>';
	v += cbrbValue(cb.val());
	v += '<hr>input text: _("input[type=`text`]").value()<br>'+it.val();
	v += '<hr>select: _("#sel").value()<br>'+se.val();
	cont.content(v);	
};
//sets up events handler functions
rb.change(showValue);	
cb.change(showValue);
it.change(showValue);
se.change(showValue);
showValue();
</script>
</html>
```

  
     
Example for method *value*  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>#check_bl{margin:0 0 0 40}</style>
</head>
<body>
<button id="_1">
<div>demo 1</div>
_("input[type='radio']").value("Grape")<br>
</button><br>
<button id="_2">
<div>demo 2</div>
_("#check_bl input").value("Grape")<br>
</button><br>
<button id="_3">
<div>demo 3</div>
_("input[type='text']").value("Grape")<br>
</button><br>
<button id="_4">
<div>demo 4</div>
_("#sel").value("Grape")<br>
</button><br>
<div>
<input name="radio" type="radio" checked value="Apple">Apple
<input name="radio" type="radio" value="Orange">Orange
<input name="radio" type="radio" value="Grape">Grape

<span id="check_bl">
<input type="checkbox" checked value="Apple">Apple
<input type="checkbox" value="Orange">Orange
<input type="checkbox" value="Grape">Grape
</span>
</div>
<p>
<input name="Fruits" type="text" value="Apple" autocomplete="off">
</p>
<p>
<select id="sel">
<option>Fruits</option>
<option>Apple</option>
<option>Orange</option>
<option>Grape</option>
</select>
</p>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
rb = _("input[type='radio']");
cb = _("#check_bl input");
it = _("input[type='text']");
se = _("#sel");
cont = _("#cont");
//buttons events handler
EventHandlerFunction = function(){
	switch(this.id)
	{
		case "_1":
		rb.value("Grape");
		break;

		case "_2":
		cb.value("Grape");
		break;

		case "_3":
		it.value("Grape");
		break;

		case "_4":
		se.value("Grape");
		break;
	}
	showValue();
}

_("button").click(EventHandlerFunction);
function cbrbValue(value){
if(__.a(value))
	return value.join(", ");
else
	return value;
}

showValue=function(){
	v = 'Get values of elements';
	v += '<hr>radio button: _("input[type=`radio`]").value()<br>';
	v += cbrbValue(rb.value());
	v += '<hr>checkbox: _("#check_bl input").value()<br>';
	v += cbrbValue(cb.value());
	v += '<hr>input text: _("input[type=`text`]").value()<br>'+it.value();
	v += '<hr>select: _("#sel").value()<br>'+se.value();
	cont.content(v);
};
//sets up events handler functions
rb.change(showValue);
cb.change(showValue);
it.change(showValue);
se.change(showValue);
showValue();
</script>
</html>
```

  
  
### 3.28 send method  
## 3.28.1 About the send method  
     
   This method allows you to send html requests and return the received data.  
In the examples, the *url* method will be used to determine the current *url address* and  
*GET parameters* , which will be described below.  
*_(selector).send(Parameter);*  
or  
*__.send(Parameter);*  
  
The selector can be undefined in the following cases:  
-  there is only one form in the document;  
-  *Parameter* is defined as *string*;  
-  *Parameter* is defined as an *object* and the *form* element will not be applied;  
In other cases, the selector must identify the *form* element to which the method is applied.  
  
The functionality of the method depends on the specified parameters. The following cases are allowed:  
- The *Parameter* is defined as *string*, - in this case, - in this it must contain  
the value of the *href* property to apply the js method *window.location.href*  
*__.(href string)*  
In the examples, the *url* method will be used to determine the current *url address* and  
*GET parameters* , which will be described below.  
  
- The *Parameter* is undefined, - in this case, - the js *submit* method will be applied  
to the *form* element. Previously, all the necessary attributes of the *form* element must be defined  
either in the html *form* tag or with the *attr* method.  
*__.send();*  
or  
*_(selector).send();*  
  
- The *Parameter* is defined as *object*, - in this case,  
the method sends data over *XMLHttpRequest*. The following *properties* are allowed:  
- url;  
- method;  
- dataType;  
- data;  
- responseType;  
- header;  
- mime;  
- func;  
- to;  
- debug;  
  
A. *url* property - null or string.  
If the property is not defined(null), then the request url is set by the value of  
the action attribute of the form tag.  
  
B. *method* property - null or string.  
The following *value* are allowed:  
- "post";  
- "put";  
- "get";  
- "delete";  
If the property is not defined(null), then the request method is set by the value of the "method"  
attribute of the form tag.  
If the value of the property "method" and the value of the attribute "method" of the form tag are  
not defined, then by default, the value "get" is set.  
  
C. *dataType* property  - null or string.  
The following *value* are allowed:  
- "formData";  
- "json";  
- "blob";  
- "arraybufer";  
- "document";  
- "text";  
If this property is not defined, then the property dataType:"formData" is set by default.  
  
D. *data* property.  
  
D.1 For *method* property value 'post' or 'put' is defined.  
  
D.1.1 For *dataType* property value '*formData*' is defined.  
  
D.1.1.1 *data* property - null.  
If the property is not defined, then the form data is selected from the form defined in the method selector.  
If there is only one form in the document, it is allowed to omit the selector. For example:  
  
D.1.1.2 *data* property - object.  
  
If the property is defined, then the form data is padded with the elements defined in that object.  
Object properties define the name of the form element. The value of the property determines the value  
 of the element. For example:  
*data:{  
   "fname":"tom",  
   "lname":"sojer",  
 }*  
For the *file* element, the value of property  must be defined as an array. For example:  
  *data:{ img1:[myFileInput.files[0], 'img1.jpg'],... }*  
  
D.1.2 For *dataType* property value '*json*' is defined.  
D.1.2.1 *data* property - json-string.  
In this case, the json-string is converted to an json-object before the *XMLHttpRequest* is sent.  
For example:  
*data:'{ "email": "hello@user.com", "response": { "name": "Tester" }}'*  
  
D.1.2.2 *data* property - json-object.  
In this case, the data is not converted before the *XMLHttpRequest* is sent.  
For example:  
*data:{  
"email": "hello@user.com",  
"response":{ "name": "Tester" }  
}*  
  
D.1.3 For *dataType* property value '*blob*' is defined.  
D.1.3.1 *data* property - array.  
*data:[originalData, MIMEtype]*  
In this case, the original data is converted to a blob-object according to the given  
MIMEtype before the *XMLHttpRequest* is sent.  
For example:  
*data:['Hello World!', 'text/plain']*  
  
D.1.3.2 *data* property - blob-obiect.  
In this case, the data is not converted before the *XMLHttpRequest* is sent.  
For example:  
*data:MyBlob*  
  
D.1.4 For *dataType* property value '*arraybufer*' is defined.  
D.1.4.1 *data* property - array.  
In this case, the original data is converted to a arraybufer-object according to the given  
ArrayType before the *XMLHttpRequest* is sent.  
  
*data:[originalData]*  
or  
*data:[originalData, ArrayType]*  
originalData:  
- Single number;  
- Numeric array;  
- String  
  
ArrayType([JavaScript typed arrays](https://developer.mozilla.org/de/docs/Web/JavaScript/Typed_arrays)):  
- null.  
In this case, the ArrayType is determined by default based on the number of bytes required  
for proper packing. One number, taking into account the sign and type of number (integer or  
floating point). For string data, the default is one byte per character.  

```
The send method defines the _ArrayType variable, which can be used to get the original data
from the arraybufer-object.
```
  
For example:  
  
Single number:  
*data:[150]*  
  
Numeric array:  
*MyArray = [1296.50, -1345.18, 180];  
data:[MyArray]*  
  
String 1 byte per character:  
*data:['Hello World!']*  
Unicode string 2 byte per character:  
*data:['你好世界！', 2]*  
  
- number - 1, 2, 4  
Specifies the number of bytes required to properly pack each character from the source string.  
1 will be interpreted as Uint8Array, 2 as Uint16Array, 4 as Uint32Array.  
For example, unicode string 2 byte per character:  
*data:['你好世界！', 2]*  
  
- function - Uint8Array, Uint16Array, Uint32Array, etc.  
For example, unicode string 2 byte per character:  
*data:['你好世界！', Uint16Array]*  
  
D.1.4.2 *data* property - arraybufer-obiect.  
In this case, the data is not packed before the *XMLHttpRequest* is sent.  
For example:  
*data:MyArrayBufer*  
  
D.1.5 For *dataType* property value '*document*' is defined.  
*data* property - HTML/XMLdocument-obiect.  
In this case, the data is not converted before the *XMLHttpRequest* is sent.  
For example:  
*data:MyXMLdocument*  
  
D.1.6 For *dataType* property value '*text*' is defined.  
*data* property - string.  
In this case, the data is not converted before the *XMLHttpRequest* is sent.  
For example:  
*data:'Hello World!'*  
  
D.2 For *method* property value '*get*' or '*delete*' is defined.  
*data* property - string or null.  
If value of the *date* property is defined, then the value of the "date" property complements  
the value of "url" property. In this case, the coincidence of the names "get" of the parameters "url"  
and "date" is checked. If matching names are found in "url", the "get" value of the "url" will be  
replaced with the value of the corresponding parameter from the "date" property.  
For example:  
*{... url:"?a=1&b=2", data:"a=5&d=3", ...}*  
In this case, wiill be url of XMLHttpRequest set: *"?a=5&b=2&d=3"*  
If the *sid* variable is defined in the Java Script, then the *sid* get parameter will be added  
to the url of XMLHttpRequest.  
The *sid* variable must be defined in PHP code.  
For example:  
*<script>sid = "<?=session_id()?>";</script>*In this case, wiill be url of XMLHttpRequest set:  
*"example.php?a=5&b=2&d=3&sid=9220b95a0064fd00f062f2a6d2b385a9"*  
  
E. *responseType* property - string or null;  
The following *value* are allowed:  
- "json";  
- "blob";  
- "arraybufer";  
- "document";  
- "text";  
Default value of this property is "text".  
  
F. *header* property - object or null.  
The properties of this object specifies the name of the XMLHttpRequest header,  
the value specifies the value of the header.  
For example:  
*header:{  
"accept": "aplication/json",  
"accept-encoding: "gzip",  
"api-key": apiKey,  
"cache-control": "no-cache",  
"content-type":application/json",  
"x-signature":signature  
}*  
  
G. *mime* property - string or null.  
This property defines the MimeType of XMLHttpRequest.  
For example:  
*mime:'text/plain; charset=x-user-defined'*  
  
H. *to* property - string.  
This property specifies the selector of the element whose content the response should be inserted into.  
Example for selector for element with id="modal:  
*{...,to:"#modal",...}*  
  
I. *func* property - null or callback function or object.  
  
I1. If the *func* property is defined, then the specified function will be called after  
the request completes. The following parameters will be passed to this function:  
*rsp* - string or object (with responseType: json, blob, araybufer, document)  
 - resoponse of XMLHttpRequest;  
*to * - string selector(see e. above '*Selectors of DOM elements*');  
*url* - string url of XMLHttpRequest;  
For example GET(default) XMLHttpRequest:  
*myFunction = function(rsp, to, url){  
......  
};  
obj={url:"?t=5",to:"#modal",func:myFunction};  
__.send(obj);*  
  
I2. if *func* property as object defined.  
if the *func* property is defined as an object, then it must define two callback functions.  
The property of this object defines a callback functions.  
The *ready* property defines a callback function for event XMLHttpRequest.onreadystatechange  
The *progress* property defines a callback function for event XMLHttpRequest.upload.onprogress  
For example: *func:{ready:funcReady,progress:funcProgress}*  
  
I3. If *func* property is undefined, then  XMLHttpresponse will be inserted  
into the element whose selector was defined in the *to* property.  
TIt is only possible that the value of the *responseType* property is *text* (set or the default  
value of this property).  
For example:  
*obj={url:"?t=5",to:"#modal"};  
__.send(obj);*  
  
J. *debug* property - 1 or true.  
If this debug property is defined, then information is displayed in the console.  
*console.log({rsp:rsp,to:to,func:func,url:url})*  
For example:  
*obj={url:"?t=5",to:"#modal",debug:1};  
__.send(obj);*  
Attention!  
If this property is undefined, but errors are detected in the PHP code,  
the information in the console is also displayed.  
## 3.28.2 Redirect and submit  
     
 This section will show examples of using the send method for redirecting and submitting forms.  
The examples below will use the *send_demo.html* file and the *url* method, which will be used to  
determine the current *url-address* and *GET-parameters* and *link* method to include  
*sections/css/content.css* css-file.  
File *send_demo.html*:  

```html
<<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<p></p>
<button>
</button><br>
</body>
<script>
info = 'Page location href: ' + __.url();
GET = __.url(1);
p = GET["p"]?GET["p"]:0;
if(p > 0)
  info += "<br>Received GET parameter 'p' = " + p;
_("p").content(info);
p++;
_("button").content('__.send("sections/send_demo.html?p='+p+'")');
__.link("sections/css/content.css");
//button events handler
EventHandlerFunction = function(){
  __.send("send_demo.html?p="+p);
}
_("button").click(EventHandlerFunction);
</script>
</html>
```

  
     
Example 1. Redirect to url *send_demo.html*  
*__.send("sections/send_demo.html")*
```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
</button><br>
</body>
<script>
_("button").content('__.send("sections/send_demo.html")');
__.link("sections/css/content.css");
//button events handler
EventHandlerFunction = function(){
  __.send("sections/send_demo.html");
}
_("button").click(EventHandlerFunction);
</script>
</html>
```

  
     
Example 2. Submit form.  
In this case,  *submit* notive JS method will be applied to the *form* element. Previously,  
all the necessary attributes of the *form* element must be defined either in the html *form*  
tag or with the *attr* method.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button></button>
<button></button>
<form></form>
<form id="form2" name="form2" action="sections/send_demo.html?p=2"></form>
<iframe name="ifr"></iframe>
</body>
<script>
__.link("sections/css/content.css");
_("form").each(function(elementForm){
    elementForm.attr(
    {
      method:"post",
      target:"ifr"
    });
    if(!elementForm.attr("action"))
      elementForm.attr(
      {
        action:"sections/send_demo.html?p=1"
      });
});
//buttons events handler

EventHandlerFunction = function(e){
 eval(e.target.textContent);
}

buttonContent = ["__.send()", "_('#form2').send()"];
_("button").each(function(elementButton, ib){
  elementButton.click(EventHandlerFunction);
  elementButton.content(buttonContent[ib]);
});
</script>
</html>
```

  
  
## 3.28.3 POST XMLHttpRequest  
     
 This section will show examples of using the send method for the following *dataType* property values:  
- "formData" (default);  
- "json";  
- "blob";  
- "arraybufer";  
- "document";  
- "text";  
  
The examples below will use:  
- *ViewResponse.php* file;  
- *GetResponse.php* file;  
- *link* method to include *content.css* css-file;  
- *create* method;  
- *content* method;  
- *getFromArrBuf* method;  
  
Example 1. *send* method with *formData* dataType.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
<p>obj=
{
  url:"sections/ViewResponse.php",
  method:"post",
  data:{
   fname:"tom",
   lname:"sojer"
   },
  to:"#cont"
}
__.send(obj);
</p>
</button><br>
<button id="_2">
<div>demo 2</div>
<p>contF.create(1,
 {
   tag:"form",
   action:"sections/ViewResponse.php",
   method:"post"
 }
).create({1:"x1",2:"x2"},{type:"text",name:"x"});
__.send({to:"#cont"});
</p>
</button><br>

<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 2. *send* method with *json* dataType.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1. With  data: json-Object</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"json",
  responseType:"json",
  data:{ "email": "hello@user.com", "response": { "name": "Tester" }},
  to:"#cont",
  debug:1,
  func:myFunction,
  debug:1
}
__.send(obj);
</p>
</button><br>
<button id="_2">
<div>demo 2. With  data: json-String</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"json",
  responseType:"json",
  data:'{ "email": "hello@user.com", "response": { "name": "Tester" }}',
  to:"#cont",
  debug:1,
  func:myFunction,
  debug:1
}
__.send(obj);

</p>
</button><br>

<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
myFunction = function(rsp, to, url){
console.log(rsp);
_(to).content("email: " + rsp["email"]);
};
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 3. *send* method with *blob* dataType.  
In this example, the send method converts data with a 'text/plain' mime type into a blob object.  
The myFunction function converts a blob object to a string.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo with data:['Hello World!', 'text/plain']</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"blob",
  responseType:"blob",
  data:['Hello World!', 'text/plain'],
  to:"#cont",
  func:myFunction,
  debug:1
}
__.send(obj);
</p>
</button>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
myFunction = function(rsp, to, url){
  console.log(rsp);
  reader = new FileReader();
  reader.addEventListener('loadend', (e) => {
  text = e.srcElement.result;
  _(to).content(text);
  });
  reader.readAsText(rsp);
};
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 4. *send* method with *arraybufer* dataType.  
In this example, the send method converts data into a arraybufer object.  
The myFunction function converts a arraybufer object to the original data.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo with data:[1200]</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"arraybuffer",
  responseType:"arraybuffer",
  data:[1200],
  to:"#cont",
  func:myFunction,
  debug:1
}
__.send(obj);
</p>
</button><br>
<button id="_2">
<div>demo with data:[[120,11,50]]</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"arraybuffer",
  responseType:"arraybuffer",
  data:[[120,11,50]],
  to:"#cont",
  func:myFunction,
  debug:1
}
__.send(obj);
</p>
</button><br>
<button id="_3">
<div>demo with data:['Hello World!']</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"arraybuffer",
  responseType:"arraybuffer",
  data:['Hello World!'],
  to:"#cont",
  func:myFunctionT,
  debug:1
}
__.send(obj);
</p>
</button><br><button id="_4">
<div>demo with data:['你好世界！',2] (unicode string to Uint16Array)</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"arraybuffer",
  responseType:"arraybuffer",
  data:['你好世界！',2],// 2 or Uint16Array
  to:"#cont",
  func:myFunctionTU,
  debug:1
}
__.send(obj);
</p>
</button><br>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");

myFunction = function(rsp, to, url){
  console.log(rsp);
  arr = __.getFromArrBuf(rsp,_arrayType, true);
  console.log(arr);
  out = "Array from arraybuffer (";
  out += _arrayType.name;
  out += "):<br>";
  out += arr.join("<br>");
  _(to).content(out);
};

myFunctionT = function(rsp, to, url){
  console.log(rsp);
  out = "String from arraybuffer (";
  out += _arrayType.name;
  out += "):<br>";
  out += __.getFromArrBuf(rsp);
  _(to).content(out);
};

myFunctionTU = function(rsp, to, url){
  console.log(rsp);
  out = "Unicode string from arraybuffer (";
  out += _arrayType.name;
  out += "):<br>";
  out += __.getFromArrBuf(rsp, 2); //2 or _arrayType or Uint16Array
  _(to).content(out);
};

//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 5. *send* method with *document* dataType and *data:XMLDocument object*

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
body{font-family: arial;font-size: 12;}
#xmlStr{display: none}
#doc{border: 1px solid #0000ff;
padding: 5;
margin-top: 10;
display: inline-block}
</style>
</head>
<body>
<h4>XML as text</h4>
<div id="xmlStr"><note>
<from>Oliver</from>
<to>Lucas</to>
<message>Hello!</message>
</note></div>
<textarea id="viewXml" cols="80" rows=5></textarea>
<div id="doc">
parser = new DOMParser();<br>
XMLDocument = parser.parseFromString(xmlStr, "application/xml");<br>
</div>
<h4>Div id="cont":</h4>
<div id="cont"></div>
</body>
<script>
xmlStr = _("#xmlStr").content();
_("#viewXml").content(xmlStr);
parser = new DOMParser();
XMLDocument = parser.parseFromString(xmlStr, "application/xml");
myFunction = function(rsp,to){
childNodes = _("note", rsp).childs();
console.log(childNodes);
tmp="Parent node 'note' of XMLDocument<br>childNodes:";
_(childNodes).each(function(elm){
   tmp += "<div>&emsp;&emsp;|&emsp; nodeName: " + elm.name + ", textContent: " + elm.text+"</div>";
});
_("#cont").content(tmp);
}
obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  data: XMLDocument,
  dataType: "document",
  responseType:"document",
  func:myFunction,
  to:"#cont"
}
__.send(obj);
</script>
</html>
```

  
     
Example 6. *send* method with *text* dataType.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo with data:'Hello World!'</div>
<p>obj=
{
  url:"sections/GetResponse.php",
  method:"post",
  dataType:"text",
  data:'Hello World!',
  to:"#cont",
  debug:1
}
__.send(obj);
</p>
</button>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
  
## 3.28.4 PUT XMLHttpRequest  
     
   This section will show examples of using the send method for  *formData* dataType.  
The examples below will use:  
- *ViewResponse.php* file;  
- *link* method to include *content.css* css-file;  
- *content* method;

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo for dataType:formData(default) and method:"put"</div>
<p>obj=
{
  url:"sections/ViewResponse.php",
  method:"put",
  data:{
   fname:"tom",
   lname:"sojer"
   },
  to:"#cont" 
}
__.send(obj);
</p>
</button>

<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();  
  eval(code); 
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
  
## 3.28.5 GET XMLHttpRequest  
     
 This section will show examples of using the *send* method for the following *responseType* property values:  
- "text"; (default);  
- "json";  
- "blob";  
- "arraybufer";  
- "document";  
  
The examples below will use:  
- *ViewResponse.php* file;  
- *content.json* file;  
- *content.txt* file;  
- 21.jpg file;  
- *content.css* file;  
- *html_document.html* file;  
- *xml_document.xml* file;  
- *content*, *create*, *child*, *each*, *link*, *setBlob* methods;  
  
Example 1. Simple GET XMLHttpRequest with responseType:text(default)

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo 1</div>
<p>obj=
{
  url:"sections/content.txt",
  method:"get",
  to:"#cont"
}
__.send(obj);
</p>
</button><br>

<button id="_2">
<div>demo 2</div>
<p>obj=
 {
   url:"sections/ViewResponse.php?a=1",
   method:"get",
   data:"b=2",
   to:"#cont"
 }
__.send(obj);
</p>
</button><br>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 2. GET XMLHttpRequest with responseType:"json".  


```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
  <button id="_2">
<div>demo GET XMLHttpRequest "sections/content.json"</div>
<p>obj=
{
  url:"sections/content.json",
  method:"get",
  responseType:"json",
  to:"#cont",
  func:createSelect
}
__.send(obj);
</p>
</button><br>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
  createSelect = function(fruits, to){
  tit = "XMLHttpRequest: sections/content.json<br>";
  tit += "XMLHttpResponse: " + fruits.constructor.name + "-json<br>";
  tit += "JSON.stringify(XMLHttpResponse):<br>";
  tit += JSON.stringify(fruits).replace(",",",<br>");
  tit += "<hr>Created select: ";
  _(to).create(tit, {tag:"p"});
  _(to).create(1,{tag:"select"}).create(fruits);
};
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 3. GET XMLHttpRequest with responseType:"blob"

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>Request url:"sections/21.jpg", response: blob-object</div>
<p>obj=
 {
   url:"sections/21.jpg",
   method:"get",
   responseType:"blob",
   to:"#cont",
   func:myFunction,
   debug:true
 }
__.send(obj);
</p>
</button>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
myFunction = function(rsp, to, url){
  console.log(rsp);
  img =_("#cont").create(1,
    {
      tag:"img",
      width:"120px",
      src:window.URL.createObjectURL(rsp)
    }
  );
  img.onload = function(e) {
      window.URL.revokeObjectURL(img.src);
    };
};
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 4. GET XMLHttpRequest with responseType:"arraybufer"

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>Request url:"sections/21.jpg", response: arraybufer-object</div>
<p>obj=
 {
   url:"sections/21.jpg",
   method:"get",
   responseType:"arraybuffer",
   to:"#cont",
   func:myFunction,
   debug:true
 }
__.send(obj);
</p>
</button>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
myFunction = function(rsp, to, url){
  bl = __.setBlob(rsp, 'image/jpg');
  img =_("#cont").create(1,
    {
      tag:"img",
      width:"120px",
       src:window.URL.createObjectURL(bl)
    }
  );
  img.onload = function(e) {
      window.URL.revokeObjectURL(img.src);
  };
};
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
     
Example 5. GET XMLHttpRequest with responseType:"document"

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>Request url:"sections/html_document.html", response: document-object</div>
<p>obj=
 {
   url:"sections/html_document.html",
   method:"get",
   responseType:"document",
   to:"#cont",
   func:myFunction,
   debug:true
 }
__.send(obj);
</p>
</button><br>
<button id="_2">
<div>Request url:"sections/xml_document.xml", response: document-object</div>
<p>
obj=
 {
   url:"sections/xml_document.xml",
   method:"get",
   responseType:"document",
   to:"#cont",
   func:myFunctionXml,
   mime:'text/xml',
   debug:true
 }
__.send(obj);
</p>
</button>

<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
myFunction = function(rsp, to, url){
div=_('div', rsp);
divContentFromResponse = "div content from response:<br>"
divContentFromResponse += div.content();
_(to).content(divContentFromResponse);
};
myFunctionXml = function(rsp, to, url){
  console.log(rsp);
  childNodesOfnote = _('note', rsp).childs();
  console.log(childNodesOfnote);
  tmp="XML Parent node 'note'  childNodes: ";
  _(childNodesOfnote).each(function(elm){
   tmp += "<br>nodeName: " + elm.name + ", textContent: " + elm.text;
  });
  _(to).content(tmp);
};
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
  
## 3.28.6 DELETE XMLHttpRequest  
     
This section will show example of using the send method with  propertis of parametr:  
*url:"sections/ViewResponse.php?id=1",  
method:"delete"*  
  
The example below will use:  
- *ViewResponse.php* file;  
- *content.css* file;  
- *link* method;  
  
Example.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo for request url:"sections/ViewResponse.php?id=1" and  method:"delete"</div>
<p>obj=
 {
   url:"sections/ViewResponse.php?id=1",
   method:"delete",
   to:"#cont"
 }
__.send(obj);
</p>
</button><br>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();  
  eval(code); 
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
  
## 4. Auxiliary methods  
## 4.1 Method ads  
     
   This method is used to get the *duration* property of the css style.    
The *asd* method, like all auxiliary methods, is applied without a selector.    
*res = __.ads(Duration);*  
  
The *Duration* parameter can have the following values:   
- number - a value up to 10 is interpreted as seconds,otherwise as milliseconds.   
    For example, the number 4 to "4s", 100 to "100ms";  
- a string containing the value of property duration  
    set according to the css-rules - duration with the unit of measurement s/ms,  
    or several values separated by commas. For example, "1s","100ms","100ms,200ms";  
- a string containing the duration name - "fast" is equal to "200ms", "slow" is equal to "600 ms".  
    It is allowed to specify several values separated by comma. For example, "slow","fast","slow,fast";         
- null - If the duration is not specified, the default value is "600ms"  
  
Example for method *ads*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
res = __.ads(1);
</button><br>
<button>
res = __.ads(100);
</button><br>
<button>
res = __.ads('1,600');
</button><br>
<button>
res = __.ads('fast');
</button><br>
<button>
res = __.ads('slow');
</button><br>
<button>
res = __.ads('fast,slow');
</button><br>
<button>
res = __.ads();
</button><br>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = method + '<br>res = ' + res;	
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.2 Method env  
     
   The method allows you to get some useful information about the device and the browser.   
*outObject = __.env();*  
  
The method returns an object with the following properties:    
  
- wbr - width of body;  
- hbr - height of body;  
- wbs - width of body scroll;  
- hbs - height of body scroll;  
- wsc - width of screen;  
- hsc - height of screen;  
- dpr - devicePixelRatio;  
- sor - suport orientation change;  
- eor - event type 'orientationchange' or 'resize';  
  
Example for method *env*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
out = __.env();
</button><br>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	out = __.env();
	
	showResult(out);	
}	
_("button").click(EventHandlerFunction);

showResult=function(out){
	showObj =
	{
		wbr:"width of body",
		hbr:"height of body",	
		wbs:"width of body scroll",
		hbs:"height of body scroll",
		wsc:"width of screen",
		hsc:"height of screen",
		dpr:"devicePixelRatio",
		sor:"suport orientation change",
		eor:"event type 'orientationchange'/'resize'"
	};
	msg = "";	
	for(prop in out)
	{
	  msg += showObj[prop] + ': out.' +prop+" = "  + out[prop]+"<br>";	 
	}			
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.3 Method esc  
     
The method takes a string and puts a backslash in front of each character that  
is part of the regular expression syntax.   
   
*res = __.esc(InputString);*  
  
Example for method *esc*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>#check_bl{margin:0 0 0 40}</style>
</head>
<body>
<button>
res = __.esc("a+b-s*5");
</button><br>
<button>
res = __.esc("../example.html");
</button><br>
<button>
res = __.esc('abc@domen.com');
</button><br>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = method + '<br>res = ' + res;	
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.4 Method ins  
     
   This method provides several useful functions with string variables and arrays.    
*res = __.ins(*Parameter1*, *Parameter1*, *Parameter2*);*  
  
The *Parameter1* is required and must contain a string - a regular expression pattern.  
The *Parameter2* is also required and must contain a string or array.  
The *Parameter3* is optional and can contain a string, number, or boolen true.   
  
The functionality of the method depends on the specified parameter. The following cases are allowed:   
  
- *Parameter2*is string, *Parameter3* is undefined, in this case the method checks the string  
  according to the pattern specified in *Parameter1*, and if successful, returns the boolean true,  
  otherwise false.   
  
- * Parameter2 * is a string, * Parameter3 * is a string, in this case the method checks the string   
   against the pattern specified in * Parameter1 * and returns a string in which in case of success  
   the characters matching the pattern will be replaced by the characters specified in * Parameter3 *,  
   otherwise, it returns the string specified in *Parameter2* unchanged.   
    
- *Parameter2* - string, *Parameter3* - boolen true or number 1, in this case the *ins* method,  
  applies the native js method split - *Parameter2.split(Parameter1)* and, if a match with the pattern is  
  found,  returns an array with several elements, otherwise an array, 0-element, which will contain the string  
  from *Parameter2*.   
  
- *Parameter2* is array, *Parameter3* is udefined, in this case, the method checks each element of   
  the array against the pattern specified by the first parameter, and if successful, returns  the index of  
  the element of the array for which the check was successful.  
  If the check for all elements of the array was unsuccessful, the method returns the number -1.  
  
- *Parameter2* is an array *Parameter3* is a string, in this case the method checks each element  
  of the array string against the pattern specified in *Parameter1* and returns an array , in which,   
  if successful in each array elements, symbols matching the pattern will be replaced by symbols specified in  
  *Parameter3*, otherwise, it returns the array specified in *Parameter2* unchanged.   
  
Example for method *ins*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
res = __.ins("an", "Apple,Orange,Grape");
</button><br>
<button>
res = __.ins("\\s", "Apple,Orange,Grape");
</button><br>
<button>
res = __.ins(",", "Apple,Orange,Grape", ";");
</button><br>
<button>
res = __.ins(",", "Apple,Orange,Grape", 1);
</button><br>
<button>
res = __.ins(",", "Apple,Orange,Grape", true);
</button><br>
<button>
res = __.ins("Orange", ["Apple","Orange","Grape"]);
</button><br>
<button>
res = __.ins("(Orange|Grape)", ["Apple","Orange","Grape"], "Pineapple");
</button><br>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = method + '<br>res = ';
	if(__.a(res))
	{
	  msg += "array <br>";
	  for(i in res) msg += i+": "+res[i]+"<br>";	
	}
	else
	  msg += res;	
	cont.content(msg);
	
};
</script>
</html>
```

  
  
## 4.5 Method merge  
     
   This method allows you to merge several objects into one object or two structured   
strings into one string. Strings can contain one separator character between words, or two separators  
 - one between a group of two words and the other between words in a group.  
   
*res = __.merge(Parametr1,Parametr2,Parametr3,Parametr4);*  
  
The functionality of the method depends on the specified parameter. The following cases are allowed:  
- *Parameter1* and *Parameter2* define two objects to be merge into one object.  
  In this case, *Parameter1* and *Parameter2* are required, *Parameter3* and *Parameter4*  
  may not be specified. Whereas *Parameter3* and *Parameter4* can also be defined as an objects.   
  Thus, the method allows you to merge up to four objects.  
  When merging objects, the properties are not duplicated, and if the property in the previous object  
  coincides with the property in the next object, then the property value from the next object will be  
  inserted into the merged object.  
  If in the next object the property value is null, then this property will be removed from the merged object.  
    
- *Parameter1* and *Parameter2* define two strings to be merged into one string. *Parameter3*   
  defines the delimiter character between words in strings. *Parameter4* is boolen.  
  If this parameter is true, then the strings will be merged without duplicating duplicate words,   
  otherwise, words from the string specified in * Parameter2 * will be removed from the string specified  
  in *Parameter1*   
    
- *Parameter1* and *Parameter2* define two strings that should be merged into one string.  
  *Parameter3* defines the delimiter character between two-word groups.  
  The first of the two words is interpreted as an identifier, the second as a value.   
  *Parameter4* defines the separator character between words in the group.  
  *Parameter1* and *Parameter2* define two strings that should be merged into one string.  
  *Parameter3* defines the delimiter character between two-word groups.     
  *Parameter4* defines the separator character between identifier and value.  
  The value may be not specified. When merging strings, groups, with matching identifiers, are   
  not duplicated. In this case, into the merged string the group will be inserted from   
  the string specified in *Parameter2*.   
  If in this group no value is specified, then the group will be excluded from the merged string.     
  
Example for method *merge*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
res = __.merge({a:"1",b:"2"}, {b:null,d:"2"}, {i:"1",j:"2"}, {m:"1",n:"2"}  );
</button><br>
<button>
res = __.merge("a b","c d"," ",true);
</button><br>
<button>
res = __.merge("a b c","c"," ",false);
</button><br>
<button>
res = __.merge("height:0", "display:block;height:auto", ";", ":");
</button><br>
<button>
res = __.merge("display:none", "display;height:auto", ";", ":");
</button><br>
<button>
res = __.merge("a=1&b=2", "a=3&c=3&b=4", "&", "=");
</button><br>
<button>
res = __.merge("a=1&b=2", "c&b=4", "&", "=");
</button><br>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = "<p>" + method + '</p>res = ';
	if(__.a(res) || __.o(res))
	{
	  msg += __.a(res)?"array":"object" + ":<hr>";
	  tmp=[];
	  for(i in res) tmp.push(i+': "'+res[i]+'"');
	  msg += tmp.join(",<br>");
	}
	else
	  msg += '"'+res+'"';	
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.6 Method sid  
     
   This method complements the *php-session_Id* from the predefined JS *sid* variable  
to the url address specified by the *Url* parameter. If the *sid* variable is not defined,  
the method returns the url address unchanged.    
  
*sid= "&lt;?=session_id()?&gt;";  
res = __.sid(Url);*  
  
Example for method *sid*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>#cont{padding:0 0 20 20}</style>
</head>
<body>
<button>
sid="9220b95a0064fd00f062f2a6d2b385a9";
</button><br>
<button>
res = __.sid("demol.php");
</button><br>
<button>
res = __.sid("demol.php?sid=9220b95a0064fd00f062f2a6d2b385a9");
</button><br>
<button>
res = __.sid("demol.php?a=1&b=1");
</button><br>
<div id="cont" class="rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){
res=null;	
	method =_(this).content();	
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){
    if(__.ins("^\\s+res",method))
	{
		msg = '<br>sid = ' + sid;
		msg += '<br><p>' + method + '</p>res = ' + res;
	}	
	else
		msg = '<br>sid = ' + sid;
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.7 Method sob  
     
   This method allows you to convert a structured string to an object. The string must contain  
groups of two words, the first of which will be interpreted as a property of the object, and the   
second as the value of the property.   
  
*res = __.sob(Parametr1,Parametr2,Parametr3);*  
or  
*res = _(selector).sob();*  
  
The functionality of the method depends on the specified parameter and selector.   
The following cases are allowed:  
  
- *Parameter1* defines a string to be converted to an object. If a selector is defined,  
  all parameters are optional. in this case, the string is determined from the attribute style  
  the element specified by the selector.   
- *Parameter2* defines the  separator between a group of words. This parameter is optional.  
  The default character is semicolon(;).  
- *Parameter3* defines the character separator between the group of words in the group.   
  This parameter is optional. The default character is colon(:).  
  
Example for method *sob*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
res = _("input").sob();
</button><br>
<button>
res = __.sob("color:red; font-size:16px");
</button><br>
<button>
res = __.sob("a:1, b:2, c:3", ",");
</button><br>
<button>
res = __.sob("a = 1 & b = 2 & c = 3", "&", "=");
</button>
<p>
<input type="text" value="Apple">
</p>
<p class="RB">
Setting the style for an input element:<br>
style = "color:red; font-size:16px; padding:0 0 0 10";<br>
_("input").css(style);
</p>	 
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
style = "color:red;font-size:16px;padding:0 0 0 10";
_("input").css(style);	
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);
showResult=function(method){	
	msg = "<p>" + method + '</p>res = ';
	if(__.a(res) || __.o(res))
	{
	  msg += __.a(res)?"array":"object" + ":<hr>";
	  tmp=[];
	  for(i in res) tmp.push(i+': "'+res[i]+'"');
	  msg += tmp.join(",<br>");
	}
	else
	  msg += '"'+res+'"';	
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.8 Method url  
     
   This method allows  to get url-addresses and perform operations with strings  
containing url-addresses. The *url* method differs from other auxiliary methods   
in that it can be applied with or without selector.    
  
*res = _(selector).url(Parametr1, Parametr2);*  
or  
*res = __.url(Parametr1, Parametr2);*  
  
The functionality of the method depends on the specified selector and parameter.   
The following cases are allowed:    
  
- The selector and both parameters are undefined - in this case, the method returns the   
  url address of the current page.  
  
- The selector is specified and defines the form element, but both parameters are undefined   
  - in this case, the method returns the url-address of the action forms.  
  
- The selector is not specified or is specified and defines the form element,   
  *Parameter1* is specified as a number and *Parameter1* is undefined.   
  Depending on the specified value of *Parameter1*, the method returns the following data:  
    - 0 - returns the url of the base name,  
    - 1 - returns an object (pseudo-associated array) with GET parameters of the url.  
    - 2 - returns an array, the first element of which contains the url of the base name,  
         the second element contains an object with GET parameters of the url.  
  
- The selector is not set or the selector is set and defines the form element and *Parameter1*  
  is defined as string containing GET parameters.  
  In this case, the method will return the original url with augmented GET parameters.  
  If the original url contained GET parameters, then the method will combine them with the   
  GET parameters from *Parameter1*.  
  If the names of the GET parameters of the url coincide with the names of the GET parameters  
  from *Parameter1*, the values from *Parameter1* will be used.  
  
- The selector is not defined, *Parameter2* is defined as a string containing the original   
  url address. In this case, the url from *Parameter2* will be accepted instead of the address  
  of the current page or url of the action forms. The result will depend on the value set in  
  *Parameter1*, just as it was described above.        
  
Example for method *url*.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
<style>
#cont{margin:30 0 0 0}
#cont div{margin:0 0 0 50}
#cont div i{font-style:normal;margin:0 0 0 30}
#viewurl{right: 30;color:blue}
</style>
</head>
<body>
<button>
viewurl.content(""); res = __.url();
</button><br>
<button>
viewurl.content(""); res = _("form").url();
</button><br>
<button>
viewurl.content("index.html?a=1"); res = __.url("s=1&d=2","index.html?a=1");
</button><br>
<button>
viewurl.content( _("form").url() ); res = _("form").url("a=5&b=19&e=7");
</button><br>
<button>
viewurl.content( _("form").url() ); res = _("form").url(0);
</button><br>
<button>
viewurl.content( _("form").url() ); res = _("form").url(1);
</button><br>
<button>
viewurl.content( _("form").url() ); res = _("form").url(2);
</button><br>
<form action="index.html?a=1&b=2&c=3"></form>
<div id="viewurl" class="cont"></div>
<div id="cont" class="cont rb"></div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
viewurl = _("#viewurl");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = "<p>" + method.replace(";",";<br>") + '</p>res = ';
	if(__.a(res) || __.o(res))
	{
	  msg += (__.a(res)?"array":"object") + ":<hr>";
	  tmp=[];
	  for(i in res) 
	  {
		if(__.o(res[i]))
		{
			tmp2=[];
			for(i2 in res[i]) 
				tmp2.push('<i>'+i2+': "'+res[i][i2]+'"</i>');
			prop = tmp2.join(",<br>")+'<br>}</div>';			
			tmp.push(i+': object<div>{<br>' + prop);	
		}
		else
			tmp.push(i+': "'+res[i]+'"');
	  }
	  msg += tmp.join(",<br>");
	}
	else
	  msg += '"'+res+'"';	
	cont.content(msg);	
};
</script>
</html>
```

  
  
### 4.9 Arraybufer methods  
## 4.9.1 Method setToArrBuf  
     
 This method is used to pack the originalData into an arraybuffer-object according to the  
  ArrayType ([JavaScript typed arrays](https://developer.mozilla.org/de/docs/Web/JavaScript/Typed_arrays)).  
  
*arraybuferObject = __.setToArrBuf(originalData);*  
or  
*arraybuferObject = __.setToArrBuf(originalData, ArrayType);*  
  
originalData:  
- Single number;  
- Numeric array;  
- String  
  
ArrayType:  
- function - Uint8Array, Uint16Array, Uint32Array, Float64Array etc.  
The *getArrayType* method can be used to determine the ArrayType based on the number of  
bytes required to properly pack the originalData into arraybufer-object.  
  
- number - 1, 2, 4  
Specifies the number of bytes required to properly pack each character from the source string.  
Number *1* will be interpreted as Uint8Array, *2* as Uint16Array, *4* as Uint32Array.  
  
The example below will use:  
- *link* method to include *content.css* css-file;  
- *create* method;  
- *content* method;  
- *getArrayType* method;  
- *getFromArrBuf* method;  
  
Example 
```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo with originalData=1200</div>
<p>
originalData = 1200;
_arrayType = __.getArrayType(originalData);
arraybuferObject = __.setToArrBuf(originalData, _arrayType);
myFunction(arraybuferObject, cont);
</p>
</button><br>
<button id="_2">
<div>demo with originalData=250</div>
<p>
originalData = 250;
_arrayType = __.getArrayType(originalData);
arraybuferObject = __.setToArrBuf(originalData, _arrayType);
myFunction(arraybuferObject, cont);
</p>
</button><br>
<button id="_3">
<div>demo with originalData=-1200.3, _arrayType = Float64Array</div>
<p>
originalData = -1200.3;
_arrayType = Float64Array;
arraybuferObject = __.setToArrBuf(originalData, _arrayType);
myFunction(arraybuferObject, cont);
</p>
</button><br>
<button id="_4">
<div>demo with originalData = [120.3, -11.8, 500]</div>
<p>
originalData = [120.3, -11.8, 500];
_arrayType = __.getArrayType(originalData);
arraybuferObject = __.setToArrBuf(originalData, _arrayType);
myFunction(arraybuferObject, cont);
</p>
</button><br>
<button id="_5">
<div>demo with originalData = 'Hello World!'</div>
<p>
originalData = 'Hello World!';
_arrayType = __.getArrayType(originalData);
arraybuferObject = __.setToArrBuf(originalData, _arrayType);
myFunctionT(arraybuferObject, cont);
</p>
</button><br><button id="_6">
<div>demo with originalData='你好世界！'(unicode string)</div>
<p>
originalData = '你好世界！';
_arrayType =  __.getArrayType(originalData,2);
arraybuferObject = __.setToArrBuf(originalData, _arrayType);
myFunctionTU(arraybuferObject, cont);
</p>
</button><br>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");

myFunction = function(arraybuferObject, to){
  console.log(arraybuferObject);
  arr = __.getFromArrBuf(arraybuferObject,_arrayType, true);
  console.log(arr);
  out = "Array from arraybuffer (";
  out += _arrayType.name;
  out += "):<br>";
  out += arr.join("<br>");
  to.content(out);
};

myFunctionT = function(arraybuferObject, to){
  console.log(arraybuferObject);
  out = "String from arraybuffer (";
  out += _arrayType.name;
  out += "):<br>";
  out += __.getFromArrBuf(arraybuferObject);
  to.content(out);
};

myFunctionTU = function(arraybuferObject, to){
  console.log(arraybuferObject);
  out = "Unicode string from arraybuffer (";
  out += _arrayType.name;
  out += "):<br>";
  out += __.getFromArrBuf(arraybuferObject, 2); //_arrayType Uint16Array or 2
  to.content(out);
};

//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
  
## 4.9.2 Method getArrayType  
     
 This method can be used to determine the ArrayType ([JavaScript typed arrays](https://developer.mozilla.org/de/docs/Web/JavaScript/Typed_arrays)) based on the number of  
bytes required to properly pack the originalData into arraybufer-object.  
  
*arrayType = __.getArrayType(originalData);*  
or  
*arrayType = __.getArrayType(originalData, NumberOfBytes);*  
  
originalData:  
- Single number;  
- Numeric array;  
- String  
  
- NumberOfBytes - 1, 2, 4  
Specifies the number of bytes required to properly pack each character from the source string.  
Number *1* will be interpreted as Uint8Array, *2* as Uint16Array, *4* as Uint32Array.  
  
See the *setToArrBuf* method section for examples of how to use this method.  
## 4.9.3 Method getFromArrBuf  
     
 This method is used to unpack the original data from the arraybuffer-object according to  
  ArrayType ([JavaScript typed arrays](https://developer.mozilla.org/de/docs/Web/JavaScript/Typed_arrays)).  
  
*originalData = __.getFromArrBuf(ArraybuferObject);*  
or  
*originalData = __.getFromArrBuf(ArraybuferObject, ArrayType);*  
or  
*originalData = __.getFromArrBuf(ArraybuferObject, ArrayType, getArray);*  
  
originalData:  
- Single number;  
- Numeric array;  
- String  
  
ArrayType:  
- null (by default ArrayType is Uint8Array function )  
- function - Uint8Array, Uint16Array, Uint32Array, Float64Array etc.  
The *getArrayType* method can be used to determine the ArrayType based on the number of  
bytes required to properly pack the originalData into arraybufer-object.  
  
- number - 1, 2, 4  
Specifies the number of bytes required to properly pack each character from the source string.  
Number *1* will be interpreted as Uint8Array, *2* as Uint16Array, *4* as Uint32Array.  
  
The *getArray* parameter is boolean or empty. If getArray is true, the method returns  
a numeric array, otherwise a string.  
  
See the *setToArrBuf* method section for examples of how to use this method.  
## 4.9.4 Method setBlob  
     
 This method is used to pack the originalData into an [blob-object](https://developer.mozilla.org/en-US/docs/Web/API/Blob).  
  
*blobObject = __.setBlob(originalData, MIME_Type);*  
  
originalData:  
- text;  
- binary data;  
  
The example below will use:  
- *link* method to include *content.css* css-file;  
- *create* method;  
- *content* method;  
  
Example for originalData - 'Hello World!' and MIME type - 'text/plain'.  
In this example, the setBlob method converts data with a 'text/plain' mime type into a blob-object.  
The myFunction function converts a blob-object to a string.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button id="_1">
<div>demo with originalData = 'Hello World!' and MIME_Type = 'text/plain'</div>
<p>
blobObject = __.setBlob('Hello World!', 'text/plain');
myFunction(blobObject);
</p>
</button>
<div id="contF">
</div>
<div id="cont" class="cont rb">
</div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");
contF = _("#contF");
myFunction = function(blobObject){
  console.log(blobObject);
  reader = new FileReader();
  reader.addEventListener('loadend', (e) => {
  text = e.srcElement.result;
  cont.content(text);
  });
  reader.readAsText(blobObject);
};
//buttons events handler
EventHandlerFunction = function(){
  _(this).css("height:30px");
  clearPrevious();
  code=_("#"+this.id+" p").content();
  eval(code);
}
_("button").click(EventHandlerFunction);
function clearPrevious(){
  cont.content("");
  contF.content("");
}
</script>
</html>
```

  
  
### 4.10 Check type methods  
## 4.10.1 Check type method a - array

*res= __.a(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.

Examples for all datatype checking methods:

Example 1. The name of the method is the same as the data type.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
res = __.a( [1, 2, 3] ); //check array
</button><br>
<button>
res = __.b(false); //check boolen
</button><br>
<button>
func=function(){alert("Hello!")}; res = __.f(func); //check function
</button><br>
<button>
res = __.n(25); //check number
</button><br>
<button>
res = __.o({a:1,b:2}); //check object
</button><br>
<button>
res = __.s("25"); //check string
</button><br>
<button>
var par; res = __.u(par); //check undefined
</button><br>
<div id="cont" class="cont rb"></div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = "<p>" + method.replace(";",";<br>") + '</p>res = ';	
	msg += '"'+res+'"';	
	cont.content(msg);	
};
</script>
</html>
```

  
     
Example2 The method name is different from data type.

```html
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="CompactDOM.min.js"></script>
<title>HTML Document</title>
</head>
<body>
<button>
res = __.a(true); //check array
</button><br>
<button>
res = __.b([1, 2, 3]); //check boolen
</button><br>
<button>
func=25; res = __.f(func); //check function
</button><br>
<button>
res = __.n("25"); //check number
</button><br>
<button>
var par=1; res = __.o(par); //check object
</button><br>
<button>
res = __.s(25); //check string
</button><br>
<button>
var par=1; res = __.u(par); //check undefined
</button><br>
<div id="cont" class="cont rb"></div>
</body>
<script>
__.link("sections/css/content.css");
cont = _("#cont");			
//buttons events handler	
EventHandlerFunction = function(){	
	method =_(this).content();
	eval(method);	
	showResult(method);	
}	
_("button").click(EventHandlerFunction);

showResult=function(method){	
	msg = "<p>" + method.replace(";",";<br>") + '</p>res = ';	
	msg += '"'+res+'"';	
	cont.content(msg);	
};
</script>
</html>
```

  
  
## 4.10.2 Check type method b - boolean

*res= __.b(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.
See examples in section 4.10.1
  
## 4.10.3 Check type method f - function

*res= __.f(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.
See examples in section 4.10.1


  
## 4.10.4 Check type method n - number

*res= __.n(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.
See examples in section 4.10.1

  
## 4.10.5 Check type method o - object

*res= __.o(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.
See examples in section 4.10.1
  
  
## 4.10.6 Check type method s - string

*res= __.s(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.
See examples in section 4.10.1
  
  
  
## 4.10.7 Check type method u - undefined

*res= __.u(parameter)*

This method checks the datatype of the parameter.
If the method name matches the datatype of the parameter, the method return true,
otherwise false.
See examples in section 4.10.1
  
  
# 5. Appendixs
## 5.1 Codes of tutorial  website
## 5.1.1 index.html  
  
```html  
<html>
<meta charset=utf-8>
<title>CompactDOM tutorial</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, 
maximum-scale=1, user-scalable=no, user-scalable=0" >
<meta name="description" content="CompactDOM js library online-tutorial">
<meta name="keywords" content="CompactDOM,javascript,library">
<meta name="author" content="Vladimir Kheifets">
<meta name="robots" content="index,follow" />
<script type="text/javascript" src="sections/CompactDOM.min.js"></script>
<script>
_("head").script("index.js");
</script>
</head>
<body>
<div id="block-setting">
<i id="setting" class="fas fa-cog"></i>
	<div>
	Code highlighting:<br>
	<i id="adj" class="fas fa-adjust"></i> <span id="dark-light" ></span>
	<br>Themes:<br>
	<select id="thema" ></select>
	</div>
</div>
<div class="CLB">
	<div id="Sections"></div>
	<div id="SectionsContent"></div>
</div>
<div class="footer"></div>
</div>
<script src="dist/rainbow.js"></script>
<script src="src/language/generic.js"></script>
<script src="src/language/html.js"></script>
<script src="src/language/css.js"></script>
<script src="src/language/php.js"></script>
<script src="src/language/javascript.js"></script>
<script src="src/language/json.js"></script>
</body>
</html>  
```  
## 5.1.2 index.json  
  
```json  
{
"content":
{
	"Preface":
	{
		"About CompactDOM tutorial":"AboutThisSite.html",
		"What is the HTML DOM?":"WhatIsDOM.html",
		"What is the CompactDOM?":"WhatIsCompactDOM.html",
		"How it works?":"HowItworks.html",
		"CompactDOM methods":"CompactDOMmethods.html",
		"Selectors of DOM elements":"SelectorsDOMelements.html"
	},

	"Events handler methods":{
		"on":"on.html",
		"blur":"blur.html",
		"change":"change.html",
		"childs":"childs.html",
		"click":"click.html",
		"dblclick":"dclick.html",
		"focus":"focus.html",
		"keydown":"keydown.html",
		"keypress":"keypress.html",
		"keyup":"keyup.html",
		"load":"load.html",
		"mouseenter":"mouseenter.html",
		"mouseleave":"mouseleave.html",
		"ready":"load.html",
		"resize":"resize.html",
		"scroll":"scroll.html",
		"submit":"submit.html"
	},

	"Basic methods":
	{
		"animate":"animate.html",
		"attr":"attribute.html",
		"attribute":"attribute.html",
		"checked":"checked.html",
		"class":"class.html",
		"content":"content.html",
		"create":"create.html",
		"css":"style.html",
		"display":"display.html",
		"childs":"childs.html",
		"each":"each.html",
		"hide":"hide.html",
		"ishide":"ishide.html",
		"link":"link.html",
		"lock":"lock.html",
		"modal":"modal.html",
		"position":"position.html",
		"prop":"prop.html",
		"reload":"reload.html",
		"script":"script.html",
		"selected":"selected.html",
		"show":"show.html",
		"style":"style.html",
		"tag":"tag.html",
		"transition":"animate.html",
		"val":"value.html",
		"value":"value.html",
		"send method":
		{
			"About the send method":"send1.html",
			"Redirect and submit":"send2.html",
			"POST XMLHttpRequest":"send3.html",
			"PUT XMLHttpRequest":"send4.html",
			"GET XMLHttpRequest":"send5.html",
			"DELETE XMLHttpRequest":"send6.html"
		}
	},

	"Auxiliary methods":
	{
		"ads":"ads.html",
		"env":"env.html",
		"esc":"esc.html",
		"ins":"ins.html",
		"merge":"merge.html",
		"sid":"sid.html",
		"sob":"sob.html",
		"url":"url.html",
		"Arraybufer methods":
		{
			"setToArrBuf":"setToArrBuf.html",
			"getArrayType":"getArrayType.html",
			"getFromArrBuf":"getFromArrBuf.html",
			"setBlob":"setBlob.html"
		},
		"Check type methods":
		{
			"a - array":"type.html",
			"b - boolean":"type.html",
			"f - function":"type.html",
			"n - number":"type.html",
			"o - object":"type.html",
			"s - string":"type.html",
			"u - undefined":"type.html"
		}
	},

	"Appendixs":
	{
		"Codes for this site":
		{
			"index.html":"../index.html?code=html",
			"index.json":"../index.json?code=json",
			"index.js":"index_js.html",
			"index.css":"../css/index.css?code=css"
		},
		"Files in examples":
		{
			"GetResponse.php":"GetResponse.html",
			"ViewResponse.php":"ViewResponse.html",
			"xml_document.xml":"xml_document.xml?code=xml",
			"html_document.html":"html_document.html?code=html",
			"content.css":"css/content.css?code=css",
			"content.json":"content.json?code=json",
			"content.txt":"content.txt?code=html"

		},
		"CSS":
		{
			"CSS for scroll method":"append3.html",
			"CSS for modal method":"append4.html"
		},
		"Predefined variables":"variable.html",
		"CompactDOM projects":
		{
			"CaesarCipher.js":"Projects/CaesarCipher.js",
			"timeCalculator.js":"Projects/timeCalculator.js"
		}
	}
},
"footer":
{
	"copyright":"by Alto-Booking developer. All rights reserved.",
	"links":
	{
		"Imprint":"Imprint.html",
		"Contact":"Contact.php",
		"Privacy":"Privacy.html"
	},
	"soziale":
	{
		"fab fa-github-square":"https://github.com/VladimirKheifets/Java-Script-library-CompactDOM",
		"fab fa-dev":"https://dev.to/vladimirkheifets/java-script-library-compactdom-4ji8",
		"fab fa-twitter-square":"https://twitter.com/VladimirKheife1/status/1496851597049094144"
	}
}
}
```  
## 5.1.3 index.js  
  
```js  
_("head").script("themes/themes.js");
start=function()
{
	SectionsСontent = _("#SectionsСontent");
	href = themeHref(false);
	__.link({id:"color-shema",href:href, media:"screen"});
	__.link("css/index.css,css/all.css,css/modal.css,css/button_to_up.css");
	_("#modal1").modal();
	__.scroll();
	adj=_("#adj");
	dl =_("#dark-light");
	adj.click(function(){
		if(__.ins("light",dl.content()))
		{
			adj.css("transform: rotate(360deg)")
			dl.content("dark code");
			light_theme = false;
		}
		else
		{
			adj.css("transform: rotate(180deg)")
			dl.content("light code");
			light_theme = true;
		}
		href = themeHref(light_theme);
		_("#color-shema").attr("href", href);
	});

	dl.content("dark code");

	sections =_("#Sections");

	add_prvnext = function(pr,val ){
		tmp={};
		Object.defineProperty(tmp, pr, {value:val});
		prvnext.push(tmp);
		prvnextInd.push(pr);
	}

	createContent = function(rsp, to, req){
		data = rsp["content"];
		if(data)
		{
			prvnext=[];
			prvnextInd=[];
			for(item in data)
			{
				sections.create(item,{tag:"div"});
				par1={};
				par2={tag:"span"}
				for(ia in data[item])
				{
					vd=data[item][ia];
					if(__.o(vd))
					{
						el=sections.create(ia,
						{
							tag:"div",
							class:"sub-ind"
						}
						);
						for(ia2 in vd)
						{
							vd2=vd[ia2];
							par2["data-url"]=vd2;
							el.create(ia2,par2);
							add_prvnext(ia2, vd2);
						}
					}
					else
					{
						par2["data-url"]=vd;
						sections.create(ia,par2);
						add_prvnext(ia, vd);
					}
				}
				sections.create(par1,par2);
			}
			_("#Sections span").click(goContent);

			//footer----------------------------
			footer = rsp["footer"];
			today = new Date();
			copyright = "&copy; ";
			copyright += today.getFullYear();
			copyright += " " + footer["copyright"];
			divFooter = _(".footer");
			divFooter.create(copyright, {tag:"span"});
			footerLinks = footer["links"];
			tmp = [];
			for(item in footerLinks) tmp.push(item);
			divFooter.create(tmp, {tag:"span", class:"link"});
			_(".link").click(goLfooter);
			soziale = footer["soziale"];
			for(item in soziale)
			{
				divFooter.create(1,
				{
					tag:"a",
					href:soziale[item],
					class: item + " icon",
					target:"_blank"
				});
			}
		}
		else
		{
			console.log(rsp);
		}
		//-----------------------------------
		key0=Object.keys(data)[0];
		key0_0 = Object.keys(data[key0])[0];
		H1 = key0_0;
		prvnextL = prvnext.length;
		goContent(data[key0][key0_0]);
	};

	var idc;

	viewDemo = function(){
		if(_(this).content()=="Try it")
		{
			_(this).content("Close");
			ids=_("#"+this.id.substr(1));
			html=ids.content();
			html = __.ins("<span.*?>(.*?)",html,"");
			html = __.ins("</span.*?>(.*?)",html,"");
			html = __.ins("&lt;",html,"<");
			html = __.ins("&gt;",html,">");
			html = __.ins("&amp;&amp;",html,"&&");
			html = __.ins("&amp;",html,"&");
			div =_(this).create(1,
			{
				add:"after",
				tag:"div",
				class:"RB",
				id:"_"+this.id
			});
			ifr = div.create(1,
			{
				tag:"iframe",
				allowfullscreen:"true",
				frameborder:"0"
			}
			);
			ifH=html.length<500?100:300;
			ifH+="px";
			ifrSt = "overflow:hidden;min-height:" + ifH;
			ifrSt += ";height:" + ifH;
			ifr.css(ifrSt);
			ifr.content(html);
			sy=this.offsetTop - 110;
			__.scroll(sy);
		}
		else
		{
			_(this).content("Try it");
			_("#_"+this.id).remove()
		}
	};
	//-------------------------------------------
	function getTitle(par){
			if(__.u(par)) _H1=H1;
			else _H1=prvnextInd[parseInt(par)];
			title_div_h1={};
			title_div="";
			if(__.ins("-",_H1))
			{
				title_div_h1.title = "Check type method "+_H1;
				title_div = "<div><i>res= __."+_H1.substr(0,1);
				title_div += "(Parameter)</i><br>";
			}
			else if(__.ins("(.\\ |\\.)",_H1))
				title_div_h1.title = _H1;
			else if(__.ins("^_",_H1))
			{
				title_div_h1.title = "Variable "+_H1;
				title_div="<div>";
			}
			else
				title_div_h1.title = "Method "+_H1;
			title_div_h1.h1 = "<h1>"+title_div_h1.title;
			title_div_h1.h1 += "</h1>"+title_div;
			return title_div_h1;
	}
	//--------------------------------------------
	function getTitleLinks(mt){
		stmt = mt?'style="margin-top:'+mt+'px"':"";
		stP = stR = stN = "";
		titleP = titleR = titleN = "";
		sth = 'style="visibility:hidden"';
		if(GET['indR'])
		{
			indR = GET['indR'];
			titleR=getTitle(indR).title;
		}
		else
		{
			stR = sth;
		}
		if(indP >= 0)
		{
			titleP=getTitle(indP).title;
		}
		else
		{
			stP = sth;
		}
		if(indN < prvnextL)
		{
			titleN=getTitle(indN).title;
		}
		else
		{
			stN = sth;
		}

		bl= '<div class="prvnext" '+ stmt +'>';
		bl+= '<div class="row">';

		bl+= '<div><p class="prev" '+stP+'>';
		bl+= '<i class="fas fa-arrow-alt-circle-left"></i> ';
		bl+= titleP +'</p></div>';

		bl+= '<div><p class="return" '+stR+'>';
		bl+= '<i class="fas fa-arrow-alt-circle-up"></i> ';
		bl+= titleR +'</p></div>';

		bl+= '<div><p class="next" '+stN+'>' + titleN;
		bl+= ' <i class="fas fa-arrow-alt-circle-right"></i>';
		bl+= '</p></div>';

		bl+='</div></div>';
		return bl;
	}
	//--------------------------------------------
	goRainbow=function(rsp,to,req){
		GET = __.url(1,req);
		if(code=GET['code'])
		{
			preff = '<div></div>';
			preff += '<pre><code data-language="';
			preff += code + '">';
			rsp = preff + rsp + '</code></pre>';
		}

		["html","head","body"].forEach(function(tag)
		{
			rsp = __.ins("<"+tag+">",rsp,"&lt;"+tag+"&gt;");
			rsp = __.ins("</"+tag+">",rsp,"&lt;/"+tag+"&gt;");
		});
		//--------------------------------------------
		ind = H1ToInd();
		indP = ind - 1;
		indN = ind + 1;
		out=getTitle();
		h1=out['h1'];
		blPrvNextTop = getTitleLinks(-10);
		blPrvNextBottom = getTitleLinks();
		cont = blPrvNextTop + h1 + rsp + blPrvNextBottom;
		_(to).content(cont);
		//--------------------------------------------
		Rainbow.color();
		//--------------------------------------------
		Sc=_("#SectionsСontent code");
		if(Sc.ElL>0)
		{
			i=1;
			_("#SectionsСontent code").each(function(el)
			{
				el.attr("id","_"+i);
				i++;
			}
			);
		}
		SCbutton =_("#SectionsСontent > button");
		if(SCbutton.exists)
		{
			i=1;
			SCbutton.each(function(el)
			{
				if(el.content()=="0")
				{
					el.hide();
				}
				else
				{
					el.attr("id","__"+i);
					el.content("Try it");
				}
				i++;
			}
			);
			SCbutton.click(viewDemo);
		}
		Sq=_("#SectionsСontent .quote");
		if(Sq.exists)
			Sq.each(function(el)
			{
				el.css("background-color:#f8f8f8")
			});

		//---------------------------------------
		Show = function(sel, set ){
		if(set)
			sel.each(function(el){el.show();});
		else
			sel.each(function(el){el.hide();});
		}
		//---------------------------------------
		function H1ToInd(){
		return parseInt(__.ins("^"+__.esc(H1)+"$",prvnextInd));
		}
		//---------------------------------------
		prev = _(".prev");
		retu = _(".return");
		next = _(".next");
		//---------------------------------------
		goContenPN=function()
		{
			cl=_(this).class();
			if(__.ins("return",cl))
				i = GET['indR'];
			else
				i = __.ins("prev",cl)?indP:indN;
			H1=prvnextInd[i];
			url=prvnext[i.toString()][H1];
			goContent(url);
		}
		//---------------------------------------
		mLink =_("a:not([href])");
		if(mLink.exists)
		{
			goLink=function()
			{
				iReturn=ind;
				H1=_(this).content();
				i = H1ToInd();
				url=prvnext[i][H1];
				url=__.url("indR="+ind, url);
				goContent(url);
			}
			mLink.click(goLink);
		}
		//--------------------------
		if(retu.exists)
		{
			retu.click(goContenPN);
		}
		prev.click(goContenPN);
		next.click(goContenPN);
	};

	goContent=function(u){
		if(__.s(u))
			url = u;
		else
		{
			el = _(this);
			url = el.attr("data-url");
			H1 = el.content();
		}
		url = "sections/" + url;
		__.send(
			{
				url:url,
				method:"get",
				to:"#SectionsСontent",
				func:goRainbow
			}
		);
		__.scroll(0);
	};

	changeThema = function()
	{
		href="themes/css/"+this.value+".css";
		_("#color-shema").attr("href", href);

	};
	thema=_("#thema");
	thema.create(getThemes());
	thema.change(changeThema);
	__.send(
	{
		url:"index.json",
		method:"get",
		responseType:"json",
		func:createContent
	}
	);
	bs =_("#block-setting");
	bsd =_("#block-setting div");
	ssh =_("#setting");
	dur="slow";
	bsd.hide(dur);
	bsd.attr("data-h","100px");
	bs.css("background-color:transparent");
	function showSetting(){
		bsd.show(dur);
		bs.class("RB BS",true);
		bs.css("background-color:white");
		ssh.class("fa-times",true);
		ssh.class("fa-cog",false);
	};

	function hideSetting(){
		bsd.hide(dur);
		bs.class("RB BS",false);
		bs.css("background-color:transparent");
		ssh.class("fa-cog",true);
		ssh.class("fa-times",false);
	};

	ssh.click(function(){
		if(bsd.ishide())
		{
			showSetting();
		}
		else
		{
			hideSetting();
		}
	});
	ssh.mouseenter(showSetting);

	getRandomString = function(ln) {
	    var ch = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
	    var result = '';
	    chL = ch.length;
	    for ( var i = 0; i < ln; i++ ) {
	        result += ch.charAt(Math.floor(Math.random() * chL));
	    }
	    return result;
	};

	createCaptcha = function(ln){
		if(!__.n(ln)) ln=6;
		captcha =_("#captcha");
		captcha.content("");
		captcha.create(1,{tag:"canvas",id:"canv",width:130, height:50});
		canv = _("#canv");
		var ctx = canv.d.getContext("2d");
		ctx.fillStyle = '#f1f1f1';
  		ctx.fillRect(0,0,130,50);
		captchaCode = getRandomString(ln);
		ctx.font = "35px HoneyScriptCYR-Light";
		ctx.strokeText(captchaCode, 10, 30);
		code.value("");
	};

	validationForm = function(){
		err = false;
		errS="background-color:#FFCCD9";
		re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if(!re.test(String(email.value()).toLowerCase()))
        {
        	err = true;
        	email.css(errS);
        }

		if(!__.ins("\\S+",message.value()))
        {
        	err = true;
        	message.css(errS);
        }

        if((code.value()).toLowerCase() != captchaCode.toLowerCase())
        {
        	err = true;
        	createCaptcha();
        	code.value("");
        	code.css(errS);
        }
        return !err;
	};

	setWhiteBg = function(e){
		_(e.target).css("background-color:white");
	};

	sendForm = function(e){
		e.preventDefault();
		res = validationForm();
		if(res)
		{
			__.send({
			url:"Contact.php?senden=1",
			method:"post",
			to:"#modal1",
			func:(rsp, to)=>{
				_m = _(to);
				_m.modal(rsp);
				_m.modal(5)
			}
		});
		}
	};

	goLfooterFunc = function(rsp, to, req){
		_(to).modal(rsp);
		if(__.ins("Contact", req))
		{
			email = _("input[name='email']");
			message = _("textarea[name='message']");
			code = _("input[name='code']");
			createCaptcha();
			_(".contact a").click(createCaptcha);
			contactForm = _(".contact form");
			_(contactForm.d.elements).each((elm,ind)=>{
				if(ind<5) elm.click(setWhiteBg);
			});
			contactForm.submit(sendForm);
		}
	};

	goLfooter = function(){
		link = _(this).content();
		url = footerLinks[link];
		__.send({
			url:url,
			method:"get",
			to:"#modal1",
			func:goLfooterFunc
		});
	};
};
__.ready(start);

function themeHref(light_theme){
//defult light or dark theme
	theme=(light_theme)?"github":"obsidian";
	return "themes/css/"+theme+".css";
};
```  
## 5.1.4 index.css  
  
```css  
@font-face {
	font-family: 'HoneyScriptCYR-Light';		
	src: url(fonts/HoneyScriptCYR-Light.ttf);
}

@font-face {
	font-family: 'Bebas Neue Book';		
	src: url(fonts/Bebas Neue Book.ttf);
}
 
 html {
	 text-size-adjust: none;	
	-moz-text-size-adjust: none;
	-webkit-text-size-adjust: none;	
	-ms-text-size-adjust: none;
 }
 .FCR{color:#FFCCD9}
 .FCW{color:#FFFFFF}
 .FCG{color:#AAA}
 
 .FS20{font-size: 18px !important}
 .FS25{font-size: 25px !important}
 .FS12{font-size: 12px !important;font-stretch: extra-condensed}
 .FS14{font-size: 14px !important;font-stretch: extra-condensed}
 .FWB{font-weight:bold}
 .FWN{font-weight:normal}
 
 .head1{
        font-family: 'HoneyScriptCYR-Light', serif;
        font-size: 45px;
		text-shadow: 4px 4px 4px #aaa;
		line-height: 1.25;
		padding:0 2% 0 3%
      }
 .head2{margin-left:70px;font-size:30px}

 body,div,.quote,button,.abutton,.prev,.next, input, textarea{
		font-family: "Bebas Neue Book", Helvetica, sans-serif;
		font-weight: 400;
		line-height: 1.5;
		font-size: 1em;
		color: #aaa;
	}

button,.abutton, input, textarea, canvas {border-radius:5px;border:1px solid #aaa}
button,.abutton {cursor:pointer}
button:hover,.abutton:hover{background-color:#B4FFFF}
a:not([href]){text-decoration:underline;cursor:pointer;color:blau !important}
a{cursor:pointer}
.abutton{
	text-decoration:none;
	padding:5 0 5 0;
	display:table-cell;
	width:60px;
	text-align:center;
	background-color:#f1f1f1}

#Sections,#SectionsСontent{float:left;font-size:18px}
#Sections{
	width:250px;
	height:auto;
	background-color:#FCFCFC;
	padding:0 0 40px 10px
	}
#Sections span{
	margin-left:10px;
	display:block;
	cursor:pointer;
	padding:3px;
	font-weight:normal
	}
#Sections div{margin-top:10px; margin-bottom:5px;font-weight:bold}
#Sections .sub-ind{margin-left:20px;}
#SectionsСontent{width: calc(90% - 270px);height:auto;padding:0 0 40px 40px;}
#SectionsСontent iframe{width: 100%; min-height: 250px;}
#SectionsСontent h1{font-size:24px;font-weight:normal;padding:0;margin:0}
#SectionsСontent div{white-space: pre;padding:10px 0 10px 0;overflow:auto}
#SectionsСontent button + div{margin-top:20px}
#SectionsСontent pre{border-radius:5px;padding:20px;overflow:auto}
#SectionsСontent pre code{font-size:1.2em !important;overflow:auto}
#SectionsСontent i{font-style: normal !important;color:blue}
#block-setting{
	position:fixed;
	right:20px;
	top:10px;
	min-width:60px;
	height:auto;
	text-align:right;
	padding:15px 15px 20px 15px;
	background-color:white;
	z-index:10;
}
#block-setting div{text-align:left}
#adj,#setting{cursor:pointer;font-size:20px;}
#adj:hover,#setting:hover,a:hover,#Sections span:hover{color:#FFCCD9};
#sun-cir{padding:0 0 0 5}

.prvnext{
height:40px;
position:relative;
display: table;
width:100%;
table-layout: auto;
}
.row{display: table-row}
.row div{
display: table-cell;
text-align:center;
width:33%;
}

.row div p{
width:30%;
cursor:pointer;
display: table-cell;
}

.prev{text-align:left}
.return{text-align:center;}
.next{text-align:right}
.row div p:hover{color:#FFCCD9}
.row i{color:#aaa !important}

.footer{
	clear: both;
	position: relative;
	padding:10 0 0 0;
	border-top:1px dotted #D1D1D1;
	text-align:center
}

.footer span{margin:0 30 0 0}
.footer a,.link{cursor:pointer;margin-left:10px;text-decoration:none;color:#AAA}

#settig{position:fixed;right:20px;top:20px;cursor: pointer}
#tbw{cursor:pointer;font-size:20px;}
#tbw:hover,#settig:hover,.footer a:hover, .link:hover{color:#FFCCD9}

.RB{
	border: 1px solid #85A0C9;
	border-radius: 5px;
	-webkit-border-radius:5px;
	-moz-border-radius: 5px
}
.BS{box-shadow:3px 3px 3px rgba(0, 0, 0, 0.5)}


.imprint{
	width: 640px;
	padding:20 0 40 0;
	height:auto
}
.imprint br{clear:both}
.imprint h1, .contact h1, .policy h1{font-size:24px;font-weight:normal;padding:0 0 10 0;margin:0}
.imprint div, .imprint p{float:left;width: 300px;padding:2 5 2 5;margin:0}
.imprint p{text-align:right}
.imprint div{text-align:left}

.contact,.policy{
	padding:0 20 0 20;
	height:auto
}
.contact div{padding:5 0 5 0;display:block}
.contact input,.contact textarea{width: 400px; padding:0 5 0 5}
.contact textarea{height:200px;margin:5 0 20 0}
.contact button{margin:15 0 0 0}
.contact a{color:#aaa;text-decoration:none}
.contact a:hover{color:#FFCCD9;text-decoration:none}

.policy	{width:800px;padding:0 20 10 20}
.policy p{text-align:center;padding: 0 0 10 0;margin:0}
.policy h2{font-size:1.2em;font-weight:normal;text-align:left;padding:10 0 15 0;margin:0}
.policy div{padding:0 0 10 0;margin:0;text-align:justify}

#captcha{text-align:left;padding:0 0 0 0}
#captcha + td{padding:0 10 0 10}
#captcha + td + td input{width:130px;padding:0 6 0 6}
canvas{
  pointer-events:none;
}
```  

## 5.2 Files from examples
## 5.2.1 GetResponse.php


```php

echo file_get_contents('php://input');

```

  
  
## 5.2.2 ViewResponse.php


```php
/*
This code uses the parse_raw_http_request function from github.
https://gist.github.com/matriphe/9b869c982c2af0244ba5b175fd5b7250
*/

echo "REQUEST_METHOD: ".$_SERVER['REQUEST_METHOD']."<br>";
if($_SERVER['REQUEST_METHOD'] === "PUT")
{
  $_PUT=[];
  parse_raw_http_request($_PUT);
  echo "\$_PUT:<br>";
  print_r($_PUT);
}
else if($_SERVER['REQUEST_METHOD'] === "POST")
{
  echo "\$_POST:<br>";
  print_r($_POST);
}
echo "<br>\$_GET:<br>";
print_r($_GET);

//--------------------------------------------------
function parse_raw_http_request(array &$a_data)
{
  // read incoming data
  $input = file_get_contents('php://input');

  // grab multipart boundary from content type header
  preg_match('/boundary=(.*)$/', $_SERVER['CONTENT_TYPE'], $matches);
  $boundary = $matches[1];

  // split content by boundary and get rid of last -- element
  $a_blocks = preg_split("/-+$boundary/", $input);
  array_pop($a_blocks);

  // loop data blocks
  foreach ($a_blocks as $id => $block)
  {
    if (empty($block))
      continue;

    /*
    you'll have to var_dump $block to understand this and maybe replace
     \n or \r with a visibile char
    */
    // parse uploaded files
    if (strpos($block, 'application/octet-stream') !== FALSE)
    {
      /*
      match "name", then everything after "stream" (optional) except for
      prepending newlines
      */
      preg_match("/name=\"([^\"]*)\".*stream[\n|\r]+([^\n\r].*)?$/s",
       $block, $matches);
    }
    // parse all other fields
    else
    {
      // match "name" and optional value in between newline sequences
      preg_match('/name=\"([^\"]*)\"[\n|\r]+([^\n\r].*)?\r$/s',
       $block, $matches);
    }
    $a_data[$matches[1]] = $matches[2];
  }
}
```
  
## 5.2.3 xml_document.xml  
  
```xml  
<?xml version="1.0" encoding="UTF-8"?>
<note>
  <from>Oliver</from>
  <to>Lucas</to>
  <message>Hello!</message>
</note>  
```  
## 5.2.4 html_document.html  
  
```html  
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Test</title>
</head>
<body>
<div>Test</div>
</body>
</html>  
```  
## 5.2.5 content.css  
  
```css  
button{width:500px;
margin:0 0 10 0;
text-align:left;
padding:5;
height:30px;
cursor:pointer;
overflow:hidden}
button:hover{height:auto}
button > div{padding-bottom:10px}
button p{white-space: pre;margin-block:0}
.rb{border:1px solid #aaa;border-radius:5px;padding:5;min-height:20px}
.cont{position:fixed;top:10;right:20;width:280px;padding-bottom:20px}
.cr{color:Violet}
.f16{font-size:16px}
#contT{border:0;width:100%;height:220px}
select,ul,ol{float:left; margin:0 0 40 0}
li{margin:0 0 0 30}
a,img,span,.iia, select{margin:0 20 0 0}
select{padding:1 0 1 0}
.iia{width:100px}

#html div{border:1px dotted blue;width:400px;margin:10 0 10 0}
label{display:block;margin-bottom:10px}
label input{margin-left:5px}
#modal_content button{width:50px;text-align:center;margin:10 5 0 5}
#modal_content {width:100%;text-align:center}  
```  
## 5.2.6 content.json  
  
```json  
{
"0":"Fruits",
"1":"Apple",
"2":"Orange",
"3":"Grape"
}  
```  
## 5.2.7 content.txt  
  
```html  
<p><b>send</b> method sends XMLHttpRequest: <br>
<b>sections/content.txt</b><p>  
```  
## 5.3 CSS
## 5.3.1 CSS for scroll method  
     
See above  *scroll* method.

```html
<style>
#scrollup {
	position: fixed;
	opacity: 0.5;
	background: rgba(170, 170, 170, 0.6);
	caret-color: transparent;
	caret-color: rgba(170, 170, 170, 0.6);
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	bottom: 20px;
	left:20px;
	display: none;
	width:40px;
	height:40px;
	cursor: pointer;
	z-index:9999;	
}
#scrollup .arrow{
	font-family:arial;
	font-weight:normal;
	line-height:normal;
	font-size:30px;
	position:fixed;
	font-weight:normal;
	margin-left:14px;
	margin-top:-2px;
	transform: rotate(90deg);
	color:#FFFFFF;
	caret-color: transparent;
	caret-color: rgba(170, 170, 170, 0.6);
}

#scrollup:hover{
	opacity:0.8;
	filter:alpha(opacity=80);
}
</style>
```

  
## 5.3.2 CSS for modal method  
     
See above *modal* method

```html
<style>
.modal{
	position:absolute;
	z-index:1;
	top:0;
	left:0;
	background-color: #ffffff;
	border: 1px solid #85A0C9;
	border-radius: 5px;
	box-shadow:3px 3px 3px rgba(0, 0, 0, 0.5);
}

.modal_content{
	display:table-cell;
	text-align:center;
	padding:40 20 20 20;
	font-size:14pt;
}

.modal_close{
	color:#aaa;
	cursor:pointer;
	font-size:50px;
	position:absolute;
	right:0;
	top:0;
	margin:-0.2em 0.3em 0 0;
	caret-color:transparent;
	width: 20px;
}

.modal_close:hover
{color:#FFCCD9;caret-color:transparent;}

.modal_gray_layer{
	width:100%;
	height:100%;
	position:absolute;
	top:0px;
	left:0px;
	background: rgba(0, 0, 0, 0.1);
	display:none;
}
</style>
```

  
## 5.4 Predefined variables  
     
The following variables are predefined in the CompactDOM library:  

```
_dno = "none";
_dbl = "block";
_dtc = "table-cell";
_din = "inline";
_dib = "inline-block";
_pc  = "center";
_pcx = "center-x";
_pcy = "center-x";
_und = undefined;
```
  
## 5.5 CompactDOM projects
## 5.5.1 CaesarCipher.js  
     


```html
<script>
/*
	Demo PHP class CaesarCipher
	Version: 1.2.3, 2021-07-30
	Author: Vladimir Kheifets (kheifets.vladimir@online.de)
	Copyright (c) 2021 Vladimir Kheifets All Rights Reserved
	
	Java Script library CompactDOM
	Version: 2.1, 2022-01-31	
	Author: Vladimir Kheifets (kheifets.vladimir@online.de)
	Copyright (c) 2022 Vladimir Kheifets All Rights Reserved
*/

start = function()
{
	ViewBlock = function (){
		vblId = this.id;
		blId = vblId.substr(1);
		bl = _("#"+blId);
		sbl = _("#s"+blId);
		if(bl.ishide())
		{
			bl.show();
			sbl.content("▲");
			_("textarea").resize(10);
			Ytarget = _(this).position().top;
 			__.scroll(Ytarget);
		}
		else
		{
			bl.hide();
			sbl.content("▼");
		}
	}

	SubmitForm = function() {
		id=this.id;
		if(__.ins("alphabet", id))
		{
			_("input").checked(0);
			_("#key").selected(0);
		}
		__.send();
	};

	SendtoModal = function(){
		id=this.id;
		get = "_"+id+"=1";
		url=__.url(get);
		attr={url:url,to:"#modal",func:viewModal};
		__.send(attr);
	};

	viewModal = function(rsp, to, req){
		_(to).modal(rsp);
		if(__.ins("_la",req))
		{
			setLa = function(){
				la = this.id.substr(3);
				_("form").attr("action", "?la="+la);
				__.send();
			}
			_("span[id^='la_']").click(setLa);
		}
		else if(__.ins("_cookie=",req))
		{
			setCookie = function(e){
				attr={url:"index.php?_cookie_p=1",to:"#cookie"};
				__.send(attr);
				__.modal(0);
			}
			_("#cookie_p").click(setCookie);
		}
		else if(__.ins("_demo2",req))
		{
			ffc=_(".ffc");
			ffc.attr("readonly",true);
			ffc.resize(10);
			inp_text=_("#inp_text");
			inp_text.attr("readonly",true);
			_(to).position(__.pc);
		}
	};

	_("#alphabet").change(SubmitForm);
	_("#key").change(SubmitForm);
	_("input[type='radio']").change(SubmitForm);
	_("div[id^='vbl']").click(ViewBlock);
	_("div[id^='bl']").each(function(el){el.hide();});
	_("#cookie").click(SendtoModal);
	_("#la").click(SendtoModal);
	_("#demo2").click(SendtoModal);
	_("textarea").attribute("readonly",true);
	_(".content textarea").resize(10);

	ch_resize = function(){_(".content textarea").resize(10)};
	ch_orient = function(){__.reload()};
	__.change(ch_resize, ch_orient);
	__.modal();
	__.scroll();
}
__.ready(start);
</script>
```

  
## 5.5.2 timeCalculator.js  
     


```html
<script>
/*
	Demo PHP class CaesarCipher
	Version: 1.2, 2021-04-29
	Author: Vladimir Kheifets (kheifets.vladimir@online.de)
	Copyright (c) 2021 Vladimir Kheifets All Rights Reserved
	
	Java Script library CompactDOM
	Version: 2.1, 2022-01-31	
	Author: Vladimir Kheifets (kheifets.vladimir@online.de)
	Copyright (c) 2022 Vladimir Kheifets All Rights Reserved
*/

viewCities = function (Cities,id){
	if(Cities && id)
	{			
		Cities.unshift(optCities);
		optCreat={};		
		Cities.forEach(function(item) {
			txt=__.ins("_",item," ");
			optCreat[item]=txt;	
		});		
		var elCities = _(id);
		elCities.content("");
		elCities.create(optCreat);
		elCities.lock(1, 0);
		elCities.css("background-color:#FFFFFF");
	}
	else
	{			
		evEl = _(this);		
		id = this.id.replace("Continent", "City");		
		Continent = evEl.value();				
		if(evEl.selected()>0)
		{
			url = "?Continent="+Continent+"&idCity="+id;
			par={
				url:url,
				to:"#"+id,
				func:viewCities,
				method:"get",
				responseType:"json"
			};			
			__.send(par);
		}
		else
		{
			var elCities = _("#"+id);
			elCities.content("");
			elCities.create([optCities]);
			elCities.lock(1,1);
			elCities.css("background-color:#F1F1F1");
		}
	}
};
//-------------------------------------------------------
setCookie = function(){
	cookieInn =_("#cookie");
	txt = __.ins("se=",document.cookie)?"":"&#10004 ";
	txt += "<span>Cookie</span>&#9660;"
	cookieInn.content(txt);
	url = __.url("_cookie_p=1");
	par={
		url:url,
		method:"post"
	};
	__.send(par);
	__.modal(0);
}
//-------------------------------------------------------
goCalk = function (){
__.scroll(0);
//valid form-------------------------
msg=[];
preff.forEach(function(item) {
	AllSel = _("#"+item+"Time select").El;
	buf=[];
	msg[item]="";
	[0,1,2,3].forEach(function(i){
		if(_(AllSel[i]).selected()==0)	buf.push(err_Arr[i]);
	});
	if(buf[0])
	{
		msg[item]=err_Arr['unsel']+buf.join(', ')+". ";
	}
	FromInd=_(AllSel[2]).selected();
	ToInd=_(AllSel[3]).selected();
	if(FromInd>0 && ToInd>0 && FromInd >= ToInd)
		msg[item]+=err_Arr['time'];
	if(msg[item])	msg[item]=	err_Arr[item]+" "+msg[item]
});
if(msg['my'] || msg['client'])
{
	msg_text = err_Arr['msg1'] +"<br>";
	if(msg['my']) msg_text = msg_text+msg['my'];
	if(msg['my'] && msg['client']) msg_text += "<br>";
	if(msg['client']) msg_text+=msg['client'];	
	__.modal(msg_text);
	return;
}
//valid OK -------------------------------------------
//
    url=__.url("go=1");
	par={
		url:url,
		method:"post",
		to:"#modal",
		func:viewModal
	};
	__.send(par);
};

viewModal = function(rsp, to, req){	
	_(to).modal(rsp);
	if(__.ins("_la",req))
	{
		setLa = function(){			
			la = this.id.substr(3);			
			_("form").attr({action:"?la="+la, method:"post"});
			__.send();
		}
		_("span[id^='la_']").click(setLa);
	}
	else
	{
		_("#cookie_p").click(setCookie);
	}
};
//---------------------------------------------------
goSelector = function (){		
	id = this.id;	
	get="_"+id+"=1";	
	url = __.url(get);	
	par={
		url:url,
		method:"post",
		to:"#modal",
		func:viewModal
	};
	__.send(par);
};
//-------------------------------------------------------
myContinent = _("#myContinent");
clientContinent = _("#clientContinent");
preff=["my","client"];
myCity = _("#myCity");
clientCity = _("#clientCity");
if(myContinent.selected()==0){
	myCity.lock(1,1);	
	myCity.css("background-color:#F1F1F1");
}
if(clientContinent.selected()==0)
{
	clientCity.lock(1,1);
	clientCity.css("background-color:#F1F1F1");
}
myContinent.change(viewCities);
clientContinent.change(viewCities);
_("button").click(goCalk);
_("#la").click(goSelector);
_("#cookie").click(goSelector);
__.scroll();
__.modal();
</script>
```