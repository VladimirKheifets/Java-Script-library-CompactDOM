Java Script library CompactDOM 

Version: 1.2.1, 2021-03-29

Author: Vladimir Kheifets (vladimir.kheifets@online.de)	
Copyright (c) 2021 Vladimir Kheifets All Rights Reserved

	
The library helps to access the DOM elements,provides the ability 
to access the attributes and content of elements and manipulate elements.

Browser support: 
Chrome 4.0, Internet Explorer 9.0, Edge,Firefox 3.5, Safari 3.2, Opera 10.0

Size of the current version (file CompactDOM.min.js) 6.9Kb

Demo:
https://www.alto-booking.com/demo/github/CompactDOM/

After loading the library, the following syntax construction (Backus-Naur-Form) becomes available:

_(<selector>).<method>([<parameter>[, <parameter>[, ... <parameter>]]])[.<property>];

<selector> :: = <null> | <object element DOM> | <string CSS Selector>

<method> :: = "attribute"|"change"|"checked"|"class"|"click"|"content"|"display"|
"keydown"|"keyup"|"load"|"modal"|"position"|"scroll"|"selected"|"send"|"style"|"resize|"value"

<parameter> :: = <null> | <number> | <string>
<property> :: = "el"|"top"|"left"|"right"|"bottom"|"width"|"height"
		
1. Event handler methods. 

1.1 Method - event. 

_(<selector>).event(<string event type> , <handler function>);

Example, element id="test1",  event type "click":

_("#test1").event("click", function(){console.log("click")});

or

h_function = function(){
................
................
};

_("#test1").event("click", h_function);

1.1.1 Methods -  click, change, keydown, keyup, load.
		
_(<selector>|null).load(<handler function>);
_(<selector>).click(<handler function>);
_(<selector>).change(<handler function>);
_(<selector>).keydown.(<handler function>);
_(<selector>).keydown.(<handler function>);
_(<selector>).keyup(<handler function>);

If for the "load" method <selector> is not defined, then the default <selector> is "window".
Example:

_().load(h_function);
//Equivalent to:
_(window).load(h_function);
 

Example, element id="test1":

_("#test1").click(function(){console.log("click")});
or
_("#test1").click(h_function);

Attention!
If <selector> defines a DOM element - NodeList (DOMElement.length> 0),
then all methods set up event handlers for all elements of the NodeList. 

Example:

html:
<input type="radio" value=1>
<input type="radio" value=2>
<input type="radio" value=3>

js CompactDOM:

_("input[type='radio']").change(function(e){console.log(e.target.value)});

1.1.2 Methods - "scroll".

a. Only handler events "scroll"

_(<selector>|null).scroll(<handler function>|null);

If <selector> is not defined, then for the "scroll" method the default <selector> is "document".

Example:

_().scroll(function(){console.log("Now you have moved the scroll"));
or 
_().scroll(h_function));

_().scroll(h_function);
//Equivalent to:
_(document).load(h_function);

b. Create create element scrollup and scroll events handler.

If the parameter is not specified, then the method creates an element 
to control the scrolling.
The method handles the scroll event and this element becomes visible 
if the scrolling height exceeds the browser height.
The method handles the click event for this element and sets scroll Y to 0. 
If <selector> is not defined, then the default <selector> is "#scrollup" (id="scrollup").
See CSS See below in Append 2.

_(<selector>|null).scroll(null);

Example:

_().scroll();

html:

<div id="scrollup"  title="Top">
<div class="arrow">&#10094;</div>
</div>


2. Methods for getting and setting properties.

2.1 Method - attribute *.

*hereinafter referred to as not allowed for <selector> defines 
a DOM element - NodeList (DOMElement.length>0).
 
_(<selector>).attribute(<string property name> , <string property value|null>);


If both parameters are defined, then sets the specified value for the property, 
else If only the first parameter is defined, then returns the value of this parameter.
Example:
html:
<input id="inp1" type="text" value=1>

js CompactDOM:

_("#inp1").attribute("readonly", true);

pr =_("#inp1").attribute("readonly"); 
console.log(pr); //true


2.2 Methods - class *. 
 
_(<selector>).class(<string class name|null>);


If parameter is defined, then sets the specified name for the class, 
else returns class name.

Example:

html:

<style>
.inp{color:black}
.inp_error{color:red}
</style>

<input id="inp1" type="text" class="cl_input" value=1>

js CompactDOM:

_("#inp1").class("inp_error");

cl =_("#inp1").class(); 
console.log(cl); //inp_error

2.3 Methods - style *.
 
_(<selector>).class( <string style>|null>);
<style> ::= <string style property >[;<string style property >[; ... <string style property >]]]
<style property> ::= <string property name>:<string property value>

If parameter is defined, then sets the specified style, 
else returns style.
If only one style property is defined,
then the other previously defined properties are not changed,
but only this one property is added.
If several style properties are defined,  then the previously
defined properties are replaced with new properties. 


Example:

html:

<input id="inp1" style="font-size:16px" value="100">

js CompactDOM:

_("#inp1").style("color:red");
st =_("#inp1").style(); 
console.log(st); //font-size:16px;color:red

_("#inp1").style("color:red;font-size:12px");
st =_("#inp1").style(); 
console.log(st); //color:red;font-size:12px

2.4 Methods - value *.

_(<selector>).value(<string|number|null value>);

If parameter is defined, then sets the specified value for the element, 
else returns element value.

Example:

html:

<input id="inp1" style="font-size:16px" value="100">

js CompactDOM:

val =_("#inp1").value(); 
console.log(val); //100

_("#inp1").value(200);
val =_("#inp1").value(); 
console.log(val); //200


2.6 Method - checked *.

This method is applicable only for radiobutton and checkbox elements.

_(<selector>).checked(<string value|number index of elelement|true out index|null>);
 
If parameter is defined, then sets cheked = true for element with 
specified value or index of nodeList, else if parametr is true 
returns index of nodeList, else returns element value.

Example:

html:

<div id="container_rb"> 
<input type="radio" checked value="A">
<input type="radio" value="B">
<input type="radio" value="C">
</div>

<input id="one_rb" type="radio" value=5>

<div id="container_cb"> 
<input type="checkbox" checked value="A">
<input type="checkbox" value="B">
<input type="checkbox" value="C">
</div>

js CompactDOM:

//------------------------------
//radiobutton
container_rb =_("#container_rb input");
ch = container_rb.checked(); 
console.log(ch);//A 

container_rb.checked("B");// string parametr - set value="B"
ch = container_rb.checked(); 
console.log(ch);//B 
ch = container_rb.checked(true); //parametr true get index
console.log(ch); //1 

container_rb.checked(2);// number parametr - set index=2
ch = container_rb.checked(); 
console.log(ch);// C 
//--------------------------------------
one_rb  =_("#one_rb");
one_rb.checked("5"); //string parametr - set value="5"
ch = one_rb.checked(); 
console.log(ch);//5 
//--------------------------------------
//checkbox
container_cb =_("#container_cb input");
ch =container_cb.checked(); 
console.log(ch); //A 

container_cb.checked("B");// string parametr - set value="B"
ch = container_cb.checked(); 
console.log(ch); // B 

container_cb.checked(2);// number parametr - set index=2
ch = container_cb.checked(); 
console.log(ch); // C
//--------------------------------------

2.7 Method - selected.

This method is applicable only for select elements.

_(<selector>).selected(<string value|number index of option|true out index|null>);
 
If parameter is defined, then sets selected = true for option with 
specified value or index of option, else if parameter is true 
returns index of option, else returns element value.

Example:

html:

<select id="s" >
<option>A</option>
<option>B</option>
<option>C</option>
</select>

js CompactDOM:

s=_("#s");
s.selected("B"); // string parametr - set value="B"
console.log(s.selected()); // B
console.log(s.selected(true)); // 1
s.selected(2);// number parametr - set index=2
console.log(s.selected()); // C
console.log(s.selected(true)); // 2

2.7 Method - position *.

The method allows you to get the coordinates and sizes of elements and position them. 

_(<selector>).position(<string position|null>,<null|string scc propertis>);

<string position> :: = "center" | "center-x" | "center-y"
<string scc propertis> :: = <string property >[;<string property >[; ... <string property >]]]

The first parameter defines the option for positioning the element 
within the parent element - container or document.
The following options are allowed:
"center" - element is centered horizontally and vertically;
"center-x" - element is horizontally centered;
"center-y" - element is centered vertically. 

The second parameter is intended for setting positioning using of the element css-properties, 
Example: margin-top, margin-left etc.

If both parameters are not specified, then the method returns 
the following properties: top, left, right, bottom, width, height in pixels 
(The current scrolling coordinates are taken into account).

Example:

html: 

<style>
.b1{border:1px solid #0000FF}
.b2{border:1px solid #00FFFF}
.b3{border:1px solid #000000}
.modal{position:absolute;width:150px; height:150px}
.x2{position:relative;width:50%; height:50%}
.x3{position:relative;width:50%; height:50%;calor:black}
</style>


<div id="demo2" class="x2 b2">
	<div id="demo3" class="x3 b3"></div>
</div>

<div id="modal" class="modal b1"></div>

js CompactDOM:

modal=_("#modal");
console.log(modal.position()); // Object { top: 1526, left: 8, right: 163, bottom: 1681, width: 155, height: 155 }
modal.position("center");
modal.position("center","margin-top:20px");

_("#demo2").position("center-x","margin-top:20px");
_("#demo3").position("center","margin-top:20px;margin-left:20px");
_("#demo3").position("center-y");


2.8 Method - content *

The method allows you to get the content of elements and modify it. 

_(<selector>).content(<string content of element|null>);

If parameter is defined, then sets the specified content for the element, 
else returns element content.

Example:

html:

<div id="demo" >AAA<p>PPP</p></div>

js CompactDOM:

demo =_("#demo");
console.log(demo.content());//AAA<p>PPP</p>
p =_("#demo > p");
console.log(p.content()); //PPP
p.content("TTT");
console.log(p.content()); //TTT
demo.content("XXX");
console.log(demo.content()); //XXX

2.9 Method - create.

This Method allows you to create elements within parent elements,
as well as padding elements before or after an element with 
a specific selector. 

_(<selector>).create(< object|array|number|string data of element> , <object|null attribute of element>);

First parameter:
a. array
<data of element> ::= [<value or text>,...,<value or text>]
<value or text> :: = <string|number>

b. object
<  data of element> :: = {<value : text>,...,<value : text>}
<value of object data>:: = <string|number>
<text of object data>:: = <string|number>

c. number 
The number of elements with the same attributes to be created.

d. string
It is allowed to be used in cases when data is determined for only one element. 

Second parameter:

<object attribute of element> :: {<propery name: propery value>,...,<propery name: propery value>}

Two optional pseudo properties are allowed: "add" and "tag".
Other properties have the same names as the standard HTML tag attributes.
 
Property "add" can take on the values "befor" or "after".
If this property is not set, then the created elements are padded
inside the parent element, otherwise before or after the element 
specified by the selector.

In all cases except those described above, it is mandatory to define the "tag" 
property and the "type" property for those elements for which the "type" 
attribute is required. 

If the properties "id" and "name" are set, then when creating a group of elements,
for each element the uniqueness of the values of these attributes is provided
by the addition of the ordinal number of the element in the group. 
Example: 
If specified value of the property {...id:"inp"...}, then for each of the elements 
takes the uniqueness values "inp1", "inp2", ...  

2.9.1 Create "option", "ol" or "ul" elements.

If the second parameter is not specified, 
then the types of the created elements are determined 
by default depending on the type of the parent element.
"Select" element will be filled with "option" element, 
"ol" or "ul" element are filled with "li" elemets.

Example:

html:
<select id="c" ></select> 
<ul id="ul"></ul>
<ol id="ol"></ol>

js CompactDOM:

c=_("#c");
console.log(c.content()); //blank
data=[10,22,30];
c.create(data);
console.log(c.content()); 
/*
<option>10</option>
<option>22</option>
<option>30</option>
*/

data={a:"as",b:"bs",c:"cs"};
c.create(data);
console.log(c.content()); 
/*
<option>10</option>
<option>22</option>
<option>30</option>
<option value="a">as</option>
<option value="b">bs</option>
<option value="c">cs</option>
*/
c.content("");
c=_("#c");
data=[100,200,300];
c.create(data);
console.log(c.content());
/*
<option>100</option>
<option>200</option>
<option>300</option>
*/

ul=_("#ul");
ol=_("#ol");
data=["ul as","ul bs","ul cs"];
ul.create(data);
console.log(ul.content());
/*
<li>ul as</li>
<li>ul bs</li>
<li>ul cs</li>
*/

data=["ol as","ol bs","ol cs"];

ol.create(data,{class:"olli"});
console.log(ol.content());

/*
<li class="olli">ol as</li>
<li class="olli">ol bs</li>
<li class="olli">ol cs</li>
*/

2.9.2 Create "input" elements.


First parameter:
< object data of element> :: = {<value : text>,...,<value : text>}
<value> ::= <value of element>
<text> ::= <text of label>

Second parameter:
<objekt attribute of element> :: = { add:text, tag:text, type:text, id:text, name:text, class:text}

Example:

html:

<div id="demo"></div>

<label for="inp1">
<input id="inp1" value="100">
</lebel>

js CompactDOM:

demo=_("demo");

/*create 3 elements input type:"radio" in container <div> id=demo */
data={a:"as",b:"bs",c:"cs"};
attribute={type:"radio", id:"aa", name:"aa", class:"cl"}
demo.create(data, attribute);
console.log(demo.content());
/*
<label for="aa1"><input type="radio" value="a" id="aa1" name="aa1" class="cl">as</label>
<label for="aa2"><input type="radio" value="b" id="aa2" name="aa2" class="cl">bs</label>
<label for="aa3"><input type="radio" value="c" id="aa3" name="aa3" class="cl">cs</label>
*/
demo.content(""); // delele conten  in container <div> id=demo

/* create 3 elements input type:"text" in container <div> id=demo */

data={a:"as: ",b:"bs: ",c:"cs: "};
options={type:"text", id:"aa", name:"aa", class:"cl"}
demo.create(data, attribute);
console.log(demo.content());
/*
<label for="aa1">as: <input type="text" id="aa1" name="aa1" class="cl"></label>
<label for="aa2">bs: <input type="text" id="aa2" name="aa2" class="cl"></label>
<label for="aa3">cs: <input type="text" id="aa3" name="aa3" class="cl"></label>
*/

/* create 3 elements input type:"text" befor element label[for=inp1] */

data={"a b c":"label A: ",b:"label B: ",c:"Label C: "};
attribute={add:"befor",type:"text", id:"b1", name:"b1", class:"cl"}
inp=_("label[for=inp1]"); //element label for=inp1
inp.create(data,attribute);

/* 
<label for="b11">label A:
<input value="a b c" type="text" id="b11" name="b11>
</label>
<label for="b12">label B:
<input value="b" type="text" id="b12" name="b12">
</label>
<label for="b13">Label C:
<input value="c" type="text" id="b13" name="b13">
</label>

<label for="inp1">
<input id="inp1" value="100" />
</label>
*/

/* create 3 elements input type:"text" after element label[for=inp1] */

inp=_("label[for=inp1]"); //element label for=inp1

data={"a b c":"label A: ", b:"label B: ", c:"Label C: "};
attribute={add:"after",type:"text", id:"a1", name:"a1", class:"cl"}
inp.create(data,attribute);

/*
<label for="inp1">
<input id="inp1" value="100" />
</label>

<label for="a11">label A:
<input value="a b c" type="text" id="a11" name="a11" />
</label>
<label for="a12">label B:
<input value="b" type="text" id="a12" name="a12" />
</label>
<label for="a13">Label C:
<input value="c" type="text" id="a13" name="a13" />
</label>
*/

attribute={add:"after",tag:"input", type:"submit", id:"x", class:"b2" }
inp.create("login",attribute);

/*
<label for="inp1">
<input id="inp1" value="100" />
</label>

<input value="login" type="submit" id="x" class="b2">
*/

2.9.3 Create "a" element.

First parameter:
<object data of element> ::= {<href:text>,...,<href:text>}

Example:

html:

<label for="inp1">
<input id="inp1" value="100">
</lebel>

js CompactDOM:

data={"aaa.php":"aaa","ccc.php":"ccc","ddd.php":"ddd"}
attribute={add:"after",tag:"a", id:"aaa", class:"b2", target:"_blank" }
inp.create(data,attribute);

/*
<label for="inp1">
<input id="inp1" value="100">
</lebel>

<a href="aaa.php" id="aaa1" class="b2" target="_blank">aaa</a>
<a href="ccc.php" id="aaa2" class="b2" target="_blank">ccc</a>
<a href="ddd.php" id="aaa3" class="b2" target="_blank">ddd</a>
*/


2.9.3 Create "img" element.

First parameter:
a. array
<data of element> ::= [<string src>,...,<string src>]

b. string
<data of element> ::= <string src>

Example:

html:

<label for="inp1">
<input id="inp1" value="100">
</lebel>

js CompactDOM:

attribute={add:"after",tag:"img", id:"x", width:"30%"}
data=["CIMG1973.jpg","CIMG1986.jpg"];
inp.create(data, attribute);
/*
<label for="inp1">
<input id="inp1" value="100">
</lebel>

<img src="CIMG1986.jpg" id="x1" width="30%">
<img src="CIMG1973.jpg" id="x2" width="30%">
*/
attribute.id="s";
inp.create("CIMG1987.jpg", attribute);
/*

<label for="inp1">
<input id="inp1" value="100">
</lebel>

<img src="CIMG1987.jpg" id="s" width="30%">
<img src="CIMG1986.jpg" id="x1" width="30%">
<img src="CIMG1973.jpg" id="x2" width="30%">

*/

2.9.5 Create "div","span","textarea","button","p","h1"-"h6" elements.

First parameter:
a. array
<data of element> ::= [<text>,...,<text>]
<value or text> :: = <string|number>

b. number 
The number of elements with the same attributes to be created.

c. string
It is allowed to be used in cases when data is determined for only one element. 

Example:

html:

<div id="demo"></div>

<label for="inp1">
<input id="inp1" value="100">
</lebel>

js CompactDOM:


demo=_("demo");
attribute={tag:"div", id:"x", class:"b2" }
demo.create(["Hallo","Word"],attribute);

/*
<div id="demo" class="b" >
	<div id="x1" class="b2">Hallo</div>
	<div id="x2" class="b2">Word</div>
</div>
*/

demo.create("Only Hallo",attribute);
/*
<div id="demo" class="b" >
	<div id="x1" class="b2">Hallo</div>
	<div id="x2" class="b2">Word</div>
	<div id="x" class="b2">Only Hallo</div>
</div>
*/

attribute={add:"after", tag:"div", id:"xa", class:"b2" }
demo.create(["Only Hallo After"],attribute);

/*
<div id="demo" class="b" >
	<div id="x1" class="b2">Hallo</div>
	<div id="x2" class="b2">Word</div>
	<div id="x" class="b2">Only Hallo</div>
</div>
<div id="xa" class="b2">Only Hallo After</div>
*/

attribute.add="befor";
attribute.id="xb";
demo.create(["Only Hallo Befor"],attribute);
/*
<div id="xb" class="b2">Only Hallo Befor</div>
<div id="demo" class="b" >
	<div id="x1" class="b2">Hallo</div>
	<div id="x2" class="b2">Word</div>
	<div id="x" class="b2">Only Hallo</div>
</div>
<div id="xa" class="b2">Only Hallo After</div>
*/

attribute={add:"after", tag:"div", id:"xa", class:"b2 b4" }
demo.create(2,attribute);

/*
<div id="xb" class="b2">Only Hallo Befor</div>
<div id="demo" class="b" >
	<div id="x1" class="b2">Hallo</div>
	<div id="x2" class="b2">Word</div>
	<div id="x" class="b2">Only Hallo</div>
</div>
<div id="xa1" class="b2 b4"></div> 
<div id="xa2" class="b2 b4"></div>
<div id="xa" class="b2">Only Hallo After</div>
*/

2.10 Method - remove.

This method removes one or more elements.

_(<selector>).remove();

html:

<label for="b11">label A:
<input value="a b c" type="text" id="b11" name="b11>
</label>
<label for="b12">label B:
<input value="b" type="text" id="b12" name="b12">
</label>
<label for="b13">Label C:
<input value="c" type="text" id="b13" name="b13">
</label>

<input value="login" type="submit" id="x" class="b2">

js CompactDOM:

_("label[for^='b1']").remove();
_("#x").remove();


2.11 Method - send *.

This method sends data using the Hypertext Transfer Protocol over HTTP-GET,
HTTP-POST, or XMLHttpRequest (Ajax).

_(<selector|null>).send(<parametr>); 
<parametr>::=<string|null|object>

2.11.1 Reload webpage or redirect to another webpage.

<selector>::=<null>
<parametr>::=  <string webpage URL>

Example:
_().send("?la=en");

2.11.2 Submit a form.

<selector>::=<null|form-selector>
<parametr>:: = <null>

If there are several forms in an ntml document, then the selector 
must be defined, otherwise it may not be set (null).

Example submit form with selector:

_("#form1").send(); //Submit form with id="form1" 
_("#form2").send(); //Submit form with id="form2" 

Form element attributes can be added or changed 
using the "attributes" method.(see section 2.1 above)

form1 =_("#form1");
form1.attribute("action","?t=3");//set action 
form1.send(); //Submit form with id="form1";

Example submit  tag form.

_().send(); 

2.11.3 Sends data over XMLHttpRequest (Ajax).

<selector>::=<null|form-selector> (see section 2.2 above)
<parametr>:: = <object>
<object properties> ::= <url|method|append|data|func|to|debug>

a.
<url>::=<string url of ajax-request|null>

If the property is not defined(null), then the request url
is set by the value of the action attribute of the form tag.

b.
<method>::=<string method of ajax-request|null>

If the property is not defined(null), then the request method
is set by the value of the "method" attribute of the form tag.
If the value of the property "method" and the value of the attribute 
"method" of the form tag are not defined, then by default, 
the value "get" is set.

c. 
<append>::=<array|null>

<array>::=[<name>,<value>,<filename>|null]|[<array>,<array>,...]
<name>::= <string name of the form field>
<value>::= <string|Blob form field's value>
<filename>::=<string|null optional>

Allowed only if the "post" method is specified.
If the property is defined, then the form is supplemented with elements,
the attributes of which are selected from the array.


Example of append:array.

Append only one element
For field's type="file":
append:['img1', myFileInput.files[0], 'img1.jpg']
append:['img1', blob , 'img1.jpg']

For other types of fields:
append:["name","tom"]

Append some elements
append:[
	["fname","tom"],
	["lname","sojer"],
	['img1', blob , 'img1.jpg'] 
]

d.
<data>::=<string|null>

d.1
If the "post" method is specified and the "date" property is not defined,
then the value of the "date" parameter is created for all form fields, 
otherwise the value of the "date" method is used.

d.2
If the "get" method is specified and the value of the "date" property
is defined, then the value of the "date" property complements the 
value of "url". 
In this case, the coincidence of the names "get" of 
the parameters "url" and "date" is checked. 
If matching names are found in "url", the "get" 
value of the "url" will be replaced with the value of the 
corresponding parameter from the "date" property.

Example:

url = "?a=1&b=2";
data = "?a=5&d=3";
ajax_request = "?a=5?b=2&d=3";

d.3
If it is required to automatically supplement the PHP sesision_id 
into the get parameter url, then it is necessary to define the value of the 
variable sid of Java Script in the php-code. 

<?php
$sid = session_id();
.....
.....
?>

<script>
var sid = "<?=$sid?>";
</script>

e. 
<to>::=<string selector of element>

The "to" property defines the  selector of element into which 
the ajax-response should be inserted.

Example of "to" property.
to:"#modal" // selector for element with id="modal"

f. 
<func>::=<null|callback function> 

f.1
If the "func" property is defined, then the specified function will be called 
after the request completes. 
The following parameters will be passed to this function:
rsp - string ajax-response;
to - string selector(see e. above);
url - string ajax-request;

Example:

myFunction = function(rsp, to, url){
......
......
};

obj={url:"?t=5",to:"#modal",func:myFunction};
_().send(obj);

f.2
If the "func" property is undefined, then  ajax-response will be inserted
into the element whose selector was defined in the "to" property(see e. above)

Example:

obj={url:"?t=5",to:"#modal"};
_().send(obj);

e.
<debug>::=<1|true>
If this debug property is defined, then information is displayed in the console.
console.log({rsp:rsp,to:to,func:func,url:url})  

Example:
obj={url:"?t=5",to:"#modal",debug:1};
_().send(obj);

Attention!
If this property is undefined, but errors are detected in the PHP code, 
the information in the console is also displayed. 

2.12 Method "modal" *

The "modal" method creates html tags for the modal window.

_(<selector>|null).modal(<string content>|null);

If "selector" is not defined, then it defaults to "#modal".
A method call without parameters for each selector must be executed only once.
In this case, all the necessary tags will be added to the html body.
The method call with the "content" parameter can be executed in cases 
when it is necessary to insert content into a modal window. 

See CSS See below in Append 1.

a. Example. Create modal with default selector id="#modal"

_().modal();
console.log(_("body").content());

/*	
<div id="modal" class="RB BS">
<div class="modal_close">×</div>
<div id="modal_content"></div>
</div>
<div id="modal_gray_layer"></div>
*/

b. Example. Insert content in modal selector id="#modal"

html:

<button id="test5" >ajax request to callback function viewModal</button>


js CompactDOM:

viewModal = function(rsp, to)
{
	_(to).modal(rsp); // rsp - content from ajax-response
};

test5 = function(){
	attr={url:"?t=5",to:"#modal",func:viewModal};
	_().send(attr);
}

_("#test5").click(test5);

2.13 Method "resize"

_(<selector>).resize(<null|number padding-bottom in pixel);

This method automatically changes the height of the elements
so that the content is displayed completely without vertical scrolling. 
If the parameter is specified, then the automatically calculated 
height is added to the specified value. 

html:

<style>
	textarea{
	width:100%;
	height:0px;
	padding:10 10 0 10;
	overflow:hidden;
}
</style>

<textarea>content 1</textarea>
<textarea>content 2</textarea>
<textarea>content 3</textarea>
<textarea>content 4</textarea>

js CompactDOM:

_("textarea").resize();

_("textarea").resize(10); 

_("textarea").change(function(e){
	el=e.target;
	_(el).resize();
	}
); 


3. Auxiliary methods not related to elements of HTML DOM.

<auxiliary methods>::__.<method>([<parameter>[, <parameter>[, ... <parameter>]]])[.<property>];

3.1 Method "ins"

<out> = __.ins(<string RegExp pattern>,<tested string|array>,<replaced string|null|number>); 
<out>::= <number|boolean|array>

The first parameter is the regular expression pattern
The method checks the second parameter for a match against the regular expression pattern.
The third parameter is a string to which the second parameter is replaced in case of a match 
or third parameter is number=1.


a. Call method with two parameters 

If the second parameter is an array, then in case of a match it returns the index
of the array element, otherwise -1.
If the second parameter is a string, then in case of a match,
it returns true, otherwise a false.

Example a:

str="second parameter is an array";

pattern1="array$"
out=__.ins( pattern1, str); //true

pattern2="(second|parameter)";
out=__.ins( pattern2, str); //true

pattern3="method";
out=__.ins( pattern3, str); //false

arr=["second","is","an","array"];

out=__.ins( pattern1, arr); // 3
out=__.ins( pattern2, arr); // 0
out=__.ins( pattern3, arr); // -1

b.Call with three parameters.
 
If the second parameter is an array, then in case of a match with
the pattern, replaces the values of all elements of the array
by the value of the third parameter and returns an array.
If the second parameter is a string, then in case of a match, 
replaces all values that match the pattern with the value of the third
parameter and returns a string.
If the third parameter is 1, then the method splits the string from second
parametr using pattern and returns an array. 


Example b:

See arr,str, pattern1,pattern2,... from example a.

repl_str = "***";

out=__.ins( pattern1, str, repl_str); // "second parameter is an ***"
out=__.ins( pattern2, str, repl_str); // "*** parameter is an array"
out=__.ins( pattern3, str, repl_str); // "second parameter is an array"
out=__.ins( pattern1, arr, repl_str); // ["second","is","an","***"]
out=__.ins( pattern2, arr, repl_str); // ["***","is","an","array"]
out=__.ins( pattern3, arr, repl_str); // ["second","is","an","array"]

str="second parameter is an array";
out=__.ins( "\\s", str, 1); // 
console.log(out); //Array(5) [ "second", "parameter", "is", "an", "array" ]

3.2 Method "url".

<out>=__.url(<string url>,<string|number>);
The first parameter is string url.

a. The second parameter is string.

<data>::=<name=value>[&<name=value>...]

The method combines the get-parameters specified in the first parameter of function
and the get-parameters from the second parameter of function.
In this case, the coincidence of the names of the get-parameters 
in parameter of function is checked.
If the names of the get-parameters match, then values in the first parameter of function
replaced with the values of the  get-parameters from the second parameter of function.

Example a:

url="https://www.alto-booking.com/demo/timeCalculator/abc.php?a=1&b=2";
data="a=5&d=f";
console.log( __.url(url, data)); 
//https://www.alto-booking.com/demo/timeCalculator/abc.php?a=5&b=2&d=f


a. The second parameter is number.

if value is 0, then method returns base name of url.
if value is 1, then method returns object get-parameters of url:
{
	<name of get-parametr>:<value of get-parametr>,
	<name of get-parametr>:<value of get-parametr>
	.....
}

if value is 2, then method returns array:
[
	<url base name>,
	{
		<name of get-parametr>:<value of get-parametr>,
		<name of get-parametr>:<value of get-parametr>
		.....
	}
]

Example b:

url="https://www.alto-booking.com/demo/timeCalculator/abc.php?a=1&b=2";
console.log( __.url(url,0)); //abc.php
console.log( __.url(url,1)); //Object { a: "1", b: "2" }
console.log( __.url(url,2)); //Array [ "abc.php", {a: "1", b: "2"} ]

3.3  Method "sid".

<out>::=__.sid(<string url>);

The method is applied if is required to automatically supplement the PHP sesision_id 
into the get parameter url, then it is necessary to define the value of the 
variable sid of Java Script in the php-code. 

<?php
$sid = session_id();
.....
.....
?>

<script>
var sid = "<?=$sid?>";
console.log( url); //46db92d38486c29765def0801347cd51

url="https://www.alto-booking.com/demo/timeCalculator/abc.php?a=1&b=2";
url = __.sid(url);
console.log( url);
// https://www.alto-booking.com/demo/timeCalculator/abc.php?sid=46db92d38486c29765def0801347cd51&a=1&b=2
</script>

4. Auxiliary properties and method env().

	__.dno="none"
	__.dbl="block"
	__.dtc="table-cell"
	__.din="inline";
	__.dib="inline-block"
	__.str="string"
	__.num="number"
	__.boo="boolean"
	__.pc="center"
	__.pcx="center-x"
	__.pcy="center-y"
	__.und=undefined

	Method __.env()
	Propertis:  body, wbr, hbr, wsc, hsc, dpr
	
	Element body:
	__.env().body 

	Browser window size width height in pixels:
	__.env().wbr 
	__.env().hbr


	Screen resolution width height in pixels:
	__.env().wsc
	__.env().hsc

	Ratio of the resolution in pixels for display device:
	__.env().dpr
	
	a. Example __.pc:
	
	Element with id="modal" is centered 
	horizontally and vertically:
	
	_("#modal").position("center"); 
	or
	_("#modal").position(__.pc);
	
	object.style.textAlign="center"; 
	or
	object.style.textAlign=__.pc; 
	
	b. Example __.str:
	
	Check type of variable	
	
	if(typeof a == "string")
	or
	if(typeof a == __.str)
	
	c. Example __.env():
	
	console.log(__.env()); 
	
	//Object { body: body, wbr: 1280, hbr: 551, wsc: 1280, hsc: 720, dpr: 1.5 }

	console.log(__.env().hbr);//551
	console.log(__.env().hsc);//720
	console.log(__.env().dpr);//1.5


Append 1. CSS for method "modal".

	.RB{
		border: 1px solid #85A0C9;
		border-radius: 5px;
		-webkit-border-radius:5px;
		-moz-border-radius: 5px;
	}
	.BS{box-shadow:3px 3px 3px rgba(0, 0, 0, 0.5);}
	
	#modal{
		display:none;
		position:absolute;	
		z-index:1;	
		top:0;
		left:0;	
		background-color: #ffffff;
	}
	
	#modal_content{
		max-width:740px;
		display:table-cell;
		padding:40 20 20 20;	
		font-size:14pt;
	}
	
	.modal_close
	{
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
	
	#modal_gray_layer{
		width:100%;
		height:100%;
		position:absolute;
		top:0px;
		left:0px;	
		background: rgba(0, 0, 0, 0.1);
		display:none;	
	}
	
Append 2. CSS for method "scroll" without parametr
(create element scrollup and scroll events handler)

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
	
